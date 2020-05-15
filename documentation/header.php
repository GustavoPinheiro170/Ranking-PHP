<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Afresp Esportes</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.png">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                      <img src='img/logo-azul.png' class='brightness'>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                    <ul class="nav navbar-nav mr-auto">
                            <li class="dropdown nav-item">
                                <a href="template.php" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="notification">Futebol</span>
                                    <i class="far fa-futbol"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="template.php">Tabela Classificação</a> 
                                    <a class="dropdown-item" href="futebol/temp-insere-classificacao.php">Fase Classificatória</a>                                   
                                </ul>
                            </li>
                        </ul>
                        

                    </li>
                    <li>
                        <a class="nav-link"  href="#">
                        <i class="far fa-heart"></i>
                            <p>Poker</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="#">
                        <i class="fas fa-running"></i>
                            <p>Corrida</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link"  href="#">
                        <i class="fas fa-table-tennis"></i>
                            <p>Tênis</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Consultas</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Esportes</a>
                                    <a class="dropdown-item" href="#">Poker</a>
                                    <a class="dropdown-item" href="#">Corrida</a>
                                    <a class="dropdown-item" href="#">Futebol</a>
                                   
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Conta</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Consultas</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" >Tenis</a>
                                    <a class="dropdown-item" href="#">Poker</a>
                                    <a class="dropdown-item" href="#">Corrida</a>
                                    <a class="dropdown-item" href="#">Futebol</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->