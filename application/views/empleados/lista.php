<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>RFC</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($empresas as $e): ?>
        <tr>
            <td><?php echo $e["nombreEmpresa"] ?></td>
            <td><?php echo $e["direccionEmpresa"] ?></td>
            <td><?php echo $e["RFCEmpresa"] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>