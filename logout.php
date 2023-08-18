<?php
session_start();
session_destroy();
session_unset();

echo "<html><head><title>logging out</title><body><script>window.location.href='index.php'</script></body></html>";
?>
