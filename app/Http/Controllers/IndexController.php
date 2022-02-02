<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//необходимо обязательно создать класс контроллера
class IndexController extends Controller
{
    //метод обязательно должен возращать вид(\resources\views)
    public function home()
    {
        return view('home');
    }
    //кроме этого в методе можно передавать пачку параметров, которые находяться в массиве в []
    public function   UserPage($userName)
    {
        return view('numbers',["username"=>$userName]);
    }
    public function numbers($numb)
    {
        $numb2=$numb*$numb;
        return view('numbers',["numb"=>$numb,"numb2"=>$numb2]);
    }
    public function welcome()
    {
        return view('welcome');
    }
}
