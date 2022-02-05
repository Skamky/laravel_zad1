@include("header");
<form action="/myPosts" method="post">

    <input class="form-control" type="text" name="post_title" required placeholder="Название поста...">

    <input class="form-control" type="textarea" name="post_text" required placeholder="Email...">

    <label for="img_post">Выберите изображение для  поста </label>
    <input type="file" id="img_post" name="img_post">

    <input type="submit">

    @csrf
</form>

<table class="table table-striped">
    <thead>
        <tr>

            <th scope="col">Га</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    @foreach($posts as $post)
        <tr>
            <td>Name: {{$post->post_title}}</td>

            <td>Email: {{$post->post_text}}</td>

            <td>Message: {{$contact->post_img}}</td>

        </tr>
    @endforeach
</table>
