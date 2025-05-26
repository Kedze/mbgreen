<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<div class="relative h-[40vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="./images/hero/backg.jpg" alt="Gallery" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-800/70 to-black/50"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 w-full z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white leading-tight text-shadow-lg">
            Our <span class="text-green-400">Gallery</span>
        </h1>
        <p class="text-lg md:text-xl text-white text-shadow max-w-2xl">
            Explore our collection of agricultural success stories through photos and videos
        </p>
    </div>
</div>

<!-- Gallery Filter -->
<div class="bg-white sticky top-0 z-20 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <div class="flex flex-col gap-4">
            <!-- Content Type Filter -->
            
            
            <!-- Service Filter -->
            <div class="flex flex-wrap gap-4 justify-center">
                <button class="service-filter-btn active" data-service="all">
                    All Photos
                </button>
                <button class="service-filter-btn" data-service="climate-smart">
                    Climate-Smart Agriculture
                </button>
                <button class="service-filter-btn" data-service="agro-input">
                    Agro Input Distribution
                </button>
                <button class="service-filter-btn" data-service="training">
                    Training & Capacity Building
                </button>
                <button class="service-filter-btn" data-service="consulting">
                    Agribusiness Consulting
                </button>
                <button class="service-filter-btn" data-service="farm-management">
                    Farm Management
                </button>
                <button class="service-filter-btn" data-service="soil-conservation">
                    Soil Conservation
                </button>
                <button class="service-filter-btn" data-service="seedling">
                    Seedling Production
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Grid -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="gallery-grid">
            <!-- First Section: Photos (1-4) -->
            <div class="gallery-item photos" data-type="photos" data-service="training">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <img src="images/gallery/.jpg" alt="Farm Management" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="view-image bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                View Image
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Farm Management Training</h3>
                        <p class="text-gray-600 text-sm mt-1">Training session with local farmers</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item photos" data-type="photos" data-service="climate-smart">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <img src="images/gallery/.jpg" alt="Local Farmer" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="view-image bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                View Image
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Local Farmer Success</h3>
                        <p class="text-gray-600 text-sm mt-1">Portrait of a successful local farmer</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item photos" data-type="photos" data-service="climate-smart">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <img src="images/gallery/.jpg" alt="Sustainable Farming" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="view-image bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                View Image
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Sustainable Farming</h3>
                        <p class="text-gray-600 text-sm mt-1">Eco-friendly farming practices</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item photos" data-type="photos" data-service="training">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <img src="images/gallery/.jpg" alt="Training Workshop" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="view-image bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                View Image
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Training Workshop</h3>
                        <p class="text-gray-600 text-sm mt-1">Knowledge sharing session</p>
                    </div>
                </div>
            </div>

            <!-- Middle Section: Videos (5-8) -->
            <div class="gallery-item videos" data-type="videos" data-service="farm-management">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <video class="w-full h-full object-cover" poster="images/gallery/.jpg">
                            <source src="images/gallery/videos/The Future of Agriculture Technology is Now.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="play-video bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                Play Video
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Modern Farming Techniques</h3>
                        <p class="text-gray-600 text-sm mt-1">Demonstration of sustainable methods</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item videos" data-type="videos" data-service="farm-management">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <video class="w-full h-full object-cover" poster="images/gallery/.jpg">
                            <source src="images/gallery/videos/Smart Farming.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="play-video bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                Play Video
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Smart Farming Solutions</h3>
                        <p class="text-gray-600 text-sm mt-1">Technology in agriculture</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item videos" data-type="videos" data-service="climate-smart">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <video class="w-full h-full object-cover" poster="images/gallery/.jpg">
                            <source src="images/gallery/videos/Sustainable Agriculture.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="play-video bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                Play Video
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Sustainable Agriculture</h3>
                        <p class="text-gray-600 text-sm mt-1">Future of farming</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item videos" data-type="videos" data-service="consulting">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <video class="w-full h-full object-cover" poster="images/gallery/.jpg">
                            <source src="images/gallery/videos/Agricultural Innovation.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="play-video bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                Play Video
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Agricultural Innovation</h3>
                        <p class="text-gray-600 text-sm mt-1">New farming technologies</p>
                    </div>
                </div>
            </div>

            <!-- Last Section: Photos (9-12) -->
            <div class="gallery-item photos" data-type="photos" data-service="agro-input">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <img src="images/gallery/.jpg" alt="Crop Innovation" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="view-image bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                View Image
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Crop Innovation</h3>
                        <p class="text-gray-600 text-sm mt-1">Research and development</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item photos" data-type="photos" data-service="soil-conservation">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <img src="images/gallery/.jpg" alt="Community Farming" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="view-image bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                View Image
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Community Farming</h3>
                        <p class="text-gray-600 text-sm mt-1">Collaborative agriculture</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item photos" data-type="photos" data-service="seedling">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <img src="images/gallery.jpg" alt="Organic Farming" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="view-image bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                View Image
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Organic Farming</h3>
                        <p class="text-gray-600 text-sm mt-1">Natural farming methods</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item photos" data-type="photos" data-service="training">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative aspect-video">
                        <img src="images/gallery/g8.jpg" alt="Agricultural Education" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="view-image bg-white/20 backdrop-blur-sm px-6 py-2 rounded-lg text-white hover:bg-white/30 transition-colors">
                                View Image
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Agricultural Education</h3>
                        <p class="text-gray-600 text-sm mt-1">Training the next generation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lightbox Modal for Images -->
