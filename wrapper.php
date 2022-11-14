<style type="text/css">
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: poppins;
            text-decoration: none;
            list-style: none
        }
        .wrapper{
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url(https://images.pexels.com/photos/612252/pexels-photo-612252.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            
        }
        .wrapper label{
            background: #262626;
            border-radius: 50px;
            color: #fff;
            font-size: 24px;
            padding: 16px 48px;            
        }
        #chkBox{
            display: none;
        }
        .mainContnt{
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.7s;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 300;
            background: rgba(0,0,0,0.8);
            
        }
        .box{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            width: 50%;
            height: 400px;
            transform: translateY(-1000px);
            transition: all 2s;
            margin: auto;
            background: #fff;
            
        }
        .bx1{
            background-image: url(https://images.pexels.com/photos/1938032/pexels-photo-1938032.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .bx2{
            padding: 60px 32px 0 32px;
        }
        .bx2 h3 {
	margin-bottom: 16px;
	text-transform: uppercase;
}
        .login-form input {
	width: 100%;
	height: 52px;
	padding: 15px;
	margin-bottom: 25px;
}
        .login-form input[type="submit"] {
	background: deepskyblue;
	font-size: 25px;
	text-transform: uppercase;
	line-height: 20px;
	color: #fff;
}
        
        .close-box{
            position: relative;
            text-align: right;
            color: #262626;
            font-weight: bold;
            margin-top: 64px;
            margin-bottom: 32px;
            
            
        }
        .box-close {
	position: absolute;
	bottom: 350px;
	right: 5px;
}
        #chkBox:checked + .mainContnt{
            visibility: visible;
            opacity: 1;
        }
        #chkBox:checked + .mainContnt .box{
            transform: translateY(0);
        }
</style>
<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <title>How to Create a Modal Using only HTML and CSS</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="wrapper">
        <div class="btn-area">
            <label for="chkBox">Contact US</label>
        </div>
    </div>
    
    <input type="checkbox" name="" id="chkBox">
    <div class="mainContnt">
        <div class="box">
            <div class="boxes bx1"></div>
            <div class="boxes bx2">
                <h3>Contact Us</h3>
                <div class="login-form">
                    <input type="text" placeholder="Enter Your Email..">
                    <input type="password" placeholder="Enter Your Password..">
                    <input type="submit" value="submit">
                </div>
                <div class="close-box">
                    <label for="chkBox" class="box-close">X</label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
