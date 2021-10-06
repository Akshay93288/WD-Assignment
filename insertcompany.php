<?php include('header.php') ?>
<body>
    
    <br>
 
    <?php
        include("DBConnection.php");
 
        $c_id=$_POST["c_id"];
        $c_name=$_POST["c_name"];
        $job_title=$_POST["job_title"];
        $degree_required=$_POST["degree_required"];
        $vacant_sheet=$_POST["vacant_sheet"];
 
        $query = "insert into company_info(c_id,c_name,job_title,degree_required,vacant_sheet) values('$c_id','$c_name','$job_title','$degree_required','$vacant_sheet')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);
    ?>
    <center><h3> company information is inserted successfully </h3></center>
 
    <a href="SearchCompany.php"> To search for the company information click here </a>
 
</body>
</html>