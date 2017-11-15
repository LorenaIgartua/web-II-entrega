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



   <div class="formulario_rest">

     <button type="submit" class= "nuevoComentario btn btn-warning btn-lg" name="{$plato[0]['id_plato']}"> Dejenos su comentario </button>
        <!-- <a href="nuevoMenu" class= "nuevoComentario" ><button  class="btn btn-warning btn-lg" name="$plato[0]['id_plato']"> Dejenos su comentario  </button></a> -->

      </div>

      <div id="comentarios">
        <h4>Comentarios de nuestros clientes: </h3>
        <ul class="list-group">
          <!-- {foreach from=$comentarios item=comentario}

           <li class="list-group-item list-group-item-warning ">
              <span class="badge ">{$comentario['mail']}  </span>
             <span class="label label-warning" >Puntaje: {$comentario['puntaje']} </span>
           </li>

           {/foreach} -->
        </ul>
      </div>
