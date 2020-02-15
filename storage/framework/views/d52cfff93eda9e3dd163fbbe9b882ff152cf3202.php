<?php $__env->startSection('title', 'Listado de Proyectos'); ?>

<?php $__env->startSection('body-class', 'proyects-page'); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <header class="">
        <div class="text-center container div_trans8 corner4 mb-4 p-4">
            <h2 class="text-white mb-5">Imágenes del producto "<?php echo e($draft->title); ?>"</h2>

            <form method="post" action="" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <input class="text-white" type="file" name="photo" required>
                <button type="submit" class="btn btn-outline-danger btn-round">Subir nueva imagen</button>
                <a href="<?php echo e(url('/admin/drafts')); ?>" class="btn btn-outline-danger btn-round">Volver al listado de proyectos</a>
            </form>

            <hr>

            <div class="row">
                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card col-lg-4 mb-2" >
                            <img class="card-img-top mt-2" src="<?php echo e($image->url); ?>">
                            <div class="card-body">
                                <a href="#modalDeleteDraftImage<?php echo e($image->id); ?>" class="btn btn-outline-danger btn-sm btn-round m-2" type="button" title="Eliminar imágen de <?php echo e($draft->title); ?>" data-toggle="modal" data-target="#modalDeleteDraftImage<?php echo e($image->id); ?>">Eliminar Imágen</a>
                            </div>
                        </div>

                        <!-- Modal Delete Proyect -->
                        <div class="modal fade text-center" id="modalDeleteDraftImage<?php echo e($image->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteDraftImage<?php echo e($image->id); ?>Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center bg-danger">
                                        <h5 class="modal-title text-white" id="modalDeleteDraftImage<?php echo e($image->id); ?>Title">Desea Eliminar ésta imágen del Proyecto <?php echo e($draft->title); ?>?</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img class="" src="<?php echo e($image->url); ?>" width="200">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="post" action="<?php echo e(url('/admin/drafts/images')); ?>">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>

                                            <input type="hidden" name="image_id" value="<?php echo e($image->id); ?>">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                            <button class="btn btn-outline-danger" type="submit" title="Eliminar <?php echo e($draft->title); ?>"><i class="fa fa-times"></i> Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Delete Proyect -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </header>
    <p>&nbsp;</p>

    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TechMDQ\Downloads\developer\he\resources\views/admin/drafts/images/index.blade.php ENDPATH**/ ?>