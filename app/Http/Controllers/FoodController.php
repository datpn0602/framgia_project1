<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Category;
class FoodController extends Controller
{
    public function show()
    {
         $foods = Food::all();
         return view('foods.show', compact('foods'));
    }
    public function getAdd()
    {
        $category = Category::all();  
    	return view('foods.create', compact('category'));
    }

    public function postAdd(Request $request)
    {
    	$request->validate(
            [
                'name' => 'required|unique:foods,name|max:255',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'required',
                'description' => 'required',
                'information' => 'required',
                'category' => 'required',
            ],
            [
                'name.required' => 'Yêu cầu nhập tên.',
                'name.unique' => 'Tên đã tồn tại.',
                'price.required' => 'Yêu cầu nhập giá',
                'category' => 'Yêu cầu chọn danh mục',
                'description.required' => 'Yêu cầu nhập mô tả',
                'information.required' => 'Yêu cầu nhập thông tin sản phẩm',
                'avatar.required' => 'Yêu cầu chọn ảnh',
                'avatar.mimes' => 'Ảnh phải có đuôi là jpeg, png, gif, svg',
            ]
        );
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $file->move(config('image.paths.resource'), $file->getClientOriginalName());
            $food = Food::create([
                'name' => $request->name,
                'price' => $request->price,
                'information' => $request->information,
                'description' => $request->description,
                'size' => $request->size,
                'image' => $file->getClientOriginalName(),
                'category_id' => $request->category,
                'rating' => 1,
                'image_detail' => '/img/pizza.jpg',
            ]);
            return back()->with('status','Create successful.');
        }
    }
}
