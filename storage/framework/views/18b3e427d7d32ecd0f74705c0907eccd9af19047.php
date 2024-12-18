

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12 grid-margin" style="display:flex; justify-content:center; align-items:center;">

        <?php if($user->status == '0'): ?>
        <div class="col-md-8 order-md-1" style="box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2); border-radius:15px; width:95%; height:78vh;  padding:30px; background-color:#f8f9fa; display:flex; justify-content:center; align-items:center;">
            <div class="container" style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
                <span class="material-symbols-rounded addMore" title="verified user" style="font-size: 60px; color:#39b779">verified</span>
                <h3 class="mt-3">Please Verify KYC to become a Host</h3>
                <a href="/user-kyc" type="button" class="btn btn-primary mt-2" style="color:white;">Verify KYC</a>
            </div>
        </div>
        <?php else: ?>


        <div class="card">
            <div class="card-header">
                <h3 class="text-center">My Vehicles
                    <a class="btn float-end" style="background-color: #39b779;" href="/host-add-vehicle">Add Vehicle</a>
                </h3>
            </div>


            <!-- delete vehicle modal -->
            <?php $__currentLoopData = $vehicle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="position: fixed; top:10rem;" class="modal" tabindex="-1" id="deleteModal-<?php echo e($v->id); ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="font-size: 1.5rem; display: flex; flex-direction:column; justify-content: center; align-items: center;">
                            <i class="fa-solid fa-trash text-danger" style="font-size: 1.5rem;"></i>
                            <p class="mt-2" style="font-size: 1.1rem;">Do you want to delete this vehicle?</p>
                        </div>
                        <div class="modal-footer" style=" display: flex; justify-content: center; align-items: center;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="/delete-vehicle/<?php echo e($v->id); ?>" type="button" class="btn btn-danger text-white">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <div class="container mt-3 mb-3 table-responsive">
                <table class="table" id="myTable">
                    <thead style="background-color: #39b779;">
                        <tr class="text-white">
                            <th scope="col">S.N.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Type</th>
                            <th scope="col">Fuel</th>
                            <th scope="col">Engine</th>
                            <th scope="col">Description</th>
                            <th scope="col">Vehicle no.</th>
                            <th scope="col">Location</th>
                            <th scope="col">Driver Status</th>
                            <th scope="col">Status</th>
                            <th scope="col">Trending</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $vehicle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($v->name); ?></td>
                            <td><?php echo e($v->category['name']); ?></td>
                            <td>
                                <img src="<?php echo e($v->image); ?>" alt="" width="85px">
                            </td>
                            <td><?php echo e($v->price); ?></td>
                            <td><?php echo e($v->wheels); ?></td>
                            <td><?php echo e($v->fuel); ?></td>
                            <td><?php echo e($v->engine); ?></td>
                            <td><?php echo e($v->description); ?></td>
                            <td><?php echo e($v->vehicle_no); ?></td>
                            <td><?php echo e($v->location); ?></td>
                            <td><?php echo e($v->driver_stat); ?></td>
                            <td><?php echo e($v->status== '0' ? 'Visible':'Invisible'); ?></td>
                            <td><?php echo e($v->trending== '0' ? 'Not Trending':'Trending'); ?></td>
                            <td><?php echo e($v->brand); ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary menu-icon" href="host-edit-vehicle/<?php echo e($v->id); ?>" style="color:white;">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#deleteModal-<?php echo e($v->id); ?>" class="btn btn-sm btn-danger menu-icon" style="color: white;">
                                    <i class="fa-sharp fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                        ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.dashboard.layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\prabe\OneDrive\Desktop\AutoMotive\resources\views/frontend/user/myvehicle/index.blade.php ENDPATH**/ ?>