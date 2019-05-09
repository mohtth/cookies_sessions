<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Cookie Factory</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/styles.css" />
</head>
<body>
  <header>
    <!-- MENU -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="/" >
          <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
          <h1>The Cookies Factory</h1>
        </a>
      </div>

      <!-- Nav links, forms et contents-->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="/logout.php" class="btn btn-danger navbar-btn">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    Logout
                </a>
            </li>
            <li>
                <a href="/cartVide.php" class="btn btn-warning navbar-btn">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    Cookie
                </a>
            </li>
            <li>
                <a href="/index.php" class="btn btn-warning navbar-btn">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    Home
                </a>
            </li>
          <li>
            <a href="/cart.php" class="btn btn-success navbar-btn">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
              Cart
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid text-right">
      <!-- si la session login existe alors on l'affiche sinon on affiche wilder -->
    <strong>Hello <?= $_SESSION["login"] ?? "Wilder" ?> !</strong>
  </div>
</header>