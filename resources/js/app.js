// import './bootstrap';
import './modals';
import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.min.css';
import { Spanish } from 'flatpickr/dist/l10n/es.js';

const formLoaders = () => {
    const forms = document.querySelectorAll('form');
    const loaderModal = document.getElementById('loader-modal');
    const delay = 1000;

    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            loaderModal.classList.remove('hidden');
            loaderModal.classList.add('flex');
            setTimeout(() => {
                form.submit();
            }, delay);
        });
    });
};

document.addEventListener('DOMContentLoaded', function () {
    flatpickr(".datetime-picker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        locale: Spanish,
    });
    formLoaders();
});