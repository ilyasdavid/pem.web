<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<style type="text/css">
body,td,th {
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
}
a {
	font-family: "Edit Font List...";
}
body {
	background-color: #363636;
}
</style>
</head>

<body onload="MM_preloadImages('img/button/nyater copy.PNG','img/button/travel copy.png','img/button/tentang copy.PNG','img/button/bantuan copy.PNG','img/button/aman1.PNG','img/button/cepat1.PNG','img/button/lengkap1.PNG','img/button/harga1.PNG','img/button/mudah1.PNG','img/button/PESAN2.png')">


<table width="987" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#363636">
    <td height="130" colspan="8"><table width="981" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="981"><table width="964" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="632">&nbsp;</td>
            <td width="167" bgcolor="#363636">&nbsp;</td>
            <td width="165">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="100"><a href="index.php"><img src="img/button/logo.PNG" width="974" height="80" /></a></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="397" height="40" bgcolor="#00B2B4"><img src="img/button/menu kiri.jpg" width="155" height="40" /></td>
    <td width="517" height="40" bgcolor="#00B2B4"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','img/button/nyater copy.PNG',1)"><img src="img/button/nyater.PNG" name="Image4" width="180" height="31" id="Image4" /></a></td>
    <td width="241" height="40" bgcolor="#00B2B4"><a href="keluarga.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','img/button/travel copy.png',1)"><img src="img/button/travel.png" name="Image5" width="89" height="25" id="Image5" /></a></td>
    <td width="402" height="40" bgcolor="#00B2B4"><a href="TentangKami.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','img/button/tentang copy.PNG',1)"><img src="img/button/tentang.PNG" name="Image6" width="149" height="25" id="Image6" /></a></td>
    <td width="558" height="40" bgcolor="#00B2B4"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','img/button/bantuan copy.PNG',1)"><img src="img/button/bantuan.png" name="Image7" width="113" height="25" id="Image7" /></a></td>
    <td width="399" height="40" colspan="3" bgcolor="#363636"><img src="img/button/menu kanan copy.jpg" width="155" height="40" /></td>
  </tr>
  <tr>
    <td height="400" colspan="8" bgcolor="#363636"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="70" height="806">&nbsp;</td>
        <td width="973" height="50" bgcolor="#FFCC2A"><table width="973" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td width="967" height="800" bgcolor="#363636"><table width="100" border="0" align="center" cellpadding="0" cellspacing="8">
              <tr>
                <td width="477" height="79"><img src="img/mobil_pribadi/HASIL PENCARIAN.PNG" width="950" height="79" /></td>
                </tr>
            </table>
            
   
	
              <table width="605" border="0" cellspacing="8" cellpadding="0">
<?php
	include "koneksi.php";
	
	$kota_asal 	 = $_POST['kota_asal'];
	$kota_tujuan = $_POST['kota_tujuan'];
	//$kapasitas = $_POST['kapasitas'];
	
	$sql  = "SELECT * FROM tb_pariwisata WHERE kota_asal='$kota_asal' and kota_tujuan='$kota_tujuan'";
	$rest = mysqli_query($con, $sql);
	while($data=mysqli_fetch_array($rest))
	{
?>
                <tr>
                  <td width="315" height="204"><img src="img/mobil_pribadi/<?php echo $data['gambar'];?>" width="315" height="204" /></td>
                  <td width="290"><table width="291" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="40" colspan="2"><img src="img/button/KOTAASALTUJUAN.png" width="468" height="40" /></td>
                      </tr>
                    <tr>
                      <td width="272"><h3><?php echo $data['kota_asal'];?> <h3></td>
                      <td width="196"><h3><?php echo $data['kota_tujuan'];?> <h3></td>
                    </tr>
                    <tr>
                      <td><h3>Biaya</h3></td>
                      <td><h3><?php echo $data['harga'];?></h3></td>
                    </tr>
                    <tr>
                      <td height="40" colspan="2"><table width="421" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="271" height="20"><h3>Paket</h3></td>
                          <td width="150"><h3><?php echo $data['paket'];?></h3></td>
                        </tr>
                        <tr>
                          <td height="20"><h3>Kapasitas</h3></td>
                          <td><h3><?php echo $data['kapasitas'];?></h3></td>
                        </tr>
                        <tr>
                          <td height="40">&nbsp;</td>
                          <td><a href="pendaftaran2.php?id=<?php echo $data['gambar'];?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','img/button/PESAN2.png',1)">
                            <input type="image" img="img" src="img/button/PESAN1.png" name="Image11" width="99" height="40" id="Image11" alt="submit button" />
                          </a></td>
                        </tr>
                        <tr>
                          <td height="20">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="20">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
                <?php
	}
				?>
              </table></td>
          </tr>
        </table></td>
        <td width="70" height="806">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr bgcolor="#FFCC2A">
    <td height="40" colspan="8"><table width="979" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="406">&nbsp;</td>
        <td width="522"><a href="index.php"><img src="img/button/nyater icon.PNG" alt="" width="175" height="20" /></a></td>
        <td width="51">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="130" colspan="8" bgcolor="#00B2B4"><img src="img/button/footer copy.jpg" alt="" width="979" height="315" /></td>
  </tr>
  <tr>
    <td colspan="8" bgcolor="#00B2B4">&nbsp;</td>
  </tr>
</table>
</body>
</html>