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
        $contacts = Contact::orderBy("person_name","asc")->get();

        $count = Contact::all()->count();
        return view('home',["contacts"=>$contacts,"countPerson"=>$count]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate
        ([
            'person_name' => 'required|max:50',
            'person_email' => 'required| unique:contacts| max: 100|email',
            'message' => 'required',
        ]);

        $contact = new Contact;
        $contact->person_name = $request->person_name;
        $contact->person_email = $request->person_email;
        $contact->message = $request->message;

        $contact->save();
        return redirect("/kvadrat");
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


    public function home2()
    {
        $posts = new Post;
        $posts = Post::all();
        return view("myposts",["posts"=>$posts]);
    }

    public function  myPosts(Request $request)
    {
        $image = $request->file('post_img');
//        $imagename= $image->getClientOriginalName();

            if($image==null)
            {
                $imagename='notimg.jpg';
                $validated = $request->validate
                ([
                    'post_title' => 'required|max:255',
                    'post_text' => 'required| max: 65535',
                ]);
            }
                else {
                    $validated = $request->validate
                    ([
                        'post_title' => 'required|max:255',
                        'post_text' => 'required| max: 65535',
                        'post_img'=>'image'
                    ]);

                    $imagename= $image->getClientOriginalName();
                    $image->move('img', $image->getClientOriginalName());
                }




        $post = new Post;
        $post ->post_title  = $request->post_title;
        $post ->post_text = $request ->post_text;
        $post ->post_img = "img/".$imagename;

        $post->save();
        return redirect("/");

    }
}
