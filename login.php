<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <style>
        .container{
        			margin-top: 160px;
        		}
        		.card{
        			width: 50%;
        			margin-left: 25%;
        			padding-right: 25px;
        		}

    </style>
</head>

<body>
    <div class="container">
        <div class="card z-depth-2">
            <div class="card-content">
            	<center><a href="index.php"><img src="image/pwu2.png" width="10%"></a></center>
                <form action="login_process.php" method="post" autocomplete="off">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="uname" id="user" required>
                        <label for="user">Username</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="pass" id="pass" required="">
                        <label for="pass">Password</label>
                    </div>
                    <div class="row">
                        <div class="col s2"><a href="index.php" class="btn btn-flat waves-effect waves-light"><i class="material-icons">arrow_back</i></a></div>
                        <div class="col s7"></div>
                        <div class="col s2">
                            <button class="btn waves-effect waves-light red darken-1 waves-effect waves-light" type="submit">Login </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
