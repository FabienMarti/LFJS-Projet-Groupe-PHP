<?php
    switch ($_GET['page']) {
        case 1:
            $page = 0;    
        break;
        case 2:
            $page = 1;    
        break;
        case 3:  
            $page = 2;      
        break;
        case 4:  
            $page = 3;      
        break;
        default:
            $page = 0;
        break;
    }