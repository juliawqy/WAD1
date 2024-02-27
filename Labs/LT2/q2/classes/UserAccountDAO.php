<?php
    /*
        Name: WONG Qian Yu
        Email: qianyu.wong.2022
    */

class UserAccountDAO {

    public function addUserAccount($mobileNo, $name, $password, $role) {
    
        ### START OF DO NOT MODIFY ###
        $sql = '
            INSERT INTO user_account
                (mobile_no, name, hashed_password, role)
            VALUES
                (:mobile_no, :name, :hashed_password, :role);
        ';
        ### END OF DO NOT MODIFY ###

        ### ADD YOUR CODE HERE OR ANYWHERE ELSE IN THIS FUNCTION

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        $hashed_password = password_hash($password,PASSWORD_DEFAULT);

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':mobile_no', $mobileNo, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':hashed_password', $hashed_password, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        
        $stauts = $stmt->execute();

        $stmt = null;
        $conn = null;
        
        if ($stauts) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }

    public function getUserAccount($mobileNo, $password) {

        ### START OF DO NOT MODIFY ###
        $sql = '
            SELECT
                *
            FROM
                user_account
            WHERE
                mobile_no = :mobile_no
        ';
        ### END OF DO NOT MODIFY ###

        ### ADD YOUR CODE HERE ADD YOUR CODE HERE OR ANYWHERE ELSE IN THIS FUNCTION

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':mobile_no', $mobileNo, PDO::PARAM_STR);
        
        $stmt->execute();

        $user = null;

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($row = $stmt->fetch()) {
            $user = new UserAccount($row['mobile_no'], $row['name'], $row['hashed_password'], $row['role']);
        }

        $stmt = null;
        $conn = null;
        
        if ($user) {
            $hashed_password = $user->getHashedPassword();
            $pwCheck = password_verify($password,$hashed_password);
            if ($pwCheck) {
                return $user;
            }
        }

        return NULL;

    }
}
?>