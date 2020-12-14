<?php

function loadphp($directory) {
    if(is_dir($directory)) {
        $scan = scandir($directory);
        unset($scan[0], $scan[1]);
        foreach($scan as $file) {
            if(is_dir($directory."/".$file)) {
                loadphp($directory."/".$file);
            } else {
                if(strpos($file, '.php') !== false) {
                    include_once($directory."/".$file);
                }
            }
        }
    }
}

// Load Controllers
loadphp(__ROOT__ .'/app/http/controllers');
