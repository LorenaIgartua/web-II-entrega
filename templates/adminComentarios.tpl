 {foreach from=$comentarios item=comentario}

  <li class="list-group-item list-group-item-warning ">
    <a href="" class="eliminarComentario btn btn-warning btn-lg" name="{$comentario['id_comentario']} " data-idplato="{$comentario['id_plato']}"><span class="glyphicon glyphicon-trash"></span></a>
    {$comentario['opinion']}
    <span class="badge ">{$comentario['mail']}  </span>
    <span class="label label-warning" >Puntaje: {$comentario['puntaje']} </span>
  </li>

  {/foreach}
