<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ILCR Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin_assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('admin_assets/vendors/base/vendor.bundle.base.css')}}">
  {{-- WYSIWYG --}}
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /> -->

  <script src="https://cdn.tiny.cloud/1/h3fr5zsrxtdsjxg37p3he5x980txzx1c2qr4nek8kw4rb9du/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    
      @include('admin.layouts.header')
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <script type="text/javascript">document.write( new Date().getFullYear() );</script>. NGS AutoClinic. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('admin_assets/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('admin_assets/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('admin_assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('admin_assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('admin_assets/js/template.js')}}"></script>
  <script src="{{ asset('admin_assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin_assets/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  
</body>

</html>

