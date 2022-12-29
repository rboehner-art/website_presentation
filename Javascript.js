
//function askName(){

    //console.log(firstName);
    
   // console.log(firstName);
   // alert("Hello, " + firstName + "! Thank you for visiting my Resume" );
//}

//const MyDate = new Date();
//var hours = MyDate.getHours();
//21
//document.getElementById("dateTime").innerHTML = hours;
//function greetUser (){
   // var name = prompt ("What is your name?");

    //if(hours >= 5 && hours <= 12){
        //alert("Goodmorning," + name + " welcome to my site!")
   // } 
   // else if (hours > 12 && hours <= 18) {
        //alert("Good Afternoon," + name + " welcome to my site!")
   // } 
    //else if (hours > 18) {
       // alert("Good evening," + name + " welcome to my site!")
  //  }
    
//}
var myReferences = [["Ramsey Boehner", "This person is a great worker, you should definitely hire him!"],["Ramsey is a dedicated worker, and a blast to be around"],["9 out of 10 customers recommend using Ramsey!"]];
for (let i = 0; i < myReferences.length; i++) {document.getElementById("myText").innerHTML = "The length of the array is: " + myReferences.length;}
let myVar = "My String: <ol>";
for (let j = 0; j < myReferences.length; j++) {
    myVar += "<li>" + myReferences[j] + "</li>"
}
myVar += "</ol>";
document.getElementById("results").innerHTML = myVar;

