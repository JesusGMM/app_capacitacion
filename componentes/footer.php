<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../componentes/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="../componentes/js/funcionesPublic.js" type="text/javascript"></script>

<?php
if (isset($_SESSION['iniciarSesionAppCap'])) {
    $usuario = $user->buscarUsuarios($_SESSION['id_app_cap'], 1);
    if (($usuario[0]->getRol() == 'Administrador general'))
        echo '<script src="../componentes/js/funcionesAdmin.js" type="text/javascript"></script>';
        echo '<script src="../vendor/select2/select2/dist/js/select2.min.js"></script>';
} ?>
<div id="editar-perfil">
</div>
</body>

</html>