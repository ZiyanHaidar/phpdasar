<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>
<button onclick="logout()" type="button" class="btn btn-outline-primary">Logout <i
        class="fas fa-right-from-bracket"></i></button>