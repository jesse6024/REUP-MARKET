
<?                     
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "reup_market";
 
$con = mysqli_connect($server,$user,$pass,$dbname) or die("Didn't Connect To DB");
 if(isset($_POST) & !empty($_POST))
 {

     $username = mysqli_real_escape_string($conn,$_POST['username']) ; 
     $sql = "SELECT * FROM register where username = '$username'" ;
     $reult = mysqli_query($conn,$sql) ;
     $count = mysqli_num_rows($reult);
     if($count>0){
        echo '<div style="color:red";"><br>'.$username.'</br>Username Unavailable choose different Username.</div>';
     }
     else{
          
        echo '<div style="color:green";"><br>'.$username.'</br>Username Available</div>';

     }
 }  
 
 ?>