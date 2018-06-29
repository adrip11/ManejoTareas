@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tareas</div>

                <div class="card-body">
<div class="table-responsive">
  <example></example>
  <table class="table table-bordered">
    <thead>
      <tr>
        @foreach ($estados as $estado)
          <td class="info" align="center"> {{$estado->Nombre}}
            <button type="button" class="btn btn-info " tada-target="modal"id="agregar">Nueva</button>

          </td>
        @endforeach
      </tr>
    </thead>
    <tbody>
<example></example>
    </tbody>

  </table>

</div>



                </div>
            </div>
        </div>
    </div>
</div>

@include('modals.crearTarea')
<script type="text/javascript">
  $('#agregar').on('click',function(){
    $('#tarea').modal('show()');

  })
</script>
<script src="{{ asset('js/tarea.js') }}"></script>
@endsection
