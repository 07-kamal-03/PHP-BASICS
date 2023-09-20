
<?php
class Demo {
    public $name;
    public $native;
  
    function __construct($name,$native) {
      $this->name = $name;
      $this->native = $native;
    }
     function get_name() {
      return $this->name;
    }
    function get_native() {
        return $this->native;
      }
      function __destruct(){
        echo "<br>My name is   $this->name and My native is  $this->native ";
      }
  }


   class Details extends Demo{
    public $email;
    function __construct($name,$native,$email){
        parent::__construct($name,$native);
        $this->email=$email;
    }
    function get_email()
    {
        return $this->email;
    }
   }
     
  $data = new Details("kamal","salem","kamal@gmail.com");
  echo $data->get_name()." ";
  echo $data->get_native()." ";
  echo $data->get_email();

abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}


class Audi extends Car {
  public function intro() : string {

    return "My first car name is $this->name"."<br> ";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "My car name is $this->name!";
  }
}

$audi = new audi("Audi");
echo $audi->intro();


$volvo = new volvo("Volvo");
echo $volvo->intro();



interface Favbrand {
    public function makeSound();
  }
  
  class supra implements Favbrand {
    public function makeSound() {
      echo " Ratatata ";
    }
  }
  
  class Gtr implements Favbrand{
    public function makeSound() {
      echo " stustustu ";
    }
  }
  
  class mustang implements Favbrand {
    public function makeSound() {
      echo " one of the my fav brand mustang ";
    }
  }

  $supra = new supra();
  $gtr = new Gtr();
  $mustang = new mustang();
  $Favbrand = array($supra, $gtr, $mustang);

  foreach($Favbrand as $Favbrand) {
    $Favbrand->makeSound();
  }
?>
