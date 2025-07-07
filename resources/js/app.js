// import './bootstrap';
import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.min.css';
import { Spanish } from 'flatpickr/dist/l10n/es.js';

document.addEventListener('DOMContentLoaded', function () {
    flatpickr(".datetime-picker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        locale: Spanish,
    });
});