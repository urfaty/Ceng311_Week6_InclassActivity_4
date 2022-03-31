<!DOCTYPE html> 
<html> 
    <head>
         <meta charset="utf-8" /> 
         <title>My page</title>
    </head>
    <body>  
        <?Php 
            if(empty($_GET['name'])== false) 
            {
                echo $_GET['name']."<br>";
                 
            }
            else 
            {
                echo "Name: Not provided"."<br>";

            }
            if(empty($_GET['username'])== false) 
            {
                echo $_GET['username']."<br>"; 
            }
            else 
            {
                echo "Username: Not provided"."<br>";

            }
            if(empty($_GET['password'])== false) 
            {
                echo $_GET['password']."<br>"; 
            }
            else 
            {
                echo "Password: Not provided"."<br>";

            }
            if(empty($_GET['adress'])== false) 
            {
                echo $_GET['adress']."<br>"; 
            }
            else 
            {
                echo "Adress: Not provided"."<br>";

            }
            if(empty($_GET['country'])== false) 
            {
                echo $_GET['country']."<br>"; 
            }
            else 
            {
                echo "Country: Not provided"."<br>";

            }
            if(empty($_GET['zipcode'])== false) 
            {
                echo $_GET['zipcode']."<br>"; 
            }
            else 
            {
                echo "ZIP Code: Not provided"."<br>";

            }

            if(empty($_GET['email'])== false) 
            {
                echo $_GET['email']."<br>"; 
            }
            else 
            {
                echo "Email: Not provided"."<br>";

            }

            if(empty($_GET['gender'])== false) 
            {
                echo $_GET['gender']."<br>"; 
            }
            else 
            {
                echo "Gender: Not provided"."<br>";

            }

            if(empty($_GET['english'])== false) 
            {
                echo $_GET['english']."<br>"; 
            }
            elseif(empty($_GET['french'])== false) 
            {
                echo $_GET['french']."<br>"; 
            }
            elseif(empty($_GET['germany'])== false) 
            {
                echo $_GET['germany']."<br>"; 
            }

            else 
            {
                echo "Language: Not provided"."<br>";
            }

            if(empty($_GET['about'])== false ) 
            {
                echo $_GET['about']."<br>";
                
            }
            else 
            {
                echo "About: Not provided"."<br>";

            }


        ?> 
    </body> 
</html> 