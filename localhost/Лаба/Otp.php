<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="windows-1251">
   <meta http-equiv="Content-type" name="viewport" content="text/html">
   <link rel="stylesheet" href="FormCss.css">
   <title>Document</title>
</head>
<body>
<form method="post" action="FormSV.php">
 
   <div class="left">
      <label for="name">Имя:</label>
      <input maxlength="30" type="text" name="name" />
 
      <label for="phone">Телефон:</label>
      <input maxlength="30" type="text" name="phone" />
 
      <label for="mail">E-mail:</label>
      <input maxlength="30" type="text" name="mail" />
   </div>
 
   <div class="right">
      <label for="message">Сообщение:</label>
      <textarea rows="7" cols="50" name="message"></textarea>
 
      <input type="submit" value="Отправить" />
   </div>
</form>
<script>
   function checkForm(form) {
 
      var name = form.name.value;
      var n = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
      if (!n) {
         alert("Имя введено неверно, пожалуйста исправьте ошибку");
         return false;
      }
 
      var phone = form.phone.value;
      var p = phone.match(/^[0-9+][0-9- ]*[0-9- ]+$/);
      if (!p) {
         alert("Телефон введен неверно");
         return false;
      }
 
      var mail = form.mail.value;
      var m = mail.match(/^[A-Za-z0-9][A-Za-z0-9\._-]*[A-Za-z0-9_]*@([A-Za-z0-9]+([A-Za-z0-9-]*
      [A-Za-z0-9]+)*\.)+[A-Za-z]+$/);
      if (!m) {
         alert("E-mail введен неверно, пожалуйста исправьте ошибку");
         return false;
      }
      return true;
   }
</script>
</body>
</html>