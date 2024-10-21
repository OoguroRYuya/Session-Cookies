<?php
setcookie('username', '', time() - 3600, "/"); // Hapus cookie
header('Location: login.php');
exit;
?>
