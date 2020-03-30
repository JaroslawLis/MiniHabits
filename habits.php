<?php
require_once('private/initialize.php');

$habits=  Habit::find_all();


?>
<table>

<?php foreach($habits as $habit) { ?>
<tr>
<td><?php echo $habit->habit;?> </td>
<td> <a href="detail.php?id=<?php echo $habit->id; ?>">View</a>  </td>
</tr>
<?php } ?>


</table>





