
<form id= "filtro" method="post" >
   <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
         <button type="submit"  class=" btn btn-warning btn-mg" > Filtro <span class="glyphicon glyphicon-search"></span></button>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
         <select id = "id_menu" class="form-control " name="id_menu" >
            <option  value="">todas las categorias</option>
            {foreach from=$tipos item=tipo}
            <option  value="{$tipo['id_menu']}">{$tipo['nombre']}</option>
            {/foreach}
         </select>
      </div>

   </div>
</form>
