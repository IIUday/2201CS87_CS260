-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 
select first_name,last_name from employees;
select department_name,location from departments;
select prject_name,budget from projects;
select first_name,last_name,salary from employees where department_id=(select department_id from departments where department_name="Engineering");
select prject_name,start_date from projects;
select first_name,last_name,department_name from employees NATURAL JOIN departments;
select project_name from projects where budget>90000;
select sum(budget) from projects;
select first_name,last_name,salary from employees where salary>60000;
select project_name,end_date from projects;
select department_name from departments where location="North India";
