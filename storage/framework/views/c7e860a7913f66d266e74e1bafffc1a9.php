<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">My Orders</h1>
    <style>
        table{
            border-collapse: collapse;
        }
        td,th{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
    <div class="table">
        <table>
            <thead>
                <h3>Engine Service</h3>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Bike No</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $gets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($get->id); ?>

                    </td>
                    <td>
                        <?php echo e($get->name); ?>

                    </td>
                    <td>
                        <?php echo e($get->phone); ?>

                    </td>
                    <td>
                        <?php echo e($get->bno); ?>

                    </td>
                    <td>
                        <?php echo e($get->cin); ?>

                    </td>
                    <td>
                        <?php echo e($get->cout); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
   
    <div class="table">
        <table>
            <thead>
                <h3>Oil Service</h3>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Bike No</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $gets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($get->id); ?>

                    </td>
                    <td>
                        <?php echo e($get->name); ?>

                    </td>
                    <td>
                        <?php echo e($get->phone); ?>

                    </td>
                    <td>
                        <?php echo e($get->bno); ?>

                    </td>
                    <td>
                        <?php echo e($get->cin); ?>

                    </td>
                    <td>
                        <?php echo e($get->cout); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    
    <div class="table">
        <table>
            <thead>
                <h3>General Service</h3>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Bike No</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $gets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($gc->id); ?>

                    </td>
                    <td>
                        <?php echo e($gc->name); ?>

                    </td>
                    <td>
                        <?php echo e($gc->phone); ?>

                    </td>
                    <td>
                        <?php echo e($gc->bno); ?>

                    </td>
                    <td>
                        <?php echo e($gc->cin); ?>

                    </td>
                    <td>
                        <?php echo e($gc->cout); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
   
</body>

</html><?php /**PATH C:\xampp\htdocs\bike\Bike-app\resources\views/order.blade.php ENDPATH**/ ?>