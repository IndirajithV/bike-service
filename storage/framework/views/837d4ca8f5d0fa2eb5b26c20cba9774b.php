<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <h4 class="card tiltle text-center">BOOKING FOR OIL SERVICES</h4>
                    <div class="card border-0 shadow">
                        <!-- <h4 class="card tiltle text-center">BOOKING FOR ENGINE SERVICES</h4> -->
                        <!-- <svg class="m-auto mt-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg> -->
                        <div class="card-body">
                            <form action="<?php echo e(route('veram')); ?>" method="get">
                                <!-- <?php echo csrf_field(); ?> -->
                                <input type="text" name="name" id="" class="form-control my-3 py-2" placeholder="Name" required>
                                <input type="text" name="phone" id="" class="form-control my-3 py-2" placeholder="phone number" required>
                                <input type="text" name="bno" id="" class="form-control my-3 py-2" placeholder="bike number" required>
                                <input type="date" name="cin" id="" class="form-control my-3 py-2" placeholder="check in" required>
                                <input type="date" name="cout" id="" class="form-control my-3 py-2" placeholder="check out " required>
                                <div class="text-center mt-5">
                                    <!-- <input type="submit" value="Book"> -->
                                <button class="btn btn-primary" type="submit">Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\bike\Bike-app\resources\views/book2.blade.php ENDPATH**/ ?>