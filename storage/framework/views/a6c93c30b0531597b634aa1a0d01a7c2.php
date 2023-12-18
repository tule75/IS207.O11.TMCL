<div class="bd-content-field">
    <div class="bd-choose">
        <p class="tags">Show orders</p>
        <select class="choose">
            <option value="sixmonth">Last Six Month</option>
            <option value="twelve">Last Twelve Month</option>
        </select>

        <div class="content__form-orders">
            <div class="orders-status__list">
                <button class="orders-status next">ALL</button>
                <button class="orders-status">CONFIRMING</button>
                <button class="orders-status">PACKAGING</button>
                <button class="orders-status">DELIVERING</button>
                <button class="orders-status">DELIVERIED</button>
                <button class="orders-status">CANCEL</button>
                <button class="orders-status">RETURN</button>
            </div>

            <div class="orders__list nextto">
                <?php $__currentLoopData = auth()->user()->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <div class="order__info">
                        <div class="left"> 
                            <p><?php echo e("HĐ" . $order->id); ?></p>
                            
                            <button class="order__info--detail"><i class="fa-solid fa-angle-down"></i></i>Detail</button>
                            <div class='detail' style="display: none;">
                                <?php $__currentLoopData = $order->watches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $watch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img class="order--img" src="<?php echo e($watch->img1); ?>" alt="" style='display: inline;'>
                                <div style="display: inline;">
                                    <p><?php echo e($watch->name); ?></p>
                                    <p><?php echo e($watch->description); ?></p>
                                    <p><?php echo e($watch->pivot->price); ?> x <?php echo e($watch->pivot->quantity); ?></p>
                                </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

                        <div class="right">
                            <li class="order__info--price"><?php echo e($order->total_prices); ?> đ</li>
                            <?php if($order->status == 'Success'): ?>
                            <div class="right-bottom">
                                <button class="order__info--btn">Đánh giá</button>
                                <button class="order__info--btn">Mua lại</button>
                            </div>
                            <?php endif; ?>
                        </div>
                </div>
                        
                   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="orders__list">
                <!-- <div class="order"> -->
                    <div class="order__info">
                        <img class="order--img" src="<?php echo e(asset('/img/h3.webp')); ?>" alt="">

                        <div class="left">
                            <div class="left-top">    
                                <h3 class="order__info--name">BALLON BLEU DE CATIER WATCH</h3>                                
                            </div>
                            <p>33 mm, mechanical movement with automatic winding, steel</p>
                            
                            <button class="order__info--detail"><i class="fa-solid fa-angle-down"></i></i>Detail</button>
                        </div>
                    </div>

                    <div class="right">
                        <li class="order__info--price">$6.200</li>
                        
                    </div>
                <!-- </div> -->
            </div>

            <div class="orders__list">
                <!-- <div class="order"> -->
                    <div class="order__info">
                        <img class="order--img" src="<?php echo e(asset('/img/h3.webp')); ?>" alt="">

                        <div class="left">
                            <div class="left-top">    
                                <h3 class="order__info--name">BALLON BLEU DE CATIER WATCH</h3>                                
                            </div>
                            <p>33 mm, mechanical movement with automatic winding, steel</p>
                            
                            <button class="order__info--detail"><i class="fa-solid fa-angle-down"></i></i>Detail</button>
                        </div>
                    </div>

                    <div class="right">
                        <li class="order__info--price">$6.200</li>
                        
                    </div>
                <!-- </div> -->

            </div>

            <div class="orders__list">
                <!-- <div class="order"> -->
                    <div class="order__info">
                        <img class="order--img" src="<?php echo e(asset('/img/h3.webp')); ?>" alt="">

                        <div class="left">
                            <div class="left-top">    
                                <h3 class="order__info--name">BALLON BLEU DE CATIER WATCH</h3>                                
                            </div>
                            <p>33 mm, mechanical movement with automatic winding, steel</p>
                            
                            <button class="order__info--detail"><i class="fa-solid fa-angle-down"></i></i>Detail</button>
                        </div>
                    </div>

                    <div class="right">
                        <li class="order__info--price">$6.200</li>
                        <div class="right-bottom">
                            <button class="order__info--btn">Receive</button>
                            
                        </div>
                    </div>
                <!-- </div> -->
            </div>

            <div class="orders__list">
                <!-- <div class="order"> -->
                    <div class="order__info">
                        <img class="order--img" src="<?php echo e(asset('/img/h3.webp')); ?>" alt="">

                        <div class="left">
                            <div class="left-top">    
                                <h3 class="order__info--name">BALLON BLEU DE CATIER WATCH</h3>                                
                            </div>
                            <p>33 mm, mechanical movement with automatic winding, steel</p>
                            
                            <button class="order__info--detail"><i class="fa-solid fa-angle-down"></i></i>Detail</button>
                        </div>
                    </div>

                    <div class="right">
                        <li class="order__info--price">$6.200</li>
                        <div class="right-bottom">
                            <button class="order__info--btn evaluate_btn">Evaluate</button>
                            <button class="order__info--btn">Buy Back</button>
                        </div>
                    </div>
                <!-- </div> -->
            </div>

            <div class="orders__list">
                <!-- <div class="order"> -->
                    <div class="order__info">
                        <img class="order--img" src="<?php echo e(asset('/img/h3.webp')); ?>" alt="">

                        <div class="left">
                            <div class="left-top">    
                                <h3 class="order__info--name">BALLON BLEU DE CATIER WATCH</h3>                                
                            </div>
                            <p>33 mm, mechanical movement with automatic winding, steel</p>
                            
                            <button class="order__info--detail"><i class="fa-solid fa-angle-down"></i></i>Detail</button>
                        </div>
                    </div>

                    <div class="right">
                        <li class="order__info--price">$6.200</li>
                        <div class="right-bottom">
                            <button class="order__info--btn evaluate_btn">Evaluate</button>
                            <button class="order__info--btn">Buy Back</button>
                        </div>
                    </div>
                <!-- </div> -->
            </div>

            <div class="orders__list">
                <!-- <div class="order"> -->
                    <div class="order__info">
                        <img class="order--img" src="<?php echo e(asset('/img/h3.webp')); ?>" alt="">

                        <div class="left">
                            <div class="left-top">    
                                <h3 class="order__info--name">BALLON BLEU DE CATIER WATCH</h3>                                
                            </div>
                            <p>33 mm, mechanical movement with automatic winding, steel</p>
                            
                            <button class="order__info--detail"><i class="fa-solid fa-angle-down"></i></i>Detail</button>
                        </div>
                    </div>

                    <div class="right">
                        <li class="order__info--price">$6.200</li>
                        <div class="right-bottom">
                            <button class="order__info--btn evaluate_btn">Evaluate</button>
                            <button class="order__info--btn">Buy Back</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\UIT\WEB\IS207.O11.TMCL\resources\views/profile/partials/orders.blade.php ENDPATH**/ ?>