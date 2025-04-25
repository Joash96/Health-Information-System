<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Information System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f8ff; }
        .hero { padding: 100px 0; background: #e3f2fd; text-align: center; }
        .hero h1 { font-size: 3rem; }
        .services { padding: 50px 0; }
        footer { padding: 20px; background: #1976d2; color: white; text-align: center; }
    </style>
</head>
<body>

    <div class="hero">
        <h1>Welcome to MediCare Hospital</h1>
        <p>Your health is our top priority. Quality care. Compassionate staff. Modern systems.</p>
        <a href="<?php echo e(route('doctor.login')); ?>" class="btn btn-primary">Doctor Login</a>
    </div>

    <div class="container services">
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Outpatient Services</h4>
                <p>Quick checkups and consultations with our top doctors.</p>
            </div>
            <div class="col-md-4">
                <h4>Health Programs</h4>
                <p>Enrol in TB, HIV, Malaria & other preventive care programs.</p>
            </div>
            <div class="col-md-4">
                <h4>Modern Lab</h4>
                <p>Accurate tests and diagnostics in our fully equipped lab.</p>
            </div>
        </div>
    </div>

    <footer>
        &copy; <?php echo e(date('Y')); ?> MediCare Hospital. All rights reserved.
    </footer>

</body>
</html>
<?php /**PATH /home1/pulselin/public_html/hospital/resources/views/landing/index.blade.php ENDPATH**/ ?>