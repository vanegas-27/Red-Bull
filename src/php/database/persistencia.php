<?php

class Bd{

    /**
     * se crean variables privadas que seran utilizadas en algunos procesos
     * de la gestion de datos.
     *
     * estas por ser privadas no podran ser accedidas desde otro script ya que
     * solo se pueden utilizar dentro de la misma clase
     */
    private $username;
    private $user;
    private $pass;


    /**
     * motodo constructor
     *
     * encargado de construir la clase de manera correcta al momento de hacer una instancia a la clase
     * esta puede o no tener parametros y es publica para poder acceder a ella.
     *
     * @param username -> localhost || 127.0.0.1
     * @param user -> root
     * @param pass -> ""
     *
     * EJM...
     * $bd = new Bd();
     *
     * @return void
     */
    public function __construct(){
        //this este se utiliza para acceder a las propiedades de mi clase mediante un -> Propiedad o metodo
        $this-> username = "localhost";
        $this-> user = "root";
        $this-> pass = "";

        $this -> createCredencial("redbull","credenciales");
    }



    /**
     * metodo connection
     *
     * este se encarga de conectarse al gestor de base de datos
     * y retorna la conexion si todo esta bien.
     * sino ejecuta un error y no prosigue
     * @param null
     *
     * EJM...
     * $bd = new Bd();
     *
     * $conn = $bd -> conection();
     *
     * @return conection
     */
    public function conection(){
        $conexion = mysqli_connect($this->username, $this-> user, $this-> pass);

        if ($conexion->connect_error) {
            throw new Error('no se pudo acceder al gestor'.mysqli_error($conexion));
        }

        return $conexion;
    }


    /**
     * metodo conectionBd
     *
     * este es el encargado de conectarse directamente a la base de datos si ya esta creada
     * si algo sale mal ejecuta un error y para la ejecucion.
     * @param bd
     *
     * EJM...
     * $bd = new Bd();
     *
     * $conn = $bd -> conectionBd("Red-Bull");
     *
     * @return conection
     */
    public function conectionBd($bd){

        $conexion = mysqli_connect($this->username, $this-> user, $this-> pass,$bd);

        if ($conexion->connect_error) {
            throw new Error('no se pudo acceder al gestor'.mysqli_error($conexion));
        }

        return $conexion;
    }


    /**
     * metodo createBd
     *
     * este se encarga de crear la base de datos sino existe.
     * este resive la conexion al gestor y el nombre de la base de datos
     * que se desea crear.
     *
     * @param conexion
     * @param bd
     *
     * EJM...
     * $bd = new Bd();
     *
     * $conn = $bd -> conection();
     * $bd -> createBd($conn,"Red-Bull");
     *
     * $bd -> createBd($bd -> conection(),"Red-Bull");
     *
     *
     * @return void
     */
    public function createBd($conn,$bd){

        $sql="CREATE DATABASE IF NOT EXISTS $bd";

        //sentecia tryCatch para manejar errores esperados por el usuario
        try{
            mysqli_query($conn,$sql);
        }catch(Exception $e){
            echo("Error al crear la BD... ".$e);
        }
    }


    /**
     * metodo createTable Productos
     *
     * @param bd
     * @param nombreTabla
     *
     */

    public function createTable($bd,$nameTable){

        $conn = $this-> conectionBd($bd);

        $sql = "CREATE TABLE IF NOT EXISTS `$bd`.`$nameTable` (
            `fecha` DATE NOT NULL,
            `encabezado` VARCHAR(100) NOT NULL,
            `imagen` VARCHAR(400) NOT NULL,
            `descripcion` VARCHAR(255) NOT NULL) ENGINE = InnoDB;";

        try{
            mysqli_query($conn,$sql);
            return true;
        }catch(Exception $e){
            echo("Error... ".$e);
            return false;
        }

