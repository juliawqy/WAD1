<?php

class CourseDAO {

    # Retrieve all courses from the course table in the DB
    public function retrieveAll() {
        $connMgr = new ConnectionManager();          
        $conn = $connMgr->getConnection();
        
        $sql = 'SELECT * FROM course';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = [];
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()) {
            $result[] = new Course($row['title'], $row['section'], $row['instructor']);
        }

        $stmt = null;
        $conn = null;

        return $result;
    }
    
    # Add a new course to the course table of the DB
    public function add($course) {
        $connMgr = new ConnectionManager();       
        $conn = $connMgr->getConnection();
         
        $sql = 'insert into course (title, section, instructor) values (:title, :section, :instructor)';
        $stmt = $conn->prepare($sql); 

        $title = $course->getTitle();
        $section = $course->getSection();
        $instructor = $course->getInstructor();

        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':section', $section, PDO::PARAM_STR);
        $stmt->bindParam(':instructor', $instructor, PDO::PARAM_STR);
        
        $isAddOK = $stmt->execute();

        $stmt = null;
        $conn = null;

        return $isAddOK;
    }
}


?>