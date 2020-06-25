<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Jana Laporan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/">Sistem Jana Laporan</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/view">View</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/update">Update</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-section">
          <div class="container">
            <h2>Edit Patient : {{ $data[0]->patient_code}}</h2>
          </div>
        </div>
        <div class="page-section">
        <div class="container">
          <div class="col-md-12">
            <form role="form" method="POST" action="/update/{{ $data[0]->patient_code }}">
                {{ csrf_field() }}
				{{ method_field("PATCH") }}
                <div class="form-group">       
                    <label for="title">Patient Code</label>
                    <input type="text" class="form-control" name="patientcode" value="{{ $data[0]->patient_code }}" required/>
                </div>
                <div class="form-group">
                    <label for="body">Patient Name</label>
                    <input type="text" class="form-control" name="patientname" value="{{ $data[0]->patient_name }}" required></input>
                </div>
                <div class="form-group">
                    <label for="body">Drug Name</label>
                    <input type="text" class="form-control" name="drugname" value="{{ $data[0]->drug_name }}" required></input>
                </div>
                <div class="form-group">
                    <label for="body">Ward Name</label>
                    <input type="text" class="form-control" name="wardname" value="{{ $data[0]->ward_name }}" required></input>
                </div>
                <div class="form-group">
                    <label for="body">Time</label>
                    <input type="datetime-local" class="form-control" name="time" value="{{ Carbon\Carbon::parse($data[0]->time)->format('Y-m-d\Th:i:s') }}" required/>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_method" value="PUT">
            </form>


          </div>
        </div>
        </div>
    
       
        
       
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="/assets/mail/jqBootstrapValidation.js"></script>
        <script src="/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
    </body>
</html>
