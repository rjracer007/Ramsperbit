<link rel="stylesheet" href="<?= URL ?>bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="<?= URL ?>plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?= URL ?>plugins/datepicker/datepicker3.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= URL ?>plugins/iCheck/all.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="<?= URL ?>plugins/colorpicker/bootstrap-colorpicker.min.css">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="<?= URL ?>plugins/timepicker/bootstrap-timepicker.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="<?= URL ?>plugins/select2/select2.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?= URL ?>dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?= URL ?>dist/css/skins/_all-skins.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
    <center>
      <!-- Small boxes (Stat box) -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Empleados Licol S.A.S</h1>
            <br><br><br>
            <style type="text/css">
              #are{
                position:absolute;
                top: 90px;
                left: 950px;
            }
            </style>
            <a href="<?= URL ?>gusuario/registrar " id="are" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign">Registrar</i></a>
            <table class="table table-bordered table-hover">
              <thead>
                <th>IDENTIFICACIÓN</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>FECHA INGRESO</th>
                <th>CARGO</th>
                <th>ESTADO</th>
                <th>OPCIONES</th>
                <th></th>
              </thead>
              <tbody>
                <tr>
                  <td>123456456</td>
                  <td>Estiven</td>
                  <td>Garcia Piedrahita</td>
                  <td>15/02/2017</td>
                  <td>Gefe produccion</td>
                  <td>Laborando</td>
                  <td>
                    <a href="" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove-sign"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </center>
    </section>
    <!-- /.content -->
  </div>
  <script src="<?= URL ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?= URL ?>bootstrap/js/bootstrap.min.js"></script>
  <!-- Select2 -->
  <script src="<?= URL ?>plugins/select2/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="<?= URL ?>plugins/input-mask/jquery.inputmask.js"></script>
  <script src="<?= URL ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="<?= URL ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="<?= URL ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="<?= URL ?>plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?= URL ?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="<?= URL ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?= URL ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="<?= URL ?>plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="<?= URL ?>plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= URL ?>dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= URL ?>dist/js/demo.js"></script>
