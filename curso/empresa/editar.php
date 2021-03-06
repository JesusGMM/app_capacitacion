<?php
foreach ($empresas as $empresa) { ?>
    <form method="post" id="form-editar-empresa" class="row g-3 needs-validation-editar" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="id" value="<?php echo $empresa->getId(); ?>" />
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" value="<?php echo $empresa->getNombre(); ?>" placeholder="Nombre" required>
        </div>
        <div class="col-md-6">
            <label for="apellido" class="form-label">Nit</label>
            <input name="nit" type="text" class="form-control" value="<?php echo $empresa->getNit(); ?>" placeholder="NIT" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $empresa->getCorreo(); ?>" placeholder="Correo electrónico" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Ciudad</label>
            <input name="ciudad" type="text" class="form-control" value="<?php echo $empresa->getCiudad(); ?>" placeholder="Ciudad">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Dirreción</label>
            <input name="dirrecion" type="text" class="form-control" value="<?php echo $empresa->getDirrecion(); ?>" placeholder="Dirrecion" required>
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Telefono</label>
            <input name="telefono" type="text" class="form-control" value="<?php echo $empresa->getTelefono(); ?>" placeholder="Codigo" required>
        </div>
        <div class="col-md-6">
            <label for="flexSwitchCheckChecked" class="form-label">Estado Activo o inactivo</label>
            <div class="form-check form-switch">
                <input class="form-check-input check-estado" name="estado" type="checkbox" id="flexSwitchCheckChecked" onchange="informacion()" <?php if (isset($_POST['estado'])) echo "checked"; else if ($empresa->getEstado() == 1) echo "checked"; ?> />
            </div>
        </div>
        <div class="col-md-6" style="margin-top:2%">
            <label for="file" class="form-label">Nuevo Logo</label>
            <input type="file" class="form-control" name="imagen" id="file" onchange="subirImagen(event)" />
        </div>
        <input type="hidden" name="foto" value="<?php if (isset($_POST['foto'])) echo $_POST['foto']; else echo $empresa->getLogo(); ?>" />
        <div class="col-md-6" style="margin-top:2%" id="file-preview-zone">
            <?php
            if (isset($_POST['foto']))
                echo '<img style="height:150px; width:100%" src="../componentes/logos/empresa/' . $_POST['foto'] . '" alt="Capacitación sin imagen">';
            else
                echo '<img style="height:150px; width:100%" src="../componentes/logos/empresa/' . $empresa->getLogo() . '" alt="Capacitación sin imagen">'; ?>
        </div>
    </form>
<?php  }
