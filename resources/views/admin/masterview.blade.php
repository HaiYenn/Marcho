<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <base href="{{ asset('public/admin/') }}/" target="_top">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/AdminLTE.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/_all-skins.css">
  <link rel="stylesheet" href="css/style.css" />
   @yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('admin/layout/header')
  <!-- =============================================== -->
  <!-- Left side column. contains the sidebar -->
  @include('admin/layout/sidebar')
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  @yield('main')
  
  <!-- /.content-wrapper -->
  @include('admin/layout/footer')


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/adminlte.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>

<script> CKEDITOR.replace('editor1'); </script>
<script>
  $(function () {
    $('#example1').DataTable({
      'ordering'    : false,
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
 @yield('script')
  
</body>
</html>
