{!! Form::open(['route'=>'inventarios.titems.store', 'method'=>'post']) !!}
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" id="modalcreate">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="crear" class="modal-header">
                    <h5>Nuevo</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-upload"></i> Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}