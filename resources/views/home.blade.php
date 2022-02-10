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
        <th scope="col">NAme</th>
        <th scope="col">Email:</th>
       <th scope="col">Message:</th>
{{--        <th scope="col"></th>--}}
    </tr>
    </thead>
@foreach($contacts as $contact)
        <tr>
    <td> {{$contact->person_name}}</td>
    <td> {{$contact->person_email}}</td>
    <td> {{$contact->message}}</td>
        </tr>
@endforeach
</table>
<h3>Колличество записей {{$count}}</h3>

<form action="/store" method="post">

    <input type="text" name="name" placeholder="Name...">

    <input type="text" name="email" placeholder="Email...">

    <input type="text" name="message" placeholder="Message...">

    <input class="btn  btn-primary " type="submit">

    @csrf

</form>
<script>
    function kvadrat() {
        let pole = document.getElementById("pole");
        document.location.href = pole.value;
    }
</script>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>--}}
</body>
</html>
