<?php 
    $xmlContent = simplexml_load_file('source.xml');
    $page = 1;
    $title = $xmlContent->page[$page]->title;
    include 'views/parts/header.php';
    include 'controllers/indexController.php';
    
?>
    <?php  
        echo $xmlContent->page[$page]->menu;
        echo $xmlContent->page[$page]->content;
    ?>
</body>
</html>