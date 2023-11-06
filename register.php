<?php
require_once "config.php";

$name = $username = $password = "";
$name_err = $username_err = $password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Sisesta kasutajanimi";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Kasutajanimi võib sisaldada vaid tähti, numbreid ja allkriipse";
    } else{
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = trim($_POST["username"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "See kasutajanimi on juba kasutusel";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Midagi läks valesti. Palun proovi uuesti!";
            }
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Sisesta parool";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Parool peab olema vähemalt 6 tähemärki";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate name
    if(empty(trim($_POST["name"]))){
        $name_err = "Sisesta oma nimi";     
    } elseif(!preg_match('/^[a-zA-Z ]+$/', trim($_POST["name"]))){
        $name_err = "Nimi võib sisaldada vaid tähti ja tühikuid";
    } else{
        $name = trim($_POST["name"]);
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($name_err)){

        $sql = "INSERT INTO users (name, username, password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_username, $param_password);
            
            $param_name = $name;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            } else{
                echo "Midagi läks valesti. Palun proovi uuesti!";
            }

            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registreeri kasutajaks</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="wrapper">
        <h2>Registreeri end kasutajaks</h2>
        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nimi</label>
                <input type="text" name="name" class="form-input <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div> 
            <div class="form-group">
                <label>Kasutajanimi</label>
                <input type="text" name="username" class="form-input <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Parool</label>
                <input type="password" name="password" class="form-input <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Registreeru</button>
            <p>Kui sul on juba konto, <a href="login.php">logi sisse</a>.</p>
        </form>
    </div>    
</body>
</html>