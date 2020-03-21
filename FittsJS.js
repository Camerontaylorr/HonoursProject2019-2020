const box = document.querySelectorAll('.box')
const target = document.querySelectorAll('.Target')

let counter =0;
var startID;
var i = 0


function startbox(){
	box.forEach(className => {
		className.classList.remove('Target')
		
	})
	startID = box[i]
	startID.classList.add('Target');
	hitPosition = startID.id;
	}

box.forEach(id => {
	id.addEventListener('mouseup',() =>{
			
			if(id.id === hitPosition){
			startID.classList.remove('Target')
			let randomPos = box[Math.floor(Math.random()*14)]
			randomPos.classList.add('Target')

			startID = randomPos

			hitPosition = randomPos.id					
			console.log("Rand: " + randomPos.id)

			randomPos = box[i]
			randomPos.classList.add('Target')
			console.log("Rand 2: " + randomPos.id)



}

else 
		   {
			console.log("MISS")
		   }
		   
	})



})

	
	startbox();
