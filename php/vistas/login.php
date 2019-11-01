<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/favicon.ico" type="image/png">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!--================ Header Inicio =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="../img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Manu -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="../index.html">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="../quienes-somos.html">Quíenes somos</a></li>
                            <li class="nav-item"><a class="nav-link" href="../mision-y-vision.html">Misión y visíon</a>
                            </li>
                            <li class="nav-item">
                                <a href="../productos.html" class="nav-link">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a href="../servicios.html" class="nav-link">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-button">
                        <ul>
                            <li>
                                <a class="sign_up" href="../index.html">Inicio</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ Header=================-->

    <div id="login">
        <div class="container align-content-center">

            <div class="row">
                <form class="formulario-login" action="" method="POST">
                    <?php
                     if(isset($errorLogin)){ echo $errorLogin; } ?>
                    <h2>Iniciar sesión</h2>
                    <p>Nombre de usuario: <br>
                        <input type="text" name="username"></p>
                    <p>Password: <br>
                        <input type="password" name="password"></p>
                    <p class="center"><input type="submit" value="Iniciar Sesión"></p>
                </form>

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


    

    <!--   
   
    class DB2{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'registro';
        $this->user     = 'root';
        $this->password = "";
        $this->charset  = 'utf8mb4';
    }

    function connect(){
    
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }

    
 function consulta($username2){

 
 
    $query = $this->connect()->prepare('SELECT * FROM usuario WHERE username = ?');
    $query->execute(string($username2)); 
    $row3 = $query4->fetch(PDO::FETCH_NUM);
    if ($row3[0]== true) {
    echo " existe ya ese usuario";
    }
}



}


if(isset($_POST['submit']))
{
    echo"esto si se ejecuta";
    $nombre_r=$_POST['nombre_r'];
    $username_r=$_POST['username_r'];
    $password_r=$_POST['password_r'];
    $apellido_r=$_POST['apellido_r'];
    var_dump($username_r); 
    $username2->consulta($username_r);
}
?>
<li class=""><a class="sign_up" href="includes/registro.php">Registro</a></li>
    ----->







</body>

</html>