<?php

$sql2 = "SELECT * FROM com";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
foreach($result2 as $row2) {

       echo '<h3 class="email">'.$row2['Gmail'].'</h3>';
       echo '<h4 class="conntent">'.$row2['cont'].'</h4>';
       echo '<hr class="seperator2">';
} 
}

?>