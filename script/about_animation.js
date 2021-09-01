const highlight = document.querySelector('.animate-text');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            highlight.classList.add('animate-text-scrolled');
            return;
        }

        highlight.classList.remove('animate-text-scrolled');
    });
});
  
observer.observe(highlight);