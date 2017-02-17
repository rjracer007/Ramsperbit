<div class="box-body">
  <div class="row">
    <div class="col-lg-12">
    <form action="<?= URL ?>gusuario/registrar" method="POST">
      <h1>Registrar Empleado</h1>
          <div class="col-md-12">
            <label for="ide" class="control-label  text-uppercase">Identificación:</label>
            <input type="text"  placeholder="Identificación" id="txtide" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="ide" class="control-label  text-uppercase">Nombres:</label>
            <input type="text"  placeholder="Nombres" id="txtide" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="ide" class="control-label  text-uppercase">Apellidos:</label>
            <input type="text" placeholder="Apellidos" id="txtNumero_personas" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="ide" class="control-label  text-uppercase">Celular:</label>
            <input type="text"  placeholder="Celular" id="txtide" class="form-control">
          </div>
          <div class="form-group">
            <label>Tipo de RH:</label>
              <select class="form-control select2" disabled="disabled" style="width: 100%;">
                  <option selected="selected">O-</option>
                  <option>O+</opction>
                  <option>A-</opction>
                  <option>A+</opction>
                  <option>B-</opction>
                  <option>B+</opction>
                  <option>AB-</opction>
                  <option>AB+</opction>
              </select>
          </div>
    </form>
    </div>
  </div>
</div>



















             
              <div class="col-md-6">
                <label for="fec" class="control-label  text-uppercase">Fecha de Nacimiento:</label>
                <input type="datetime-local" id="txtFecha_hora" name="txtFecha_hora">
              </div>
              <div class="col-md-6">
                 <label for="ide" class="control-label  text-uppercase">Correo Electronico:</label>
                 <input type="text" placeholder="Correo Electronico" id="txtNumero_personas" class="form-control">
             </div>
             <div class="col-md-6">
                 <label for="fec" class="control-label  text-uppercase">Fecha de Ingreso:</label>
                 <input type="datetime-local" id="txtFecha_hora" name="txtFecha_hora">
             </div>
              <div class="col-md-6">
                <label for="ide" class="control-label  text-uppercase">Numero Hijos:</label>
                <input type="text" placeholder="Numero Hijos" id="txtNumero_personas" class="form-control">
              </div>
              <div class="col-md-6">
                 <label for="ide" class="control-label  text-uppercase">Telefono Fijo:</label>
                 <input type="text" placeholder="Telefono Fijo" id="txtNumero_personas" class="form-control">
             </div>
              <div class="col-md-6">
                <label for="ide" class="control-label  text-uppercase">Direccion:</label>
                <input type="text" placeholder="Direccion" id="txtNumero_personas" class="form-control">
              </div >
              <div class="col-md-6">
                 <label for="ide" class="control-label  text-uppercase">Barrio:</label>
                 <input type="text" placeholder="Barrio" id="txtNumero_personas" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="ide" class="control-label  text-uppercase">Municipio:</label>
                <input type="text" placeholder="Municipio" id="txtNumero_personas" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="ide" class="control-label  text-uppercase">Cargo:</label>
                <input type="text" placeholder="Cargo" id="txtNumero_personas" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="ide" class="control-label  text-uppercase">Cesantias:</label>
                <input type="text" placeholder="Cesantias" id="txtNumero_personas" class="form-control">
              </div>
              <div class="col-md-6">
                 <label for="ide" class="control-label  text-uppercase">Pension:</label>
                 <input type="text" placeholder="Pension" id="txtNumero_personas" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="ide" class="control-label  text-uppercase">Caja de Compensacion:</label>
                <input type="text" placeholder="Caja de Compensacion" id="txtNumero_personas" class="form-control">
              </div>
              <div class="col-md-6">
                 <label for="ide" class="control-label  text-uppercase">Tipo de Contrato:</label>
                 <input type="text" placeholder="Tipo de Contrato" id="txtNumero_personas" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="ide" class="control-label  text-uppercase">Proceso:</label>
                <input type="text" placeholder="Proceso" id="txtNumero_personas" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="tipoc" class="control-label  text-uppercase">Tipo Documento:</label>
                    <select name="tipo" id="txtTipo_reserva" class="form-control" >
                    <option value="Nor">Cedula</opction>
                    <option value="Evn">TI</opction>
                    </select>
              </div>
              <div class="col-md-6">
                <label for="tipoc" class="control-label  text-uppercase">Genero:</label>
                <select name="tipo" id="txtTipo_reserva" class="form-control" >
                <option value="Nor">Masculino</opction>
                <option value="Evn">Femenino</opction>
                </select>
              </div>
              <div class="col-md-6">
                <label for="ide" class="control-label  text-uppercase">Cuenta:</label>
                <input type="text" placeholder="" id="txtNumero_personas" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
            <button href="<?= URL ?>gusuario/index" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn bg-blue pull-right">registrar</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</form>