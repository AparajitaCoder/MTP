<?php $__env->startSection('title', 'Articles '); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="mb-1">
                Articles 
            </h5>
            <a href="<?php echo e(route('admin.article.create')); ?>" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
            <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>   
                        <th style="width:50%">Article Name</th>
                        <th>Views</th>
                        <th>Comments</th> 
                        <th>Status</th>                                         
                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($product->category->name); ?></td>    
                        <td><?php echo e($product->title); ?></td>          
                        <td><?php echo e($product->total_comments); ?></td>                                   
                        <td><?php echo e($product->total_views); ?></td>      
                        <td><?php echo e(($product->status = 1) ? 'Yes' : 'No'); ?></td>                    
                        <td>
                            <form action="<?php echo e(route('admin.article.destroy', $product->id)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="_method" value="DELETE">                                
                                <a href="<?php echo e(route('admin.article.edit', $product->id)); ?>" class="btn btn-info"><i class="fa fa-pencil"></i> <?php echo app('translator')->getFromJson('admin.edit'); ?></a>
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> <?php echo app('translator')->getFromJson('admin.delete'); ?></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>                
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>