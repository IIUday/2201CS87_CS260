-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 
select first_name, last_name from students;
select course_name,credit_hours from courses;
select first_name,last_name,email from instructors;
select course_name,grades from enrollment as e NATURAL JOIN courses as c;
select first_name,last_name,city from students;
select course_name,first_name,last_name from courses as c NATURAL JOIN instructors as ist;
select first_name,last_name,age from students;
select course_name,enrollment_date from enrollment as e NATURAL JOIN courses as c;
select first_name,last_name,email from instructors;
select course_name,credit_hours from courses;
select first_name,last_name,email from instructors where instructor_id = { select instructor_id from courses where course_name="Mathematics"};
select course_name,grades from courses NATURAL JOIN enrollment where student_id={select student_id from enrollments where grade="A"};
select first_name,last_name,state from students where student_id={select student_id from enrollments where course_id={select course_id from courses where course_name="Computer Science"}};
select course_name,enrollment_date from courses NATURAL JOIN enrollment where grade="B+";
select first_name,last_name,email from instructors where instructor_id={select instructor_id from courses where credit_hours>3};
