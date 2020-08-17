<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;

class FrontendController extends Controller
{
    //
     public function home(){
        
        // $items = Item::all();
     	$items = Item::orderBy('id','desc')->take(6)->get();
     	// dd($items);
    	return view('frontend.home',compact('items'));
    }

    public function frontenditems(){
        
        $subcategories = subcategory::take(3)->get();
    	return view('frontend.items', compact('subcategories'));
    }

    public function frontenddetail($id){
        

        $item= Item::find($id);
        // dd($item);
        return view('frontend.detail', compact('item'));
    }

    public function frontendcheckout(){
        
        // $items = Item::all();
        // $items = Item::orderBy('id','desc')->take(6)->get();
        // dd($items);
        return view('frontend.checkout');
    }

    public function frontendregister(){
        
        // $items = Item::all();
        // $items = Item::orderBy('id','desc')->take(6)->get();
        // dd($items);
        return view('frontend.register');
    }

    public function frontendprofile(){
        
        // $items = Item::all();
        // $items = Item::orderBy('id','desc')->take(6)->get();
        // dd($items);
        return view('frontend.profile');
    }

    public function frontendlogin(){
        
        // $items = Item::all();
        // $items = Item::orderBy('id','desc')->take(6)->get();
        // dd($items);
        return view('frontend.login');
    }

    public function getItems(Request $request){
        $sid = $request->sid;
        if($sid == 0){
            $items = Item::all();
        }else{
            $items = subcategory::find($sid)->items;
        }
        
        return $items;
    }
}
