<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $edad;
    private $sexo;
    private $matricula;
    private $email;
    private $tipoUsuario;
    private $telefono;
    private $direccion;
    private $perfil;
    private $formacion;
    private $unidadAcademica;
    private $foto;
    private $password;


    public function userExists($email, $pass){
        /* query para buscar el usuario y verificar contraseña y usuario existentes */
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :email AND password = :pass');
        $query->execute(['email' => $email, 'pass' => $pass]);

        /* verifica si se consiguió encontrar al usuario */
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($email){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :email');
        $query->execute(['email' => $email]);
        
        /* se extraen la mayoría de datos necesarios */
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->apellidoPaterno = $currentUser['apellido_paterno'];
            $this->apellidoMaterno = $currentUser['apellido_materno'];
            $this->edad = $currentUser['edad'];
            $this->sexo = $currentUser['sexo'];
            $this->matricula = $currentUser['matricula'];
            $this->email = $currentUser['email'];
            $this->tipo = $currentUser['tipo'];
            $this->telefono = $currentUser['telefono'];
            $this->direccion = $currentUser['direccion'];
            $this->perfil = $currentUser['perfil'];
            $this->formacion = $currentUser['formacion'];
            $this->unidadAcademica = $currentUser['unidad_academica'];
            $this->foto = $currentUser['foto'];
            $this->password = $currentUser['password'];
        }
    }

    public function getNombre(){
        return $this->nombre.' '.$this->apellidoPaterno.' '.$this->apellidoMaterno;
    }
    public function getPerfil(){
        return $this->perfil;
    }
    public function getFormacion(){
        return $this->formacion;
    }
   
    public function getUnidadAcademica(){
        return $this->unidadAcademica;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    
}

?>