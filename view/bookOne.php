<?php
    ob_start();

    echo '<article>';
    echo '<h3>'.$book['bookname'].'</h3>';
    echo '<img src="public/images/'.$book['image'].'" />';
    echo '<p>Author(-s): '.$book['author'].'</p>';
    echo '<p>Price: '.$book['price'].'</p>';
    echo '<p>Description: '.$book['description'].'</p>';
    echo '<p style="padding-top: 10px;">';
    echo '<a href="books" role="button">Содержание &raquo;</a>';
    echo '</p>';
    echo '</article>';  
    echo '<div style="clear:both;"></div>';

    $content = ob_get_clean();
    
include 'view/templates/layout.php';


?>

