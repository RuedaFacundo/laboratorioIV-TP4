<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php 
          require_once "header.php";
     ?>
     <main class="d-flex align-items-center justify-content-center height-100">
          <div class="content">
               <header class="text-center">
                    <h2>Practico Nro 4</h2>
               </header>
               <form action="action.php" method="POST" class="login-form bg-dark-alpha p-5 text-white">
                    <div class="form-group">
                         <label for="user">Usuario</label>
                         <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                         <label for="password">Contrase&ntilde;a</label>
                         <input type="password" name="password" class="form-control form-control-lg" placeholder="Ingresar constrase&ntilde;a">
                    </div>
                    <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesi&oacute;n</button>
               </form>
          </div>
     </main>
     <?php 
          require_once "footer.php";
     ?>
</body>
</html>


