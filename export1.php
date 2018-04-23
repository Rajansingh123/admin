<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "jobs");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM customers";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>id</th> 
                         <th>title</th>  
                         <th>description</th>
                         <th>Salary</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["description"].'</td>  
                         <td>'.$row["salary"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
