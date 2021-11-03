<?php
session_start();
if (isset($_REQUEST["logout"])) {
    session_destroy();
    echo "<script>location.href = 'index.php';</script>";
}
