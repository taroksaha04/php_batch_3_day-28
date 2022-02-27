<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected  $products;
    protected $product;
    public function index(){
        return view('product.add');
    }
    public function add(Request $request)
    {
        //return $request->all();

        $this->product = new Product();
        $this->product->name = $request->name;
        $this->product->category = $request->category;
        $this->product->brand = $request->brand;
        $this->product->price = $request->price;
        $this->product->description = $request->description;
        $this->product->image = $request->image;
        $this->product->save();
        return redirect()->back()->with('message','Product info save successfully.');
    }
    public function manage()
    {

        $this->products =  Product::orderBy('id','desc')->get();
        return view('product.manage-product',['products'=>$this->products]);
    }
    public function edit($id){
        $this->product = Product::find($id);
        return view('product.edit-product',['product' => $this->product]);
    }
    public function update(Request $request, $id)
    {
        $this->product = Product::find($id);
        $this->product->name = $request->name;
        $this->product->category = $request->category;
        $this->product->brand = $request->brand;
        $this->product->price = $request->price;
        $this->product->description = $request->description;
        $this->product->image = $request->image;
        $this->product->save();

        return redirect('/manage-product')->with('message','product info update successfull');
    }
    public function delete($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/manage-product')->with('message','product info Delete successfull');
    }

    //for image upload
//    public function create(Request $request)
//    {
//       // return $request->file('image');
//       $image = $request->file('image');
//       $imageName = $image->getClientOriginalName();
//       $directory = 'product-images/';
//       $image->move($directory,$imageName);
//       //return 'ok';
//        $url = $directory.$imageName;
//        return asset($url);
//    }

}
