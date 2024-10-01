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
	
	<title>KSG->Admin </title>
</head><div>


    <div class="wrapper"   >
        <style>
            body {
                background-color:#032c10f7; /* Neon yellow background color */
               
            }
            img {
                max-width: 100%;
                height: auto;
            }
        </style>
<div class="row">
    <div class="col-xl-7 mx-auto">
        <h6 class="mb-0 text-uppercase">Admin  </h6>
        <hr/>
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
       
        <h6 class="mb-0 text-uppercase">Admins</h6>
        <hr/>
        <div class="card border-top border-0 border-4 border-white">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-user me-1 font-22 text-white"></i>
                    </div>
                    <h5 class="mb-0 text-white">Register Admins</h5>
                </div>
                <hr>
                <form class="row g-3" action="{{ route('admin.store') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputLastName1" class="form-label">Full Name</label>
                        <div class="input-group"> <span class="input-group-text"><i class='bx bxs-user'></i></span>
                            <input type="text" class="form-control border-start-0" id="name" name="name" placeholder="First Name" />
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <label for="inputPhoneNo" class="form-label">Id number</label>
                        <div class="input-group"> <span class="input-group-text"><i class='bx bxs-microphone' ></i></span>
                            <input type="number" class="form-control border-start-0" id="National_id"  name="National_id" placeholder="Phone No" />
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="bsValidation1" class="form-label">Cloch a role</label> <br>
                        <div class="form-check">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="admin" value="admin">
                                <label class="form-check-label" for="yes">Admin</label>
                            </div> <br>
                            
                    </div>
                    </div>
                    <div class="col-12">
                        <label for="inputEmailAddress" class="form-label">Email Address</label>
                        <div class="input-group"> <span class="input-group-text"><i class='bx bxs-message' ></i></span>
                            <input type="email" class="form-control border-start-0" id="email" name="email" placeholder="Email Address" />
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputChoosePassword" class="form-label">Choose Password</label>
                        <div class="input-group"> <span class="input-group-text"><i class='bx bxs-lock-open' ></i></span>
                            <input type="text" class="form-control border-start-0" id="password" name="password" placeholder="Choose Password" />
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputChoosePassword" class="form-label">Date</label>
                        <div class="input-group"> <span class="input-group-text"><i class='bx bxs-lock-open' ></i></span>
                            <input type="date" class="form-control border-start-0" id="date" name="date" placeholder="Choose Password" />
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-light px-5">Register</button>
                    </div>
                </form>
            </div>
        </div>
       
        
    </div>
</div>
    </div>
</div>

</div>
