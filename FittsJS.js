const boxes = document.querySelectorAll('.box')
let target = startID;

var i = 0;
var startID = i;
let counter =0;
var startID;


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
    //    randomNumb()
      } else {
     
				setTarget(startID);
			}
		} else{
      console.log("miss")
    }
	})



})

function setTarget(boxNumb) {
	let newTarget = boxes[boxNumb];
  //newTarget.classList.add('Target');
  
  newTarget.classList.add('Target');
 

	target = boxNumb;
}
function randomNumb(){
  randomer = [Math.floor(Math.random() * (14))];
  return randomer
}



function resetGrid() {
	boxes.forEach(box => {
	  box.classList.remove('Target');
	});
 // startbox();
 

  }

