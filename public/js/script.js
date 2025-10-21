// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute("href"));
        if (target) target.scrollIntoView({ behavior: "smooth" });
    });
});

// Video fallback handler
const setupVideoFallback = () => {
    const video = document.querySelector(".hero-video");
    if (!video) return;
    video.addEventListener("error", function onError() {
        this.parentNode.innerHTML = `
      <div class="hero-content" style="background: linear-gradient(to bottom, #000, #111827);">
        <h2 style="font-size: 2.25rem; font-weight: 700;">EXCLUSIVE AUTOMOTIVE</h2>
      </div>`;
    });
};

// Contact form handler
const setupContactForm = () => {
    const contactForm = document.getElementById("contactForm");
    if (!contactForm) return;
    contactForm.addEventListener("submit", function onSubmit(e) {
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
};

// Top selling (9) – gunakan aset gambar yang sudah ada
const topSellingModels = [
    {
        name: "Lamborghini Revuelto",
        price: "IDR 22.5 Miliar",
        image: "revuelto.png",
        specs: [
            "V12 Hybrid",
            "1,001 HP",
            "0-100km/h: 2.5s",
            "Top Speed: 350km/h",
        ],
        description:
            "The first V12 hybrid supercar from Lamborghini with cutting-edge technology.",
    },
    {
        name: "Lamborghini Huracan EVO",
        price: "IDR 6 Miliar",
        image: "huracan.png",
        specs: ["V10", "640 HP", "0-100km/h: 2.9s", "Top Speed: 325km/h"],
        description:
            "Balanced performance and daily drivability from Lamborghini's V10.",
    },
    {
        name: "Lamborghini Aventador SVJ",
        price: "IDR 22 Miliar",
        image: "aventador.png",
        specs: ["V12", "759 HP", "0-100km/h: 2.8s", "Top Speed: 350km/h"],
        description:
            "The ultimate expression of Lamborghini's super sports car DNA.",
    },
    {
        name: "Lamborghini Urus Performante",
        price: "IDR 10 Miliar",
        image: "urus.png",
        specs: [
            "V8 Twin-Turbo",
            "650 HP",
            "0-100km/h: 3.6s",
            "Top Speed: 305km/h",
        ],
        description: "Super SUV with the soul of a supercar.",
    },
    {
        name: "Ferrari SF90 Stradale",
        price: "IDR 28 Miliar",
        image: "sf90 600.png",
        specs: [
            "V8 Hybrid",
            "1,000 HP",
            "0-100km/h: 2.5s",
            "Top Speed: 340km/h",
        ],
        description: "Ferrari's most powerful production hybrid supercar.",
    },
    {
        name: "Porsche 911 GT3 RS",
        price: "IDR 8.5 Miliar",
        image: "gt3rs 600.png",
        specs: ["Flat-6", "525 HP", "0-100km/h: 3.0s", "Top Speed: 312km/h"],
        description: "Track-focused 911 with race-bred aerodynamics.",
    },
    {
        name: "McLaren Senna",
        price: "IDR 25 Miliar",
        image: "Mclaren_Senna_600x400.png",
        specs: [
            "V8 Twin-Turbo",
            "789 HP",
            "0-100km/h: 2.8s",
            "Top Speed: 340km/h",
        ],
        description: "The ultimate track-focused road-legal McLaren.",
    },
    {
        name: "McLaren P1 GTR",
        price: "IDR 30 Miliar",
        image: "McLaren_P1_GTR_2015_600x400.png",
        specs: ["Hybrid V8", "986 HP", "0-100km/h: 2.4s", "Top Speed: 350km/h"],
        description: "Extreme, track-only evolution of the legendary P1.",
    },
    {
        name: "Porsche 718 Boxster",
        price: "IDR 2 Miliar",
        image: "Porsche_Boxster_600x400.png",
        specs: [
            "Flat-4 Turbo",
            "300 HP",
            "0-100km/h: 4.9s",
            "Top Speed: 275km/h",
        ],
        description: "Agile mid‑engine roadster for daily fun.",
    },
];

// Koleksi lengkap (16) – beberapa gambar masih kosong agar kamu isi sendiri nanti
const allModels = [
    ...topSellingModels,
    {
        name: "Lamborghini Aventador S",
        price: "IDR 18 Miliar",
        image: "Lamborghini_Aventador_600x400.png",
        specs: ["V12", "730 HP", "0-100km/h: 2.9s", "Top Speed: 350km/h"],
        description: "Naturally aspirated V12 with refined dynamics.",
    },
    {
        name: "Ferrari SF90 XX",
        price: "IDR 32 Miliar",
        image: "sf90 800.png",
        specs: [
            "V8 Hybrid",
            "1,016 HP",
            "0-100km/h: 2.3s",
            "Top Speed: 340km/h",
        ],
        description: "Track-focused evolution of the SF90.",
    },
    {
        name: "Porsche 911 Carrera S",
        price: "IDR 3.8 Miliar",
        image: "Porsche_600x400.png",
        specs: [
            "Flat-6 Turbo",
            "450 HP",
            "0-100km/h: 3.5s",
            "Top Speed: 308km/h",
        ],
        description: "Everyday sports car with thrilling performance.",
    },
    {
        name: "Porsche 911 Classic",
        price: "IDR 3.5 Miliar",
        image: "",
        specs: ["Flat-6", "385 HP", "0-100km/h: 4.2s", "Top Speed: 293km/h"],
        description: "Timeless design with modern performance.",
    },
    {
        name: "Ferrari 488 Pista",
        price: "IDR 12 Miliar",
        image: "",
        specs: [
            "V8 Twin-Turbo",
            "710 HP",
            "0-100km/h: 2.9s",
            "Top Speed: 340km/h",
        ],
        description:
            "Lightweight, track-honed Ferrari for pure driving thrills.",
    },
    {
        name: "Aston Martin Vantage",
        price: "IDR 4.5 Miliar",
        image: "",
        specs: [
            "V8 Twin-Turbo",
            "503 HP",
            "0-100km/h: 3.6s",
            "Top Speed: 314km/h",
        ],
        description: "British sports car blending luxury and athleticism.",
    },
    {
        name: "Lamborghini Aventador Ultimae",
        price: "IDR 23 Miliar",
        image: "",
        specs: ["V12", "769 HP", "0-100km/h: 2.8s", "Top Speed: 355km/h"],
        description: "Farewell to the pure V12 era.",
    },
];

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
          <button 
            class="model-btn" 
            onclick="window.location.href='payment.html?name=${encodeURIComponent(
                model.name
            )}&price=${encodeURIComponent(model.price)}'"
          >
            INQUIRE NOW
          </button>
        </div>
      </div>`;
        })
        .join("");
}

// Inject extra styles to make modal grid neat and images uniform
function injectModalStyles() {
    const styleId = "modal-grid-fixes";
    if (document.getElementById(styleId)) return;
    const style = document.createElement("style");
    style.id = styleId;
    style.textContent = `
    .models-container { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 20px; }
    .model-card { background: #1a1a1a; border: 1px solid #333; border-radius: 10px; overflow: hidden; }
    .model-media { height: 200px; background: #0f0f0f; display: flex; align-items: center; justify-content: center; padding: 8px; }
    .model-media img { max-width: 100%; max-height: 100%; object-fit: contain; display: block; }
    .model-image.placeholder { color: #9ca3af; font-weight: 600; letter-spacing: .3px; }
  `;
    document.head.appendChild(style);
}

// Modal logic – dua tombol, konten berbeda
function setupModelsModal() {
    const modal = document.getElementById("modelsModal");
    const title = modal ? modal.querySelector("h2") : null;
    const closeBtn = document.querySelector(".close-modal");
    const modelsContainer = document.querySelector(".models-container");
    if (!modal || !modelsContainer) return;

    const openModal = () => {
        modal.style.display = "block";
        document.body.style.overflow = "hidden";
    };
    const closeModal = () => {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    };

    // VIEW ALL MODELS → 9 terlaris
    const topBtn = document.querySelector(".btn-view-all button");
    if (topBtn) {
        topBtn.addEventListener("click", () => {
            if (title) title.textContent = "Top Selling Models";
            modelsContainer.innerHTML = renderModels(topSellingModels);
            openModal();
        });
    }

    // LIHAT SEMUA → 16 koleksi penuh
    const allBtn = document.querySelector(".collection-header button");
    if (allBtn) {
        allBtn.addEventListener("click", () => {
            if (title) title.textContent = "All Exclusive Automotive Models";
            modelsContainer.innerHTML = renderModels(allModels);
            openModal();
        });
    }

    if (closeBtn) closeBtn.addEventListener("click", closeModal);
    window.addEventListener("click", (e) => {
        if (e.target === modal) closeModal();
    });
}

// Mobile menu (placeholder)
const setupMobileMenu = () => {
    const menuToggle = document.querySelector(".fa-bars");
    if (!menuToggle) return;
    menuToggle.addEventListener("click", () => {
        console.log("Mobile menu toggled");
    });
};

// Showroom locator (tetap berfungsi seperti sebelumnya)
const showrooms = [
    { name: "Showroom Purwokerto", lat: -7.43454, lng: 109.24372 },
    { name: "Showroom Jakarta Pusat", lat: -6.186486, lng: 106.834091 },
    { name: "Showroom Bandung", lat: -6.914744, lng: 107.60981 },
    { name: "Showroom Yogyakarta", lat: -7.801194, lng: 110.364917 },
];

function toRad(value) {
    return (value * Math.PI) / 180;
}
function hitungJarak(lat1, lng1, lat2, lng2) {
    const R = 6371;
    const dLat = toRad(lat2 - lat1);
    const dLon = toRad(lng2 - lng1);
    const a =
        Math.sin(dLat / 2) ** 2 +
        Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) * Math.sin(dLon / 2) ** 2;
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    return R * c;
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
            const userLat = pos.coords.latitude;
            const userLng = pos.coords.longitude;
            let nearest = null;
            let minDistance = Infinity;
            for (const showroom of showrooms) {
                const jarak = hitungJarak(
                    userLat,
                    userLng,
                    showroom.lat,
                    showroom.lng
                );
                if (jarak < minDistance) {
                    minDistance = jarak;
                    nearest = showroom;
                }
            }
            if (nearest) {
                showroomName.textContent = nearest.name;
                const embedURL = `https://maps.google.com/maps?q=${encodeURIComponent(
                    nearest.name
                )}@${nearest.lat},${nearest.lng}&z=15&output=embed`;
                mapsFrame.src = embedURL;
                const directionURL = `https://www.google.com/maps/dir/?api=1&origin=${userLat},${userLng}&destination=${nearest.lat},${nearest.lng}&travelmode=driving`;
                directionsLink.href = directionURL;
                mapsContainer.style.display = "block";
                errorMsg.textContent = "";
            } else {
                errorMsg.textContent = "Tidak ada showroom ditemukan.";
            }
        },
        () => {
            errorMsg.textContent =
                "Tidak dapat mengakses lokasi. Izinkan akses lokasi pada browser Anda.";
        }
    );
}

