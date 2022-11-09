<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladecontroller extends Controller
{
    public function control(){
        if(isset($_GET["chara"])){
            $chara=$_GET["chara"];
        }
        else{
            $chara="";
        }
        return view("home",["chara"=>$chara]);
    }
}
