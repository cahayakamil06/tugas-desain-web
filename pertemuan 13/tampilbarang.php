<table align="center" border="1">
<tr>
<td>Kode</td><td> Nama Barang</td><td>Jumlah</td><td>Harga 
Beli</td><td>Harga Jual</td>
<td colspan="2">Keterangan</td>
</tr>
<?php
include"koneksi.php";
$barang=mysqli_query($konek, "select count(*) from barang");
$tbarang=mysqli_fetch_array($barang);
$jumlahbarang=mysqli_query($konek,"select SUM(jumlah) from barang");
$tjumlahbarang=mysqli_fetch_array($jumlahbarang);
$sql=mysqli_query($konek, "select * from barang");
while($tampil=mysqli_fetch_array($sql))
{
    echo"<tr><td>$tampil[0]</td>
    <td>$tampil[1]</td>
    <td>$tampil[2]</td>
    <td>$tampil[3]</td>
    <td>$tampil[4]</td>
    <td><a href=editbarang.php?kode_barang=$tampil[0]>Edit</td>
    <td><a href=hapusbarang.php?kode_barang=$tampil[0]>Hapus</td>
    <tr>";
    }
    echo"<tr><td>Jumah Barang</td><td>$tbarang[0]</td></tr>";
    echo"<tr><td>Jumah Stock Barang</td><td>$tjumlahbarang[0]</td></tr>";
    ?>
    </table>
    echo"<tr><td>$tampil[0]</td>
<td>$tampil[1]</td>
<td>$tampil[2]</td>
<td>$tampil[3]</td>
<td>$tampil[4]</td>
<td><a href=editbarang.php?kode_barang=$tampil[0]>Edit</td>
<td><a href=hapusbarang.php?kode_barang=$tampil[0]>Hapus</td>
<tr>";
}
echo"<tr><td>Jumah Barang</td><td>$tbarang[0]</td></tr>";
echo"<tr><td>Jumah Stock Barang</td><td>$tjumlahbarang[0]</td></tr>";
?>
</table>
echo"<tr><td>$tampil[0]</td>
<td>$tampil[1]</td>
<td>$tampil[2]</td>
<td>$tampil[3]</td>
<td>$tampil[4]</td>
<td><a href=editbarang.php?kode_barang=$tampil[0]>Edit</td>
<td><a href=hapusbarang.php?kode_barang=$tampil[0]>Hapus</td>
<tr>";
}
echo"<tr><td>Jumah Barang</td><td>$tbarang[0]</td></tr>";
echo"<tr><td>Jumah Stock Barang</td><td>$tjumlahbarang[0]</td></tr>";
?>
