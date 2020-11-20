
<?php
 session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyecto";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $puntos;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    
    
    //  $sql = "SELECT 'login', 'password' FROM 'usuario' WHERE 'login'='$nombre' And 'password'= '$contrasena'";
    if (isset($_POST["inisesion"])) {
        $nombre = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        
        if (isset($_POST["usuario"])&&isset($_POST["contrasena"])) {
            
        $_SESSION["nombreusuario"]=$nombre;
        $_SESSION["contrasenausuario"]=$contrasena; 
        
            $sql = "SELECT * FROM `usuario` WHERE `login` LIKE '$nombre' AND `password` LIKE '$contrasena' ";
            $validar = $conn->query($sql);
    
    
            if ($validar->num_rows > 0) {
                
                $admin;
                while($row = $validar->fetch_assoc()) {
                    $admin = $row["tipo"];
                   
                    
                }
                if($admin==0){
                    
                    
                    include_once("index.php");
             
                } else{
                    include_once("administrador.php");
                }

                #if(){

               # }
               # header("Location: index.php");
            } else {
    
                echo "<script>
               window.location='login.html';
               alert('Datos Erroneos o campos vacios');
               </script>
              
               ";
            }
        // }else{
        //     if (empty($_POST["usuario"])&&empty($_POST["contrasena"])) {
        //         echo "<script>
        //            window.location='login.html';
        //            alert('Ingrese sus datos por favor');
        //            </script>
                  
        //            ";
        //     }
        }

       
       
    }

   
   

    #echo $sql;
    //    CREAR USUARIO
    if (isset($_POST["backLogin"])) {
       include_once("login.html") ;
    }




    if (isset($_POST["registrarse"])) {
       
        include_once("registro.html") ;
        
}
if (isset($_POST["registroCompleto"])) {
    $codigo=$_POST["codigo"];
    $name=$_POST["Rnombre"];
    $apellido=$_POST["apellido"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];
    $pass=$_POST["Rcontrasena"];
    $puntos=0;

    
    $sql="INSERT INTO `estudiante` (`id`, `codigo`, `nombre`, `apellido`, `puntos`, `telefono`, `email`, `contrasena`) 
    VALUES ('', '$codigo', '$name', '$apellido', '$puntos', '$telefono', '$email', '$pass');";
  
    $sql .= "INSERT INTO `usuario` (`login`, `password`)
    VALUES ('$name', '$pass')";

    

       


   if ($conn->multi_query($sql) === TRUE) {
    #echo "New record created successfully";
    include_once("login.html") ;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

    
   # header("Location: login.html") ;
    

}









    
}

?>


