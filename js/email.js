let letters = document.querySelectorAll('.email');
let checkboxes = document.querySelectorAll('.selected-emails');
let clickCheck = true;

document.onclick = function() {
    clickCheck = true;
}
for (let checkbox of checkboxes) {
    checkbox.onclick = function() {
        clickCheck = false;
    }
}
//let layer = document.querySelector('.layer');
for (let letter of letters) {
    
/*     checkbox.addEventListener("mouseover", function() {
        layer.classList.remove('hidden');
    });
    checkbox.addEventListener("mouseout", function() {
        layer.classList.add('hidden');
    }); */

    letter.onclick = function() {
        if (clickCheck) {
            for (letter of letters) {
                letter.classList.remove('selected');
            }
            this.classList.add('selected');
        }
    }
}

////////////
let recUsersListItems = document.querySelectorAll('.rec-users>li');

for (let recUser of recUsersListItems) {
    let removeBtn = recUser.querySelector('.rec-user-remove-btn');
    let addBtn = document.querySelector('.add');
    let addInput = document.querySelector('#rec-user-input');

    removeBtn.onclick = function(e) {
        e.preventDefault();
        recUser.classList.add('hidden');
    }
    addBtn.onclick = function(ev) {
        ev.preventDefault();
        addInput.classList.remove('hidden');
    }


}