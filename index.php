
<?php
include_once 'conn.php';



$username = "123";
$password = "123";

function checkUser($username, $password){
  $db;
  $table = "users";

  $query = "SELECT * FROM".$this->table."WHERE username=''$username' and password='$password' limit 1";

  $result = mysqli_query($this->db->getDb(), $query);

  if(mysqli_num_rows($result)){
    mysqli_close($this->db-getDb());


    printf("<h1>GOOD</h1>");
  }
  else{
    printf("<h1>GOOD</h1>");
  }


}
?>
