<?php
include ('connection.php'); 

//Query to database
$query ="select * from users"; 
$result = mysquli_query($conn, $query); 

if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row["id"""]. "". row["username"].row["email"]."<br>";        
    }
}else{
    echo "No data!";
}
?>