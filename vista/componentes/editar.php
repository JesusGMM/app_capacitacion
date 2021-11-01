<?php
if (isset($_POST['perfil'])) {
    require_once "../../controlador/usuario.controlador.php";
    $user = new ControladorUsuario(2);
    $registro = $user->editar($_POST);
    if ($registro[0] == 1) { ?>

        <script type="text/javascript">
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Usuario registrado',
                confirmButtonColor: "#0d6efd",
                showConfirmButton: false,
            })
            setTimeout(function() {
                location.href = '../vista/?lista-usuario'
            }, 1500);
        </script>
    <?php
    } else if ($registro[0] == 2) { ?>

        <script type="text/javascript">
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: ' <?php echo $registro[1]; ?>',
                customClass: {
                    popup: 'border-boton'
                },
                confirmButtonColor: "#f27474",
                showConfirmButton: true,
            })
        </script>
<?php

    }
}
