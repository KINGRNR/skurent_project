<?php
include "../koneksi.php";
$id=$_GET['id'];
$query="DELETE FROM tb_user where id='$id'";
$hasil=mysqli_query($koneksi_db,$query);
if($hasil) {
    ?>
    <script language="javascript">document.location.href="index.php";</script>
<?php    
}else{
    echo "gagal hapus data";
}
?>
