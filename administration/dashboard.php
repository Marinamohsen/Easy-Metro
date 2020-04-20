<?php 
session_start();
if(!isset($_SESSION['administrationType']))
{
	
	header('location:index.php');
}
$title='Dashboard';
include'header.php';
?>
<body>
<div class="container">
<div class="row">
			
			<div class="col-md-12 ">
				<h2 style="color:#9F6;"><span class="glyphicon glyphicon-dashboard"></span>Dashboard</h2>
               <h3 style="color:#6F9;"><?php echo'Welcome,'.$_SESSION['username']?></h3></div>
                </div>
            <div class="row">
				<div class="col-md-3">
					<?php
					if(isset($_SESSION['administrationType'])&& $_SESSION['administrationType']=='supervisior')
					{?>
				<div class="list-group">
                    <a href="dashboard.php?page=createreport.php" class="list-group-item ">
						<span class="glyphicon glyphicon-tasks"></span>Create Report </a>
                        
					 <a href="dashboard.php?page=addauthorizedemployee.php" class="list-group-item ">
						<span class="glyphicon glyphicon-user"></span>Add Authorized Employee </a>
                        
                    <a href="dashboard.php?page=checkprocess.php" class="list-group-item">
						<span class="glyphicon glyphicon-cog"></span>Check Process</a>
					
                    <a href="log out.php" class="list-group-item">
						<span class="glyphicon glyphicon-log-out"></span>Logout</a>
                </div>
                <?php } else if(isset($_SESSION['administrationType'])&& $_SESSION['administrationType']=='admin'){ ?>
                        <a href="dashboard.php?page=giveapprove.php" class="list-group-item ">
						<span class="glyphicon glyphicon-ok-circle"></span>Give Approve
                         <span class="badge"><?php totalDocuments();?></span></a>
                        <a href="log out.php" class="list-group-item">
						<span class="glyphicon glyphicon-log-out"></span>Logout</a>
                        
                <?php } else { ?>
                <a href="dashboard.php?page=checkreport.php" class="list-group-item ">
						<span class="glyphicon glyphicon-check"></span>Check Report 
                         <span class="badge"><?php totalReports();?></span></a>
                        
                      <a href="log out.php" class="list-group-item">
						<span class="glyphicon glyphicon-log-out"></span>Logout</a>    
                 <?php } ?>
				</div>
				<div class="col-md-9">
                <div class="panel panel-default">
                   <div class="panel-heading">
                   <?php
				   if(isset($_GET['page']))
				   {
				   $url=$_GET['page'];
				   switch($url)
				   { 
				     case'createreport.php':
				     echo'Create Report';
					 break;
					 
					 case'checkprocess.php':
				     echo'Manage';
					 break;
					 
					 case'addauthorizedemployee.php':
				     echo'Create New Authorized Employee';
					 break;
					 
					 case'checkreport.php':
				     echo'Check Report';
					 break;
					 
					 case'giveapprove.php':
				     echo'Give Approve';
					 break;
					   }
				   
				   
				   }
				   ?> 
                   </div>
                  <div class="panel-body">
                   <?php
				   if(isset($_GET['page']))
				   {
					   include($_GET['page']);
				   }
				
				   ?>
                     </div>
                

				
</div>
			
</div>
	
</div>			
		
<?php include'footer.php';?>
