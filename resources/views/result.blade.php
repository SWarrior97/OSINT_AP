<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>OSint Cape Vert</title>
        <link rel="stylesheet" href="css/result.css">

        <!--
                Google Font
                ============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

    </head>
            <div id="loading" class="se-pre-con"></div>
            <h2 id="prencher" hidden></h2>
            <h2 id="prencher_nome"></h2>
            <h2 id="prencher_phone"></h2>
            <h2 id="prencher_ilha"></h2>
            <h2 id="prencher_concelho"></h2>
    <body>
    <script type="text/javascript">
        var type = "<?php echo $type ?>";
        var name = "<?php echo $name ?>";
        var phone = "<?php echo $phone ?>";
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/search_empresa.js"></script>
    </body>
</html>
