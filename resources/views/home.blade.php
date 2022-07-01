<!DOCTYPE html>

<!-- At smaller screen sizes the nav bar is scrollable try it out -->
<html>

<head>
   <link href='https://fonts.googleapis.com/css?family=Montserrat|Pacifico|Kadwa|Nixie+One|Hind+Siliguri' rel='stylesheet' type='text/css'>
  
<title> </title>
  <style>
    html {
  font-family: sans-serif;
}

* {
  box-sizing: border-box;
  
}


body {
box-shadow: inset 0 0px 10px rgba(0, 0, 0,11.5); 
margin-bottom: auto;
overflow: auto;
margin: 0;
width: 100%;
padding-top: 20px;
padding-bottom: 10px;
background-color: white;
display: flex;
flex-wrap: wrap;
justify-content: center;
/*   
  
   //background-image: url("https://image.freepik.com/free-vector/fish-seamless-background_8365-65.jpg");
  background-image: url("https://t3.ftcdn.net/jpg/01/07/14/00/360_F_107140090_3eRlMItNMxEcw67BDq0lPAppu5q62QUw.jpg");

  background-image: url("https://media.istockphoto.com/photos/abstract-red-cement-wall-texture-picture-id520420178?k=20&m=520420178&s=612x612&w=0&h=njt0IQde-e1L-0ooBvUCh1hnlNkXg_RglzQsFAQ8_-M=");

    background-image: url("https://static.vecteezy.com/system/resources/thumbnails/006/923/419/small/cute-mustache-tacos-logo-mascot-illustrations-for-your-work-logo-mascot-merchandise-t-shirt-stickers-and-label-designs-poster-greeting-cards-advertising-business-company-or-brands-vector.jpg");
  
  
  background-image: url("https://media.istockphoto.com/photos/abstract-red-cement-wall-texture-picture-id520420178?k=20&m=520420178&s=612x612&w=0&h=njt0IQde-e1L-0ooBvUCh1hnlNkXg_RglzQsFAQ8_-M=");
 
   background-image: url("https://img.freepik.com/vector-gratis/taco-comida-tradicional-mexicana-ilustracion-aislada_184733-99.jpg?w=360");
 */
  background: black;
}


#headerimg{width: 100px; margin: 0px;}

.header-wrapper{display: flex; flex-wrap: wrap; justify-content: center; align-items: center;
  width: 100%; height: cover; margin-bottom: 35px; margin-top: 35px; border-radius: 20px;}


/* width */
::-webkit-scrollbar {
width: 8px;
}
/* Track */
::-webkit-scrollbar-track {
background: black;
 
  border-radius: 10px;
  box-shadow: inset 0 0 10px rgba(0,0,0,0.5);
}
/* Handle */
::-webkit-scrollbar-thumb {
border-radius: 10px;
background:white;
}




.nav {
  height: 60px;
  flex: 100%;
  display: flex;
  padding-left: 2vw;
  padding-right: 2vw;
  margin-top: 0px;
  color: white;
  background-color: black;
  box-shadow: inset 0 0px 10px rgba(0, 0, 0,11.5);
  z-index: 1;
}

.nav ul {
  padding: 0;
  list-style-type: none;
  flex: 1;
  display: flex;
  font-weight: bold;
}

.nav li {
  display: inline;
  text-align: center;
  flex: 1;
  
}

.nav a, .nav span {
  display: block;
  font-size: 100%;
  height: 3rem;
  line-height: 1.7;
  text-transform: uppercase;
  text-decoration: none;
  color: white;
}

.nav li:hover {
 background-color: white;
 color: black;
 border-radius: 20px;
}
  .nav a:hover {
   color: black;
}



h1 {
/*  Menu Title  */
  color: white;
  text-align: center;
  font-size: auto;
  line-height: 0;
  padding: 0px;
  margin: 0px;
  top: 0;
  width: 100%;
  color: black;
/*  border: 5px solid black; */
  border-radius: 30px;
  font-size: 40px;
  font-family: Pacifico, Nixie One, serif;
  color: white;background: black; }



/* h2 colors */

