<!DOCTYPE html>
<html lang="en">
    
<!--Programmer: Joseph Pesek
    Date:       5 October 2017-->
    
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socrates Pet Resort is a luxury pet boarding facility for dogs and cats located in Pinellas Park Florida.">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Contact Us</title>
</head>
    
<!--Main content-->    
<body>
    
    <!--Header for page title-->
    <header>

        <p>Contact Socrates Pet Resort</p>
        
    </header>
    
    <!--Lion banner artwork-->  
    <div id="banner"><img src="images/lion_banner.jpg" alt="Lion banner used with permission from G Adam Orosco. Copyright by G Adam Orosco. Available from OvahFx Art Without a Brush.">
    </div>

        <!--Navigation between pages-->
        <nav>

            <?php include menu.php ?>

        </nav>

        <!--Main content area-->
        <main>
            
            <!--Main content container-->
            <div id="container">
                
                <!--Begin contactUs class-->
                <div class="contactUs">
                
                    <h1>Contact Us</h1>
                    <h2>For more information about our pet resort, please provide some information about you and your pet and we will be in contact.</h2>
                  
                <!--End contactUs class-->
                </div>
                
                <!--Begin form-->
                <form>
                
                    <label for="lName">Last Name:</label>
                    <input type="text" name="lName" id="lName">
                    
                    <label for="fName">First Name:</label>
                    <input type="text" name="fName" id="fName">
                    
                    <label for="pName">Pet Name:</label>
                    <input type="text" name="pName" id="pName">
                    
                    <label for="breed">Breed:</label>
                    <input type="text" name="breed" id="breed">
                    
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                    
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" id="phone">
                    
                    <input type="submit" id="submit" value="Submit" class="btn" onclick="window.alert('Thank you for your interest! We will be contacting you soon.')"/>
                    
                    <input type="reset" id="reset" value="Reset" class="btn">
                
                <!--End form-->
                </form>
            
            <!--End of main continer-->
            </div>
        </main>

        <!--Begin footer section for copyright and contact information-->
        <footer>
            
           <?php include footer.php ?>
            
        </footer>
    
</body>


</html>