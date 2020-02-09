<div class="form-group">
    <label for="nombre" class="text-right col-lg-3 requerido has-error">Nombre</label>
    <div class="col-lg-8">
        <input id="nombre" class="form-control" type="text" value="{{old('nombre')}}" name="nombre" required>
    </div>
</div>

<div class="form-group">
    <label for="url" class="text-right col-lg-3 requerido">Url</label>
    <div class="col-lg-8">
        <input id="url" class="form-control" type="text" value="{{old('url')}}" name="url" required>
    </div>
</div>

<div class="form-group">
    <label for="icono" class="text-right col-lg-3">Icono</label>
    <div class="col-lg-8">
        <input id="icono" class="form-control" type="text" value="{{old('icono')}}" name="icono">
    </div>
    <div class="col-lg-1">
        <span id="mostrar-icono" class="fa fa-fw {{old("icono")}}"></span>
    </div>
</div>