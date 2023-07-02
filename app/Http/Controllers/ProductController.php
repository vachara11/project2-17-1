<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index(){
        $product = Product::Paginate(10);
        return view('admin.product.index',compact('product'));
    }

    public function create(){
        return view('admin.product.create');
    }

    public function insert(Request $request){
        $pro = new Product();

        if($request->hasFile('image')){
            $filename = Str::random(10). '.' . $request->file('image')->getClientOriginalExtension();        //sdfrftgtgg.png
            $request->file('image')->move(public_path(). '/backend/img/img_pro/', $filename);
            $pro->image =  $filename;
        } else{
            $pro->image = 'nopic.jpg';
        }

        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->description = $request->description;
        $pro->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','');
        return redirect()->route('pro.index');
    }

    public function delete($id){
        $product = Product::find($id);
        if($product->image){
            File::delete(public_path(). '/backend/img/img_pro/'.$product->image);
        }
        $product->delete();
        alert()->success('ลบข้อมูลสำเร็จ','');
        return redirect()->route('pro.index');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request, $id){
        $pro = Product::find($id);

        if($request->hasFile('image')){
            if($pro->image){
                File::delete(public_path(). '/backend/img/img_pro/'.$pro->image);
            }
            $filename = Str::random(10). '.' . $request->file('image')->getClientOriginalExtension();        //sdfrftgtgg.png
            $request->file('image')->move(public_path(). '/backend/img/img_pro/', $filename);
            $pro->image =  $filename;
        } else{
            $pro->image = 'nopic.jpg';
        }

        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->description = $request->description;
        $pro->update();
        alert()->success('แก้ไขข้อมูลสำเร็จ','');
        return redirect()->route('pro.index');
    }

   

   
}
