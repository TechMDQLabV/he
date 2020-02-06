<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="icon" type="image/ico" href="<?php echo e(asset('./images/favicon.ico')); ?>">

    <title><?php echo $__env->yieldContent('title', 'HE Hidro Extinción'); ?></title>

    <!-- Font Awesome Icons -->
    <link href="<?php echo e(asset('./vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Theme CSS - Includes Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="<?php echo e(asset('./css/main.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>
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
                "<?php echo e(asset('./images/backgrounds/back0.jpg')); ?>",
				"<?php echo e(asset('./images/backgrounds/back1.jpg')); ?>",
				"<?php echo e(asset('./images/backgrounds/back2.jpg')); ?>",
				"<?php echo e(asset('./images/backgrounds/back3.jpg')); ?>",
				"<?php echo e(asset('./images/backgrounds/back4.jpg')); ?>",
				"<?php echo e(asset('./images/backgrounds/back5.jpg')); ?>",
				"<?php echo e(asset('./images/backgrounds/back6.jpg')); ?>",
				"<?php echo e(asset('./images/backgrounds/back7.jpg')); ?>"
        )
        //--><!]]>
    </script>
</div>
<!--<div class="loader"></div>-->
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="wrapper">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>

<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php echo $__env->yieldContent('scripts'); ?>

<script>
    const getRandomRango = (min,max) => {
        return Math.floor(Math.random()*(max-min)+min);
    }

    const getBackFile = () => {
        return images[getRandomRango(0,7)];
    }

    const addFile = () => {
        let div = document.getElementById("general");
        div.style.backgroundImage = `url(${getBackFile()})`;
    }

    setInterval(function() {
        addFile();
    }, 10000);

    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>

</html>
<?php /**PATH C:\Users\TechMDQ\Downloads\developer\he\resources\views/layouts/app.blade.php ENDPATH**/ ?>