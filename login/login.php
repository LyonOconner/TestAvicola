<?php

session_start();

if (isset($_SESSION['user_session']) != "") {
    header("Location: ../home.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Iniciaar Sesión</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <script src="../js/jquery.js" type="text/javascript"></script>
                <script src="../js/bootstrap.min.js" type="text/javascript"></script>
                <script src="../js/validation.min.js" type="text/javascript"></script>
                <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
                <script src="../js/scriptL.js" type="text/javascript"></script>
                </head>
                <body>

                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>

                                </button>
                                <a class="navbar-brand" href="../">Avicola Barbosa</a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Page 1-1</a></li>
                                            <li><a href="#">Page 1-2</a></li>
                                            <li><a href="#">Page 1-3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Page 2</a></li>
                                    <li><a href="#">Page 3</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="../sing up/"><span class="glyphicon glyphicon-user"></span>Registrarte</a></li>
                                    <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <body>

                        <div class="signin-form">

                            <div class="container">

                                <div class="row col-lg-offset-3 col-lg-6 col-lg-offset-3 col-sm-offset-3 col-sm-6 col-sm-offset-3 ">
                                    <form class="form-signin" method="post" id="login-form">

                                        <h2 class="form-signin-heading">Iniciar Sesión.</h2><hr />

                                        <div id="error">
                                            <!-- error will be shown here ! -->
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="user_email" id="user_email" />
                                            <span id="check-e"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" />
                                        </div>

                                        <hr />

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
                                                <span class="glyphicon glyphicon-log-in"></span> &nbsp; Ingresar
                                            </button> 
                                        </div>  

                                    </form>
                                </div>
                            </div>

                        </div>

                        <script src="bootstrap/js/bootstrap.min.js"></script>

                    </body>
                    </html>