

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">My Vehicle</h3>
            </div>

            <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal" tabindex="-1" id="mapopen" style="margin-top:50px;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pickup and Dropoff Location</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="map-container">
                                <div id="map" style="height:400px; width: auto;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            <div class="container mt-3 mb-3 table-responsive">
                <table class="table table-fluid" id="myTable">
                    <thead style="background-color: #39b779;">
                        <tr class="text-white">
                            <th scope="col">S.N.</th>
                            <th scope="col">Booker Name</th>
                            <th scope="col">Vehicle Name</th>
                            <th scope="col">Pickup and Dropoff</th>
                            <th scope="col">From</th>
                            <th scope="col">Until</th>
                            <th scope="col">No. of day</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($b->status=='completed' || $b->status=='rejected' || $b->status=='canceled'): ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($b->user['name']); ?></td>
                            <td><?php echo e($b->vehicle['name']); ?></td>
                            <td>
                                <button onclick="initMap(<?php echo e($b->pick_drop); ?>)" data-bs-toggle="modal" data-bs-target="#mapopen" class="btn btn-primary menu-icon addMore" title="show in map" style="color:white;">
                                    <i class="fa-solid fa-location-dot"></i>
                                </button>

                            </td>
                            <td><?php echo e($b->from_date); ?></td>
                            <td><?php echo e($b->to_date); ?></td>
                            <td><?php echo e($b->booking_day); ?></td>
                            <?php if($b->status =='completed'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#39b779; color: #fff "><?php echo e($b->status); ?></span>
                            </td>
                            <?php elseif($b->status =='rejected'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#f94449; color: #fff "><?php echo e($b->status); ?></span>
                            </td>
                            <?php else: ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#e6cc00; color: #fff "><?php echo e($b->status); ?></span>
                            </td>
                            <?php endif; ?>

                            <?php if($b->status=='rejected'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#f94449; color: #fff ">rejected</span>
                            </td>
                            <?php elseif($b->status=='canceled'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#e6cc00; color: #fff "><?php echo e($b->status); ?></span>
                            </td>
                            <?php elseif($b->payment=='paid'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#39b779; color: #fff "><?php echo e($b->payment); ?></span>
                            </td>
                            <?php else: ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#f94449; color: #fff "><?php echo e($b->payment); ?></span>
                            </td>
                            <?php endif; ?>


                            <td>Rs. <?php echo e($b->price); ?></td>
                            <td>Rs. <?php echo e($b->total_price); ?></td>

                            <?php
                            $i++;
                            ?>
                        </tr>
                        <?php else: ?>
                        <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Other's Vehicle</h3>
            </div>

            <?php $__currentLoopData = $booking1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal" tabindex="-1" id="mapopen1" style="margin-top:50px;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pickup and Dropoff Location</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="map-container">
                                <div id="map1" style="height:400px; width: auto;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="container mt-3 mb-3 table-responsive">
                <table class="table table-fluid" id="myTable1">
                    <thead style="background-color: #39b779;">
                        <tr class="text-white">
                            <th scope="col">S.N.</th>
                            <th scope="col">Owner Name</th>
                            <th scope="col">Vehicle Name</th>
                            <th scope="col">Pickup and Dropoff</th>
                            <th scope="col">From</th>
                            <th scope="col">Until</th>
                            <th scope="col">No. of day</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $booking1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($a->status=='completed' || $a->status=='rejected' || $a->status=='canceled'): ?>
                        <tr>
                            <td><?php echo e($c); ?></td>
                            <td><?php echo e($a->vehicle->user['name']); ?></td>
                            <td><?php echo e($a->vehicle['name']); ?></td>
                            <td>
                                <button onclick="initMap(<?php echo e($a->pick_drop); ?>)" data-bs-toggle="modal" data-bs-target="#mapopen1" class="btn btn-primary menu-icon addMore" title="show in map" style="color:white;">
                                    <i class="fa-solid fa-location-dot"></i>
                                </button>

                            </td>
                            <td><?php echo e($a->from_date); ?></td>
                            <td><?php echo e($a->to_date); ?></td>
                            <td><?php echo e($a->booking_day); ?></td>
                            <?php if($a->status =='completed'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#39b779; color: #fff "><?php echo e($a->status); ?></span>
                            </td>
                            <?php elseif($a->status =='rejected'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#f94449; color: #fff "><?php echo e($a->status); ?></span>
                            </td>
                            <?php else: ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#e6cc00; color: #fff "><?php echo e($a->status); ?></span>
                            </td>
                            <?php endif; ?>

                            <?php if($a->status=='rejected'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#f94449; color: #fff ">rejected</span>
                            </td>
                            <?php elseif($a->status=='canceled'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#e6cc00; color: #fff "><?php echo e($a->status); ?></span>
                            </td>
                            <?php elseif($a->payment=='paid'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#39b779; color: #fff "><?php echo e($a->payment); ?></span>
                            </td>
                            <?php else: ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#f94449; color: #fff "><?php echo e($a->payment); ?></span>
                            </td>
                            <?php endif; ?>


                            <td>Rs. <?php echo e($a->price); ?></td>
                            <td>Rs. <?php echo e($a->total_price); ?></td>

                            <?php
                            $c++;
                            ?>
                        </tr>
                        <?php else: ?>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function initMap(picklat, picklng) {
        var coord = {
            lat: picklat,
            lng: picklng
        };

        var map = new google.maps.Map(
            document.getElementById("map"), {
                zoom: 15,
                center: coord,
                scrollwheel: true,
            }
        );

        new google.maps.Marker({
            position: coord,
            map: map
        })

        var map1 = new google.maps.Map(
            document.getElementById("map1"), {
                zoom: 15,
                center: coord,
                scrollwheel: true,
            }
        );

        new google.maps.Marker({
            position: coord,
            map: map1
        })
    }

    <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    const pickDrop = "<?php echo e($b->pick_drop); ?>".replace('[', '').replace(']', '').split(',');
    const picklat = parseFloat(pickDrop[0].trim());
    const picklng = parseFloat(pickDrop[1].trim());
    initMap(picklat, picklng);
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $booking1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    const pickDrop1 = "<?php echo e($a->pick_drop); ?>".replace('[', '').replace(']', '').split(',');
    const picklat1= parseFloat(pickDrop1[0].trim());
    const picklng1 = parseFloat(pickDrop1[1].trim());
    initMap(picklat1, picklng1);
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAi8hZEBidJfVDVAq__019GWzVjNH2hyHY&callback=initMap" type="text/javascript"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.dashboard.layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\prabe\OneDrive\Desktop\AutoMotive\resources\views/frontend/user/rent history/index.blade.php ENDPATH**/ ?>