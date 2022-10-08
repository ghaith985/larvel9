<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;




class UserController extends Controller
{
    public  function showUser(): string
    {
        return 'all user is here';
    }
    public  function getview(){
        $data=[];
        $data['name']='ghaith';
        $data['id']=5;
        $data['gender']='male';
$obj=new \stdClass();
        $obj->name='lamar';
        $obj->age='31';
        $obj->gender='female';
        return view('welcome',compact('data'));

    }
    public function getbland(){
        return view('blanding');
    }
}
