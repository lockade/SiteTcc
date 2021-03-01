<?php
echo "Tentando...";
$comando = escapeshellcmd('/opt/lampp/htdocs/SiteTcc/ficheiro_python.py');
$cmdResult = shell_exec($comando);
echo $cmdResult;

?>