<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $this->validate($request,[
            'image'=>'required|mimes:jpeg,bmp,jpg,png,webp|between:1, 6000',
        ]);
        $image_name = $request->file('image')->getRealPath();
        Cloudder::upload($image_name, null);

        return response()->json([
            'code' => 201,
            'message' => 'Lấy ảnh thành công',
            'data' => Cloudder::getResult()
        ], 201);
    }

    public function uploads(Request $request){
        $images = $request->file('files');
        if ($request->hasFile('files')) :
            $data = array();

            foreach ($images as $item):
                $image_name = $item->getRealPath();
            Cloudder::upload($image_name, null);
                $result = Cloudder::getResult();
                array_push($data,$result);
            endforeach;

            return response()->json([
                'code' => 201,
                'message' => 'Lấy ảnh thành công',
                'data' => $data
            ], 201);
        else:
            return '';
        endif;
    }
}
