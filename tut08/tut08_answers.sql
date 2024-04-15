-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL
-- Question 1
DELIMITER //
CREATE TRIGGER increase_salary_trigger
BEFORE INSERT ON employees
FOR EACH ROW
BEGIN
    IF NEW.salary < 60000 THEN
        SET NEW.salary = NEW.salary * 1.1;
    END IF;
END;
//
DELIMITER ;
-- Question 2
DELIMITER //
CREATE TRIGGER prevent_delete_department_trigger
BEFORE DELETE ON departments
FOR EACH ROW
BEGIN
    DECLARE employee_count INT;

    SELECT COUNT(*) INTO employee_count
    FROM employees
    WHERE department_id = OLD.department_id;

    IF employee_count > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Cannot delete department because there are employees assigned to it';
    END IF;
END;
//
DELIMITER ;
-- Question 3
CREATE TABLE salary_audit (
    audit_id SERIAL PRIMARY KEY,
    emp_id INT,
    old_salary DECIMAL,
    new_salary DECIMAL,
    employee_name VARCHAR(100),
    update_date TIMESTAMP
);
DELIMITER //
CREATE TRIGGER salary_update_audit_trigger
AFTER UPDATE ON employees
FOR EACH ROW
BEGIN
    IF OLD.salary <> NEW.salary THEN
        INSERT INTO salary_audit (emp_id, old_salary, new_salary, employee_name, updated_date)
        VALUES (OLD.emp_id, OLD.salary, NEW.salary, CONCAT(NEW.first_name, ' ', NEW.last_name), NOW());
    END IF;
END;
//
DELIMITER ;
-- Question 4
DELIMITER //
CREATE TRIGGER assign_department_trigger
BEFORE INSERT ON employees
FOR EACH ROW
BEGIN
    DECLARE dept_id INT;

    IF NEW.salary <= 60000 THEN
        SET dept_id = 3; -- Department ID for the specified salary range
    -- Add more conditions for other salary ranges if needed
    ELSE
        -- Set default department ID for other cases
        SET dept_id = 1; -- Assuming department ID 1 is the default department
    END IF;

    SET NEW.department_id = dept_id;
END;
//
DELIMITER ;
-- Question 5
DELIMITER //
CREATE TRIGGER update_manager_salary_trigger
AFTER INSERT ON employees
FOR EACH ROW
BEGIN
    DECLARE manager_salary DECIMAL(10, 2);

    -- Find the highest salary for the department
    SELECT MAX(salary) INTO manager_salary
    FROM employees
    WHERE department_id = NEW.department_id;

    -- Update the manager's salary
    UPDATE employees
    SET salary = manager_salary
    WHERE emp_id = (
        SELECT manager_id
        FROM departments
        WHERE department_id = NEW.department_id
    );
END;
//
DELIMITER ;
-- Question 6
DELIMITER //
CREATE TRIGGER prevent_update_department_trigger
BEFORE UPDATE ON employees
FOR EACH ROW
BEGIN
    DECLARE project_count INT;

    -- Check if the employee has worked on any projects
    SELECT COUNT(*) INTO project_count
    FROM works_on
    WHERE emp_id = NEW.emp_id;

    -- If the employee has worked on projects, prevent updating department_id
    IF project_count > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Cannot update department_id because the employee has worked on projects';
    END IF;
END;
//
DELIMITER ;
--Question 7
DELIMITER //
CREATE TRIGGER update_avg_salary_trigger
AFTER UPDATE ON employees
FOR EACH ROW
BEGIN
    DECLARE dept_avg_salary DECIMAL(10, 2);
    
    -- Calculate the average salary for the department of the updated employee
    SELECT AVG(salary) INTO dept_avg_salary
    FROM employees
    WHERE department_id = NEW.department_id;

    -- Update the average salary in the departments table
    UPDATE departments
    SET avg_salary = dept_avg_salary
    WHERE department_id = NEW.department_id;
END;
//
DELIMITER ;
--Question 8
DELIMITER //
CREATE TRIGGER delete_employee_works_on_trigger
AFTER DELETE ON employees
FOR EACH ROW
BEGIN
    DELETE FROM works_on WHERE emp_id = OLD.emp_id;
