<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content=<?php $token = csrf_token(); echo $token; ?>>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Molnár Szabrina</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/birdshop/public/js/app.js" type="module"></script>
    <link rel="stylesheet" href="/birdshop/public/css/stilus.css">
  </head>
  <body>
    <header class="w3-panel w3-center w3-opacity" style="padding:50px 16px">
      <h1 class="w3-xlarge">Papagáj áruház</h1>
      <nav>
        <ul>
          <li id="fooldal"><a href="#" class="w3-bar-item w3-button">Főoldal</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="madarakLista"></div>
    </main>
  </body>
</html>
