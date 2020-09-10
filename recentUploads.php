   <!-- CSS only -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<style>
      @media (max-width:702px) {
            .cds {
                border-radius: 25px;
                margin: 0 auto;
                margin-top: 10px;
                /* padding: 10px; */
            }

            .card .card-body #recent-files {
                padding: 12px;


            }

            .header {
                padding: 90px;
                background: #555;
                color: #f1f1f1;
            }

            .sticky {
                position: fixed;
                top: 0;
                padding: 10px;
                width: 100%;
            }

            .sticky+.content {
                padding-top: 100px;
            }
            .filename{
                bottom:0;
                display: block;
                background:#eee ;
                color:black;
                text-align:center;
                font-size: 12px;
            }
        }
    </style>
<div class="container mt-4 content">
    <div class="row mt-3 mb-2 ">
        <div class="card card-body cds">

            <div class=" ml-3 navbar-brand h5" style="color:black;font-size:15px;">
                <a href="recent.php"> Recent uploads</a>
            </div>

            <!-- recently uploaded files -->
            <div class="container ">
                <div class="row p-1 ">
                    <!-- fetch files -->
                        <?php require 'test.php'; ?>


                    <div class="card  col p-1" style="background:rgb(0,0,0,0.2)">
                <p class="text-center m-auto h6 p-2" style="border-radius:20px; background:rgb(0,0,0,0.6)">
                            <a style=" color:white;" href="recent.php">
                                more
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>