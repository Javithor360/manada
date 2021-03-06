<?php

    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'es';
    }

    if (!function_exists('str_contains')) {
        function str_contains(string $haystack, string $needle): bool
        {
            return '' === $needle || false !== strpos($haystack, $needle);
        }
    }
    
    if(str_contains($_SERVER['SCRIPT_FILENAME'], '/pets/')){ $pathway = '../../'; }
    else if(str_contains($_SERVER['SCRIPT_FILENAME'], '/guides/')) { $pathway = '../'; }
    else if(str_contains($_SERVER['SCRIPT_FILENAME'], '/php/')) { $pathway = '../'; }
    else { $pathway = './'; }

    if($_SESSION['lang'] == 'es'){
        require $pathway . 'lang/es.php';
    }else if($_SESSION['lang'] == 'en'){
        require $pathway . 'lang/en.php';
    }
?>