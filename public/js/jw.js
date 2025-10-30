// ================== Smooth Scrolling ==================
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute("href"));
        if (target) target.scrollIntoView({ behavior: "smooth" });
    });
});

// ================== Video Fallback ==================
function setupVideoFallback() {
    const video = document.querySelector(".hero-video");
    if (!video) return;
    video.addEventListener("error", function () {
        this.parentNode.innerHTML = `
        <div class="hero-content" style="background: linear-gradient(to bottom, #000, #111827);">
            <h2 style="font-size: 2.25rem; font-weight: 700;">EXCLUSIVE AUTOMOTIVE</h2>
        </div>`;
    });
}

// ================== Contact Form ==================
function setupContactForm() {
    const contactForm = document.getElementById("contactForm");
    if (!contactForm) return;

    contactForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        const formMessage = document.getElementById("formMessage");

        if (name && email && message) {
            const whatsappMessage = `Name: ${name}%0AEmail: ${email}%0AMessage: ${message}`;
            const whatsappURL = `https://wa.me/+6285842363036?text=${whatsappMessage}`;
            window.open(whatsappURL, "_blank");

            formMessage.textContent = "Redirecting to WhatsApp...";
            formMessage.style.color = "green";
            this.reset();
        } else {
            formMessage.textContent = "Please fill in all fields.";
            formMessage.style.color = "red";
        }
    });
}

// ================== Data Mobil ==================
const topSellingModels = [
    /* ... data kamu tidak diubah ... */
];
const allModels = [
    /* ... data kamu tidak diubah ... */
];

// ================== Render Card Mobil ==================
function renderModels(models) {
    return models
        .map((model) => {
            const mediaHtml = model.image
                ? `<div class="model-media"><img src="${model.image}" alt="${model.name}" class="model-image" /></div>`
                : `<div class="model-media model-image placeholder"><span>No Image</span></div>`;

            return `
        <div class="model-card">
            ${mediaHtml}
            <div class="model-info">
                <h3 class="model-name">${model.name}</h3>
                <div class="model-price">${model.price}</div>
                <div class="model-specs">
                    ${model.specs
                        .map((s) => `<span class="spec-item">${s}</span>`)
                        .join("")}
                </div>
                <p class="model-description">${model.description}</p>
                <button class="model-btn" 
                    onclick="window.location.href='payment.html?name=${encodeURIComponent(
                        model.name
                    )}&price=${encodeURIComponent(model.price)}'">
                    INQUIRE NOW
                </button>
                <button class="model-btn specs-btn" data-model="${
                    model.name
                }">SPESIFIKASI</button>
            </div>
        </div>`;
        })
        .join("");
}

// ================== Inject Style Modal ==================
function injectModalStyles() {
    if (document.getElementById("modal-grid-fixes")) return;
    const style = document.createElement("style");
    style.id = "modal-grid-fixes";
    style.textContent = `
        .models-container { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 20px; }
        .model-card { background: #1a1a1a; border: 1px solid #333; border-radius: 10px; overflow: hidden; }
        .model-media { height: 200px; background: #0f0f0f; display: flex; align-items: center; justify-content: center; padding: 8px; }
        .model-media img { max-width: 100%; max-height: 100%; object-fit: contain; display: block; }
        .model-image.placeholder { color: #9ca3af; font-weight: 600; letter-spacing: .3px; }
    `;
    document.head.appendChild(style);
}

// ================== Modal Koleksi Mobil ==================
function setupModelsModal() {
    const modal = document.getElementById("modelsModal");
    const title = modal?.querySelector("h2");
    const closeBtn = modal?.querySelector(".close-modal");
    const modelsContainer = modal?.querySelector(".models-container");
    if (!modal || !modelsContainer) return;

    const openModal = () => {
        modal.style.display = "block";
        document.body.style.overflow = "hidden";
    };
    const closeModal = () => {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    };

    // Tombol "VIEW ALL MODELS"
    document
        .querySelector(".btn-view-all button")
        ?.addEventListener("click", () => {
            if (title) title.textContent = "Top Selling Models";
            modelsContainer.innerHTML = renderModels(topSellingModels);
            attachSpecsButtons();
            openModal();
        });

    // Tombol "LIHAT SEMUA"
    document
        .querySelector(".collection-header button")
        ?.addEventListener("click", () => {
            if (title) title.textContent = "All Exclusive Automotive Models";
            modelsContainer.innerHTML = renderModels(allModels);
            attachSpecsButtons();
            openModal();
        });

    closeBtn?.addEventListener("click", closeModal);
    window.addEventListener("click", (e) => {
        if (e.target === modal) closeModal();
    });
}

