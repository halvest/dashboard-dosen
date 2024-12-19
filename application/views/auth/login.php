<div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4 animate__animated animate__fadeIn" style="width: 100%; max-width: 400px; border-radius: 15px;">
            <!-- Logo -->
            <div class="text-center mb-3">
                <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" style="width: 80px; height: 80px;">
            </div>

            <!-- Judul -->
            <h3 class="text-center mb-4 fw-bold" style="color: #5A67D8;">Login Akun Dashboard</h3>

            <!-- Pesan Error -->
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger animate__animated animate__fadeIn" role="alert">
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>

            <!-- Form -->
            <form method="post" action="<?= site_url('auth/login_process'); ?>">
                <!-- Input Username -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                    <label for="username">Username</label>
                </div>
                <!-- Input Password -->
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
                    <label for="password">Kata Sandi</label>
                </div>

                <!-- Tombol Login -->
                <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
            </form>

            <!-- Daftar -->
            <p class="mt-3 text-center">
                Belum mempunyai akun? 
                <a href="<?= site_url('auth/register'); ?>" class="text-decoration-none" style="color: #5A67D8;">Daftar</a>
            </p>
        </div>
    </div>