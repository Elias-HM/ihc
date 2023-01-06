<div class="form-row">
    <div class="from-group col-md-6">
        <label for="nombre">Nombre<small>*</small></label>
        <input type="text" name="nombre" id="nombre" class="form-control form-control-border border-width-3"
            value="{{ old('nombre')!=null ? old('nombre'): (isset($producto) ? $producto->nombre:'') }}"
            placeholder="Ingrese el Nombre completo" required autocomplete="off">
    </div>
    <div class="form-group col-md-3 col-sm-6">
        <label for="precio">Precio<small>*</small></label>
        <input type="number" name="precio" id="precio" class="form-control form-control-border border-width-3" min="0" step="0.01"
            value="{{ old('precio')!=null ? old('precio'): (isset($producto) ? $producto->precio:'') }}"
            placeholder="Ingrese el Precio" required autocomplete="off">
    </div>
    <div class="form-group col-md-3 col-sm-6">
        <label for="stock">Stock<small>*</small></label>
        <input type="number" name="stock" id="stock" class="form-control form-control-border border-width-3" min="0" step="0.01"
            value="{{ old('stock')!=null ? old('stock'): (isset($producto) ? $producto->stock:'') }}"
            placeholder="Ingrese el Stock" required autocomplete="off">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="codBarras">Codigo Barras</label>
        <input type="text" name="codBarras" id="codBarras" autocomplete="off" class="form-control form-control-border border-width-3"
            value="{{ old('codBarras')!=null ? old('codBarras'): (isset($producto) ? $producto->telefono:'') }}"
            placeholder="Ingrese el codigo de barras">
    </div>
    <div class="form-group col-md-4">
        <label for="idUnidadMedida">Unidad Medida<small>*</small></label>
        <select class="js-example-responsive form-control form-control-border border-width-3" style="width: 100%" name="idUnidadMedida"
            id="idUnidadMedida" required>
            <option value="">--- Seleccione una opci&oacute;n ---</option>
            @foreach ($unidad_medidas as $item)
            <option value="{{ $item->id }}" {{ $item->id ==(old('idUnidadMedida')!=null ? old('idUnidadMedida') : (isset($producto) ? $producto->idUnidadMedida : '') ) ? 'selected' : ''}}>
                {{ $item->nombre."\t[".$item->abreviatura."]" }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="idProveedor">Proveedor<small>*</small></label>
        <select class="js-example-responsive form-control form-control-border border-width-3" style="width: 100%" name="idProveedor"
            id="idProveedor" required>
            <option value="">--- Seleccione una opci&oacute;n ---</option>
            @foreach ($proveedors as $item)
            <option value="{{ $item->id }}" {{ $item->id ==(old('idUnidadMedida')!=null ? old('idUnidadMedida') : (isset($producto) ? $producto->idProveedor : '') ) ? 'selected' : ''}}>
                {{ $item->nombre."\t[ RUC: ".$item->documento."]" }}</option>
            @endforeach
        </select>
    </div>

</div>
<br>

<script>
    $('#tipoDocumento').on('change', function() {
       if(this.value=='DNI') {
           $('input[name="documento"]').attr('maxlength', 8).attr('minlength', 8);
       }
       if(this.value=='RUC') {
           $('input[name="documento"]').attr('maxlength', 11).attr('minlength', 11);
       }
       if(this.value=='') {
           $('input[name="documento"]').attr('maxlength', 0).attr('minlength', 0);
       }
   });
</script>
