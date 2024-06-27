<?php
include("Koneksi.php");
$sql=mysqli_query($konek, "insert into barang(kode_barang,nama_barang,jumlah,harga_beli,harga_jual) 
values('$_POST[kodebarang]','$_POST[namabarang]','$_POST[jumlah]','$_POST[hargabeli]', '$_POST[hargajual]')");
if($sql)
{
echo("<script type=text/javascript>
window.location.href=\"tampilbarang.php\"
</script>");
}
else
echo"Gagal Simpan";
?>
