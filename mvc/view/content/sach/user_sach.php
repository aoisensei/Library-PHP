

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quản lý thư viện</title>
        <base href="http://localhost:81/php/bai_tap_lon/" >
        <link rel="icon" type="image/x-icon" href="public/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <style>
        .tbody {
            margin-top: 50px;
            margin-left: 100px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 30px;
        }

        .list-group {
            text-align: center;
        }
        .sach-card {
            height: 430px;
            width: 100%;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .card-body {
            text-align: center;
        }

        .list-g {
            list-style-type: none;
        }
    </style>

    <body>
    <table class="table">
        <div class="tbody" >
            
            <?php 
                while ($row = mysqli_fetch_array($data["type"])) {?>
                    <div class="card sach-card" style="width: 16rem;">
                        <img src="<?php echo $row['hinhanh']; ?>" class="card-img-top" style="height: 200px; object-fit: cover;" alt="...">
                        <div style="height: 200px;" >
                            <div class="card-body">
                                <h5 style="text-align: center ;" class="card-title"><?php echo $row['tensach'] ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-g"><?php echo $row['tacgia'] ?></li>
                                <li class="list-g"><?php echo $row['nxb'] ?></li>
                            </ul>
                            <div class="card-body">
                                
                                <a href="user_sach/chitietsach/<?php echo $row['masach'] ?>" style="margin-top: 10px ; width: 100px;" class="btn btn-info">Chi tiết</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </table>
    </body>