// ================== Modal SPESIFIKASI ==================
function openSpecs(modelName) {
    const modal = document.getElementById("specsModal");
    const container = document.getElementById("specsContainer");
    if (!modal || !container) return;

    const specs = specsData[modelName];
    if (!specs) {
        container.innerHTML = `<p>Tidak ada data spesifikasi untuk model ini.</p>`;
    } else {
        container.innerHTML = buildSpecsHTML(specs);
    }

    modal.style.display = "block";
    document.body.style.overflow = "hidden";
}

function closeSpecs() {
    const modal = document.getElementById("specsModal");
    if (!modal) return;
    modal.style.display = "none";
    document.body.style.overflow = "auto";
}

function attachSpecsButtons() {
    document.querySelectorAll(".specs-btn").forEach((btn) => {
        btn.addEventListener("click", () => openSpecs(btn.dataset.model));
    });
}

// Tutup modal jika klik luar atau tekan Esc
function setupSpecsModal() {
    const modal = document.getElementById("specsModal");
    const closeBtn = modal?.querySelector(".close-specs");

    closeBtn?.addEventListener("click", closeSpecs);
    window.addEventListener("click", (e) => {
        if (e.target === modal) closeSpecs();
    });
    window.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeSpecs();
    });
}

// ================== Geolocation Showroom ==================
const showrooms = [
    { name: "Showroom Purwokerto", lat: -7.43454, lng: 109.24372 },
    { name: "Showroom Jakarta Pusat", lat: -6.186486, lng: 106.834091 },
    { name: "Showroom Bandung", lat: -6.914744, lng: 107.60981 },
    { name: "Showroom Yogyakarta", lat: -7.801194, lng: 110.364917 },
];

function toRad(v) {
    return (v * Math.PI) / 180;
}
function hitungJarak(lat1, lng1, lat2, lng2) {
    const R = 6371;
    const dLat = toRad(lat2 - lat1);
    const dLon = toRad(lng2 - lng1);
    const a =
        Math.sin(dLat / 2) ** 2 +
        Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) * Math.sin(dLon / 2) ** 2;
    return R * 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
}

function cariShowroomTerdekat() {
    const mapsContainer = document.getElementById("maps-container");
    const mapsFrame = document.getElementById("maps-frame");
    const directionsLink = document.getElementById("directions-link");
    const errorMsg = document.getElementById("error-msg");
    const showroomName = document.getElementById("showroom-name");

    if (!navigator.geolocation) {
        errorMsg.textContent = "Browser Anda tidak mendukung geolokasi.";
        return;
    }

    navigator.geolocation.getCurrentPosition(
        (pos) => {
            const { latitude: userLat, longitude: userLng } = pos.coords;
            let nearest = null,
                minDistance = Infinity;
            for (const s of showrooms) {
                const d = hitungJarak(userLat, userLng, s.lat, s.lng);
                if (d < minDistance) {
                    minDistance = d;
                    nearest = s;
                }
            }

            if (nearest) {
                showroomName.textContent = nearest.name;
                mapsFrame.src = `https://maps.google.com/maps?q=${encodeURIComponent(
                    nearest.name
                )}@${nearest.lat},${nearest.lng}&z=15&output=embed`;
                directionsLink.href = `https://www.google.com/maps/dir/?api=1&origin=${userLat},${userLng}&destination=${nearest.lat},${nearest.lng}&travelmode=driving`;
                mapsContainer.style.display = "block";
                errorMsg.textContent = "";
            } else errorMsg.textContent = "Tidak ada showroom ditemukan.";
        },
        () =>
            (errorMsg.textContent =
                "Tidak dapat mengakses lokasi. Izinkan akses lokasi pada browser Anda.")
    );
}

window.cariShowroomTerdekat = cariShowroomTerdekat;

// ================== Init ==================
document.addEventListener("DOMContentLoaded", () => {
    setupVideoFallback();
    setupContactForm();
    setupModelsModal();
    setupSpecsModal();
    injectModalStyles();
});
