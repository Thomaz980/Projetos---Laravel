<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        $viewDate["subtitle"] = "About us";
        $viewData["description"] = "This is a home page...";
        $viewData["author"] = "Developed by: Thomaz Rodrigues";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $data1 = "About us - Online Store";
        $data2 = "About us";
        $description = "This is an about page...";
        $author = "Developed by: Thomaz Rodrigues";
        return view('home.about')->with("title", $data1)
            ->with("subtitle", $data2)
            ->with("description", $description)
            ->with("author", $author);
    }
}
