<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div id="conteudo">
        <h1>Login</h1>
        <form method="POST" action="login.php">
        <input class="input" id="email" type="text" name="email" placeholder="email"><br><br> 
        <input class="input" id="senha" type="password" name="senha" placeholder="senha"><br>
        <br>
        <img id="img" width="40px"/>
        <span id="msgErro"></span>
        <br><br>
        <input style="width: 200px;" id="button" name="btn" type="submit" onclick="mostrar();" value="Logar"/>
      </form>
    </div>
</body>
</html>