@include("header")

<h1> This is my page Laravl!</h1>

{{--<a href="Bob">Name Bob</a>--}}
{{--<a href="Ivan">Name Ivan</a>--}}
{{--<a href="Lui">Name Lui</a>--}}
<a href="3">3</a>
<a href="16">16</a>
<a href="32">32</a>
<hr>
<input type="number" id="pole" >
<button onclick="kvadrat()" class="btn btn-primary">Расчитать</button>

<table class="table table-dark  table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">NAme</th>
        <th scope="col">Email:</th>
       <th scope="col">Message:</th>
{{--        <th scope="col"></th>--}}
    </tr>
    </thead>
    @php
        $i = 0;
    @endphp
@foreach($contacts as $contact)
        <tr>
            <td>{{$i=$i+1}}</td>
            <td> {{$contact->person_name}}</td>
            <td> {{$contact->person_email}}</td>
            <td> {{$contact->message}}</td>
        </tr>
@endforeach
</table>
<h3>Колличество записей {{$countPerson}}</h3>

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
<form action="/store" method="post">
    <input type="text" name="person_name" required placeholder="Name..." value="{{old('person_name')}}">
    <input type="text" name="person_email" required placeholder="Email..." value="{{old('person_email')}}">
    <input type="text" name="message"  placeholder="Message..." value="{{old('message')}}">
    <input class="btn  btn-primary " type="submit">

    @csrf
</form>
<script>
    function kvadrat() {
        let pole = document.getElementById("pole");
        document.location.href = pole.value;
    }
</script>

</body>
</html>
