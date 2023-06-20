// Installing service worker
const CACHE_NAME  = 'ppdb-sman9tangerang-sch-id';

/* Add relative URL of all the static content you want to store in
 * cache storage (this will help us use our app offline)*/
let resourcesToCache = ["vendor/bootstrap/css/bootstrap.css", "assets/css/style.css", "assets/js/script.js", "assets/js/tikor.js", "index.php"];

self.addEventListener("install", e=>{
    e.waitUntil(
        caches.open(CACHE_NAME).then(cache =>{
            return cache.addAll(resourcesToCache);
        }).then(self.skipWaiting())
    );
});

// Cache and return requests
self.addEventListener('fetch', function(event) {
    event.respondWith(
        fetch(event.request)
        .catch(() => {
            return caches.open(CACHE_NAME)
            .then((cache) => {
                return cache.match(event.request)
            })
        })
    )
})

// Update a service worker
const cacheWhitelist = [ CACHE_NAME ];
self.addEventListener('activate', event => {
    event.waitUntil(
      caches.keys().then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName);
            }
          })
        );
      }).then(() => self.clients.claim())
    );
});