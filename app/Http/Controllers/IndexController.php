<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Post;
//необходимо обязательно создать класс контроллера
class IndexController extends Controller
{
    //метод обязательно должен возращать вид(\resources\views)
    public function home()
    {
        $contacts = Contact::orderBy("person_name","desc")->get();
        $count = Contact::all()->count();
        return view('home',["contacts"=>$contacts,"count"=>$count]);
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

    public function store(Request $request)

    {
        $contact = new Contact;
        $contact->person_name = $request->name;

        $contact->person_email = $request->email;

        $contact->message = $request->message;
        $contact->save();
        return redirect("/");


    }
    public function home2()
    {
        $posts = new Post;
        $posts = Post::all();
        return view("myposts",["post"=>$posts]);

    }
    //сделать контроллер для обработки формы
}
