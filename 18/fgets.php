<?php

    $file = "search.txt";

    $handle = fopen($file, "r");

    if ($handle) {

        while (($line = fgets($handle)) !== false) {
    
            if (trim($line) == "STOP") {
                break; 
            }
        
            echo "<p>$line</p>";
        }

    
        fclose($handle);
    } else {
        echo "Unable to open file.";
    }
    ?>