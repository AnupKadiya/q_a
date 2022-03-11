<?php
session_start();
//error_reporting(0);
include("connection.php");
include('include/checklogin.php');
check_login();
//$_SESSION['question_id'] = $_GET['ans'];

?>
<?php
//$question_id = $_GET['ans'];
$u_id = $_SESSION['id'];
if (isset($_GET['ans'])){
    $_SESSION['question_id'] = $_GET['ans'];
    $query = "SELECT * FROM question_master WHERE u_id!=$u_id";
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_assoc($result)){
        $question = $row['question'];
        
    }
 
}
 if(isset($_POST['submit'])){
    //$ques_id = $_GET['ans'];
    $answer=$_POST['answer'];
    $ques_id = $_SESSION['question_id'];
    $query1 =  "insert into answer_master (q_id , u_id , answer) values ('$ques_id' ,'$u_id','$answer'); ";
    $result1 = mysqli_query($conn,$query1);

    
    
    if ($result1){
        echo "<script>alert('Answer Successfully Submited');window.location='question.php';</script>";
    }
    else{
        echo "<script>alert('Answer not Edited');</script>";    }
}  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post Answer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body class="login">
<div class="row">
    <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="logo margin-top-30">
            <h2>Answer</h2>
        </div>

        <div class="box-login">
            <form class="#" method="post" action="give_answer.php">
                <fieldset>
                    <legend>
                        Post Answer
                    </legend>
                    <p>
                        <span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
                    </p>
                    <div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="area_name" value="<?php echo $question;?>" placeholder="Question" readonly>
                                </span>
                    </div>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" class="form-control"  name="answer" value="" placeholder="Answer" >
                        </span>
                    </div>
                    <div class="form-actions">

                        <button type="submit" id="submit" class="btn btn-primary pull-right" name="submit">
                            Submit
                        </button>
                    </div>

                </fieldset>
            </form>


        </div>

    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/modernizr/modernizr.js"></script>
<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="vendor/switchery/switchery.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>

<script src="assets/js/main.js"></script>

<script src="assets/js/login.js"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        Login.init();
    });
</script>

</body>
<!-- end: BODY -->
</html>
