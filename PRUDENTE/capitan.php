<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="ss.css">
 
</head>

<body>
<div class="container">
<button id="country-button">COUNTRY</button>  <button id="mycar">CAR</button> <button id="myhouse">HOUSE</button>

</div>


<div class="five" style="display:none;">

<h1 id="name">PHILIPPINES</h1>
<h1 id="curent">CURRENCY:PESO</h1>
<h1><input type="text" placeholder="search-country" id="yows"></h1>
    <div class="one">
    
     <button onclick="prev()">prev</button>
    <img src="images/phi.gif" alt="" id="flag-image">
    <button onclick="next()">next</button>
    </div>

    </div>


 <div class="six">
   <h1 id="hello">CARS:</h1>
   <h1 id="sell">SELL:</h1>
   <h1><input type="text" placeholder="search-car-country" id="yowss"></h1>
   <div class="sixs">
 
   <button onclick="nextCar()">NEXT</button>
   <img src="cars/car1.png" alt="" id="car-image">
   <button onclick="prevCar()">PREV</button>
   </div>
   </div>

 <div class="hide" style="display: none;">
   <h1 id="one">HOUSE1</h1>
   <h1 id="two">SELL:100K</h1>
   <div class="yow">
   <button onclick="nextHouse()">NEXT</button>
        <img src="house/house1.png" alt="" id="house-image">   

    <button onclick="prevHouse()">PREV</button>
    </div>
   </div>








 
  <script>



  let currentNumber = 0;



    const country = [
            {
               images:"phi.gif",
               name: "PHILLIPPINES",
               curent: "Currency:PESO"



            },

            {
              images: "japan.gif",
              name: "JAPAN",
             curent: "Currency: Yen"

            },
            {
              images: "koreas.gif",
              name: "KOREA",
              curent: "Currency:Won "

            }
          





    ]

      function updateContent(){
        const countrys = country[currentNumber];
        document.getElementById("flag-image").src = `images/${countrys.images}`;
       document.getElementById("name").textContent = countrys.name;
       document.getElementById("curent").textContent = countrys.curent;
       
      }
    function next(){
    currentNumber++;
         if(currentNumber>= country.length){
            currentNumber = 0;



         }
         updateContent()
    }


    function prev(){
        currentNumber--;
        if(currentNumber <0 ){
            currentNumber = country.length -1;



         }
           updateContent()
    }





 document.getElementById("country-button").addEventListener("click",function(){


  const countryDiv = document.querySelector(".five");
  const carDiv = document.querySelector(".six");
  const carhouse = document.querySelector(".hide");


  countryDiv.style.display = "block";
  carDiv. style.display  = "none";
  carhouse.style.display = "none";





 });


 document.getElementById("myhouse").addEventListener("click",function(){

   const carhouse = document.querySelector(".hide");
   const countryDiv = document.querySelector(".five");
   const carDiv = document.querySelector(".six");


   carhouse.style.display = "block";
  countryDiv.style.display = "none";
  carDiv. style.display  = "none";



 })

 document.getElementById("mycar").addEventListener("click",function(){


const countryDiv = document.querySelector(".six");
const carDiv = document.querySelector(".five");
const carhouse = document.querySelector(".hide");
countryDiv.style.display = "block";
carDiv. style.display  = "none";
carhouse.style.display = "none";







});
   let curent = 0;
  const cars = [
 


    {
      cars: "car1.png",
      hello: "japan",
      sell: " 12M"



    },


    {
      cars: "car2.png",
      hello: "korea",
      sell: "123m"
  

    },


    {
       cars:"car3.png",
        hello: "phili",
       sell: " 32M"


    }












  ];


   function nextCar(){
    curent++;

     if( curent >= cars.length ){
      curent=0;
     }

  

   carupdate();
   }

   function prevCar(){
    curent--;
    if(curent < 0){
      curent = cars.length - 1;;
    }
    carupdate();

   }

   function carupdate(){

  
document.getElementById("car-image").src = `cars/${cars[curent].cars}`;
  document.getElementById("hello").textContent = cars[curent].hello; 
  document.getElementById("sell").textContent = cars[curent].sell;




}


   let curentHouse = 0;


   let house = [
     {
    
      house: "house1.png",
      one: "house1",
      two: "109k"
     },
     {
      house: "house2.png",
      one: "house2",
      two: "102k"
      
     },
     {
      house: "house3.png",
      one: "house3",
      two: "109k"
      
     },


    ]


    function nextHouse(){
      curentHouse++;

      if(curentHouse >= house.length){
        curentHouse = 0;


   





      }
      updateHouseDetails();

    }
      function prevHouse(){
        curentHouse--;

     if(curentHouse< 0){
      curentHouse = house.length -1;
    
    
     }

     updateHouseDetails();

      }

      function updateHouseDetails() {
        document.getElementById("house-image").src = `house/${house[curentHouse]. house}`;
       document.getElementById("one").textContent = house[curentHouse].one;
       document.getElementById("two").textContent = house[curentHouse].two;







       
    
}



function searchCountry() {
    const searchValue = document.getElementById("yows").value.toLowerCase();
    const countryIndex = country.findIndex(c => c.name.toLowerCase().includes(searchValue));
    
    if (countryIndex !== -1) {
        currentNumber = countryIndex;
        updateContent();
    }
}

document.getElementById("yows").addEventListener("input", searchCountry);


function searchCar() {
    const searchValue = document.getElementById("yowss").value.toLowerCase();
    const carIndex = cars.findIndex(c => c.hello.toLowerCase().includes(searchValue));
    
    if (carIndex !== -1) {
        curent = carIndex;
        carupdate();
    }
}

document.getElementById("yowss").addEventListener("input", searchCar);

    


    







  </script>









</body>
</html>


