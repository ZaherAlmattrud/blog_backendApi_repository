<?php

namespace App\Http\Controllers\TheBlog;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Http\Resources\CategoryResource;
use Validator;
use Auth ;
use App\Http\Requests\TheBlog\StoreCategoryRequest;
use App\Http\Requests\TheBlog\UpdateCategoryRequest;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $allCategories = Category::all();

        return $this->sendResponse(CategoryResource::collection($allCategories), 'allCategories retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
   {
        $category = Category::create($request->all());
   
        return $this->sendResponse(new CategoryResource($category), 'Category created successfully.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $category = Category::findOrFail($id);
   
        return $this->sendResponse(new CategoryResource($category), 'Category retrieved successfully.');
   
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
    //  return ($id);

        $category = Category::findOrFail($id);

        $category->update( $request->except('_method') );

        return $this->sendResponse(new CategoryResource($category), 'Category updated successfully.');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      

        $category = Category::findOrFail($id);

        $category->delete() ;

        return $this->sendResponse(new CategoryResource($category), 'Category deleted successfully.');
  

 }
  
    
}
