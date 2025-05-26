<?php include 'includes/header.php'; ?>

<!-- Hero Section with Slideshow -->
<div class="relative h-[70vh] flex items-center overflow-hidden" id="hero-slideshow">
    <div class="absolute inset-0 w-full h-full">
        <!-- Slide 1 -->
        <div class="slide absolute inset-0" data-slide="0">
            <img src="./images/hero/consult.jpg" alt="Agricultural Excellence" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-green-900/70 to-black/50"></div>
        </div>
        <!-- Slide 2 -->
        <div class="slide absolute inset-0" data-slide="1">
            <img src="./images/hero/hero_2.jpg" alt="Sustainable Farming" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-green-900/70 to-black/50"></div>
        </div>
        <!-- Slide 3 -->
        <div class="slide absolute inset-0" data-slide="2">
            <img src="./images/hero/fm.jpg" alt="Modern Agriculture" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-green-900/70 to-black/50"></div>
        </div>
    </div>

    <!-- Slide Content -->
    <div class="relative max-w-7xl mx-auto px-4 w-full z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white leading-tight text-shadow-lg slide-in-left">
                Championing <span class="text-green-400">Agribusiness</span> Excellence
            </h1>
            <p class="text-lg md:text-xl mb-8 text-gray-200 text-shadow slide-in-left delay-200">
                Your trusted partner in agricultural consulting and sustainable farming solutions
            </p>
            <div class="flex flex-col sm:flex-row gap-4 slide-in-left delay-400">
                <a href="contact.php" 
                   class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-green-600 text-white font-bold hover:bg-green-500 transition duration-300 shadow-lg group">
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                <a href="services.php" 
                   class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white text-green-700 font-bold hover:bg-green-50 transition duration-300 shadow-lg">
                    Our Services
                </a>
            </div>
            
            <!-- Quick Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16">
                <div class="text-center text-white fade-in delay-200">
                    <div class="text-3xl font-bold mb-1">500+</div>
                    <div class="text-sm text-gray-300">Farmers Served</div>
                </div>
                <div class="text-center text-white fade-in delay-400">
                    <div class="text-3xl font-bold mb-1">15+</div>
                    <div class="text-sm text-gray-300">Years Experience</div>
                </div>
                <div class="text-center text-white fade-in delay-600">
                    <div class="text-3xl font-bold mb-1">98%</div>
                    <div class="text-sm text-gray-300">Success Rate</div>
                </div>
                <div class="text-center text-white fade-in delay-800">
                    <div class="text-3xl font-bold mb-1">24/7</div>
                    <div class="text-sm text-gray-300">Support</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Update the Slideshow Navigation -->
    <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2 z-20">
        <button class="slide-nav active" data-slide="0"></button>
        <button class="slide-nav" data-slide="1"></button>
        <button class="slide-nav" data-slide="2"></button>
    </div>
</div>

<!-- Services Preview with New Design -->
<div class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl font-bold text-green-800 mb-4">Our Services</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Comprehensive agricultural solutions tailored to your needs
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Agriculture Consulting -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden service-card slide-in-left delay-200">
                <img src="images/services/consult.jpg" alt="Agriculture Consulting" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <i class="fas fa-handshake text-4xl text-green-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Agro Consultancy </h3>
                    <p class="text-gray-600">Expert advice for optimizing your agricultural operations</p>
                </div>
            </div>

            <!-- Farm Management -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden service-card fade-in delay-400">
                <img src="images/gallery//fms/f2.jpg" alt="Farm Management" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <i class="fas fa-tractor text-4xl text-green-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Farm Management Systems</h3>
                    <p class="text-gray-600">Comprehensive farm management solutions</p>
                </div>
            </div>

            <!-- Seedlings & Agroforestry -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden service-card slide-in-right delay-600">
                <img src="images/gallery/sdl/s2.jpg" alt="Seedlings & Agroforestry" 
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <i class="fas fa-seedling text-4xl text-green-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Seedling, Nursery & Agroforestry Solutions</h3>
                    <p class="text-gray-600">Quality seedlings and sustainable agroforestry practices</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="relative py-20 bg-green-800">
    <div class="absolute inset-0">
        <img src="images/hero/why-choose-bg.jpg" alt="" 
             class="w-full h-full object-cover opacity-10">
    </div>
    <div class="relative max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-white">Why Choose Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center text-white fade-in">
                <i class="fas fa-star text-4xl text-green-200 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Expertise & Experience</h3>
                <p class="text-green-100">A team of seasoned agricultural professionals with extensive industry knowledge.</p>
            </div>
            <div class="text-center text-white fade-in delay-200">
                <i class="fas fa-tools text-4xl text-green-200 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Customized Solutions</h3>
                <p class="text-green-100">Services tailored to meet the unique needs of each client.</p>
            </div>
            <div class="text-center text-white fade-in delay-400">
                <i class="fas fa-leaf text-4xl text-green-200 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Commitment to Sustainability</h3>
                <p class="text-green-100">A strong focus on climate-smart and environmentally friendly farming practices.</p>
            </div>
            <div class="text-center text-white fade-in delay-600">
                <i class="fas fa-network-wired text-4xl text-green-200 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Strong Network</h3>
                <p class="text-green-100">Access to a wide range of stakeholders in the agribusiness sector.</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form Section -->
