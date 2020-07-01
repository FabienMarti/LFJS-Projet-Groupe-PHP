<?php 
    $xmlContent = simplexml_load_file('source.xml');
    include 'controllers/indexController.php';
    $title = $xmlContent->page[$page]->title;
    include 'views/parts/header.php';
?>
    <?php  
        echo $xmlContent->page[$page]->content;
    ?>
</body>
</html>