


<div class="row">
  {foreach from=$plato['imagenes'] item=imagen}
  <div class="col-md-4">
    <div class="thumbnail">

        <img src="{$imagen['url']}" alt="imagen de {$plato[0]['nombre']}"style="width:100%">
        <div class="caption">
<button  class="eliminarImagen btn btn-warning btn-sm" name="{$imagen['id_imagen']}" data-idplato="{$plato[0]['id_plato']}"><span class="glyphicon glyphicon-trash"></span></button>
        </div>

    </div>
  </div>
 {/foreach}
</div>
