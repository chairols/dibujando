<a href="/usuarios/buscar/">Buscar usuarios</a> | <a href="/fotos/buscar/">Buscar fotos</a> | <a href="/fotos/aprobar/">Aprobar</a> | <a href="/usuarios/logout/">Logout</a>
<br>
<?php
$k = 0;
if(count($fotos) > 0) { 
    foreach ($fotos as $key => $value) {
        $k = $key;
        break;
    }?>
<img height="200px" width="200px" src="/upload/<?=$fotos[$k]['foto']?>"><br>
<br>
<a href="/fotos/aprueba/<?=$fotos[$k]['idfoto']?>/1/">SI</a> | <a href="/fotos/aprueba/<?=$fotos[$k]['idfoto']?>/2/">NO</a>
<?php } ?>

<table border="1">
    <tr>
        <th>Jurado</th>
        <th>Votadas</th>
        <th>Faltan Votar</th>
        <th>Total</th>
    </tr>
    <?php foreach($jurados as $jurado) { ?>
    <tr>
        <td><?=$jurado['nombre'].' '.$jurado['apellido']?></td>
        <td><?php
        $total = count($jurado['fotos']);
        $votadas = 0;
        foreach($jurado['fotos'] as $foto) {
            if(count($foto['voto']) == 4)
                $votadas++;
        }
        echo $votadas;
        ?></td>
        <td><?=$total-$votadas?></td>
        <td><?=$total?></td>
    </tr>
    <?php } ?>
</table>
