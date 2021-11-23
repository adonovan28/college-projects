<?php
include("includes/config.php");
?>

<html>
<head>
  <title>Imperial Starships</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</head>
<body>
  <header>
    <span role="link" class="logo" onclick="openPage('index.php')">
      <img src="assets/images/icons/GalacticEmpireLogo.png">
    </span>
    <?php include("includes/nav.php"); ?>
  </header>
  <div id="mainViewContainer">
      <h1>Imperial Starships</h1>