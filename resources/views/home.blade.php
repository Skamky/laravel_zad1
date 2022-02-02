<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

</head>
<body>
<h1> This is my page Laravl!</h1>

{{--<a href="Bob">Name Bob</a>--}}
{{--<a href="Ivan">Name Ivan</a>--}}
{{--<a href="Lui">Name Lui</a>--}}
<a href="3">3</a>
<a href="16">16</a>
<a href="32">32</a>
<hr>
<input type="number" id="pole">
<button onclick="kvadrat()">Расчитать</button>

<script>
    function kvadrat() {
        let pole = document.getElementById("pole");
        document.location.href = pole.value;
    }
</script>


</body>
</html>
