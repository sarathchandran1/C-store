<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\about;
use App\Models\reg;
use App\Models\contact;



class project1controller extends Controller
{
  public function index()
  {
    $data['result'] = product::get();
    return view('index', $data);
  }
  public function about()
  {


    $data['result'] = about::get();
    return view('about', $data);
  }


  public function adminlogin()
  {
    return view('admin');
  }


  public function userlogin()
  {
    return view('userlogin');
  }



  public function useraction(Request $req)
  {


    $email = $req->input('email');
    $password = $req->input('password');
    $data = reg::where('email', $email)->where('password', $password)->first();
    if (isset($data)) {
      $req->session()->put(array('sessid' => $data->id));
      return redirect('/user');
    } else {
      return redirect('/userlogin');
    }
  }


  public function contact()
  {
    return view('contact');
  }
  public function contactaction(Request $req)
  {
   $name = $req->input('name');
   $phonenumber = $req->input('number');
   $email = $req->input('email');
   $username = $req->input('message');
   $data = [
      'name' => $name,
      'number' => $phonenumber,
      'email' => $email,
      'message' => $username

   ];
   contact::insert($data);

    return redirect('/contact');
  }

  public function userregister()
  {
    return view('userregister');
  }

  public function userregisteraction(Request $req)
  {
    $username = $req->input('name');
    $email = $req->input('email');
    $phonenumber = $req->input('number');
    $password = $req->input('password');
    $gender = $req->input('gender');
    $data = [
      'name' => $username,
      'email' => $email,
      'number' => $phonenumber,
      'password' => $password,
      'gender' => $gender

    ];
    reg::insert($data);
    return redirect('/userregister');
  }
  public function logout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/');
    }




  
}
