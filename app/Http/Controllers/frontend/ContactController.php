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
    
    public function mail(Request $request){
        
        $name =  $request['name'];
        
        $email =  $request['email'];
        
        $subject =  $request['subject'];
        
        $message =  $request['message'];

        $content="From: $name \n Email: $email \n Message: $message";
        $recipient = "brizuelaortizg@gmail.com";
        $mailheader = "From: $email \r\n";

        mail($recipient, $subject, $content, $mailheader) or die("Error!");

        return view('frontend/home.index');
    }

   


}
