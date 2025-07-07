document.addEventListener('DOMContentLoaded', () => {
    const openButtons = document.querySelectorAll('.open-modal-btn');
    const modals = document.querySelectorAll('.modal');

    openButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const modalId = btn.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            if (modal) modal.classList.remove('hidden');
        });
    });

    modals.forEach(modal => {
        modal.querySelector('.modal-cancel')?.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    });
});