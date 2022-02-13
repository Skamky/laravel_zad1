@include("header")
<style>
    .scale {
        transition: 0.5s; /* Время эффекта */
    }
    .scale:hover {
        transform: scale(5) translateX(-10px); /* Увеличиваем масштаб */

    }
</style>
<h1>Добавление нового поста</h1>
<form action="/myPosts" method="post" enctype="multipart/form-data">

    <input class="form-control" type="text" name="post_title" required placeholder="Название поста...">

    <input class="form-control" type="textarea" name="post_text"  required rows="3" placeholder="Текст поста">

    <label for="img_post">Выберите изображение для  поста </label>
    <input type="file" id="img_post" name="img_post" accept=".jpg,.jpeg,.png,.gif,.svg,.bmp">

    <input type="submit">
    @csrf
</form>
<hr>
<h1>Добавленные посты</h1>
<table class="table table-dark  table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Текст</th>
            <th scope="col">Картинка</th>
            <th scope="col">путь к картинке</th>
        </tr>
    </thead>
    @php
        $i = 0;
    @endphp
    @foreach($posts as $post)
        <tr>
            <td>{{$i=$i+1}}</td>
            <td>{{$post->post_title}}</td>
            <td> {{$post->post_text}}</td>
            <td><img src="{{$post->post_img}}" width="50px" class="scale"></td>
            <td> {{$post->post_img}} </td>
        </tr>
    @endforeach
</table>
</body>
