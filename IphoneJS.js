var boxes = document.querySelectorAll('.box')
var target = startID;

var boxHeight = $('.box:visible').height();
var boxWidth = $('.box:visible').width(); 

var i = 0;
var value = 0;
var startID = i;
var counter =0;
var startID;
var orderArray = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14];
var emptyArray = [];
var startTime = Date.now();
var lastClick = Date.now(); 
var clickTime;

function getPerformance(){
  endTime = Date.now();  
  clickTiming = endTime - startTime;
  count += 1;
}

setTarget(startID)

  console.log(boxes.length)
  for(var box = 0; box<boxes.length; box++)
  {
	boxes[box].addEventListener('mouseup',() =>{
 console.log(target)

			if(boxes[box] == target){
		
     currentClick = Date.now();  
     clickTime = currentClick - lastClick;
     console.log("Time: " + clickTime);
     var Xpos =  document.getElementById("Position").innerHTML = event.offsetX;
     var Ypos =  document.getElementById("Position").innerHTML = event.offsetY;
     percentWidth = Math.round((Xpos*100)/boxWidth);
     percentHeight = Math.round((Ypos*100)/boxHeight);

     console.log("Test X" +percentWidth)
     console.log("Test Y" +percentHeight)

      resetGrid()
      

      if (target == startID){
      //  resetGrid()
	 
        
        var randomPos = randomNumb();
        setTarget(randomPos);
        if(randomPos === undefined)
        {
          i = 2
        }
   //     i = i + 1;
   
       startID = i;
    //    randomNumb()
      } else {
        sendToDB()
				setTarget(startID);
			}
		} else{
      alert("miss: " + box.id)
      console.log("miss: " + box.id)
    }
	})



}
function randomNumb(){
  randomer = orderArray[Math.floor(Math.random() * (orderArray.length))];
//console.log(orderArray)
console.log("Random: " + randomer)

console.log(orderArray.splice(orderArray.indexOf(randomer), 1 ));
//console.log(randomer)
console.log("Starting Number: " + i)
  if (randomer === undefined || randomer === emptyArray)
  {
    orderArray = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14]; 
    orderArray.splice((0), (i+1) );

    tb = document.getElementById("myProgress"),
    progress = document.getElementById("myBar"); 
    value = value + 6.7;
    if(value>=100) value = 100;
    tb.value = value;     
    progress.style.width = value + "%";

  
  //  setTarget(startNumb);
   
    i++
//    console.log("I value: " + i)
//    console.log("randomer: " + randomer)

 //   console.log("array: " + orderArray)
    randomer = i
    if(i == 15 || i > 14)
    {
      totalTiming()
    }
    
  }


 // console.log("AAA"+ startID)
  return randomer;  

}

function setTarget(boxNumb) {
  lastClick = Date.now(); 
	var newTarget = boxes[boxNumb];

    name = "Target";
    arr = newTarget.className.split(" ");
    if (arr.indexOf(name) == -1) {
      newTarget.className += " " + name;
    }


	target = boxNumb;
}

function resetGrid() {
	for(var box = 0; qq<boxes.length; box++){
    var element =  document.getElementById("box")
	  element.className = element.className.replace('Target');
	};
 // startbox();
  }

  function totalTiming(){
    endTime = Date.now();  
    totalTime = (endTime - startTime)/1000;
    tt = parseFloat(totalTime).toFixed(2);
    
    
sessionStorage.setItem("tt", tt);
location.href = 'https://zeno.computing.dundee.ac.uk/2019-projects/camerontaylor/endscreen.php'



  }
  function sendToDB(){
  $.ajax({
    type: 'POST',
    url: 'https://zeno.computing.dundee.ac.uk/2019-projects/camerontaylor/userperformance.php',
    data: {
    'Xpos': percentWidth, 
    'Ypos': percentHeight, 
    'StartID': startID, 
    'RandomID': randomer,
    'timeTaken': clickTime
  },
    success: function(data){
      console.log(data);
  }
  });
}

