<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <title>Login Test</title>
</head>
<body>
    <?php

    error_reporting(0);
    session_set_cookie_params(1,"/");
    session_start();


if (isset($_POST['login'])) {

    $_SESSION['login'] = $_POST['login'];

};

if (!isset($_SESSION['login'])){
    
    $label = "LOGIN<br>";
    echo '<form method="post">
    <label>';
    echo $label;
    echo '</label>
    <input type="text" name="login">
    <br><button>Continuar</button>
    </form>';
}

else if (!isset($_POST['senha'])){

    $label = "SENHA<br>";
    echo '<form method="post">
    <label>';
    echo $label;
    echo '</label>
    <input type="text" name="senha">
    <br><button>Continuar</button>
    </form>';
}

else if (isset($_POST['senha'])){
    $login = [
        'login' =>  $_SESSION['login'],
        'senha' => $_POST['senha']
    ];

    if (strlen($login['senha']) < 5){
        $login['senha'] = null;
        echo "<p>Sua senha deve ser maior que 5 digitos.</p>";
    }

    else {
        echo "<p>Seu login:" . $login['login'] . "<br>" . "Sua senha:" . $login['senha'] . "</p>";
    };
    session_destroy();
}

    ?>
</body>
</html>