-- Department_P23
ALTER TABLE Department_P23 AUTO_INCREMENT = 1001;

INSERT INTO Department_P23(DepartmentName, StudentNumber, DepartmentMinimum) VALUES('Business', 55, 40);
INSERT INTO Department_P23(DepartmentName, StudentNumber, DepartmentMinimum) VALUES('Engineering', 78, 35);
INSERT INTO Department_P23(DepartmentName, StudentNumber, DepartmentMinimum) VALUES('Fine Arts', 48, 10);
INSERT INTO Department_P23(DepartmentName, StudentNumber, DepartmentMinimum) VALUES('Humanities', 112, 50);
INSERT INTO Department_P23(DepartmentName, StudentNumber, DepartmentMinimum) VALUES('Law', 97, 45);
INSERT INTO Department_P23(DepartmentName, StudentNumber, DepartmentMinimum) VALUES('Medical', 56, 30);
INSERT INTO Department_P23(DepartmentName, StudentNumber, DepartmentMinimum) VALUES('Social Sciences', 145, 25);





-- Major_P23
ALTER TABLE Major_P23 AUTO_INCREMENT = 1;

INSERT INTO Major_P23(MajorName) VALUES('Accounting');
INSERT INTO Major_P23(MajorName) VALUES('Biology');
INSERT INTO Major_P23(MajorName) VALUES('Business Law');
INSERT INTO Major_P23(MajorName) VALUES('Chemical Engineering');
INSERT INTO Major_P23(MajorName) VALUES('Civil Engineering');
INSERT INTO Major_P23(MajorName) VALUES('Classics');
INSERT INTO Major_P23(MajorName) VALUES('Clinical Research');
INSERT INTO Major_P23(MajorName) VALUES('Computer Science');
INSERT INTO Major_P23(MajorName) VALUES('Constitutional Law');
INSERT INTO Major_P23(MajorName) VALUES('Creative Writing');
INSERT INTO Major_P23(MajorName) VALUES('Criminal Law');
INSERT INTO Major_P23(MajorName) VALUES('Dental Hygiene');
INSERT INTO Major_P23(MajorName) VALUES('Economics');
INSERT INTO Major_P23(MajorName) VALUES('Electrical Engineering');
INSERT INTO Major_P23(MajorName) VALUES('English');
INSERT INTO Major_P23(MajorName) VALUES('Finance');
INSERT INTO Major_P23(MajorName) VALUES('Gender Studies');
INSERT INTO Major_P23(MajorName) VALUES('General Law');
INSERT INTO Major_P23(MajorName) VALUES('Healthcare Administration');
INSERT INTO Major_P23(MajorName) VALUES('History');
INSERT INTO Major_P23(MajorName) VALUES('Literature');
INSERT INTO Major_P23(MajorName) VALUES('Marketing');
INSERT INTO Major_P23(MajorName) VALUES('Philosophy');
INSERT INTO Major_P23(MajorName) VALUES('Political Science');
INSERT INTO Major_P23(MajorName) VALUES('Psychology');
INSERT INTO Major_P23(MajorName) VALUES('Real Estate');
INSERT INTO Major_P23(MajorName) VALUES('Sociology');
INSERT INTO Major_P23(MajorName) VALUES('Theatre');
INSERT INTO Major_P23(MajorName) VALUES('Visual Arts');





-- School_P23
INSERT INTO School_P23 VALUES(1001, 1);
INSERT INTO School_P23 VALUES(1001, 16);
INSERT INTO School_P23 VALUES(1001, 22);
INSERT INTO School_P23 VALUES(1001, 26);
INSERT INTO School_P23 VALUES(1002, 4);
INSERT INTO School_P23 VALUES(1002, 5);
INSERT INTO School_P23 VALUES(1002, 8);
INSERT INTO School_P23 VALUES(1002, 14);
INSERT INTO School_P23 VALUES(1003, 6);
INSERT INTO School_P23 VALUES(1003, 10);
INSERT INTO School_P23 VALUES(1003, 21);
INSERT INTO School_P23 VALUES(1003, 28);
INSERT INTO School_P23 VALUES(1003, 29);
INSERT INTO School_P23 VALUES(1004, 15);
INSERT INTO School_P23 VALUES(1004, 17);
INSERT INTO School_P23 VALUES(1004, 20);
INSERT INTO School_P23 VALUES(1004, 23);
INSERT INTO School_P23 VALUES(1004, 25);
INSERT INTO School_P23 VALUES(1005, 3);
INSERT INTO School_P23 VALUES(1005, 9);
INSERT INTO School_P23 VALUES(1005, 11);
INSERT INTO School_P23 VALUES(1005, 18);
INSERT INTO School_P23 VALUES(1006, 2);
INSERT INTO School_P23 VALUES(1006, 7);
INSERT INTO School_P23 VALUES(1006, 12);
INSERT INTO School_P23 VALUES(1006, 19);
INSERT INTO School_P23 VALUES(1007, 13);
INSERT INTO School_P23 VALUES(1007, 24);
INSERT INTO School_P23 VALUES(1007, 27);





