<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>projetweb</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Inscription.css">
    <link rel="stylesheet" href="css/Footer.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-default navigation-clean-button">
            <div class="container">
                <div class="navbar-header"><a href="#" class="navbar-brand">Company Name</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <p class="navbar-text navbar-right actions">
                        <a class="btn btn-default action-button" role="button" href="#">Se connecter</a></p>
                </div>
            </div>
        </nav>
    </div>
    <header><h1>Inscription</h1></header>
     <div class= "jumbotron">     
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3" >
                        <div class= "box">
                    
                            <h3>Vous êtes un expérimentateur</h3>
                            <form method="post">
                                <h2 class="sr-only">Login Form</h2>
                                <div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" /></div>
                                <div class="form-group"><input type="password" name="password" placeholder="Password" class="form-control" /></div>
                                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">S'inscrire</button></div>
                            </form>    
                        </div>
                </div>
        

            <div class="col-md-3">  
                <div class="box">    
                        <h3>Vous êtes un utilisateur</h3>
                        <form method="post">
                            <h2 class="sr-only">Login Form</h2>
                            <div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" /></div>
                            <div class="form-group"><input type="password" name="password" placeholder="Password" class="form-control" /></div>
                            <div class="form-group"><input type="password" name="Age" placeholder="Age" class="form-control" /></div>
                            <div class="form-group">
                                <div class="checkbox"><label class="control-label"><input type="checkbox" />Homme</label></div>
                                <div class="checkbox"><label class="control-label"><input type="checkbox" />Femme</label></div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">S'inscrire</button></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('Footer.php')?>
</body>

</html>