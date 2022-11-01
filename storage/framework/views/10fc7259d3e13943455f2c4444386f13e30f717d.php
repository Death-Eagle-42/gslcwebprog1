<?php $__env->startSection('title', 'Insert Student'); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <div class="container_2">
      <div class="row">
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo e($student->nim); ?></h5>
                <p class="card-text">Name: <?php echo e($student->name); ?></p>
                <p class="card-text">Grade: <?php echo e($student->grade); ?></p>

              <a href="/update/<?php echo e($student->id); ?>" class="btn">Edit</a>

                <form action="/delete/<?php echo e($student->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                   <button class="btn">Delete</button> 
                </form>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </div>  
    </div>
</body>
</html>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Janice\Downloads\Forum_GSLC\resources\views/list.blade.php ENDPATH**/ ?>