document.addEventListener('DOMContentLoaded', function () {

    /* ===== Page loader ===== */
    var pageLoader = document.getElementById('pageLoader');
    if (pageLoader) {
        var loaderStart = performance.now();
        var minDisplay = 600;

        window.addEventListener('load', function () {
            var remaining = Math.max(0, minDisplay - (performance.now() - loaderStart));
            setTimeout(function () {
                pageLoader.classList.add('is-hidden');
                setTimeout(function () { pageLoader.remove(); }, 650);
            }, remaining);
        });
    }

    /* ===== Cookie consent + map loading ===== */
    var cookieBanner = document.getElementById('cookieBanner');
    var mapWrapper = document.getElementById('mapWrapper');
    var mapPlaceholder = document.getElementById('mapPlaceholder');
    var loadMapBtn = document.getElementById('loadMapBtn');
    var cookieAccept = document.getElementById('cookieAccept');
    var cookieDecline = document.getElementById('cookieDecline');

    function loadMap() {
        if (!mapWrapper || mapWrapper.querySelector('iframe')) return;
        var iframe = document.createElement('iframe');
        iframe.src = mapWrapper.getAttribute('data-map-src');
        iframe.width = '100%';
        iframe.height = '450';
        iframe.style.border = '0';
        iframe.allowFullscreen = true;
        iframe.loading = 'lazy';
        iframe.referrerPolicy = 'no-referrer-when-downgrade';
        iframe.title = mapWrapper.getAttribute('data-map-title') || 'Mapa';
        if (mapPlaceholder) mapPlaceholder.remove();
        mapWrapper.appendChild(iframe);
    }

    var cookieConsent = localStorage.getItem('cookieConsent');
    if (cookieConsent === 'accepted') {
        loadMap();
    } else if (cookieBanner && cookieConsent !== 'declined') {
        cookieBanner.classList.add('visible');
    }

    if (loadMapBtn) {
        loadMapBtn.addEventListener('click', function () {
            localStorage.setItem('cookieConsent', 'accepted');
            if (cookieBanner) cookieBanner.classList.remove('visible');
            loadMap();
        });
    }
    if (cookieAccept) {
        cookieAccept.addEventListener('click', function () {
            localStorage.setItem('cookieConsent', 'accepted');
            cookieBanner.classList.remove('visible');
            loadMap();
        });
    }
    if (cookieDecline) {
        cookieDecline.addEventListener('click', function () {
            localStorage.setItem('cookieConsent', 'declined');
            cookieBanner.classList.remove('visible');
        });
    }

    /* ===== Mobile navigation ===== */
    var navToggle = document.getElementById('navToggle');
    var mainNav = document.getElementById('mainNav');

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', function () {
            var isOpen = mainNav.classList.toggle('open');
            navToggle.classList.toggle('open', isOpen);
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        mainNav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mainNav.classList.remove('open');
                navToggle.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    /* ===== Cubic ease-in-out smooth scroll (800ms) ===== */
    function easeInOutCubic(t) {
        return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
    }

    function smoothScrollTo(targetY, duration) {
        var startY = window.scrollY;
        var distance = targetY - startY;
        var startTime = null;

        function step(timestamp) {
            if (startTime === null) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            window.scrollTo(0, startY + distance * easeInOutCubic(progress));
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    var headerEl = document.querySelector('.site-header');
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            var targetId = link.getAttribute('href').slice(1);
            var targetEl = document.getElementById(targetId);
            if (!targetEl) return;
            e.preventDefault();

            var targetY;
            if (targetId === 'topo') {
                targetY = 0;
            } else {
                var headerHeight = headerEl ? headerEl.offsetHeight : 0;
                targetY = targetEl.getBoundingClientRect().top + window.scrollY - headerHeight;
            }
            smoothScrollTo(Math.max(targetY, 0), 800);
        });
    });

    /* ===== Highlight active nav link on scroll ===== */
    var sections = document.querySelectorAll('main .section, .hero');
    var navLinks = document.querySelectorAll('.main-nav a');

    function onScrollSpy() {
        var scrollPos = window.scrollY + 120;
        var currentId = '';
        sections.forEach(function (section) {
            if (section.offsetTop <= scrollPos) {
                currentId = section.id;
            }
        });
        navLinks.forEach(function (link) {
            link.classList.toggle('active', link.getAttribute('href') === '#' + currentId);
        });
    }
    window.addEventListener('scroll', onScrollSpy, { passive: true });
    onScrollSpy();

    /* ===== Menu tabs ===== */
    var tabs = document.querySelectorAll('.menu-tab');
    var panels = document.querySelectorAll('.menu-panel');

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var targetId = tab.getAttribute('data-target');
            tabs.forEach(function (t) { t.classList.remove('active'); });
            panels.forEach(function (p) { p.classList.remove('active'); });
            tab.classList.add('active');
            var targetEl = document.getElementById(targetId);
            if (targetEl) targetEl.classList.add('active');
        });
    });

    /* ===== Site & Menu language toggle (PT/EN with Flag SVGs) ===== */
    var langToggles = document.querySelectorAll('.lang-toggle');

    var flagUkSvg = '<svg class="flag-icon" viewBox="0 0 640 480" width="20" height="15" aria-hidden="true"><path fill="#012169" d="M0 0h640v480H0z"/><path fill="#FFF" d="m75 0 245 180L565 0h75v55L415 240l225 185v55h-75L320 300 75 480H0v-55l225-185L0 55V0h75z"/><path fill="#C8102E" d="m424 286 216 178v16h-40L384 302l40-16zM640 0v16L424 194l-16-26L616 0h24zM0 480v-16l216-178 16 26L16 480H0zM0 0v16l216 178-40 16L0 32v-32z"/><path fill="#FFF" d="M240 0v480h160V0H240zM0 160v160h640V160H0z"/><path fill="#C8102E" d="M272 0v480h96V0h-96zM0 192v96h640v-96H0z"/></svg>';
    var flagPtSvg = '<svg class="flag-icon" viewBox="0 0 640 480" width="20" height="15" aria-hidden="true"><path fill="#006600" d="M0 0h256v480H0z"/><path fill="#ff0000" d="M256 0h384v480H256z"/><circle cx="256" cy="240" r="96" fill="#ffcc00"/><circle cx="256" cy="240" r="80" fill="#fff" stroke="#003399" stroke-width="6"/><path fill="#003399" d="M256 185v110c30 0 50-20 50-55s-20-55-50-55z"/></svg>';

    function applyLang(lang) {
        document.querySelectorAll('[data-pt]').forEach(function (el) {
            var text = lang === 'en' ? el.getAttribute('data-en') : el.getAttribute('data-pt');
            if (text !== null) el.textContent = text;
        });

        var galleryToggle = document.getElementById('galleryToggle');
        if (galleryToggle) {
            var isExpanded = galleryToggle.classList.contains('is-expanded');
            var moreText = lang === 'en' ? (galleryToggle.getAttribute('data-more-en') || 'View more photos (+17)') : (galleryToggle.getAttribute('data-more-pt') || 'Ver mais fotos (+17)');
            var lessText = lang === 'en' ? (galleryToggle.getAttribute('data-less-en') || 'View less photos') : (galleryToggle.getAttribute('data-less-pt') || 'Ver menos fotos');
            galleryToggle.setAttribute('data-more-text', moreText);
            galleryToggle.setAttribute('data-less-text', lessText);
            galleryToggle.textContent = isExpanded ? lessText : moreText;
        }

        langToggles.forEach(function (toggle) {
            toggle.setAttribute('data-lang', lang);
            if (lang === 'en') {
                toggle.innerHTML = flagPtSvg + ' <span>PT</span>';
                toggle.setAttribute('title', 'Mudar para Português');
            } else {
                toggle.innerHTML = flagUkSvg + ' <span>EN</span>';
                toggle.setAttribute('title', 'Switch to English');
            }
        });

        document.documentElement.setAttribute('lang', lang === 'en' ? 'en' : 'pt-PT');
        localStorage.setItem('siteLang', lang);

        if (typeof window.updateOpenStatus === 'function') {
            window.updateOpenStatus();
        }
    }

    langToggles.forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            var current = toggle.getAttribute('data-lang') || 'pt';
            var next = current === 'en' ? 'pt' : 'en';
            applyLang(next);
        });
    });

    var initialLang = localStorage.getItem('siteLang') || localStorage.getItem('menuLang') || 'pt';
    applyLang(initialLang);

    /* ===== Beer taps ===== */
    document.querySelectorAll('.beer-tap').forEach(function (tap) {
        function pour() {
            if (tap.classList.contains('is-pouring')) return;
            tap.classList.add('is-pouring');
            setTimeout(function () { tap.classList.remove('is-pouring'); }, 2400);
        }
        tap.addEventListener('click', pour);
        tap.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); pour(); }
        });
    });

    /* ===== Gallery show more/less ===== */
    var galleryToggle = document.getElementById('galleryToggle');
    var galleryGrid = document.getElementById('galleryGrid');

    if (galleryToggle && galleryGrid) {
        var hiddenItems = Array.from(galleryGrid.querySelectorAll('.gallery-item-hidden'));

        galleryToggle.addEventListener('click', function () {
            var expanded = galleryToggle.classList.toggle('is-expanded');
            hiddenItems.forEach(function (item) {
                item.classList.toggle('gallery-item-hidden', !expanded);
            });
            galleryToggle.textContent = expanded
                ? galleryToggle.getAttribute('data-less-text')
                : galleryToggle.getAttribute('data-more-text');

            if (expanded) {
                hiddenItems.forEach(function (item) { item.classList.add('reveal-visible'); });
            } else {
                galleryGrid.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    }

    /* ===== Scroll reveal (fade-up) ===== */
    var revealEls = document.querySelectorAll('.reveal');
    if (revealEls.length && 'IntersectionObserver' in window) {
        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach(function (el) { revealObserver.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('reveal-visible'); });
    }

    /* ===== Gallery lightbox ===== */
    var galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
    var lightbox = document.getElementById('lightbox');
    var lightboxImage = document.getElementById('lightboxImage');
    var lightboxClose = document.getElementById('lightboxClose');
    var lightboxPrev = document.getElementById('lightboxPrev');
    var lightboxNext = document.getElementById('lightboxNext');
    var currentIndex = 0;

    function openLightbox(index) {
        currentIndex = index;
        var img = galleryItems[index].querySelector('img');
        lightboxImage.src = img.src;
        lightboxImage.alt = img.alt;
        lightbox.classList.add('open');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('open');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    function showRelative(offset) {
        currentIndex = (currentIndex + offset + galleryItems.length) % galleryItems.length;
        openLightbox(currentIndex);
    }

    galleryItems.forEach(function (item, index) {
        item.addEventListener('click', function () { openLightbox(index); });
    });

    if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
    if (lightboxPrev) lightboxPrev.addEventListener('click', function () { showRelative(-1); });
    if (lightboxNext) lightboxNext.addEventListener('click', function () { showRelative(1); });

    if (lightbox) {
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) closeLightbox();
        });
    }

    document.addEventListener('keydown', function (e) {
        if (!lightbox || !lightbox.classList.contains('open')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') showRelative(-1);
        if (e.key === 'ArrowRight') showRelative(1);
    });

    /* ===== Open now / closed status ===== */
    var openStatus = document.getElementById('openStatus');
    if (openStatus) {
        var diasSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];

        function toMinutes(hhmm) {
            var parts = hhmm.trim().split(':');
            return parseInt(parts[0], 10) * 60 + parseInt(parts[1], 10);
        }

        function parseRanges(horasStr) {
            if (!horasStr || horasStr.toLowerCase() === 'encerrado') return [];
            return horasStr.split(' e ').map(function (range) {
                var parts = range.split(/[–-]/);
                return { start: toMinutes(parts[0]), end: toMinutes(parts[1]) };
            });
        }

        window.updateOpenStatus = function () {
            var horarios = JSON.parse(openStatus.getAttribute('data-horarios'));
            var now = new Date();
            var todayName = diasSemana[now.getDay()];
            var nowMinutes = now.getHours() * 60 + now.getMinutes();
            var todayEntry = horarios.find(function (h) { return h.dia === todayName; });
            var isOpen = false;

            if (todayEntry) {
                var ranges = parseRanges(todayEntry.horas);
                isOpen = ranges.some(function (r) { return nowMinutes >= r.start && nowMinutes < r.end; });
            }

            var currentLang = localStorage.getItem('siteLang') || 'pt';
            var openLabel = currentLang === 'en' ? 'Open now' : 'Aberto agora';
            var closedLabel = currentLang === 'en' ? 'Closed now' : 'Fechado agora';

            openStatus.classList.toggle('is-open', isOpen);
            openStatus.classList.toggle('is-closed', !isOpen);
            openStatus.querySelector('.status-text').textContent = isOpen ? openLabel : closedLabel;
        };

        window.updateOpenStatus();
        setInterval(window.updateOpenStatus, 60000);
    }

    /* ===== Hero parallax ===== */
    var heroEl = document.getElementById('hero');
    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (heroEl && !prefersReducedMotion) {
        var updateParallax = function () {
            var rect = heroEl.getBoundingClientRect();
            if (rect.bottom > 0 && rect.top < window.innerHeight) {
                heroEl.style.backgroundPositionY = (window.scrollY * 0.3) + 'px';
            }
        };
        window.addEventListener('scroll', updateParallax, { passive: true });
        updateParallax();
    }

});
