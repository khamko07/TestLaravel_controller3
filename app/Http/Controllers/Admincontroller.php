<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Admincontroller extends Controller{
    function contact(){
        $name = "Khamko";
        $email = "khamko1191@gmail.com";
        $phone = "0977777777";
        $address = "Danang";
        $skills = [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP',
            'Laravel',
            'Vue.js',
            'React.js',
            'SQL'
        ];
        return view('contact', compact('name', 'email', 'phone', 'address', 'skills'));

    }
    function create(){
        return view('register');
    }
    function insert(Request $request){
        $request->validate([
            'fullname' => 'required |min:3 |max:50',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);
    }

}
