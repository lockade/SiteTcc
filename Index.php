<?php
echo "Tentando...";
$comando = escapeshellcmd('sudo python3 /opt/lampp/htdocs/SiteTcc/ficheiro_python.py');
$cmdResult = shell_exec($comando);
echo $cmdResult;

?>