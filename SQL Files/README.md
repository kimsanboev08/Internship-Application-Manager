# Tables
- The SQL Database consists of the following 6 tables: **Department_P23, Major_P23, School_P23, Student_P23, Position_P23, Application_P23** some of which are linked using **a foreign key** reference. The ERD of the tables is provided in the presentation.

## 1. Department_P23
- Stores data about the different departments at school.
- Consists of the following attributes:
    - Department ID ('DepartmentID')
    - Department Name ('DepartmentName')
    - The number of students each department has ('StudentNumber')
    - The minimum number of student applications each department must have ('DepartmentMinimum')

## 2. Major_P23
 - Stores data about all the available majors at school.
 - Consists of the following attributes:
    - Major Id ('MajorID')
    - Major Name ('MajorName')
 
## 3. School_P23
- Links Department_P23 and Major_p23.
- Shows which majors belong to which departments.
- Consists of the following attributes:
    - Department ID ('DepartmentID')
    - Major ID ('MajorID')

## 4. Student_P23 
- Stores student data.
- Consists of the following attributes:
    - Student ID ('StudenID')
    - First Name ('FirstName')
    - Last Name ('LastName')
    - Date of Birth ('Birthdate')
    - Major ('MajorID')
    - Classification ('Classification')
    - GPA ('GPA')
 
## 5. Position_P23 
- Stores data about available internship positions.
- Consists of the following attributes:
    - Position ID ('PositionID') 
    - Position Tittle ('PositionTittle')
    - Company ('Company')
    - Location ('Location')
    - Application Deadline ('Deadline')
    - Minimum GPA a student must have to be eligible ('MinimumGPA')
    - Housing availability ('Housing')

## 6. Application_P23
- Stores data about all the applications submitted.
- Consists of the following attributes:
    - Application Number ('ApplicationNumber')
    - The applicant info ('StudentID')
    - Applied Internship info  ('PositionID')
    - Date of submission ('ApplicationDate')
    - Status of the application ('Status')
