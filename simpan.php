<?php
	include "koneksi.php";
	
	$kota_asal = $_POST['txt_kota_asal'];
	$kota_tujuan = $_POST['txt_kota_tujuan'];
	$paket = $_POST['txt_paket'];
	$kapasitas_mobil = $_POST['txt_kapasitas_mobil'];
	$jumlah_mobil = $_POST['txt_jumlah_mobil'];
	$nama = $_POST['txt_nama'];
	$alamat = $_POST['txt_alamat'];
	$lama_sewa = $_POST['txt_lama_sewa'];
	$harga = $_POST['txt_harga'];
	$tanggal = $_POST['txt_tanggal'];
	$waktu = $_POST['txt_waktu'];
	$email = $_POST['txt_email'];
	$no_telepon = $_POST['txt_no_telepon'];
	
	$total_sewa = $lama_sewa * $harga;
	$total_harga = $total_sewa * $jumlah_mobil;
	$uang_muka = $total_harga * 0.5;
	
	//pemriksaan jika data input ada yang kosong
	
	if($kota_asal=="" || $kota_tujuan=="" || $paket=="" || $kapasitas_mobil=="" || $jumlah_mobil=="" || $nama=="" || $alamat=="" || $lama_sewa=="" || $harga=="" || $tanggal=="" || $waktu=="" || $email=="" || $no_telepon=="")
	{
		//ini pesan jika ada yang kosong
		?>
        	<script language="javascript">
			alert("Masih ada data kosong");
			document.location.href="pedaftaran.php";
			</script>
        <?php
	}
			
	else
	{
		//membuat query sql
		$sql = "INSERT INTO tb_daftar_keluarga VALUES ('$kota_asal','$kota_tujuan','$paket','$kapasitas_mobil','$jumlah_mobil','$nama','$alamat','$lama_sewa','$harga','$tanggal','$waktu','$email','$no_telepon','$total_harga','$uang_muka')";	
		
		//execute sql
		$akses = mysqli_query($con, $sql);
		
		if ($akses)
		{
			//mengarahkan ke form login
			?>
            	<script language="javascript">
				alert("Selamat Pendaftaran Berhasil");
				document.location.href="#";
				</script>
            <?php
		}
		
		
		else
		{
			//mengarahkan ke pengisian form daftar.php lagi
			?>
            	<script language="javascript">
				alert("Maaf Anda Gagal Melakukan Pendaftaran");
				document.location.href="#";
				</script>
            <?php	
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

<form id="form1" name="form1" method="post" action="cetak.php">
  <table width="476" border="0" align="center" cellpadding="0" cellspacing="5">
    <tr>
      <td height="100" colspan="2"><img src="admin/ADMIN/DATAANDA.png" alt="" width="430" height="73" /></td>
    </tr>
    <tr>
      <td width="167">Kota Asal</td>
      <td width="272">
        <input name="txt_kota_asal" type="text" class="form-control" id="txt_kota_asal" value="<?php echo $kota_asal ?>" /></td>
    </tr>
    <tr>
      <td>Kota Tujuan</td>
      <td><label for="txt_kota_tujuan"></label>
      <input name="txt_kota_tujuan" type="text" class="form-control" id="txt_kota_tujuan" value="<?php echo $kota_tujuan ?>"/></td>
    </tr>
    <tr>
      <td>Paket</td>
      <td><label for="txt_uang_muka"></label>
      <input name="txt_paket" type="text" class="form-control" id="txt_paket" value="<?php echo $paket ?>"/></td>
    </tr>
    <tr>
      <td>Kapasitas Mobil</td>
      <td><label for="txt_kapasitas_mobil"></label>
        <input name="txt_kapasitas_mobil" type="text" class="form-control" id="txt_kapasitas_mobil" value="<?php echo $kapasitas_mobil ?>"/></td>
    </tr>
    <tr>
      <td>Jumlah Mobil</td>
      <td><input name="txt_jumlah_mobil" type="text" class="form-control" id="txt_jumlah_mobil" value="<?php echo $jumlah_mobil ?>"/></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input name="txt_nama" type="text" class="form-control" id="txt_nama" value="<?php echo $nama ?>"/></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><label for="txt_alamat"></label>
      <textarea name="txt_alamat" class="form-control" id="txt_alamat"><?php echo $alamat ?></textarea></td>
    </tr>
    <tr>
      <td>Lama Sewa</td>
      <td><label for="txt_lama_sewa"></label>
      <input name="txt_lama_sewa" type="text" class="form-control" id="txt_lama_sewa" value="<?php echo $lama_sewa ?>"/></td>
    </tr>
    <tr>
      <td>Biaya Rp.</td>
      <td><label for="txt_harga"></label>
      <input name="txt_harga" type="text" class="form-control" id="txt_harga" value="<?php echo $harga ?>"/></td>
    </tr>
      <td>Total Biaya Rp.</td>
      <td><label for="txt_total_harga"></label>
      <input name="txt_total_harga" type="text" class="form-control" id="txt_total_harga" value="<?php echo $total_harga?>"/></td>
    </tr>
    <tr>
      <td>Uang Muka Rp.</td>
      <td><label for="txt_uang_muka"></label>
      <input name="txt_uang_muka" type="text" class="form-control" id="txt_uang_muka" value="<?php echo $uang_muka ?>" /></td>
    </tr>
    <tr>
      <td>Tanggal Penjemputan</td>
      <td><label for="txt_tanggal"></label>
      <input name="txt_tanggal" type="text" class="form-control" id="txt_tanggal" value="<?php echo $tanggal ?>" size="5"/></td>
    </tr>
    <tr>
      <td>Waktu  Penjemputan</td>
      <td><label for="txt_waktu"></label>
      <input name="txt_waktu" type="text" class="form-control" id="txt_waktu" value="<?php echo $waktu ?>" size="5"/></td>
    </tr>
    <tr>
      <td>E-Mail</td>
      <td><label for="txt_email"></label>
      <input name="txt_email" type="text" class="form-control" id="txt_email" value="<?php echo $email ?>"/></td>
    </tr>
    <tr>
      <td>No. Telepon</td>
      <td><label for="txt_no_telepon"></label>
      <input name="txt_no_telepon" type="text" class="form-control" id="txt_no_telepon" value="<?php echo $no_telepon ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="button" type="submit" class="btn-primary" id="button" value="Cetak" /> 
        Klik Cetak !!</td>
    </tr>
  </table>
</form>
</body>
</html>