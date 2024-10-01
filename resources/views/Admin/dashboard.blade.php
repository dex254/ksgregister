<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/dashboard-alternate.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 07:17:23 GMT -->
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
	
	<title>KSG->Admin hotels</title>
</head>

<body   class="wrapper"   >
	<style>
        body {
            background-color:#032c10f7; /* Neon yellow background color */
           
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
   
	<!--wrapper-->
	<div  class="bg-theme bg-theme8">
		<!--sidebar wrapper -->
		<div data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('') }}assets/images/lksg.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">KSG  Admin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			
				
				
				
				
				
				
				
					
				
				
				
				
				
				
				
			<!--end navigation-->
		</div>
        <header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control"id="searchInput" onkeyup="searchTable()" placeholder="Search for eny feild.."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							

							
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
									
										
										
										
										
										
										
										
										
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="btn btn-light w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										
										
										
									
										
										
										
										
										
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h5 class="mb-0">Total</h5>
												<h5 class="mb-0 ms-auto">$489.00</h5>
											</div>
											<button class="btn btn-light w-100">Checkout</button>
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							
							<div class="user-info">
								<p class="user-name mb-0">{{ Auth::guard('admin')->user()->name }}</p>
								
                                    <h5 class="my-0 fw-normal"> @if (auth()->check())
                                        <h5 class="my-0 fw-normal">{{ Auth::guard('admin')->user()->name }}</h5>
										<h5 class="my-0 fw-normal">{{ Auth::guard('admin')->user()->role }}</h5>
                                                @endif 
                                   

                                </span></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="/admin/create"><i class="bx bx-cog fs-5"></i><span>Create Admins</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="/admin/dashboard"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li> <form method="POST" action="{{ route('admin.logout') }}">
								@csrf
								<button  class="btn btn-outline-primary px-5 radius-30" type="submit">Logout</button>
							</form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

        
            <div class="page-content">
				<br>
				<br>
				<br>
                <!--breadcrumb-->
                
                   
                    
                    <h6 class="mb-0 text-uppercase">DataTable Import</h6>
                        <hr/>
                        <div class="col">
                            <a href="{{ route('admin.export') }}"><button type="button" class="btn btn-success px-5 radius-30">Download Exell</button></a>
                        </div><br>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                   
                                    
                                    <table id="dataTable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>@</th>
												
                    <th>Full Name</th>
                    <th>Country  Of Residence</th>
                    <th>Pysical Adress</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Category Fall Under</th>
                    
                    <th>Organisation</th>
                    <th>Position Held</th>
                    <th>Nationality</th>
                    <th>Specific Diet</th>
                    <th>Reservetion</th>
                   
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ksgreg as $ksgreg)
                                            <tr>
        
                            <td> @if (strpos($ksgreg->file_name, '.') !== false)
								<!-- If the file has an extension, provide a download link -->
								<div class="card-body">
									<h6 class="card-title">{{ $ksgreg->nameing }}</h6>
									<a href="{{ asset('uploads/proof/' . $ksgreg->file_name) }}" class="btn btn-outline-primary rounded-pill" download>Download file</a>
								</div>
							@else
								<!-- If the file name doesn't contain an extension, still provide a download link (you might want to handle this differently based on your actual needs) -->
								<div class="card-body">
									<h6 class="card-title">{{ $ksgreg->nameing }}</h6>
									<a href="{{ asset('uploads/proof/' . $ksgreg->file_name) }}" class="btn btn-outline-primary rounded-pill" download>Download file</a>
								</div>
							@endif</td>
                            <td>{{ $ksgreg->fname}}</td>                   
                         <td>{{ $ksgreg->country}}</td>
                         <td>{{ $ksgreg->pysicaladress}}</td>
                         <td>{{ $ksgreg->phone}}</td>                       
                        <td>{{ $ksgreg->email}}</td>
                        <td>{{ $ksgreg->category}}</td>
                        <td>{{ $ksgreg->orgarganisation}}</td>
                        
                        <td>{{ $ksgreg->position}}</td>
                        <td>{{ $ksgreg->nationality}}</td>
                        <td>{{ $ksgreg->message}}</td>
                        <td>{{ $ksgreg->reserve}}</td>
                     
                       
                        
                        
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>@</th>
                                                <th>Full Name</th>
                    <th>Country  Of Residence</th>
                    <th>Pysical Adress</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Category Fall Under</th>
                    
                    <th>Organisation</th>
                    <th>Position Held</th>
                    <th>Nationality</th>
                    <th>Specific Diet</th>
                    <th>Reservetion</th>
                   
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>












        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>
        </div>
        <!--end wrapper-->
        <!--start switcher-->
        <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr/>
            <p class="mb-0">Gaussian Texture</p>
              <hr>
              
              <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
              </ul>
               <hr>
              <p class="mb-0">Gradient Background</p>
              <hr>
              
              <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
              </ul>
        </div>
        </div>
        <script>
            function searchTable() {
              // Declare variables
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("searchInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("dataTable");
              tr = table.getElementsByTagName("tr");
            
              // Loop through all table rows, and hide those who don't match the search query
              for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                for (var j = 0; j < td.length; j++) {
                  var cell = td[j];
                  if (cell) {
                    txtValue = cell.textContent || cell.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                      break;
                    } else {
                      tr[i].style.display = "none";
                    }
                  }
                }
              }
            }
            </script>
        <!--end switcher-->
        <!-- Bootstrap JS -->
        <script src="{{asset('') }}assets/js/bootstrap.bundle.min.js"></script>
        <!--plugins-->
        <script src="{{asset('') }}assets/js/jquery.min.js"></script>
        <script src="{{asset('') }}assets/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="{{asset('') }}assets/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="{{asset('') }}assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="{{asset('') }}assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="{{asset('') }}assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="{{asset('') }}assets/plugins/highcharts/js/highcharts.js"></script>
        <script src="{{asset('') }}assets/plugins/highcharts/js/exporting.js"></script>
        <script src="{{asset('') }}assets/plugins/highcharts/js/variable-pie.js"></script>
        <script src="{{asset('') }}assets/plugins/highcharts/js/export-data.js"></script>
        <script src="{{asset('') }}assets/plugins/highcharts/js/accessibility.js"></script>
        <script src="{{asset('') }}assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
        <script>
        new PerfectScrollbar('.dashboard-top-countries');
        </script>
        <script src="{{asset('') }}assets/js/dashboard-alternate.js"></script>
        <!--app JS-->
        <script src="{{asset('') }}assets/js/app.js"></script>
        <script src="{{ asset('assets/js/datatables.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/css/datatables.min.js') }}" defer></script>
        @section('scripts')
        <script>
            $(document).ready(function () {
                $('#myDataTable').DataTable();
            });
        </script>
        @endsection
        </body>
        
        
        <!-- Mirrored from codervent.com/dashtreme/demo/vertical/dashboard-alternate.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 07:17:28 GMT -->
        </html>