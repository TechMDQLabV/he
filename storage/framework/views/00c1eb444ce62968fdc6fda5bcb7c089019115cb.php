<?php $__env->startSection('title', 'Listado de Proyectos'); ?>

<?php $__env->startSection('body-class', 'proyects-page'); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <header class="">
        <div class="text-white container div_trans8 corner4 mb-4 p-4">
            <h2 class="text-center">Listado de Proyectos</h2>
            <?php if(session('notification')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('notification')); ?>

                </div>
            <?php endif; ?>
            <p>&nbsp;</p>
            <div class="">
                <div class="">
                    <p class="text-center"><a href="#modalDraftAdd" class="btn btn-outline-info btn-round" data-toggle="modal" data-target="#modalDraftAdd"title="Agregar Proyecto">Nuevo Proyecto</a></p>
                    <div class="row table-responsive-sm">
                        <div class="col-md-12">
                            <?php if(count($drafts)>0): ?>
                                <table id="draftsTable" class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th class="text-center" width="25%">Nombre</th>
                                        <th class="text-center" width="35%">Descripción</th>
                                        <th class="text-center" width="20%">Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $drafts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $draft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-left"><?php echo e($draft->title); ?></td>
                                            <td class="text-left"><?php echo e($draft->description); ?></td>
                                            <td class="text-center">
                                                <a href="#modalDraftDetail<?php echo e($draft->id); ?>" class="btn btn-outline-dark btn-sm" type="button" title="Detalle de <?php echo e($draft->title); ?>" data-toggle="modal"  data-target="#modalDraftDetail<?php echo e($draft->id); ?>">&nbsp;<i class="fa fa-info t-yellow">&nbsp;</i></a>
                                                <a href="#modalDraftEdit<?php echo e($draft->id); ?>" class="btn btn-outline-dark btn-sm" type="button" title="Editar Proyecto <?php echo e($draft->title); ?>" data-toggle="modal" data-target="#modalDraftEdit<?php echo e($draft->id); ?>"><i class="fa fa-edit t-blue"></i></a>
                                                <a href="<?php echo e(url('/admin/drafts/'.$draft->id.'/images')); ?>" class="btn btn-outline-dark btn-sm" type="button" title="Imágenes del Proyecto <?php echo e($draft->title); ?>"><i class="fa fa-image text-success"></i></a>
                                                <a href="#modalDeleteDraft<?php echo e($draft->id); ?>" class="btn btn-outline-dark btn-sm" type="button" title="Eliminar <?php echo e($draft->title); ?>" data-toggle="modal" data-target="#modalDeleteDraft<?php echo e($draft->id); ?>"><i class="fa fa-times t-red"></i></a>
                                            </td>
                                        </tr>

                                        <!-- Modal Delete Proyect -->
                                        <div class="modal fade text-center" id="modalDeleteDraft<?php echo e($draft->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteDraft<?php echo e($draft->id); ?>Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center bg-danger">
                                                        <h5 class="modal-title text-white" id="modalDeleteDraft<?php echo e($draft->id); ?>Title">Desea Eliminar el Proyecto <?php echo e($draft->title); ?>?</h5>
                                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body text-dark">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4><?php echo e($draft->title); ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p><?php echo e($draft->description); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post" action="<?php echo e(url('/admin/drafts')); ?>">
                                                            <?php echo e(csrf_field()); ?>

                                                            <?php echo e(method_field('DELETE')); ?>

                                                            <input type="hidden" name="id" value="<?php echo e($draft->id); ?>">
                                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                                            <button class="btn btn-outline-danger" type="submit" title="Eliminar <?php echo e($draft->title); ?>"><i class="fa fa-times"></i> Eliminar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Delete Proyect -->

                                        <!-- Modal Proyect Detail -->
                                        <div class="modal fade t-black text-center" id="modalDraftDetail<?php echo e($draft->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalDraftDetail<?php echo e($draft->id); ?>Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center bg-warning text-white">
                                                        <h5 class="modal-title" id="modalDraftDetail<?php echo e($draft->id); ?>Title">Detalle de <?php echo e($draft->title); ?></h5>
                                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body text-dark">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4><?php echo e($draft->title); ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p><?php echo e($draft->description); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Proyects Detail -->

                                        <!-- Modal Proyect Edit -->
                                        <div class="modal fade t-black" id="modalDraftEdit<?php echo e($draft->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalDraftEdit<?php echo e($draft->id); ?> Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                        <h5 class="modal-title text-white" id="modalDraftEdit<?php echo e($draft->id); ?>Title">Modificar Datos de <?php echo e($draft->title); ?></h5>
                                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <form method="post" action="<?php echo e(url('/admin/drafts/edit')); ?>">
                                                        <div class="modal-body text-left">
                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="hidden" name="id" value="<?php echo e($draft->id); ?>">

                                                            <div class="form-group col-md-12">
                                                                <label for="title" class="col-form-label">Título:</label>
                                                                <input class="form-control" type="text" name="title" id="title" value="<?php echo e($draft->title); ?>" autofocus>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="description" class="col-form-label">Descripción:</label>
                                                                <textarea class="form-control" placeholder="Descripción del proyecto" rows="5" name="description"><?php echo e($draft->description); ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-primary">Modificar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Proyect Edit -->

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            <?php else: ?>
                                <h4>No hay proyectos cargados</h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <p>&nbsp;</p>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Modal Draft Add -->
    <div class="modal fade t-black" id="modalDraftAdd" tabindex="-1" role="dialog" aria-labelledby="modalDraftAddTitle" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="modalDraftAddTitle">Agregar Proyecto</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form method="post" action="<?php echo e(url('/admin/drafts')); ?>">
                    <div class="modal-body text-left">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group col-md-12">
                            <label for="title" class="col-form-label">Título:</label>
                            <input class="form-control" type="text" name="title" id="title" autofocus>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="description" class="col-form-label">Descripción:</label>
                            <textarea class="form-control" placeholder="Descripción del proyecto" rows="5" name="description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Draft Add -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);
        });

        $(document).ready(function() {
            $('#draftsTable').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "lengthMenu":		[[5, 10, 20, 30, 50, 100, -1], [ 5, 10, 20, 30, 50, 100, "Todos"]],
                "iDisplayLength":	10,
                "bJQueryUI":		false,
                "aoColumns":[
                    {"bSortable": true},
                    {"bSortable": true},
                    {"bSortable": false, 'searchable': false}
                ],

            });
            $("input.form-control.form-control-sm").attr('placeholder', 'Buscar...');
            $("input.form-control.form-control-sm").attr('size', 30);
            $("input.form-control.form-control-sm").focus();
            $("ul.pagination").addClass("pagination-sm");
        } );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TechMDQ\Downloads\developer\he\resources\views/admin/drafts/index.blade.php ENDPATH**/ ?>