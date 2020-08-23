<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use DB;
use App\Models\SubModel;
use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Models\ImageModel;
class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aCategories = DB::select('SELECT  categoriess.*, COUNT(sub_categoriess.id) AS countsub, COUNT(case sub_categoriess.visible when 1 then 1 else null end) AS countvis
        FROM categories categoriess
        LEFT JOIN sub_categories sub_categoriess ON sub_categoriess.category_id = categoriess.id
      
        WHERE  categoriess.deleted_at is null and sub_categoriess.deleted_at is null
        GROUP BY categoriess.id
        ');
        
        $aSubCategories = SubModel::where('sub_categories.visible' ,'=', '1')
        ->get();

        $aProducts = ProductsModel::where('products.deleted_at' ,'=', null)
        ->get();

        $aSubCategories = DB::select('SELECT  sub_categoriess.*, COUNT(pr.id) AS countpr
        FROM sub_categories sub_categoriess
        LEFT JOIN products pr ON pr.subcategory_id = sub_categoriess.id
        WHERE  sub_categoriess.deleted_at is null 
        and pr.deleted_at is null
        GROUP BY sub_categoriess.id
        ');

        $aImages = ImageModel::get();
        
        return view('frontend/catalog.index',compact('aCategories','aSubCategories','aProducts','aImages'));
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
    }
}
