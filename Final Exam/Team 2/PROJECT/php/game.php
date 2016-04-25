 <?php
 require_once "db.class.php";

  require_once('hero.class.php');
 
  $warrior = new warrior(100,10);
  //$warrior = $_POST['warrior']

 $warrior->setPowerHit(1.4);


 $healer = new healer(120,8); 
 $healer->setRestoreHp(20);
 
 
 $_SESSION['heroes'][0] = $warrior;
 $_SESSION['heroes'][1] = $healer;
 //$_SESSION['heroes'][2] = $warrior->getHP();
 //$_SESSION['heroes'][3] = $healer->getHP();
 
 //echo"<pre>";
 //print_r($_SESSION);
 
 //$healer = $_POST['healer']
 
// echo "<pre>";
  // print_r($healer);
  // print_r($warrior);
  // $warrior->attack($healer);
  // $healer->attack($warrior);
// echo "<pre>";
  // print_r($healer);
  // print_r($warrior);
  // $healer->useRestoreHp();
  // $warrior->usePowerHit($healer);
  // echo "<pre>";
  // print_r($healer);
  // print_r($warrior);
 
 
 
 
 
 
 
 
 
 
  //echo "You win";
 ?>
 
 
 
 

