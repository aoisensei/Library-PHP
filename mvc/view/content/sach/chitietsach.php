

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

        .title {
          font-weight: 600;
          margin-top: 50px;
          margin: 50px auto;
        }
        .notice {
          margin-left: 100px;
        }
        .sach-wrap {
          display: flex;
          align-items: center;
          justify-content: space-between;
          margin-left: 100px;
          margin-top: 20px;
        }
        .sach-left {
          width: 400px;
        }
        .sach-img {
          width: 100%;
          height: 100%;
          object-fit: cover;
        }
        .sach-right {
          display: flex;
        }
        .title-sach {
          margin: 0 50px;
          font-size: 20px;
          font-weight: 600;
        }
        .content-sach {
          margin: 0 50px;
          font-size: 20px;
          font-weight: 400;
        }
        .btn-muon {
          margin: 20px auto;
        }
    </style>

    <body>

        <div class="title"><h1>Chi tiết sách</h1></div>
        <div class="notice" >
          <?php
              if (isset($data['result'])) {
                  if($data['result'] == true) { ?>
                      <h3>Mượn sách thành công</h3>
                  <?php }
                  else { ?>
                      <h3>Mượn sách thất bại</h3>
                  <?php }
              }
          
          ?>
        </div>
        <div class="sach-wrap" >
          <div class="sach-left">
            <?php
              while ($row = mysqli_fetch_array($data["type"])) { ?>
                <img src="<?php echo $row['hinhanh']; ?>" class="sach-img" >
            <?php 
              } 
            ?>
          </div>
          <div class="sach-right">
            <div class="title-sach">
              <p>Mã sách</p>
              <p>Tên sách</p>
              <p>Thể loại</p>
              <p>Tác giả</p>
              <p>Nhà xuất bản</p>
              <p>Năm sách</p>
            </div>
            <div class="content-sach">
        
              <?php
                    while ($rows = mysqli_fetch_array($data["types"])) {?>
                        <tr>
                            <p><?php echo $rows["masach"]; ?></p>
                            <p><?php echo $rows["tensach"]; ?></p>
                            <p><?php echo $rows["theloai"]; ?></p>
                            <p><?php echo $rows["tacgia"]; ?></p>
                            <p><?php echo $rows["nxb"]; ?></p>
                            <p><?php echo $rows["namxb"]; ?></p>
                        </tr>
                <?php
                    }
                ?>
            </div>
          </div>
        </div>

        <?php
          while ($row_sach = mysqli_fetch_array($data["type_sach"])) { ?>
            <a class="btn-muon btn btn-primary" href="user_sach/muon_sach/<?php echo $row_sach['masach'] ?>" >Mượn sách</a>
        <?php 
          } 
        ?>
        
        
    </body>