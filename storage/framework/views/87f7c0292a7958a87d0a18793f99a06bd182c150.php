

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">My Earnings</h3>
            </div>



            <div class="container mt-3 mb-3 table-responsive">
                <table class="table table-fluid" id="myTable">
                    <thead style="background-color: #39b779;">
                        <tr class="text-white">
                            <th scope="col">S.N.</th>
                            <th scope="col">Booker Name</th>
                            <th scope="col">Vehicle Name</th>
                            <th scope="col">Payer Name</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Comission Amount</th>
                            <th scope="col">Release Amount</th>
                            <th scope="col">Paid At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($p->booking->user['name']); ?></td>
                            <td><?php echo e($p->booking->vehicle['name']); ?></td>
                            <td><?php echo e($p->payer_name); ?></td>
                            <td>Rs. <?php echo e($p->amount); ?></td>
                            <td>Rs. <?php echo e($p->comission_amount); ?></td>
                            <td>Rs. <?php echo e($p->release_amount); ?></td>
                            <td><?php echo e($p->paid_at); ?></td>
                            

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



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">My Payment</h3>
            </div>



            <div class="container mt-3 mb-3 table-responsive">
                <table class="table table-fluid" id="myTable1">
                    <thead style="background-color: #39b779;">
                        <tr class="text-white">
                            <th scope="col">S.N.</th>
                            <th scope="col">Owner Name</th>
                            <th scope="col">Vehicle Name</th>
                            <th scope="col">Owner Phone</th>
                            <th scope="col">Payer Name</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Comission Amount</th>
                            <th scope="col">Release Amount</th>
                            <th scope="col">Paid At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $payment1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c); ?></td>
                            <td><?php echo e($a->booking->vehicle->user['name']); ?></td>
                            <td><?php echo e($a->booking->vehicle['name']); ?></td>
                            <?php if($a->phone==null): ?>
                            <td>admin</td>
                            <?php else: ?>
                            <td><?php echo e($a->phone); ?></td>
                            <?php endif; ?>
                            <td><?php echo e($a->payer_name); ?></td>
                            <td>Rs. <?php echo e($a->amount); ?></td>
                            <td>Rs. <?php echo e($a->comission_amount); ?></td>
                            <td>Rs. <?php echo e($a->release_amount); ?></td>
                            <td><?php echo e($a->paid_at); ?></td>
                            

                            <?php
                            $c++;
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
<?php echo $__env->make('frontend.user.dashboard.layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nishan\Desktop\Automotive\AutoMotive\resources\views/frontend/user/payment/index.blade.php ENDPATH**/ ?>