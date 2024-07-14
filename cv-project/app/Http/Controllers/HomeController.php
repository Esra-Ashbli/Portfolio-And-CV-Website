<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello(){
        echo "<script> alert('Hello.\\nWelcome to my website!.');</script>";
    }

    public function message(){
        echo "<script> alert('Please fill all boxes to be able to send the message!!.');</script>";
        
    }
}