// Expose for inline onclick in HTML
window.cariShowroomTerdekat = cariShowroomTerdekat;

// Init
document.addEventListener("DOMContentLoaded", () => {
    setupVideoFallback();
    setupContactForm();
    setupModelsModal();
    setupMobileMenu();
    injectModalStyles();
});

// ====== Data Spesifikasi ======
const revueltoSpecs = {
    Powertrain: [
        ["Konfigurasi", "V12 + motor listrik"],
        ["Tenaga Maksimum", "1000 HP"],
        ["Transmisi", "DCT 8-percepatan"],
    ],
    Performa: [
        ["0–100 km/j", "2.5 detik"],
        ["Kecepatan Puncak", "350 km/j"],
    ],
    Dimensi: [
        ["Panjang", "4.95 m"],
        ["Lebar", "2.03 m"],
        ["Tinggi", "1.16 m"],
    ],
};

// ====== Builder HTML ======
function buildSpecsHTML(specs) {
    return Object.entries(specs)
        .map(
            ([section, rows]) => `
    <div class="specs-section">
      <h3>${section}</h3>
      <div class="specs-grid">
        ${rows
            .map(
                ([k, v]) => `
          <div class="spec-row">
            <div class="spec-key">${k}</div>
            <div class="spec-val">${v}</div>
          </div>
        `
            )
            .join("")}
      </div>
    </div>
  `
        )
        .join("");
}

