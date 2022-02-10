@include("header")
<h1>Добавление нового поста</h1>
<form action="/myPosts" method="post">

    <input class="form-control" type="text" name="post_title" required placeholder="Название поста...">

    <input class="form-control" type="textarea" name="post_text"  required rows="3" placeholder="Текст поста">

    <label for="img_post">Выберите изображение для  поста </label>
    <input type="file" id="img_post" name="img_post">

    <input type="submit">
    @csrf
</form>
<hr>
<h1>Добавленные посты</h1>
<table class="table table-dark  table-striped">
    <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Текст</th>
            <th scope="col">Картинка</th>
        </tr>
    </thead>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->post_title}}</td>
            <td> {{$post->post_text}}</td>
            <td> {{$post->post_img}}</td>
        </tr>
    @endforeach
</table>
</body>
