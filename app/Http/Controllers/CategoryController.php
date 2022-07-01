<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        // echo "hey";

        $categories = Category::latest()->paginate(3);
        return view('categories.list', ['categories' => $categories]);
    }


    //to open form
    public function create()
    {
        return view('categories.new');
    }


    //for saving new data in db
    public function store(Request $request)
    {
        //validation
        $request->validate([

            'title' => 'required|unique:categories|max:200'
        ]);
        // dd($request->title);

        
        $category = new Category();
        $category->title = $request->title;

        $category->save();

        return redirect('/')->withSuccess('New Category Created');
    }

    //for fetching data from db
    public function edit($id)
    {
        // dd($id);
        $category = Category::where('id', $id)->first();
        return view('categories.edit',compact('category'));
    }

    //to update data in db(clicking update button)
    public function update(Request $request, $id){
        $category = Category::where('id', $id)->first();

        $category->title = $request->title;
        $category->save();

        return redirect('/');

    }

    public function destroy($id){
        $category = Category::whereId($id)->first();
        $category->delete();

        return redirect ('/');
    }


}
