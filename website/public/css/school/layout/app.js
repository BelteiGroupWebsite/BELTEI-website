

// Get the button
var goToTopBtn = document.getElementById("goToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        goToTopBtn.style.display = "block";
    } else {
        goToTopBtn.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



var sidebar = document.getElementsByClassName('sidebar');


for(let i = 0; i < sidebar.length ; i++){
    // console.log(sidebar[i])
    var subsidebar = sidebar[i].querySelectorAll('.list-group');
    for(let j = 0; j<subsidebar.length ; j++ ){
        // console.log(subsidebar[j]);
        var h6 = subsidebar[j].querySelector('h6');
        h6.innerHTML = String.fromCharCode(65 + j) + "- " + h6.innerHTML;
        var subsubsidebar = subsidebar[j].querySelectorAll('.list-group-item');
        for(let k = 0; k < subsubsidebar.length ; k++){
            // console.log(subsubsidebar[k]);
            subsubsidebar[k].innerHTML = (k+1) + '- ' + subsubsidebar[k].innerHTML; // add to the front
        }
    }
}






// var images = document.getElementsByTagName('img');

// Array.from(images).forEach(img => {
//     img.addEventListener('click', function() {
//         window.open(img.src, '_blank');
//     });
// });

// function insertClass(arrayClass){
//     arrayClass.forEach(element => {

//     });
// }

// for (var i = 0; i < campusDivChildren.length; i++) {
//     var child = campusDivChildren[i];
//     child.querySelector("img").src = `asset/img/school/campus/school-B${
//         i + 1
//     }.jpg`;
//     child.setAttribute("data-aos", "fade-left");
//     child.setAttribute("data-aos-delay", i * 100);
// }

// function desktopScreenSize(){
//     for (var i = 0; i < campusDivChildren.length; i++) {
//         var child = campusDivChildren[i];
//         child.setAttribute('data-aos', 'fade-left');
//         child.setAttribute('data-aos-delay', i * 100);
//     }
// }

// function myFunction(x) {
//   if (x.matches) { // If media query matches
//     document.body.style.backgroundColor = "yellow";
//   } else {
//     document.body.style.backgroundColor = "pink";
//   }
// }

// // // Create a MediaQueryList object
// // var x = window.matchMedia("(max-width: 768px)")
// // // i need more responsive size include 600px, 768px, 1200px ,

// // // Call listener function at run time
// // myFunction(x);

// // // Attach listener function on state changes
// // x.addEventListener("change", function() {
// //   myFunction(x);
// // });

// window.addEventListener("resize", function() {
//     // if (window.matchMedia("(max-width: 768px)").matches) {
//     //     console.log('768px');
//     // }

//     if(window.innerWidth > 1200){

//     }else if(window.innerWidth > 992){

//     }else if(window.innerWidth > 768){

//     }else if(window.innerWidth > 600){

//     }else{

//     }

//     // console.log(window.innerWidth);
// });
