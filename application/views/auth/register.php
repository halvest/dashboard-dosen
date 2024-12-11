<div class="container d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card shadow-lg p-4 animate__animated animate__fadeIn" style="width: 100%; max-width: 400px; border-radius: 15px;">
        <!-- Logo -->
        <div class="text-center mb-3">
            <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" style="width: 80px; height: 80px;">
        </div>

        <!-- Judul -->
        <h3 class="text-center mb-4 fw-bold" style="color: #5A67D8;">Daftar Akun Dashboard</h3>

        <!-- Form -->
        <form method="post" action="<?= base_url('index.php/admin/register_action'); ?>">
            <!-- Input Username -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                <label for="username">Username</label>
            </div>
            <!-- Input Email -->
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                <label for="email">Email</label>
            </div>
            <!-- Input Password -->
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
                <label for="password">Kata Sandi</label>
            </div>

            <!-- Tombol Register -->
            <button type="submit" class="btn btn-success w-100 py-2">Daftar</button>
        </form>

        <!-- Login -->
        <p class="mt-3 text-center">
            Sudah memiliki akun? 
            <a href="<?= base_url('index.php/auth/login'); ?>" class="text-decoration-none" style="color: #5A67D8;">Login</a>
        </p>
    </div>
</div>
