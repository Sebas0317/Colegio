<?php

$alert="";

if(!empty($_post))
{

if(empty($_post['codigo']) || empty($_post['clave'])){
    $alert='Ingrese su usuario y clave';
}else{
    require_once "conexion-login.php";
    $codigo= $_post['codigo'];
    $clave = $_post['clave'];

    $query = mysqli_query($conexion, "SELECT*FROM codigo WHERE codigo='$codigo' and clave='$clave' ");
    $result =mysqli_num_rows($query);

    if($result > 0){
        $data = myslqi_fetch_array($query);
        print_r($data);
    }

}



}

?>


<!DOCTYPE html>
<html lang="es ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IE SAN ISIDRO</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="/css/docentesp.css">
    <script src="js/estudiantes.js"></script>
</head>
<body>

<div class="container">
  <div class="info">
    <h1>Acceso a docentes</h1>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://www.flaticon.es/svg/static/icons/svg/3329/3329519.svg"/></div>
  <form class="register-form">
    <input type="text" placeholder="name"/>
    <input type="password" placeholder="password"/>
    <input type="text" placeholder="email address"/>
    <button>create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="login-form">
    <input type="text" placeholder="Codigo" name="codigo"/>
    <input type="password" placeholder="Clave" name="clave"/>
    <button>Ingresar</button>
      </form>
</div>










</body>
        </html>