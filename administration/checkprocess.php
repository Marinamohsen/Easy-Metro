<?php 
include'../config.php';
$sql="select * from administration";
$result=mysqli_query($CONNECTION,$sql);

?>
<table id="employees" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Postion</th>
                <th>StartedWork_at</th>
                <th>Control</th>
            </tr>
        </thead>
        <tbody>
        <?php 
		while($allemployees=mysqli_fetch_array($result)){ ?>
				
			<tr>
            <td>
            <?php
            static $x=0;
			$x++;
			echo $x;
				?>
          
            </td>
			<td><?php  echo $allemployees[1]?></td>
			<td><?php  echo $allemployees[3]?></td>
			<td><?php  echo $allemployees[4]?></td>
			<td>
			<a href='dashboard.php?page=update_employee.php&eid=<?php echo $allemployees[0];?>' class='glyphicon glyphicon-edit'></a>
			<a href='delete_employee.php?eid=<?php echo $allemployees[0];?>' class='glyphicon glyphicon-trash'></a>
			</td>
			</tr>
            
            <?php } ?>
		
         </tbody>
    </table>
<script>

$(document).ready(function() {
    $('#employees').DataTable();
} );


</script>

