<?php  
 $connect = mysqli_connect("localhost", "root", "", "bus_tracking_management");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM `routes` WHERE source LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["source"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= 'Not Found';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  