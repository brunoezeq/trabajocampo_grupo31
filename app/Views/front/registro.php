<div class="container py-5">
    <div class="row form-registro">
        <div class="col-md-8"> <div class="bg-verde-form p-4 rounded w-100 shadow">
                <h2>Unite a nuestra comunidad</h2>

                
<?php if (session('errores')): ?>
    <div class="alert alert-light shadow-sm mb-4" style="border-radius: 8px; border-left: 6px solid #dc3545; background-color: #f8f9fa;">
        <div class="p-3">
            <ul class="mb-0" style="list-style-type: disc; padding-left: 25px;">
                <?php foreach (session('errores') as $error): ?>
                    <li class="mb-1" style="color: #c82333; font-weight: 500;">
                        <?= esc($error); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

                <?php if(!empty($validation)): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($validation as $error) : ?>
                            <li> <?= esc($error) ?> </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <?php endif ?>

                <?php echo form_open('registro') ?>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nombre*</label>
                        <?php echo form_input(['name' => "nombre", 'class' => "form-control", 'value'=> set_value('nombre')]); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Apellido*</label>
                        <?php echo form_input(['name' => "apellido", 'class' => "form-control", 'value'=> set_value('apellido')]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">DNI*</label>
                        <?php echo form_input(['name' => "dni", 'class' => "form-control", 'value'=> set_value('dni')]); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Celular*</label>
                        <?php echo form_input(['name' => "celular", 'class' => "form-control", 'value'=> set_value('celular')]); ?>
                    </div>
                </div>

                <hr>
                <h5 class="text-white">Domicilio para hacer envios (unicamente en Chaco y Corrientes)</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Calle*</label>
                        <?php echo form_input(['name' => "calle", 'class' => "form-control", 'value'=> set_value('calle')]); ?>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Número*</label>
                        <?php echo form_input(['name' => "numero", 'class' => "form-control", 'value'=> set_value('numero')]); ?>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">C.P.*</label>
                        <?php echo form_input(['name' => "codigo_postal", 'class' => "form-control", 'value'=> set_value('codigo_postal')]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Piso (opcional)</label>
                        <?php echo form_input(['name' => "piso", 'class' => "form-control", 'value'=> set_value('piso')]); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Departamento (opcional)</label>
                        <?php echo form_input(['name' => "departamento", 'class' => "form-control", 'value'=> set_value('departamento')]); ?>
                    </div>
                </div>

                <div class="mb-3">
    <label class="form-label">Provincia*</label>
    <select name="provincia_id" id="provincia_id" class="form-control">
        <option value="">Seleccione una provincia</option>
        <?php foreach($provincias as $prov): ?>
            <option value="<?= $prov['id_provincia']; ?>">
                <?= $prov['nombre_provincia']; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Localidad*</label>
    <select name="localidad_id" id="localidad_id" class="form-control" disabled>
        <option value="">Primero seleccione una provincia</option>
    </select>
</div>

                <hr>
                <div class="mb-3">
                    <label class="form-label">Usuario*</label>
                    <?php echo form_input(['name' => "usuario", 'class' => "form-control", 'value'=> set_value('usuario')]); ?>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contraseña*</label>
                        <?php echo form_password(['name' => "contraseña", 'class' => "form-control"]); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Confirmar Contraseña*</label>
                        <?php echo form_password(['name' => "confirmar_contraseña", 'class' => "form-control"]); ?>
                    </div>
                </div>

                <?php echo form_submit('submit', 'Registrarse', "class= 'btn btn-outline-light w-100'"); ?>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#provincia_id').change(function() {
        var provinciaId = $(this).val();
        var $selectLocalidad = $('#localidad_id');

        if(provinciaId != '') {
            $.ajax({
                url: "<?= base_url('usuario/getLocalidadesPorProvincia') ?>/" + provinciaId,
                method: "GET",
                dataType: "json", // Indicamos que esperamos un JSON
                success: function(localidades) {
                    // Limpiamos el select y agregamos la opción por defecto
                    $selectLocalidad.empty();
                    $selectLocalidad.append('<option value="">Seleccione una localidad</option>');

                    // Iteramos sobre el array de objetos recibido
                    $.each(localidades, function(index, loc) {
                        $selectLocalidad.append(
                            $('<option>', {
                                value: loc.id_localidad,
                                text: loc.nombre_localidad
                            })
                        );
                    });

                    $selectLocalidad.prop('disabled', false);
                },
                error: function() {
                    alert('Error al obtener los datos del servidor');
                }
            });
        } else {
            $selectLocalidad.html('<option value="">Primero seleccione una provincia</option>');
            $selectLocalidad.prop('disabled', true);
        }
    });
});
</script>