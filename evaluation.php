<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5 pt-5">
        <form action="/resultat.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input_username">Username</label>
                    <input type="text" class="form-control" name="username" id="input_username" placeholder="Votre username" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="input_mdp">Mot de passe</label>
                    <input type="password" class="form-control" name="mdp1" id="input_mdp" placeholder="Votre mot de passe" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="input_mdp2">Confirmer mot de passe</label>
                    <input type="password" class="form-control" name="mdp2" id="input_mdp2" placeholder="Votre mot de passe" required>
                </div>
            </div>
            
            <div class="input-field col s12">
            <a href="login.php" class="cold-md-3"> Connectez-vous à votre compte </a>
            <button class="cold-md-3 offset-md-6 btn btn-primary" type="submit" name="action">S'inscrire</button>
            </div>
        </form>
    </div>
    
  </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>
