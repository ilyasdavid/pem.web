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
	color: #FFCC2A;
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

<body onload="MM_preloadImages('img/button/nyater copy.PNG','img/button/travel copy.png','img/button/tentang copy.PNG','img/button/bantuan copy.PNG','img/button/CARI2.PNG','img/button/KEMBALI2.png','img/button/Daftarfix2.png')">

<?php
	include "koneksi.php";
	
	$gambar = $_GET['id'];
	
	$sql  = "SELECT * FROM tb_keluarga WHERE gambar='$gambar'";

	$rest = mysql_query($sql);
	$data = mysql_fetch_array($rest);
 	
	?>
    
   

    
<table width="981" border="0" align="center" cellpadding="0" cellspacing="0">
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
    <td width="155" height="40" bgcolor="#00B2B4"><img src="img/button/menu kiri.jpg" alt="" width="155" height="40" /></td>
    <td width="209" height="40" bgcolor="#00B2B4"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','img/button/nyater copy.PNG',1)"><img src="img/button/nyater.PNG" name="Image4" width="180" height="31" id="Image4" /></a></td>
    <td width="93" height="40" bgcolor="#00B2B4"><a href="keluarga.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','img/button/travel copy.png',1)"><img src="img/button/travel.png" name="Image5" width="89" height="25" id="Image5" /></a></td>
    <td width="155" height="40" bgcolor="#00B2B4"><a href="TentangKami.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','img/button/tentang copy.PNG',1)"><img src="img/button/tentang.PNG" name="Image6" width="149" height="25" id="Image6" /></a></td>
    <td width="214" height="40" bgcolor="#00B2B4"><a href="bantuan.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','img/button/bantuan copy.PNG',1)"><img src="img/button/bantuan.png" name="Image7" width="113" height="25" id="Image7" /></a></td>
    <td width="155" height="40" colspan="3" bgcolor="#363636"><img src="img/button/menu kanan copy.jpg" width="155" height="40" /></td>
  </tr>
  <tr>
    <td colspan="8" bgcolor="#FFCC2A"><table width="981" border="0" cellspacing="4" cellpadding="0">
      <tr>
        <td bgcolor="#363636"><table width="967" border="0" cellspacing="20" cellpadding="0">
          <tr>
            <td><table width="927" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="90">&nbsp;</td>
                <td width="528"><h2>MASUKAN DATA ANDA</h2></td>
                <td width="309">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="434"><form action="simpan.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <table width="925" border="0" align="left" cellpadding="0" cellspacing="13">
                <tr>
                  <td width="128">Kota Asal</td>
                  <td width="312"><label for="txt_tanggal"></label>
                    <input name="txt_kota_asal" type="text" id="textfield2" value="<?php echo $data['kota_asal']; ?>" size="30" readonly="readonly" /></td>
                  <td width="433" rowspan="13"><table width="433" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><img src="img/button/SYARAT2.PNG" width="433" height="249" /></td>
                    </tr>
                    <tr>
                      <td width="433" height="100">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="135">&nbsp;</td>
                    </tr>
                  </table>                    <label for="textfield32"></label></td>
                </tr>
                <tr>
                  <td width="128">Kota Tujuan</td>
                  <td width="312"><input name="txt_kota_tujuan" type="text" id="textfield2" value="<?php echo $data['kota_tujuan']; ?>" size="30" readonly="readonly" /></td>
                </tr>
                <tr>
                  <td>Paket</td>
                  <td><label for="txt_paket"></label>
                    <input name="txt_paket" type="text" id="txt_paket" value="<?php echo $data['paket']; ?>"size="30" readonly="readonly" /></td>
                </tr>
                <tr>
                  <td width="128">Kapasitas</td>
                  <td width="312"><input name="txt_kapasitas_mobil" type="text" id="textfield3" value="<?php echo $data['kapasitas']; ?>" size="1" readonly="readonly" /> 
                    Orang / Jumlah Mobil
                      <select name="txt_jumlah_mobil" id="txt_jumlah_mobil">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                      </select></td>
                </tr>
                <tr>
                  <td width="128">Alamat</td>
                  <td width="312"><textarea name="txt_alamat" cols="28" id="textfield4"></textarea></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><label for="txt_nama"></label>
                    <input name="txt_nama" type="text" id="txt_nama" size="31" /></td>
                </tr>
                <tr>
                  <td width="128">Lama Sewa</td>
                  <td><select name="txt_lama_sewa" id="txt_lama_sewa">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
                      <option value="36">36</option>
                      <option value="37">37</option>
                      <option value="38">38</option>
                      <option value="39">39</option>
                      <option value="40">40</option>
                      <option value="41">41</option>
                      <option value="42">42</option>
                      <option value="43">43</option>
                      <option value="44">44</option>
                      <option value="45">45</option>
                      <option value="46">46</option>
                      <option value="47">47</option>
                      <option value="48">48</option>
                      <option value="49">49</option>
                      <option value="50">50</option>
                    </select>
Hari / Rp.
<label for="textfield3"></label>
                    <input name="txt_harga" type="text" id="textfield3" value="<?php echo $data['harga'];?>" size="12" /></td>
                </tr>
                <tr>
                  <td><p>Tanggal Jemput</p></td>
                  <td><input name="txt_tanggal" type="date" id="textfield8" size="8" />
                    <label for="txt_waktu"></label></td>
                </tr>
                <tr>
                  <td>Waktu Jemput</td>
                  <td><select name="txt_waktu" id="select5">
                    <option value="Pagi ( 06.00-08.00)">Pagi ( 06.00-08.00)</option>
                    <option value="Siang ( 12.00-14.00)">Siang ( 12.00-14.00)</option>
                    <option value="Sore-Malam ( 16.00-21.00)">Sore-Malam ( 16.00-21.00)</option>
                  </select></td>
                </tr>
                <tr>
                  <td width="128">Email</td>
                  <td width="312"><input name="txt_email" type="text" id="textfield5" size="31" /></td>
                </tr>
                <tr>
                  <td>No.Telepon</td>
                  <td><input name="txt_no_telepon" type="text" id="textfield6" size="31" /></td>
                </tr>
              
                <tr>
                  <td width="128" height="40">&nbsp;</td>
                  <td width="312" height="40"><table width="228" border="0" cellspacing="5" cellpadding="0">
                    <tr>
                      <td width="101" height="30"><a href="keluarga.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','img/button/KEMBALI2.png',1)"><img src="img/button/KEMBALI.png" alt="" name="Image9" width="99" height="40" id="Image9" /></a></td>
                      <td width="112" height="30"><a href="simpan.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','img/button/Daftarfix2.png',1)">
                        <input type="image" img="img" src="img/button/Daftarfix1.png" name="Image11" width="99" height="40" id="Image11" alt="submit button" />
                      </a></a></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
            </form></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr bgcolor="#FFCC2A">
    <td height="40" colspan="8"><table width="979" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="406">&nbsp;</td>
        <td width="522"><a href="index.php"><img src="img/button/nyater icon.PNG" width="175" height="20" /></a></td>
        <td width="51">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="220" colspan="8" bgcolor="#00B2B4"><img src="img/button/footer copy.jpg" width="979" height="315" /></td>
  </tr>
  <tr>
    <td colspan="8" bgcolor="#00B2B4">&nbsp;</td>
  </tr>
</table>
</body>
</html>