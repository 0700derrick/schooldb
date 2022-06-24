<?php 

include('connect.php');


$sql = "SELECT * FROM `teachers_tb`";
$results = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($results)){
    echo 
    "
        <tr>
            <td>".$row['first_name']."</td>
            <td>".$row['last_name']."</td>
            <td>".$row['age']."</td>
            <td>".$row['tel']."</td>
            <td>".$row['email']."</td>
        </tr>        
    ";
}



?>