<?php 
    $title = 'Accueil';
    include 'views/parts/header.php';
    $xmlContent = simplexml_load_file('source.xml');
?>
    <?php  
    $page = 1;
        echo $xmlContent->page[$page]->menu;
        echo $xmlContent->page[$page]->title;
        echo $xmlContent->page[$page]->content;
    ?>
</body>
</html>