        $conn->close();
    }



    /**
     * metodo read
     *
     * este metodo se encarga de traer todos los datos de la tabla que deseemos
     * este resive el nombre de la BD y el nombre de la tabla, si todo sale bien devuelve una array
     * bidimensional con cada dato de la BD.
     *
     * @param bd -> Red-Bull
     * @param nameTable -> Productos
     *
     * EJM...
     * $bd = new Bd();
     *
     * $datos = $bd -> read("Red-Bull","Porductos");
     *
     * response : [[datos],[datos],[datos]];
     *
     * @return array
     */
    public function read($bd,$nameTable){

        $conn = $this-> conectionBd($bd);

        $sql = "SELECT * FROM `$nameTable`;";

        try{
            $query = mysqli_query($conn,$sql);

            $arr = array();

            while($row = mysqli_fetch_array($query)){

                $list = array(
                    $row['fecha'],
                    $row['encabezado'],
                    $row['imagen'],
                    $row['descripcion']
                );

                array_push($arr,$list);
            }
            return $arr;

        }catch(Exception $e){
            echo("Error... ".$e);
            return false;
        }

        $conn -> close();
    }


    /**
     * metodo para insertar datos a una tabla
     *
     * @param bd
     * @param nombreTabla
     * @param array
     *
     * @return void
     *
     */
    public function insertDate($bd,$nameTable,$array){

        $conn = $this-> conectionBd($bd);

        $sql = "INSERT INTO `$nameTable` (`fecha`,`encabezado`, `imagen`, `descripcion`) VALUES ('$array[0]', '$array[1]', '$array[2]', '$array[3]');";

        try{
            mysqli_query($conn,$sql);
        }catch(Exception $e){
            echo "ERROR... \n $sql";
            return false;
        }

        $conn->close();

    }



    /**
     * metodo para actualizar datos de una tabla
     *
     * @param bd
     * @param nombreTabla
     * @param array
     *
     * @return void
     *
     */
    public function update($bd,$nameTable,$array){

        $conn = $this-> conectionBd($bd);

        $sql = "UPDATE `$nameTable`
        SET `fecha`='$array[0]',`encabezado`='$array[1]',`imagen`='$array[2]',`descripcion`='$array[3]', WHERE parametro = 'parametro' ;";

        try{
            mysqli_query($conn,$sql);
        }catch(Exception $e){
            echo("Error... ".$e);
            return false;
        }

        $conn->close();

    }


    public function delete($bd,$nameTable,$array){

        $conn = $this->conectionBd($bd);

        $sql = "DELETE FROM `$nameTable` WHERE $array[0] = $array[1];";

        try{
            mysqli_query($conn,$sql);
        }catch(Exception $e){
            echo("Error... ".$e);
        }

        $conn -> close();

    }




    /**
     * meotodo createCredencial
     *
     * este se debe de ejecutar inmediatamente en conjunto con la creacion de la base de datos
     * y las demas tablas para posteriormente insertar datos a ellas
     *
     * cabe resaltar que este metodo se encarga inmediatamente de crear la tabla e insertar sus datos
     * ya que estos son los dos usuarios que podran entrar al cPanel
     *
     * @param bd -> RedBull
     * @param nameTable -> Credenciales || empleados ...
     *
     *
     * @return void
     */
    private function createCredencial($bd,$nameTable){

        $conn = $this -> conection();

        $this -> createBd($conn,$bd);

        $sql = "CREATE TABLE IF NOT EXISTS `$bd`.`$nameTable` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `usuario` VARCHAR(30) NOT NULL ,
            `password` VARCHAR(100) NOT NULL ,
            `correo` VARCHAR(255) NOT NULL) ENGINE=InnoDB;
        ";

        try{
            mysqli_query($conn,$sql);
        }catch(Exception $e){
            throw new Error("Error al crear la tabla: ".mysqli_error($e));
        }

        //insertamos los usuarios administradores

        if(!$this -> contain($bd,$nameTable)){
            $sqlInsert = "INSERT INTO `$bd`.`$nameTable`
            (`id`,`usuario`, `password`, `correo`) VALUES
            ('NULL', 'Davinson', 'Davidson*', 'Davidsonvanegas27@gmail.com'),
            ('NULL', 'Juan', 'Juan123*', 'juanarroyave@politecnicomayor.edu.co');";

            mysqli_query($conn,$sqlInsert);
        }

    }



    /**
     * metodo contain
     *
     * este metodo me ayuda a saber si una tabla ya tiene elementos ingresados
     * a esta se le pasa la base de datos y el nombre de la tabla y retorna un boolean
     * verdadero si hay datos, sino un false
     *
     * @param BD
     * @param nameTable
     *
     *
     * @return bool
     */
    private function contain($bd,$nameTable){

        $conn = $this->conectionBd($bd);

        $sql = "SELECT * FROM $nameTable";

        $query = mysqli_query($conn,$sql);


        if(empty(mysqli_fetch_array($query))){
            return false;
        }

        return true;

    }


    /**
     * metodo exists
     *
     * este metodo me ayuda a saber si existe alguien en la base de datos
     * dependiendo de un parametro que le pase en forma de array, si existe retorna un true
     *
     * ehj...
     *
     * $bd = new Bd();
     * array = ["id",2];
     * $result = $bd -> exists("redbull","credenciales",$array);
     *
     * @param BD
     * @param nameTable
     * @param array
     *
     *
     * @return bool
     */
    public function exists($bd,$nameTable,$array){

        $conn = $this->conectionBd($bd);

        $sql = "SELECT * FROM $nameTable WHERE $array[0] = '$array[1]'";

        $query = mysqli_query($conn,$sql);


        if(empty(mysqli_fetch_array($query))){
            return false;
        }

        return true;

    }

}
