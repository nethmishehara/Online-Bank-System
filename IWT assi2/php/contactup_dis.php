<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us </title>
    <link rel = "stylesheet" href = "styles.css">
    <link rel = "stylesheet" href = "Reg.CSS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class = "Contact-in">
    <h2>SEND A MESSAGE </h2><br>
    <form method="post" action="contact_update.php">
      <input type = "text" name="CID" placeholder="CID" required class = "Form-input"><br><br>
      <input type = "text" name="Full_Name" placeholder="Full Name" required class = "Form-input"><br><br>
      <input type = "email" name="Email" placeholder="E-mail" required class = "Form-input"><br><br>
      <input type = "text" name="Subject" placeholder="Subject" required class = "Form-input"><br><br>
      <textarea name="Message" placeholder="Message" class = "Form-area"></textarea><br><br>
      <input type = "submit" value = "Submit" class = "Form-button" >
      
    </form>   
  </div>
</body>
</html>




