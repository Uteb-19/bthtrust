<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }

    public function users(){
        $userslists = User::get();
        return view('home.users',compact('userslists'));
    }

    public function edit($id)
    {
		$user = User::where('id',$id)->first();
        return view('home.edit',compact('user'));
    }

	public function update(Request $request)
    {
		$id = $request->input('id');
		// if($request->file('image') == ''){
		// 	$input['image'] = $request->old_image;
		// }
		// print_r($request->all()); die;
        $request->validate([
            'username' => 'required|alpha|max:255',
            'email' => 'required|email|max:255',
        ]);

        $input = request()->except(['_token']);
    
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
		
          
        User::where('id',$id)->update($input);
    
        return redirect()->route('users')->with('success','User updated successfully');
    }

	public function destroy($id){
        User::find($id)->delete();
        return redirect()->route('users')->with('success','User Deleted Successfully.');
    }

    public function products(){
        $products = Product::get();
        return view('home.products',compact('products'));
    }

    public function addproduct(){
        return view('home.addproduct');
    }

    public function addproductdetail(Request $request){
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $user = Product::create($input);

        return redirect('products')->with('success', "Product successfully added.");
    }

    public function editproduct($id)
    {
		$product = Product::where('id',$id)->first();
        return view('home.editproduct',compact('product'));
    }

    public function updateproduct(Request $request)
    {
		$id = $request->input('id');
        $input = request()->except(['_token']);
    
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
		
          
        Product::where('id',$id)->update($input);
    
        return redirect()->route('products')->with('success','Product updated successfully');
    }

    public function destroyproduct($id){
        Product::find($id)->delete();
        return redirect()->route('products')->with('success','Product Deleted Successfully.');
    }
}
