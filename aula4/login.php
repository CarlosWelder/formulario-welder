<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #201b2c;;
            display: flex;
            
        }
        div{
            background: #2f2841;
            box-shadow: 0px 10px 40px #00000056;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 15px;
        }
        .inputSubmit{
            background: #00ff88;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background: #05b362;
            cursor: pointer;
        }
       
        .volta{
  
  color: white;
  position: absolute;
  top: 10%;
  left: 10%;
  transform: translate(-50%);
  background-color: rgba(0, 0, 0, 0.6);
  padding: 15px;
  border-radius: 15px;
  width: 10%;
}

    </style>
</head>
<body>
    <a class="volta" href="home.php">Voltar</a>

    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">

        </form>
    </div>
</body>
</html>