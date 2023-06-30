<?php
    unset($_SESSION['user']);
    header('location:index.php?module=auth&action=login');