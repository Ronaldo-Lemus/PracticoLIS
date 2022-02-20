<html lang="es" class="5">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/login.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">

    <div class="logo"> <img src="imagenes/Imagen2.png" alt=""> </div>
    <div class="text-center mt-4 name "> TextilExport</div>
    <form method="post" action="ingresar.php" class="p-3 mt-3">
        <div id="nombre" class="form-field d-flex align-items-center"> <span class="far fa-user"></span> 
        <input type="text" name="usuario" id="userName" placeholder="Username"> </div>
        <div id="clave" class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="palabra_secreta" id="pwd" placeholder="Password"> </div> 
        <button type="submit" name="register" class="btn mt-3">Login</button>
    </form>
    <div  class="text-center fs-6"> <a style="text-align:center" href="#">Forget password?</a> or <a href="#">Sign up</a> </div>
</div>
</body>
</html>