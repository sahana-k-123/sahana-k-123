<html>
<head>
     <title>Register Form</title>
<h1> Registration form </h1>
</head>
<body bgcolor="pink">
<br>
<br>

<form action="insert.php" method="post">

<Registration form>
  <table>
  
<label>firstname</label>
<input type="text"name="firstname" size="45"/><br><br>
<label>lastname:</label>
<input type="text" name="lastname" size="45"/><br><br>

<tr>
    <td>Password :</td>
<td><input type="password" name="password"></td>
   </tr>

<label> Choose gender </label>
<tr>
    <select name="gender">
  <option value=" ">--select--</option>
  <option value="male">male</option>
  <option value="female">female</option>
</select>
   </tr>
<tr>
    <td>Email :</td>
    <td><input type="email" name="email"></td>
   </tr>

   <tr>
   <tr>
    <td>Phone no :</td>
    <td>
     <input type="phone" name="phone">
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>	
</body>
</html>