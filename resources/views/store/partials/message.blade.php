<!--<div class="alert alert-info alert-dismissible text-center" role="alert"></div>-->
<!--	<button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
<!--		<span aria-hidden="true">&times;</span>-->
<!--	</button>-->
    @if(Session::has('message'))

    <script>
        $(document).ready(function()
        {
            $("#mostrarmodal").modal("show");
        });
    </script>
    @endif
<!--    /<h2><strong><i class="fa fa-info-circle"></i></strong> {{ \Session::get('message') }}</h2>-->


    <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
<!--                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
<!--                    <h3>Cabecera de la ventana</h3>-->
                </div>
                <div class="modal-body" style="text-align: center">
                    <h3>{{ \Session::get('message') }}</h3>

                </div>
                <div class="modal-footer" style="text-align: center">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
