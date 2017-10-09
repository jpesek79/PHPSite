<!DOCTYPE html>
<html lang="en">
    
<!--Programmer: Joseph Pesek
    Date:       5 October 2017-->
    
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socrates Pet Resort is a luxury pet boarding facility for dogs and cats located in Pinellas Park Florida.">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Boarding</title>
</head>
    
<!--Main content-->    
<body>
    
    <!--Header for page title-->
    <header>

        <p>Socrates Pet Resort Boarding Information</p>
        
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
                
                <!--Begin boarding class-->
                <div class="boarding">
                    
                    <h1>Boarding Information</h1>
                    <h2>At Socrates Pet Resort we provide the best care for your pets while you are away. We offer a variety of services and packages so you can customize the experience for your four-legged family members.</h2>
                
                <!--End boarding class-->
                </div>    
                
                <!--Begin mobile class-->
                <div class="mobile">
                    
                    <!--List section to replace table for mobile viewport-->
                    <h1>Packages:</h1>
                    <dl>
                        <dt>Premium</dt>
                        <dd>Regular-sized sleeping area</dd>
                        <dd>1 hour personal play time per day</dd>
                        <dd>Basic daily massage</dd>
                        <dd>*Starting from $59 per day</dd>
                    
                        <dt>Deluxe</dt>
                        <dd>Extended sleeping area</dd>
                        <dd>2 hour personal play time per day</dd>
                        <dd>Deluxe daily massage</dd>
                        <dd>Basic grooming before departure</dd>
                        <dd>*Starting from $69 per day</dd>
                    
                        <dt>Full Resort Treatment</dt>
                        <dd>Full room sleeping area</dd>
                        <dd>3 hour personal play time</dd>
                        <dd>2 Deluxe massages per day</dd>
                        <dd>Full grooming service before departure</dd>
                        <dd>*Starting from $99 per day</dd>
                    
                        <dt>*Prices vary depending on the size and age of your pet</dt>
                        <dd>Custom packages also available</dd>
                    </dl>
                    
                <!--End mobile class-->
                </div>
				
                <!--Begin tablet class-->
				<div class="tablet">
                
                <!--Begin Table-->
                <table>
                
                <caption>Dog Boarding and Services Information</caption>
                    
                    <!-- Header Row-->
                    <tr>
                        <th>Package</th>
                        <th>Description</th>
                        <th>Starting Price</th>
                    </tr>
                
                    <!--Row 1-->
                    <tr>
                        <td>Premium</td>
                        <td>This package comes with a regular-sized sleeping area, 1 hour of personal play time with a trained resort employee followed by a basic pet massage.</td>
                        <td>Prices start at $59 per day (depending on the age and size of your pet)</td>
                    </tr>
                    
                    <!--Row 2-->
                    <tr>
                        <td>Deluxe</td>
                        <td>This package comes with an extended-sized sleeping area, 2 hours of personal play time with a trained resort employee followed by a deluxe pet massage. Standard grooming will also be completed within an hour of your pet's scheduled departure time.</td>
                        <td>Prices start at $69 per day (depending on the age and size of your pet)</td>
                    </tr>
                    
                    <!--Row 3-->
                    <tr>
                        <td>Full Resort Treatment</td>
                        <td>This package comes with a full room sleeping area, 3 hours of personal play time with a trained resort employee preceded and followed by a deluxe pet massage. Complete grooming will also be completed within an hour of your pet's scheduled departure time.</td>
                        <td>Prices start at $99 per day (depending on the age and size of your pet)</td>
                    </tr>
                
                </table>
                <!--End Table-->
                
                <!--End tablet class-->
                </div>
                
                <!--Begin desktop class-->
                <div class="desktop">
                    
                <!--Begin Table-->
                <table>
                
                <caption>Dog Boarding and Services Information</caption>
                    
                    <!-- Header Row-->
                    <tr>
                        <th>Package</th>
                        <th>Description</th>
                        <th>Starting Price</th>
                    </tr>
                
                    <!--Row 1-->
                    <tr>
                        <td>Premium</td>
                        <td>This package comes with a regular-sized sleeping area, 1 hour of personal play time with a trained resort employee followed by a basic pet massage.</td>
                        <td>Prices start at $59 per day (depending on the age and size of your pet)</td>
                    </tr>
                    
                    <!--Row 2-->
                    <tr>
                        <td>Deluxe</td>
                        <td>This package comes with an extended-sized sleeping area, 2 hours of personal play time with a trained resort employee followed by a deluxe pet massage. Standard grooming will also be completed within an hour of your pet's scheduled departure time.</td>
                        <td>Prices start at $69 per day (depending on the age and size of your pet)</td>
                    </tr>
                    
                    <!--Row 3-->
                    <tr>
                        <td>Full Resort Treatment</td>
                        <td>This package comes with a full room sleeping area, 3 hours of personal play time with a trained resort employee preceded and followed by a deluxe pet massage. Complete grooming will also be completed within an hour of your pet's scheduled departure time.</td>
                        <td>Prices start at $99 per day (depending on the age and size of your pet)</td>
                    </tr>
                <!--End Table-->
                </table>
                
                <!--End desktop class-->
                </div>
                
            <!--End of main continer-->
            </div>
        </main>

        <!--Begin footer section for copyright and contact information-->
        <footer>
            
            
            <<?php include footer.php ?>
            
        </footer>

</body>


</html>