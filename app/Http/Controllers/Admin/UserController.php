<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = User::query();
        if ($search && strlen($search) > 0) {
            $query_builder = $query_builder->where('firstname','like','%'.$search.'%')
                ->orWhere('lastname','like','%'.$search.'%')
                ->orWhere('address','like','%'.$search.'%')
                ->orWhere('phone','like','%'.$search.'%')
                ->orWhere('email','like','%'.$search.'%')
                ->orWhere('birthday','like','%'.$search.'%');
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
        if ($sort && $sort == Sort::SORT_NAME_ASC) {
            $query_builder->orderBy('firstname', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_NAME_DESC) {
            $query_builder->orderBy('firstname', 'DESC')->get();
        }


        $users = $query_builder->paginate(10);
        return view('admin.users.table', ['list' => $users,'key_search'=>$search,'sort'=>$sort]);
    }
}
