<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\product;
use App\Models\admin;
use App\Models\reg;
use App\Models\buy_now;


class adminController extends Controller
{

    public function index()
    {
        
        
        return view('admin.index');
    }

    //about
    public function addabout()
    {
        return view('admin.addabout');
    }

    public function addaboutaction(Request $req)
    {
        $title = $req->input('title');
        $discription = $req->input('discription');
        $data = [
            'title' => $title,
            'discription' => $discription
        ];
        about::insert($data);
        return redirect('/addabout');
    }
    public function viewabout()
    {
        $data['result'] = about::get();

        return view('admin.viewabout', $data);
    }
    public function deleteabout($id)
    {
        about::where('id', $id)->delete();
        return redirect('/viewabout');
    }
    public function editabout($id)
    {
        $data['result'] = about::where('id', $id)->get();

        return view('admin.editabout', $data);
    }
    public function editaboutaction(Request $req, $id)

    {
        $title = $req->input('title');
        $discription = $req->input('discription');
        $data = [
            'title' => $title,
            'discription' => $discription
        ];
        about::where('id', $id)->update($data);
        return redirect('/viewabout');
    }
    //end about

    //product start

    public function addproduct()
    {
        return view('admin.addproduct');
    }
    public function addproductaction(Request $req)
    {
        $productname = $req->input('name');
        $productprize = $req->input('prize');
        $productdiscription = $req->input('discription');
        $image = $req->file('image');
        $file=$image->getClientOriginalName();
        $image->move(public_path().'/product/',$file);
        // echo $file;
        // exit();
        $data = [
            'name' => $productname,
            'prize' => $productprize,
            'discription' => $productdiscription,
            'image'=>$file

        ];
        product::insert($data);
        return redirect('/viewproduct');
    }
    public function viewproduct()
    {
        $data['result'] = product::get();

        return view('admin.viewproduct', $data);
    }
    public function deleteproduct($id)
    {
        product::where('id', $id)->delete();
        return redirect('/viewproduct');
    }
    public function editproduct($id)
    {
        $data['result'] = product::where('id', $id)->get();

        return view('admin.editproduct', $data);
    }
    public function editviewaction(Request $req, $id)

    {
        $name = $req->input('name');
        $prize = $req->input('prize');
        $discription = $req->input('discription');
        $data = [
            'name' => $name,
            'prize' => $prize,
            'discription' => $discription
        ];
        product::where('id', $id)->update($data);
        return redirect('/viewproduct');
    }

    //endprodu

public function vieworders()
{
   
    
    $data['result']=buy_now::get();
    return view('admin.vieworders',$data); 
}
    
    
        


    public function viewusers()

    {
        $data['result']=reg::get();
        return view('admin.viewusers',$data);
        
    }

    public function adminprofile()
    {
        $data['result']=admin::get();
        return view('admin.adminprofile',$data);
    }
    public function adminprofileaction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $data = [
            'username' => $username,
            'password' => $password
        ];
        admin::where('id',1)->update($data);
        return redirect('/adminprofile');
    }
    
    public function cancel($id)
    {
     $data=['paymentstatus'=>"cancel"];
     buy_now::where('id',$id)->update($data);
        return redirect('/adminvieworders');
    }

    public function payementcomplted($id)
    {
        $data=['paymentstatus'=>"payement completed"];
        buy_now::where('id',$id)->update($data);
        return redirect('/adminvieworders');
    }

    // public function cancelaction()
    // {
    //     return redirect('/cancel');
    // }
    // public function approveaction()
    // {
    //     return redirect('/approve');
    // }
}
