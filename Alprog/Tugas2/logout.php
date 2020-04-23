<?php
session_start();

session_destroy(); 

?>
<script>
alert("Anda berhasil logout");
document.location.href="index.php"; //jika logout berhasil , alihkan ke halaman login
</script>