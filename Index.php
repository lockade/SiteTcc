<?php
echo "Tentando...";
$comando = escapeshellcmd('/opt/lampp/htdocs/SiteTcc/ficheiro_pythondssadsa.py');
$cmdResult = shell_exec($comando);
echo $cmdResult;

?>