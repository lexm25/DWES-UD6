<?php 
    function getConnection(){
        $user = "developer";
        $pwd = "developer";
        return new PDO("mysql:host=localhost;dbname=biblioteca",$user,$pwd);
    }

    function getLibro($id){
        $db = getConnection();
        $result = $db->prepare("SELECT titulo, precio FROM libros WHERE id=?");
        $result->bindParam(1,$id);
        $result->execute();
        $libros = array();
        while($libro = $result->fetch()){
            $libros[] = $libro;
        }
        return $libros;
    }
?>