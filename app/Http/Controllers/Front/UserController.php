<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function showUserName(){
       return 'Michael Gabriel';
   }

   public  function getIndex(){

     //  return view('front/Test');

       $obj= new \stdClass();
       $obj -> name ='Richard';
       $obj -> national_id ='444-5656-747';
       $obj -> gender ='male';
       $basicdata=[];
       $basicdata['national_id']='2545764684684876';
       $basicdata['name']='Michael Jacob Gabriel';
       $basicdata['address']='Zayton, Cairo,Egypt';
       $basicdata['Title']='Software Developer';
       $basicdata['Grade']='Trainee';
//       $basicdata=['name'=>'Michael','address'=>'Cairo','Phone'=>'01271427744'];
//       return view('welcome',compact('obj'));
       return view('welcome',compact('basicdata')) ;

   }
}
