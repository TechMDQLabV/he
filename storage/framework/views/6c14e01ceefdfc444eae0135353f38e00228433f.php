<?php $__env->startSection('title', 'HE Hidro Extinción'); ?>

<?php $__env->startSection('body-class', 'landing-page'); ?>

<?php $__env->startSection('styles'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Masthead -->
    <header class="" id="enterprise">
        <div class="  div_trans8">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Instalaciones contra incendio</h1>
                    <h5 class="text-white ">Protección de industrias, depósitos, cocheras, galpones, edificios y todo tipo de obras</h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">Asesoramos, diseñamos y desarrollamos instalaciones fijas contra incendio</p>
                    <p class="text-white font-weight-light mb-5">Realizamos el mantenimiento y puesta en marcha de dichas instalaciones, adecuándolas a las necesidades de nuestros clientes</p>
                    <a class="btn btn-outline-danger mb-5" href="#services" title="Continuar">Continuar</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section class="" id="services">
        <div class="div_trans8 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 text-center">
                    <h2 class="text-white mt-3">Servicios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="<?php echo e(url('servicios/dyc')); ?>" title="Diseño y Cálculo">
                            <i class="fas fa-4x fa-drafting-compass text-danger mb-4"></i>
                            <h3 class="h4 mb-2 text-white">Diseño y Cálculo</h3>
                            <p class="text-white mb-0 m-3">Con el personal más capacitado del país</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="<?php echo e(url('servicios/provision')); ?>" title="Provisión de Equipamiento">
                            <i class="fas fa-4x fa-shipping-fast text-danger mb-4"></i>
                            <h3 class="h4 mb-2 text-white">Provisión de Equipamiento</h3>
                            <p class="text-white mb-0 m-3">Los materiales adecuados a sus necesidades</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="<?php echo e(url('servicios/instalaciones')); ?>" title="Instalaciones">
                            <i class="fas fa-4x fa-tools text-danger mb-4"></i>
                            <h3 class="h4 mb-2 text-white">Instalaciones</h3>
                            <p class="text-white mb-0 m-3">Instalaciones de calidad superior</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="<?php echo e(url('servicios/mantenimiento')); ?>" title="Mantenimiento">
                            <i class="fas fa-4x fa-toolbox text-danger mb-4"></i>
                            <h3 class="h4 mb-2 text-white">Mantenimiento</h3>
                            <p class="text-white mb-0 m-3">Mantenimiento adecuado</p>
                        </a>
                    </div>
                </div>
            </div>
            <a class="btn btn-outline-light my-5" href="#projects" title="Proyectos">Proyectos</a>
        </div>
    </section>

    <!-- Projects Section only 3 proyects with card -->
    <section id="projects" class="">
        <div class="div_trans8 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 text-center">
                    <h2 class="text-white my-3">Proyectos</h2>
                </div>
            </div>
        <div class="row justify-content-center">
            <?php $__currentLoopData = $draftsWithImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $draft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card col-md-3 m-2">
                    <?php $__currentLoopData = $draft->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(asset($image->url)); ?>" data-toggle="lightbox" data-gallery="projects-lightbox<?php echo e($draft->id); ?>" data-title="<?php echo e($draft->title); ?>" data-footer="<?php echo e($draft->description); ?>" class="">
                            <img class="img-fluid card-img-top <?php echo e(($loop->first) ? "" : "d-none"); ?>" src="<?php echo e(asset($image->url)); ?>" alt="">
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($draft->title); ?></h5>
                        <p class="card-text" data-toggle="tooltip" data-html="true" title="<?php echo e($draft->description); ?>"><?php echo e(Str::limit($draft->description,150,' ...')); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
            <a class="btn btn-outline-light btn-xl js-scroll-trigger my-5" href="#contact" title="Contacto">Contacto</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="" id="contact">
        <div class="div_trans8">
            <div class="row justify-content-center">
                <div class="mt-3 col-lg-8 text-center">
                    <h2 class="text-white">Contacto</h2>
                    <hr class="divider my-4">
                    <p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Nombre</label>
                                <input type="text" class="form-control" id="inputName">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Domicilio</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Calle 1234">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ciudad</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputProvincia">Provincia</label>
                                <input type="text" class="form-control" id="inputProvincia">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCPostal">C.Postal</label>
                                <input type="text" class="form-control" id="inputCPostal">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-light">Enviar</button>
                        </div>
                        <hr class="divider my-4">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div class="text-white-50">+54 (0223) 472-3400</div>
                </div>
                <div class="col-lg-3 mr-auto text-center mb-5">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <a class="d-block" href="mailto:contact@yourwebsite.com">hidroextincion@gmail.com</a>
                </div>
                <!--
                <div class="col-lg-3 mr-auto text-center mb-5">
                    <i class="fab fa-whatsapp fa-3x mb-3 text-muted"></i>
                    <div class="text-white-50">+1 (202) 555-0149</div>
                </div>
                <div class="col-lg-3 mr-auto text-center mb-5">
                    <i class="fab fa-facebook fa-3x mb-3 text-muted"></i>
                    <div class="text-white-50">tu facebook</div>
                </div>
                -->
            </div>
        </div>
    </section>

    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TechMDQ\Downloads\developer\he\resources\views/welcome.blade.php ENDPATH**/ ?>