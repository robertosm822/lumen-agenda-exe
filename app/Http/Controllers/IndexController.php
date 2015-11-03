<?php

/* 
 * Lumen Mini - Framework by Laravel - 03-11-2015
 */
namespace CodeAgenda\Http\Controllers;

//use Laravel\Lumen\Routing\Controller as BaseController;

class IndexController extends Controller
{
    public function Index(){
        return view( "layout");
    }
   
}