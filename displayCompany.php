<?php include('header.php') ?>
    <body>
    
 
    <?php
    include("DBConnection.php");
 
    $search = $_REQUEST["search"];
 
    $query = "select c_id,c_name,job_title,degree_required,vacant_sheet from company_info where c_name like '%$search%'"; //search with a book name in the table book_info
    $result = mysqli_query($db,$query);
 
    if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
    {
    ?>
 
    <center><table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> Company Id </th>
            <th> Company Name </th>
            <th> Job Title</th>
            <th> Degree required</th>
            <th> Vacant Sheet </th>
        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row["c_id"];?> </td>
            <td><?php echo $row["c_name"];?> </td>
            <td><?php echo $row["job_title"];?> </td>
            <td><?php echo $row["degree_required"];?> </td>
            <td><?php echo $row["vacant_sheet"];?> </td>
        </tr>
        <?php
        }
        }
        else
        echo "<center>No books found in the library by the name $search </center>" ;
        ?>   
    </table>
	</center>
    </body>
</html>