<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
  <link rel="stylesheet" href="signup.css">
 


  







</head>
<body>





<div class="contact-title">

        <h1>Alumni registration form</h1> <br>

        <br>

    

        <h2>Let's get to know you! </h2>


    </div>

    <div class="contact-form">

        <form id="contact-form" method="POST" action="upload.php">
        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
        <br>
        <input name="email" type="email" class="form-control" placeholder="Your Email" required>
        <br>
        <input name="occupation" type="text" class="form-control" placeholder="Your Occupation" required>
        <br>

        <input name="telephone" type="text" class="form-control" placeholder="Your Telephone number" required>
        <br>
         
        
        <h3 class="student">Select Gender</h3> <br>
         <label class="radio">
         <input class="Gender-one" type="radio" checked="checked"  name="Gender" value="Female" required>
         <span class="checkmark"></span>
         Female
         </label>

         <label class="radio">
            <input class="Gender-two" type="radio" checked="checked"  name="Gender" value="Male" required>
            <span class="checkmark"></span>
            Male
            </label>
        
        
        
        
        
        <h4 class="student">Marital Status</h4>
         <label class="radio">
         <input class="status-one" type="radio" checked="checked" name="status" value="Single" required>
         <span class="checkmark"></span>
         Single
         </label>

         <label class="radio">
            <input class="status-two" type="radio" checked="checked" name="status" value="Engaged">
            <span class="checkmark"></span>
            Engaged
            </label>
        
            <label class="radio">
                <input class="status-two" type="radio" checked="checked" name="status" value="Married">
                <span class="checkmark"></span>
                Married
                </label>
            


        
        
        
        <h5 class="student">What class did you graduate with?</h5>
         <label class="radio">
         <input class="radio-one" type="radio" checked="checked"  name="stone" value="Diamond" required>
         <span class="checkmark"></span>
         Diamond
         </label>

         <label class="radio">
            <input class="radio-two" type="radio" checked="checked"  name="stone" value="Emerald">
            <span class="checkmark"></span>
            Emerald
            </label>

            <label class="radio">
                <input class="radio-three" type="radio" checked="checked" name="stone" value="Gold">
                <span class="checkmark"></span>
                Gold
                
                
                </label>
                <label class="radio">
                    <input class="radio-four" type="radio" checked="checked" name="stone" value="Marble">
                    <span class="checkmark"></span>
                    Marble
                    </label>

                    <label class="radio">
                        <input class="radio-five" type="radio" checked="checked" name="stone" value="Opal">
                        <span class="checkmark"></span>
                        Opal
                        </label>

                        <label class="radio">
                            <input class="radio-six" type="radio" checked="checked" name="stone" value="Ruby">
                            <span class="checkmark"></span>
                            Ruby
                            </label>
                            <label class="radio">
                                <input class="radio-seven" type="radio" checked="checked" name="stone" value="Silver">
                                <span class="checkmark"></span>
                                Silver
                                </label>

                                <br>
                                <br>

                              <h6 class="student">Select image to upload:</h6>  
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit"> <br>
        


                                <input type="submit" value="Submit">
                            
                       
                   
               
       
   




        </form>



    </div>
    
</body>
</html>