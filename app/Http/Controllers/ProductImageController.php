<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use File;

class ProductImageController extends Controller
{
    //
    public function uploads(Request $request)
    {
    	if($request->hasFile('file')) {
    		$imageFile = $request->file('file');
    		$imageName = uniqid().$imageFile->getClientOriginalName();
    		$imageFile->move(public_path('source/uploads'),$imageName);
    	}
    	$productImage = new ProductImage;
    	$productImage->productId = 1;
    	$productImage->image = $imageName;
    	$productImage->save();
    	return response()->json(['status' => true, 'message' => 'Upload Success !']);
    }
    public function index()
    {
        return view('page.index');
    }
}
