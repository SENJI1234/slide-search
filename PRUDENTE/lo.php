<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="capit.css">
 
</head>

<body>
    
     <h1 id="name">PHILIPPINES</h1>
     <h1 id="curent">CURRENCY:PESO</h1>
     <button onclick()="prev">prev</button>
    <img src="images/phi.gif" alt="" id="flag-image">
    <button onclick()="next">next</button>



 
  <script>



  let currentNumber = 0;



    const country = [
            {
               images:"phi.gif",
               name: "PHILLIPPINES",
               curent: "PESO"



            },

            {
              images: "japan.gif",
              name: "JAPAN",
             curent: " Yen"

            },
            {
              image: "korea.gif",
              name: "KOREA",
              curent: "Won "

            }
          





    ]

      function updateContent(){
        const countrys = country[currentNumber];
        document.getElementById("flag-image").src =`images/${countrys.images}`;
       
      }
    function next(){

         if(currentNumber >= country.length){
            currentNumber = 0;



         }
         updateContent()
    }


    function prev(){
        currentNumber
        if(currentNumber <0 ){
            currentNumber = country.length -1;



         }
           updateContent()
    }



  </script>









</body>
</html>


