<?php 
if (!isset($_SESSION['authenticated']) && $_SESSION['authenticated'] != true){
    header('Location:/login');
}