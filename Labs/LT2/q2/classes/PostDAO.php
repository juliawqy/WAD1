<?php
### DO NOT MODIFY THIS FILE ###
class PostDAO
{
    public function getAllPosts()
    {
        $sql = '
            SELECT
                *
            FROM
                helper_post
        ';
        
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = [];

         while($row = $stmt->fetch()) {
             $result [] = new Post ($row['mobile_no'], $row['name'], $row['main_skills'], 
                                    $row['languages'], $row['cooking_skills'], 
                                    $row['about_you']);
         }

        $stmt = null;
        $pdo = null;

        return $result;
    }

    public function addPost($helperPost)
    {
        $sql = '
            INSERT INTO helper_post
                (mobile_no, name, main_skills, languages, cooking_skills, about_you)
            VALUES
                (:mobile_no, :name, :main_skills, :languages, :cooking_skills, :about_you)
            ';

        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();
        $stmt = $pdo->prepare($sql);

        $mobileNo = $helperPost->getMobileNo();
        $name = $helperPost->getName();
        $mainSkills = $helperPost->getMainSkills();
        $languages = $helperPost->getLanguages();
        $cookingSkills = $helperPost->getCookingSkills();
        $aboutYou = $helperPost->getAboutYou();
        
        $stmt->bindParam(':mobile_no', $mobileNo, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':main_skills', $mainSkills, PDO::PARAM_STR);
        $stmt->bindParam(':languages', $languages, PDO::PARAM_STR);
        $stmt->bindParam(':cooking_skills', $cookingSkills, PDO::PARAM_STR);
        $stmt->bindParam(':about_you', $aboutYou, PDO::PARAM_STR);
        
        $insertOk = $stmt->execute();

        $stmt = null;
        $pdo = null;

        return $insertOk;
    }

    public function updatePost($helperPost)
    {
        $sql = '
            UPDATE helper_post
            SET
                main_skills = :main_skills, languages = :languages, 
                cooking_skills = :cooking_skills, about_you = :about_you
            WHERE
                mobile_no = :mobile_no
            ';
        
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();
        $stmt = $pdo->prepare($sql);

        $mobileNo = $helperPost->getMobileNo();
        $mainSkills = $helperPost->getMainSkills();
        $languages = $helperPost->getLanguages();
        $cookingSkills = $helperPost->getCookingSkills();
        $aboutYou = $helperPost->getAboutYou();
        
        $stmt->bindParam(':mobile_no', $mobileNo, PDO::PARAM_STR);
        $stmt->bindParam(':main_skills', $mainSkills, PDO::PARAM_STR);
        $stmt->bindParam(':languages', $languages, PDO::PARAM_STR);
        $stmt->bindParam(':cooking_skills', $cookingSkills, PDO::PARAM_STR);
        $stmt->bindParam(':about_you', $aboutYou, PDO::PARAM_STR);
        
        $updateOk = $stmt->execute();

        $stmt = null;
        $pdo = null;

        return $updateOk;

    }

    public function getPost($mobileNo)
    {
        $sql = '
            SELECT
                *
            FROM
                helper_post
            WHERE
                mobile_no = :mobile_no
        ';

        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();
        $stmt = $pdo->prepare($sql);
    
        $stmt->bindParam(':mobile_no', $mobileNo, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
        $result = null;
    
        while($row = $stmt->fetch()) {
            $result = new Post ($row['mobile_no'], $row['name'], $row['main_skills'], 
                                $row['languages'], $row['cooking_skills'], 
                                $row['about_you']);
        }
        
        $stmt = null;
        $pdo = null;
    
        return $result;
    
    }

    public function deletePost($mobileNo)
    {
        $sql = '
            DELETE FROM
                helper_post
            WHERE
                mobile_no = :mobile_no
        ';

        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':mobile_no', $mobileNo, PDO::PARAM_STR);
        $deleteok = $stmt->execute();

        $stmt = null;
        $pdo = null;

        return $deleteok;
               
    }
}
?>
