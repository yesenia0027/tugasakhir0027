<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>
Login Siswa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    .login-header {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .login-form {
        background-color: #DCDCDE;
        border: 1px solid #CBC7C5;
        position: relative;
    }

    .button-wrapper {
        background-color: #C6CED6;
        margin-top: -5px;
        border: 1px solid #CBC7C5;
    }

    .form-group input {
        border: 1px solid #ccc;
        border-radius: 3px;
        max-width: 50%;
    }

    .top-btn {
        position: absolute;
        top: -10px;
        left: 10px;
        border: 1px solid #CBC7C5;
    }

    @media (max-width: 576px) {
        .form-group input {
            margin-left: 10px;
        }

        .form-group input::placeholder {
            font-size: 12px;
        }
    }
</style>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="login-box col-12 col-md-8 col-lg-6 p-4" style="background-image: url('images/pattern.jpg'); background-size: cover; background-size: 40%;">
        <div class="login-header text-center">
            <img src="<?= base_url('images/logo.png') ?>" class="w-25" alt="">
            <h2 class="fs-3 fw-semibold">Sistem Ujian Online</h2>
            <h5 class="fs-5">Halaman Siswa</h5>
        </div>

        <form method="POST">
            <?= csrf_field() ?>
            <div class="login-form rounded mt-4 pt-5 pb-3">
                <button class="top-btn btn btn-light">Login</button>
                <div class="form-group d-flex align-items-center mb-3">
                    <label class="w-25 ms-3">NIS</label>
                    <span class="me-1">:</span>
                    <input class="shadow-sm" type="text" name="nis" placeholder="Masukkan NIS.....">
                </div>
                <div class="form-group d-flex align-items-center mb-3">
                    <label class="w-25 ms-3">Password</label>
                    <span class="me-1">:</span>
                    <input class="shadow-sm" type="password" name="password" placeholder="Masukkan password.....">
                </div>
            </div>
            <div class="button-wrapper d-flex py-3 pe-5 justify-content-end">
                <button class="btn btn-light">🔒 Login</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
