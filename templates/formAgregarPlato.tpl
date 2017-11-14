<div class="cuerpo">
   <h1>Agregar Plato</h1>

      {include file="navigationBarAdmin.tpl"}

      {if !empty($error) }
      <div class="alert alert-danger row agregarPlato" role="alert">{$error}</div>
      {/if}

   <div class="formulario_rest">

<form id= "agregarPlato" class="form-horizontal agregarPlato" method="post" >
   <label for="exampleInputName2" class="control-label">Tipo de Plato</label>
   <input type="hidden" class="form-control" id="nombre" name="id_menu" placeholder="plato">
   <select class="form-control" name="id_menu" id="tipo_plato" >
      {foreach from=$tipos item=tipo}
      <option value="{$tipo['id_menu']}">{$tipo['nombre']}</option>
      {/foreach}
   </select>
   <label for="exampleInputName2" class="control-label">Plato</label>
   <input type="text" class="form-control" id="nombre" name="nombre" placeholder="plato">
   <label for="exampleInputName2" class="control-label">Ingredientes</label>
   <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingredientes">
   <label for="exampleInputName2" class="control-label">Precio</label>
   <input type="text" class="form-control" id="valor" name="valor" placeholder="precio"> -->


    <label for="exampleInputName2" class=" control-label">Imagenes</label>
    <input class= "imagen" type="file" id="imagenes" name="imagenes[]" multiple>


   <button type="submit" class="btn btn-warning btn-lg" >Agregar</button>
</form>



   </div>
      </div>
