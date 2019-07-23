@include('admin.partials._header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include('admin.partials._navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.partials._sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @section('content')
            @show
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.partials._footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.partials._script')
@section('script')
    @show
