<?php


function upload($conn,$sql1, $sql2){
    mysqli_autocommit($conn, FALSE);

    // Insert some values
    mysqli_query($conn, $sql1);
    mysqli_query($conn, $sql2);

    // Commit transaction
    if (!mysqli_commit($conn)) {
        echo "Commit transaction failed";
        exit();
    } else {
        header('location:index.php');
        exit();
    }
}

$conn = mysqli_connect('localhost', 'root', '', 'file_manager');

if (isset($_POST['u-btn'])) {

    if (!empty($_FILES)) {

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileType = $_FILES['file']['type'];


        // $file_extension = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));

        if (explode('/',  mime_content_type($fileTmpName))[0] == 'image') {

            if (move_uploaded_file($fileTmpName, 'images/' . $fileName)) {


                $img = '<img style="width:150px;height:150px;border-radius:75px"  src="images/' . $fileName . '" alt="img_file" >';

                // Turn autocommit off
                mysqli_autocommit($conn, FALSE);

                // Insert some values
                mysqli_query($conn, "INSERT INTO all_files(file_name,name,filetype) VALUES('$img','$fileName','$fileType')");
                mysqli_query($conn, "INSERT INTO images(file_name, file_type) VALUES('$fileName', '$fileType')");

                // Commit transaction
                if (!mysqli_commit($conn)) {
                    echo "Commit transaction failed";
                    exit();
                } else {
                    header('location:index.php');
                    exit();
                }

             
            }
        }
        if (explode('/',  mime_content_type($fileTmpName))[0] == 'audio') {
            if (move_uploaded_file($fileTmpName, 'audios/' . $fileName)) {
                $audio = '<audio controls style="margin:0 auto">
                <source src="audios/' . $fileName . '" type="' . $fileType . '">
              </audio>';
                if (mysqli_query($conn, "INSERT INTO all_files(file_name,name,filetype) VALUES('$audio','$fileName','$fileType')"))
                    mysqli_query($conn, "INSERT INTO audio(file_name, file_type) VALUES('$fileName', '$fileType')");

                header('location:index.php');
                exit();
            }
        }



        if (explode('/',  mime_content_type($fileTmpName))[0] == 'video') {
            if (move_uploaded_file($fileTmpName, 'videos/' . $fileName)) {



                $video = ' <video class="embed-responsive embed-responsive-16by9"  controls>
            <source class="embed-responsive-item" src="videos/' . $fileName . '" type="' . $fileType . '">
            </video>';



                if (mysqli_query($conn, "INSERT INTO all_files(file_name,name,filetype) VALUES('$video','$fileName','$fileType')"))
                    mysqli_query($conn, "INSERT INTO videos(file_name, file_type) VALUES('$fileName', '$fileType')");
                header('location:index.php');
                exit();
            }
        }

        if (explode('/',  mime_content_type($fileTmpName))[0] == 'application') {
            if (move_uploaded_file($fileTmpName, 'docs/' . $fileName)) {
                $type = mime_content_type($fileTmpName);
                $docs = '<a href="openDoscs.php?name=' . $fileName . '">' . $fileName . '</a>';

                if (mysqli_query($conn, "INSERT INTO all_files(file_name,name,filetype) VALUES('$docs','$fileName','$fileType')"))
                    mysqli_query($conn, "INSERT INTO docs(file_name, file_type) VALUES('$fileName', '$fileType')");
                header('location:index.php');
                exit();
            }
        }
    }
}
