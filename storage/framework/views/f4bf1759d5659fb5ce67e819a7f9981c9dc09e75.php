<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Automotive</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="https://kit.fontawesome.com/b8ff1a64eb.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset ('admin/vendors/base/vendor.bundle.base.css')); ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?php echo e(asset ('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->

    <link rel="stylesheet" href="<?php echo e(asset ('admin/css/style.css')); ?>">
    <script src="https://kit.fontawesome.com/b8ff1a64eb.js" crossorigin="anonymous"></script>
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo e(asset ('admin/images/favicon.png')); ?>" />
    <style>
        #myAlert {
            z-index: 1000000;
            position: fixed;
            top: 60px;
            right: 20px;
        }
    </style>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>

    <?php if(session()->has('message')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="myAlert">
        <strong><?php echo e(session('message')); ?></strong>
        <button type="button" class="close bg-transparent" data-dismiss="alert" aria-label="Close" style="border:#ffcccb;">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>
    <?php if(session()->has('message1')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
        <strong><?php echo e(session('message1')); ?></strong>
        <button type="button" class="close bg-transparent" data-dismiss="alert" aria-label="Close" style="border:#90ee90;">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>




    <div class="container-scroller">
        <?php echo $__env->make('frontend.user.Dashboard.inc.usernav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container-fluid page-body-wrapper">
            <?php echo $__env->make('frontend.user.Dashboard.inc.userside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


        <script>
            $('#myAlert').alert(); // Show the alert

            setTimeout(function() {
                $('#myAlert').alert('close'); // Hide the alert
            }, 3000);
        </script>

        <!-- plugins:js -->
        <script src="<?php echo e(asset('admin/vendors/base/vendor.bundle.base.js')); ?>"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="<?php echo e(asset('admin/vendors/datatables.net/jquery.dataTables.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')); ?>"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="<?php echo e(asset('admin/js/off-canvas.js')); ?>"></script>
        <script src="<?php echo e(asset('js/hoverable-collapse.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/template.js')); ?>"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="<?php echo e(asset('admin/js/dashboard.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/data-table.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/jquery.dataTables.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/dataTables.bootstrap4.js')); ?>"></script>
        <!-- End custom js for this page-->

        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#myTable1').DataTable();
            });
        </script>

</body>

</html><?php /**PATH C:\Users\prabe\OneDrive\Desktop\AutoMotive\resources\views/frontend/user/dashboard/layout/user.blade.php ENDPATH**/ ?>