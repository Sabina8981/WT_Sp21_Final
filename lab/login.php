 <?php
 mysql_connect("localhost","root","");
 mysql_select_Wt_sp21_final("admin");
 if (isset ($REQUEST["submit"])){
	 $name=$_REQUEST["name"];
	 $username=$_REQUEST["username"];
	 $password=$_REQUEST["password"];
	 $query=mysql_query("select *from admin where username='$username' && password='$password'")
	 $rowcount=mysql_num_rows($query);
	 if($rowcount==true)
	 {
		echo "name,username and password is right"; 
		 
	 }
	 else{
		 
		 echo "name,username and password is wrong"; 
	 }
	 
 } 
 ?>
 
 
 <form method="post">
 
 <table border ="1" align="center">
        <tr>
        
               <h3>Login From</h3>
            
        
            
            
        </tr>
		<tr>
            <td>Name:</td>
            <td><input type="text" name="name" ></td>
            
            
        </tr>
        <tr>
            <td>UserName:</td>
            <td><input type="text" name="username" ></td>
            
            
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" ></td>
        </tr>
		
        
          <td><input  type="submit"value="Login"/></td>  
		  </table>
		  </form>