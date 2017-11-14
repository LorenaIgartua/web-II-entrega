<div class="cuerpo">
   <h1>menú</h1>
   {include file="formFiltro.tpl"}
   <div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
      {foreach from=$tipos item=tipo}
      <h3>{$tipo['nombre']}</h3>
      <table class="menu" id = "{$nombre_menu['tipo_nombre']}" >
         {foreach from=$platos item=plato}
         {if ($plato['id_menu']==$tipo['id_menu'])}
         <tr>
         <td>
            <button type="button" class="btn btn-warning btn-xs verPlato" name= "{$plato['id_plato']}" > VER </button>

            </td>
            <td id="plato" class = "celda_plato" >
               <h4>{$plato['nombre']}</h4>
            </td>
            <td id="precio" class = "celda_precio" >{$plato['valor']}</td>
         </tr>
         {/if}
         {/foreach}
      </table>
      {/foreach}
   </div>
</div>
