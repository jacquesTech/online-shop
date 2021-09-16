<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/css/Vazir.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/addres.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/filter.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/product.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="../assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Start: Sidebar -->
        <nav class="navbar navbar-light align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-dark);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0">
                    <div class="sidebar-brand-icon"><i class="fas fa-user-tie"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>پنل مدیریت</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="admin.php"><i class="fas fa-poll"></i><span>داشبرد</span></a></li>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading">
                        <p class="mb-0">&nbsp;مدیریت محصولات&nbsp;</p>
                    </div>
                    <li class="nav-item">
                        <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse" href="#collapse" role="button"><i class="fas fa-boxes"></i>&nbsp;<span>لیست محصولات</span></a>
                            <div class="collapse" id="collapse">
                                <div class="bg-white border rounded py-2 collapse-inner" style="overflow: auto;max-height: 200px;position: relative;"><i class="fas fa-angle-double-down flash animated infinite" style="position: absolute;color: var(--bs-blue);bottom: 10%;left: 10%;"></i>
                                    <h6 class="collapse-header">کالای دیجیتال</h6><a class="collapse-item" href="admin-product-list.php">مبایل</a><a class="collapse-item" href="admin-product-list.php">لبتاب</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="admin-add-product.php"><i class="fas fa-plus-circle"></i><span>افزودن کالای جدید</span></a><a class="nav-link" href="#"><i class="fas fa-donate"></i><span>تخفیفات</span></a></li>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading">
                        <p class="mb-0">مدیریت کاربران&nbsp;</p>
                    </div>
                    <li class="nav-item"><a class="nav-link" href="admin-add-user.php"><i class="fas fa-user-plus"></i><span>افزودن کاربر</span></a><a class="nav-link" href="admin-user-list.php"><i class="fas fa-users"></i><span>لیست کاربران</span></a></li>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading">
                        <p class="mb-0">مدیریت فروش&nbsp;</p>
                    </div>
                    <li class="nav-item"><a class="nav-link" href="admin-order-list.php"><i class="fas fa-clipboard-list"></i><span>سفارشات</span></a></li>
                    <hr class="sidebar-divider">
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav><!-- End: Sidebar -->
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white d-flex justify-content-center align-items-center mb-4 topbar static-top" style="direction: rtl;">
                    <div class="container-fluid">
                        <ul class="navbar-nav" style="padding-right: 0px;">
                            <li class="nav-item d-flex"><a class="nav-link"><span>خروج</span><i class="fas fa-share" style="margin-right: 5px;"></i></a></li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                        </ul>
                        <div><img id="shop_logo" src="../assets/img/13e7bddc-3c00-45ff-b8a4-84901b6e9b80.png"></div>
                    </div>
                </nav><!-- Start: dash orders list -->
                <div class="container-fluid" style="direction: rtl;text-align: right;">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4" style="margin-top: 20px;"><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;دریافت گزارش&nbsp;</a></div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">لیست فروش</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 text-nowrap">
                                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">نمایش<select class="d-inline-block form-select form-select-sm">
                                                        <option value="10" selected="">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>&nbsp;</label></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="جست و جو  . . . "></label></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive" style="text-align: center;border-radius: 10px;">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>خریدار</th>
                                                    <th>شماره ثبت سفارش</th>
                                                    <th><strong>تاریخ ثبت سفارش</strong><br></th>
                                                    <th>تعداد کالا</th>
                                                    <th>مبلغ قابل پرداخت&nbsp;</th>
                                                    <th>وضعیت پرداخت</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>فرهاد فرخ سرشت</td>
                                                    <td>Cell 2<a class="d-inline-flex" style="margin-right: 5px;"><i class="fas fa-clipboard-list"></i><small>مشاهده فاکتور<br></small></a></td>
                                                    <td>Cell 2</td>
                                                    <td>11</td>
                                                    <td>11</td>
                                                    <td class="ad_pl_trash">ط</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>فرهاد فرخ سرشت</td>
                                                    <td>Cell 2<a class="d-inline-flex" style="margin-right: 5px;"><i class="fas fa-clipboard-list"></i><small>مشاهده فاکتور<br></small></a></td>
                                                    <td>Cell 2</td>
                                                    <td>11</td>
                                                    <td>11</td>
                                                    <td class="ad_pl_trash">ط</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>فرهاد فرخ سرشت</td>
                                                    <td>Cell 2<a class="d-inline-flex" style="margin-right: 5px;"><i class="fas fa-clipboard-list"></i><small>مشاهده فاکتور<br></small></a></td>
                                                    <td>Cell 2</td>
                                                    <td>11</td>
                                                    <td>11</td>
                                                    <td class="ad_pl_trash">ط</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>فرهاد فرخ سرشت</td>
                                                    <td>Cell 2<a class="d-inline-flex" style="margin-right: 5px;"><i class="fas fa-clipboard-list"></i><small>مشاهده فاکتور<br></small></a></td>
                                                    <td>Cell 2</td>
                                                    <td>11</td>
                                                    <td>11</td>
                                                    <td class="ad_pl_trash">ط</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>فرهاد فرخ سرشت</td>
                                                    <td>Cell 2<a class="d-inline-flex" style="margin-right: 5px;"><i class="fas fa-clipboard-list"></i><small>مشاهده فاکتور<br></small></a></td>
                                                    <td>Cell 2</td>
                                                    <td>11</td>
                                                    <td>11</td>
                                                    <td class="ad_pl_trash">ط</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>فرهاد فرخ سرشت</td>
                                                    <td>Cell 2<a class="d-inline-flex" style="margin-right: 5px;"><i class="fas fa-clipboard-list"></i><small>مشاهده فاکتور<br></small></a></td>
                                                    <td>Cell 2</td>
                                                    <td>11</td>
                                                    <td>11</td>
                                                    <td class="ad_pl_trash">ط</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex flex-row justify-content-around ad_pl_page_nex_bu">
                                            <div class="border rounded d-flex align-items-center"><i class="fas fa-angle-double-right"></i><small>صفحه بعد</small></div>
                                            <div class="border rounded d-flex align-items-center"><small>صفحه قبل</small><i class="fas fa-angle-double-left"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End: dash orders list -->
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/chart.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/home_header_slider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/logo.js"></script>
    <script src="../assets/js/mini%20p%20image%20slider.js"></script>
    <script src="../assets/js/new_p_vs.js"></script>
    <script src="../assets/js/productslider.js"></script>
    <script src="../assets/js/Simple-Slider.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>