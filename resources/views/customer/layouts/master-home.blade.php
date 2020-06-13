<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery Project</title>
    

      
    
    
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{ URL::asset('template/css/themes/lite-purple.min.css') }}"  rel="stylesheet" />
    <link  href="{{ URL::asset('template/css/plugins/perfect-scrollbar.min.css') }}"  rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('template/css/plugins/toastr.css') }}" />
    @yield('css')
    <link href="{{ URL::asset('css/layout.css') }}" rel="stylesheet">
</head>

<body>
    
    <div class="app-admin-wrap layout-sidebar-large">
        
        @include ("customer.layouts.master-header")
        @include ("customer.layouts.master-sidebar")
        
      
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->

            <div class="main-content">
                @yield('content')
            </div>

            <div class="flex-grow-1"></div>
          
            <!-- fotter end -->
        </div>
    </div><!-- ============ Search UI Start ============= -->
   

    
	
</body>
<script src="{{ URL::asset('template/js/plugins/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('template/js/plugins/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('template/js/plugins/perfect-scrollbar.min.js') }}" ></script>
<script src="{{ URL::asset('template/js/scripts/script.min.js') }}" ></script>
<script src="{{ URL::asset('template/js/scripts/sidebar.large.script.min.js') }}"></script>
<script src="{{ URL::asset('template/js/plugins/toastr.min.js') }}" ></script>
<script src="{{ URL::asset('template/js/scripts/toastr.script.min.js') }}"></script>
<script src="{{ URL::asset('customer/js/layout.js') }}"></script>
@yield('script')

@include('customer.layouts.showerrors')
</html>