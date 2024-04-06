<?php
    include 'procesar_sesion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header id="hideMobileHeader" class="mobileHeader">
        <ul>
            <li><a class="mobileSelected" href="#">Portfolio</a></li>            
            <li><a href="index.php">Log Off</a></li>
        </ul>
    </header>

    <header>
        <div class="leftOpt">
            <a href="#">Tattoo-Alcance</a>
        </div>
            
        <div class="rightOpt">
            <a class="selected" href="#">Portfolio</a>            
            <a href="index.php">Log Off</a>
        </div>

        <div id="mobileHeader" class="hideOpt">
            <ion-icon name="reorder-three-outline"></ion-icon>
        </div>
    </header>

    <div id="titleContent" class="title">
        <h1 id="title">Full Portfolio</h1>        
    </div>

    <div id="app" class="app container">        
        
    </div>

    <script src="portfolioComponent.js"></script>
    <script src="assets/App.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <script>
        ScrollReveal().reveal('.box');
    </script>
</body>
</html>

