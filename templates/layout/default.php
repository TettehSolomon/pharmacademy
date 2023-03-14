<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Pharmacademy
        <?= $this->fetch('') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    
    <?= $this->Html->css(['bootstrap.min']) ?>
    <?= $this->Html->css(['lib/animate/animate.min.css']) ?>
    <?= $this->Html->css(['lib/owlcarousel/assets/owl.carousel.min.css']) ?>
    <?= $this->Html->css(['style']) ?>

    <!-- CSS links for the registration form -->
    <?= $this->Html->css(['vendor/bootstrap/css/bootstrap.min.css']) ?>
    <?= $this->Html->css(['fonts/font-awesome-4.7.0/css/font-awesome.min.css']) ?>
    <?= $this->Html->css(['vendor/animate/animate.css']) ?>
    <?= $this->Html->css(['vendor/css-hamburgers/hamburgers.min.css']) ?>
    <?= $this->Html->css(['vendor/select2/select2.min.css']) ?>
    <?= $this->Html->css(['util']) ?>
    <?= $this->Html->css(['form']) ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    

</head>
<body>
    
        
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
            <?= $this->Html->script(['lib/wow/wow.min.js']) ?>
            <?= $this->Html->script(['lib/easing/easing.min.js']) ?>
            <?= $this->Html->script(['lib/waypoints/waypoints.min.js']) ?>
            <?= $this->Html->script(['lib/owlcarousel/owl.carousel.min.js']) ?>
            <?= $this->Html->script(['main']) ?>

            <!-- Js links for the registration form -->
            <?= $this->Html->script(['vendor/jquery/jquery-3.2.1.min.js']) ?>
            <?= $this->Html->script(['vendor/bootstrap/js/popper.js']) ?>
            <?= $this->Html->script(['vendor/bootstrap/js/bootstrap.min.js']) ?>
            <?= $this->Html->script(['vendor/select2/select2.min.js']) ?>
            <?= $this->Html->script(['vendor/tilt/tilt.jquery.min.js']) ?>
            <script >
                $('.js-tilt').tilt({
                    scale: 1.1
                })
            </script>
            <?= $this->Html->script(['form']) ?>
</body>
</html>
