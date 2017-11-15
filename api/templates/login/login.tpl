<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <base href="'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/'"> -->
      <title>{{$titulo}}</title>
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>

<div class="row">
   <div class="col-md-6 col-md-offset-3">
      <form action="verificarUsuario" id = "login" method="post">
         <div class="form-group">
            <label for="usuario"> Usuario </label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required >
         </div>
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name ="password" placeholder="Password" required >
         </div>
         {if !empty($error) }
         <div class="alert alert-danger" role="alert">{$error}</div>
         {/if}
         <button type="submit" class="btn btn-warning btn-lg">Iniciar Sesion</button>
      </form>
  </div>
</div>

</body>
</html>
