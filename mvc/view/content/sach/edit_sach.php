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
        
        .form-insert-wrap {
            width: 80%;
            margin: 20px auto;
        }
    </style>

    <body>
    
        <div class="form-insert-wrap" >
            <?php
                if (isset($data['result'])) {
                    if($data['result'] == true) { ?>
                        <h3>Sửa thành công</h3>
                    <?php }
                    else { ?>
                        <h3>Sửa thất bại</h3>
                    <?php }
                }
                
            ?>
            <?php
                while($row = mysqli_fetch_array($data['edit'])) { ?>
                    <form action="qlsach/update/<?php echo $row['masach']; ?>" method="POST" >
                        <div class="form-group" >
                            <label>Mã sách</label>
                            <input type="text" name="masach" class="form-control" placeholder="Nhập mã sách" value="<?php echo $row['masach']; ?>">
                        </div>
                        <div class="form-group" >
                            <label>Tên sách</label>
                            <input type="text" name="tensach" class="form-control" placeholder="Nhập tên sách" value="<?php echo $row['tensach']; ?>">
                        </div>
                        <div class="form-group" >
                            <label>Hình ảnh sách</label>
                            <input type="text" name="hinhanh" class="form-control" placeholder="Nhập đường dẫn" value="<?php echo $row['hinhanh']; ?>">
                        </div>
                        <div class="form-group" >
                            <label>Thể loại</label>
                            <input type="text" name="theloai" class="form-control" placeholder="Nhập thể loại sách" value="<?php echo $row['theloai']; ?>">
                        </div>
                        <div class="form-group" >
                            <label>Tác giả</label>
                            <input type="text" name="tacgia" class="form-control" placeholder="Nhập tên tác giả" value="<?php echo $row['tacgia']; ?>">
                        </div>
                        <div class="form-group" >
                            <label>Nhà xuất bản</label>
                            <input type="text" name="nxb" class="form-control" placeholder="Nhập tên nhà xuất bản" value="<?php echo $row['nxb']; ?>">
                        </div>
                        <div class="form-group" >
                            <label>Năm xuất bản</label>
                            <input type="date" name="namxb" class="form-control" value="<?php echo $row['namxb']; ?>">
                        </div>
                        <div class="form-group" >
                            <label>Số lượng</label>
                            <input type="number" name="soluong" class="form-control" value="<?php echo $row['soluong']; ?>">
                        </div>
                        <div class="form-group" >
                    
                            <input type="submit" name="submit" class="form-control btn btn-success " value="Cập nhật sách" >
                        </div>
                    </form>
                <?php }
            ?>

            

            

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