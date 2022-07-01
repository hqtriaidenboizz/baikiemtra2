<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Card</title>
  <style>
    .container{
    width: 960px;
    height: 800px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    

}

#card{
    width: 500px;
    height: 500px;
    background-color: rgb(41, 41, 41);
    border-radius: 0 .5rem .5rem 0;
    
}

img{
    width: 400px;
    height: 500px;
    object-fit: cover;
    border-radius: .5rem 0 0 .5rem;
}

.feature{
    float: left;
    margin: 15px 5px 15px 100px;
    background-color: rgb(56, 56, 56);
    padding: 10px;
    height: 16px;
    border-radius: .2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    
}

.feature p{
   
    color:#ffc83d;  
    font-family: poppins, Arial, Helvetica, sans-serif;    
    font-weight: 400;
    font-size: .9rem;
    letter-spacing: .1rem;
    
}

.cuisine{

    
    margin: 15px 25px 15px 5px;
    background-color: rgb(56, 56, 56);
    padding: 10px;
    height: 16px;
    width: 16px;
    border-radius: .2rem;
    display: flex;
    justify-content: center;
    align-items: center;
}

.dish{
    margin: -19px 25px -30px 20px;
    float: left;
}

h1{
    font-size: 1.4rem;
    font-family: poppins,Arial, Helvetica, sans-serif;
    color: white;
    font-weight: 400;

}

.rating{

    float: left;
    margin: 0px 25px 0px 20px;
    height: 19px;
    
}
.rating p{
    
color: rgb(255, 255, 255);
font-family: open-sans, Arial, Helvetica, sans-serif;
}

.checked {
    color: orange;
  }
  
  
.description{
    margin: 5px 20px 0px 20px;    
    float: left;
  }
  .description p {

    font-size: .95rem;
    color: rgb(163, 163, 163);
    font-family: open-sans, Arial, Helvetica, sans-serif;
    line-height: 1.1rem;
  }

  .amount{
      float: left;
      margin: -18px 0px 0px 100px; 
  }

  .amount h3{

    color:#ffc83d; 
    font-family: poppins,Arial, Helvetica, sans-serif;
    font-weight: 400;
    letter-spacing: .05rem;

 }

 .cta button{

    float: right;
    background-color:#ffc83d;
    border: 1px solid #ffc83d;
    color: #292929;
    padding: 5px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    border-radius: .2rem;
    margin: 0px 10px 0px 0px;
    font-family: poppins,Arial, Helvetica, sans-serif ;
    font-weight: 600;
    transition-duration: 0.4s;
   cursor:pointer;
 }
 .a{
    padding: 100px ;
 }
 .cta button:hover {
    background-color: #292929;
    border: 1px solid #ffc83d; ;
    color: #ffc83d;
  }

 body{
     background-color: black;
 }

  </style>
</head>

<body>

  <div class="container">
    <img src="{{$sanpham->img}}" alt="vegan">
    <div id="card" class="center">
        <div class="a">
        <div class="dish">
        <h1>{{$sanpham->name}}</h1>

      </div>
      <div class="rating">
        <p>
          <span class="fa fa-star checked"></span> 4.3
        </p>
      </div>

      <div class="description">
        <p>
        {{$sanpham->description}}
        </p>

      </div>
      <div class="amount">

        <h3>${{$sanpham->price}}</h3>
      </div>

      <div class="cta">

        <button type="button">Order</button>

      </div>

    </div>
        
      
  </div>
</body>

</html>