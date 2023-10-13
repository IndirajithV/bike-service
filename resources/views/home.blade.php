<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>bike Services</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid col-10 responsive">
        <nav class="navbar navbar-expand-sm sticky-top " >
            <b class="bold">Bike Services</b>
            <button class="navbar-toggler"type="button" data-bs-toggle="collapse" data-bs-toggle="#menu">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg> -->
            </button>
            <div class="collapse navbar-collapse"id="menu">
                <ul class="navbar-nav ms-auto mb-lg-0 ">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About-us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="order">My order</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    
                    <!-- <div class="btn btn-bg-danger ms-auto pd-left"type="button">login</div> -->
                </ul>
            </div>
             
        </nav>
        <section id="home">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12  pt-5 ">
                    <h1 class="display-4"style="font-weight: bold;">Welocome to <span>Bike Services</span> </h1>
                    <p class="my-lg-2 my-3">we are ready to work with your bike.we make sure to the very modern bike </p>
                    <buttton class="btn btn-primary my-lg-3 my-3"><a href="{{route('login')}}" class="nav-link">Get started</a></buttton>
                </div>  
                <div class="col-lg-6">
                    <img class="img-fluid"src="https://media.istockphoto.com/id/1036010442/photo/cropped-view-of-mechanic-using-a-wrench-on-a-motorcycle.jpg?s=612x612&w=0&k=20&c=3aafu0LwXxQRayETKIs1iSNkjKA1Erser8Ic-LHvq1k=">
                </div>
            </div>
        </section>
        <section id="about">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 order-1 pt-5 ">
                    <img class="img-fluid"src="https://plus.unsplash.com/premium_photo-1664299568114-70d0d5834d78?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fG1vdG9yJTIwYmlrZSUyMHNlcnZpY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60">
                </div>
                <div class="col-lg-6 col-md-6 col-12 order-1 pt-5">
                    <h1 class="display-8">About-Us</h1>
                    <p>In this company will started in since 2019.Our team is well equipped with the latest technologies and diagnostic equipment to diagnose two wheeler problems in a quick and accurate manner. Our experts understand how important it is to have a reliable and efficient system when it comes to bike service and maintenance.Our experts will mainly worh with engine service,oil service and the general check-up</p>
                </div>
            </div>
        </section>
        <section id="service">
            <div class="row">
                <h1 class="text-center">Our Services</h1>
                <div class="col-md-4 my-3">
                    <div class="card shadow">
                        <div class="inner">
                        <img src="https://images.unsplash.com/photo-1544614470-f8e941d2abeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGJpa2UlMjBlbmdpbmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top rounded">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Engine service</h5>
                            <div class="card-text">dummy content</div>
                            <a href="book" class="btn btn-success">Book</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card shadow">
                        <div class="inner">
                       <img src="https://media.istockphoto.com/id/1474971681/photo/mechanic-is-replacing-a-new-bottle-of-lubricant-for-a-motorcycle.webp?b=1&s=170667a&w=0&k=20&c=nltdWwIFBzYWB8SvjaON_MOzCF-cBIzFcIRZaAE_n5Q=" class="card-img-top rounded">
                    </div>
                       <div class="card-body">
                            <h5 class="card-title">Oil Service</h5>
                            <div class="card-text">dummy content</div>
                            <a href="book2" type="button" class="btn btn-success">Book</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card shadow">
                        <div class="inner">
                            <img src="https://plus.unsplash.com/premium_photo-1661299263057-fb0b4ba31f91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGJpa2UlMjBvaWwlMjBzZXJ2aWNlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" class="card-img-top rounded">
                        </div>
                            <div class="card-body">
                            <h5 class="card-title">General check up</h5>
                            <div class="card-text">dummy content</div>
                            <a href="book3" type="button" class="btn btn-success">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <h1 >contact</h1>
            <h4>contact no:6379476355<br>
            Email id:indirajithik@gmail.com<br>
            Address:Erode Sengunthar Engineering College<br>

            </h4>
            
        </section>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>