// Define the cache name
const CACHE_NAME = 'Oyin Eyinade PWA Cache';

// List of URLs to cache
const urlsToCache = [
    // '/',
    // '/assets/css/style.css',
    // 'assets/vendor/purecounter/purecounter_vanilla.js',
    // 'assets/vendor/aos/aos.js',
    // 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
    // 'assets/vendor/glightbox/js/glightbox.min.js',
    // 'assets/vendor/isotope-layout/isotope.pkgd.min.js',
    // 'assets/vendor/swiper/swiper-bundle.min.js',
    // 'assets/vendor/typed.js/typed.umd.js',
    // 'assets/vendor/waypoints/noframework.waypoints.js',
    // 'assets/vendor/php-email-form/validate.js',
    // 'assets/js/main.js',
    // '/images/book1.jpeg',
    // '/images/book2.jpeg',
    // '/images/book3.jpeg',
    // '/images/book4.jpeg',
    // '/images/event1.jpeg',
    // '/images/event2.jpeg',
    // '/images/event3.jpeg',
    // '/images/event4.jpeg',
    // '/images/event5.jpeg',
    // '/images/pages/how to sex educate a child  (2)1024_1.jpg',
    // '/images/pages/Sex Education For Young Girls1024_0.jpg',
    // '/images/pages/WHAT EVERY TEENGIRL NEEDS TO KNOW1024_1.jpg',
];

// Install the service worker and cache assets
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                return cache.addAll(urlsToCache);
            })
    );
});

// Fetch and serve assets from cache
self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
    );
});
