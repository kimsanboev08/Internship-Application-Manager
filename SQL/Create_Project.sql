ALTER TABLE Student_P23 DROP FOREIGN KEY Major;
ALTER TABLE Application_P23 DROP FOREIGN KEY Student;
ALTER TABLE Application_P23 DROP FOREIGN KEY Position;
ALTER TABLE Review_P23 DROP FOREIGN KEY StudentReview;
ALTER TABLE Review_P23 DROP FOREIGN KEY PositionReview;



DROP TABLE IF EXISTS Application_P23, Review_P23, Position_P23, School_P23, Student_P23, Major_P23, Department_P23;



CREATE TABLE Department_P23 (
	DepartmentID int AUTO_INCREMENT NOT NULL,
	DepartmentName varchar(40),
	StudentNumber int,
	DepartmentMinimum int,
	PRIMARY KEY(DepartmentID)
	
) Engine = InnoDB;



CREATE TABLE Major_P23 (
	MajorID int AUTO_INCREMENT NOT NULL,
	MajorName varchar(40),
	PRIMARY KEY(MajorID)
) Engine = InnoDB;



CREATE TABLE School_P23 (
	DepartmentID int NOT NULL,
	MajorID int NOT NULL,
	PRIMARY KEY(DepartmentID, MajorID)
) Engine = InnoDB;



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
	
) Engine = InnoDB;


	
CREATE TABLE Position_P23 (
	PositionID int AUTO_INCREMENT NOT NULL ,
	PositionTittle varchar(50),
	Company varchar(50),
	Location varchar(50),
	Deadline date,
	Compensation int,
	MinimumGPA decimal(4, 2),
	Housing boolean,
	PRIMARY KEY (PositionID)
	
) Engine = InnoDB;



CREATE TABLE Application_P23 (
	ApplicationNumber int AUTO_INCREMENT NOT NULL,
	StudentID int,
	PositionID int,
	ApplicationDate date,
	Status varchar(20),
	PRIMARY KEY(ApplicationNumber)

) Engine = InnoDB;


CREATE TABLE Review_P23 (
	StudentID int,
	PositionID int,
	Start_of_term varchar(20),
	End_of_term varchar(20),
	Rating decimal(2, 1)
		CHECK (Rating >= 0.0 and Rating <= 5.0),
	Feedback varchar(200)
	
) Engine = InnoDB;

	


-- Foreign Keys

ALTER TABLE Student_P23 ADD CONSTRAINT Major FOREIGN KEY (MajorID) 
	REFERENCES Major_P23 (MajorID) ON DELETE CASCADE;

ALTER TABLE Application_P23 ADD CONSTRAINT Student FOREIGN KEY (StudentID) 
	REFERENCES Student_P23 (StudentID) ON DELETE CASCADE;

ALTER TABLE Application_P23 ADD CONSTRAINT Position FOREIGN KEY (PositionID) 
	REFERENCES Position_P23 (PositionID) ON DELETE CASCADE;

ALTER TABLE Review_P23 ADD CONSTRAINT PositionReview FOREIGN KEY (PositionID) 
	REFERENCES Position_P23 (PositionID) ON DELETE CASCADE;

ALTER TABLE Review_P23 ADD CONSTRAINT StudentReview FOREIGN KEY (StudentID) 
	REFERENCES Student_P23 (StudentID) ON DELETE CASCADE;
