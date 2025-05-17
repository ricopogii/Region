 <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn= mysqli_connect('localhost', 'root', '', 'database') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['course']) && isset($_POST['score'])) {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $course= $_POST['course'];
            $score= $_POST['score'];

            $sql= "INSERT INTO `users` (`name`, `email`, `course`, `score`) VALUES ('$name', '$email', '$course', '$score')";
          
            $query = mysqli_query($conn,$sql);
            if($query) {
                echo 'Entry Successful';
            }
            else {
                echo ' Error Occured';
            }
        }
    }