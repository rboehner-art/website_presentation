// local reviews data
const reviews = [
    

{
    id: 1,
    name: "susan smith",
    job: "web develpoer",
    img:"",
    text: "Sunt in culpa qui officia deserunt mollit anim id est 
    laborum consectetur adipiscing elit, sed do eiusmod tempor i
    ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco."
   
},
{
    id: 2,
    name: "anne johnson",
    job: "web developer"
    img: "",
    text: "Sunt in culpa qui officia deserunt mollit anim id est laborum 
    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
     dolore magna aliqua. Ut enim ad minim veniam, quis n
    ostrud exercitation ullamco."
},
];

// select times
const img = document.getElementById("person-img");
const author = document.getElementById("author");
const job = document.getElementById("job");
const  info = document.getElementById("info");

const prevBtn = document.querySelector('.prev-btn')
const nextBtn = document.querySelector('.next-btn')
const randomBtn = document.querySelector('.random-btn')

// set starting item

let currentItem = 0,;

// load intial item
window.addEventListener('DOMContentLoaded',function(){
    const item = reviews[currentItem];
    img.src = item.img;
    author.textContent = item.name;
    job.textContent = item.job;
    info.textContent = item.text;
});

// show person based on item

function showPerson (person){
const item = reviews[currentItem];
img.src = item.img; 
author.textContent = item.name;
job.textContent = item.job;
info.textContent = item.text;

}
// show next person

nextBtn.addEventListener("click", function (){
    currentItem++;
    if (currentItem > reviews.length - 1){
        currentItem = 0;
    }