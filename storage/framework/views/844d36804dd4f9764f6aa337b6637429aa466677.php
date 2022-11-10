<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/home.css')); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Staff List Position'); ?></title>
</head>
<body>
<div class="container2">
    <h1>Staff List Position</h1>
    </div>
<div class="container1">
    <p>Simple staff database</p>
        <br>
            <p>Select action</p>
            <a href="/create">Add Staff</a>
            <a href="/list">View Staff</a>
    </div>
</body>
</html>
<?php /**PATH D:\New folder\gslc webprog 2440034334\resources\views/home.blade.php ENDPATH**/ ?>