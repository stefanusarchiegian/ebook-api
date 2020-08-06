<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller{

    public function me(){
        return [
            "nis" => 3103118127,
            "name" => "Stefanus Archiegian Krishna Pandu",
            "gender" => "Laki-laki",
            "phone" => 6281222222,
            "class" => "XII RPL 4"
        ];
    }
}
?>