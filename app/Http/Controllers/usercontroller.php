<?php

namespace App\Http\Controllers;

use App\Models\reg;
use App\Models\product;
use App\Models\cart;
use App\Models\buy_now;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function viewcart()
    {
        $userid = session('sessid');
        $data['result'] = cart::join('products', 'products.id', '=', 'carts.productid')
            ->where('carts.userid', $userid)
            ->where('carts.status', 'cart')


            ->get();
        $data['total'] = cart::where('status', 'cart')->where('userid', $userid)->sum('total');
        // print_r(($data['total']));
        // exit();


        return view('user.viewcart', $data);
    }
    public function viewcartaction()
    {
        return redirect('viewcart');
    }

    public function vieworders()
    {
        $userid = session('sessid');
        $data['result'] = cart::join('products', 'products.id', '=', 'carts.productid')
            ->where('carts.userid', $userid)
            ->where('carts.status', 'order')
            ->select('carts.total', 'carts.quantity', 'products.prize', 'products.name', 'products.image', 'carts.id')
            ->get();
        return view('user.vieworders', $data);
    }
    public function viewproduct()
    {
        $data['result'] = product::get();
        return view('user.viewproduct', $data);
    }
    public function myprofile()
    {
        $userid = session('sessid');
        $data['result'] = reg::where('id', $userid)->get();
        return view('user.myprofile', $data);
    }
    public function myprofileaction(Request $req, $id)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $number = $req->input('number');
        $password = $req->input('password');
        $gender = $req->input('gender');
        $data = [
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'password' => $password,
            'gender' => $gender
        ];
        reg::where('id', $id)->update($data);
        return redirect('/myprofile');
    }
    public function addtocart($id)

    {
        $data['result'] = product::where('id', $id)->get();
        return view('user.addtocart', $data);
    }

    public function buynow()
    {
        $userid = session('sessid');
        $data['result'] = cart::join('products', 'products.id', '=', 'carts.productid')
            ->where('carts.userid', $userid)
            ->where('carts.status', 'cart')
            ->select('carts.total', 'carts.quantity', 'products.id', 'products.prize', 'products.name', 'products.image', 'carts.id')
            ->get();
        $data['total'] = cart::where('status', 'cart')->where('userid', $userid)->sum('total');

        return view('user.buynow', $data);
    }
    public function buynowaction(Request $req)
    {
        $userid = session('sessid');
        $firstname = $req->input('fname');
        $lastname = $req->input('lname');
        $address1 = $req->input('address1');
        $address2 = $req->input('address2');
        $city = $req->input('city');
        $state = $req->input('state');
        $postcode = $req->input('postcode');
        $number = $req->input('number');
        $email = $req->input('email');
        $method = $req->input('method');
        $data = [
            'userid' => $userid,
            'fname' => $firstname,
            'lname' => $lastname,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'number' => $number,
            'email' => $email,
            'method' => $method,

        ];
        buy_now::insert($data);
        $cart = ['status' => "order"];
        cart::where('status', "cart")->where('userid', $userid)->update($cart);
        return redirect('/placeorder');
    }
    public function addtocartaction(Request $req)

    {
        $productid = $req->input('id');
        $quantity = $req->input('quantity');
        $total = $req->input('total');
        $userid = session('sessid');
        $data = [
            'productid' => $productid,
            'quantity' => $quantity,
            'total' => $total,
            'userid' => $userid
        ];

        cart::insert($data);
        return redirect('/viewcart');
    }
    public function deletecart($id)

    {
        cart::where('id', $id)->delete();
        return redirect('/viewcart');
    }
    public function placeorder()
    {
        return view('user.placeorder');
    }
    public function adminlogin()
    {
        return view('user.adminlogin');
    }
}
