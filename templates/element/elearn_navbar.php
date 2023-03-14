<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>PharmAcademy</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <?= $this->Html->link('Home', ['controller' => 'articles','action' => 'home'],['class' => 'nav-item nav-link active'])?>
                <?= $this->Html->link('About', ['controller' => 'articles','action' => 'home'],['class' => 'nav-item nav-link'])?>
                <?= $this->Html->link('Courses', ['controller' => 'articles','action' => 'home'],['class' => 'nav-item nav-link'])?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <?= $this->Html->link('Our Team', ['controller' => 'articles','action' => 'home'],['class' => 'dropdown-item'])?>
                        <?= $this->Html->link('Testimonial', ['controller' => 'articles','action' => 'home'],['class' => 'dropdown-item'])?>
                        <?= $this->Html->link('404 Page', ['controller' => 'articles','action' => 'home'],['class' => 'dropdown-item'])?>
                    </div>
                </div>
                <?= $this->Html->link('Contact', ['controller' => 'articles','action' => 'home'],['class' => 'nav-item nav-link'])?>
            </div>
            <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>-->
            <?= $this->Html->link('Register Users', 
        ['controller' => 'users', 'action' => 'register'], 
        ['class' => 'btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft']) 
    ?>
        </div>
    </nav>
    <!-- Navbar End -->
