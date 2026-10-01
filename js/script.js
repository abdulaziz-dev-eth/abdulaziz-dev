// ===== SHARED INTERACTIVITY FOR ALL PAGES =====
// Note: Theme toggle → js/theme.js
// Note: Form validation → js/validation.js

document.addEventListener("DOMContentLoaded", function () {

    // ===== MOBILE NAV TOGGLE =====
    const toggleBtn = document.querySelector(".nav-toggle");
    const nav = document.querySelector("header nav");
    if (toggleBtn && nav) {
        toggleBtn.addEventListener("click", function () {
            nav.classList.toggle("open");
        });
    }

    // ===== BACK TO TOP BUTTON =====
    const scrollBtn = document.querySelector(".scroll-top");
    if (scrollBtn) {
        window.addEventListener("scroll", function () {
            scrollBtn.style.display = window.pageYOffset > 300 ? "flex" : "none";
        });
        scrollBtn.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    // ===== FORM VALIDATION (fallback) =====
    const forms = document.querySelectorAll("form[data-validate]");
    forms.forEach(function (form) {
        form.addEventListener("submit", function (e) {
            const required = form.querySelectorAll("[required]");
            let valid = true;
            required.forEach(function (field) {
                if (!field.value.trim()) valid = false;
            });
            if (!valid) {
                e.preventDefault();
                alert("Please fill in all required fields.");
            }
        });
    });

    // ===== PROJECT FILTER =====
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    if (filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                projectCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // ===== PROJECT MODAL =====
    const modal = document.getElementById('projectModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalTech = document.getElementById('modalTech');
    const modalDescription = document.getElementById('modalDescription');
    const modalGithub = document.getElementById('modalGithub');
    const modalDemo = document.getElementById('modalDemo');
    const modalClose = document.querySelector('.modal-close');

    if (modal) {
        document.querySelectorAll('.view-project-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                modalTitle.textContent = this.getAttribute('data-title');
                modalTech.textContent = this.getAttribute('data-tech');
                modalDescription.textContent = this.getAttribute('data-description');
                modalGithub.href = this.getAttribute('data-github');
                modalDemo.href = this.getAttribute('data-demo');
                modal.classList.add('active');
            });
        });

        if (modalClose) {
            modalClose.addEventListener('click', function () {
                modal.classList.remove('active');
            });
        }

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                modal.classList.remove('active');
            }
        });
    }

});