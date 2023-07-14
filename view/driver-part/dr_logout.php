<?php
   session_start();
   session_destroy();
   echo "<script>location.href='dr_log.php'</script>";
?>