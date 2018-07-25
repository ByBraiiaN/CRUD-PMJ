<?php require "app/config/database.php"; ?>
<?php require "app/functions/functions.php"; ?>
<?php require "plantilla/header.inc"; ?>

  <body class="bg-light">
    <?php require "plantilla/menu.inc"; ?>
    <?php require "plantilla/miga.inc"; ?>

    <main role="main" class="container">    
      <?php require "plantilla/titulo.inc"; ?>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Listado de empleados</h6>
        <br />
        <form class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control" id="txt_buscador" placeholder="Julio Sosa">
          </div>
          &nbsp;<a href="agregar.php" class="btn btn-primary">Agregar vendedor</a>
        </form>
        <br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Supervisor</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
              <?php $empleado = empleados(); $cont = 1; ?>
              <?php for($i = 0; $i < count($empleado); $i++): ?>
                <tr>
                    <td><?php echo $cont++; ?></td>
                    <td><?php echo $empleado[$i]->nombre; ?></td>
                    <td><?php echo $empleado[$i]->apellido; ?></td>
                    <td><?php echo $empleado[$i]->correo; ?></td>
                    <td><?php echo $empleado[$i]->telefono; ?></td>
                    <td><?php echo $empleado[$i]->supervisor; ?></td>
                    <td><a href="editar.php?id=<?php echo $empleado[$i]->id_empleado; ?>"><i class="fa fa-edit"></i></a> </td>
                    <td><a href="eliminar.php?id=<?php echo $empleado[$i]->id_empleado; ?>"><i class="fa fa-trash"></i></a></td>
                </tr>
              <?php endfor; ?>
            </tbody>
        </table>

  <nav aria-label="Page navigation">
    <ul class="pagination pagination-sm">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li class="active"><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
  
  </div>
</main>
<?php require "plantilla/footer.inc"; ?>