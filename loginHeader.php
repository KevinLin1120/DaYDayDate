<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDDate</title>
    <style>
    html{
        height: 100%;
    }
    body{
        margin:0;
        padding: 0;
        font-family:sans-serif ;
        background-image: url(./signup.jpeg);
        background-position:center;
        background-size:cover;
    }
    .sign-up{
        border-radius: 10px;
        width: 450px;
        height: 400px;
        box-shadow: 0 0 3px 0 rgba(0,0,0,0);
        background: rgba(255, 255, 255, 0.797);
        padding:20px;
        margin:8% auto 0;
        text-align: center;
    }
    .sign-up h1{
        margin-bottom: 30px;
        margin-top: 20px;
    }
    .sign-in{
        text-align: left;
    }
    .sign-in a{
        color:lightslategray;
    }
    .forgot{
        text-align: right;
        margin-left: auto;
    }
    .forgot a{
        color:lightslategray;
    }
    .input-box{
       
        padding: 10px;
        margin: 10px 0;
        width: 70%;
        border: 2px solid #898686;
        border-radius: 50px;
    }
    button{
        background-color: red;
        color:whitesmoke;
        width: 70%;
        padding: 10px;
        border-radius: 20px;
        font-size: 18px;
        margin: 60px 0;
        border:none;
        outline: none;
        cursor: pointer;
    }
    *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }
    nav{
        background-color: white;
        height: 80px;
        margin: 0;
        padding: 0;
    }
    label.logo{
        color:black;
        font-size: 36px;
        line-height: 80px;
        padding: 0 50px;
        font-weight: bold;
    }
    nav ul{
        float: right;
        margin-right: 20px;
    }
    .fsBtn{
        display: flex;
        padding: 0 65px;
        text-decoration: underline;
    }
    input[type=search] {
    float: right;
    border: 1px solid #000;
    padding: 4px 12px;
    border-radius: 20px;
    -webkit-appearance: none;
    margin-right: 20px;
    margin-top: 15px;
    width: 160px;
}
a{
    text-decoration: none;
    color: black;
}
    </style>
</head>
<body>
    <header>
        <nav>
            <form>
                <input type="search">
            </form>
            <label class="logo"><a href="./index.php">DayDay Date</a></label>
        </nav>
    </header>
</body>
</html>