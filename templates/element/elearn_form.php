	
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>	
                <img class="img-fluid" src="<?= $this->Url->image('img-01.png') ?>" alt="img">
            </div>

            <?= $this->Form->create($user) ?>
            <fieldset>
                <span class="login100-form-title">
                <legend><?= __('Register User') ?></legend>
                </span>

                <div class="wrap-input100 validate-input">
                    <?= $this->Form->control('firstname', ['class' => 'input100']); ?>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input">
                    <?= $this->Form->control('lastname', ['class' => 'input100']); ?>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input">
                    <?= $this->Form->control('email', ['class' => 'input100']); ?>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input">
                    <?= $this->Form->control('password', ['class' => 'input100']); ?>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <!-- <div class="wrap-input100 validate-input">
                /*     $this->Form->control('role', [
                        'options' => ['admin' => 'Admin', 'author' => 'Author']
                        ]) 
                     */
                    <span class="focus-input100"></span>
                </div> -->
                
                <div class="container-login100-form-btn">
                    <?= $this->Form->button('Submit', ['class' => 'login100-form-btn']); ?>
                    <?= $this->Form->end() ?>
                </div>
            </fieldset>
        </div>
    </div>
</div>
	