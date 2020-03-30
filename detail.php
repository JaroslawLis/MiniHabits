<?php
require_once('private/initialize.php');
?>

<?php

$id = $_GET['id'] ?? false;
if(!$id) {
    redirect_to('habits.php');
}

$habit = Habit::find_by_id($id);

$page_title = 'Szczegóły : '. $habit->name();


var_dump($habit);
?>