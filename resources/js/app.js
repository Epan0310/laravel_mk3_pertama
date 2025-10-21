// === app.js ===
import "bootstrap";
import "admin-lte";
import "@fortawesome/fontawesome-free/js/all.min.js";

// Optional: interaksi tombol sidebar biar bisa collapse
document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.querySelector('[data-widget="pushmenu"]');
    if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
            document.body.classList.toggle("sidebar-collapse");
        });
    }
});
