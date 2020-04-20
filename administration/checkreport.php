<?php 
include'../config.php';
$down="select * from reports";
$download=mysqli_query($CONNECTION,$down);  ?>
<table  class="table table-striped table-bordered " style="width:100%">
    <thead>
    <tr>
    <th>ID</th>
    <th class="text-center">Report Subject</th>
    <th class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
  <?php  while($row=mysqli_fetch_array($download))
	{  ?>
    <tr>
    <td> 
	<?php
      static $x=0;
       $x++;
	   echo $x;?>
       </td>
    <td class="text-center"><?php echo $row[1]; ?></td>
    <td class="text-center"><a href="download.php?file=<?php echo $row[2];?>">
    <span class="glyphicon glyphicon-download-alt"></span></a>
    <a href='delete_report.php?id=<?php echo $row[0];?>' 
       class='glyphicon glyphicon-trash'></a></td>  
    </tr>
   <?php }; ?>
    </tbody>
    </table>
  


