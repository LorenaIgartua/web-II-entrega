<div class="cuerpo">
   <h1> ver Plato </h1>

   <div class="formulario_rest">

{foreach from=$tipos item=tipo}
 {if ($plato[0]['id_menu']==$tipo['id_menu'])}
    <h3>{$tipo['nombre']}</h3>
<table class="menu"  >
   <tr>
      <td id="plato" class = "celda_plato" >
         <h4>{$plato[0]['nombre']}</h4>
         <br>
         {$plato[0]['descripcion']}
      </td>
      <td id="precio" class = "celda_precio" >{$plato[0]['valor']}</td>
    </tr>
</table>
{/if}
{/foreach}
   </div>

   <div class="formulario_rest imgPlatos">
          {include file="imagenesUsuario.tpl"}
   </div>





      <div id="comentarios">
        <h4>Comentarios de nuestros clientes: </h3>
        <ul class="list-group">

        </ul>
      </div>

      <div class="formulario_rest">
   
   {include file="formAgregarComentarioUsuario.tpl"}
         </div>
