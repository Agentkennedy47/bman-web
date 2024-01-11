<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bman Digital Services - Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Toastr css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <!-- Datatable -->
    <link href="{{ asset('backend/assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/assets/vendor/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet">

    <!-- Summernote -->
    <link href="{{ asset('backend/assets/vendor/summernote/summernote.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
       
        @include('admin.partials.navbar')

        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
       
        @include('admin.partials.header')

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->

        @include('admin.partials.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        
        @yield('admin')

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        
        @include('admin.partials.footer')

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('backend/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.min.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('backend/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins-init/datatables.init.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('backend/assets/js/code.js') }}"></script>

    <!-- Toastr js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="{{ asset('backend/assets/vendor/chartist/js/chartist.min.js') }}"></script>

    <script src="{{ asset('backend/assets/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/pg-calendar/js/pignose.calendar.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('backend/assets/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ asset('backend/assets/js/plugins-init/summernote-init.js') }}"></script>


    <script src="{{ asset('backend/assets/js/dashboard/dashboard-2.js') }}"></script>
    <!-- Circle progress -->

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
           case 'info':
           toastr.info(" {{ Session::get('message') }} ");
           break;

           case 'success':
           toastr.success(" {{ Session::get('message') }} ");
           break;

           case 'warning':
           toastr.warning(" {{ Session::get('message') }} ");
           break;

           case 'error':
           toastr.error(" {{ Session::get('message') }} ");
           break; 
        }
        @endif 
    </script>
</body>
</html>