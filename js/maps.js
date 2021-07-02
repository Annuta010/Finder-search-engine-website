function initMap() {
    var options = {
        center: {lat: 40.41861329575608,  lng:-3.7069430266703605},
        zoom: 8,
    }

    var map = new google.maps.Map(document.getElementById("map"), options);
}

let sideMenu = document.querySelector('.maps-sidebar');
let closeBtn = document.getElementById('close');
let showSideBar = document.getElementById('show-tools');
let sideMenuOverlay = document.getElementById('maps-overlay');

showSideBar.onclick = function() {
    sideMenu.classList.remove('hidden');
    showSideBar.classList.remove('visible');
}
closeBtn.onclick = function() {
    sideMenu.classList.add('hidden');
    showSideBar.classList.add('visible');
}

window.onresize = function(){
    if (document.documentElement.clientWidth < 768) {
        sideMenu.classList.add('hidden');
        showSideBar.classList.add('visible');
    } else {
        sideMenu.classList.remove('hidden');
        showSideBar.classList.remove('visible');
    }
} 

/* let sideMenu = document.querySelector('.maps-sidebar');
let closeBtn = document.getElementById('close');

closeBtn.onclick = function() {
    closeBtn.classList.add('pressed');
}
sideMenu.onclick = function() {
    if(closeBtn.classList.contains('pressed')) {
        sideMenu.classList.add('compressed');
        closeBtn.classList.remove('pressed');
    } else {
        sideMenu.classList.remove('compressed');
    }
}
*/
const ratings = document.querySelectorAll('.rating-info');

if (ratings.length > 0) {
    initRatings();
}

function initRatings() {
    let ratingActive, ratingValue;
    for (let index=0; index < ratings.length; index++) {
        const rating = ratings[index];
        initRating(rating);
    }

    function initRating(rating) {
        initRatingVars(rating);
        setRatingActiveWidth();

        if (rating.classList.contains('active')) {
            setRating(rating);
        }
    }

    function initRatingVars(rating) {
        ratingActive = rating.querySelector('.rating-active');
        ratingValue = rating.querySelector('.rating-value');
    }
    
    function setRatingActiveWidth(index = ratingValue.innerHTML) {
        const ratingActiveWidth = index / 0.05;
        ratingActive.style.width = `${ratingActiveWidth}%`;
    }
    
    function setRating(rating) {
        const ratingItems = rating.querySelectorAll('.star-rating');
        for (let i = 0; i < ratingItems.length; i++) {
            const ratingItem = ratingItems[i];
    
            ratingItem.addEventListener("mouseenter", function (e) {
                initRatingVars(rating);
                setRatingActiveWidth(ratingItem.value);
            });
            ratingItem.addEventListener("mouseleave", function (e) {
                setRatingActiveWidth();
            });
            ratingItem.addEventListener("click", function (e) {
                rating.classList.add('selected');
                initRatingVars(rating);
                ratingValue.innerHTML = i + 1;
                setRatingActiveWidth();
            });
        }
    }
    
}

let goBackBtn = document.querySelector('#go-back');
let goForwardBtn = document.querySelector('#go-fwd');
let refreshBtn = document.querySelector('#refresh');

goBackBtn.onclick = function() {
    window.history.back();
} 

goForwardBtn.onclick = function() {
    window.history.forward();
} 

refreshBtn.onclick = function() {
    document.location.href = "maps.html";
} 



