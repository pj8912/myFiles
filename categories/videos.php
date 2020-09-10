<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<?php


$conn =  mysqli_connect('localhost', 'root', '', 'file_manager');
$sql = "SELECT * FROM  videos order by on_date desc";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo '<div class="card card-body w-100" style="padding:10px">';
    echo '<video height=300 controls>
    <source src="../videos/'.$row['file_name'].'" type="'.$row['file_type'].'">
  </video>';
    echo '</div><br>';
}

?>