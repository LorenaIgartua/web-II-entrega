<div class="cuerpo">
   <h1>menú</h1>
    {include file="navigationBarAdmin.tpl"}
   {include file="formFiltro.tpl"}

   {if !empty($error) }
   <div class="alert alert-danger row agregarPlato" role="alert">{$error}</div>
   {/if}

      {foreach from=$tipos item=tipo}
      <h3>{$tipo['nombre']}
         <button  class="eliminarMenu btn btn-warning btn-xs " name="{$tipo['id_menu']}" ><span class="glyphicon glyphicon-trash"></span></button>
         <button  class="cargarMenu btn btn-warning btn-xs" name="{$tipo['id_menu']}" ><span class="glyphicon glyphicon-pencil"></span></button>
      </h3>
      <table class="menu"  >
         {foreach from=$platos item=plato}
         {if ($plato['id_menu']==$tipo['id_menu'])}
         <tr>
            <td id="plato" class = "celda_plato" >
               <h4>{$plato['nombre']}</h4>
               <br>
               {$plato['descripcion']}
            </td>
            <td id="precio" class = "celda_precio" >{$plato['valor']}</td>
            <td class = "celda_boton" >
               <button  class="eliminarPlato btn btn-warning btn-lg" name="{$plato['id_plato']}" ><span class="glyphicon glyphicon-trash"></span></button>
            </td>
            <td>
               <button  class="cargarPlato btn btn-warning btn-lg" name="{$plato['id_plato']}"><span class="glyphicon glyphicon-pencil"></span></button>
            </td>
         </tr>
         {/if}
         {/foreach}
      </table>
      {/foreach}
   </div>
</div>
