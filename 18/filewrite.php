<?php
$myfile = fopen("data.txt", "w") ;
$txt = "Hello,World!";
fwrite($myfile, $txt);
?>