<div id="lightbox" class="fixed inset-0 bg-black/90 z-50 hidden">
    <button class="absolute top-4 right-4 text-white text-4xl hover:text-gray-300" id="close-lightbox">&times;</button>
    <div class="flex items-center justify-center h-full">
        <img src="" alt="" id="lightbox-image" class="max-h-[90vh] max-w-[90vw] object-contain">
    </div>
</div>

<!-- Video Modal -->
<div id="video-modal" class="fixed inset-0 bg-black/90 z-50 hidden">
    <button class="absolute top-4 right-4 text-white text-4xl hover:text-gray-300" id="close-video">&times;</button>
    <div class="flex items-center justify-center h-full">
        <div class="w-full max-w-4xl aspect-video">
            <video id="modal-video" controls class="w-full h-full">
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>

<!-- Update custom styles -->
<style>
.filter-btn, .service-filter-btn {
    padding: 0.5rem 1.5rem;
    border-radius: 0.5rem;
    font-weight: 600;
    color: #1f2937;
    transition: all 0.3s;
    background-color: #f3f4f6;
}

.filter-btn:hover, .service-filter-btn:hover {
    background-color: #e5e7eb;
}

.filter-btn.active, .service-filter-btn.active {
    background-color: #059669;
    color: white;
}

.gallery-item {
    opacity: 1;
    transition: all 0.3s;
}

.gallery-item.hidden {
    display: none;
    opacity: 0;
}

.service-filter-btn {
    font-size: 0.875rem;
    padding: 0.4rem 1rem;
}
</style>

<!-- Update JavaScript for gallery functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const serviceFilterButtons = document.querySelectorAll('.service-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    let currentType = 'all';
    let currentService = 'all';

    function updateGallery() {
        galleryItems.forEach(item => {
            const typeMatch = currentType === 'all' || item.dataset.type === currentType;
            const serviceMatch = currentService === 'all' || item.dataset.service === currentService;
            
            if (typeMatch && serviceMatch) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }

    // Content type filter
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            currentType = button.dataset.type;
            updateGallery();
        });
    });

    // Service filter
    serviceFilterButtons.forEach(button => {
        button.addEventListener('click', () => {
            serviceFilterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            currentService = button.dataset.service;
            updateGallery();
        });
    });

    // Image lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeLightbox = document.getElementById('close-lightbox');

    document.querySelectorAll('.view-image').forEach(button => {
        button.addEventListener('click', (e) => {
            const img = e.target.closest('.gallery-item').querySelector('img');
            lightboxImage.src = img.src;
            lightbox.classList.remove('hidden');
        });
    });

    closeLightbox.addEventListener('click', () => {
        lightbox.classList.add('hidden');
    });

    // Video modal functionality
    const videoModal = document.getElementById('video-modal');
    const modalVideo = document.getElementById('modal-video');
    const closeVideo = document.getElementById('close-video');

    document.querySelectorAll('.play-video').forEach(button => {
        button.addEventListener('click', (e) => {
            const video = e.target.closest('.gallery-item').querySelector('video');
            modalVideo.src = video.querySelector('source').src;
            videoModal.classList.remove('hidden');
            modalVideo.play();
        });
    });

    closeVideo.addEventListener('click', () => {
        videoModal.classList.add('hidden');
        modalVideo.pause();
    });

    // Close modals when clicking outside
    [lightbox, videoModal].forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                if (modal === videoModal) {
                    modalVideo.pause();
                }
            }
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?> 