<div class="relative py-24">
    <div class="absolute inset-0">
        <img src="images/hero/background_1.jpg" alt="Contact Background" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 to-black/75"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Contact Info -->
            <div class="text-white space-y-8">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-shadow-lg">
                    Let's Start Your <span class="text-green-400">Agricultural Journey</span> Together
                </h2>
                <p class="text-xl text-gray-200 mb-8">
                    Ready to transform your farming operations? Get in touch with our experts today.
                </p>
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="bg-white/10 p-3 rounded-lg">
                            <i class="fas fa-phone text-green-400 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-green-400">Phone</h3>
                            <p class="text-gray-300">054 174 9791 | 024 473 2512</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-white/10 p-3 rounded-lg">
                            <i class="fas fa-envelope text-green-400 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-green-400">Email</h3>
                            <p class="text-gray-300">info@mbgreenagroconsult.com</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-white/10 p-3 rounded-lg">
                            <i class="fas fa-location-dot text-green-400 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-green-400">Location</h3>
                            <p class="text-gray-300">Cecilia Johnson Street, Sunyani, Ghana</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-black/30 backdrop-blur-md p-8 rounded-2xl shadow-2xl">
                <form action="process_contact.php" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="relative">
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:border-green-400 transition-colors"
                                placeholder="Your Name">
                            <i class="fas fa-user absolute right-3 top-1/2 -translate-y-1/2 text-white/50"></i>
                        </div>
                        <div class="relative">
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:border-green-400 transition-colors"
                                placeholder="Email Address">
                            <i class="fas fa-envelope absolute right-3 top-1/2 -translate-y-1/2 text-white/50"></i>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <select name="services" id="services" required
                            class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white appearance-none focus:outline-none focus:border-green-400 transition-colors">
                            <option value="" class="bg-gray-800">Select Service</option>
                            <option value="consulting" class="bg-gray-800">Agriculture Consulting</option>
                            <option value="management" class="bg-gray-800">Farm Management</option>
                            <option value="training" class="bg-gray-800">Training Programs</option>
                            <option value="inputs" class="bg-gray-800">Agro Input Distribution</option>
                            <option value="seedlings" class="bg-gray-800">Seedlings Nursery</option>
                            <option value="agroforestry" class="bg-gray-800">Agroforestry</option>
                        </select>
                        <i class="fas fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-white/50"></i>
                    </div>
                    
                    <div class="relative">
                        <textarea id="message" name="message" rows="4" required
                            class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:border-green-400 transition-colors"
                            placeholder="Your Message"></textarea>
                        <i class="fas fa-message absolute right-3 top-3 text-white/50"></i>
                    </div>
                    
                    <button type="submit" 
                        class="w-full bg-green-500 hover:bg-green-600 text-white py-4 rounded-lg font-bold text-lg transition-colors duration-300 flex items-center justify-center group">
                        Send Message
                        <i class="fas fa-paper-plane ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 