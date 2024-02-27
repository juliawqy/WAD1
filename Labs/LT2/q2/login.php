<?php
    /*
        Name: WONG Qian Yu
        Email: qianyu.wong.2022
    */
    require_once "common.php";    
?>
<html>
    <head>
        <title>
            StarHelper Agency - Login
        </title>
    </head>
    <body>
        
    <img src='images/login.png'>
    <h3>Login</h3>
    <?php
        
        ### COMPLETE CODE HERE
            
        echo 
        "
            <form method='post'>
                <table>
                    <tr>
                        <td>
                            Mobile No.:
                        </td>
                        <td>
                            <input type='text' required name='mobile_no'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>                            
                        <td>
                            <input type='password' required name='password'/>
                        </td>
                    </tr>
                </table>
                
                <br/>
                
                <input type='radio' name='role' value='helper' checked/> I am helper 
                <input type='radio' name='role' value='admin'/> I am admin 

                <br/>
                <br/>
                
                <input type='submit' name='login' value='Log In'/>
            </form>
        ";

        if (isset($_POST['login'])) {
            $dao =  new UserAccountDAO();
            $mobileNo = $_POST['mobile_no'];
            $_SESSION["mobileNo"] = $mobileNo;
            $password = $_POST['password'];
            $_SESSION["password"] = $password;
            $role = $_POST['role'];
            $getAcc = $dao->getUserAccount($mobileNo, $password);
            if ($getAcc) {
                if ($getAcc->getRole() != $role) {
                    echo "<p style='color:red'> Incorrect user role. Try again. </p>";
                }
                elseif ($getAcc->getRole() == "admin") {
                    header("Location: admin.php");
                    exit;
                }
                else {
                    header("Location: helper_posting.php");
                    exit;
                }
            }
            else {
                echo "<p style='color:red'> Failed Login. Try again. </p>";
            }
        }

    ?>
    </body>
</html>

