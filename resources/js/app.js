import './bootstrap';

const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#main-nav');
const closeMenu = () => {
    menuButton?.setAttribute('aria-expanded', 'false');
    menuButton?.setAttribute('aria-label', 'Open navigation');
    navigation?.classList.remove('is-open');
};
menuButton?.addEventListener('click', () => {
    const open = menuButton.getAttribute('aria-expanded') !== 'true';
    menuButton.setAttribute('aria-expanded', String(open));
    menuButton.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    navigation?.classList.toggle('is-open', open);
});
navigation?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && menuButton?.getAttribute('aria-expanded') === 'true') {
        closeMenu();
        menuButton.focus();
    }
});
document.addEventListener('click', event => {
    if (!event.target.closest('.site-header')) closeMenu();
});
window.matchMedia('(min-width: 801px)').addEventListener('change', event => {
    if (event.matches) closeMenu();
});

const filterButtons = document.querySelectorAll('[data-filter]');
filterButtons.forEach(button => button.addEventListener('click', () => {
    filterButtons.forEach(item => {
        const selected = item === button;
        item.classList.toggle('active', selected);
        item.setAttribute('aria-pressed', String(selected));
    });
    document.querySelectorAll('[data-category]').forEach(project => {
        project.hidden = button.dataset.filter !== 'all' && project.dataset.category !== button.dataset.filter;
    });
}));

const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
if ('IntersectionObserver' in window) {
    if (!reducedMotion.matches) {
        const revealObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('is-pending');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.05 });
        document.querySelectorAll('.section-heading, .about-layout, .stats-grid, .skills-row, .process-step, .timeline-item, .education-item, .project-card, .service-card').forEach(element => {
            element.classList.add('reveal', 'is-pending');
            revealObserver.observe(element);
        });
    }
    const sectionObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navigation?.querySelectorAll('a').forEach(link => {
                    const active = new URL(link.href).hash === `#${entry.target.id}`;
                    link.classList.toggle('is-active', active);
                    if (active) link.setAttribute('aria-current', 'location');
                    else link.removeAttribute('aria-current');
                });
            }
        });
    }, { rootMargin: '-15% 0px -65% 0px' });
    document.querySelectorAll('main section[id]').forEach(section => sectionObserver.observe(section));
}
const progress = document.querySelector('.scroll-progress');
let scheduled = false;
const updateProgress = () => {
    const scrollable = document.documentElement.scrollHeight - window.innerHeight;
    if (progress) progress.style.width = `${scrollable > 0 ? Math.min(100, window.scrollY / scrollable * 100) : 0}%`;
    scheduled = false;
};
window.addEventListener('scroll', () => {
    if (!scheduled) {
        scheduled = true;
        requestAnimationFrame(updateProgress);
    }
}, { passive: true });
updateProgress();

// The layout applies the saved theme before paint.
const themeToggle = document.querySelector('.theme-toggle');
const applyTheme = dark => {
    document.documentElement.dataset.theme = dark ? 'dark' : 'light';
    themeToggle?.setAttribute('aria-pressed', String(dark));
    if (themeToggle) {
        themeToggle.title = dark ? 'Switch to light mode' : 'Switch to dark mode';
        themeToggle.setAttribute('aria-label', themeToggle.title);
    }
    document.querySelector('meta[name="theme-color"]')?.setAttribute('content', dark ? '#101c25' : '#f1f4f3');
};
applyTheme(document.documentElement.dataset.theme === 'dark');
themeToggle?.addEventListener('click', () => {
    const dark = document.documentElement.dataset.theme !== 'dark';
    applyTheme(dark);
    try { localStorage.setItem('portfolio_theme', dark ? 'dark' : 'light'); } catch {}
});
window.addEventListener('storage', event => {
    if (event.key === 'portfolio_theme' || event.key === null) {
        applyTheme(event.newValue !== 'light');
    }
});

// Small depth response on the portrait, limited to precise pointers and motion preferences.
const portrait = document.querySelector('[data-portrait]');
const precisePointer = window.matchMedia('(hover: hover) and (pointer: fine)');
portrait?.addEventListener('pointermove', event => {
    if (reducedMotion.matches || !precisePointer.matches) return;
    const bounds = portrait.getBoundingClientRect();
    portrait.style.setProperty('--tilt-x', `${((event.clientX - bounds.left) / bounds.width - .5) * 5}deg`);
    portrait.style.setProperty('--tilt-y', `${-((event.clientY - bounds.top) / bounds.height - .5) * 5}deg`);
});
const resetPortrait = () => {
    portrait?.style.removeProperty('--tilt-x');
    portrait?.style.removeProperty('--tilt-y');
};
portrait?.addEventListener('pointerleave', resetPortrait);
reducedMotion.addEventListener('change', () => {
    resetPortrait();
    if (reducedMotion.matches) document.querySelectorAll('.is-pending').forEach(element => element.classList.remove('is-pending'));
});
