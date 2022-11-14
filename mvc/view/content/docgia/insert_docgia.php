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
                        <h3>Thêm thành công</h3>
                    <?php }
                    else { ?>
                        <h3>Thêm thất bại</h3>
                    <?php }
                }
                
            ?>

            <form action="qldocgia/insert" method="POST" >
                <div class="form-group" >
                    <label>Mã độc giả</label>
                    <input type="text" name="madg" class="form-control" placeholder="Nhập mã độc giả" >
                </div>
                <div class="form-group" >
                    <label>Mật khẩu</label>
                    <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu" >
                </div>
                <div class="form-group" >
                    <label>Tên độc giả</label>
                    <input type="text" name="tendg" class="form-control" placeholder="Nhập tên độc giả" >
                </div>
                <div class="form-group" >
                    <label>Địa chỉ</label>
                    <input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ" >
                </div>
                <div class="form-group" >
                    <label>Lớp</label>
                    <input type="text" name="lop" class="form-control" placeholder="Nhập lớp" >
                </div>
                <div class="form-group" >
                    <label>Mã sinh viên</label>
                    <input type="text" name="masv" class="form-control" placeholder="Nhập mã sinh viên" >
                </div>
                <div class="form-group" >
                    <label>Ngày tạo thẻ</label>
                    <input type="date" name="ngaytaothe" class="form-control" >
                </div>
                
                <div class="form-group" >
            
                    <input type="submit" name="submit" class="form-control btn btn-success " value="Thêm độc giả" >
                </div>
            </form>

            

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