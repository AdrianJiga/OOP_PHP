<?php

require_once "Course.php";

class Lesson extends Course{

    protected $lessonId, $lessonName;

    public function __construct($lessonId, $lessonName, Course $course)
    {
        $this->lessonId = $lessonId;
        $this->lessonName = $lessonName;

        $this->id = $course->getId();
        $this->courseName = $course->getCourseName();
    }

    function printLessonDetails(){
        echo "Lesson: $this->lessonName <br>";
    }

}
