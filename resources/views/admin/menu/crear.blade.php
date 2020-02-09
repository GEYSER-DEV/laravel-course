@extends("theme.$theme.layout");

@section('titulo')
    Sistemas Menus | Biblioteca SA CV
@endsection

@section('script')
    <script src="{{asset("assets/pages/script/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Menus</h3>
                </div>
                <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                    @csrf
                    <div class="box-body">
                        @include('admin.menu.form')
                    </div>
                    <div class="box-footer">
                        @include('includes.boton-form-crear')
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection