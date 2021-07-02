let settingsSmallWindow = document.getElementById('modal-settings');
let showSmallSettingsBtn = document.getElementById('show-settings');
let overlay = document.querySelector('.overlay');

let showBigSettingsBtn = document.getElementById('open-set-modal');
let moreSettings = document.getElementById('more-settings-btn');
let settingsBigWindow = document.getElementById('modal-more-settings');

let lkModal = document.getElementById('modal-lk');
let showLkModalBtn = document.getElementById('open-lk-modal');

let modals = document.querySelectorAll('.modal');
let showBtns = document.querySelectorAll('.showing .img');

let notShowingBtns = document.querySelectorAll('.not-showing');

for (let notShowingBtn of notShowingBtns){
    notShowingBtn.onclick = function(e) {
        e.preventDefault();
        notShowingBtn.classList.toggle('active');
    }
}

if (document.getElementById('show-settings')) {
    showSmallSettingsBtn.onclick = function(e) {
        e.preventDefault();
        settingsSmallWindow.classList.toggle('hidden');
        let svgBtn = showSmallSettingsBtn.querySelector('.img');
        svgBtn.classList.toggle('active');
        for (let showBtn of showBtns) {
            if (showBtn !== svgBtn)
            showBtn.classList.remove('active');
        }
        for (let modal of modals) {
            if (modal != settingsSmallWindow) {
                modal.classList.add('hidden'); 
            }
        }
        if (settingsSmallWindow.classList.contains('hidden')) {
            overlay.classList.add('hidden');
        } else {
            overlay.classList.remove('hidden');
        }
    }
}
showBigSettingsBtn.onclick = function(e) {
    e.preventDefault();
    for (let modal of modals) {
        if (modal != settingsBigWindow) {
            modal.classList.add('hidden'); 
        }
    }
    settingsBigWindow.classList.toggle('hidden');
    let svgBtn = showBigSettingsBtn.querySelector('.img');
    svgBtn.classList.toggle('active');
    for (let showBtn of showBtns) {
        if (showBtn !== svgBtn)
        showBtn.classList.remove('active');
    }
    if (settingsBigWindow.classList.contains('hidden')) {
        overlay.classList.add('hidden');
    } else {
        overlay.classList.remove('hidden');
    }
}
showLkModalBtn.onclick = function(e) {
    e.preventDefault();
    for (let modal of modals) {
        if (modal != lkModal) {
           modal.classList.add('hidden'); 
        }
    }
    lkModal.classList.toggle('hidden');
    let svgBtn = showLkModalBtn.querySelector('.img');
    svgBtn.classList.toggle('active');
    for (let showBtn of showBtns) {
        if (showBtn !== svgBtn)
        showBtn.classList.remove('active');
    }
    if (lkModal.classList.contains('hidden')) {
        overlay.classList.add('hidden');
    } else {
        overlay.classList.remove('hidden');
    }
}
overlay.onclick = function() {
    for (let modal of modals) {
        modal.classList.add('hidden');
    }
    overlay.classList.add('hidden');
}
moreSettings.onclick = function(e) {
    e.preventDefault();
    settingsSmallWindow.classList.add('hidden');
    let svgBtn = showSmallSettingsBtn.querySelector('.img');
    svgBtn.classList.remove('active');
    settingsBigWindow.classList.remove('hidden');
    svgBtn = showBigSettingsBtn.querySelector('.img');
    svgBtn.classList.add('active');
}

let showPass = document.querySelector('.eye');
let passwInput = document.querySelector('#user-password');

showPass.onclick = function() {
    showPass.classList.toggle('checked');

    if (showPass.classList.contains('checked')) {
        passwInput.type = 'text';
    } else {
        passwInput.type = 'password';
    }
}

passwInput.type = 'password';