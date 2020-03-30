<?php require_once('../../private/initialize.php'); ?>

<?php
$habits = Habit::find_all();
?>
<div class="all_habbits">

<?php foreach($habits as $habit) { ?>
    <div class="table_row">
      <div class="table_column"><?php echo $habit->habit?></div>
      <div class="table_column"><?php echo $habit->starting_date?></div>
    </div>


<?php } ?>




</div>