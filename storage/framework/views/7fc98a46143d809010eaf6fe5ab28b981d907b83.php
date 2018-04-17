<?php $__env->startSection('title', 'Admin Users '); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="mb-1">
                Subadmin Manager                
            </h5>
            <a href="<?php echo e(route('admin.admin.create')); ?>" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Subadmin</a>
            <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Admin Type</th>
                        <th><?php echo app('translator')->getFromJson('admin.first_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.last_name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.email'); ?></th>                        
                        <th>Created</th>
                        <th><?php echo app('translator')->getFromJson('admin.status'); ?></th>
                        <th><?php echo app('translator')->getFromJson('admin.action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e(roleType($admin->role_id)); ?></td>
                        <td><?php echo e($admin->first_name); ?></td>
                        <td><?php echo e($admin->last_name); ?></td>                        
                        <td><?php echo e($admin->email); ?></td>                                  
                        <td><?php echo e(date("M d, Y", strtotime($admin->created_at))); ?></td>                   
                        <td><?php echo e(($admin->status == 1) ? 'Active' : 'Inactive'); ?></td>      
                        <td>
                            <form action="<?php echo e(route('admin.admin.destroy', $admin->id)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="_method" value="DELETE">                                
                                <a href="<?php echo e(route('admin.admin.edit', $admin->id)); ?>" class="btn btn-info"><i class="fa fa-pencil"></i> <?php echo app('translator')->getFromJson('admin.edit'); ?></a>
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