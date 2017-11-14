
<div class="row">
  {foreach from=$plato['imagenes'] item=imagen}
  <div class="col-md-4">
    <div class="thumbnail">

        <img src="{$imagen['url']}" alt="imagen de {$plato[0]['nombre']}"style="width:100%">


    </div>
  </div>
 {/foreach}
</div>
