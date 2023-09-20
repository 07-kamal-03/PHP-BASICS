y<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        NAME: <input type="text" name="name" placeholder="Enter your name" required> <br>
       age: <input type="number" name="age" id="">
        <input type="submit" value="submit">
    </form>

    // echo $_GET["name"] ;
    // echo $_GET["age"] ;
    



//for loop
    // for($i=0; $i <10 ;$i++)
    // {
    //      echo $i;
    // }

    // echo'<br>';
    //array
    
    // $arr=array();
    // $arr[]="kamalraj";
    // $arr[]="ece";
    // $arr[]="IV";
    // $arr[]="BE";
    // $arr[]="KCE";
    // // print_r($arr);
    // for($i=0;$i<sizeof($arr);$i++)
    // {
    //     echo $arr[$i] ." " ;
    // }



    //class content
    // class hello{
    //     const color="green <br>";
    //     const font="Helvetica <BR>";
    // }
    // echo hello:: font;
    // const color="green <br>";
    // echo color;





// $name ="hello";
// echo $name;
// echo strlen($name);
</body>
</html> -->
<!DOCTYPE html>
<html>

<head>
  <title>registration form</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <h1>Registration Form</h1>
  <div class="form">
    <form action="index.php" method="post">

      <table>
      <tr>
          <td>Employee Id:</td>
          <td><input type="text" name="employeeid" placeholder="Enter the your Employee Id" required></td>
        </tr>
        <tr>
          <td>First Name:</td>
          <td><input type="text" name="firstname" placeholder="Enter the your First Name" required></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><input type="text" name="lastname" placeholder="Enter the your Last Name" required></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td><input type="radio" name="gender" id="male" required>male</td>
          <td>
          <input type="radio" name="gender" id="female" required>
          <label for="female">female</label>
          </td>
          <td><input type="radio" name="gender" id="other" required>other</td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email" placeholder="Enter the your Email" required></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" placeholder="Enter the your password" required></td>
        </tr>
        <tr>
          <td>Phone Number:</td>
          <td><input type="text" name="native" placeholder="Enter the your Native" required></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="submit"></td>
        </tr>

      </table>
    </form>
  </div>

  <?php

  if (isset($_POST['submit'])) {
    $empid=$_POST['employeeid'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $native = $_POST['native'];
    $con = new mysqli("localhost","root", "","drupal_learning");
    $mysql = "INSERT INTO employee (empid,firstname,lastname,age,email,password,native) VALUES('$empid','$fname','$lname','$age','$email','$password','$native')";
    if ($con->query($mysql)) {
      echo '<script>alert("Data stored")</script>';
    } else {
      echo "insert data failed";
    }
  } else {
    echo "Please enter the datas";
  }

  // $t = date("H");
// echo "<p>The hour (of the server) is " . $t; 
// echo ", and will give the following message:</p>";
  
  // if ($t < "10") {
//   echo "Have a good morning!";
// } elseif ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }
  



  // function inc() {
//  static  $a=1;
//   echo $a;
//   $a++;
// }
// inc();
// inc();
// inc();
  


  // $x=1;
// do{
//   echo $x;
//   $x++;
  
  // }
// while ($x<=5);
  




  // function pass_by_reference(&$a){
//   $a+=20;
// }
// $b=10;
// pass_by_reference($b);
// echo $b;
  
  // echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
  


  ?>

</body>

</html>