<?php

require_once('../Classes/Users.php'); // Adjust the path if necessary

use Classes\Users;

$users = new Users();
$items = $users->user_items();
?>
