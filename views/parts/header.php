<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link type="text/css" href="assets/css/style.css" rel="stylesheet" />
    <title><?= isset($title) ? $title : 'Non-défini' ?></title>
</head>
<body>
   <div class="fond">
    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top mb-5">
       <!-- Navbar brand -->
       <a class="navbar-brand d-lg-none" href="#">Ocordo</a>
       <!-- Collapse button -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="true" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <!-- Collapsible content -->
       <div class="collapse navbar-collapse" id="basicExampleNav">
           <!-- Links -->
           <ul class="navbar-nav mr-auto container-fluid">
               <li class="nav-item <?= $_GET['page'] == 1 ? 'active' : ''?>">
                   <a class="nav-link" href="1.html">Accueil</a>
               </li>
               <li class="nav-item <?= $_GET['page'] == 2 ? 'active' : ''?>">
                   <a class="nav-link" href="2.html">Qui somme nous ?</a>
               </li>
               <li class="nav-item <?= $_GET['page'] == 3 ? 'active' : ''?>">
                   <a class="nav-link" href="3.html">Nos clients témoignent</a>
               </li>
               <li class="nav-item <?= $_GET['page'] == 4 ? 'active' : ''?>">
                   <a class="nav-link" href="4.html">Contact</a>
               </li>
           </ul>
       </div>
       <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->