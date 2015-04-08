<!DOCTYPE html>
<html>
    <head>
        <title>Tec Web - Trabalho 1</title>
        <meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />
        <link href="trabalho/style/main.css" rel="stylesheet" type="text/css"/>
        <link href="trabalho/style/menu.css" rel="stylesheet" type="text/css"/>
        <script src="trabalho/script/validate.js" type="text/javascript"></script>
        <script src="trabalho/script/loadxmldoc.js"></script>
        <script src="trabalho/script/jquery.min.js"></script>
    </head>

    <body>
        <div id="head"> 
            <h1>Tec Web - Trabalho 1</h1>
            <h2>300231 - Max Duarte Soares</h2>
        </div>
        <div id = "login">
            <form name="myForm" onsubmit="return validateForm()" method="post">
                Usuário: <input type="text" name="user">
                Senha: <input type="password" name="password">
                <input type="submit" value="Login">
            </form>
        </div>
