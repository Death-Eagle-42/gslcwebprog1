<?php $__env->startSection('title', 'Insert Student'); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<h1>Insert Student</h1>
        <form action="/update/<?php echo e($student->id); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('put'); ?>

            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" value="<?php echo e($student->name); ?>" name="name" id="name" placeholder="Name">
            </div>

            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="number" class="form-control" value="<?php echo e($student->nim); ?>" name="nim" id="nim" placeholder="Student NIM">
            </div>

            <div class="form-group">
                <label for="grade">Grade</label>
                <input type="text" class="form-control" value="<?php echo e($student->grade); ?>" name="grade" id="grade" placeholder="Grade">
              </div>
            
              <a href="/list" class="btn btn-success">Back</a>
            <button class="btn">Save Edit</button>

        </form>
    </div>

</body>
</html>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Janice\Downloads\Forum_GSLC\resources\views/edit.blade.php ENDPATH**/ ?>