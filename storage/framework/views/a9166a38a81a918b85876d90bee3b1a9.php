<div class="geex-content__header__action">
    <div class="geex-content__header__customizer">
        <button class="geex-btn geex-btn__toggle-sidebar">   
            <i class="uil uil-align-center-alt"></i> 
        </button>
        <button class="geex-btn geex-btn__customizer"> 
            <i class="uil uil-pen"></i> 
            <span>Customize</span>  
        </button>
    </div> 
    <div class="geex-content__header__action__wrap">
        <ul class="geex-content__header__quickaction">
            
            
            
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <img class="user-img" src="<?php echo e(asset('public/assets/img/doctor.png')); ?>" alt="user" />
                </a>
                <div class="geex-content__header__popup geex-content__header__popup--author">
                    <div class="geex-content__header__popup__header">
                        <div class="geex-content__header__popup__header__img">
                            <img style="width:200px; !important" src="<?php echo e(asset('public/assets/img/doctor.png')); ?>" alt="user" />
                        </div>
                        <div class="geex-content__header__popup__header__content">
                            <h3 class="geex-content__header__popup__header__title"><?php echo e(Auth::user()->name); ?></h3>
                            <span class="geex-content__header__popup__header__subtitle">Doctor</span>
                        </div>
                    </div>
                    <div class="geex-content__header__popup__content">
                        <ul class="geex-content__header__popup__items">
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="<?php echo e(route('profile.edit')); ?>">
                                    <i class="uil uil-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-cog"></i>
                                    Settings
                                </a>
                            </li>
                           
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-bell"></i>
                                    API
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="geex-content__header__popup__footer">
                    <form action="<?php echo e(route('doctor.logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="geex-content__header__popup__footer__link" style="border:none;"><i class="uil uil-arrow-up-left"></i>Logout</button>
            </form>
                       
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div> <?php /**PATH /home1/pulselin/public_html/hospital/resources/views/includes/haction.blade.php ENDPATH**/ ?>