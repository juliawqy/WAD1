<?php
    require_once "autoload.php";
    
    # Retrieve title, section, and instructor information passed from add.html
    $title = $_POST["title"];
    $section = $_POST["section"];
    $instructor = $_POST["instructor"];
    
    # Create a new Course object with the title, section, and instructor information
    $course = new Course($title,$section,$instructor);

    # Create a new CourseDAO object
    $coursedao = new CourseDAO();
    
    # Call add method of CourseDAO with the new Course object as an argument
    $return_stat = $coursedao->add($course);
    
    # Display "Course Added" or "Course is not added" 
    # Depending on the return value of the add method
    if($return_stat) {
        echo "Course added";
    }
    else {
        echo "Course not added";
    }
    
?>
