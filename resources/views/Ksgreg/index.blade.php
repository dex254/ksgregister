<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/dashboard-alternate.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 07:17:23 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('assets/images/lksg.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('assets/plugins/highcharts/css/highcharts-white.css') }}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{asset('assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{asset('assets/css/icons.css') }}" rel="stylesheet">
	
	<title>KSG->Registration</title>
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
            <style>
                /* Center aligning container */
                .center-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh; /* Full viewport height */
                }
                .images-container {
                text-align: center;
            }
    
            
            </style>
            <!--end breadcrumb-->
            <form action="{{ route('ksgreg.store') }}" method="POST"    enctype="multipart/form-data">     
                @csrf
                
                    <div class="col-xl-6 mx-auto">
                    <div class="card">
                        <div class="card-header px-4 py-3 border-bottom">
                            <h3 class="mb-0">REGISTRATION FORM - REGIONAL CONFERENCE FOR SCHOOLS OF GOVERNMENT IN AFRICA</h3><br>
                            <h6 style="color: gray">CONFERENCE THEME:</h6><br>
                            <h2 class="mb-0"> Advancing Africa’s Public Service Excellence: United in pursuit to realize capable institutions and transformed leadership.</h2>
                            <h5 class="mb-0">The participation/conference inclusive of conference package, certificate, lunch and refreshments; exclusive of travel and accommodation fee will be as follows:</h5>
                            <h5 class="mb-0">1. Kenyan delegates - USD 400</h5>
                            <h5 class="mb-0">2. Other Nationalities - USD 500</h5>
                            <h5 class="mb-0">3. Ph.D. candidates - USD 200</h5>
                        </div>
                        <div class="card-body p-4">
                            <div  class="row g-3 needs-validation"   >
                              
                                <div class="col-md-12">
                                    <label for="bsValidation4" class="form-label">Full Name </label>
                                    <input type="text" class="form-control" id="fname"  name="fname"  placeholder="Your Full Name"   required>
                                    <div class="invalid-feedback">
                                        Please provide a valid full name.
                                      </div>
                                </div><br>
                                <div class="col-md-6">
                                    <label for="bsValidation1" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="phone"   name="phone" placeholder="Your Phone number" value="{{ old('phone') }}"required>
                                    <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                </div><br>
                                <div class="col-md-6">
                                    <label for="bsValidation1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"  name="email" placeholder="You Email" value="{{ old('email') }}" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="bsValidation1" class="form-label">Country of Residence      </label>
                                    <input type="text" class="form-control" id="country"  name="country" placeholder="Country Of Residence"  required>
                                    <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                </div>
                               
                                
                                <div class="col-md-12">
                                    <label for="bsValidation3" class="form-label">Physical Address</label>
                                    <input type="text" class="form-control" id="pysicaladress"  name="pysicaladress" placeholder="Physical  Address"    required>
                                    <div class="invalid-feedback">
                                        Please choose a phone.
                                      </div>
                                </div><br>
                                
                                <div class="col-md-12">
                                    <label for="bsValidation4" class="form-label">Nationality   </label>
                                    <input type="text" class="form-control" id="nationality"  name="nationality"  placeholder="Your Nationality"  required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                      </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="bsValidation4" class="form-label">Organization            </label>
                                    <input type="text" class="form-control" id="organization"  name="orgarganisation"  placeholder="Your Answer"   required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                      </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="bsValidation4" class="form-label">Position/Designation  </label>
                                    <input type="text" class="form-control" id="position"  name="position"  placeholder="Your Answer"   required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                      </div>
                                </div>
                                
                                      
                               
                                <div class="col-md-12">
                                    <label for="bsValidation8" class="form-label">Kindly choose which category you fall under</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" value="Kenyan Delegate" >
                                         <label class="form-check-label" for="flexCheckDefault">Kenyan Delegate</label>
                                         
                                    </div>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Other Nationalities"  name="category">
                                        <label class="form-check-label" for="flexCheckDefault">Other Nationalities</label>
                                    </div> <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Ph.D. Candidates" name="category">
                                        <label class="form-check-label" for="flexCheckDefault">Ph.D. Candidates</label>
                                    </div> <br>
                                  
                                   
                                    </div> 
                                    <div  >
                                        <label for="PhoneNumber" class="form-label">Which room would you like to reserve? </label>
                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="reserve" value="Executive room - $50; Bed and Breakfast"  >
                                            <label class="form-check-label" for="flexCheckChecked">Executive room - $50; Bed and Breakfast</label>
                                        </div> <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Standard room - $40; Bed and Breakfast" name="reserve"  >
                                            <label class="form-check-label" for="flexCheckDefault">Standard room - $40; Bed and Breakfast</label>
                                        </div> <br>
                                       
                                       
                                        </div> <br>
                                    
                                        <div class="col-12">
                                            <label for="inputAddress2" class="form-label">Kindly provide your specific dietary needs</label>
                                            <textarea class="form-control" type="text" name="message"  id="message" placeholder="Dietary Needs.." rows="3"></textarea>
                                        </div>
                                       
                                
                               
                                
                                
                                
                               
                                <div  class="mb-3">
                                    <label for="files" class="form-label">Upload  proof   of payment  :</label>
                                    <input class="form-control" type="file" id="files" name="files" multiple>
                                    <!-- The 'webkitdirectory' and 'directory' attributes allow selecting a folder -->
                                </div>
                                <div class="col-md-12">
                                    
                                   
                                    
                                       
                                    <div class="invalid-feedback">
                                        Please enter sponsering Organisation.
                                    </div>
                                </div>
                               
                               
                               
                               
                                <div class="col-md-12">
                                    <div class="d-md-flex d-grid align-items-center gap-3">
                                        <button type="submit" class="btn btn-primary px-5 radius-30" >Submit</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                
                        
                            
               
          
            <!--end row-->

           </form>
               
      
                
                    </div>
                </div>
            </div>
            
            <!--end row-->


        </div>
    </div>
        <!--end switcher-->
        <!-- Bootstrap JS -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <!--plugins-->
        <script src="{{asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
        <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
        <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/highcharts.js') }}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/exporting.js') }}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/variable-pie.js') }}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/export-data.js') }}"></script>
        <script src="{{asset('assets/plugins/highcharts/js/accessibility.js') }}"></script>
        <script src="{{asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
        <script>
        new PerfectScrollbar('.dashboard-top-countries');
        </script>
        <script src="{{asset('assets/js/dashboard-alternate.js') }}"></script>
        <!--app JS-->
        <script src="{{asset('assets/js/app.js') }}"></script>
       
        </body>
        
        
        <!-- Mirrored from codervent.com/dashtreme/demo/vertical/dashboard-alternate.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 07:17:28 GMT -->
        </html>