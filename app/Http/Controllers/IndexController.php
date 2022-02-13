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
        return redirect("/kvadrat");
    }
    public function home2()
    {
        $posts = new Post;
        $posts = Post::all();
        return view("myposts",["posts"=>$posts]);

    }

    public function  myPosts(Request $request)
    {
        $image = $request->file('img_post');
//        $imagename= $image->getClientOriginalName();

            if($image==null)
            {$imagename='notimg.jpg';}
                else {
                    $imagename= $image->getClientOriginalName();
                    $image->move('img', $image->getClientOriginalName());
                }


//            $image=$_FILES['img_post']['name'];
//            $image=str_replace(' ','|',$image);
//            $image="img/".$image;
//
//            move_uploaded_file($_FILES['img_post']['tmp_name'],$image);


        $post = new Post;
        $post ->post_title  = $request->post_title;
        $post ->post_text = $request ->post_text;
        $post ->post_img = "img/".$imagename;
        $post->save();
        return redirect("/");

    }
}
