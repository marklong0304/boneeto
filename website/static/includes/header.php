<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php if( isset( $page_title ) ): echo $page_title; endif; ?></title>

        <!-- CDN
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
         -->

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/style.css">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <a href="?p=home" class="brand">
                            <img src="http://placehold.it/256x64?text=LOGO+BONEETO" alt="Logo Boneeto" class="img-responsive">
                        </a>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-12 col-md-8">
                        <nav>
                            <ul>
                                <li><a href="?p=home">Home</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#modalUpload">Upload</a></li>
                                <li><a href="?p=gallery">Gallery</a></li>
                                <li><a href="?p=single">Terms &amp; Conditions</a></li>
                            </ul>
                        </nav>
                    </div><!--/ .col-xs-12 -->
                </div><!--/ .row -->
            </div><!--/ .container -->
        </header>
