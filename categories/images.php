<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container">
<div class="row ">

    <?php


$conn =  mysqli_connect('localhost', 'root', '', 'file_manager');
$sql = "SELECT * FROM  images order by on_date desc";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo '<br><div class="card card-body  text-center m-auto  mt-4 " style=" width:300px; height:500px;margin:10px;">';
    echo '<b>'.$row['file_name'].'</b>';
    echo  '<img src="../images/'.$row['file_name'].'" class="w-100 h-100 " style="background:#eee;" >';
    echo '</div><br>';
}

?>
</div>
</div>