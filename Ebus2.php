?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Enter Details</title>
        
        
    </head>
    
    <body>
        <!-- Adding navigation bar to the page -->
        <header>
            <div class="container">
                
               
                
                <nav>
                    <ul>
                       <li><a href="shophome.html">Shop</a></li>
                        <li><a href="homepage.html"></a>Home</li>
                        <li><a href="aboutproductspage.html">Products</a></li>
                    </ul>
                </nav>
                
            </div>
        </header>
        
        <!-- Adding content to the page -->
        <div class="ebus_content">
            <h1 class="ebus2_heading">Please enter your payment details</h1>
            
            <form action="Ebus3.php" method="POST">
                
                <label for="user_name" class="lbl_name">
                    Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="name" id="user_name" name="user_name" placeholder="Enter Your Name">
                </label>
                
                <br>
                
                <label for="user_email" class="lbl_email">
                    Email Address 
                    <input type="email" id="user_email" name="user_email" placeholder="example@gmail.com">
                </label>
                
                <br>
    
                <label for="user_pin" class="lbl_pin">
                    PIN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="pin" id="user_pin" name="user_pin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                    <br>
                    (Only numbers are allowed for the PIN)
                </label>
                
                <br>
                <br>
                
                <button class="btn_proceed" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            </form>
            
            <br>
            
            <button class="btn_validate" onClick="validateName()">Validate</button>
            
            <a class="return_btn" role="button" href="Ebus1.php"><i class="material-icons">keyboard_arrow_left</i>Return</a>
        
            <?php  
            // Set session variables
              $_SESSION["total"] = $_POST["total"];
            ?>
        </div>
        
        
        <footer class="ebus_copyright">
            <p>
               
                <small>Cloudhub is a ficticous company</small>
            </p>
        </footer>
    </body>
</html>