<?php

namespace App\Http\Controllers\frontend;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoriesModel;
use App\Models\ProductsModel;
use App\Models\ContactModel;
use App\Models\SubModel;
use DB;
use Illuminate\Support\MessageBag;
use Auth;
use Hash;







class ContactController extends Controller {

    public function index() {


     
        
        return view('frontend/contact.index');
    }

    public function show() {
        //
    }
    

   


}
