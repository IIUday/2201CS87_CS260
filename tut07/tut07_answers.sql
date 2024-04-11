-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 
select AVERAGE(salary),department from employees GROUP BY department_id;
UPDATE employees SET  salary= (salary + 0.1*salary);
