<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    $userForm = $_POST['username'];
    $user->getRol($userForm);
    if ( $_SESSION['rol'] == 1) {
        include_once 'vistas/home.php';
     
    }
    elseif ($_SESSION['rol'] == 2) {
    include_once 'vistas/home-cliente.php';
   
    }
    else {
        include_once 'vistas/home.php';  
    }
      

}
else if(isset($_POST['username']) && isset($_POST['password'])){
    
        $userForm = $_POST['username'];
        $passForm = $_POST['password'];
        

        $user = new User();
        if($user->userExists($userForm, $passForm)){
            //echo "Existe el usuario";
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);
            $user->getRol($userForm);
           
            }

        else{
            //echo "No existe el usuario";
            $errorLogin = "Nombre de usuario y/o password incorrecto";
            include_once 'vistas/login.php'; }

        }
        
else{
    //echo "login";
    include_once 'vistas/login.php';
}



?>