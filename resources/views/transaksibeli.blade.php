<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRUD Customer</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('bcd/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('bcd/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                CRUD
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/supplier">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Supplier</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/customer">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Customer</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/restok">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Restok</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/daftartransaksibeli">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Transaksi</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="bcd/img/undraw_profile_1.svg" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="bcd/img/undraw_profile_2.svg" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="bcd/img/undraw_profile_3.svg" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="bcd/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Form Restok -->
                <script type="text/javascript">
                    window.onload = function() {
                        $("#CBNama_Supplier").change(function() {
                            var ambilid = $("#supplier-" + this.value).data('id_supplier');
                            $("#id_supplier").val(ambilid);
                        });
                    }
                </script>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <header class="section-header">
                                <h3 class="section-title">Form Pembelian Roti (Restok)</h3>
                            </header>
                            <div class="form">
                                @foreach($produk as $DB)
                                <form action="/insertpembelian" method="post" class="php-email-form">
                                    @csrf
                                    <!-- {{ csrf_field() }} -->
                                    <div class="form-group">
                                        <label for="id_beli">Id Restok :</label>
                                        <input type="text" name="id_beli" class="form-control" id="id_beli" placeholder="Id Restok" data-msg="Please enter at least 5 chars" />
                                    </div>
                                    <div class="form-group">
                                        <label for="id_roti">Id Roti :</label>
                                        <input type="text" class="form-control" name="id_roti" id="id_roti" value="{{ $DB->id_roti}}" placeholder="Id Roti" data-rule="minlen:1" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_roti">Nama Roti :</label>
                                        <input type="text" class="form-control" name="nama_roti" id="nama_roti" placeholder="Nama Roti" value="{{ $DB->nama_roti}}" data-rule="minlen:1" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="id_supplier">Id Supplier :</label>
                                        <input type="text" class="form-control" name="id_supplier" id="id_supplier" placeholder="Id Supplier" data-rule="minlen:1" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="Nama_Supplier">Nama Supplier</label>
                                        <select name="CBNama_Supplier" id="CBNama_Supplier">
                                            <option selected>Pilih Supplier</option>
                                            @foreach($supplier as $supp)
                                            <option value="{{$supp->id_supplier}}" id="supplier-{{$supp->id_supplier}}" data-id_supplier="{{$supp->id_supplier}}">{{$supp->nama_supplier}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok Sekarang</label>
                                        <input type="number" class="form-control" name="stok" id="stok" value="{{ $DB->stok}}" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga Roti :</label>
                                        <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga Roti" value="{{ $DB->harga}}" data-rule="minlen:1" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah Restok :</label>
                                        <input type="number" class="form-control" name="jumlah" id="jumlah" onkeyup="stock();" placeholder="Jumlah Restok" data-rule="minlen:8" data-msg="Masukkan Jumlah Bahan" />
                                    </div>
                                    <div class="form-group">
                                        <label for="total_harga">Total Harga :</label>
                                        <input type="number" class="form-control" name="total_harga" id="total_harga" placeholder="Rp." data-rule="minlen:8" readonly required />
                                    </div>
                                    <div class="form-group">
                                        <label for="Jumlah_Akhir">Jumlah Stock Setelah Beli</label>
                                        <input type="number" class="form-control" name="Jumlah_Akhir" id="Jumlah_Akhir" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="bayar">Bayar :</label>
                                        <input type="number" class="form-control" name="bayar" id="bayar" onkeyup="totalharga();" placeholder="Bayar" data-rule="minlen:8" data-msg="Masukkan Jumlah Bayar" />
                                    </div>
                                    <div class="form-group">
                                        <label for="kembalian">Kembalian :</label>
                                        <input type="number" class="form-control" name="kembalian" id="kembalian" placeholder="Kembalian" data-rule="minlen:8" readonly />
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success">Restok Roti</button>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <br>

            </div>
            <!-- End of Main Content -->
            <script>
                function totalharga() {
                    var jmlbeli = document.getElementById('jumlah').value;
                    var harga = document.getElementById('harga').value;
                    var result = parseInt(jmlbeli) * parseInt(harga);
                    var byr = document.getElementById('bayar').value;
                    var kembalian = parseInt(byr) - parseInt(result);
                    document.getElementById('total_harga').value = result;
                    document.getElementById('kembalian').value = kembalian;
                }

                function stock() {
                    var jmlbeli = document.getElementById('jumlah').value;
                    var stocksekarang = document.getElementById('stok').value;
                    var result = parseInt(jmlbeli) + parseInt(stocksekarang);
                    document.getElementById('Jumlah_Akhir').value = result;
                }
            </script>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;YusrilRahardian 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('bcd/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bcd/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('bcd/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('bcd/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('bcd/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('bcd/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('bcd/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>