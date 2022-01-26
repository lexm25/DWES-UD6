<?php
    function creaConexion(){
        $servidor = "localhost";
        $baseDatos = "nba";
        $usuario = "developer";
        $pass = "developer";
        return new PDO("mysql:host=$servidor;dbname=$baseDatos","$usuario","$pass");
    }

    /*devuelva un elemento a partir del id, el formato que devuelve debe ser un diccionario (clave-valor).*/
    function obtenerElemento($id){
        try {
            $conexion = creaConexion();
            $sql = $conexion->prepare("SELECT * FROM datos WHERE id= ?");
            $sql->bindParam(1,$id);
            $sql->execute();
            return $sql->fetch();
            $conexion = null;
        }
        catch (PDOException $e) {
            return $e->getMessage();
            }
        }
    /*elimina un elemento a partir del id, devolverá true en caso de que se haya borrado correctamente y falso en caso contrario.*/
    function eliminarElemento($id){
        try {
            $conexion = creaConexion();
            $sql = $conexion->prepare("DELETE FROM datos WHERE id= ?");
            $sql->bindParam(1,$id);
            return $sql->execute();
            $conexion = null;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    /*Recibirá todos los datos que componen a un elemento y actualizará todos sus valores, devolverá true en caso de que se haya editado correctamente y false en caso contrario.*/
    function editarElemento($id,$nombre,$equipo,$nacionalidad,$edad,$altura,$fechaNacimiento,$imagen){
        try {
            $conexion = creaConexion();
            $sql = $conexion->prepare("UPDATE datos SET Nombre=?,Equipo=?,Nacionalidad=?,Edad=?,Altura=?,Nacimiento=?,Imagen=? WHERE id =?");
            $sql->bindParam(1,$nombre);
            $sql->bindParam(2,$equipo);
            $sql->bindParam(3,$nacionalidad);
            $sql->bindParam(4,$edad);
            $sql->bindParam(5,$altura);
            $sql->bindParam(6,$fechaNacimiento);
            $sql->bindParam(7,$imagen);
            $sql->bindParam(8,$id);
            return $sql->execute();
            $conexion = null;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    editarElemento(1,"José","Los pala","Español",43,123,"2001-12-12","curry.jpg");
    /*devuelva una matriz (array de arrays) con los campos id, texto1, texto2, numero1 y fecha.*/
    function obtenerTodos(){
        try {
            $resultado = [];
            $conexion = creaConexion();
            $sql = $conexion->prepare("SELECT * FROM datos");
            $sql->execute();
            while($jugador = $sql->fetch(PDO::FETCH_ASSOC)){
                $resultado[] = $jugador;
            }
            
            return $resultado;
            $conexion = null;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    /*Recibirá todos los datos que componen a un elemento e insertará un elemento nuevo, devolverá el id del elemento añadido.*/
    function insertaElemento($nombre,$equipo,$nacionalidad,$edad,$altura,$fechaNacimiento,$imagen){
    try {
        $conexion = creaConexion();

        $sql = $conexion->prepare("INSERT INTO datos (Nombre, Equipo, Nacionalidad, Edad, Altura, Nacimiento, Imagen) VALUES (?,?,?,?,?,?,?)"); 
        $sql->bindParam(1,$nombre);
        $sql->bindParam(2,$equipo);
        $sql->bindParam(3,$nacionalidad);
        $sql->bindParam(4,$edad);
        $sql->bindParam(5,$altura);
        $sql->bindParam(6,$fechaNacimiento);
        $sql->bindParam(7,$imagen);
        $sql->execute();
        return $conexion->lastInsertId();
        $conexion = null;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}           
?>