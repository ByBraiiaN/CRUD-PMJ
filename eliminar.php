<?php require "plantilla/header.inc"; ?>

  <body class="bg-light">

    <?php require "plantilla/menu.inc"; ?>
    <?php require "plantilla/miga.inc"; ?>

    <main role="main" class="container">
      
      <?php require "plantilla/titulo.inc"; ?>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Editar empleado </h6>
        <br>
<from method="post">
    <div class="bs-callout bs-callout-danger">
        <h4>¿Eliminar empleado de la Base de Datos?</h4>
        Si procede con la eliminación se perderá toda la información del empleado.
        <button type="submit" class="badge badge-success btn"><i class="fa fa-check-circle"></i>
        <button type="button" class="badge badge-danger btn"><i class="fa fa-times-circle"></i>
    </div>
</from>
        </div>
    </main>

<?php require "plantilla/footer.inc"; ?>