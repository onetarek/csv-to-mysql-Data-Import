<?php
 include ("config.php");

 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];


     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
            $con = getdb();

             $sql = "INSERT into user (Nick,First,Last,email,Age,current_city,Password,Mobile) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."')";
                   $result = mysqli_query($con, $sql);
              if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"index.php\"
              </script>";   
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"index.php\"
          </script>";
        }
           }
      
           fclose($file); 
     }
  }  


 function get_all_records(){
    $con = getdb();
    $Sql = "SELECT * FROM user";
    $result = mysqli_query($con, $Sql);  


    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>Nick</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                      </tr></thead><tbody>";


     while($row = mysqli_fetch_assoc($result)) {

         echo "<tr><td>" . $row['Nick']."</td>
                   <td>" . $row['First']."</td>
                   <td>" . $row['Last']."</td>
                   <td>" . $row['email']."</td>
                   <td>" . $row['Mobile']."</td></tr>";        
     }
    
     echo "</tbody></table></div>";
     
} else {
     echo "you have no records";
}
}
 if(isset($_POST["Export"])){
     $con = getdb();
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id','Nick', 'First', 'Last', 'email', 'Age', 'current_city', 'Mobile', 'Password'));  
      $query = "SELECT * from user ORDER BY id ASC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
        fputcsv($output, $row);  
      }  
        fclose($output);  
 }  

?>
