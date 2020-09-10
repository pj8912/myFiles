<?php

$conn =  mysqli_connect('localhost', 'root', '', 'file_manager');
$sql = "SELECT * FROM  all_files order by on_date desc limit 3";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    $file = $row['file_name'];
    $fileType = $row['filetype'];

    $name = $row['name'];

    $newName = substr($name, 0, 5);
    $ext = explode('/', $fileType)[1];
    $newName = $newName.'...'.$ext;
    echo '<div class="card  col p-0 "> <a href="viewFile.php?id='.$row['f_id'].'">';

    if (explode('/', $fileType)[0] == 'image') {
        echo ' 
        <img src="images/' . $name . '"  height="120" style="background:#eee;width:inherit;" class="w-100 ">
      ';
    } elseif (explode('/', $fileType)[0] == 'video') {
        echo ' 
         <img src="images/video.png"  height="120" class="text-center w-100" style="background:#eee;">
        ';
    } elseif (explode('/', $fileType)[0] == 'audio') {
        echo ' 
        <img src="images/audio.png"  class="w-100" height="120" style="background:#eee;width:inherit;">
        ';
    } elseif (explode('/', $fileType)[0] == 'application') {
        echo  '<img src="images/docs.png"   class="w-100" width="80" height="120" style="background:#eee;width:inherit;">
        ';
    }
    echo '<div class="filename"><b>'.$newName.'</b></div>';
    echo '
    </a>
    </div>';
}
?>
