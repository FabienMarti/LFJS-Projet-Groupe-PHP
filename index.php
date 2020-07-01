<?php 
    $xmlContent = simplexml_load_file('source.xml');
    include 'controllers/indexController.php';
    $title = $xmlContent->page[$page]->title;
    include 'views/parts/header.php';
?>
    <?php  
<<<<<<< HEAD
    $page = 0;
=======
>>>>>>> 1c54000873d1fc2a29ba7d1d903bb48b10741cb0
        echo $xmlContent->page[$page]->menu;
        echo $xmlContent->page[$page]->content;
    ?>
</body>
</html>