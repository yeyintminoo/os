<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
           
           'name'=> 'required',
           'photo'=>'required',

           ]);
        // file upload
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/categoryimg'),$imageName);
        $myfile = 'backend/categoryimg/'.$imageName;

        // data insert
        $category = new Category;
        
        $category->name=$request->name;
        $category->photo=$request->photo;
        
        // http_redirect()
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('backend.categories.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('backend.categories.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $request->validate([
        //    'name'=> 'required',
        //    'photo'=>'sometimes',
        // ]);
        //    if ($request->hasFile('photo')){
        //     $imageName = time().'.'.$request->photo->extension();
        //     $request->photo->move(public_path('backend/categoryimg'),$imageName);
        //     $myfile = 'backend/categoryimg/'.$imageName;

        //      $category = Category::find($id);
        //      $category->name=$request->name;
        //      $category->photo=$myfile;
        //      $category->save();

        //      return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $category= Category::find($id);
        // $category->delete();
        // // redirect
        // return redirect()->route('categories.index');
    }
}
