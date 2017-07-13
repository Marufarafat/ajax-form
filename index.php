<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ajax form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">  
            <form id="contact" action="result.php" method="post" class="ajax">
                <h3>Quick Contact</h3>
                <h4>Contact us today, and get reply with in 24 hours!</h4>
                <fieldset>
                    <input name="name" placeholder="Your name" type="text" tabindex="1" autofocus>
                </fieldset>
                <fieldset>
                    <input name="email" placeholder="Your Email Address" type="email" tabindex="2" >
                </fieldset>
                <fieldset>
                    <input name="number" placeholder="Your Phone Number" type="tel" tabindex="3" >
                </fieldset>
                <fieldset>
                    <input name="url" placeholder="Your Web Site starts with http://" type="url" tabindex="4" >
                </fieldset>
                <fieldset>
                    <textarea name="message" placeholder="Type your Message Here...." tabindex="5" ></textarea>
                </fieldset>
                <fieldset>
                   <input type="submit"  id="contact-submit" data-submit="...Sending" value="Submit">
                </fieldset>
                <p id="msg"></p>
            </form>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="ajax.js"></script>
    </body>
</html>