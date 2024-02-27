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
            StarHelper Agency - Register
        </title>
    </head>
    <body>
       
        <img src='images/register.png'>
        <h3>Register</h3>
        
        <?php
            ### COMPLETE CODE HERE

            $numVal = "";
            $nameVal = "";
            $codeVal = "";

            if (isset($_POST["signup"])) {
                $numVal = $_POST["mobile_no"];
                $nameVal = $_POST["name"];
                $codeVal = $_POST["admin_account_code"];

            }
            
            echo 
            "
                <form method='post'>
                    <table>
                        <tr>
                            <td>
                                Mobile No.:
                            </td>
                            <td>
                                <input type='text' required name='mobile_no' 
                                       value=\"$numVal\"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Name:
                            </td>                            
                            <td>
                                <input type='name' required name='name' 
                                       value=\"$nameVal\"/>
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
                        <tr>
                            <td>
                                Admin Account Code:
                            </td>                            
                            <td>
                                <input type='text' name='admin_account_code'
                                       value=\"$codeVal\"/>
                            </td>
                        </tr>
                    </table>
                    <br/>
                    <input type='submit' name='signup' value='Sign Up'/>
                </form>
            ";
            
            if (isset($_POST["signup"])) {
                
                $dao = new UserAccountDAO();
                $userCode = $_POST["admin_account_code"];
                if ($userCode != null) {
                    if ($userCode !== "IAmAdmin" ) {
                        echo "<p style='color:red'> Admin account code mismatch! </p>";
                    }
                    else { #create admin acc
                        $password = $_POST["password"];
                        $status = $dao->addUserAccount($numVal, $nameVal, $password, "admin");
                        if ($status) {
                            echo "<p style='color:green'> You have successfully registered! 
                                <br> Click <a href='login.php'> here</a> to login. </p>";
                        }
                        else {
                            echo "<p style='color:red'> Registration Failed! Please check your entry again. </p>";
                        }
                    }
                }
                else { #create helper acc
                    $password = $_POST["password"];
                    $status = $dao->addUserAccount($numVal, $nameVal, $password, "helper");
                    if ($status) {
                        echo "<p style='color:green'> You have successfully registered! 
                              <br> Click <a href='login.php'> here</a> to login. </p>";
                    }
                    else {
                        echo "<p style='color:red'> Registration Failed! Please check your entry again. </p>";
                    }
                }
                
            }

        ?>                    
    </body>
</html>

