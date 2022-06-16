<?php

namespace App\Http\Controllers;

use App\Models\Visitor;

class MainController extends Controller {

    public function welcome() {
        return view('welcome');
    }

    public function container() {
        return view('container');
    }

    public function informative() {
        return view('informative');
    }

    public function callback() {
        $name = "не вказано";
        $phone_number = "не вказано";
        if (isset($_POST["name"])){
            $name = $_POST["name"];
        }
        if(isset($_POST["phone_number"])){
            $phone_number = $_POST["phone_number"];
        }

        $visitor = new Visitor($name, $phone_number);

        return view('callback', ['obj'=>$visitor]);
    }
}
