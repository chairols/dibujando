<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="/assets/css/admin.css" rel="stylesheet" type="text/css">

</head>

<body>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="/assets/imagenes/header.jpg" width="950" height="157"  alt=""/></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"><span class="bienvenido">Bienvenido <?=$session['nombre']?> <?=$session['apellido']?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="bienvenido"></div></td>
      </tr>
      <tr>
        <td class="fondomenu"><a href="fotos-aprobadas.php">Fotos aprobadas</a></td>
        <td rowspan="19"><div align="center">
                <?php
                $k = -1;
                if(count($fotos) > 0) { 
                    foreach ($fotos as $key => $value) {
                        $k = $key;
                        break;
                        }
                } ?>
                <?php if($k >= 0) { ?>
                <img src="/upload/<?=$fotos[$k]['foto']?>" width="640" height="480"  alt=""/>
                <?php } ?></div></td>
      </tr>
      <tr>
        <td class="fondomenu"><a href="index.php">Fotos pendientes</a></td>
        </tr>
      <tr>
        <td class="fondomenu"><a href="/usuarios/jurados/">Jurados</a></td>
        </tr>
      <tr>
        <td class="fondomenu"><a href="preseleccionadas.php">Preseleccionadas</a></td>
        </tr>
      <tr>
        <td class="fondomenu"><a href="ganadoras.php">Ganadoras</a></td>
        </tr>
      <tr>
        <td class="fondomenu"><a href="buscar-foto.php">Buscar foto</a></td>
        </tr>
      <tr>
        <td class="fondomenu"><a href="buscar-usuario.php">Buscar usuario</a></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">
          <table width="30%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <?php if($k >= 0) { ?>
              <td><a href="/fotos/aprueba/<?=$fotos[$k]['idfoto']?>/2/"><img src="/assets/imagenes/no.jpg" width="50" height="50"  alt=""/></a></td>
              <td><div align="right"><a href="/fotos/aprueba/<?=$fotos[$k]['idfoto']?>/1/"><img src="/assets/imagenes/si.jpg" width="50" height="50"  alt=""/></a></div></td>
                <?php } ?>
            </tr>
          </table>
        </div></td>
      </tr>
      <tr>
        <td width="202">&nbsp;</td>
        <td width="701">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#34499E"><img src="/assets/imagenes/footer.jpg" width="950" height="60"  alt=""/></td>
  </tr>
  <tr>
    <td bgcolor="#F3F3F3">&nbsp;</td>
  </tr>
</table>
</body>
</html>