-- Student_P23
ALTER TABLE Student_P23 AUTO_INCREMENT = 100001;

INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Jacob', 'Williams', '2002-05-19', 23, 'Junior', 3.84);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Brayden', 'Ochoha', '2000-08-22', 12, 'Freshman', 3.50);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('James', 'Kim', '2003-11-02', 4, 'Senior', 3.24);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Kendrick', 'Napier', '1999-02-27', 29, 'Senior',  4.00);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Jared', 'Wung', '2001-07-15', 19, 'Freshman', 3.00);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Ted', 'Vertonghen', '2002-10-12', 7, 'Junior', 2.85);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Tito', 'Alexander', '1999-01-08', 17, 'Senior', 3.50);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Michael', 'Chandler', '2001-06-06', 28, 'Sophomore', 3.15);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Dustin', 'Porier', '2000-09-28', 8, 'Freshman', 2.86);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Conor', 'McGregor', '1999-12-05', 2, 'Junior', 3.95);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Alex', 'Volkanovski', '2003-03-21', 27, 'Senior', 4.00);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Israel', 'Adesanya', '2000-04-23', 16, 'Sophomore', 3.58);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Beniul', 'Dariush', '1999-08-30', 21, 'Junior', 3.24);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Harry', 'Kane', '2002-01-17', 24, 'Junior', 2.80);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Roberto', 'Carlos', '2001-04-11', 5, 'Freshman', 3.30);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Philiphs', 'McNeil', '1999-10-25', 13, 'Senior', 2.95);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Cristian', 'Leo', '2002-12-29', 1, 'Senior', 3.50);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Isaiah', 'Delp', '2001-09-13', 9, 'Senior', 3.80);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Edward', 'Cullen', '2000-02-16', 5, 'Junior', 3.84);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Peeta', 'Holingsworth', '1999-05-07', 6, 'Sophomore', 2.24);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Katherine', 'Page', '2003-08-24', 14, 'Sophomore', 3.72);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Ameera', 'John', '2002-11-08', 18, 'Junior', 2.85);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Beatrice', 'Moreno', '2000-01-31', 15, 'Freshman', 3.92);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Savanna', 'Jacobcs', '2001-02-08', 13, 'Sophomore', 2.67);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Evangeline', 'Hartley', '1999-06-04', 1, 'Senior', 3.54);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Kaylee', 'Baker', '2003-09-10', 9, 'Freshman', 3.08);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Yousef', 'Lynch', '2001-10-20', 20, 'Junior', 2.93);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Bertha', 'Doherty', '2000-03-16', 6, 'Senior', 3.75);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Aled', 'Montgomery', '1999-11-18', 14, 'Junior', 3.21);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Maya', 'Fisher', '2002-07-07', 18, 'Sophomore', 3.86);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Kelsey', 'Cisneros', '2001-08-09', 15, 'Freshman', 2.99);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Saad', 'Estes', '2003-02-04', 13, 'Senior', 3.68);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Natalia', 'Whitehead', '2000-12-26', 26, 'Sophomore', 2.73);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Stephen', 'Dotson', '1999-03-01', 11, 'Junior', 3.45);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Rowan', 'Finch', '2002-04-13', 10, 'Senior', 3.12);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Herman', 'Levy', '2001-05-21', 25, 'Sophomore', 3.97);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Maddison', 'Hunt', '2000-10-14', 22, 'Freshman', 2.88);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Emma', 'Harmon', '1999-09-03', 1, 'Junior', 3.33);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Leyla', 'Franklin', '2003-06-19', 19, 'Sophomore', 3.62);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Tyler', 'Pitts', '2002-09-08', 21, 'Senior', 2.77);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Chrisian', 'Rodgers', '1999-04-10', 14, 'Junior', 3.81);
INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES('Honor', 'Burton', '2001-03-11', 2, 'Freshman', 3.09);





-- Position_P23
ALTER TABLE Position_P23 AUTO_INCREMENT = 101;

INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Advertising Manager', 'Bulley & Andrews', 'Chicago, IL', '2022-12-01', 80, 3.8, 0);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Biology Lab Technician', 'Johnson & Johnson', 'New Brunswick, NJ', '2022-12-15', 20, 3.0, 0);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Biomedical Research Scientist', 'Novartis', 'Cambridge, MA', '2023-05-15', 80, 3.5, 0);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Civil Engineer', 'HDR Inc.', 'Seattle, WA', '2022-12-20', 55, 3.0, 0);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Clinical Psychologist', 'Johns Hopkins Medicine', 'Baltimore, MD', '2022-12-31', 90, 3.5, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Clinical Research Associate', 'Novartis', 'East Hanover, NJ', '2022-11-30', 30, 3.0, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Communications Officer', 'American Civil Liberties Union', 'Washington, DC', '2023-01-01', 100, 3.6, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Constitutional Law Professor Assistant', 'Yale Law School', 'New Haven, CT', '2022-12-15', 120, 3.8, 0);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Copywriter', 'Leo Burnett', 'Chicago, IL', '2023-03-15', 60, 3.0, 0);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Corporate Lawyer', 'Cravath, Swaine & Moore LLP', 'New York, NY', '2022-12-01', 85, 3.5, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Dental Hygienist', 'Kaiser Permanente', 'Portland, OR', '2023-02-01', 40, 3.2, 0);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Criminal Defense Lawyer', 'The Bronx Defenders', 'Bronx, NY', '2022-12-31', 80, 3.7, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Environmental Lawyer', 'Earthjustice', 'San Francisco, CA', '2023-01-15', 90, 3.7, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Marketing Manager', 'Procter & Gamble', 'Cincinnati, OH', '2022-11-30', 60, 3.2, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Medical Lab Scientist', 'Mayo Clinic', 'Rochester, MN', '2023-02-15', 60, 3.2, 0);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Museum Curator', 'The Metropolitan Museum of Art', 'New York, NY', '2023-03-01', 50, 3.0, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Process Engineer', 'Procter & Gamble', 'Cincinnati, OH', '2022-12-15', 70, 3.2, 0);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Software Developer', 'Google', 'Mountain View, CA', '2023-04-30', 120, 3.8, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Software Developer', 'Microsoft', 'Redmond, WA', '2022-12-31', 80, 3.5, 1);
INSERT INTO Position_P23 (PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES('Structural Engineer', 'AECOM', 'Los Angeles, CA', '2022-12-01', 80, 3.5, 0);





-- Application_P23
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100013, 109, '2022-08-14', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100033, 114, '2022-08-15', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100007, 107, '2022-08-18', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100042, 102, '2022-08-22', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100025, 114, '2022-08-28', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100027, 116, '2022-08-31', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100010, 102, '2022-09-02', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100014, 108, '2022-09-03', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100018, 108, '2022-09-05', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100019, 104, '2022-09-09', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100015, 120, '2022-09-10', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100024, 109, '2022-09-14', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100012, 114, '2022-09-15', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100040, 108, '2022-09-20', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100023, 116, '2022-09-22', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100037, 114, '2022-09-23', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100034, 101, '2022-09-28', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100031, 109, '2022-10-02', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100005, 106, '2022-10-05', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100039, 115, '2022-10-07', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100035, 101, '2022-10-11', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100028, 116, '2022-10-13', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100016, 114, '2022-10-15', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100026, 110, '2022-10-16', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100021, 120, '2022-10-20', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100038, 114, '2022-10-22', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100038, 101, '2022-10-23', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100020, 109, '2022-10-26', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100022, 116, '2022-10-28', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100002, 111, '2022-10-31', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100011, 116, '2022-11-02', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100017, 101, '2022-11-05', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100017, 114, '2022-11-07', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100009, 118, '2022-11-10', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100036, 105, '2022-11-11', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100030, 110, '2022-11-15', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100008, 119, '2022-11-19', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100009, 119, '2022-11-20', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100041, 117, '2022-11-21', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100008, 118, '2022-11-24', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100003, 103, '2022-11-25', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100004, 109, '2022-11-30', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100032, 114, '2022-12-02', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100001, 105, '2022-12-05', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100031, 116, '2022-12-07', 'Pendind');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100018, 110, '2022-12-11', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100037, 101, '2022-12-13', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100016, 114, '2022-12-15', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100041, 119, '2022-12-18', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100021, 117, '2022-12-21', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100012, 101, '2022-12-24', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100006, 115, '2022-12-26', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100027, 116, '2022-12-30', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100008, 120, '2023-01-01', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100039, 113, '2023-01-04', 'Accepted');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100014, 107, '2023-01-08', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100024, 101, '2023-01-10', 'Rejected');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100011, 105, '2023-01-10', 'Pendind');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100019, 120, '2023-01-11', 'Pending');
INSERT INTO Application_P23 (StudentID, PositionID, ApplicationDate, Status) VALUES(100025, 101, '2023-01-13', 'Rejected');

