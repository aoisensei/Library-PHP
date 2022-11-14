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
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <style>
        .wrap-table {
            width: 90%;
            margin: 50px;
        }
        .form-search {
          margin: 20px auto;
          text-align: center;
        }
    </style>

    <body>

    <form method="POST" action="chitietmt/search_madg" class="form-search">
        <div class="form-group">
            <input type="text" class="form-control" name="madg" placeholder="Nhập mã độc giả">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>

    <div class="wrap-table" >
        <?php
            if (isset($data['result'])) {
                if($data['result'] == true) { ?>
                    <h3>Trả sách thành công</h3>
                <?php }
                else { ?>
                    <h3>Trả sách thất bại</h3>
                <?php }
            }
            
        ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Mã phiếu</th>
                    <th scope="col">Mã sách</th>
                    <th scope="col">Mã độc giả</th>                   
                    <th scope="col">Ngày lập phiếu</th>                   
                    <th scope="col">Hạn trả</th>                                    
                    <th scope="col">Thao tác</th>                   
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($data["type"])) {?>
                        <tr>
                            <th scope="row"><?php echo $row["maphieu"]; ?></th>
                            <td><?php echo $row["masach"]; ?></td>
                            <td><?php echo $row["madg"]; ?></td>
                            <td><?php echo $row["ngaylapphieu"]; ?></td>
                            <td><?php echo $row["hantra"]; ?></td>
                            <td>
                                <a href="chitietmt/edit/<?php echo $row['maphieu']; ?>" class="btn btn-primary">Gia hạn</a>
                                <a href="chitietmt/delete/<?php echo $row['maphieu']; ?>/<?php echo $row["masach"]; ?>" class="btn btn-danger">Trả sách</a>
                            </td>
                            
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    
    </body>