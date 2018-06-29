

  <!-- Modal -->
  <div class="modal fade" id="tarea" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar nueva tarea</h4>
        </div>
        <div class="modal-body">
          <form action="agregarTarea" method="post" id="frmTarea">
              <div class="row">
                <div class="form-group">
                    <input type="text" name="Descripcion" id="Descripcion">

                </div>

              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal">Guardar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>

    </div>
  </div>
