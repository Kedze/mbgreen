<?php include 'includes/header.php'; ?>

<div class="max-w-7xl mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-green-800 mb-6">Get in Touch</h2>
            <form action="process_contact.php" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
                    <input type="tel" id="phone" name="phone"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="service" class="block text-gray-700 font-bold mb-2">Service Interested In</label>
                    <select id="service" name="service" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                        <option value="">Select a service</option>
                        <option value="consulting">Agriculture Consulting</option>
                        <option value="management">Farm Management</option>
                        <option value="training">Training Programs</option>
                        <option value="inputs">Agro Input Distribution</option>
                        <option value="seedlings">Seedlings Nursery</option>
                        <option value="agroforestry">Agroforestry</option>
                    </select>
                </div>
                
                <div>
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500"></textarea>
                </div>
                
                <button type="submit" 
                    class="w-full bg-green-600 text-white py-3 px-6 rounded-lg font-bold hover:bg-green-700 transition duration-300">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Contact Information -->
        <div class="space-y-8">
            <div class="bg-green-50 p-8 rounded-lg">
                <h2 class="text-3xl font-bold text-green-800 mb-6">Contact Information</h2>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <i class="fas fa-map-marker-alt text-green-600 mt-1 mr-4 text-xl"></i>
                        <div>
                            <h3 class="font-bold">Address</h3>
                            <p class="text-gray-600">Cecilia Johnson Street<br>
                                BS-0035-6147 Sunyani,<br>
                                Ghana</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-phone text-green-600 mt-1 mr-4 text-xl"></i>
                        <div>
                            <h3 class="font-bold">Phone</h3>
                            <p class="text-gray-600">054 174 9791 | 024 473 2512</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-envelope text-green-600 mt-1 mr-4 text-xl"></i>
                        <div>
                            <h3 class="font-bold">Email</h3>
                            <p class="text-gray-600">info@mbgreenagroconsult.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Business Hours -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-green-800 mb-6">Business Hours</h2>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="font-bold">Monday - Friday</span>
                        <span class="text-gray-600">8:00 AM - 5:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-bold">Saturday</span>
                        <span class="text-gray-600">9:00 AM - 2:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-bold">Sunday</span>
                        <span class="text-gray-600">Closed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 