<?php 
    $title = 'Accueil';
    include 'views/parts/header.php';
    $xmlContent = simplexml_load_file('source.xml');
?>
    <?php  
        echo '<pre>';
        print_r($xmlContent);
        echo '</pre>';
    ?>
</body>
</html>