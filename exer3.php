<?php
$data = $_POST['d'];
/*
$dia = substr($data,8,2);
$mes = substr($data,5,2);
$ano = substr($data,0,4);*/
$datan = explode('-', $data);
$dia = $datan[2];
$mes =  $datan[1];
$ano =  $datan[0];

//2021-10-08
echo $data."<br>";
echo "Dia: $dia <br>
    Mês: $mes <br>
    Ano: $ano";
?>