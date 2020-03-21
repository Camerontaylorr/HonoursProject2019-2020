const boxes = document.querySelectorAll('.box')
let target = startID;

var i = 0;
var startID = i;
let counter =0;
var startID;
var orderArray = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14];
var emptyArray = [];


setTarget(startID)

/*
function startbox(){
	box.forEach(className => {
		className.classList.remove('Target')
		
	})
	startID = box[i]
	startID.classList.add('Target');
	hitPosition = startID.id;
	}
*/

boxes.forEach(box => {
	box.addEventListener('mouseup',() =>{
			
			if(box.id == target){
      console.log("hit")
      console.log(startID)
      console.log("hit")
      console.log("X: " + (document.getElementById("Position").innerHTML = event.clientX ));
      console.log("Y: " + (document.getElementById("Position").innerHTML = event.clientY));
      resetGrid()
      

      if (target == startID){
      //  resetGrid()
        console.log("hit")
        let randomPos = randomNumb();
        setTarget(randomPos);
        if(randomPos === undefined)
        {
          i = 2
        }
   //     i = i + 1;
       startID = i;
    //    randomNumb()
      } else {
     
				setTarget(startID);
			}
		} else{
      console.log("miss")
    }
	})



})
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
  //  setTarget(startNumb);
    console.log("awjmfka")
    i++
    console.log("I value: " + i)
    console.log("randomer: " + randomer)
    console.log("array: " + orderArray)
    randomer = i
    if(i == 15 || i > 14)
    {
      alert("OVER")
    }
    
  }
  return randomer;  
}

function setTarget(boxNumb) {
	let newTarget = boxes[boxNumb];
  //newTarget.classList.add('Target');
  
  newTarget.classList.add('Target');
 

	target = boxNumb;
}

function resetGrid() {
	boxes.forEach(box => {
	  box.classList.remove('Target');
	});
 // startbox();
 

  }

