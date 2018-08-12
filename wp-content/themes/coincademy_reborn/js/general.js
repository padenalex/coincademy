window.addEventListener('scroll', MenuBG);

function MenuBG() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10 ) {
        document.getElementById("top-nav").classList.add("menu-bg");
    } else if (menu_toggle < 0) {
        document.getElementById("top-nav").classList.remove("menu-bg");
    }
}

var menu_toggle = -1;

function toggleDisplay() {
    menu_toggle *= -1;
    var menu_items = document.getElementById('top-nav').getElementsByTagName("div");
    for(var i=1; i<menu_items.length; i++) {
        menu_items[i].classList.toggle('displayed');
    }
    if (document.body.scrollTop < 10 && document.documentElement.scrollTop < 10 ) {
        document.getElementById("top-nav").classList.toggle("menu-bg"); 
    }
}

function toggleSubmenu(elem) {
    elem.nextElementSibling.classList.toggle('displayed');
}

// removed because added a second mobile menu button
// var newToggle = document.createElement('button');
// newToggle.classList.add('menu-toggle');
// newToggle.innerHTML = '---';
// try {
// 	newToggle.onclick = function(){toggleSubmenu(this)};
// }
// catch(err) {
//     console.log(err);
// }


// var doc = document.getElementById("top-nav-menu");
// for (var g = 0; g < doc.childNodes.length; g += 2) {
//     if (doc.childNodes[g].classList.contains('menu-item-has-children')) {
//       doc.childNodes[g].insertBefore(newToggle, doc.childNodes[g].getElementsByTagName('ul')[0]);
//     }        
// }

// var y = 0;

// try {
// 	document.getElementById("login-button").onclick = function() {openTab('login-holder')}
// }
// catch(err) {
//     console.log(err);
// }

// try {
// 	document.getElementById("signup-button").onclick = function() {openTab('registration-holder')}
// }
// catch(err) {
//     console.log(err);
// }

// function openTab(type) {
//     y = window.pageYOffset || document.documentElement.scrollTop;
//     document.documentElement.scrollTop = document.body.scrollTop = 0;
//     document.body.style.overflow = "hidden";
//     document.getElementById('auth-holder-id').classList.add('active');
//     var current = document.getElementsByClassName("auth-form-holder active");
//     current[0].classList.toggle('active');
//     document.getElementById(type).classList.toggle('active');
// }

// document.getElementById('background-layer').onclick = function() {
//     document.getElementById('auth-holder-id').classList.remove('active');
//     document.body.style.overflow = "auto";
//     document.documentElement.scrollTop = document.body.scrollTop = y;
// }