// ====== Setup Modal ======
function setupSpecsModal() {
    const modal = document.getElementById("specsModal");
    const openBtn = document.getElementById("openSpecsBtn");
    const closeBtn = document.querySelector(".close-specs");
    const container = document.getElementById("specsContainer");
    if (!modal || !openBtn || !container) return;

    // Isi konten spesifikasi
    container.innerHTML = buildSpecsHTML(revueltoSpecs);

    const open = () => {
        modal.style.display = "block";
        modal.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
    };
    const close = () => {
        modal.style.display = "none";
        modal.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "auto";
    };

    openBtn.addEventListener("click", open);
    closeBtn?.addEventListener("click", close);
    window.addEventListener("click", (e) => {
        if (e.target === modal) close();
    });
    window.addEventListener("keydown", (e) => {
        if (e.key === "Escape") close();
    });
}

// Panggil saat DOM siap
document.addEventListener("DOMContentLoaded", () => {
    setupSpecsModal();
});

// ====== Data Spesifikasi Semua Model ======
const specsData = {
    "Lamborghini Revuelto": {
        Powertrain: [
            ["Konfigurasi", "V12 + motor listrik"],
            ["Tenaga Maksimum", "1000 HP"],
            ["Transmisi", "DCT 8-percepatan"],
        ],
        Performa: [
            ["0–100 km/j", "2.5 detik"],
            ["Kecepatan Puncak", "350 km/j"],
        ],
        Dimensi: [
            ["Panjang", "4.95 m"],
            ["Lebar", "2.03 m"],
            ["Tinggi", "1.16 m"],
        ],
    },
    "Lamborghini Huracan EVO": {
        Powertrain: [
            ["Konfigurasi", "V10"],
            ["Tenaga Maksimum", "640 HP"],
            ["Transmisi", "DCT 7-percepatan"],
        ],
        Performa: [
            ["0–100 km/j", "2.9 detik"],
            ["Kecepatan Puncak", "325 km/j"],
        ],
        Dimensi: [
            ["Panjang", "4.52 m"],
            ["Lebar", "1.93 m"],
            ["Tinggi", "1.16 m"],
        ],
    },
    // Tambahkan spesifikasi model lain di sini...
};

