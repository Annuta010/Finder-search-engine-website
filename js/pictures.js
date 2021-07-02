let tags = document.querySelectorAll('.tags-item');

for (let tagsElement of tags) {
    tagsElement.onclick = function () {
        this.classList.toggle('active');
    }
}
let popupOverlay = document.querySelector('.popup-overlay');
let popupCover = document.querySelector('.popup-cover');
let openPopupBtns = document.querySelectorAll('.open-popup');
let siteBody = document.querySelector('.wrapper');
let crossBtn = popupCover.querySelector('.cross');

for (let openBtn of openPopupBtns) {
    openBtn.onclick = function(e) {
        e.preventDefault();
        siteBody.classList.add('noscroll');
        popupCover.classList.remove('hidden');
        popupOverlay.classList.remove('hidden');
    }
}
popupOverlay.onclick = function() {
    popupCover.classList.add('hidden');
    siteBody.classList.remove('noscroll');
}
crossBtn.onclick = function(e) {
    e.preventDefault();
    popupCover.classList.add('hidden');
    siteBody.classList.remove('noscroll');
}

