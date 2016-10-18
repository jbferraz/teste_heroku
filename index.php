<?php
$con_string = "host=ec2-54-221-226-148.compute-1.amazonaws.com
 port=5432
 dbname=dd52ucnkn31ab3
 user=dwsymjxccqzynl
 password=gPBhy_eQzzWIxPiVcRC-7R7Zaq";
pg_connect($con_string) or die('Conexão falhou!');
echo "Conectado no Postgres com sucesso!";
echo "deploy integrado com GitHub!";