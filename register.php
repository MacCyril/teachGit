
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- This is going to be a website/webapp where you can store all kinds of files(Google drive) -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section>
           <div class="head1">
               <div class="greeter">
                   <h1>welcome</h1>
                   <h3>to</h3>
                   <h1>iDocs</h1>
                   <span>The Cloud storage for everything</span>
               </div>
           </div>
           <div class="navbar" id="navv">
                <nav id="navbar">
                    <div class="logo">
                       <img src="" alt="Logo Here">
                    </div>
                    <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">About</a></li>
                       <li><a href="#">Contact</a></li>
                       <li><button id="butt"><a href="#">Login</a></button></li>
                       <li><button><a href="#">SignUp</a></button></li>
                    </ul>
                    </nav>
            </div>
        </section>
        <section>
            <div class="lander">
                <div class="lander1">
                    <h2>Welcome to the platform where you can:</h2>
                    <ul>
                        <li>Save your files Anywhere, anytime</li>
                        <li>Access them from anywhere</li>
                        <li>Download your files anytime</li>
                        <li>Easy to navigate</li>
                        <li>Compatible on all devices</li>
                    </ul>
                    <button onclick="document.getElementById('ido1').style.display='block' ">Sign Up</button>
                    <fieldset id="ido1">
                        <legend><h3>SignUp Here</h3></legend>
                        <form action="" method="get">
                        <label for="Name">FullName :<input type="text" name="fullname"  required id=""></label>
                        
                        <label for="pass">Email :<input type="email" name="email"  required id=""></label>
                        
                        <label for="Name">Phone Number :<input type="tel" name="phonenumber" required  id=""></label>
                        
                        <label for="Name">Password :<input type="password" name="password"  required id=""></label>
                        
                        <label for="Name">Retype Password :<input type="password" name="confirm_password" required  id=""></label>
                    
                        <button type="submit">Submit</button>
                        </form>
                    </fieldset>
                </div>
                <!-- <script>
                    modal = document.getElementById('ido1');
                    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

                </script> -->
                <div class="lander2">
                  
                </div>
                  
                  
            </div>
        </section>
    </main>

</body>
<script>
    window.onscroll = function(){wescroll()};
    var navbar = document.getElementById("navv");
    var sticky = navbar.offsetTop;

    function wescroll(){
        if(window.pageYOffset>=sticky){
            navbar.classList.add("sticky");
            // navbar.style.position="fixed"
        }else{
            navbar.classList.remove("sticky");
        }
    }
</script>
</html>
