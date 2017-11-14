<div class="row">
   <div class="col-md-6 col-md-offset-3">
      <form id ="registrar" class= "" method="post">
         <div class="form-group">
            <label for="usuario">Mail</label>
            <input type="email" class="form-control" id="usuario" name="usuario" placeholder="usuario@" required>
         </div>
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name ="password" placeholder="Password" required>
         </div>
         {if !empty($error) }
         <div class="alert alert-danger" role="alert">{$error}</div>
         {/if}


         <!-- <div class="g-recaptcha" data-sitekey="6LfHOTgUAAAAAHKJ-4nY3l-2U0FvXRHwCtKA3qF8"></div> -->



         <button type="submit" class="btn btn-warning btn-lg"> Registrarse </button>
      </form>
   </div>
</div>
