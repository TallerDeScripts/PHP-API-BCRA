<?php
/****
	
Creado: Vie. 18 Julio 2019	
Author: Daniel M. Ochoa
Web:    https://taller-de-scripts.blogspot.com
Función: Conecta con el API del BCRA para obtener las cotizaciones en bruto
 
****/

    $authorization = "Authorization: BEARER {TOKEN}";
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',$authorization));  
    curl_setopt($ch, CURLOPT_URL, "https://api.estadisticasbcra.com/usd");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch); 

    print_r($res);
