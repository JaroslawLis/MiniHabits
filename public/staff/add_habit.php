<?php require_once('../../private/initialize.php'); ?>

<?php
if (isset($_GET['submit'])){

}




if(is_post_request()) {
// Create record using post parameters

$args = [];
$args['habit'] = $_POST['habit'] ?? NULL;
$args['starting_date'] = $_POST['starting_date'] ?? NULL;
$habit = new Habit($args);
$result = $habit->create();

if($result === true) {
    $new_id = $habit->id;
    $_SESSION['message'] = 'Nawyk został dodadany.';
   // redirect_to(url_for('/staff/show.php?id=' . $new_id));
} else {

}


}
?>
<?php $page_title = 'Nowy Nawyk'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>


<div >
<h1>Dodawanie mini nawyku</h1>
<form action="add_habit.php" method="post">
<input type="text" name="habit" id="" placeholder="Nawyk">
<input type="date" name="starting_date" id="">
<input type="submit" name="submit" value="Dodaj nawyk">
</form>

</div>