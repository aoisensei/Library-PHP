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
        <link href="public/css/style.css" rel="stylesheet" />
    </head>

    <style>
        .tieu-de-home {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, .6);
        }

        .tieu-de {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-shadow: 0px 0px 10px #000000;
            font-weight: 700;
            font-size: 50px;
            text-align: center;
        }

        .intro-tv {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 50px;
        }

        .intro-left {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .intro-right {
            width: 50%;
        }

        .intro-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .title-content {
            font-size: 50px;
            font-weight: 700;
            margin-top: 10px;
        }

        .title-sologan {
            font-size: 20px;
            font-weight: 500;
            margin-top: 10px;
        }

        .title-text {
            text-align: center;
            margin-top: 10px;
        }

        .about {
            background-color: rgba(0, 0, 0, .4);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .about-title {
            font-size: 35px;
            font-weight: 700;
            margin-top: 50px;
            color: aliceblue;
        }

        .about-cards {
            margin: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 30px;
        }

        .card {
            height: 300px;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .card-img-top {
            width: 100%;
            height: 200px;
        }

        .card-text {
            text-align: center;
        }

    </style>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="">Quản lý thư viện</a>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="http://localhost:81/php/bai_tap_lon/login">Bắt đầu</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('public/assets/imgs/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>UTT Library</h1>
                            <span class="subheading">Hãy để sách kết nối với tâm hồn của bạn</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="intro-tv">
            <div class="intro-left">
                <h2 class="title-content">Thư viện UTT</h2>
                <h3 class="title-sologan" >Cả bầu trời kiến thức</h3>
                <p class="title-text">Chào mừng bạn đến với thư viện của UTT, tại đây bạn có thể thỏa sức đam mê đọc sách với mọi thể loại sách đều có, từ sách tham khảo, tài liệu, giáo trình, tạp chí,... </p>
            </div>

            <div class="intro-right">
                <img class="intro-img" src="https://imageio.forbes.com/specials-images/imageserve/5f85be4ed0acaafe77436710/0x0.jpg?format=jpg&width=1200" alt="">
            </div>
        </div>

        <div class="about">
            <div class="about-title">Các chức năng</div>

            <div class="about-cards">
                <div class="card" style="width: 18rem;">
                    <img src="https://previews.123rf.com/images/maxxyustas/maxxyustas1401/maxxyustas140100024/24834995-searching-in-library-loupe-and-books-3d.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Tìm kiếm sách</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://images.indianexpress.com/2020/04/books_759.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Quản lý sách</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://dkofva0t6jnyn.cloudfront.net/sites/default/files/styles/amp_blog_image_large/public/consumer/blog/csm-motivatemiddleschoolreader-blog.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Quản lý độc giả</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="http://lib.iuh.edu.vn/wp-content/uploads/2018/04/20180417_095145-01-1024x576.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Quản lý mượn trả sách</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://file1.dangcongsan.vn/data/0/images/2020/01/30/vietha/thongke.jpg?dpi=150&quality=100&w=680" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Thống kê sách</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.newsapi.com.au/image/v1/8791f511b22d3b0abb8b52c575bff083?width=650" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Chi tiết mượn trả sách</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/thanhnguyen110902/">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/aoisensei">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Nguyễn Lê Trung Thành</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="public/js/script.js"></script>
    </body>
</html>
