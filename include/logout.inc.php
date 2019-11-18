<h2>Vous êtes connecté</h2>
<?php
$_SESSION['login'] = 0;
session_destroy();
echo "<script>document.location.href='http://localhost/BCI1/myVaccination/'</script>";