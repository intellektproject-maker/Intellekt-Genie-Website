/* =========================================================
   INTELLEKT ROBOTICS SERVICES CONTENT
   ========================================================= */
(function () {
    const services = [
        {
            title: 'Autonomous Mobile Robots (AMRs)',
            image: 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=900&q=85',
            icon: 'fa-solid fa-robot',
            points: ['Indoor material transport', 'Autonomous navigation & mapping', 'Fleet management systems', 'Custom AMR design & deployment']
        },
        {
            title: 'Robotics Automation Solutions',
            image: 'https://images.unsplash.com/photo-1563206767-5b18f218e8de?auto=format&fit=crop&w=900&q=85',
            icon: 'fa-solid fa-gears',
            points: ['Industrial robot integration', 'Custom automation systems', 'End-of-line solutions', 'Process optimization']
        },
        {
            title: 'AI & Machine Vision Systems',
            image: 'https://images.unsplash.com/photo-1535378917042-10a22c95931a?auto=format&fit=crop&w=900&q=85',
            icon: 'fa-solid fa-eye',
            points: ['Visual inspection & quality control', 'Object detection and tracking', 'AI-powered defect analysis', 'Custom vision solutions']
        },
        {
            title: 'Training & Internships',
            image: 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=900&q=85',
            icon: 'fa-solid fa-graduation-cap',
            points: ['Hands-on robotics training', 'Student internship programs', 'Workshops & certification', 'Industry-ready skill development']
        },
        {
            title: 'Custom Robotics Development',
            image: 'https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?auto=format&fit=crop&w=900&q=85',
            icon: 'fa-solid fa-microchip',
            points: ['Prototype to production', 'Mechanical & electrical design', 'Embedded systems & firmware', 'End-to-end deployment support']
        },
        {
            title: 'Research & Innovation',
            image: 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=85',
            icon: 'fa-solid fa-lightbulb',
            points: ['R&D collaboration', 'Prototyping & testing', 'Product innovation support', 'Technology consulting']
        }
    ];

    function applyRoboticsServices() {
        const section = document.querySelector('.service');
        if (!section) return;

        section.classList.add('robotics-services-section');
        const slides = section.querySelectorAll('.swiper-slide');

        slides.forEach((slide, index) => {
            const service = services[index % services.length];
            const image = slide.querySelector('.service-image');
            const titleLink = slide.querySelector('.sigma-post-title a');
            const list = slide.querySelector('.sigma-post-excerpt');
            const details = slide.querySelector('.sigma-post-details-wrap');

            if (!image || !titleLink || !list || !details) return;

            image.src = service.image;
            image.alt = service.title;
            titleLink.childNodes[0].textContent = service.title;
            titleLink.href = 'services.php';

            list.innerHTML = service.points.map(point => `<li>${point}</li>`).join('');

            // Remove the original View More button and its wrapper.
            const viewMoreWrapper = slide.querySelector('.slide-btn');
            if (viewMoreWrapper) {
                viewMoreWrapper.remove();
            }

            if (!details.querySelector('.robotics-service-icon')) {
                const icon = document.createElement('div');
                icon.className = 'robotics-service-icon';
                icon.innerHTML = `<i class="${service.icon}" aria-hidden="true"></i>`;
                details.insertBefore(icon, details.firstElementChild);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', applyRoboticsServices);
    } else {
        applyRoboticsServices();
    }
})();
