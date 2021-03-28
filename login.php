<?php
session_start();  
include_once "utilities/connect.php";

try{   
    if(isset($_POST["login"]))  {  
      if(empty(htmlspecialchars($_POST["utente"])) || empty(htmlspecialchars($_POST["chiave"])) ) {  
                $message = '<label>Todos los campos son requeridos</label>';  
           }  
           else {  
                $query = "SELECT * FROM user WHERE usuario = :usuario AND password = :password";  
                $statement = $pdo->prepare($query);  
                $statement->execute(  
                     array('usuario' => $_POST["utente"], 'password' => $_POST["chiave"] )
                   ); 
                $count = $statement->rowCount();  

                if($count > 0){  
                     $_SESSION["usuario"] = $_POST["utente"];  
                     header("location: /Hulkstore/init/list.php");  
                }  
                else{ $message = '<label>Datos incorrectos</label>';  }  
           }  
      }  
} catch(PDOException $error){  
      $message = $error->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | Hulk Store</title>
  <link rel="stylesheet" href="/HulkStore/styles/login.css">
  <link rel="icon" href="https://www.todo1services.com/hs-fs/hubfs/Logo-TODO-1_-2021-1.png?width=600&name=Logo-TODO-1_-2021-1.png" sizes="16x16" type="image/png">
</head>
<body>
  <div class="login__container"> <!--Container--->
    <div class="login__top">
      <img src="https://www.todo1services.com/hs-fs/hubfs/Logo-TODO-1_-2021-1.png?width=600&name=Logo-TODO-1_-2021-1.png" class="login__img" alt="logo">
      <h2 class="login__title">HulkStore <span>Admin</span> </h2>
    </div>

    <form class="login__form" method="post">
      <input type="text" placeholder="&#128100; username" required autofocus autocomplete="off" name="utente">
      <input type="password" placeholder="&#x1F512; password" required name="chiave">
      <input type="submit" class="btn__submit" value="ENTRAR" name="login">
    </form>
  </div>  <!--End Container--->
  <div>
    <p class="login__copy">&copy; Copyright <a href="https://todo1services.com">Todo1 Services</a> <?php echo date("Y");?></p>
  </div>
</body></html>