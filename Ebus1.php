<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <title>Select Product</title>
        
        
       
        
        
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
        
        <!-- Adding page content -->
       
            
            <h1>Select a Product</h1>
                
            <br>
                
            <form method="POST" action="Ebus2.php">
              
              <!-- Display radio buttons for cloud service options -->
              <label for="salesforce" class="label1">
                <input type="radio" id="salesforce" name="product" checked onClick="rbChecked()"/>
                SalesForce @ $100
              </label>
                  
              <br>
              
              <label for="cloud9" class="label2">
                <input type="radio" id="cloud9" name="product" onClick="rbChecked()"/>
                 Cloud9 @ $200
              </label>
                  
              <br>
                  
              <label for="aws" class="label3">
                <input type="radio" id="aws" name="product" onClick="rbChecked()"/>
                AWS @ $300
              </label>
                  
              <br>
                  
              <label for="gmail" class="label4">
                <input type="radio" id="gmail" name="product" onClick="rbChecked()"/>
                Gmail @ $400
              </label>
              
              
              
              <!-- Breakdown of the price for the selected option -->
              <label for="subtotal" class="label5">
                Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="discount" class="label6">
                Discount @ 5% &nbsp;&nbsp;&nbsp; <input type="text" id="discount" name="discount" value="0.00" readonly/>
                <br>
                (- Discount)
              </label>
                  
              <br>
              
              <label for="vat" class="label7">
                VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
                  
              <br>
                  
              <label for="total" class="label8">
                Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="total" name="total" value="0.00" readonly/>
                <br>
                (- Discount + VAT)
              </label>
        
              <br>
              
              <div class="add_btn">   
                <button class="add_btn_style" type="submit" id="btnProceed" disabled>Add to Shopping Cart <i class="material-icons">add_shopping_cart</i></button>
              </div>  
                
            </form>
              
            <!-- button for calculating price breakdown of the selected option -->    
            <button class="cal_btn" onClick="calcSub()">Calculate Cost</button>
               
            <br>
              
            <!-- button for clearing the selected options -->    
            <a class="clear_btn" role="button" href="Ebus1.php">Clear Choice <i class="material-icons">delete</i></a>
        </div>
        
        <!-- Displaying copyright information -->
        <footer class="ebus_copyright">
            <p>
                
                <small>Cloudhub is a ficticous company</small>
            </p>
        </footer>
    </body>
</html>