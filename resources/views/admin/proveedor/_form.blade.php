<div class="form-row">
    <div class="form-group col-md-12">
        <label for="nombre">Nombre<small>*</small></label>
        <input type="text" name="nombre" id="nombre" class="form-control form-control-border border-width-3"
            value="{{ old('nombre')!=null ? old('nombre'): (isset($proveedor) ? $proveedor->nombre:'') }}"
            placeholder="[Ejemplo: Jorge Molina Huanca]" required autocomplete="off" autofocus>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="documento">RUC<small>*</small></label>
        <input type="text" name="documento" id="documento" maxlength="11" minlength="11"
            class="form-control form-control-border border-width-3" autocomplete="off"
            value="{{ old('documento')!=null ? old('documento'): (isset($proveedor) ? $proveedor->documento:'') }}"
            onKeypress="soloNumeros();" placeholder="[Ejemplo: 10847349322]" required>
    </div>
    <div class="form-group col-md-4">
        <label for="telefono">Tel&eacute;fono</label>
        <input type="text" name="telefono" id="telefono" autocomplete="off"
            class="form-control form-control-border border-width-3" minlength="1" maxlength="9"
            value="{{ old('telefono')!=null ? old('telefono'): (isset($proveedor) ? $proveedor->telefono:'') }}"
            onKeypress="soloNumeros();" placeholder="[Ejemplo: 927284672]">
    </div>
    <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" autocomplete="off"
            class="form-control form-control-border border-width-3"
            value="{{ old('email')!=null ? old('email'): (isset($proveedor) ? $proveedor->email:'') }}"
            placeholder="[Ejemplo: example@mail.com]">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="direccion">Direcci&oacute;n</label>
        <input type="text" name="direccion" id="direccion" placeholder="[Ejemplo: Av. Peru S/N]"
            class="form-control form-control-border border-width-3" autocomplete="off"
            value="{{ old('direccion')!=null ? old('direccion'): (isset($proveedor) ? $proveedor->direccion:'') }}">
    </div>
</div>
<br>

<script>
</script>
