

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Rating
                <a href="/user-rating" class="btn float-end text-white" style="background-color: #39b779;">Back</a>
                </h3>
            </div>


            <div class="container mt-3 mb-3 table-responsive">
                <table class="table table-fluid" id="myTable">
                    <thead style="background-color: #39b779;">
                        <tr class="text-white">
                            <th scope="col">S.N.</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Feedback</th>
                            <th scope="col">Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $rating; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <?php if($r->rating==null): ?>
                            <td class="text-danger">no rating</td>
                            <?php else: ?>
                            <td><?php echo e($r->rating); ?></td>
                            <?php endif; ?>
                            <?php if($r->feedback==null): ?>
                            <td class="text-danger">no feedback</td>
                            <?php else: ?>
                            <td><?php echo e($r->feedback); ?></td>
                            <?php endif; ?>
                            <td><?php echo e($r->user['name']); ?></td>
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
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.dashboard.layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nishan\Desktop\Automotive\AutoMotive\resources\views/frontend/user/rating/ratingdetails.blade.php ENDPATH**/ ?>