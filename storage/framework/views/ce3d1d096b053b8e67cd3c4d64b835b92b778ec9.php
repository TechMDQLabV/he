<?php $__env->startSection('title', 'Listado de productos'); ?>

<?php $__env->startSection('body-class', 'product-page'); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <header class="">
        <div class="text-white container div_trans8 corner4 mb-4 p-4">
            <h2 class="text-center">Listado de Productos</h2>
            <?php if(session('notification')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('notification')); ?>

                </div>
            <?php endif; ?>
            <p>&nbsp;</p>
            <div class="">
                <div class="">
                    <p class="text-center"><a href="#modalProductAdd" class="btn btn-outline-info btn-round" data-toggle="modal" data-target="#modalProductAdd" title="Agregar Producto">Nuevo Producto</a></p>
                    <div class="row table-responsive-sm">
                        <div class="col-md-12">
                            <?php if(count($products)>0): ?>
                                <table id="productsTable" class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th class="text-center" width="25%">Producto</th>
                                        <th class="text-center" width="35%">Descripción</th>
                                        <th class="text-center" width="20%">Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-left"><?php echo e($product->name); ?></td>
                                            <td class="text-left"><?php echo e($product->description); ?></td>
                                            <td class="text-center">
                                                <a href="#modalProductDetail<?php echo e($product->id); ?>" class="btn btn-outline-dark btn-sm" type="button" title="Detalle de <?php echo e($product->name); ?>" data-toggle="modal"  data-target="#modalProductDetail<?php echo e($product->id); ?>">&nbsp;<i class="fa fa-info t-yellow">&nbsp;</i></a>
                                                <a href="#modalProductEdit<?php echo e($product->id); ?>" class="btn btn-outline-dark btn-sm" type="button" title="Editar Producto <?php echo e($product->name); ?>" data-toggle="modal" data-target="#modalProductEdit<?php echo e($product->id); ?>"><i class="fa fa-edit t-blue"></i></a>
                                                <a href="#modalDeleteProduct<?php echo e($product->id); ?>" class="btn btn-outline-dark btn-sm" type="button" title="Eliminar <?php echo e($product->name); ?>" data-toggle="modal" data-target="#modalDeleteProduct<?php echo e($product->id); ?>"><i class="fa fa-times t-red"></i></a>
                                            </td>
                                        </tr>

                                        <!-- Modal Delete Product -->
                                        <div class="modal fade text-center" id="modalDeleteProduct<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteProduct<?php echo e($product->id); ?>Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center bg-danger">
                                                        <h5 class="modal-title text-white" id="modalDeleteProduct<?php echo e($product->id); ?>Title">Desea Eliminar el Producto <?php echo e($product->name); ?>?</h5>
                                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body text-dark">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4><?php echo e($product->name); ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p><?php echo e($product->description); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post" action="<?php echo e(url('/admin/products')); ?>">
                                                            <?php echo e(csrf_field()); ?>

                                                            <?php echo e(method_field('DELETE')); ?>

                                                            <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                                            <button class="btn btn-outline-danger" type="submit" title="Eliminar <?php echo e($product->name); ?>"><i class="fa fa-times"></i> Eliminar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Delete Product -->

                                        <!-- Modal Product Detail -->
                                        <div class="modal fade t-black text-center" id="modalProductDetail<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalProductDetail<?php echo e($product->id); ?>Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center bg-warning text-white">
                                                        <h5 class="modal-title" id="modalProductDetail<?php echo e($product->id); ?>Title">Detalle de <?php echo e($product->name); ?></h5>
                                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body text-dark">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4><?php echo e($product->name); ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p><?php echo e($product->description); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Product Detail -->

                                        <!-- Modal Product Edit -->
                                        <div class="modal fade t-black" id="modalProductEdit<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalProductEdit<?php echo e($product->id); ?> Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                        <h5 class="modal-title text-white" id="modalProductEdit<?php echo e($product->id); ?>Title">Modificar Datos de <?php echo e($product->name); ?></h5>
                                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <form method="post" action="<?php echo e(url('/admin/products/edit')); ?>">
                                                        <div class="modal-body text-left">
                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

                                                            <div class="form-group col-md-12">
                                                                <label for="title" class="col-form-label">Producto:</label>
                                                                <input class="form-control" type="text" name="name" id="name" value="<?php echo e($product->name); ?>" autofocus>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="description" class="col-form-label">Descripción:</label>
                                                                <textarea class="form-control" placeholder="Descripción del producto" rows="5" name="description"><?php echo e($product->description); ?></textarea>
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
                                        <!-- End Modal Product Edit -->

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
    <!-- Modal Product Add -->
    <div class="modal fade t-black" id="modalProductAdd" tabindex="-1" role="dialog" aria-labelledby="modalProductAddTitle" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="modalProductAddTitle">Agregar Producto</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form method="post" action="<?php echo e(url('/admin/products')); ?>">
                    <div class="modal-body text-left">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group col-md-12">
                            <label for="name" class="col-form-label">Producto:</label>
                            <input class="form-control" type="text" name="name" id="name" autofocus>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="description" class="col-form-label">Descripción:</label>
                            <textarea class="form-control" placeholder="Descripción del producto" rows="5" name="description"></textarea>
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
    <!-- End Modal Product Add -->
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
            $('#productsTable').DataTable({
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TechMDQ\Downloads\developer\he\resources\views/admin/products/index.blade.php ENDPATH**/ ?>