END;
//
DELIMITER ;
-- Question 9
DELIMITER //
CREATE TRIGGER prevent_insert_low_salary_trigger
BEFORE INSERT ON employees
FOR EACH ROW
BEGIN
    DECLARE min_salary DECIMAL(10, 2);

    -- Get the minimum salary for the department of the new employee
    SELECT MIN(salary) INTO min_salary
    FROM employees
    WHERE department_id = NEW.department_id;

    -- If the new employee's salary is less than the minimum salary for the department, raise an error
    IF NEW.salary < min_salary THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Cannot insert employee. Salary is less than the minimum salary for the department';
    END IF;
END;
//
DELIMITER ;
-- Question 10
DELIMITER //
CREATE TRIGGER update_department_salary_budget_trigger
AFTER UPDATE ON employees
FOR EACH ROW
BEGIN
    DECLARE total_salary DECIMAL(10, 2);
    
    -- Calculate the total salary for the department of the updated employee
    SELECT SUM(salary) INTO total_salary
    FROM employees
    WHERE department_id = NEW.department_id;

    -- Update the total salary budget in the departments table
    UPDATE departments
    SET total_salary_budget = total_salary
    WHERE department_id = NEW.department_id;
END;
//
DELIMITER ;
-- Question 11
DELIMITER //
CREATE TRIGGER send_email_notification_trigger
AFTER INSERT ON employees
FOR EACH ROW
BEGIN
    INSERT INTO notification_queue (notification_type, recipient_email, message)
    VALUES ('New Employee Hired', 'hr@example.com', CONCAT('A new employee has been hired. Employee ID: ', NEW.emp_id));
END;
//
DELIMITER ;
-- Question 12
DELIMITER //
CREATE TRIGGER prevent_insert_missing_location_trigger
BEFORE INSERT ON departments
FOR EACH ROW
BEGIN
    IF NEW.location IS NULL OR NEW.location = '' THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Cannot insert department. Location is not specified';
    END IF;
END;
//
DELIMITER ;
-- Question 13
DELIMITER //
CREATE TRIGGER update_employee_department_name_trigger
AFTER UPDATE ON departments
FOR EACH ROW
BEGIN
    UPDATE employees
    SET department_name = NEW.department_name
    WHERE department_id = NEW.department_id;
END;
//
DELIMITER ;
-- Question 14
CREATE TABLE employees_audit (
    operation VARCHAR(10), -- insert, update, or delete
    emp_id INT,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    salary DECIMAL(10, 2),
    department_id INT,
    timestamp TIMESTAMP
);
-- For insert operation
DELIMITER //
CREATE TRIGGER employees_insert_audit_trigger
AFTER INSERT ON employees
FOR EACH ROW
BEGIN
    INSERT INTO employees_audit (operation, emp_id, first_name, last_name, salary, department_id, timestamp)
    VALUES ('insert', NEW.emp_id, NEW.first_name, NEW.last_name, NEW.salary, NEW.department_id, NOW());
END;
//
DELIMITER ;
--For update operation
DELIMITER //
CREATE TRIGGER employees_update_audit_trigger
AFTER UPDATE ON employees
FOR EACH ROW
BEGIN
    INSERT INTO employees_audit (operation, emp_id, first_name, last_name, salary, department_id, timestamp)
    VALUES ('update', NEW.emp_id, NEW.first_name, NEW.last_name, NEW.salary, NEW.department_id, NOW());
END;
//
DELIMITER ;
-- for Delete operation
DELIMITER //
CREATE TRIGGER employees_delete_audit_trigger
AFTER DELETE ON employees
FOR EACH ROW
BEGIN
    INSERT INTO employees_audit (operation, emp_id, first_name, last_name, salary, department_id, timestamp)
    VALUES ('delete', OLD.emp_id, OLD.first_name, OLD.last_name, OLD.salary, OLD.department_id, NOW());
END;
//
DELIMITER ;
-- Question 15
DELIMITER //
CREATE TRIGGER generate_employee_id_trigger
BEFORE INSERT ON employees
FOR EACH ROW
BEGIN
    DECLARE next_id INT;
    
    -- Find the next auto-increment ID value
    SELECT AUTO_INCREMENT INTO next_id
    FROM information_schema.tables
    WHERE table_name = 'employees' AND table_schema = DATABASE();
    
    -- Set the new employee ID
    SET NEW.emp_id = next_id;
END;
//
DELIMITER ;








