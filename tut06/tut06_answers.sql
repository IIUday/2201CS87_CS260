-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 
select first_name,last_name,course_id from students NATURAL JOIN enrollments;
select course_name,grades from courses NATURAL JOIN enrollments;
select std.first_name,std.last_name,course_name,instructor_id from students as std NATURAL JOIN enrollments NATURAL JOIN courses;
select first_name,last_name,age,city from students where student_id=(select student_id from enrollments where course_id=(select course_id from courses where course_name="Mathematics"));
select course_name,first_name,last_name from courses NATURAL JOIN instructors;
select first_name,last_name,grade,course_id from students NATURAL JOIN enrollments;
select first_name,last_name,age from students NATURAL JOIN enrollments GROUP BY first_name,last_name,age HAVING count>1;
select course_id,count(student_id) as number_of_students from enrollment NATURAL JOIN courses GROUP BY course_id;
select first_name,last_name,age from students NATURAL JOIN enrollments GROUP BY first_name,last_name,age HAVING count=0;
select student_id,course_name, AVERAGE(grade) from enrollments NATURAL JOIN courses GROUP BY student_id,course_name;
select first_name,last_name,course_name from students NATURAL JOIN enrollments NATURAL JOIN courses where (grade="A" OR grade="AB");
select course_name,first_name,last_name from courses NATURAL JOIN instructors where last_name LIKE 'S%';
select std.first_name,std.last_name,std.age from students as std NATURAL JOIN enrollments where course_id=(select course_id from courses where instructor_id=(select instructor_id from instructors where instructor_name="Dr. Akhil"));
select course_name,grade from enrollments NATURAL JOIN courses ORDER BY grade LIMIT 1;
select first_name,last_name,age,course_name from students NATURAL JOIN enrollments NATURAL JOIN courses ORDER BY course_name;
