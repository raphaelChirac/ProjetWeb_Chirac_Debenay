<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>projetweb</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/AccueilExp.css">
    <link rel="stylesheet" href="css/Footer.css">
</head>

<body>
<div class="navigation">
    <nav class="navbar navbar-default navigation-clean-button">
            <div class="navbar-header">
                <a class="navbar-brand" href="AccueilExp.php">SimplyCamp</a>
            </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li role="presentation"><a href="AjouterCampagne.php" >Ajoutez campagne</a></li>
                        <li role="presentation"><a href="Questionnaires.php">Questionnaires</a></li>
                    </ul>
                    <div class="navbar-text navbar-right actions"><p>vdeb <a class="btn btn-default action-button" role="button" href="MonCompte.php">Mon compte</a></p></div>     
                </div>
            </div>
    </nav>
</div>
<h1>Mes Campagnes</h1>

<div class="container"  style="margin:20px;" >
    <div class="row" style="border-style:solid;">    
        <div class=" box col-sm-10" >
            <div class="col-sm-4" ><h2>NomCampagne</h2>
            </div>
                <div class="col-sm-6" style="text-align:right;">
                    <div class="btn-group" id="status" data-toggle="buttons"; style="margin-top:-30px;">
                        <label class="btn btn-default btn-on btn-xs active">
                        <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked">En cours</label>
                        <label class="btn btn-default btn-off btn-xs ">
                        <input type="radio" value="0" name="multifeatured_module[module_id][status]">Finie</label>
                    </div><input type="image" alt="Connexion" src="img/Sup1.jpg"style ="width:30px; margin: 5px;">
                    <input type="image" alt="Connexion" src="img/Sup1.jpg"style ="width:30px; margin: 5px;">
                </div>
                
                <div class="col-sm-5" style="border-style:solid;margin-left:-210px;margin-top:10px;"><h4>Date de début :</h4> <p>12/02/2018</p></div>
                <div class="col-sm-8" ><h4>Date de fin :</h4> <p>12/04/2018</p></div>
                
        </div>
    </div>
</div>
<?php include('Footer.php')?>
</body>
</html>