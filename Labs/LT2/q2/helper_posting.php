<?php
    /*
        Name: WONG Qian Yu
        Email: qianyu.wong.2022
    */
    require_once "common.php";
    require_once "protect.php";
    $postContent = '';
?>
<html>
    <head>
        <title>
            My Posting Page
        </title>
    </head>
    <body>
        
    <img src='images/profile.png'>
    <h3>My Posting Page</h3>
    <?php
        
        ### COMPLETE CODE HERE

        $dao = new UserAccountDAO();

        $mobileNo = $_SESSION['mobileNo'];
        $password = $_SESSION['password'];

        $userObj = $dao->getUserAccount($mobileNo, $password);
        $name = $userObj->getName();

        echo "<form action='login.php' method='post'> Welcome, $name 
              <input type='submit' value='Logout' name='logout'> </form>";

        if (isset($_POST["logout"])) {
            unset($_SESSION["mobileNo"]);
            unset($_SESSION["password"]);
            header("Location: login.php");
            exit;
        }


        
        echo "<form method='post'>";

        $postdao = new PostDAO();
        $userPost = $postdao->getPost($mobileNo);


        echo "<br><br>
              My Post: <br>";

        if ($userPost) {
            $postContent = "I can speak {$userPost->getLanguages()} <br>
                            I can cook {$userPost->getCookingSkills()} <br>
                            I am good at {$userPost->getMainSkills()} <br> <br>
                            About me: <br>
                            {$userPost->getAboutYou()}";
        }
        else {
            $postContent = "You have not posted anything yet!";
        }
      
        echo "
                <table border=1 width=50%>
                    <tr> 
                        <td>$postContent<br><br></td>
                    </tr>
               </table>";
        
        echo "<br><br><br> 
               Submit Post: <br><br> ";
 
        echo "  <table>
                    <tr>
                    <table border='1' width=50%> 
                    <tr> 
                      <td> Main Skills: </td> 
                      <td> 
                          <input type='checkbox' name='mainskills[]' value='Baby Care'>Baby Care
                          <input type='checkbox' name='mainskills[]' value='Child Care'>Child Care
                          <input type='checkbox' name='mainskills[]' value='Teen Care'>Teen Care
                          <input type='checkbox' name='mainskills[]' value='Elderly Care'>Elderly Care
                      </td>
                    </tr>
                    <tr> 
                      <td> Languages: </td> 
                      <td> 
                          <input type='checkbox' name='languages[]' value='English'>English
                          <input type='checkbox' name='languages[]' value='Bahasa'>Bahasa
                          <input type='checkbox' name='languages[]' value='Mandarin'>Mandarin
                          <input type='checkbox' name='languages[]' value='Tagalog'>Tagalog
                      </td>
                    </tr>
                    <tr> 
                      <td> Cooking Skills: </td> 
                      <td> 
                          <input type='checkbox' name='cookingskills[]' value='Western'>Western
                          <input type='checkbox' name='cookingskills[]' value='Asian'>Asian
                          <input type='checkbox' name='cookingskills[]' value='Singapore'>Singapore
                          <input type='checkbox' name='cookingskills[]' value='Chinese'>Chinese
                      </td>
                    </tr>
                    <tr> 
                      <td> About you:</td> 
                      <td> 
                          <textarea name='aboutyou'rows='5' cols='75'> Write something to describe about you.</textarea>
                      </td>
                    </tr>
                    
                </table>
                <br> <br>
            ";

            if ($userPost) {
                echo "<input type='submit' name='updatebutton' value='Update'>";
            }
            else {
                echo "<input type='submit' name='postbutton' value='Post'>";
            }
            echo "<input type='reset'>
        </form>";

        if (isset($_POST["postbutton"])) {
            $mainSkillsArr = $_POST["mainskills"];
            $mainSkills = implode(",",$mainSkillsArr);
            $langArr = $_POST["languages"];
            $lang = implode(",",$langArr);
            $cookSkillsArr = $_POST["cookingskills"];
            $cookSkills = implode(",",$cookSkillsArr);
            $aboutYou = $_POST["aboutyou"];

            $helperPost = new Post ($mobileNo, $name, $mainSkills, $lang, $cookSkills, $aboutYou);
            $addPost = $postdao->addPost($helperPost);
            header("Location: helper_posting.php");
            exit;
        }

        if (isset($_POST["updatebutton"])) {
            $mainSkillsArr = $_POST["mainskills"];
            $mainSkills = implode(",",$mainSkillsArr);
            $langArr = $_POST["languages"];
            $lang = implode(",",$langArr);
            $cookSkillsArr = $_POST["cookingskills"];
            $cookSkills = implode(",",$cookSkillsArr);
            $aboutYou = $_POST["aboutyou"];

            $helperPost = new Post ($mobileNo, $name, $mainSkills, $lang, $cookSkills, $aboutYou);
            $addPost = $postdao->updatePost($helperPost);
            header("Location: helper_posting.php");
            exit;
        }

    ?>
    </body>
</html>