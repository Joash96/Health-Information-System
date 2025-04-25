<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Login - MediCare Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 12px;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .error {
            color: red;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Doctor Login</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php echo e($errors->first('error')); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('doctor.login.submit')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="doctor@example.com" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>

</body>
</html>
<?php /**PATH E:\jmine\health-info-system\resources\views/auth/doctor-login.blade.php ENDPATH**/ ?>