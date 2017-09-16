var CACHE_NAME = 'static-v1';

self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function (cache) {
      return cache.addAll([
        '/',
        '/index.html',
        '/assets/css/animate.css',
        '/assets/css/animate.min.css',
        '/assets/css/bootstrap.min.css',
        '/assets/css/inputcss.css',
        '/assets/css/normalize.css',
        '/assets/css/responsive.css',
        '/assets/css/style.css',
        '/assets/js/bootstrap.min.js',
        '/assets/js/jquery-3.2.1.min.js',
        '/assets/js/plugins.js',
        '/assets/js/script.js',
      ]);
    })
  )
});

self.addEventListener('activate', function activator(event) {
  event.waitUntil(
    caches.keys().then(function (keys) {
      return Promise.all(keys
        .filter(function (key) {
          return key.indexOf(CACHE_NAME) !== 0;
        })
        .map(function (key) {
          return caches.delete(key);
        })
      );
    })
  );
});

self.addEventListener('fetch', function (event) {
  event.respondWith(
    caches.match(event.request).then(function (cachedResponse) {
      return cachedResponse || fetch(event.request);
    })
  );
});