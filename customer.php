<html>
    <head>
    <title>customer management</title>
    <link href="css/agency.min.css" rel="stylesheet">
      <!-----logo--------->
    <link rel="shortcut icon"
           href="img/logo21.png"width="16" height="16" />
        
        
<style> 
    body {
    background: #555;
}
         .btn{
                text-align: center;
                margin: 20px;
            }
            .btn input {
                font-size: 12pt;
                font-weight: bold;
            }
            .center {
                text-align: center;
            }
        
        </style>
   
    </head>
    
    
    
    
    <body>
        <div class="menuAdmin" >
        <ul>
<a href="vendor.html">Vendor Manage</a>
<a href="Customer.php">Customer</a>
<a href="category.php">Category</a>
<a href="location.php">City</a>
<a href="type.php">Vendor Type</a>

</ul>
        </div>
        
        <div class="content">
            <div class="center">
            <img src="img/Logo33.png" width="30%">
            </div>
        <h1 style="text-align:center;">Customer Management</h1>
    
             
 
            
            <form method="POST" action="customer.php">
            <fieldset>
                  <legend>Delete Customer Account</legend><br>

                Customer E-mail: <input type="email" size="40" name="email" id="email">
                
                     <br><br>
                <div class="btn"><input type="submit" value="Delete" name="delete-btn">&nbsp;<input type="reset"value="Reset"></div>

            </fieldset>
        
            </form>    
        </div>
    </body>
</html>