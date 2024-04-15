-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 
select first_name,salary from employees;
select * from employees where salary>60000;
select * from employees Join projects;
select * from departments NATURAL JOIN projects;
select * from projects where budget>100000;
(select * from employees where department_id=(select department_id from departments where department_name="Engineering")) UNION (select * from employees where department_id=(select department_id from departments where department_name="Finance"));
select * from employees JOIN projects;
