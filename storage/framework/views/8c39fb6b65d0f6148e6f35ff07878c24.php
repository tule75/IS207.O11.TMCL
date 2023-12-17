<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Cart</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Logo_UIT_updated.svg/1200px-Logo_UIT_updated.svg.png">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/cart.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/cart-responsive.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="cartier">
        <div class="header">
            <div class="header-notice">
                <p>Enjoy wrap-gift standard shipping. <span class=""><a class="has-link return-link">Click here to learn
                            more about returns and exchanges.</a></span></p>
            </div>

            <div class="main-header">
                <ul class="nav-left">
                    <li class="nav-left--item"><a href="/" class="has-link nav-hover">Home</a></li>
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Contact Us</a></li>
                </ul>

                <div class="logo">
                    <img class="logo-img" src="<?php echo e(asset('img/Screenshot_2023-10-16_121457-removebg.png')); ?>" alt="">
                </div>

                <div class="nav-right">
                <div class="nav-right--item"><i class="fa fa-heart"></i></div>
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/profile')); ?>" style="margin: 0"><div class="nav-right--item"><i class="fa fa-user"></i></div></a>
                            <a href="<?php echo e(Route('cart.index')); ?>" style="margin: 0"><div class="nav-right--item"><i class="fa fa-cart-plus"></i></div></a>
                        <?php else: ?>
                            <a href="<?php echo e(url('/login')); ?>" style="margin: 0"><div class="nav-right--item"><i class="fa fa-user"></i></div></a>
                            <a href="<?php echo e(url('/login')); ?>" style="margin: 0"><div class="nav-right--item"><i class="fa fa-cart-plus"></i></div></a>
                        <?php endif; ?>
                    <?php endif; ?>
            </div>
            </div>
        </div>
        <div class="line"></div>
        <!-- header--end -->
        <div class="cart-body">
            <div class="body-left">
                <h3 class="heading-left">
                    SHOPPING BAG
                </h3>
                <div class="count-cart">
                    <p>Cart item : <span><?php echo e(count($carts)); ?></span></p>
                </div>
                <div class="condition-sale">
                    <p>Complimentary exchange or return within 30 days. Read our <a class="has-link span-link"
                            href="">conditions of sales.</a></p>
                </div>
                <!-- product-cart -->
                <div class="cart-container">
                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cart-item">
                        <input type="checkbox" class="choose" name="<?php echo e($cart->id); ?>" id="">
                        <img class="cart-item--img" src="<?php echo e($cart->img1); ?>" alt="">
                        
                        <div class="cart-item--info">
                            
                            <div class="item-heading-price">
                                <h3><?php echo e($cart->name); ?></h3>
                                <h3 class="price-item"><?php echo e(number_format($cart->price * (1 - $cart->discount), 0, ',', '.')); ?></h3> 
                               
                                <p><?php echo e($cart->description); ?></p>
                            </div>
                          
                            <div class="add-list">
                                <button class="" type="button" id="plus" value="<?php echo e($cart->id); ?>">+</button>
                                <p><?php echo e($cart->pivot->quantity); ?></p>
                                <button class="" type="button" id="minus" value="<?php echo e($cart->id); ?>">-</button>
                            </div>
                        </div>
                        <button class="close"><i class="fa fa-close"></i></button>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="body-right">
                <div class="total">
                    <div class="subtotal-wrap">
                        <h3>SUBTOTAL</h3>
                        <h3 class="price-result"></h3>
                    </div>
                    <button class=" has-link btn-proceed-checkout">PROCEED TO CHECKOUT</button>
                </div>
            </div>
        </div>
        <?php echo $__env->make('chatbox.chatbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        <!-- footer start -->
        <div class="footer">
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <div class="footer-list hasnt-flex">
                <h3 class="footer-list--item">FOLLOW US</h3>
                <div class="icon-link">
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-facebook-f"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-youtube-play"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-instagram"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-twitter"></i></a>

                </div>
            </div>
        </div>
        <!-- footer end -->
    </div>
</body>

<script src="<?php echo e(asset('js/cart.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })
        $('#plus').on('click',function (element) {
            let value = $(this).val();
            $.ajax({
                url: '/cart',
                method: 'PUT',
                data: {'status': 'plus', 'watch_id': value},
                // success: function (data) {
                //     $(this).siblings('p').text() = data.quantity;
                // }
            })
        });
        $('#minus').on('click',function (element) {
            let value = $(this).val();
            $.ajax({
                url: '/cart',
                method: 'PUT',
                data: {'status': 'minus', 'watch_id': value},
            })
        });
        $('button.has-link.btn-proceed-checkout').on('click', function () {
            let element = $('.choose:checked');

            let url = '/order/buy?';
            console.log(element);
            element.each(function () {
                url = url + 'watch_id[]=' + $(this).attr('name') + '&';
                url = url + 'quantity[]=' + $(this).siblings('.cart-item--info').first().find('div.add-list').first().find('p').first().text() + '&';
            })
            window.location = url;
        })
    });
</script>


</html><?php /**PATH D:\UIT\WEB\IS207.O11.TMCL\resources\views/carts/index.blade.php ENDPATH**/ ?>