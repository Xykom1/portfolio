const body = document.querySelector('body');
const modalshow_2 = document.querySelector('.modalshow-2');
const modalContentshow_2 = document.querySelector('.modal-content-show-2');
const xshow_2 = document.getElementById('x-mark-show-2');

// 2
xshow_2.addEventListener('click', () => {
    modalshow_2.style.display = 'none';
    body.style.overflow = 'auto';
});

function show_2() {
    document.getElementById('Modal_2').style.display = 'flex';
    body.style.overflow = 'hidden';
}

// 2
function zoomPlus_2() {
    zoom_img_2.style.zoom = 1.3;
}

function zoomMoins_2() {
    zoom_img_2.style.zoom = 1;
}