<?php require "app/config/database.php"; ?>
<?php require "app/functions/functions.php"; ?>

<?php if($_SERVER['REQUEST_METHOD'] == "POST"){
  add();
} ?>

<?php require "plantilla/header.inc"; ?>
  <body class="bg-light">
    <?php require "plantilla/menu.inc"; ?>
    <?php require "plantilla/miga.inc"; ?>

    <main role="main" class="container">
      <?php require "plantilla/titulo.inc"; ?>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Agregar empleado </h6>
        <br>
<form method="POST">
 <fieldset>
 <?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : ""; ?>
  <div class="row">
    <div class="col-md-6">       
        <div class="form-group">
           <label for="disabledTextInput">Nombres</label>
           <input type="text" name="txt_nombre" class="form-control" placeholder="Nombres" required>
        </div>
        <div class="form-group">
           <label for="disabledTextInput">Apellidos</label>
           <input type="text" name="txt_apellido" class="form-control" placeholder="Apellidos" required>
        </div>
        <div class="form-group">
            <label for="disabledTextInput">Correo</label>
            <input type="text" name="txt_correo" class="form-control" placeholder="correo@gmail.com" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="disabledTextInput">Teléfono</label>
            <input type="text" name="txt_telefono" class="form-control" placeholder="0000-0000" required>
        </div>
        <div class="form-group">
          <label for="disabledSelect">Supervisor</label>
          <select name="txt_supervisor" class="form-control">
            <option value="0">Elegir supervisor</option>
            <?php $supervisores = supervisores(); ?>
            <?php foreach($supervisores as $key => $supervisor): ?>
              <option value="<?php echo $supervisor->id_supervisor; ?>"><?php echo $supervisor->supervisor; ?></option>
            <?php endforeach; ?>
          </select>
        </div>  
    </div>
  </div>
  <hr>
    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Aceptar </button>
    <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"></i> Cancelar </button>
  </fieldset>
</form>
      </div>
    </main>
<?php require "plantilla/footer.inc"; ?>