<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Files</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <style>
        body {
            background: whitesmoke;
            display: block;
        }


        .header {
            padding: 90px;
            color: #f1f1f1;
            text-align: center;
            display: block;
            height: 300px;

        }

        .sticky {
            position: fixed;
            top: 0;
            padding: 10px;
            width: 100%;
            text-align: left;

        }

        .sticky+.content {
            padding-top: 200px;

        }

        .upload-icon-box {
            height: inherit;
            padding-top: 4px;
            border-radius: 20px;
            background: white;
            bottom: 0;
            margin: 0 auto
        }

        .filename {
            bottom: 0;
            display: block;
            background: #eee;
            color: black;
            text-align: center;
            font-size: 12px;
        }

        .search-icon {
            padding: 20px;

        }

        #img svg {
            color: #33cc33;
        }

        #video svg {
            color: #9966ff;
        }

        #audio svg {
            color: #1ab2ff;
        }

        #docs svg {
            color: #ff9900;
        }

        #img,
        #video,
        #audio,
        #docs {
            color: #989898;
            text-decoration: none;
        }



        @media (max-width:600px) {
            .cds {
                border-radius: 25px;
                margin: 0 auto;
                margin-top: 10px;
                /* padding: 10px; */
            }

            .card .card-body #recent-files {
                padding: 12px;



            }

        }
    </style>
</head>

<body>
    <!-- header -->
    <nav class="navbar mb-0  header bg-primary  " id="myHeader">
        <p class="h5 navbar-brand">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
            </svg>

            My Files</p>
    </nav>

    <div class="container mt-1 content">
        <div class="row mt-1 mb-2 ">
            <div class="card card-body cds">

                <div class=" ml-3 navbar-brand h5" style="font-size:15px;">
                    <a href="recent.php" class="text-primary"> Recent uploads</a>
                </div>

                <!-- recently uploaded files -->
                <div class="container ">
                    <div class="row p-1 ">
                        <!-- fetch files -->
                        <?php require 'includes/recent-uploads.php'; ?>
                        <div class="card  col p-0">
                            <p class="text-center m-auto h6 p-2" style="border-radius:20px; background: rgba(0,0,0,0.4);">
                                <a style=" color:white;" href="recent.php">
                                    more
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row mt-2">
            <div class="card card-body cds">
                <div class="card-text ml-3 navbar-brand h5 text-primary" style="color:black;font-size:16px">
                    Categories
                </div>
                <div class="container" align="center ">
                    <div class="row ">
                        <div class="col-4" style="font-size:25px">
                            <!-- images -->
                            <a id="img" href="categories/images.php">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12z" />
                                    <path d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z" />
                                    <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                </svg><br><span style="font-size:12px">Images</span>
                            </a>
                        </div>


                        <div class="col-4" style="font-size:25px">
                            <a href="categories/videos.php" id="video">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z" />
                                </svg>

                                <br><span style="font-size:12px">Videos</span>
                            </a>
                        </div>

                        <div class="col-4" style="font-size:25px">
                            <a href="categories/audio.php" id="audio">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-music-note" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 13c0 1.105-1.12 2-2.5 2S4 14.105 4 13s1.12-2 2.5-2 2.5.895 2.5 2z" />
                                    <path fill-rule="evenodd" d="M9 3v10H8V3h1z" />
                                    <path d="M8 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 13 2.22V4L8 5V2.82z" />
                                </svg>
                                <br><span style="font-size:12px">Audio</span>
                            </a>
                        </div>
                    </div>

                    <div class="row  ">
                        <div class="col-4" style="font-size:25px">
                            <a href="categories/documents.php" id="docs">

                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V5.707A1 1 0 0 0 13.707 5L10 1.293A1 1 0 0 0 9.293 1H4zm5 1v3a1 1 0 0 0 1 1h3L9 2z" />
                                </svg>
                                <br><span style="font-size:12px">Documents</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>


    <div class="text-center upload-icon-box">

        <svg data-toggle="modal" data-target="#exampleModal" style="height:50px;width:50px;" viewBox="0 0 16 16" class="bi bi-box-arrow-in-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.646 7.854a.5.5 0 0 0 .708 0L8 5.207l2.646 2.647a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708z" />
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-1 0v9a.5.5 0 0 0 .5.5z" />
            <path fill-rule="evenodd" d="M1.5 2.5A1.5 1.5 0 0 1 3 1h10a1.5 1.5 0 0 1 1.5 1.5v8A1.5 1.5 0 0 1 13 12h-1.5a.5.5 0 0 1 0-1H13a.5.5 0 0 0 .5-.5v-8A.5.5 0 0 0 13 2H3a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h1.5a.5.5 0 0 1 0 1H3a1.5 1.5 0 0 1-1.5-1.5v-8z" />
        </svg>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Files</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div align="center">
                            <form action="uploadAll.php" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="file" name="file">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" name="u-btn" type="submit">upload file</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        window.onload = function() {

        }

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        var search = document.getElementsByClassName("search-icon");
        var s = document.getElementById("s-icon");

        function myFunction() {
            if (window.pageYOffset > sticky) {
                // change
                header.classList.add("sticky");
                header.style.height = 'inherit';


            } else {
                // normal(reset)
                header.classList.remove("sticky");
                header.style.height = '300px';



            }
        }
    </script>

</body>

</html>