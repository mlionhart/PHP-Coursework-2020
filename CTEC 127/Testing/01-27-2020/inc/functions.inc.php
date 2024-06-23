<?php

function build_nav($class) {
    $navLinks = [
        ['Home', 'home.php', 'Visit the home page'],
        ['Products', 'products.php', 'Visit the products page'],
        ['Order', 'order.php', 'Visit the order page'],
        ['About', 'about.php', 'Visit the about page'],
        ['Contact Us', 'contact.php', 'Get in touch with us!'],
    ];

    $output = "<ul class=\"$class\">";

    for ($i=0; $i < count($navLinks); $i++) { 
        $output .= "<li><a href=\"{$navLinks[$i][1]}\" title=\"{$navLinks[$i][2]}\">{$navLinks[$i][0]}</a></li>";
    }

    $output .= "</ul>";
    return $output;    
}
