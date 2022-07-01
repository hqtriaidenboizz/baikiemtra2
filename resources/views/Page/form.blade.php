<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		* {
    box-sizing: border-box;
}

body {
    margin: 15px 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 17px;
    padding: 8px;
background: black;
}

.cont {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid rgb(0, 0, 0);
    border-radius: 15px;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="date"],
input[type="password"],
input[type="tel"],
select,
textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    margin: 10px;
}

fieldset {
    border-radius: 10px;
    border: solid 3px rgb(211, 211, 211);
    margin: 10px;
}

h1 {
    text-align: center;
    color:rgb(56, 56, 56);
    font-size: 40px;
}

input[type="submit"] {
    background-color: #ffc83d;
    border-radius: 10px;
    border: 0px;
    padding: 15px 25px;
    color: black;
    cursor:pointer;
    width: 120px;
}

input[type="submit"]:hover {
    background-color: #292929;
	color: #ffc83d;
}

@media screen and (max-width: 450px) {
    body {
        margin: 15px 5px;
    }
    
}

@media all and (min-width:1001px) {
    body {
        margin: 15px 200px;
    }
}
	</style>
</head>
<body>
<body>
    <div class="cont">
    <form action="">
        <h1>FORM ADD PRODUCT</h1>
        <h2>Personal details</h2>
        <p>Name : <input type="text" name="name" placeholder="eg: robert" required></p>
        <p>Price: <input type="number" name="name" placeholder="eg: willimson" required></p>
		<p>Image: <input type="text" name="name" placeholder="eg: robert" required></p>
        <p>Description: <input type="text" name="name" placeholder="eg: willimson" required></p>
        <input type="submit" value="DONE">
    </form>
    </div>
</body>
</body>
</html>