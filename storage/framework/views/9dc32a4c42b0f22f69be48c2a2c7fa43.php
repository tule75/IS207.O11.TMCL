<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/comment.css">
    <script src="https://kit.fontawesome.com/9e1c1de695.js" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>The UITERs - Home </title>
</head>

<body>
    <section id="comment">
        <div class="comment-heading">
            <span>Comment</span>
        </div>
    </section>
    <!------>
    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="comment-box-comment">
        <!------>
        <div class="comment-box">

            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="/public/img/OIP.jpeg">
                    </div>

                    <div class="name-user">
                        <strong><?php echo e($p->user->name); ?></strong>
                        <span><?php echo e("@" . $p->user->id); ?></span>
                    </div>
                </div>
                <div class="review">
                    <?php for($i = 0; $i < $p->star; $i++): ?>
                    <i class="fas fa-star"></i>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="client-comment">
                <p><?php echo e($p->message); ?>

                </p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    
</body>

</html><?php /**PATH D:\UIT\WEB\IS207.O11.TMCL\resources\views/products/comment.blade.php ENDPATH**/ ?>