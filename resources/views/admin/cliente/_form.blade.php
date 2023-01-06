<div class="form-group row">
    <label for="nombre">Nombre<small>*</small></label>
    <input type="text" name="nombre" id="nombre" class="form-control form-control-border border-width-3"
        value="{{ old('nombre')!=null ? old('nombre'): (isset($cliente) ? $cliente->nombre:'') }}"
        placeholder="[Ejemplo: Jorge Molina Huanca]" required autocomplete="off">
</div>

<div class="form-row">
    <div class="form-group col-md-4 col-sm-6">
        <label for="tipoDocumento">Tipo Documento<small>*</small></label>
        <select class="js-example-responsive form-control form-control-border border-width-3"
            style="width: 100%" name="tipoDocumento" id="tipoDocumento" required>
            <option value="">--- Seleccione una opci&oacute;n ---</option>
            <option value="DNI" {{ ((old('tipoDocumento')!=null ? old('tipoDocumento'): (isset($cliente) ?
                $cliente->tipoDocumento:''))=='DNI') ? 'selected' : '' }}>DNI</option>
            <option value="RUC" {{ ((old('tipoDocumento')!=null ? old('tipoDocumento'): (isset($cliente) ?
                $cliente->tipoDocumento:''))=='RUC') ? 'selected' : '' }}>RUC</option>
        </select>
    </div>

    <div class="form-group col-md-4 col-sm-6">
        <label for="documento">Nro Documento<small>*</small></label>
        <input type="text" name="documento" id="documento"
            class="form-control form-control-border border-width-3" autocomplete="off"
            onKeypress="soloNumeros();"
            value="{{ old('documento')!=null ? old('documento'): (isset($cliente) ? $cliente->documento:'') }}"
            {{ ((old('tipoDocumento')!=null ? old('tipoDocumento'): (isset($cliente) ?
            $cliente->tipoDocumento:''))=='DNI') ? 'maxlength=8 minlength=8' : (((old('tipoDocumento')!=null ?
        old('tipoDocumento'): (isset($cliente) ? $cliente->tipoDocumento:''))=='RUC') ? 'maxlength=11
        minlength=11':'maxlength=0 minlength=0') }} placeholder="Seleccione un tipo de documento" required>
    </div>

    <div class="form-group col-md-4">
        <label for="telefono">Tel&eacute;fono</label>
        <input type="text" name="telefono" id="telefono" autocomplete="off"
            class="form-control form-control-border border-width-3" minlength="1" maxlength="9"
            onKeypress="soloNumeros();"
            value="{{ old('telefono')!=null ? old('telefono'): (isset($cliente) ? $cliente->telefono:'') }}"
            placeholder="[Ejemplo: 927284672]">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="direccion">Direcci&oacute;n</label>
        <input type="text" name="direccion" id="direccion"
            class="form-control form-control-border border-width-3" autocomplete="off"
            value="{{ old('direccion')!=null ? old('direccion'): (isset($cliente) ? $cliente->direccion:'') }}"
            placeholder="[Ejemplo: Av. Peru S/N]">
    </div>
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" autocomplete="off"
            class="form-control form-control-border border-width-3"
            value="{{ old('email')!=null ? old('email'): (isset($cliente) ? $cliente->email:'') }}"
            placeholder="[Ejemplo: example@mail.com]">
    </div>
</div>
<br>

<script>
    $('#tipoDocumento').on('change', function() {
        if(this.value=='DNI') {
            $('input[name="documento"]').attr('maxlength', 8).attr('minlength', 8);
            $('input[name="documento"]').attr('placeholder', '[Ejemplo: 84734932]');
        }
        if(this.value=='RUC') {
            $('input[name="documento"]').attr('maxlength', 11).attr('minlength', 11);
            $('input[name="documento"]').attr('placeholder', '[Ejemplo: 10847349322]');
        }
        if(this.value=='') {
            $('input[name="documento"]').attr('maxlength', 0).attr('minlength', 0);
            $('input[name="documento"]').attr('placeholder', 'Seleccione un tipo de documento');
        }
    });
</script>
