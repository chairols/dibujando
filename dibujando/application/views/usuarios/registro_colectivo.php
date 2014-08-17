<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administracion | Concuso Gente de mi ciudad</title>
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

<body onLoad="MM_preloadImages('/assets/imagenes/concurso2.png','/assets/imagenes/concursosanteriores2.png','/assets/imagenes/comoparticipar2.png','/assets/imagenes/eljurado2.png','/assets/imagenes/premios2.png','/assets/imagenes/registrate2.png','/assets/imagenes//ingresar2.png','/assets/imagenes/bases2.png')">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1040"><img src="/assets/imagenes/header.jpg" width="950" height="150"  alt=""/></td>
  </tr>
  <tr>
    <td class="fondo6" ><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="202"><a href="/index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','/assets/imagenes/concurso2.png',1)"><img src="/assets/imagenes/concurso1.png" alt="" width="184" height="31" id="Image1"></a></td>
          <td class="fondoblanco" width="701" rowspan="20" ><table   width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><form role="form" method="post">
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="2" class="textorojochico">
                  <tr>
                    <td colspan="3" class="interiortabla2"><p><strong>Registrarse como: <a href="http://gentedemiciudad.com/usuarios/registrar">INIDIVIDUO</a> | <a href="http://gentedemiciudad.com/usuarios/registro_colectivo">COLECTIVO DE FOTÖGRAFOS</a></strong></p></td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                  <tr>
                    <td width="158"><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Nombre                    </div>
                      </span></td>
                    <td width="12">&nbsp;</td>
                    <td width="429"><span class="form-group">
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?=set_value('nombre')?>" autofocus>
                      <?php echo substr(form_error('nombre'), 3); ?></span></td>
                    </tr>
                  
                  
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">CUIT</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="text" class="form-control" name="numero_dni" placeholder="Numero de CUIT" value="<?=set_value('numero_dni')?>">
                      <?php echo substr(form_error('numero_dni'), 3); ?>
                      <?php if(isset($numero_dni)) echo $numero_dni; ?>
                      </span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Direccion</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?=set_value('direccion')?>">
                      <?php echo substr(form_error('direccion'), 3); ?></span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Ciudad</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" value="<?=set_value('ciudad')?>">
                      <?php echo substr(form_error('ciudad'), 3); ?></span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Codigo Postal</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="text" class="form-control" name="codigo_postal" placeholder="Codigo Postal" value="<?=set_value('codigo_postal')?>">
                      <?php echo substr(form_error('codigo_postal'), 3); ?></span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Provincia</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="text" class="form-control" name="provincia" placeholder="Provincia" value="<?=set_value('provincia')?>">
                      <?php echo substr(form_error('provincia'), 3); ?></span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Email</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email" value="<?=set_value('email')?>">
                      <?php echo substr(form_error('email'), 3); ?>
                      <?php if(isset($email)) echo $email; ?>
                      </span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Confirmar Email</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="email" class="form-control" name="email2" placeholder="Email" value="<?=set_value('email2')?>">
                      <?php echo substr(form_error('email2'), 3); ?>
                      <?php if(isset($email2)) echo $email2; ?>
                      </span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Telefono</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="tel" class="form-control" name="telefono" placeholder="Telefono" value="<?=set_value('telefono')?>">
                      <?php echo substr(form_error('telefono'), 3); ?></span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Crear Usuario</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?=set_value('usuario')?>">
                      <?php echo substr(form_error('usuario'), 3); ?>
                      <?php if(isset($usuario)) echo $usuario; ?>
                      </span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2"> Crear Password</div></span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                      <?php echo substr(form_error('password'), 3); ?></span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                      <div align="right" class="interiortabla2">Confirmar Password</div>
                      </label>
                      </span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="password" class="form-control" name="passconf" placeholder="Password">
                      <?php echo substr(form_error('passconf'), 3); ?></span></td>
                    </tr>
                  <tr>
                    <td><span class="form-group">
                      <label>
                        &nbsp;
                        </label>
                      </span></td>
                    <td>&nbsp;</td>
                    <td><span class="form-group">
                      <input type="checkbox" class="form-control" name="bases"> Acepto las bases y condiciones</span></td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><button type="submit" class="btn btn-default botonnoaprobar">Registrate</button></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  </table>
                </form></td>
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