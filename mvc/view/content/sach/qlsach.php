
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
        .header-action {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .wrap-table {
            width: 90%;
            margin: 50px;
        }
        .form-search {
          margin: 20px auto;
          text-align: center;
        }
        .excel {
            margin: 20px auto;
        }
        
    </style>

    <body>

    <div class="header-action" >
        <form method="POST" action="qlsach/search" class="form-search">
            <div class="form-group">
            <input type="text" class="form-control" name="masach" placeholder="Nhập mã sách">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
        <a style="width: 200px; margin-right: 50px;" href="http://localhost:81/php/bai_tap_lon/qlsach/view_insert" class="btn btn-info" > Thêm sách</a>
    </div>
    
    <div class="wrap-table" >
        <?php
            if (isset($data['result'])) {
                if($data['result'] == true) { ?>
                    <h3>Xóa thành công</h3>
                <?php }
                else { ?>
                    <h3>Xóa thất bại</h3>
                <?php }
            }
            
        ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Mã sách</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">Nhà xuất bản</th>
                    <th scope="col">Năm xuất bản</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($data["type"])) {?>
                        <tr>
                            <th scope="row"><?php echo $row["masach"]; ?></th>
                            <td><?php echo $row["tensach"]; ?></td>
                            <td><?php echo $row["theloai"]; ?></td>
                            <td><?php echo $row["tacgia"]; ?></td>
                            <td><?php echo $row["nxb"]; ?></td>
                            <td><?php echo $row["namxb"]; ?></td>
                            <td><?php echo $row["soluong"]; ?></td>
                            <td>
                                <a href="qlsach/edit/<?php echo $row['masach'] ?>" class="btn btn-primary">Sửa</a>
                                <a href="qlsach/delete/<?php echo $row['masach'] ?>" class="btn btn-danger">Xóa</a>
                            </td>
                            
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <form class="excel" method="POST" action="qlsach/import" enctype="multipart/form-data" >
            <input type="file" name="file" accept=".xlsx">
            <input type="submit" name="submit" value="Nhập file Excel" class="btn btn-primary">
        </form>

        <form class="excel" method="POST" action="qlsach/export" >
            <input type="submit" name="submit" value="Xuất file Excel" class="btn btn-primary">
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