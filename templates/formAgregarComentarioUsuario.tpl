
<form action="captcha.php" class="agregarComentario form-horizontal" method="post" >
  <input type="hidden" id="id_usuario" value="{$usuario}">
   <input type="hidden" id="id_plato" value="{$plato[0]['id_plato']}">


   <div class="form-group">
      <label for="comment">Ingrese su comentario</label>
      <textarea class="form-control" rows="5" id="opinion"></textarea>
  </div>
   <div class="form-group">
   <label for="exampleInputName2" class=" control-label">Calificacion   </label>
   <label class="radio-inline "><input class="puntaje" type="radio" name="puntaje" value= "1" >1</label>
   <label class="radio-inline "><input class="puntaje" type="radio" name="puntaje" value= "2">2</label>
   <label class="radio-inline "><input class="puntaje"  type="radio" name="puntaje" value= "3">3</label>
   <label class="radio-inline "><input class="puntaje"  type="radio" name="puntaje" value= "4">4</label>
   <label class="radio-inline "><input class="puntaje"  type="radio" name="puntaje" value= "5">5</label>
  </div>
  
  <div class="form-group row">
    <label for="exampleFormControlFile1">Introzca el resultado de la suma para continuar...</label>
  </div>
  <div class="form-group row">

    <img class="rounded" src='captcha/captcha.php' />
    <input type='text' class="" name='captcha' id='captcha' value='' title='Introzca el resultado de la suma' placeholder="resultado..." />
  </div>


   <button type="submit" class="btn btn-default" >Enviar</button>



</form>
