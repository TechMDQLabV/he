<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="icon" type="image/ico" href="{{ asset('./images/favicon.ico') }}">

    <title>@yield('title', 'HE Hidro Extinción')</title>

    <!-- Font Awesome Icons -->
    <link href="{{asset('./vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Theme CSS - Includes Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="{{asset('./css/main.css')}}" rel="stylesheet">
    @yield('styles')
</head>

<body id="general" class="" onload="addFile()">
<div class="hidden">
    <script type="text/javascript">
        <!--//--><![CDATA[//><!--
        let usuario = "consultas";
        let dominio = "patutoycia.com.ar";
        let conector = "@";

        function dame_correo() {
            return usuario + conector + dominio;
        }

        function escribe_enlace_correo() {
            document.write(`<a href='mailto: ${dame_correo()}' class='t-black-link'>${dame_correo()}</a>`);
        }

        function getCorreo() {
            let p = document.getElementById("correo");
            let link = document.createElement("a");
            link.setAttribute("href",`mailto:${dame_correo()}`);
            link.classList.add("t-black-link");
            link.innerHTML = dame_correo();
            p.appendChild(link);
        }

        var images = new Array()
        function preload() {
            for (i = 0; i < preload.arguments.length; i++) {
                images[i] = new Image();
                images[i] = preload.arguments[i];
            }
        }
        preload(
                "{{ asset('./images/backgrounds/back0.jpg') }}",
				"{{ asset('./images/backgrounds/back1.jpg') }}",
				"{{ asset('./images/backgrounds/back2.jpg') }}",
				"{{ asset('./images/backgrounds/back3.jpg') }}",
				"{{ asset('./images/backgrounds/back4.jpg') }}",
				"{{ asset('./images/backgrounds/back5.jpg') }}",
				"{{ asset('./images/backgrounds/back6.jpg') }}",
				"{{ asset('./images/backgrounds/back7.jpg') }}",
				"{{ asset('./images/backgrounds/back8.jpg') }}"
        )
        //--><!]]>
    </script>
</div>
<div class="loader"></div>
@include('includes.navbar')
<div class="">
    @yield('content')
</div>

</body>

<!--   Core JS Files   -->
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@yield('scripts')

<script>
    const getRandomRango = (min,max) => {
        return Math.floor(Math.random()*(max-min)+min);
    }

    const getBackFile = () => {
        return images[getRandomRango(0,images.length)];
    }

    const addFile = () => {
        let div = document.getElementById("general");
        div.style.backgroundImage = `url(${getBackFile()})`;
    }

    setInterval(function() {
        addFile();
    }, 15000);

    $("window").ready(function() {
        $(".loader").fadeOut("slow");
    });
</script>

</html>
