
<?php
 

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
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    

    //  $sql = "SELECT 'login', 'password' FROM 'usuario' WHERE 'login'='$nombre' And 'password'= '$contrasena'";
    if (isset($_POST["inisesion"])) {
        $nombre = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        if (isset($_POST["usuario"])&&isset($_POST["contrasena"])) {
            $sql = "SELECT * FROM `estudiante` WHERE `nombre` LIKE '$nombre' AND `contrasena` LIKE '$contrasena' ";
            $validar = $conn->query($sql);
    
    
            if ($validar->num_rows > 0) {
                $admin;
                while($row = $validar->fetch_assoc()) {
                    $admin = $row["tipo"];
                }
                if($admin==0){
                    
                    
                    header("Location: index.php");
             
                } else{
                    header("Location: administrador.php");
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
        header("Location: login.html") ;
    }




    if (isset($_POST["registrarse"])) {
       
        header("Location: registro.html") ;
        
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
    VALUES ('', '$codigo', '$name', '$apellido', '$puntos', '$telefono', '$email', '$pass')";
   


    #$sql="INSERT INTO `estudiante` (``, `password`) VALUES ('$name', '$pass')";
    header("Location: login.html") ;
    

}









    // if ($conn->query($sql) === TRUE) {
    //  echo "New record created successfully";
    // } else {
    // 	echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}

?>


