// slider.js
(function() {
    // DAFTAR FOTO - GANTI DENGAN PATH FOTO ANDA
    const images = [
        "image/porto/foto1.jpeg",
        "image/porto/foto2.jpeg",
        "image/porto/foto3.jpeg",
        "image/porto/foto4.jpeg",
        "image/porto/foto5.jpeg",
        "image/porto/foto6.jpeg",
        "image/porto/foto7.jpeg",
        "image/porto/foto8.jpeg"
    ];

    let currentIndex = 0;
    let sliderImage, sliderIndicators, thumbnailContainer;

    // Fungsi untuk inisialisasi elemen
    function initElements() {
        sliderImage = document.getElementById('sliderImage');
        sliderIndicators = document.getElementById('sliderIndicators');
        thumbnailContainer = document.getElementById('thumbnailContainer');
    }

    // Buat indikator dan thumbnail
    function createIndicators() {
        if (sliderIndicators) {
            sliderIndicators.innerHTML = '';
            images.forEach((_, index) => {
                const dot = document.createElement('div');
                dot.className = `w-2 h-2 rounded-full cursor-pointer transition-all ${index === currentIndex ? 'bg-violet-500 w-6' : 'bg-white/50'}`;
                dot.onclick = () => goToSlide(index);
                sliderIndicators.appendChild(dot);
            });
        }

        if (thumbnailContainer) {
            thumbnailContainer.innerHTML = '';
            images.forEach((img, index) => {
                const thumb = document.createElement('img');
                thumb.src = img;
                thumb.className = `h-16 w-full object-cover rounded-lg cursor-pointer border-2 transition-all ${index === currentIndex ? 'border-violet-500' : 'border-transparent opacity-70 hover:opacity-100'}`;
                thumb.onclick = () => goToSlide(index);
                thumbnailContainer.appendChild(thumb);
            });
        }
    }

    // Fungsi untuk ganti slide
    function changeSlide() {
        if (sliderImage) {
            sliderImage.style.opacity = '0';
            setTimeout(() => {
                sliderImage.src = images[currentIndex];
                sliderImage.style.opacity = '1';
                createIndicators(); // Update indikator
            }, 300);
        }
    }

    // Fungsi navigasi (ekspos ke global scope)
    window.nextSlide = function() {
        currentIndex = (currentIndex + 1) % images.length;
        changeSlide();
    };

    window.prevSlide = function() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        changeSlide();
    };

    function goToSlide(index) {
        currentIndex = index;
        changeSlide();
    }

    // Inisialisasi saat halaman load
    function initSlider() {
        initElements();
        // Di fungsi changeSlide() atau inisialisasi, tambahkan:
sliderImage.style.objectFit = 'contain'; // atau 'cover' dengan posisi
        
        if (sliderImage && images.length > 0) {
            // Set gambar pertama
            sliderImage.src = images[currentIndex];
            sliderImage.style.opacity = '1';
            
            // Buat indikator
            createIndicators();
            
            // Tambahkan event listener untuk keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowLeft') prevSlide();
                if (e.key === 'ArrowRight') nextSlide();
            });
            
            console.log('Slider initialized with', images.length, 'images');
        } else {
            console.error('Slider image element not found or no images available');
        }
    }

    // Tunggu DOM siap
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSlider);
    } else {
        initSlider();
    }
})();
