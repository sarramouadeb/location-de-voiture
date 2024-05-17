<?php
include('login_client.php'); // Inclure le script de connexion

// Redirection si le client est déjà connecté
if(isset($_SESSION['login_client'])){
    header("location: index.php"); // Rediriger vers la page d'accueil
    exit; // Arrêter l'exécution du script
}

include('header.php'); // Inclure l'en-tête
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client Login | CarLoc</title>
    <link rel="stylesheet" href="login.css"> <!-- Inclure la feuille de style -->
</head>
<body>
    <!-- Inclure la barre de navigation -->
    <?php include('navbar.php'); ?>

    <div class="login-container">
        <div class="jumbotron">
            <h1 class="text-center">client Login</h1>
        </div>
    

   
            <div class="panel panel-primary">
                
                <div class="panel-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="customer_username" style="font-size:15px"><span class="text-danger" style="margin-right: 5px; font-size:20px">*</span><b> Nom:  </b></label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_username" type="text" name="customer_username" placeholder="Username" required="" autofocus="">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="customer_password" style="font-size:15px"><span class="text-danger" style="margin-right: 5px;font-size:20px">*</span><b> Mot de passe:</b> </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_password" type="password" name="customer_password" placeholder="Password" required="">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Se connecter</button>
                            </div>
                        </div>
                        <label style="margin-left: 5px;">ou</label> <br>
                        <label style="margin-left: 30px; "><a href="clientsignup.php" style="color:blue;">Créez un nouveau compte.</a></label>
                    </form>
                </div>
            </div>
      
   
    
    <footer class="site-footer">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-6">
                    <h5><b>© <?php echo date("Y"); ?> CarLoc</b></h5>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
