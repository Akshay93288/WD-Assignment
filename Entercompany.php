<?php include('header.php') ?>
  
	<div class="header">
    <center><h2>Company Register</h2></center>
	</div>
    <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
    <form action="insertcompany.php" method="post">
 
        <!--<table border="2" align="center" cellpadding="5" cellspacing="5" height=50%>-->
            
				<div class="input-group">
				<label>Enter Company Id:</label>
				 <input type="text" name="c_id" > 
				</div>
            
            
				<div class="input-group">
				<label>Enter Company Name:</label>
				 <input type="text" name="c_name" > 
				</div>
			
            
            
			<div class="input-group">
				<label>Enter Job Title:</label>
				<input type="text" name="job_title" > 
			</div>
            
			
				<div class="input-group">
				<label>Enter Minimum Degree Required :</label>
				 <input type="text" name="degree_required" > 
				</div>
            
           
			<div class="input-group">
				<label> Enter Vacant Sheet:</label>
				 <input type="text" name="vacant_sheet" > 
			</div>
            
				<div class="input-group">
					<button type="submit" class="btn" name="reg_user" >Submit</button>
				</div>
				
					
					
			
        
    </form>
</body>
</html>