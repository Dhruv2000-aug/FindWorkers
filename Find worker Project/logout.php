<?php
session_start();
session_destroy();
$_SESSION = [];
?>

<script type="text/javascript">
    window.location="index.php";
</script>
