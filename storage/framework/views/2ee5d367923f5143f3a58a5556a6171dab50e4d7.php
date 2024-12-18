

<?php $__env->startSection('content'); ?>



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Booking Request</h3>
            </div>

            <!-- Modal -->
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

            <!-- unverify modal -->
            <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="position: fixed; top:10rem;" class="modal" tabindex="-1" id="decline-<?php echo e($b->id); ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="font-size: 1.5rem; display: flex; flex-direction:column; justify-content: center; align-items: center;">
                            <i class="fa-solid fa-circle-xmark text-danger" style="font-size: 1.5rem;"></i>
                            <p class="mt-2" style="font-size: 1.1rem;">Do you want to decline this booking?</p>
                        </div>
                        <div class="modal-footer" style=" display: flex; justify-content: center; align-items: center;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="/delete-booking/<?php echo e($b->id); ?>" type="button" class="btn btn-danger text-white">Decline</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- verify modal -->

            <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="position: fixed; top:10rem;" class="modal" tabindex="-1" id="accept-<?php echo e($b->id); ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="font-size: 1.5rem; display: flex; flex-direction:column; justify-content: center; align-items: center;">
                            <i class="fa-solid fa-circle-check" style="font-size: 1.5rem; color:#39b779;"></i>
                            <!-- <i class="fa-solid fa-check" style="font-size: 1.5rem; color:#39b779;"></i> -->
                            <p class="mt-2" style="font-size: 1.1rem;">Do you want to accept this booking?</p>
                        </div>
                        <div class="modal-footer" style=" display: flex; justify-content: center; align-items: center;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="/update-booking-status/<?php echo e($b->id); ?>" type="button" class="btn btn-primary text-white">Accept</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="position: fixed; top:10rem;" class="modal" tabindex="-1" id="completed-<?php echo e($b->id); ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="font-size: 1.5rem; display: flex; flex-direction:column; justify-content: center; align-items: center;">
                            <i class="fa-solid fa-circle-check" style="font-size: 1.5rem; color:#39b779;"></i>
                            <!-- <i class="fa-solid fa-check" style="font-size: 1.5rem; color:#39b779;"></i> -->
                            <p class="mt-2" style="font-size: 1.1rem; justify-content:center;">Are you sure your rent is completed and you have received vehicle?</p>
                        </div>
                        <div class="modal-footer" style=" display: flex; justify-content: center; align-items: center;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="/complete-booking/<?php echo e($b->id); ?>" type="button" class="btn btn-primary text-white">Yes</a>
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
                            <th scope="col">Owner Name</th>
                            <th scope="col">Pickup and Dropoff</th>
                            <th scope="col">From</th>
                            <th scope="col">Until</th>
                            <th scope="col">No. of day</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($b->status=='pending' || $b->status=='active'): ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($b->user['name']); ?></td>
                            <td><?php echo e($b->vehicle['name']); ?></td>
                            <td><?php echo e($b->vehicle->user['name']); ?></td>
                            <td>
                                <button onclick="initMap(<?php echo e($b->pick_drop); ?>)" data-bs-toggle="modal" data-bs-target="#mapopen" class="btn btn-primary menu-icon addMore" title="show in map" style="color:white;">
                                    <i class="fa-solid fa-location-dot"></i>
                                </button>

                            </td>
                            <td><?php echo e($b->from_date); ?></td>
                            <td><?php echo e($b->to_date); ?></td>
                            <td><?php echo e($b->booking_day); ?></td>
                            <?php if($b->status=='pending'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#e6cc00; color: #fff "><?php echo e($b->status); ?></span>
                            </td>
                            <?php elseif($b->status=='active'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#39b779; color: #fff "><?php echo e($b->status); ?></span>
                            </td>

                            <?php else: ?>

                            <?php endif; ?>
                            <?php if($b->status=='pending'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#e6cc00; color: #fff ">unaccepted</span>
                            </td>
                            <?php else: ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#f94449; color: #fff "><?php echo e($b->payment); ?></span>
                            </td>
                            <?php endif; ?>


                            <td>Rs. <?php echo e($b->price); ?></td>
                            <td>Rs. <?php echo e($b->total_price); ?></td>
                            <?php if($b->status=='pending'): ?>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#accept-<?php echo e($b->id); ?>" class="btn btn-sm btn-primary menu-icon addMore" type="button" title="Accept" style="color:white;">
                                    <i class="fa-solid fa-circle-check"></i>
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#decline-<?php echo e($b->id); ?>" class="btn btn-sm btn-danger menu-icon addMore" type="button" title="Decline" style="color:white;">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </a>
                            </td>

                            <?php elseif($b->status=='active'): ?>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#completed-<?php echo e($b->id); ?>" class="btn btn-sm btn-primary menu-icon addMore" type="button" title="Completed" style="color:white;">
                                    <i class="fa-solid fa-circle-check"></i>
                                </a>
                                <!-- <a href="/chatify/<?php echo e($b->user_id); ?>" class="btn btn-sm btn-primary menu-icon addMore" type="button" title="chat" style="color:white;">
                                    <i class="fa-solid fa-message"></i>
                                </a> -->
                            </td>

                            <?php else: ?>

                            <?php endif; ?>

                            <?php
                            $i++;
                            ?>
                        </tr>
                        <?php else: ?>
                        <?php endif; ?>

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
                            }

                            const pickDrop = "<?php echo e($b->pick_drop); ?>".replace('[', '').replace(']', '').split(',');
                            const picklat = parseFloat(pickDrop[0].trim());
                            const picklng = parseFloat(pickDrop[1].trim());
                        </script>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
            <!-- <div class="container">
            <div id="map" style="height:400px; width: 600px;"></div>
            </div> -->

        </div>
    </div>
</div>


<!-- <script>
    function initMap() {
        let map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 0,
                lng: 0
            },
            zoom: 15,
            scrollwheel: true,
        });

        const pickDrop = JSON.parse(document.getElementById("map").getAttribute("data-pick-drop"));
        const lat = parseFloat(pickDrop[0].trim());
        const lng = parseFloat(pickDrop[1].trim());

        const center = {
            lat: lat,
            lng: lng
        };

        const uluru = {
            lat: lat,
            lng: lng
        };

        let marker = new google.maps.Marker({
            position: uluru,
            map: map,
            draggable: false
        });

        map.setCenter(center);
    }
</script> -->






<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAi8hZEBidJfVDVAq__019GWzVjNH2hyHY&callback=initMap" type="text/javascript"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard.layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\prabe\OneDrive\Desktop\AutoMotive\resources\views/admin/booking/index.blade.php ENDPATH**/ ?>