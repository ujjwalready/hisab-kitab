<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top:50px;">
  
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Users Management</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="<?php echo e(route('users.create')); ?>"> Create New User</a>

        </div>

    </div>

</div>

<?php if($message = Session::get('success')): ?>

<div class="alert alert-success">

  <p><?php echo e($message); ?></p>

</div>

<?php endif; ?>



<table class="table table-bordered">

 <tr>

   <th>No</th>

   <th>Name</th>

   <th>Email</th>

   <th>Roles</th>

   <th width="280px">Action</th>

 </tr>

 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <tr>

    <td><?php echo e(++$i); ?></td>

    <td><?php echo e($user->name); ?></td>

    <td><?php echo e($user->email); ?></td>

    <td>

      <?php if(!empty($user->getRoleNames())): ?>

        <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

           <label class="badge badge-success"><?php echo e($v); ?></label>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php endif; ?>

    </td>

    <td>

       <a class="btn btn-info" href="<?php echo e(route('users.show',$user->id)); ?>">Show</a>

       <a class="btn btn-primary" href="<?php echo e(route('users.edit',$user->id)); ?>">Edit</a>

        <?php echo Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']); ?>


            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>


        <?php echo Form::close(); ?>


    </td>

  </tr>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>


</div>






<?php echo $data->render(); ?>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Web Development\laravel\hisab kitab\hisab_kitab\resources\views/users/index.blade.php ENDPATH**/ ?>