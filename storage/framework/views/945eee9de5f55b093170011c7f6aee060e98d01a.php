

<?php $__env->startSection('content'); ?>

<section class="vh-90">
    <div class="container h-90">
        <div class="row d-flex justify-content-center align-items-center h-90">
            <div class="col-md-12 col-xl-4">

                <div class="card" style="box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2); border-radius: 15px;">
                    <div class="card-body text-center">
                        <?php if($user->profile==null): ?>
                        <div class="mt-3 mb-4">
                            <img src="/user_image/user.jpg" class="rounded-circle img-fluid" style="width: 90px; height: 90px;" />
                        </div>
                        <?php else: ?>
                        <div class="mt-3 mb-4">
                            <img src="<?php echo e($user->profile); ?>" class="rounded-circle img-fluid" style="width: 90px; height: 90px;" />
                        </div>
                        <?php endif; ?>

                        <?php if($user->status==1): ?>
                        <h4 class="mb-2" style="display: flex; align-items:center; justify-content:center;">
                            <span><?php echo e($user->name); ?></span>
                            <span class="material-symbols-rounded addMore" title="verified user" style="font-size: 25px; color:#39b779">verified</span>
                        </h4>
                        <?php elseif($user->status==2): ?>
                        <h4 class="mb-2" style="display: flex; align-items:center; justify-content:center;">
                            <span><?php echo e($user->name); ?></span>
                            <span class="material-symbols-rounded addMore" title="semi-verified user" style="font-size: 25px; color:gray">verified</span>
                        </h4>
                        <?php else: ?>
                        <h4 class="mb-2"><?php echo e($user->name); ?></h4>
                        <?php endif; ?>

                        <?php if($user->role==1): ?>
                        <div style="display:flex; justify-content:center;">
                            <p class="mb-4 text-white" style="padding: 3px 8px; border-radius: 10px;background-color:#39b779;">Admin</p>
                            <span class="mx-2">|</span>
                            <span> <?php echo e($user->email); ?></span>
                            </div>
                            <div class="mb-4 pb-2">
                            <?php else: ?>
                            <div style="display:flex; justify-content:center;">
                                <p class=" mb-4 text-white" style="padding: 3px 8px; border-radius: 10px;background-color:#39b779; ">User</p>
                                <span class="mx-2">|</span>
                                <p><?php echo e($user->email); ?></p>
                            </div>
                            <div class="mb-4 pb-2">
                                <?php endif; ?>

                                <?php if($user->bio==null): ?>
                                <p class="text-muted mb-4">Bio hasnot been set</p>
                                <div class="mb-4 pb-2">
                                    <?php else: ?>
                                    <p class="text-muted mb-4"><?php echo e($user->bio); ?></p>
                                    <div class="mb-4 pb-2">
                                        <?php endif; ?>

                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fab fa-facebook-f fa-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fab fa-twitter fa-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fab fa-instagram fa-lg"></i>
                                        </button>
                                    </div>
                                    <a href="/edit-user-profile/<?php echo e($user->id); ?>" type="button" class="btn btn-primary btn-rounded btn-lg text-white">
                                        Update Profile
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.dashboard.layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\prabe\OneDrive\Desktop\AutoMotive\resources\views/frontend/user/profile/index.blade.php ENDPATH**/ ?>