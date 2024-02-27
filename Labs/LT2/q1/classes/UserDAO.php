<?php

### DO NOT MODIFY THIS FILE ###

require_once "common.php";
class UserDAO
{
    private $users;

    public function __construct()
    {
        $activity1 = new Activity("Yoga", "Monday", "1200-1300", 100);
        $activity2 = new Activity("Kickboxing", "Friday", "1200-1300", 105);
        $activity3 = new Activity("Zumba", "Friday", "1200-1300", 110);

        $this->users = [
            new User("User01", "F", $activity2),
            new User("User02", "M", $activity1),
            new User("User03", "F", $activity1),
            new User("User04", "F", $activity1),
            new User("User05", "M", $activity3)
        ];
    }

    public function getUsers()
    {
        return $this->users;
    }

}
?>