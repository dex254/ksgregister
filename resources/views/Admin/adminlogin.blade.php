<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/auth-cover-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 07:19:52 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('assets/images/lksg.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{asset('assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{asset('assets/css/icons.css') }}" rel="stylesheet">
	<title>KSG - Admin login</title>
</head>

<body class="wrapper"  >
	<style>
        body {
            background-color:#042a12; /* Neon yellow background color */
           
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
	<!--wrapper-->
	<div  class="bg-theme bg-theme8">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">
					@if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
          @error('current_password')
          <div class="text-danger">{{ $message }}</div>
        @enderror

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="{{asset('assets/images/lksg.png') }}" class="img-fluid auth-img-cover-login" width="650" alt=""/>
							</div>
						</div>
						
					</div>

					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right bg-light align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="{{asset('assets/images/lksg.png') }}" width="60" alt="">
									</div>
									<div class="text-center mb-4">
										<h5 class=""> Admin</h5>
										<p class="mb-0">Restructed  account</p>
									</div>
									<div class="form-body">
										<form class="row g-3"  action="{{ route('admin') }}" method="POST">
                                            @csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Enter The ksg Email</label>
												<input type="email" class="form-control"name="email"  id="email"  placeholder="name@ksg.ac.ke">
											
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword"   name="password"   placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"  class="block mt-1 w-full"
                                                            required autocomplete="current-password" ><i class="bx bx-hide"></i></a>
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
														<script>
															$(document).ready(function () {
																$("#show_hide_password a").on('click', function (event) {
																	event.preventDefault();
																	if ($('#show_hide_password input').attr("type") == "text") {
																		$('#show_hide_password input').attr('type', 'password');
																		$('#show_hide_password i').addClass("bx-hide");
																		$('#show_hide_password i').removeClass("bx-show");
																	} else if ($('#show_hide_password input').attr("type") == "password") {
																		$('#show_hide_password input').attr('type', 'text');
																		$('#show_hide_password i').removeClass("bx-hide");
																		$('#show_hide_password i').addClass("bx-show");
																	}
																});
															});
														</script>
												</div>
												
											</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light">Sign in</button>
												</div>
											</div>
											<div class="col-12">
												
											</div>
										</form>
									</div>
									
									<div class="list-inline contacts-social text-center">
										<h3>Admin</h3>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">KSG Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">KSG Texture</p>
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
			  <p class="mb-0">Participant Background</p>
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
	<!--end switcher-->
	
	<!--plugins-->
	<script src="{{asset('assets/js/jquery.min.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	
	<script>
	$(".switcher-btn").on("click", function() {
		$(".switcher-wrapper").toggleClass("switcher-toggled")
	}), $(".close-switcher").on("click", function() {
		$(".switcher-wrapper").removeClass("switcher-toggled")
	}),


	$('#theme1').click(theme1);
    $('#theme2').click(theme2);
    $('#theme3').click(theme3);
    $('#theme4').click(theme4);
    $('#theme5').click(theme5);
    $('#theme6').click(theme6);
    $('#theme7').click(theme7);
    $('#theme8').click(theme8);
    $('#theme9').click(theme9);
    $('#theme10').click(theme10);
    $('#theme11').click(theme11);
    $('#theme12').click(theme12);
    $('#theme13').click(theme13);
    $('#theme14').click(theme14);
    $('#theme15').click(theme15);

    function theme1() {
      $('body').attr('class', 'bg-theme bg-theme1');
    }

    function theme2() {
      $('body').attr('class', 'bg-theme bg-theme2');
    }

    function theme3() {
      $('body').attr('class', 'bg-theme bg-theme3');
    }

    function theme4() {
      $('body').attr('class', 'bg-theme bg-theme4');
    }
	
	function theme5() {
      $('body').attr('class', 'bg-theme bg-theme5');
    }
	
	function theme6() {
      $('body').attr('class', 'bg-theme bg-theme6');
    }

    function theme7() {
      $('body').attr('class', 'bg-theme bg-theme7');
    }

    function theme8() {
      $('body').attr('class', 'bg-theme bg-theme8');
    }

    function theme9() {
      $('body').attr('class', 'bg-theme bg-theme9');
    }

    function theme10() {
      $('body').attr('class', 'bg-theme bg-theme10');
    }

    function theme11() {
      $('body').attr('class', 'bg-theme bg-theme11');
    }

    function theme12() {
      $('body').attr('class', 'bg-theme bg-theme12');
    }

	function theme13() {
		$('body').attr('class', 'bg-theme bg-theme13');
	  }
	  
	  function theme14() {
		$('body').attr('class', 'bg-theme bg-theme14');
	  }
	  
	  function theme15() {
		$('body').attr('class', 'bg-theme bg-theme15');
	  }

	</script>
</body>


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/auth-cover-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 07:19:54 GMT -->
</html>












































