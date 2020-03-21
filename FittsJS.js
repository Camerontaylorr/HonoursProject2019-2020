var count = 0;
var lastYPost = 0;
var lastXPost = 0;
var newYPost = 0;
var startTime = Date.now();
window.addEventListener("DOMContentLoaded", function(){
  let grid = document.querySelectorAll(".box");
  getNumber()
  Array.from(grid, function(box) {
    box.addEventListener("mouseup", function() {
      /*
    console.log("X: " + (document.getElementById("Position").innerHTML = event.clientX ));
    console.log("Y: " + (document.getElementById("Position").innerHTML = event.clientY));
    console.log( "MISS")
    */
    count += 1;
    getPerformance()  
    }); 
  });   
});


function getPerformance(){
  endTime = Date.now();  
  clickTiming = endTime - startTime;
}

function getNumber()
{
  var counter = 0
  var num = Math.floor(Math.random() * Math.floor(14));
  var x = document.getElementById(num);
  counter++;
  x.style.background = "red";

  previousID = x.id;
  nextID = Math.floor(Math.random() * Math.floor(14));


  lastClick = Date.now();  


x.onclick = function()
 {
  count + 1;
  console.log("X: " + (document.getElementById("Position").innerHTML = event.clientX ));
  console.log("Y: " + (document.getElementById("Position").innerHTML = event.clientY));
  console.log("Cell Clicked: " + previousID)
  console.log("next cell : " + nextID)
  count + 1;
  console.log(count);
  currentClick = Date.now();  
  clickTime = currentClick - lastClick;
  console.log("Time: " + clickTime);
 
  x.style.background = "#6495ED";
  x.onclick = function()
 {
   console.log("MISS")
   //count + 1;
   console.log("Miss count" +count);
}
  getNumber()
  console.log("HIT")
  //console.log(Store)
  counter--
 }

 if (count == 20 || count > 20) 
 {
   
 // window.location.href = 'EndScreen.html';
   alert("Task Complete. Time: " + clickTiming)
 }
}

function order()
{

}