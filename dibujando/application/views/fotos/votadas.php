<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jurado  | Concuso Gente de mi ciudad</title>
<link href="/assets/css/jurado.css" rel="stylesheet" type="text/css">
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
<script type="text/javascript" src="/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $("#select").change(function() {
                window.location.replace("/fotos/votadas/"+$("#select").val()+"/");
            });
        });
</script>
</head>

<body onLoad="MM_preloadImages('/assets/imagenes/aprobadas2.jpg','/assets/imagenes/pendientes2.jpg','/assets/imagenes/logout2.jpg')">
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
        <td width="701"><div align="right"><span class="bienvenido"><strong>Bienvenido 
          <?=$session['nombre']?> <?=$session['apellido']?>
        </strong></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="bienvenido"></div></td>
      </tr>
      <tr>
        <td><a href="/fotos/votadas/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','/assets/imagenes/votadas2.jpg',1)"><img src="/assets/imagenes/votadas1.jpg" alt="" width="208" height="43" id="Image5"border="0"></a></td>
        <td rowspan="33"><div align="center">
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="10">
            <tr>
              <td>&nbsp;</td>
              <td><div style="text-align: center">
                      <ul class="pagination">
                          <?php foreach ($paginacion as $key => $value) { ?>
                          <li><a href="<?=$value?>"><?=$key?></a></li>
                          <?php } ?>
                      </ul>
                  </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <?php 
            $i = 0;      
            foreach($votadas as $votada) { 
                if($i == 0) { ?>
                    <tr>
            <?php } ?>
                        <td>
                            <div align="center" class="seleccionar">
                              <table width="166" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td colspan="3" class="marco1"></td>
                                </tr>
                                  <tr>
                                    <td width="9" class="marco2">&nbsp;</td>
                                    <td bgcolor="#D6D6D6"  ><div align="center"><a href="/upload/<?=$votada['foto']['foto']?>" id="foto<?=$votada['foto']['idfoto']?>"><img src="/upload/chicas/<?=$votada['foto']['foto']?>" width="150" height="113"/></a></div></td>
                                    <td width="9" class="marco3">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td colspan="3" class="marco4"><div align="center"></div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="3"><div align="center">Puntaje otorgado:
                                    <?=$votada['puntaje']?>
                                    </div></td>
                                  </tr>
                                  <tr>
                                      <td colspan="3">
                                          <div align="center" ><a href="/fotos/editar_puntaje/<?=$votada['foto']['idfoto']?>">Editar puntaje</a></div>
                                      </td>
                                  </tr>
                              </table>
                            </div>
                        </td>
            <?php
                $i++;
                if($i == 3) { 
                    $i = 0; ?>
                    </tr>
            <?php
                }
            } 
            ?>
          </table>
        </div></td>
      </tr>
      <tr>
        <td><a href="/fotos/votar/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','/assets/imagenes/pendientes2.jpg',1)"><img src="/assets/imagenes/pendientes1.jpg" alt="" width="208" height="43" id="Image6"border="0"></a></td>
        </tr>
      <tr>
        <td><a href="/usuarios/logout/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','/assets/imagenes/logout2.jpg',1)"><img src="/assets/imagenes/logout1.jpg" alt="" width="208" height="43" id="Image11"border="0"></a></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td class="bienvenido">&nbsp;</td>
      </tr>
      <tr>
          <td class="bienvenido">Usted voto: <strong>
            <?=count($votadas_total)?> 
          fotos</strong></td>
        </tr>
      <tr>
        <td class="bienvenido">Restan votar: <strong>
          <?=count($aprobadas)-count($votadas)?> 
          fotos</strong></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td class="bienvenido"><strong>Dias restantes: x dias</strong></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a href="/usuarios/consultas/"><img src="/assets/imagenes/problemas.jpg" width="206" height="98"  alt="" border"0"/></a></td>
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


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="/assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" href="/assets/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript">
    $(document).ready(function() {
        <?php foreach($aprobadas as $aprobada) { ?>
            $("#foto<?=$aprobada['idfoto']?>").fancybox();
        <?php } ?>
    });
</script>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" media="screen" />