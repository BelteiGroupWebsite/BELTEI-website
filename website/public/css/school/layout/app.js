var campusDiv = document.getElementById("campus");
var campusDivChildren = campusDiv.children;

var lang = document.documentElement.getAttribute("lang");
// console.log(lang); // Output: en
// alert(lang)

if(lang == "kh"){

    var campusNameArr = [
        "គីរីរម្យ",
        "ផ្សារទួលទំពូង",
        "ដេអិន",
        "ផ្សារដើមថ្កូវ",
        "ច្បារអំពៅ",
        "អូរឫស្សី",
        "ពេទ្យលោកសង្ឃ",
        "ផ្សារពោធិ៍ចិនតុង",
        "ស្ទឹងមានជ័យ",
        "អាងទឹកអូឡាំពិក",
        "ផ្សារតូច",
        "ផ្សារដីហុយ",
        "រង្វង់មូលកាំកូស៊ីធី",
        "ក្រុងតាខ្មៅ",
        "ផ្សារជម្ពូវ័ន",
        "ផ្លូវកោងវែងស្រេង",
        "ឫស្សីកែវ",
        "ផ្សារព្រែកឯក",
        "ផ្សារព្រែកលៀប",
        "ចោមចៅ",
        "ផ្សារឈូកមាស",
        "រង្វង់មូលគួរស្រូវ",
        "ផ្លូវព្រៃសស្តុបឫស្សីសាញ់",
        "រង្វង់មូលព្រែកតាមាក់",
        "ស្ថានីបូមទឹកផ្លូវ",
        "ព្រែកប្រា",
        "", 
        "", 
        "", 
        "", 
    ]

}else{
    var campusNameArr = [
        
        "Kirirom",
        "Toul Tum Pong",
        "DN",
        "Phsar Doeum Thkov",
        "Chbar Ampeou",
        "Orssei",
        "Loksang Hospital",
        "Pochen Tong",
        "Steung Meanchey",
        "Ang Teuk Olympic",
        "Phsar Touch",
        
        "Phsar Deihoy",
        "Comko City",
        "Takhmao Town",
        "Phsar Chumpu Vorn",
        "Phlov Yeng Sreng",
        "Russey Keo",
        "Phsar Preak Leap",
        "Phsar Preak Eak",
        "Chom Chao",
        "Phsar Chhouk Meas",
        "Kour Srov",
        "Preysor Russey Sanh",
        "Prek Ta Mek",
        "Pumping Station 371",
        "Preak Pra",
        "B27",
        "B28",
        "B29",
        "B30",
    ];
}


for (let i = 1; i <= 30; i++) {
    var campusCardTemplate = `
        <a href="" data-aos="fade-left" data-aos-delay="${
            i * 100
        }" class="border rounded shadow-sm ">
            <img class="shadow-sm rounded "
                src="../../../asset/img/school/campus/school-B${i}.jpg"
                alt="">
            <div class="d-flex align-items-center justify-content-around p-1">
                <h6 style="min-width:30px ; width: 30px; height: 30px;"
                    class="f14 rounded-pill bg-header-color d-flex justify-content-center align-items-center text-white">
                    ${i}
                </h6>
                <b class=" text-center ${campusNameArr[i-1].length > 12 ? 'f10' : 'f12'}">
                    ${campusNameArr[i-1]}
                </b>
            </div>
        </a>
    `;
    var div = document.createElement("div");
    div.innerHTML = campusCardTemplate.trim();
    campusDiv.appendChild(div.firstChild);
}

// Get the button
let goToTopBtn = document.getElementById("goToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    goToTopBtn.style.display = "block";
  } else {
    goToTopBtn.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



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
