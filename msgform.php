<div id="chatbox"><?php

if(file_exists("msgton.php") && filesize("msgton.php") > 0){
     
    $contents = file_get_contents("msgton.php");         
    echo $contents;
}

?>