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
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">
       <!-- Navbar brand -->
       <a class="navbar-brand" href="#">Ocordo</a>
       <!-- Collapse button -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <!-- Collapsible content -->
       <div class="collapse navbar-collapse" id="basicExampleNav">
           <!-- Links -->
           <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a class="nav-link" href="#">Accueil
                       <span class="sr-only">(current)</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Qui somme nous ?</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Nos clients témoignent</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Contact</a>
               </li>
           </ul>
           <!-- Links -->
           <form class="form-inline">
               <div class="md-form my-0">
                   <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
               </div>
           </form>
       </div>
       <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->