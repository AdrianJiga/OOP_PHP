<?php

require_once "Course.php";
require_once "Lesson.php";

$course = new Course(123,"PHP OOP Basics");
$lesson = new Lesson(101, "Multi Level Inheritance", $course);
$lesson->printCourseDetails();
$lesson->printLessonDetails();