// Ambil elemen sidebar dan tombol toggle
const sidebar = document.getElementById('sidebar');
const sidebarToggle = document.getElementById('sidebarToggle');

// Event listener untuk membuka/tutup sidebar
sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('open');
});
