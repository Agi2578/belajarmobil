<!DOCTYPE html>
<html>
<head>
    <title>Menu Paket Belajar</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>Menu Paket Belajar</h1>
        <div class="card">
            <img src="<?php echo e(asset('images/car1.jpg')); ?>" alt="Car 1">
            <div class="card-content">
                <h2>Paket Belajar Standar</h2>
                <p>Belajar secara online dengan akses ke semua modul dan video pembelajaran.</p>
                <button class="btn" onclick="window.location.href ='https://www.youtube.com/watch?v=rB-DIgWKRDQ'">Beli Sekarang</button>

            </div>
        </div>
        <div class="card">
            <img src="<?php echo e(asset('images/car2.jpg')); ?>" alt="Car 2">
            <div class="card-content">
                <h2>Paket Belajar Premium</h2>
                <p>Dapatkan akses ke semua modul dan video pembelajaran, serta konsultasi dengan mentor.</p>
                <button class="btn" onclick="window.location.href ='https://www.youtube.com/watch?v=rB-DIgWKRDQ'">Beli Sekarang</button>
            </div>
        </div>
    </div>
    </footer>
    <div style="display: flex; flex-direction: column; align-items: center;">
  <p>This is the content of the Home Page.</p>
  <a href="<?php echo e(route('welcome')); ?>">Go back to the Welcome Page</a>
</div>
<footer></footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\belajarmobil\resources\views/paket.blade.php ENDPATH**/ ?>