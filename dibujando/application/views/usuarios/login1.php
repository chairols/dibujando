<?php
if($ok == '1') { ?>
<script type="text/javascript" src="/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        alert("Fuiste registrado exitosamente. Por favor corroborá tu casilla que te hemos enviado un correo electrónico con tus datos de acceso. Si no lo encontrás en tu bandeja de entrada, recordá chequear también las casillas de spam o correo no deseado.");
    });
</script>
<?php } ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingresar  | Concuso Gente de mi ciudad</title>
<link href="/assets/css/admin.css" rel="stylesheet" type="text/css">
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

<body onLoad="MM_preloadImages('/assets/imagenes/aprobadas2.jpg','/assets/imagenes/concurso2.png','/assets/imagenes/concursosanteriores2.png','/assets/imagenes/comoparticipar2.png','/assets/imagenes/eljurado2.png','/assets/imagenes/premios2.png','/assets/imagenes/registrate2.png','/assets/imagenes//ingresar2.png','/assets/imagenes/bases2.png')">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="/assets/imagenes/header.jpg" width="950" height="150"  alt=""/></td>
  </tr>
  <tr>
    <td class="fondo7"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="202"><a href="/index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','/assets/imagenes/concurso2.png',1)"><img src="/assets/imagenes/concurso1.png" alt="" width="184" height="31" id="Image1"></a></td>
          <td class="fondoblanco interiortabla2" width="701" rowspan="20"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center" class="bienvenido"><strong>Bienvenido</strong></div></td>
            </tr>
            <tr>
              <td><div align="center" class="bienvenido"><em>Por favor, ingresá tus datos</em></div></td>
              </tr>
            <tr>
              <td><div align="center"></div></td>
              </tr>
            <tr>
              <td><form role="form" method="post">
                <div align="center">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td><div align="center"></div></td>
                      </tr>
                    <tr>
                      <td><div align="center">
                        <input name="usuario" type="text" class="campoform" id="textfield" placeholder="Usuario" autofocus>
                        </div></td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td><div align="center"></div></td>
                      </tr>
                    <tr>
                      <td><div align="center">
                        <input name="password" type="password" class="campoform" id="textfield2" placeholder="Contraseña">
                        </div></td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td><div align="center"></div></td>
                      </tr>
                    <tr>
                      <td><div align="center">
                        <button name="button" type="submit" class="enviar">INGRESAR</button>
                        </div></td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                        <td><div align="center"><strong><a href="/usuarios/recuperar/">Olvidé mi contraseña</a></strong></div></td>
                      </tr>
                    </table>
                  </div>
                </form></td>
              </tr>
            <tr>
              <td><div align="center"></div></td>
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
          <td><a href="/como-participar/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','/assets/imagenes/comoparticipar2.png',1)"><img src="/assets/imagenes/comoparticipar1.png" alt="" width="184" height="31" id="Image5" border="0"></a></td>
        </tr>
        <tr>
          <td><a href="/usuarios/registrar/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','/assets/imagenes/registrate2.png',1)"><img src="/assets/imagenes/registrate1.png" alt="" width="184" height="31" id="Image8" border="0"></a></td>
        </tr>
        <tr>
          <td><a href="/usuarios/login/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','/assets/imagenes//ingresar2.png',1)"><img src="/assets/imagenes/ingresar1.png" alt="" width="184" height="31" id="Image9" border="0"></a></td>
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
          <td><a href="/ediciones_anteriores/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','/assets/imagenes/concursosanteriores2.png',1)"><img src="/assets/imagenes/concursosanteriores1.png" alt="" width="184" height="31" id="Image4" border="0"></a></td>
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
