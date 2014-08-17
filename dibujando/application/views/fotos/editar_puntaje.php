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
        
        $("#s1a").mouseover(function() {
            $("#s1g").mouseover();
        });
        $("#s1g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2a").hide();
            $("#s2g").show();
            $("#s3a").hide();
            $("#s3g").show();
            $("#s4a").hide();
            $("#s4g").show();
            $("#s5a").hide();
            $("#s5g").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("1");
        });
        
        $("#s2a").mouseover(function() {
            $("#s2g").mouseover();
        });
        $("#s2g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3a").hide();
            $("#s3g").show();
            $("#s4a").hide();
            $("#s4g").show();
            $("#s5a").hide();
            $("#s5g").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("2");
        });
        
        $("#s3a").mouseover(function() {
            $("#s3g").mouseover();
        });
        $("#s3g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4a").hide();
            $("#s4g").show();
            $("#s5a").hide();
            $("#s5g").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("3");
        });
        
        $("#s4a").mouseover(function() {
            $("#s4g").mouseover();
        });
        $("#s4g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5a").hide();
            $("#s5g").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("4");
        });
        
        $("#s5a").mouseover(function() {
            $("#s5g").mouseover();
        });
        $("#s5g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("5");
        });
        
        $("#s6a").mouseover(function() {
            $("#s6g").mouseover();
        });
        $("#s6g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("6");
        });
        
        $("#s7a").mouseover(function() {
            $("#s7g").mouseover();
        });
        $("#s7g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7g").hide();
            $("#s7a").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("7");
        });
        
        $("#s8a").mouseover(function() {
            $("#s8g").mouseover();
        });
        $("#s8g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7g").hide();
            $("#s7a").show();
            $("#s8g").hide();
            $("#s8a").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("8");
        });
        
        $("#s9a").mouseover(function() {
            $("#s9g").mouseover();
        });
        $("#s9g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7g").hide();
            $("#s7a").show();
            $("#s8g").hide();
            $("#s8a").show();
            $("#s9g").hide();
            $("#s9a").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("9");
        });
        
        $("#s10a").mouseover(function() {
            $("#s10g").mouseover();
        });
        $("#s10g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7g").hide();
            $("#s7a").show();
            $("#s8g").hide();
            $("#s8a").show();
            $("#s9g").hide();
            $("#s9a").show();
            $("#s10g").hide();
            $("#s10a").show();
            $("#res").html("10");
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
        <td>&nbsp;</td>
        <td><div align="right"><span class="bienvenido">Bienvenido <?=$session['nombre']?> <?=$session['apellido']?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="bienvenido"></div></td>
      </tr>
      <tr>
        <td><a href="/fotos/votadas/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','/assets/imagenes/votadas2.jpg',1)"><img src="/assets/imagenes/votadas1.jpg" alt="" width="208" height="43" id="Image5"border="0"></a></td>
        
        <td rowspan="16">
            <div align="center"><img src="/upload/<?=$foto['foto']?>" width="640" height="480"  alt=""/></div></td>
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
        <td class="bienvenido">Usted voto: <?=count($votadas)?> fotos</td>
        </tr>
      <tr>
        <td class="bienvenido">Restan votar: <?=count($fotos)?> fotos</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td class="bienvenido">Dias restantes: x dias</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
            <a href="/usuarios/consultas/"><img src="/assets/imagenes/problemas.jpg" width="206" height="98"  alt="" border"0"/></a></td>
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
        <td><div align="center">
                <table border="0">
                    <tr>
                        <td>
                            <div id="s1g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s1a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/1/"><img src="/assets/img/star1.png"></a>
                            </div>
                            <div id="s2g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s2a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/2/"><img src="/assets/img/star1.png"></a>
                            </div>
                            <div id="s3g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s3a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/3/"><img src="/assets/img/star1.png"></a>
                            </div>
                            <div id="s4g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s4a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/4/"><img src="/assets/img/star1.png"></a>
                            </div>
                            <div id="s5g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s5a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/5/"><img src="/assets/img/star1.png"></a>
                            </div>
                            <div id="s6g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s6a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/6/"><img src="/assets/img/star1.png"></a>
                            </div>
                            <div id="s7g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s7a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/7/"><img src="/assets/img/star1.png"></a>
                            </div>
                            <div id="s8g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s8a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/8/"><img src="/assets/img/star1.png"></a>
                            </div>
                            <div id="s9g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s9a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/9/"><img src="/assets/img/star1.png"></a>
                            </div>
                            <div id="s10g" style="float: left;">
                                <img src="/assets/img/star0.png">
                            </div>
                            <div id="s10a" style="display: none; float: left;">
                                <a href="/fotos/editar_voto/<?=$foto['idfoto']?>/10/"><img src="/assets/img/star1.png"></a>
                            </div> 
                            <div style="float: left;">(</div> <div id="res" style="float: left;">0</div><div style="float: left;">)</div>

                        </td>
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
</table>
</body>
</html>