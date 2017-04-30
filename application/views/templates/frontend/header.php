<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>LaBiblioteca.cat - La biblioteca de casa teva</title>
        <base href="<?php echo base_url(); ?>" />
        <link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?=base_url();?>assets/images/favicon.ico" type="image/x-icon">

        <!-- Bootstrap core CSS -->
        <script src="https://use.fontawesome.com/b1f7387632.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">

    </head>

    <body>

        <div class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="<?=base_url();?>assets/images/logo_n.png" class="logo"></a>
                </div>
                <div class="input-group global-search search">
                    <input type="text" class="form-control" name="search" placeholder="Buscar a LaBiblioteca.cat..." >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle dropdown-profile" data-toggle="dropdown" href="#"> 
                                <img src="<?=base_url();?>assets/images/person.jpeg">
                                Joan Busquet Zamora
                                <span class="caret"></span>
                            </a>
                             

                            <ul class="dropdown-menu">
                                <li><a href="article/add">Editar perfil</a></li>
                                <li><a href="article">Tancar sessió</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="container" style="margin-top: 140px;">