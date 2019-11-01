
<?php 
include_once 'db.php';
include_once 'user_session.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>


<div id="login">
        <div class="container">

            <div class="row">
               
                    <form class="formulario-login" action="" method="POST">
                    
                    <h2>Registrarse</h2>
                    <p>Nombre de usuario: <br>
                        <input type="text" name="username_r"></p>
                        <p>Password: <br>
                        <input type="password" name="password_r"></p>
                        <p>Nombre: <br>
                        <input type="nombre" name="nombre_r"></p>
                        <p>Apellido: <br>
                        <input type="apellido" name="apellido_r"></p>

                    <p class="center"><input name="submit" type="submit" value="Registrarse"></p>

                </form>

               
            </div>


        </div>

    </div>





</body>

</html>


<?php 


if(isset($_POST['submit']))
{
    $nombre_r=$_POST['nombre_r'];
    $username_r=$_POST['username_r'];
    $password_r=$_POST['password_r'];
    $apellido_r=$_POST['apellido_r'];
    var_dump($username_r); 
    $query = $this->connect()->prepare('SELECT * FROM usuario WHERE username = ?');
    $query->execute(string($username_r)); 
    $row3 = $query4->fetch(PDO::FETCH_NUM);
    if ($row3[0]== true) {
    echo " existe ya ese usuario";
    }
}


?>