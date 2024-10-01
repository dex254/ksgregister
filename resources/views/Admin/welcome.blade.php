<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('') }}assets/images/lksg.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('') }}assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('') }}assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('') }}assets/plugins/highcharts/css/highcharts-white.css" rel="stylesheet" />
	<link href="{{asset('') }}assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="{{asset('') }}assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('') }}assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('') }}assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('') }}assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('') }}assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('') }}assets/css/app.css" rel="stylesheet">
	<link href="{{asset('') }}assets/css/icons.css" rel="stylesheet">
	<link href="{{ asset('assets/css/datatables.css') }}" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
	@yield('scripts')
	
	<title>KSG->welcome participant </title>
</head>
<body  class="wrapper"  >
    <style>
        body {
            background-color:#6F5851;; /* Neon yellow background color */
           
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
    
    

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">KSG</div>
                
            
             
               
            </div><div class="card-body">
                @if(session('success'))
                
                <div  class="modal-content bg-success"  role="alert">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-white"><i class='bx bx-bell'></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-white">Welcome TO KSG</h6>
                            <div class="text-white">{{ session('success') }}</div>
                        </div>
                        
                    </div>
                    

                    
                    
                    
                    
                </div>

                @endif
            </div>
            <div class="card-body">
                @if ($errors->any() || session('success'))
                <div class="alert alert-{{ $errors->any() ? 'danger' : 'success' }}" role="alert">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @else
                        {{ session('success') }}
                    @endif
                </div>
            @endif
           
                <div class="card-body">
                    
            <div class="images-container">
                <img src="{{ asset('assets/images/lksg.png') }}" height="130" width="130" alt="Image 3">
                <img src="{{ asset('assets/images/fksg.JPG') }}" height="130" width="10" alt="Image 2">
                <img src="{{ asset('assets/images/aksg.png') }}" height="130" width="130" alt="Image 1">
                
                
            
        </div>