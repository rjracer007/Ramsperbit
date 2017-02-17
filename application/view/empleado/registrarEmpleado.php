<button type="button" class="btn bg-blue pull-right" data-toggle="modal" data-target="#edit">Registrar</button>
<form action="<?= URL ?>Cita/crear" method="POST">
    <div class="modal fade" id="edit" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Registar Cita</h4> <label name="txtCodigoEdit" id="txtCodigoEdit"></label>
      </div>
      <div class="modal-body">

          <div class="row">
        <div class="col-md-6">

          <label for="tipoc" class="control-label  text-uppercase">Tipo de Cita:</label>

              <select name="tipo" id="txtTipo_reserva" class="form-control" >

              <option value="Nor">Normal</opction>
              <option value="Evn">Eventeo</opction>

               </select>
               <br>
                         <label for="tipoc" class="control-label  text-uppercase">Tipo de Cliente:</label>

              <select name="tipo" id="txtTipo_reserva" class="form-control" >

              <option value="Nor">Común</opction>
              <option value="Evn">VIP</opction>

               </select>

                   <br>


                <label for="fec" class="control-label  text-uppercase">Fecha de la Cita:</label>
                <input type="datetime-local" id="txtFecha_hora" name="txtFecha_hora">
             <div> </div> </div>

        <div class="col-md-6">
        <label for="ide" class="control-label  text-uppercase">Identificación:</label>
              <input type="text"  placeholder="Identificación" id="txtide" class="form-control">

            <br>
            <label for="ide" class="control-label  text-uppercase">Numero de Personas:</label>
                  <input type="number"  value="1" max="8" min="1" step="1" id="txtNumero_personas" class="form-control">
                <br>
                      <label for="ide" class="control-label  text-uppercase">Hora de la Cita:</label>
              <input type="text"  placeholder="Hora de la cita" id="txtide" class="form-control">
              <br>
        </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn bg-blue pull-right">registrar</button>
      </div>
    </div>
  </div>
</div>
</form>

