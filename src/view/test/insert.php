<?php
    //echo WEB_ROOT; die();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Facturation  </title>
    <link rel="stylesheet" type="text/css" media="screen" href="<?=WEB_ROOT ?>public/css/bootstrap.min.css" />
        <script src="main.js"></script>
    </head>
    <body>
    <?= print_r($value);?>
   <br>
    <div class="container  col-md-offset-3 col-md-6  ">
            <div class="panel panel-primary">
                <div class="panel-heading">formulaire test </div>
                    <div class= "panel-body"> 
                        <form action="<?=WEB_ROOT?>test/add" method="post">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom" value="<?php if(isset($data['nomU']) ){echo $data['nomU'];}?>">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer le prénom" value="<?php if(isset($data['prenomU']) ) {echo $data['prenomU'];}?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="pwd">mot de passe</label>
                                <input type="pwd" class="form-control" id="pwd" name="pwd" placeholder="Entrer le mot de passe" value="<?php if(isset($data['pwd'])){echo $data['pwd'];}?>">
                            </div>
                            <br>
                            <div class= "form-group">
                             <input    class="btn btn-success" type="submit" name="enregistrer" id = "enregistrer" value="enregistrer" />
                             <input    class="btn btn-warning" type="hidden" name="modifier" id = "modifier" value="modifier" />
                            </div> 
                        </form>
                        

                    </div>
             </div>
        </div>
    </div>                     
</body>
</html>