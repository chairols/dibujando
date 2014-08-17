<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administracion | Concuso Gente de mi ciudad</title>
<link href="/assets/css/admin.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('/assets/imagenes/aprobadas2.jpg','/assets/imagenes/jurados2.jpg','/assets/imagenes/preseleccionadas2.jpg','/assets/imagenes/ganadoras2.jpg','/assets/imagenes/buscarfoto2.jpg','/assets/imagenes/logout2.jpg','/assets/imagenes/fotosnoaprobadas2.jpg')">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="/assets/imagenes/header.jpg" width="950" height="157"  alt=""/></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="202">&nbsp;</td>
        <td width="701"><div align="right"><span class="bienvenido">Bienvenido <?=$session['nombre']?> <?=$session['apellido']?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="bienvenido"></div></td>
      </tr>
      <tr>
        <td><a href="/fotos/aprobadas/1" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','/assets/imagenes/aprobadas2.jpg',1)"><img src="/assets/imagenes/aprobadas1.jpg" alt="" width="208" height="43" id="Image5" border="0"></a></td>
        <td rowspan="15"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="seleccionar">Buscar por:
              <form method="post">
                <select name="select" id="select">
                  <option value="id">ID</option>
                  <option value="titulo">TITULO FOTO</option>
                  <option value="dni">DNI</option>
                  </select>
                <label for="textfield">:</label>
                <input type="hidden" name="tipo" value="buscar">
                <input type="text" name="buscar" id="textfield"><input type="submit" name="button" id="button" value="Buscar"></form></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td><table width="98%" border="0" align="center" cellpadding="0" cellspacing="10">
              <?php 
              $i = 0;
              if($fotos != null) {
                    foreach ($fotos as $foto) {
                        if($i == 0) { ?>
              <tr>
                <?php } ?>
                <td bgcolor="#EAEAEA">
                  <form method="post">
                    <div align="center">
                      <a href="/upload/<?=$foto['foto']?>" rel="lightbox[roadtrip]"><img src="/upload/<?=$foto['foto']?>" width="150" height="113" /></a>
                      <br>
                      <br>
                      <span class="seleccionar">
                        Puntaje: <?= round($foto['promedio'], 2)?><br><br>
                        <input type="checkbox" name="seleccionar">
                        <label>Preseleccionar<br></label>
                        <input type="checkbox" name="ganadora">
                        <label>Ganadora</label><br><br>
                        <input type="hidden" name="tipo" value="foto">
                        <input type="hidden" name="idfoto" value="<?=$foto['idfoto']?>">
                        <input type="submit" class="enviar" value="Acepto">
                        </span>
                      </div>
                    </form>
                  </td>
                <?php
                        $i++;
                        if($i == 3) {
                            $i = 0; ?>
                </tr>
              <?php } 
                    }
              }
              ?>
              
              
              
              </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><a href="/fotos/no-aprobadas/1" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image97','','/assets/imagenes/fotosnoaprobadas2.jpg',1)"><img src="/assets/imagenes/fotosnoaprobadas1.jpg" alt="" width="208" height="43" id="Image97"></a></td>
      </tr>
      <tr>
        <td><a href="/usuarios/jurados/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','/assets/imagenes/jurados2.jpg',1)"><img src="/assets/imagenes/jurados1.jpg" alt="" width="208" height="43" id="Image7"border="0"></a></td>
      </tr>
      <tr>
        <td><a href="/fotos/preseleccionadas/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','/assets/imagenes/preseleccionadas2.jpg',1)"><img src="/assets/imagenes/preseleccionadas1.jpg" alt="" width="208" height="43" id="Image8"border="0"></a></td>
        </tr>
      <tr>
        <td><a href="/fotos/ganadoras/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','/assets/imagenes/ganadoras2.jpg',1)"><img src="/assets/imagenes/ganadoras1.jpg" alt="" width="208" height="43" id="Image9"border="0"></a></td>
        </tr>
      <tr>
        <td><a href="/fotos/buscar/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','/assets/imagenes/buscarfoto2.jpg',1)"><img src="/assets/imagenes/buscarfoto1.jpg" alt="" width="208" height="43" id="Image10"border="0"></a></td>
        </tr>
      <tr>
        <td><a href="/usuarios/logout/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','/assets/imagenes/logout2.jpg',1)"><img src="/assets/imagenes/logout1.jpg" alt="" width="208" height="43" id="Image11"border="0"></a></td>
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
        <td><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#34499E"><img src="/assets/imagenes/footer.jpg" width="950" height="60"  alt=""/></td>
  </tr>
</table>
</body>
</html>


<script type="text/javascript" src="/assets/lightbox2.04/js/prototype.js"></script>
<script type="text/javascript" src="/assets/lightbox2.04/js/scriptaculous.js?load=effects,builder"></script> 
<script type="text/javascript" src="/assets/lightbox2.04/js/lightbox.js"></script>
<link rel="stylesheet" href="/assets/lightbox2.04/css/lightbox.css" type="text/css" media="screen" />