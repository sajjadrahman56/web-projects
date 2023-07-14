<?php
   session_start();
   session_destroy();
   echo "<script>location.href='log_in.php'</script>";
?>