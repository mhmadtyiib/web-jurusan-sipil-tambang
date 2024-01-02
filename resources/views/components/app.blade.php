<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN WEB JURUSAN TEKNIK SIPIL & PERTAMBANGAN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="icon" href="{{ url('public/frontend') }}/logo-politap.jpg" type="image/x-icon">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('public/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-layout.header />
        <x-layout.sidebar />
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li> --}}
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    {{ $slot }}
                    <div class="row">
                        <!-- ./col -->
                        <!-- ./col -->
                        <!-- ./col -->
                        <!-- ./col -->
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <x-layout.footer />
    </div>
    <script src="{{ url('public/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('public/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ url('public') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('public') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('public') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
