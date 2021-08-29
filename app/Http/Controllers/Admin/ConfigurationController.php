<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\User;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Configuration::query();
        if ($search && strlen($search) > 0) {
            $query_builder = $query_builder->Where('value','like','%'.$search.'%');

        }
        if ($sort && $sort == Sort::SORT_ID_ASC) {
            $query_builder->orderBy('id', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_ID_DESC) {
            $query_builder->orderBy('id', 'DESC')->get();
        }
        if ($sort && $sort == Sort::SORT_CREATED_AT_ASC) {
            $query_builder->orderBy('created_at', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_CREATED_AT_DESC) {
            $query_builder->orderBy('created_at', 'DESC')->get();
        }
        if ($sort && $sort == Sort::SORT_VALUE_ASC) {
            $query_builder->orderBy('storage', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_VALUE_DESC) {
            $query_builder->orderBy('storage', 'DESC')->get();
        }
        if ($sort && $sort == Sort::SORT_VALUER_ASC) {
            $query_builder->orderBy('ram', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_VALUER_DESC) {
            $query_builder->orderBy('ram', 'DESC')->get();
        }



        $configuration = $query_builder->paginate(10);

        return  view('admin.configuration.table', ['list' => $configuration,'key_search'=>$search,'sort'=>$sort]);
    }
}
