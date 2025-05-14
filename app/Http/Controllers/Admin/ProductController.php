<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //


    public function saveOne(Request $request)
    {
        $profile = Product\Main::create($request->data);
        $images = collect($request->images)->each(function($item) use ($profile){
            Arr::set($data,'product_id',$profile->id);
            Arr::set($data,'img_path',Arr::get($item,'img_path'));
            Arr::set($data,'active',Arr::get($item,'active','0'));
            Storage::copy('tmp/product/'.Arr::get($item,'img_path'), 'product'.Arr::get($item,'img_path'));
            Product\Image::create($data);
        });
        return response()->json($profile);
    }

    public function listAll(Request $request)
    {
        $products = Product\Main::with('image')->Paginate(15);
        return response()->json($products);
    }

    public function editOne(Request $request, $param)
    {
        $product = Product\Main::with('images')->where('id',$param)->first();
        return response()->json($product);
    }

    public function modifyOne(Request $request, $param)
    {
        Product\Main::where('id',$param)->update($request->data);
    }

    public function changePrimaryPicture(Request $request, $param)
    {
        $productImage = Product\Image::query();
        $productImage->where('product_id',$param)->update(['active'=>0]);
        $productImage->where('id',$request->img_id)->update(['active'=>1]);
    }

    public function destroyOne(Request $request, $param)
    {
        Product\Main::where('id',$param)->delete();
    }



}
