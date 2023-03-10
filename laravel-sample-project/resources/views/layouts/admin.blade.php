<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        @yield('title')
        <title>Dashboard | Nazox - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jquery.vectormap css -->
        <link href={{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}} rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href={{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
        <link href={{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
        <!-- edit -->
        <link href={{asset('assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css')}} href="" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href={{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}} rel="stylesheet" type="text/css" />
        
        <!-- Bootstrap Css -->
        <link href={{asset('assets/css/bootstrap.min.css')}} id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href={{asset('assets/css/icons.min.css')}} rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href={{asset('assets/css/app.min.css')}} id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            @include("partials.header")
            <!-- ========== Left Sidebar Start ========== -->
            @include("partials.left-sidebar")
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        @include("partials.right-sidebar")
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src={{asset("assets/libs/jquery/jquery.min.js")}}></script>
        <script src={{asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}></script>
        <script src={{asset("assets/libs/metismenu/metisMenu.min.js")}}></script>
        <script src={{asset("assets/libs/simplebar/simplebar.min.js")}}></script>
        <script src={{asset("assets/libs/node-waves/waves.min.js")}}></script>

        

        <!-- Required datatable js -->
        <script src={{asset("assets/libs/datatables.net/js/jquery.dataTables.min.js")}}></script>
        <script src={{asset("assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}></script>
        
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Buttons examples -->
        <script src={{asset("assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js")}}></script>
        <script src={{asset("assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js")}}></script>
        <script src={{asset("assets/libs/jszip/jszip.min.js")}}></script>
        <script src={{asset("assets/libs/pdfmake/build/pdfmake.min.js")}}></script>
        <script src={{asset("assets/libs/pdfmake/build/vfs_fonts.js")}}></script>
        <script src={{asset("assets/libs/datatables.net-buttons/js/buttons.html5.min.js")}}></script>
        <script src={{asset("assets/libs/datatables.net-buttons/js/buttons.print.min.js")}}></script>
        <script src={{asset("assets/libs/datatables.net-buttons/js/buttons.colVis.min.js")}}></script>

        <script src={{asset("assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js")}}></script>
        <script src={{asset("assets/libs/datatables.net-select/js/dataTables.select.min.js")}}></script>

        <!-- Datatable init js -->
        <script src={{asset("assets/js/pages/datatables.init.js")}}></script>

        {{-- <script src={{asset("assets/js/app.js")}}></script> --}}

    </body>
</html>
