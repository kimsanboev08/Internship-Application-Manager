-- QUERY 1 
-- How many Applications were submitted from each Department at School?
SELECT School_P23.DepartmentID, DepartmentName, COUNT(Application_P23.StudentID) AS Applications
	FROM Application_P23 NATURAL JOIN Student_P23
	RIGHT OUTER JOIN School_P23 ON Student_P23.MajorID = School_P23.MajorID
	RIGHT OUTER JOIN Department_P23 ON Department_P23.DepartmentID = School_P23.DepartmentID
	GROUP BY DepartmentID ORDER BY Applications DESC;


	
-- QUERY 2
-- Select majors from the Engineering Department
-- NOTE: The First Nested Query uses a PRIMARY KEY(School_P23.DepartmentID) in its WHERE clause, however the second one does NOT(WHERE DepartmentName).
SELECT MajorName as 'Engineering Majors' FROM Major_P23 WHERE Major_P23.MajorID IN
	(SELECT School_P23.MajorID FROM School_P23 WHERE School_P23.DepartmentID = 
		(SELECT Department_P23.DepartmentID FROM Department_P23 WHERE DepartmentName = "Engineering")) ORDER BY 'Engineering Majors' ASC;



-- QUERY #
-- Students' Full Info
SELECT StudentID, Student_P23.Firstname AS 'First Name', Student_P23.LastName AS 'Last Name', Birthdate, MajorName AS 'Major', Classification, GPA
	FROM Student_P23 NATURAL JOIN Major_P23;