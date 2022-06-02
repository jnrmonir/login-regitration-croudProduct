<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function Dashboard(){
        return view('dashboard');
    }

    function allusers(){
        $usersall= User::get();
        return view('users.allusers',[
            'usersall'=>$usersall,
        ]);
    }

    function editusers($id){
        return view('users.editusers',[
            'users' => User::paginate(10),
            'userid'=>User::findorFail($id),
        ]);
    }

    function updateusers(Request $request){
        $uusers=User::findorFail($request->user_id);
        $uusers->name= $request->name;
        $uusers->email= $request->email;
        $uusers->password= $request->password;
        $uusers->city= $request->city;
        $uusers->country= $request->country;
        $uusers->status= $request->status;
        $uusers->save();
        return back()->with ('success','Category Update Successfully');
    }

    function deleteusers($id){
        $user_delete= User::findorfail($id);
        $user_delete->delete();
        return back();
    }

    function productpost(){
        return view('products.addproduct');
    }

    function productadd(Request $request){
        $product= new Product;
        $product->name=$request->name;
        $product->gender=$request->gender;
        $product->color=$request->color;
        $product->size=$request->size;
        $product->price=$request->price;
        $product->save();
        return back();
    }

    function allproduct(){
        $products=Product::all();
        return view('products.allproducts',[
            'products'=>$products,
        ]);
    }

    function editproduct($id){
        $product_edit= Product::findorfail($id);
        return view('products.editproduct',[
            'product_edit'=>$product_edit,
        ]);
    }

    function updateproduct(Request $request){
       $uproducts= Product::findorFail($request->product_id);
       $uproducts->name=$request->name;
       $uproducts->gender=$request->gender;
       $uproducts->color=$request->color;
       $uproducts->size=$request->size;
       $uproducts->price=$request->price;
       $uproducts->save();
       return back();
    }
    function deleteproduct($id){
        $product_delete= Product::findorfail($id);
        $product_delete->delete();
        return back();
    }

}
