<div class="cuerpo">
   <h1> usuarios Registrados </h1>
    {include file="navigationBarAdmin.tpl"}


    <!-- {foreach from=$usuarios item=usuario}

     <li class="list-group-item list-group-item-warning ">
       <a href="" class="eliminarComentario btn btn-warning btn-lg" name="{$comentario['id_comentario']} " data-idplato="{$comentario['id_plato']}"><span class="glyphicon glyphicon-trash"></span></a>
       {$usuario['mail']}
       {if $usuario['perfil'] == 0}
        <h2> Usuario Visitante</h2>
        {else}
        <h2>Usuario Administrador</h2>
        {/if}

       <span class="badge ">{$comentario['mail']}  </span>
       <span class="label label-warning" >Puntaje: {$comentario['puntaje']} </span>
     </li>

     {/foreach} -->




      <table class="menu"  >
         {foreach from=$usuarios item=usuario}
         <tr>
            <td id="plato"  >
                <h3>{$usuario['mail']} </h3>
            </td>
            <td id="plato"  >
              {if $usuario['perfil'] == 0}
              <span class="badge "> Usuario Visitante </span>
               <!-- <h2> Usuario Visitante</h2> -->
               {else}
                 <span class="badge "> Usuario Administrador </span>
               <!-- <h2>Usuario Administrador</h2> -->
               {/if}
            </td>

            <td class = "celda_boton" >
               <button  class="eliminarUsuario btn btn-warning btn-lg" name="{$usuario['id_usuario']}" ><span class="glyphicon glyphicon-trash"></span></button>
            </td>
            <td class = "celda_boton" >
               <button  class="editarUsuario btn btn-warning btn-lg" name="{$usuario['id_usuario']}" ><span class="glyphicon glyphicon-pencil"></span></button>
            </td>

         </tr>

         {/foreach}
      </table>

</div>
