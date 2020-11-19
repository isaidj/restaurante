
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $nombre = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];



    //  $sql = "SELECT 'login', 'password' FROM 'usuario' WHERE 'login'='$nombre' And 'password'= '$contrasena'";
    if (isset($_POST["inisesion"])) {
        $sql = "SELECT * FROM `usuario` WHERE `login` LIKE '$nombre' AND `password` LIKE '$contrasena'";
        $validar = $conn->query($sql);


        if ($validar->num_rows > 0) {
            header("Location: index.php");
        } else {

            echo "<script>
           window.location='login.html';
           alert('Datos Erroneos');
           </script>
          
           ";
        }
    }

    if (isset($_POST["registrarse"])) {
        $sql = "INSERT INTO `usuario` (`login`, `password`) VALUES ('$nombre', '$contrasena')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    #echo $sql;
    //    CREAR USUARIO














    // if ($conn->query($sql) === TRUE) {
    //  echo "New record created successfully";
    // } else {
    // 	echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}

?>


