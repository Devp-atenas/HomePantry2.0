<?php 
    if (isset($_POST['id'])) {
    $API = urlApi."getCiudadId/".$_POST['id'];
    $response = file_get_contents($API);
    $html="<option>Elija Opcion ...</option>";
    foreach ($estado as $datos2) {
        foreach ($datos2 as $datos3){
            $id = $datos3['id_estado'];
            $ciudad = $datos3['estado'];
            $html.="<option value='".$id."'>".$ciudad."</option>";
        }
    }
    echo $html;
    }
?>