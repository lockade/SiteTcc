<?php

$comando = escapeshellcmd('./ficheiro_python.py');
$cmdResult = shell_exec($comando);
echo $cmdResult;

?>