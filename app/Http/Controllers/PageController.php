<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPage()
    {
        $page = [
            [
                "nama" => "Shavira Diva Pink-Pinka Salsabilla",
                "nim" => "235150601111024",
                "quotes" => "sehat-sehat semuanya^^"
            ]
        ];

        return view("page/welcome");
    }
}