import './bootstrap';


const modal = (img) => {
    document.getElementById('show-modal-image').src = img.src;
    (new bootstrap.Modal('#modal-image')).show();
};