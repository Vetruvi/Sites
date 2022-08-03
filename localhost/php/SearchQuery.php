<?php 
  if(isset($_POST['submit'])){ 
  	if(isset($_GET['go'])){
  		 if(preg_match("^/[A-Za-z]+/", $_POST['name'])){ 
   $name=$_POST['name'];
   $mysql = new mysqli('localhost', 'root', 'root', 'users');
   $mydb=mysqli_query($mysql, "SELECT * FROM `users`");
   $sql="SELECT id, SeconcName, Name, ThirdName, Adress, Telephone  FROM регистрация WHERE  SeconcName LIKE '%" . $name . "%' or Name LIKE '%" . $name  ."%' or ThirdName LIKE '%" . $name  ."%' or Adress LIKE '%" . $name  ."%' or Telephone LIKE '%" . $name  ."%' ";
   $resul=mysqli_query($sql);
    while($row=mysqli_fetch_array($resul)){ 
          $SeconcName  =$row['SeconcName']; 
          $Name=$row['LastName']; 
          $ID=$row['id']; 
          $ThirdName  =$row['ThirdName']; 
          $Adress  =$row['Adress'];
          $Telephone  =$row['Telephone'];  
          echo "<ul>n"; 
  echo "<li>" . "<a  href="Base.php?id=$ID">"   .$SeconcName . " " . $Name . " " . $ThirdName . " " .  $Adress . " " . $Telephone . "</a></li>n"; 
  echo "</ul>"; 
  } 
}
  else{ 
  echo  "<p> Введите поисковый запрос</p>"; 
  }
}


   
}?>