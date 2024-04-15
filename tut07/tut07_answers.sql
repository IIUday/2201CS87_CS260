-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 
-- Problem 1
DELIMITER //

CREATE PROCEDURE CalculateAverageSalary(IN department_id_param INT)
BEGIN
    DECLARE avg_salary DECIMAL(10,2);
    
    SELECT AVG(salary) INTO avg_salary
    FROM employees
    WHERE department_id = department_id_param;
    
    SELECT avg_salary;
END//

DELIMITER ;
-- Problem 2
DELIMITER //

CREATE PROCEDURE UpdateSalaryByPercentage( -- take two parameters emp_id and percentage
    IN emp_id_param INT,
    IN percentage DECIMAL(5,2)
)
BEGIN
    DECLARE new_salary DECIMAL(10,2);
    
    SELECT salary * (1 + percentage / 100) INTO new_salary
    FROM employees
    WHERE emp_id = emp_id_param;
    
    UPDATE employees
    SET salary = new_salary
    WHERE emp_id = emp_id_param;
    
    SELECT new_salary;
END//

DELIMITER ;
-- Problem 3
DELIMITER //

CREATE PROCEDURE ListEmployeesInDepartment(IN department_id_param INT)
BEGIN
    SELECT *
    FROM employees
    WHERE department_id = department_id_param;
END//

DELIMITER ;
--Problem 4
DELIMITER //

CREATE PROCEDURE CalculateTotalBudgetForProject(IN project_id_param INT)
BEGIN
    DECLARE total_budget DECIMAL(10,2);
    
    SELECT SUM(budget) INTO total_budget
    FROM projects
    WHERE project_id = project_id_param;
    
    SELECT total_budget;
END//

DELIMITER ;
-- Problem 5
DELIMITER //

CREATE PROCEDURE FindEmployeeWithHighestSalaryInDepartment(IN department_id_param INT)
BEGIN
    SELECT *
    FROM employees
    WHERE department_id = department_id_param
    ORDER BY salary DESC
    LIMIT 1;
END//

DELIMITER ;
-- Problem 6
DELIMITER //

CREATE PROCEDURE ListProjectsDueToEndWithinDays(IN days_param INT)
BEGIN
    DECLARE end_date_limit DATE;
    
    SET end_date_limit = DATE_ADD(CURDATE(), INTERVAL days_param DAY);
    
    SELECT *
    FROM projects
    WHERE end_date <= end_date_limit;
END//

DELIMITER ;
-- Problem 7
DELIMITER //

CREATE PROCEDURE CalculateTotalSalaryExpenditureForDepartment(IN department_id_param INT)
BEGIN
    DECLARE total_salary DECIMAL(10,2);
    
    SELECT SUM(salary) INTO total_salary
    FROM employees
    WHERE department_id = department_id_param;
    
    SELECT total_salary;
END//

DELIMITER ;
-- Problem 8
DELIMITER //

CREATE PROCEDURE GenerateEmployeeReport()
BEGIN
    SELECT e.emp_id, e.first_name, e.last_name, d.department_name, e.salary
    FROM employees e
    INNER JOIN departments d ON e.department_id = d.department_id;
END//

DELIMITER ;
-- Problem 9
DELIMITER //

CREATE PROCEDURE FindProjectWithHighestBudget()
BEGIN
    SELECT *
    FROM projects
    ORDER BY budget DESC
    LIMIT 1;
END//

DELIMITER ;
-- Problem 10
DELIMITER //

CREATE PROCEDURE CalculateAverageSalaryAcrossDepartments()
BEGIN
    DECLARE avg_salary DECIMAL(10,2);
    
    SELECT AVG(salary) INTO avg_salary
    FROM employees;
    
    SELECT avg_salary;
END//

DELIMITER ;
--Problem 11
DELIMITER //

CREATE PROCEDURE AssignNewManagerToDepartment(
    IN department_id_param INT,
    IN new_manager_id_param INT
)
BEGIN
    UPDATE departments
    SET manager_id = new_manager_id_param
    WHERE department_id = department_id_param;
END//

DELIMITER ;
--Problem 12
DELIMITER //

CREATE PROCEDURE CalculateRemainingBudgetForProject(
    IN project_id_param INT
)
BEGIN
    DECLARE total_budget DECIMAL(10,2);
    DECLARE total_expense DECIMAL(10,2);
    DECLARE remaining_budget DECIMAL(10,2);
    
    -- Calculate total budget for the project
    SELECT budget INTO total_budget
    FROM projects
    WHERE project_id = project_id_param;
    
    -- Calculate total expenses for the project
    SELECT SUM(amount) INTO total_expense
    FROM expenses
    WHERE project_id = project_id_param;
    
    -- Calculate remaining budget
    SET remaining_budget = total_budget - total_expense;
    
    SELECT remaining_budget;
END//

DELIMITER ;
-- Problem 13
DELIMITER //

CREATE PROCEDURE GenerateEmployeeReportByJoinYear(IN join_year_param INT)
BEGIN
    SELECT *
    FROM employees
    WHERE YEAR(join_date) = join_year_param;
END//

DELIMITER ;
-- Problem 14
DELIMITER //

CREATE PROCEDURE UpdateEndDateFromDuration(
    IN project_id_param INT,
    IN start_date_param DATE,
    IN duration_param INT
)
BEGIN
    DECLARE end_date_new DATE;
    
    -- Calculate the new end date based on start date and duration
    SET end_date_new = DATE_ADD(start_date_param, INTERVAL duration_param DAY);
    
    -- Update the end date of the project
    UPDATE projects
    SET end_date = end_date_new
    WHERE project_id = project_id_param;
    
    SELECT end_date_new;
END//

DELIMITER ;
-- Problem 15
DELIMITER //

CREATE PROCEDURE CalculateTotalEmployeesPerDepartment()
BEGIN
    SELECT d.department_name, COUNT(e.emp_id) AS total_employees
    FROM departments d
    LEFT JOIN employees e ON d.department_id = e.department_id
    GROUP BY d.department_id;
END//

DELIMITER ;





