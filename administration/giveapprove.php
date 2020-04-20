<div class="row">
<?php 
include'../config.php';
$sql="select * from membership";
$result=mysqli_query($CONNECTION,$sql);
while($documents=mysqli_fetch_array($result)){
?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>Memberships documents Need Approve</h3>
        	<img src="../<?php echo $documents[1];?>" alt="" class="img-responsive panel panel-default">

          <p><a href="dashboard.php?page=approve.php&mid=<?php echo $documents[0];?>&uid=<?php echo $documents[5];?>" class="btn btn-success" role="button">Give Approve <span class="glyphicon glyphicon-ok"></span></a> </p>
<p><a href="download_documents.php?doc=<?php echo $documents[1];?>" 
class="btn btn-primary" role="button">Download Documents <span class="glyphicon glyphicon-download"></span></a> </p>
      </div>
    </div>
  </div>
 <?php }?>
</div>



