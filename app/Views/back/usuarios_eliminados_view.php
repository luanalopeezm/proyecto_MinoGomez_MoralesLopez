<h2 class="header-sections titulo-HeaderSections"><?= $titulo ?></h2>
<?php if(!empty(session()->getFlashdata('success'))): ?>
    <div class="alert alert-success" role="alert"><?= session()->getFlashdata('success'); ?></div>
<?php endif ?>

<div class="container lista-productos">
    <div class="d-flex justify-content-between mb-3">
        <input type="text" id="buscarUsuario" class="form-control w-25" placeholder="Buscar usuario...">
        <div>
            <a href="<?= base_url('listar_usuarios') ?>" class="btn btn-success">Volver</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-success table-bordered  border-light table-striped table-hover  w-100">
            <thead class="header-tabla">
                <tr class="test1">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Perfil ID</th>
                    <th>Baja</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="body-tabla" id="tablaUsuarios">
                <?php foreach ($usuarios as $usuario): ?>
                    <?php if ($usuario['baja'] === 'SI'): ?>
                        <tr class="">
                            <td><?= $usuario['id_usuario'] ?></td>
                            <td class="nombre-usuario"><?= $usuario['nombre'] ?></td>
                            <td class="apellido-usuario"><?= $usuario['apellido'] ?></td>
                            <td class="usuario-usuario"><?= $usuario['usuario'] ?></td>
                            <td class="email-usuario"><?= $usuario['email'] ?></td>
                            <td class="perfil-usuario"><?= $usuario['perfil_id'] ?></td>
                            <td class="baja-usuario"><?= $usuario['baja'] ?></td>
                            <td>
                                <a href="<?= base_url('editar_usuario/' . $usuario['id_usuario']) ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?= base_url('activar_usuario/' . $usuario['id_usuario']) ?>" class="btn btn-success btn-sm">Dar de alta</a>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

 <script src="assets\js\buscadorUsuarios.js"></script>