h2 {
  text-align: left;
  font-size: auto;
  line-height: 0;
  padding: 10px;
  margin-top: 10%;
  width: 100%;
  justify-content: center;
  display: flex;
  text-align: center;
  margin-left: auto;
  margin-right: auto;}


.appetizers{
  padding: 10px;
  border-top-left-radius: 30px;
   border-top-right-radius: 30px;
   margin-top: -50px;
}

.main-course{
  //background-color: #f991af; 
  padding: 10px; background: linear-gradient(#f2eecb, #cfb997, #f2eecb);  background: black;
}


.desserts{
background-color: #abdbe3;
 background: linear-gradient(#f2eecb, #cfb997, #f2eecb); 
padding: 10px;
   border-bottom-left-radius: 30px;
   border-bottom-right-radius: 30px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center; background: black;
}

mark 
{
padding: 30px;
border-radius: 40px;
font-size: 130%;
background-color: white;

  
}

.center {
  margin: 0px;
  width: 100%;
  height: 15%;
  padding: 1px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  
}
.iframe-wrapper{
  border-radius: 40px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  margin-bottom: -40px;
  overflow: hidden;
  border: 5px solid black; 
}

h3{color: white;
  text-align: center;
  font-size: auto;
  background: #f9adc9;
  color: black;
  width: 100%;
  padding: 20px;
  padding-top: 2px;
  padding-bottom: 5px;
  margin-bottom: 25px;
  background: black;
  color: white;
}


section
{
  
box-shadow: inset 10px 10px 10px rgba(0, 0, 0,11.5);
filter: drop-shadow(0 0 1rem black);
margin-top: auto;
margin: 0;
/* width: 800px; */
width: 1000px;
background-color: black;
padding: 20px;
padding-top: 0px;
padding-bottom: auto;
border-radius: 30px;
box-shadow: inset 0 0 10px rgba(0,0,0,.5);}

article0{
  width: auto;
  postion: center;
  margin-left: 0, auto;
  margin-right: 0, auto;
  border-radius: 10px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  font-size: auto;
  background: #e8803e;
  padding: 0px; 
  padding-bottom: 10px;
  margin: 10px;
  margin-top: -80px;
}

article1
{
/*  menu section description  */
  border: gray;
  background: #F5F5F5;
  margin: 10px, auto;
  padding: 5px;
  width: 100%;
  postion: center;
  border-radius: 10px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  font-size: auto;
  text-align: center;
}



footer{
  
  background: black;
  color: white;
  padding: 10px;
  width: 100%;
  height: 100px;
  margin-top: 40px;
  width: auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  
  text-align: center;
    margin-bottom: -10px;
 
  
}

.footer-wrapper { width: 100%;}

.footer-wrapper > a > img{ 
  height: 60%;
  width: 60%; 
text-decoration: none;
}
.footer-wrapper > a > img:hover{cursor:pointer;}


/*-------------GRIDS-------------  */


.grid-container, .grid-flex{
  display: grid;
 grid-template-columns: repeat(3, 1fr);
  grid-gap: 1px;
}

.grid-container > div {
  border-radius: 5px;
  border: solid #F5F5F5;
  margin: 2%;
  background-color: #F5F5F5;
  text-align: left;
  padding: 5%;
  font-size: 100%;

}

.grid-container > div:hover {
cursor: pointer;}

@media (min-width: 900px) {
#grid-flex{
  grid-template-columns: repeat(2, 1fr);
  width: 600px;
  display: flex;

  } }




 img {  
  height: auto;
  width: 100%;
  padding: 0%;
  margin: 0%;
 
   
}


/*-------------Screen Responsiveness-------------  */

@media (max-width: 1250px) {
body {
  padding: 30px;
  }
  
}



  

@media (max-width: 900px) {
  h1{
    margin: 0px;
    padding: 6px;
     padding-bottom: 20px;
    line-height: 1;
  }
  h2 {
  line-height: 1;
    
  }
  mark{padding: 8px;}
  
    .grid-container, .grid-flex {
      grid-template-columns: repeat(2, 1fr);}
  
  ::-webkit-scrollbar {
width: 0px;
}
 
  /* Handle */
::-webkit-scrollbar-thumb {
border-radius: 10px;
background: transparent;
}
}

@media (max-width: 550px) {

  section{
    
    width: 100%;
    padding: 0px;
    margin: 0px;
    background: transparent;
    box-shadow: none;
  }
  
  article0{
    margin: 0px;
/*     border: 4px solid black; */
    
  }
  
  body{ padding: 5px;
  padding-top: 0px; background: black;}
  
  .grid-container {
 grid-template-columns: repeat(1, 1fr);
  grid-gap: 1px;}

.nav{width: 100vw;}
    
.nav li:hover {
 background-color: black;
 color: white;}
  
 .nav a:hover {
  color: white;}


  article{overflow: hidden;}
}



@media (max-width: 730px) {
  iframe {
  width: auto;
  height: auto;
  }
  
  
  
  .nav {
  overflow: auto;
  overflow-y: hidden;
  white-space: nowrap;
  }
  
 .nav > ul > li >a{ 
  color: white;
  display: inline-block;
  text-align: center;
  padding: 14px;
  line-height: 0.2;}
  }article0{ background: black;
}
  </style>
</head>
  
<body>

 <section>
  
<br>
<br>
       <article0> 
           <div class="header-wrapper"><img src="https://img.freepik.com/vector-gratis/taco-comida-tradicional-mexicana-ilustracion-aislada_184733-99.jpg?w=360" id="headerimg">  <h1> - Tacotopia -</h1> </div>
 <!-- Appetizers ----------------------------------- -->
        <article> 
          
          <div class="nav">  
     <ul>
      <li><a href=""> Menu</a></li>
        <li><a href="https://codepen.io/kjkosta/full/ExbMYRv">Locations</a></li>
      <li><a href="https://www.indeed.com/jobs?q=YOUR%20BUSINESS%20INDEED%20HERE&l=San%20Francisco%2C%20CA&vjk=cafbdf97e8fc2b75">Jobs</a></li>
       <li><a href="">Contact</a></li>
        <li><a href="https://codepen.io/kjkosta/full/OJQmpqy">About Us</a></li>
</ul> </div> 
          
          <div class="appetizers">
         <h2 ><mark>Appetizers</mark></h2>
         
   <article1> <p>Fresh and locally sourced, served with delicious toppings hand selected by our best chef.</p></article1>
         
          <div class="grid-container">
          @foreach ($restaurantList as $restaurant)
      
  <div class="item1">
   <img src="{{$restaurant->img}}" alt="food">
    
        <p> <b> <u>{{$restaurant->name}}</u></b>   | ${{$restaurant->price}}<br>
          <i>{{$restaurant->description}}</i>
    
    
    </p>
    <a href="/detail"><button>Detail</button></a></div>
   @endforeach

   </div>
 
  <!-- Tacos ----------------------------------- -->
          <article> 
             <nav1>   </nav1>
       <div class="main-course">
      <h2><mark> World Famous Tacos </mark></h2>

    <article1> <p>All tacos come with your choice of french fries, sweet potato fries, coleslaw, or chips and salasa.</p> </article1> 
       
       <div class="grid-container">
      
  <div class="item7">
  
     <img src="https://thecozyapron.com/wp-content/uploads/2018/03/baja-fish-tacos_thecozyapron_1.jpg" alt="food"> 
        <p> <b> <u>Crispy Beer Battered Fish Taco</u></b> | $12 <br>
          <i>Beer battered Cod With cabbage, radish, cilantro, pico de gallo, aioli, flour tortilla. </i>
    
    
    </p></div>
    
         
      
  <div class="item8">
   
     <img src="https://i.ytimg.com/vi/pOlftwO0CJg/maxresdefault.jpg" alt="food"> 
           <p> <b> <u>Juicy Balkan Chevapi Taco</u></b> | $15 <br>
          <i>Grilled minced lamb with red onion, feta cheese, ground hot pepper flakes, kajmak sauce, pita tortilla. </i>

    </p></div>
         
         
  <div class="item9">
    <img src="https://3f4c2184e060ce99111b-f8c0985c8cb63a71df5cb7fd729edcab.ssl.cf2.rackcdn.com/media/14055/fishtacoswithmango-avocadosalsa.jpg" alt="food"> 
    
           <p> <b> <u>Mango Salsa Fish Taco</u></b> | $12 <br>
          <i>With radish, avocado, cilantro, mango salsa, flour tortilla. </i>
    </p></div>
         
         
  <div class="item10">
           <img src="https://media-cdn.tripadvisor.com/media/photo-s/14/48/ea/28/tuna-poke-tacos-in-a.jpg" alt="food"> 
           <p> <b> <u>Ahi Poke Taco</u></b> | $12 <br>
          <i>With marinated green onion, lettuce, sesame seeds, wasabi aioli, wonton tortilla. </i>
    </p></div>
             
      
  <div class="item11"> 
    
    <img src="https://assets.epicurious.com/photos/54ac3a546529d92b2c039503/1:1/w_600%2Ch_600/51235670_charred-octopus-taco_1x1.jpg" alt="food"> 
         <p> <b> <u>Sweet Octopus Taco</u></b> | $16 <br>
          <i>With cabbage, sweet potato, avocado, red onion, radish, cilantro lime aioli, flour tortilla. </i>
    </p></div>

        
  <div class="item12"> 
    
       <img src="https://mealplannerpro.com/images/recipes/2106/941390.jpg" alt="food"> 
           <p> <b> <u>Blackened  Shark</u></b> | $14 <br>
          <i>Smokey flavor with cabbage, red onion, garlic sauce, lemon aioli, cilantro, flour tortilla. </i>
    </p></div>
            </div>
   </div>
     
   
  <!-- DESSERTS ----------------------------------- -->
       
    <article> 
        <nav1>   </nav1>
      <div class="desserts">
      <h2><mark> Desserts </mark></h2>
 
       <div class="grid-container" id="grid-flex">
         
  <div class="item1D">
  
      <img src="https://www.rotinrice.com/wp-content/uploads/2011/08/MatchaIceCream-1.jpg" alt="food"> 
        <p> <b> <u> Coconut Green Tea Ice Cream</u></b> | $8 <br>
          <i>Vanilla coconut matcha mix ice cream topped with whipped cream. </i>
</div>
          
  <div class="item2D">
    
    <img src="https://static1.squarespace.com/static/518fe5d1e4b0d1dfab80579a/518fe739e4b06bff89803f68/53cf88ace4b050e4c4d2bdc5/1407620423216/?format=1500w" alt="food"> 
           <p> <b> <u>Tempura Ice Cream</u></b> | $8 <br>
          <i>Deep fried ice cream topped with powdered sugar, chocolate drizzle, and whipped cream. </i>
    
    
    </p></div>
         
         </div>
      </div>
   
  <br>
  <br>
       <div class="center">
   <h3>Come Visit Us! <br> 587 E Cabrillo Blvd, Santa Barbara, CA 93103</h3>
    <div class="iframe-wrapper"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22143.157085974533!2d-119.70710023740962!3d34.411511715897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf2f445ba63f78ba!2sSanta%20Barbara%20Beach!5e0!3m2!1sen!2sus!4v1645600561356!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
         </div>
      <br>
      <br>
      
    </article>
        </article0>
       
       
    
       <br>
           <footer>
           <div class="footer-wrapper"> 
             <a>  <img src="https://en.instagram-brand.com/wp-content/themes/ig-branding/prj-ig-branding/assets/images/ig-logo.svg" style="width:90px;"> </a>
             
             <a>  <img src="https://cooktek.com/wp-content/uploads/2018/07/sm_facebook.png" style="width: 65px; height: 65px;"> </a>
             
             </div>  
             <br>
             <div class="footer-wrapper"> 
    This website is built by Kris Kosta © 2022 &nbsp; <a href= "https://codepen.io/kjkosta"> https://codepen.io/kjkosta </a> </div>
       </footer>
</section>
<br>
<br>
         
</body>

</html>