self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('airhorner').then(function(cache) {
     return cache.addAll([
       '/',
       '/index.html',
     ]);
   })
 );
});
 self.addEventListener('fetch',() => console.log("fetch"));
