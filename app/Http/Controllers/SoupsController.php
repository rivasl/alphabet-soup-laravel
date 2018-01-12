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
    public function index($word)
    {
        echo "word: $word <br>";

        $soup1 = '3 3
                    OIE
                    IIX
                    EXE';
        
        $soup2 = '1 10 EIOIEIOEIO';
    
        $soup3 = '5 5
                    EAEAE
                    AIIIA
                    EIOIE
                    AIIIA
                    EAEAE';
    
        $soup1 = new Soup($soup1);
        $soup1->setSearch("OIE");
        $result1 = $soup1->checkSoup();
        echo "ocurrence: $result1 <br>";

        $soup2 = new Soup($soup2);
        $soup2->setSearch("OIE");
        $result2 = $soup2->checkSoup();
        echo "ocurrence: $result2 <br>";
    
        $soup3 = new Soup($soup3);
        $soup3->setSearch("OIE");
        $result3 = $soup3->checkSoup();
        echo "ocurrence: $result3 <br>";
        // return view('/')->with(['users' => $users, 'pointer'=>'users_list']);
    }
}
