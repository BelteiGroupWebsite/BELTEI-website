function ResponsiveShow() {
    // Check the window width and toggle mobile styles
    if (window.matchMedia("(max-width: 992px)").matches) {
        // window.alert("hi")
        var navbar_btn = document.getElementById('navbar-btn');
        var left_slidebar = document.getElementById('left-slidebar');
        var right_slidebar = document.getElementById('right-slidebar');
        
        navbar_btn.onclick = function () {
            if (left_slidebar.classList.contains('left-slidebar')) {
                left_slidebar.classList.remove('left-slidebar');
                left_slidebar.classList.add('left-slidebar-active');
                // left_slidebar.appendChild(right_slidebar);
                navbar_btn.classList.remove('fa-bars');
                navbar_btn.classList.add('fa-close')
                document.querySelectorAll('.responesive-ul-title').forEach(element => {
                    element.classList.remove('hidden');
                });
                // document.querySelector(left_slidebar > right_slidebar).classList.add('right-slidebar-active')
                // var left_slidebar = document.querySelector('.left-slidebar'); // Assuming you are selecting by class name
                // var right_slidebars = left_slidebar.querySelector('.right-slidebar'); // Select the .right-slidebar within .left-slidebar
                // right_slidebars.classList.add('right-slidebar-active');
                
            } else {
                navbar_btn.classList.add('fa-bars');
                navbar_btn.classList.remove('fa-close')
                document.querySelectorAll('.responesive-ul-title').forEach(element => {
                    element.classList.add('hidden');
                });
                left_slidebar.classList.add('left-slidebar');
                left_slidebar.classList.remove('left-slidebar-active');
            }
        }
        
        
    } else {

    }
}

// Add a "resize" event listener to call ResponsiveShow when the window is resized
ResponsiveShow();
window.addEventListener("resize", ResponsiveShow);

// Select the <ul> element
var ulElement = document.querySelectorAll('ul li ul');
ulElement.forEach(element =>{
    element.querySelectorAll('li').forEach(subele =>{
        subele.onclick = function(){
            subele.querySelector('a').click();
        }
    })
})




// function ResponsiveShow() {
//     // Check the window width and toggle mobile styles
//     if (window.matchMedia("(max-width: 992px)").matches) {
//         var buttonHtml = '<button class="fa fa-angle-left p-2" style="border" id="navbar-btn"></button>';
//     //     var buttonHtml = `
//     //     <svg id="navbar-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="69" height="57" viewBox="0 0 69 57">
//     //     <defs>
//     //       <filter id="Rectangle_11" x="0" y="0" width="69" height="57" filterUnits="userSpaceOnUse">
//     //         <feOffset dy="3" input="SourceAlpha"/>
//     //         <feGaussianBlur stdDeviation="3" result="blur"/>
//     //         <feFlood flood-opacity="0.161"/>
//     //         <feComposite operator="in" in2="blur"/>
//     //         <feComposite in="SourceGraphic"/>
//     //       </filter>
//     //     </defs>
//     //     <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Rectangle_11)">
//     //       <path id="Rectangle_11-2" data-name="Rectangle 11" d="M11,0H51a0,0,0,0,1,0,0V28A11,11,0,0,1,40,39H11A11,11,0,0,1,0,28V11A11,11,0,0,1,11,0Z" transform="translate(9 6)" fill="#018aaa"/>
//     //     </g>
//     //     <path id="Icon_awesome-angle-left" data-name="Icon awesome-angle-left" d="M2.13,14.791,9.777,7.143a1.344,1.344,0,0,1,1.906,0l1.271,1.271a1.344,1.344,0,0,1,0,1.906L7.539,15.746l5.421,5.421a1.344,1.344,0,0,1,0,1.906L11.689,24.35a1.344,1.344,0,0,1-1.906,0L2.135,16.7A1.346,1.346,0,0,1,2.13,14.791Z" transform="translate(26.955 9.753)" fill="#fff"/>
//     //   </svg>
//     //   `;
//         document.body.innerHTML += buttonHtml;
//     } else {
//         document.getElementById('navbar-btn').remove();
//         console.log("Screen is larger than 600px wide.");
//     }
// }

// // Add a "resize" event listener to call ResponsiveShow when the window is resized
// ResponsiveShow();
// window.addEventListener("resize", ResponsiveShow);