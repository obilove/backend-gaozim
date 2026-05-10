
const sidebar = document.getElementById('sidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebarClose = document.getElementById('sidebarClose');

function openSidebar() {
    sidebar.classList.add('open');
    sidebar.classList.remove('closed');
    sidebarOverlay.classList.add('active');
}

function closeSidebar() {
    sidebar.classList.remove('open');
    sidebar.classList.add('closed');
    sidebarOverlay.classList.remove('active');
}

sidebarToggle?.addEventListener('click', openSidebar);
sidebarClose?.addEventListener('click', closeSidebar);
sidebarOverlay?.addEventListener('click', closeSidebar);

function updateSidebarState() {
    if (window.innerWidth >= 992) {
        sidebar.classList.remove('closed');
        sidebar.classList.remove('open');
        sidebarOverlay.classList.remove('active');
    } else {
        sidebar.classList.add('closed');
        sidebar.classList.remove('open');
        sidebarOverlay.classList.remove('active');
    }
}

updateSidebarState();
window.addEventListener('resize', updateSidebarState);
