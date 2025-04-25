<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Dashboard | MediCare System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f9ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .dashboard-header {
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: white;
            padding: 30px;
            border-radius: 0 0 20px 20px;
            text-align: center;
            animation: fadeInDown 0.6s ease-in-out;
        }

        .card-box {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
        }

        .card-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="dashboard-header">
        <h1 class="display-5">Welcome, <?php echo e(Auth::user()->name); ?></h1>
        <p class="lead">You're logged in to MediCare Hospital System</p>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-box shadow-sm border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Patients</h5>
                        <p class="card-text">View and manage patient records and health profiles.</p>
                        <a href="<?php echo e(route('clients.index')); ?>" class="btn btn-outline-primary btn-sm">Manage Patients</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card card-box shadow-sm border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title text-success">Health Programs</h5>
                        <p class="card-text">Create and assign health programs to patients.</p>
                        <a href="<?php echo e(route('programs.index')); ?>" class="btn btn-outline-success btn-sm">View Programs</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-box shadow-sm border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title text-success">Doctors</h5>
                        <p class="card-text">Create and assign health programs to patients.</p>
                        <a href="<?php echo e(route('doctors.index')); ?>" class="btn btn-outline-success btn-sm">View Doctors</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card card-box shadow-sm border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger">Profile Settings</h5>
                        <p class="card-text">Edit your account information and credentials.</p>
                        <a href="<?php echo e(route('profile.edit')); ?>" class="btn btn-outline-danger btn-sm">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <form action="<?php echo e(route('doctor.logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-secondary">Logout</button>
            </form>
        </div>
    </div>

</body>
</html>
<?php /**PATH E:\jmine\health-info-system\resources\views/dashboard.blade.php ENDPATH**/ ?>