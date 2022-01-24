<?php 
    function getConnection(){
        $user = "developer";
        $pwd = "developer";
        return new PDO("mysql:host=localhost;dbname=biblioteca",$user,$pwd);
    }

    function getPeriodico($id){
        $db = getConnection();
        $result = $db->prepare("SELECT Nombre, Fecha FROM periodicos WHERE id=?");
        $result->bindParam(1,$id);
        $result->execute();
        $periodicos = array();
        while($periodico = $result->fetch()){
            $periodicos[] = $periodico;
        }
        return $periodicos;
    }
?>