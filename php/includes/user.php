<?php
include 'db.php';

class User extends DB{
    public $nombre;
    public $username;

    public function userExists($user, $pass){
        
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE username = :user');
        $query->execute(['user' => $user]);
       
       
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usename = $currentUser['username'];
          
        }
       
    }

  

  public function getRol($user)
        {
            $query = $this->connect()->prepare('SELECT rol_id FROM usuario WHERE username = :user');
            $query->execute(['user' => $user]);

            $row = $query->fetch(PDO::FETCH_NUM);

            if ($row == true) {
                $_SESSION['rol'] = $row[0];

                        if ($_SESSION['rol'] == 1) {
                            include_once 'vistas/home.php';
                           
                        }

                 else if ($_SESSION['rol'] == 2) {
                    include_once 'vistas/home-cliente.php'; 
                }
            } 
            
            else {
                echo 'Usuario incorrecto.';
            }
        }




        




  //public function getNombre(){      return $this->nombre; }



    
  
}





?>

