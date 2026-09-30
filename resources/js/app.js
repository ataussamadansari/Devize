import './bootstrap';

const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#primary-navigation');

if (menuButton && navigation) {
    const closeMenu = () => {
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Open navigation');
        navigation.classList.remove('is-open');
    };

    menuButton.addEventListener('click', () => {
        const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', String(!isOpen));
        menuButton.setAttribute('aria-label', isOpen ? 'Open navigation' : 'Close navigation');
        navigation.classList.toggle('is-open', !isOpen);
    });

    navigation.addEventListener('click', (event) => {
        if (event.target.closest('a')) closeMenu();
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') closeMenu();
    });
}

const projectFilters = document.querySelectorAll('[data-project-filter]');
const projectCards = document.querySelectorAll('[data-project-category]');

if (projectFilters.length && projectCards.length) {
    projectFilters.forEach((button) => {
        button.addEventListener('click', () => {
            const selectedCategory = button.dataset.projectFilter;

            projectFilters.forEach((filter) => {
                const isActive = filter === button;
                filter.classList.toggle('is-active', isActive);
                filter.setAttribute('aria-pressed', String(isActive));
            });

            projectCards.forEach((card) => {
                const categories = card.dataset.projectCategory.split(' ');
                card.hidden = selectedCategory !== 'all' && !categories.includes(selectedCategory);
            });
        });
    });
}

document.querySelectorAll('[data-ajax-form]').forEach((form) => {
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const feedback = form.parentElement.querySelector('[data-form-feedback]');
        const submitButton = form.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.textContent.trim();

        feedback.hidden = false;
        feedback.className = 'mb-6 rounded-md border border-blue-300/20 bg-blue-300/[.06] px-4 py-3 text-xs leading-5 text-blue-100';
        feedback.textContent = 'Sending your message…';
        submitButton.disabled = true;
        submitButton.textContent = 'Sending…';

        try {
            const response = await fetch(form.action, {
                method: form.method,
                body: new FormData(form),
                headers: {
                    Accept: 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
            });
            const result = await response.json();

            if (!response.ok) {
                const validationMessages = Object.values(result.errors ?? {}).flat();
                throw new Error(validationMessages.join(' ') || result.message || 'Could not send your message. Please try again.');
            }

            feedback.className = 'mb-6 rounded-md border border-emerald-300/20 bg-emerald-300/[.06] px-4 py-3 text-xs leading-5 text-emerald-200';
            feedback.textContent = result.message;
            form.reset();
        } catch (error) {
            feedback.className = 'mb-6 rounded-md border border-rose-300/20 bg-rose-300/[.06] px-4 py-3 text-xs leading-5 text-rose-200';
            feedback.textContent = error.message || 'Could not send your message. Please try again.';
        } finally {
            submitButton.disabled = false;
            submitButton.textContent = originalButtonText;
        }
    });
});

const blogFilters = document.querySelectorAll('[data-blog-filter]');
const blogCards = document.querySelectorAll('[data-blog-card]');
const blogSearch = document.querySelector('[data-blog-search]');
const blogEmptyState = document.querySelector('[data-blog-empty]');

if (blogCards.length) {
    let selectedBlogCategory = 'all';

    const updateBlogList = () => {
        const query = blogSearch?.value.trim().toLowerCase() ?? '';
        let visibleCount = 0;

        blogCards.forEach((card) => {
            const categories = card.dataset.category.split(' ');
            const matchesCategory = selectedBlogCategory === 'all' || categories.includes(selectedBlogCategory);
            const matchesQuery = card.dataset.search.includes(query);
            card.hidden = !matchesCategory || !matchesQuery;
            if (!card.hidden) visibleCount += 1;
        });

        if (blogEmptyState) blogEmptyState.hidden = visibleCount > 0;
    };

    blogFilters.forEach((button) => {
        button.addEventListener('click', () => {
            selectedBlogCategory = button.dataset.blogFilter;
            blogFilters.forEach((filter) => {
                const isActive = filter === button;
                filter.classList.toggle('is-active', isActive);
                filter.setAttribute('aria-pressed', String(isActive));
            });
            updateBlogList();
        });
    });

    blogSearch?.addEventListener('input', updateBlogList);
}

document.querySelectorAll('[data-copy-link]').forEach((button) => {
    button.addEventListener('click', async () => {
        const originalText = button.textContent;

        try {
            await navigator.clipboard.writeText(window.location.href);
            button.textContent = 'Copied';
            window.setTimeout(() => { button.textContent = originalText; }, 1800);
        } catch {
            button.textContent = 'Copy unavailable';
            window.setTimeout(() => { button.textContent = originalText; }, 1800);
        }
    });
});
