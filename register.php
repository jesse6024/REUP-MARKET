

<htmml>


<head>


      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registration</title>
      <sript type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></scritp>
      <link rel="stylesheet" href="password-strength-indicator.css">
      <link rel="stylesheet" href="style.css">

</head>

    <!--?php$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) ?-->
    <div class="container" style="position:absolute;">

        <h1>REUP MARKET</h1>

    </div>

      <div class="container" style="margin-top: 200px;
    height: 77%;
}">


         <header>Register Your Account </header>
</body>
         <div>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "reup_market";

//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);

//Checking connection

if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 if (isset($_POST['register'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $confirmPassword = $_POST['confirmPassword'];
   $pin = $_POST['pin'];
   $account_role= $_POST['account_role'];
   $username= mysqli_real_escape_string($conn, $_POST['username']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
   $pin = mysqli_real_escape_string($conn, $_POST['pin']);
   $account_role = mysqli_real_escape_string($conn, $_POST['account_role']);
   /*$age = mysqli_real_escape_string($conn, $_POST['age']);*/

 date_default_timezone_set('Asia/Kolkata');
	$timestamp = time();
	$date_time = date("Y-m-d H:i:s");
  $currentTime = $date_time;



$sql = "INSERT INTO register (username,password,confirmPassword,pin,dateJoined,account_role) VALUES ('$username', '".md5($password)."','".md5($confirmPassword)."','$pin','$date_time','$account_role')";

if($conn->query($sql) === TRUE){
 echo '<p style="color:green;">Record Added Sucessfully</p></br>';

 /*echo $currentTime;*/
  /*header("Location: login.php");*/
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}

$conn->close();
 } ?>
</div>
<?php include("process.php");?>
         <form method="post" action="register.php" id="register_form" style="
    padding-bottom: 178px;
">

            <div class="field">

                <input onkeyup="trigger()" type="password" name="password" required="" placeholder="Type password" id="password">
               <span class="showBtn" style="top:72%;">SHOW</span>
            </div>
            <div class="indicator">
               <span class="weak"></span>
               <span class="medium"></span>
               <span class="strong"></span>
            </div>
            <div class="text"></div>





            <input type="text" name="username" required value="" id="username" placeholder="Username" style="
                                    width: 100%;
                                    /* height: 100%; */
                                    border: 1px solid lightgrey;
                                    padding-left: 15px;
                                    outline: none;
                                    border-radius: 5px;
                                     margin-left:2px;
                                     font-size: 15px;
                                     transition: all 0.3s;
                                    /* padding-top: 30px; */
                                        margin-top: 30px;
    ">
    
      
    
      
    <span id="usernameResult"></span>
    <div class="field">

                 <input onkeyup="trigger()" type="password" name="confirmPassword" required="" placeholder="Confirm password">
                <span class="showBtn">SHOW</span>
             </div>
             <div class="indicator">
                <span class="weak"></span>
                <span class="medium"></span>
                <span class="strong"></span>

             </div>
             <input type="text" name="pin" value="" placeholder="Pin" required="" style="
   margin-top: 40px;
    border: 1px solid lightgrey;
    padding-left: 15px;
    outline: none;
    border-radius: 5px;
    font-size: 15px;
    margin-left: 160px;
    transition: all 0.3s;
    ">
    <script type="text/javascript">
    $('form').on('submit', function(e){
        e.preventDefault();
        var text = $('#role').find(":selected").text();
        $('input[name="option_text"]').val(text);
        $('form').submit();
    });
</script>
<div class="custom-select" style="width:200px;">
  <select id="account_role" name="account_role" style="
    position:absolute;
    width:80%;
    margin-left:-102px;
    border: 1px solid lightgrey;
    padding-left: 15px;
    outline: none;
    border-radius: 5px;
    font-size: 15px;
    transition: all 0.3s;
    margin-top:70px;
     ">
    <option value="Buyer">Buyer</option>
    <option value="Vendor">Vendor</option>
    </select>
    <input type='hidden' name="option_text" value=''>

  <div>

    <button 
      type="submit" 
      name="register" 
      id="reg_btn" 
      style="
        padding: 10px 25px 8px;
        position: absolute;
        background-color: #0067ab;
        text-shadow: rgb(0 0 0 / 24%) 0 1px 0;
        font-size: 16px;
        box-shadow: rgb(255 255 255 / 24%) 0 2px 0 0 inset, #fff 0 1px 0 0;
        border: 1px solid #0164a5;
        color: #fff;
        margin-top: 199px;
        cursor: pointer;
        float: left;
        display: flex;
        border-radius: 2px;
       ">
        Register
    </button>

        <a href="login.php"><button type="button" name="login" id="login_btn" style="padding: 10px 25px 8px;
    margin-left: 50px;
    position: absolute;
    color: #fff;
    background-color: #0067ab;
    text-shadow: rgb(0 0 0 / 24%) 0 1px 0;
    font-size: 16px;
    box-shadow: rgb(255 255 255 / 24%) 0 2px 0 0 inset, #fff 0 1px 0 0;
    border: 1px solid #0164a5;
    border-radius: 2px;
    margin-top: 199px;
    margin-left: 140;
    cursor: pointer;
    display: inline-block;
    position: absolute;
    ;">Login</button></a>
     </div>
  	</div>

  </div>

  
      </form></div>
      <script>
         const indicator = document.querySelector(".indicator");
         const input = document.querySelector("input");
         const weak = document.querySelector(".weak");
         const medium = document.querySelector(".medium");
         const strong = document.querySelector(".strong");
         const text = document.querySelector(".text");
         const showBtn = document.querySelector(".showBtn");
         let regExpWeak = /[a-z]/;
         let regExpMedium = /\d+/;
         let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;
         function trigger(){
           if(input.value != ""){
             indicator.style.display = "block";
             indicator.style.display = "flex";
             if(input.value.length <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input.value.match(regExpStrong)))no=1;
             if(input.value.length >= 6 && ((input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input.value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) && input.value.match(regExpStrong))))no=2;
             if(input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value.match(regExpStrong))no=3;
             if(no==1){
               weak.classList.add("active");
               text.style.display = "block";
               text.textContent = "Your password is too week";
               text.classList.add("weak");
             }
             if(no==2){
               medium.classList.add("active");
               text.textContent = "Your password is medium";
               text.classList.add("medium");
             }else{
               medium.classList.remove("active");
               text.classList.remove("medium");
             }
             if(no==3){
               weak.classList.add("active");
               medium.classList.add("active");
               strong.classList.add("active");
               text.textContent = "Your password is strong";
               text.classList.add("strong");
             }else{
               strong.classList.remove("active");
               text.classList.remove("strong");
             }
             showBtn.style.display = "block";
             showBtn.onclick = function(){
               if(input.type == "password"){
                 input.type = "text";
                 showBtn.textContent = "HIDE";
                 showBtn.style.color = "#23ad5c";
               }else{
                 input.type = "password";
                 showBtn.textContent = "SHOW";
                 showBtn.style.color = "#000";
               }
             }
           }else{
             indicator.style.display = "none";
             text.style.display = "none";
             showBtn.style.display = "none";
           }
         }


</script>

</form>

</body>
</html>