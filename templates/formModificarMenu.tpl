<div class="cuerpo">
   <h1>Modificar Menu</h1>

       {include file="navigationBarAdmin.tpl"}
       
   <div class="formulario_rest">

        <form class="actualizarMenu form-horizontal" method="post" >
           <input type="hidden" name="id_menu" value="{$menu[0]['id_menu']}">
           <label for="exampleInputName2" class="control-label">Modificar Nombre de Menu</label>
           <input type="text" class="form-control" id="nombre" name="nombre" value= "{$menu[0]['nombre']}">
           <button type="submit" class="btn btn-default" >Modificar Categoria</button>
        </form>

    </div>
</div>
