<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>projetweb</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Connexion.css">
    <link rel="stylesheet" href="css/Footer.css">
   
</head>

<body>
    <div>
        <nav class="navbar navbar-default navigation-clean-button">
            <div class="container">
                <div class="navbar-header"><a href="#" class="navbar-brand">Company Name</a>
                <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
                    <span class="icon-bar">
                    </span><span class="icon-bar"></span>
                </button>
            </div>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <p class="navbar-text navbar-right actions"><a href="#" class="navbar-link login"></a>
                    <a class="btn btn-default action-button" role="button" href="#">Inscription</a></p>
            </div>
    </div>
    </nav>
    </div>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" /></div>
            <div class="form-group"><input type="password" name="password" placeholder="Password" class="form-control" /></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Se connecter</button></div><a href="#" class="forgot">Oublie de l&#39;identifiant ou du mot de passe?</a><a href="#" style="text-align:center;">Inscrivez-vous</a></form>
    </div>
    <?php include('Footer.php')?>
</body>

</html>