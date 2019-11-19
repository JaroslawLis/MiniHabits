<?php
require_once('private/initialize.php');

$habits=  Habit::find_all();


?>

<?php foreach($habits as $habit) { ?>
<tr>
<td><?php echo $habit->habit;?> </td>
</tr>
<?php } ?>





