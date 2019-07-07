<?php ob_start()?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php require_once '../database.php'; ?>

 <?php  include('../header.php') ?>

  <h3 style="text-align: center;">Se connecter</h3>
<?php if(isset($_POST) AND !empty($_POST)) {
    //voir si le champs username n'es pas vide grace à empty
    //htmlspecialchars permet de securiser les données
    if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) {
         $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');

      $req->execute([

        'username' => $_POST['username'],

        'password' => $_POST['password']

      ]);

      $user = $req->fetchObject();

      if ($user) {
$_SESSION['admin'] = $_POST['username'];
header('location:index.php');
  ob_enf_fluch();
      }
    } else {
      $error = 'Veuillez remplir tout les champs ! ';
    }
  }
   if (isset($error)) {
    echo $error;
  }
    ?><form action="login.php" method="POST">
  
  <p style="text-align: center;">Nom : <input type="text" name="username"></p> <br> 
  <p style="text-align: center;"> Mot de passe : <input type="password" name="password"></p> <br> 
  <p style="text-align: center;"><button>Se connecter</button></p>
</div>
</form>




 

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>