<?php
session_start();
if(session_destroy()){
    ?>
    <script>
        window.location.assign('../login.php')
    </script>
    <?php
}
?>