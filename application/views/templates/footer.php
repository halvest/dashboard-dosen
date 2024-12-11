<footer class="footer bg-dark text-white text-center py-2">
    <p>&copy; 2024 Sistem Dosen</p>
</footer>
<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById('toggleSidebar');
        if (toggleButton) {
            toggleButton.addEventListener('click', function () {
                const sidebar = document.getElementById('sidebar');
                if (sidebar) {
                    sidebar.classList.toggle('d-none');
                }
            });
        }
    });
</script>
</body>
</html>
