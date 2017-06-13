<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tiket Travel Nyater.com</title>
<style type="text/css">
body,td,th {
	font-size: 14px;
}
</style>
</head>

<body>
<table width="468" border="0" align="center" cellpadding="0" cellspacing="5">
<?php
	$kota_asal = $_POST['txt_kota_asal'];
	$kota_tujuan = $_POST['txt_kota_tujuan'];
	$paket = $_POST['txt_paket'];
	$kapasitas_bus = $_POST['txt_kapasitas_bus'];
	$jumlah_bus = $_POST['txt_jumlah_bus'];
	$jenis_pesanan = $_POST['txt_jenis_pesan'];
	$nama_perwakilan = $_POST['txt_nama_perwakilan'];
	$alamat = $_POST['txt_alamat'];
	$lama_sewa = $_POST['txt_lama_sewa'];
	$harga = $_POST['txt_harga'];
	$tanggal = $_POST['txt_tanggal'];
	$waktu = $_POST['txt_waktu'];
	$email = $_POST['txt_email'];
	$no_telepon = $_POST['txt_no_telepon'];
	
	$total_sewa = $lama_sewa * $harga;
	$total_harga = $total_sewa * $jumlah_bus;
	$uang_muka = $total_harga * 0.5;
	?>
  <tr>
    <td height="50" colspan="2"><h2>
    <img src="admin/ADMIN/TIKET.png" width="400" height="67" />      <h2></td>
  </tr>
  <tr>
    <td width="164">Kota Asal</td>
    <td width="298"><?php echo $kota_asal ?></td>
  </tr>
  <tr>
    <td>Kota Tujuan</td>
    <td><?php echo $kota_tujuan?></td>
  </tr>
  <tr>
    <td>Paket</td>
    <td><?php echo $paket ?></td>
  </tr>
  <tr>
    <td>Kapasitas Bus</td>
    <td><?php echo $kapasitas_bus ?></td>
  </tr>
  <tr>
    <td>Jumlah Bus</td>
    <td><?php echo $jumlah_bus ?></td>
  </tr>
  <tr>
    <td>Jenis Pesanan</td>
    <td><?php echo $jenis_pesanan ?></td>
  </tr>
  <tr>
    <td>Nama Instansi/Perwakilan</td>
    <td><?php echo $nama_perwakilan ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo $alamat ?></td>
  </tr>
  <tr>
    <td>Lama Sewa</td>
    <td><?php echo $lama_sewa ?> hari</td>
  </tr>
  <tr>
    <td>Biaya  Rp.</td>
    <td><?php echo $total_harga ?></td>
  </tr>
  <tr>
    <td>Uang Muka</td>
    <td><?php echo $uang_muka ?></td>
  </tr>
  <tr>
    <td>Tanggal Jemput</td>
    <td><?php echo $tanggal ?></td>
  </tr>
  <tr>
    <td>Waktu Jemput</td>
    <td><?php echo $waktu ?></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><?php echo $email ?></td>
  </tr>
  <tr>
    <td>No. Telepon</td>
    <td><?php echo $no_telepon ?></td>
  </tr>
  <tr>
    <td height="60" colspan="2" bgcolor="#FFFFFF"><table width="482" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2">------------------------------------------------------------------------------------------------</td>
        </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><strong>Catatan :</strong></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2">1. Jika ada perubahan jadwal keberangkatan silahkan konfirmasi Contact </td>
      </tr>
      <tr>
        <td colspan="2"><table width="482" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="16">&nbsp;</td>
            <td width="466">Person.</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="2">2. Silahkan konfirmasi kembali paling lambat dua hari sebelum keberangkatan.</td>
        </tr>
      <tr>
        <td colspan="2">3. Pembayaran dilakukan dengan  cara :</td>
        </tr>
      <tr>
        <td width="47">&nbsp;</td>
        <td width="435">1. Membayar uang muka / DP sebesar 50% dari total biaya sewa. </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>2. Pelunasan dilakukan pada hari H.</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>3. Pembayaran melalui rekening Bank INI No.Rek 175850002 </td>
      </tr>
    </table>      <table width="482" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="61">&nbsp;</td>
        <td width="421">An. Nyater.com dan Kemudian kirimkan bukti pembayaran </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>melalui E-mail kami ( nyater_unyu@gmail.com).</td>
      </tr>
    </table>    <table width="482" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="482" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="2">4. Pemesanan yang anda lakukan dapat dibatalkan namun, mohon diketahui  </td>
            </tr>
          <tr>
            <td width="17">&nbsp;</td>
            <td width="465">bahwa uang muka yang telah dibayarkan tidak akan dikembalikan dalam bentuk uang tunai, melainkan akan dikembalikan dalam bentuk Kupon Tunai</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td> (Cash Kupon) yang dapat digunakan pada transaksi anda berikutnya dan</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td> berlaku 6 bulan sejak tanggal pembatalan.</td>
          </tr>
          </table></td>
        </tr>
      <tr>
        <td><table width="482" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="2">5. Pembatalan dikenakan biaya sebesar 10% dari uang muka dengan rentan   </td>
            </tr>
          <tr>
            <td width="17">&nbsp;</td>
            <td width="465">waktu pembatalan 24 Jam sampai 3 hari sebelum hari keberangkatan, dan 5% untuk rentan waktu pembatalan 4 hari sampai 1 minggu sebelum waktu</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>keberangkatan.</td>
          </tr>
          <tr>
            <td colspan="2"><table width="482" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="158"><p>&nbsp;</p>
                  <p>&nbsp;</p></td>
                <td width="228"><em><h5>**Syarat dan Ketentuan Berlaku</h5></em></td>
                <td width="96">&nbsp;</td>
              </tr>
            </table></td>
            </tr>
        </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
        </tr>
    </table>    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="30" colspan="2" bgcolor="#000000">&nbsp;</td>
    <td height="50" colspan="2"><form id="form1" name="form1" method="post" action="">
      <script>
		window.print();
	  </script>
  </tr>
</table>
</body>
</html>