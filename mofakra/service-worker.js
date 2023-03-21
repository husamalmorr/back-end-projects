var CACHE_VERSION = 'ca-v1';
var DISP_VERSION = 'ca-d-v1';
// Directory to be cached (css / js is added individually)
var resources = [
  '/',
  '/img',
  '/js',
  '/css'
];
self.addEventListener('install', function (event) {
  console.log('ServiceWorker Install');
  event.waitUntil(
    caches.open(CACHE_VERSION)
      .then(function (cache) {
        console.log('cache.addAll');
        cache.addAll(resources);
      })
  );
});
self.addEventListener('fetch', function (event) {
});
