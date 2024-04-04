<?= $this->extend('plantilla') ?>

<?= $this->section('contenido') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <a class="btn btn-primary" href="<?= base_url('clientes/nuevo') ?>">Crear nuevo cliente</a>

    <form class="d-flex flex-grow-1 ms-2" action="<?= base_url('clientes/buscar') ?>" method="get">
        <input type="text" name="q" class="form-control me-2" placeholder="Buscar cliente" autocomplete="off" required>
        <button type="submit" class="btn btn-outline-primary">Buscar</button>
    </form>
</div>

<div class="table-responsive">
    <table class="table table-hover table-sm">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cédula</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $cliente['nombres'] ?></td>
                    <td><?= $cliente['apellidos'] ?></td>
                    <td><?= $cliente['cedula'] ?></td>
                    <td><?= $cliente['telefono'] ?></td>
                    <td><?= $cliente['email'] ?></td>
                    <td>
                        <div class="btn-group">
                            <form action="<?= base_url('clientes/editar/' . $cliente['id']) ?>" method="get">
                                <button class="btn btn-warning btn-sm" type="submit">Editar</button>
                            </form>
                            <form id="delete-form-<?= $cliente['id'] ?>" action="<?= base_url('clientes/delete/' . $cliente['id']) ?>" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
