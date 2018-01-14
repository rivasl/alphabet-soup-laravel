<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Soup as Soup;

class SoupsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index($word, $soup)
    {
        $soup = new Soup($soup);
        $soup->setSearch($word);
        return $soup->checkSoup();
    }
}
