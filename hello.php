<?php
//Default value is "MUNDO"
$name = isset($argv[1]) ? $argv[1] : "MUNDO";
@print "<H1>HOLA {$name}\n</H1>";
?>
