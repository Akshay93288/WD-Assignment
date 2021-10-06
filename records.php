<?php include('header.php') ?>
<div class="header1">
  	<h2>Company Details</h2>
  </div>
<div class="container">
  <div class="row">
    <div class="col">
      Company Id
    </div>
    <div class="col">
     Company Name
    </div>
    <div class="col">
     Job Title
    </div>
	<div class="col">
     Minimum Degree Required
    </div>
	<div class="col">
     Vacant Sheet
    </div>
  </div>
</div>
<?php
	include"DBConnection.php";
	$records=mysqli_query($db,"select*from company_info");
	while($data=mysqli_fetch_array($records))
	{
?>
<div class="container">
  <div class="row">
    <div class="col">
      <?php echo $data['c_id'];?>
    </div>
    <div class="col">
     <?php echo $data['c_name'];?>
    </div>
    <div class="col">
      <?php echo $data['job_title'];?>
    </div>
	<div class="col">
      <?php echo $data['degree_required'];?>
    </div>
	<div class="col">
      <?php echo $data['vacant_sheet'];?>
    </div>
  </div>
</div>
<?php
	}
	?>
	
	<?php mysqli_close($db);?>
	</body>
	</html>
	
	