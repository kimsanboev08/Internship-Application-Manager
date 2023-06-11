ALTER TABLE Student_P23 DROP CONSTRAINT Major;
ALTER TABLE Application_P23 DROP CONSTRAINT StudentID;
ALTER TABLE Application_P23 DROP CONSTRAINT PositionID;
DROP TABLE IF EXISTS Application_P23, Position_P23, StudentMajor_P23, School_P23, Student_P23, Major_P23, Department_P23;


CREATE TABLE Department_P23 (
	DepartmentID int AUTO_INCREMENT NOT NULL,
	DepartmentName varchar(40),
	StudentNumber int,
	DepartmentMinimum int,
	PRIMARY KEY(DepartmentID)	
)


CREATE TABLE Major_P23 (
	MajorID int AUTO_INCREMENT NOT NULL,
	MajorName varchar(40),
	PRIMARY KEY(MajorID)
)


CREATE TABLE School_P23 (
	DepartmentID int NOT NULL,
	MajorID int NOT NULL,
	PRIMARY KEY(DepartmentID, MajorID)
)


CREATE TABLE Student_P23 (
	StudentID int AUTO_INCREMENT NOT NULL, 
	FirstName varchar(40),
	LastName varchar(40),
	Birthdate date,
	MajorID int NOT NULL,
	Classification varchar(40),
	GPA double(3, 2)
		CHECK (GPA >= 0 and GPA <= 4.0),
	PRIMARY KEY (StudentID)
)

	
CREATE TABLE Position_P23 (
	PositionID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	PositionTittle varchar(50),
	Company varchar(50),
	Location varchar(50),
	Deadline date,
	Compensation int,
	MinimumGPA decimal(4, 2),
	Housing boolean	
)


CREATE TABLE Application_P23 (
	ApplicationNumber int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	StudentID int,
	PositionID int,
	ApplicationDate date,
	Status varchar(20)
)


ALTER TABLE Student_P23 ADD CONSTRAINT Major
	FOREIGN KEY (MajorID) REFERENCES Major_P23(MajorID) ON DELETE CASCADE;

ALTER TABLE Application_P23 ADD CONSTRAINT StudentID
	FOREIGN KEY (StudentID) REFERENCES Student_P23(StudentID) ON DELETE CASCADE;

ALTER TABLE Application_P23 ADD CONSTRAINT PositionID
	FOREIGN KEY (PositionID) REFERENCES Position_P23(PositionID) ON DELETE CASCADE;

	
