

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Users KYC</h3>
            </div>

            <!-- unverify modal -->
            <?php $__currentLoopData = $mykyc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="position: fixed; top:10rem;" class="modal" tabindex="-1" id="unverify-<?php echo e($m->user_id); ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="font-size: 1.5rem; display: flex; flex-direction:column; justify-content: center; align-items: center;">
                            <i class="fa-solid fa-ban text-danger" style="font-size: 1.5rem;"></i>
                            <p class="mt-2" style="font-size: 1.1rem;">Do you want to unverify this user?</p>
                        </div>
                        <div class="modal-footer" style=" display: flex; justify-content: center; align-items: center;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="/delete-kyc/<?php echo e($m->id); ?>" type="button" class="btn btn-danger text-white">Unverify</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- verify modal -->

            <?php $__currentLoopData = $mykyc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="position: fixed; top:10rem;" class="modal" tabindex="-1" id="verify-<?php echo e($m->user_id); ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="font-size: 1.5rem; display: flex; flex-direction:column; justify-content: center; align-items: center;">
                            <span class="material-symbols-rounded" style="font-size: 27px; color:#39b779;">
                                verified
                            </span>
                            <!-- <i class="fa-solid fa-check" style="font-size: 1.5rem; color:#39b779;"></i> -->
                            <p class="mt-2" style="font-size: 1.1rem;">Do you want to verify this user?</p>
                        </div>
                        <div class="modal-footer" style=" display: flex; justify-content: center; align-items: center;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="/update-verify/<?php echo e($m->user_id); ?>" type="button" class="btn btn-primary text-white">Verify</a>
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
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Citizenship Image</th>
                            <th scope="col">License Image</th>
                            <th scope="col">License Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $mykyc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($m->fname); ?></td>
                            <td><?php echo e($m->mname); ?></td>
                            <td><?php echo e($m->lname); ?></td>
                            <td><?php echo e($m->address); ?></td>
                            <td><?php echo e($m->phone); ?></td>
                            <td><?php echo e($m->email); ?></td>
                            <td><?php echo e($m->dob); ?></td>
                            <td>
                                <img src="<?php echo e($m->citizenshipimg); ?>" alt="" width="85px">
                            </td>
                            <?php if($m->licenseimg==null): ?>
                            <td>no lisence</td>
                            <?php else: ?>
                            <td>
                                <img src="<?php echo e($m->licenseimg); ?>" alt="" width="85px">
                            </td>
                            <?php endif; ?>
                            <?php if($m->licenseimg==null): ?>
                            <td>no lisence</td>
                            <?php else: ?>
                            <td><?php echo e($m->licensetype); ?></td>
                            <?php endif; ?>
                            <?php if($m->user->status == '1'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#39b779; color: #fff ">verified</span>
                            </td>
                            <?php elseif($m->user->status == '2'): ?>
                            <td>
                                <span style="padding: 3px 8px; border-radius: 10px;background-color:#39b779; color: #fff ">semi-verified</span>
                            </td>
                            <?php else: ?>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#verify-<?php echo e($m->user_id); ?>" class="btn btn-sm btn-primary menu-icon addMore" type="button" title="Verify" href="/update-verify/<?php echo e($m->user_id); ?>" style="color:white;">
                                    <span class="material-symbols-rounded" style="font-size: 27px;">
                                        verified
                                    </span>
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#unverify-<?php echo e($m->user_id); ?>" class="btn btn-sm btn-danger menu-icon addMore" type="button" title="Unverify" style="color:white;">
                                    <i class="fa-solid fa-ban" style="font-size: 27px;"></i>
                                </a>
                            </td>

                            <?php endif; ?>
                            <?php
                            $i++;
                            ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard.layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\prabe\OneDrive\Desktop\AutoMotive\resources\views/admin/user_kyc/index.blade.php ENDPATH**/ ?>