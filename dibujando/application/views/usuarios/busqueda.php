<table border="1">
    <tr>
        <th>Usuario</th>
    </tr>
    <?php foreach($usuarios as $usuario) { ?>
    <tr>
        <td><?=$usuario['usuario']?></td>
    </tr>
    <?php } ?>
</table>