// ====== Builder HTML Spesifikasi ======
function buildSpecsHTML(specs) {
    return Object.entries(specs)
        .map(
            ([section, rows]) => `
    <div class="specs-section">
      <h3>${section}</h3>
      <div class="specs-grid">
        ${rows
            .map(
                ([k, v]) => `
          <div class="spec-row">
            <div class="spec-key">${k}</div>
            <div class="spec-val">${v}</div>
          </div>
        `
            )
            .join("")}
      </div>
    </div>
  `
        )
        .join("");
}

// ====== Render Models dengan tombol Spesifikasi ======
function renderModelsWithSpecs(models) {
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
          <button 
            class="model-btn spec-btn"
            data-model="${model.name}"
          >
            SPESIFIKASI
          </button>
        </div>
      </div>`;
        })
        .join("");
}

// ====== Setup Modal Spesifikasi Dinamis ======
function setupSpecsModal() {
    const modal = document.getElementById("specsModal");
    const container = document.getElementById("specsContainer");
    const closeBtn = document.querySelector(".close-specs");
    if (!modal || !container) return;

    const open = (modelName) => {
        const specs = specsData[modelName];
        if (!specs) {
            container.innerHTML = `<p>Tidak ada data spesifikasi untuk ${modelName}</p>`;
        } else {
            container.innerHTML = buildSpecsHTML(specs);
        }
        modal.style.display = "block";
        modal.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
    };
    const close = () => {
        modal.style.display = "none";
        modal.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "auto";
    };

    // Delegasi event ke semua tombol spesifikasi
    document.body.addEventListener("click", (e) => {
        if (e.target.classList.contains("spec-btn")) {
            const modelName = e.target.dataset.model;
            open(modelName);
        }
    });

    closeBtn?.addEventListener("click", close);
    window.addEventListener("click", (e) => {
        if (e.target === modal) close();
    });
    window.addEventListener("keydown", (e) => {
        if (e.key === "Escape") close();
    });
}

// ====== Ubah tombol utama SPESIFIKASI di section Revuelto ======
function setupHeroSpecsButton() {
    const openSpecsBtn = document.getElementById("openSpecsBtn");
    const modelsModal = document.getElementById("modelsModal");
    const title = modelsModal.querySelector("h2");
    const modelsContainer = modelsModal.querySelector(".models-container");

    if (!openSpecsBtn) return;

    openSpecsBtn.addEventListener("click", () => {
        if (title) title.textContent = "Top Selling Models - Spesifikasi";
        modelsContainer.innerHTML = renderModelsWithSpecs(topSellingModels);
        modelsModal.style.display = "block";
        document.body.style.overflow = "hidden";
    });
}

// ====== Init ======
document.addEventListener("DOMContentLoaded", () => {
    setupVideoFallback();
    setupContactForm();
    setupModelsModal();
    setupMobileMenu();
    injectModalStyles();
    setupSpecsModal();
    setupHeroSpecsButton();
});
