@include("header")
<style>
    .scale {
        transition: 0.5s; /* Время эффекта */
    }
    .scale:hover {
        transform: scale(5) translateX(-10px); /* Увеличиваем масштаб */
    }
</style>
{{--генерация исключений--}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Добавление нового поста</h1>
<form action="/myPosts" method="post" enctype="multipart/form-data">

    <input class="form-control"
           type="text"
           name="post_title"
           required placeholder="Название поста..."
           value="{{old('post_title')}}">
    <input class="form-control"
           type="textarea"
           name="post_text"
           required rows="3" placeholder="Текст поста"
           value="{{old('post_text')}}">
    <label for="post_img">Выберите изображение для  поста </label>
    <input type="file"
           id="post_img"
           name="post_img"
           value="{{old('post_img')}}"
           accept=".jpg,.jpeg,.png,.gif,.svg,.bmp">

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
