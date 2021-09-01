<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $image_name = time() . '_' . random_int(1000000, 9999999) . '_' . random_int(1000000, 9999999) . '.' . $request->image->extension();
        $request->image->move(public_path('images/admin_data/images'), $image_name);
        return response()->json([
            'code' => 201,
            'message' => 'Lấy ảnh thành công',
            'data' => $image_name
        ], 201);
    }

    public function uploads(Request $request){
        $images = $request->file('files');
        if ($request->hasFile('files')) :
            foreach ($images as $item):
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = $time . '-'.random_int(100000,999999). $item->getClientOriginalName();
                $item->move(public_path('images/admin_data/images'), $imageName);
                $arr[] = $imageName;
            endforeach;
            $image = implode(",", $arr);
            return response()->json([
                'code' => 201,
                'message' => 'Lấy ảnh thành công',
                'data' => $image
            ], 201);
        else:
            return '';
        endif;
    }
}
