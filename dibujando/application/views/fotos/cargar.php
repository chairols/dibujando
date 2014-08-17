<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingresar - XV Concuso Gente de mi ciudad | Banco Ciudad</title>
<link href="/assets/css/admin.css" rel="stylesheet" type="text/css">
<!--<script type="text/javascript" src="/assets/js/jquery-2.1.0.min.js"></script>-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="/assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" href="/assets/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript">
    $(document).ready(function() {
        $("#boton").click(function() {
            $("#subiendo").show();
        });
        
        $("#bot").click(function() {
            if(confirm("Estás seguro que querés subir está foto? Una vez cargada no podrá ser reemplazada.")) {
                $("#boton").click();
            }
        });
    });
</script>
<?php if(count($fotos) == 2) { ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#texto1").hide();
        $("#texto2").show();
    });
</script>
<?php } ?>
<?php
if($exitoso == '1') { ?>
<script type="text/javascript">
    $(document).ready(function() {
        alert("Su foto ha sido cargada exitosamente");
    });
</script>
<?php } ?>
<script type="text/javascript">
    $(document).ready(function() {
        <?php foreach($fotos as $foto) { ?>
        $("#foto<?=$foto['idfoto']?>").fancybox();
        <?php } ?>
    });
</script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
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

<body onLoad="MM_preloadImages('/assets/imagenes/aprobadas2.jpg','/assets/imagenes/concurso2.png','/assets/imagenes/comoparticipar2.png','/assets/imagenes/eljurado2.png','/assets/imagenes/premios2.png','/assets/imagenes/bases2.png')">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="/assets/imagenes/header.jpg" width="950" height="150"  alt=""/></td>
  </tr>
  <tr>
    <td class="fondo6" ><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
          <td  width="701" rowspan="23"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="fondoblanco"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="bienvenido"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><div align="right"><strong>Bienvenido
                        <?=$session['nombre']?>
                        <?=$session['apellido']?>
                      </strong></div></td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><div id="texto1">
                        <p><strong>¡Ya ha terminado el periodo para subir fotos! </strong></p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p><br>
                          <br>
                        </p>
                      </div>
                          <div id="texto2" style="display: none"><br>
<br>

                        <strong>Ya estas participando !</strong><br>

                         <br>
                          Ya cargaste las 2 fotos permitidas <br><br>
                          Para finalizar sesión hace click en salir <br><br>
<br>
<br>
<br>
<br>


                          </div></td>
                    </tr>
                  </table>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p></td>
                </tr>
              </table></td>
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
          </table></td>
        </tr>
        <tr>
        <td width="202"><a href="/index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','/assets/imagenes/concurso2.png',1)"><img src="/assets/imagenes/concurso1.png" alt="" width="184" height="31" id="Image1"></a></td>
        </tr>
      <tr>
        <td><a href="/como-participar/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','/assets/imagenes/comoparticipar2.png',1)"><img src="/assets/imagenes/comoparticipar1.png" alt="" width="184" height="31" id="Image5" border="0"></a></td>
      </tr>
      <tr>
        <td><a href="/bases_y_condiciones/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','/assets/imagenes/bases2.png',1)"><img src="/assets/imagenes/bases1.png" alt="" width="184" height="31" id="Image10"></a></td>
      </tr>
      <tr>
        <td><a href="/premios/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','/assets/imagenes/premios2.png',1)"><img src="/assets/imagenes/premios1.png" alt="" width="184" height="31" id="Image7" border="0"></a></td>
        </tr>
      <tr>
        <td><a href="/jurado/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','/assets/imagenes/eljurado2.png',1)"><img src="/assets/imagenes/eljurado1.png" alt="" width="184" height="31" id="Image6" border="0"></a></td>
        </tr>
      <tr>
        <td><a href="/usuarios/logout/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','/assets/imagenes//logout2.png',1)"><img src="/assets/imagenes/logout1.png" alt="" width="184" height="31" id="Image9"></a></td>
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
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#34499E"><img src="/assets/imagenes/footer.jpg" width="950" height="60"  alt=""/></td>
  </tr>
</table>
</body>
</html>
