<?php

function include_template($file, $arr) {     
        
    if (file_exists($file)) {
    
        foreach ($arr as $key => $value) {
            $$key = $value;
        }
        
        ob_start();
        require_once($file); 
        $content = ob_get_clean();

        }

    else {$content = null;}

    return $content;
}

?>