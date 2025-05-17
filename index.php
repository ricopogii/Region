<!DOCTYPE html>
<html lang="en">
<head>
    <meta chatset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
</head>

<h1>Quiz Result</h1>
<body>
    <div><h2>Fill out this form</h2></div>
    <form action='connect.php' method="POST">
        <label for="user">Name:</label><br>
        <input type='text' name='name' id="name" required/> <br> <br>
      
        <label for="email">Email:</label><br>
        <input type='email' name='email' id="email" required/> <br> <br>
              
        <label for="course">Course:</label><br>
        <input type='text' name='course' id="course" required/> <br> <br>
 
        <label for="score">Score:</label><br>
        <input type='text' name='score' id="score" required/> <br> <br>
    
        <input type='submit' name='submit' id="submit" />
</form>

</body>

</html>