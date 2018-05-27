
CREATE DATABASE finalproject;

USE finalproject;

CREATE TABLE instructor
(
  iID CHAR(225) NOT NULL,
  fName CHAR(255) NOT NULL,
  lName CHAR(255) NOT NULL,
  
  CONSTRAINT instructorPK PRIMARY KEY (iID)
);

CREATE TABLE student
(
  sID CHAR(225) NOT NULL,
  identifier INT NOT NULL,
  CONSTRAINT participatesPK PRIMARY KEY (identifier)
);

CREATE TABLE class
(
  cNumber INT NOT NULL,
  cName CHAR(255) NOT NULL,
  sectionNumber INT,
  semester CHAR(255) NOT NULL,
  year INT NOT NULL,
  iID CHAR(225) NOT NULL,
  CONSTRAINT classPK PRIMARY KEY (cNumber),
  CONSTRAINT classFK FOREIGN KEY (iID) REFERENCES instructor (iID)
);

CREATE TABLE take
(
  sID CHAR(255) NOT NULL,
  cNumber INT NOT NULL,
  CONSTRAINT takeFK FOREIGN KEY (cNumber) REFERENCES class(cNumber)
);

CREATE TABLE choiceQuestion
(
  cqID INT NOT NULL,
  cqtype INT NOT NULL,
  cqNumber INT NOT NULL,
  cquestion CHAR(255) NOT NULL,
  CONSTRAINT choiceQuestionPK PRIMARY KEY (cqID)

);

CREATE TABLE choiceEvaluation
(
  
  cNumber INT NOT NULL,
  cqID INT NOT NULL,
  
  CONSTRAINT ceclassFK FOREIGN KEY (cNumber) REFERENCES class(cNumber),
  CONSTRAINT cequestionFK FOREIGN KEY (cqID) REFERENCES choiceQuestion(cqID)
);



CREATE TABLE choiceOption
(
  coID INT NOT NULL,
  cqID INT NOT NULL,
  coNum INT NOT NULL,
  coContent CHAR(255) NOT NULL,
  CONSTRAINT choiceOptionPK PRIMARY KEY (coID),
  CONSTRAINT choiceOptionFK FOREIGN KEY (cqID) REFERENCES choiceQuestion(cqID)
);

CREATE TABLE choiceAnswer
(
  caID INT NOT NULL,
  cqID INT NOT NULL,
  answer CHAR(255) NOT NULL,
  identifier INT NOT NULL,
  cNumber INT NOT NULL ,
  
  CONSTRAINT caquestionFK FOREIGN KEY (cqID) REFERENCES choiceQuestion(cqID),
  CONSTRAINT castudent FOREIGN KEY (identifier) REFERENCES student(identifier),
  CONSTRAINT caclass FOREIGN KEY (cNumber) REFERENCES class(cNumber)
);




CREATE TABLE agreeQuestion
(
  aqID INT NOT NULL,
  aqtype INT NOT NULL,
  aqNumber INT NOT NULL,
  aquestion CHAR(255) NOT NULL,
  CONSTRAINT agreeQuestionPK PRIMARY KEY (aqID)

);


CREATE TABLE agreeEvaluation
(
  cNumber INT NOT NULL,
  aqID INT NOT NULL,

  CONSTRAINT aeclassFK FOREIGN KEY (cNumber) REFERENCES class(cNumber),
  CONSTRAINT aequestionFK FOREIGN KEY (aqID) REFERENCES agreeQuestion(aqID)
);

CREATE TABLE agreeOption
(
  aoID INT NOT NULL,
  aqID INT NOT NULL,
  aoNum INT NOT NULL,
  aoContent CHAR(255) NOT NULL,
  CONSTRAINT agreeOptionPK PRIMARY KEY (aoID),
  CONSTRAINT agreeOptionFK FOREIGN KEY (aqID) REFERENCES agreeQuestion(aqID)
);

CREATE TABLE agreeAnswer
(
  aaID INT NOT NULL,
  aqID INT NOT NULL,
  answer CHAR(255) NOT NULL,
  identifier INT NOT NULL,
  cNumber INT NOT NULL ,
 
  CONSTRAINT aaquestionFK FOREIGN KEY (aqID) REFERENCES agreeQuestion(aqID),
  CONSTRAINT aastudent FOREIGN KEY (identifier) REFERENCES student(identifier),
  CONSTRAINT aaclass FOREIGN KEY (cNumber) REFERENCES class(cNumber)
);



CREATE TABLE openQuestion
(
  oqID INT NOT NULL,
  oqtype INT NOT NULL,
  oquestion CHAR(255) NOT NULL,
  CONSTRAINT openQuestionPK PRIMARY KEY (oqID)

);

CREATE TABLE openEvaluation
(
 
  cNumber INT NOT NULL,
  oqID INT NOT NULL,

  CONSTRAINT oeclassFK FOREIGN KEY (cNumber) REFERENCES class(cNumber),
  CONSTRAINT oequestionFK FOREIGN KEY (oqID) REFERENCES openQuestion(oqID)
);

CREATE TABLE openAnswer
(
  oaID INT NOT NULL,
  oqID INT NOT NULL,
  answer CHAR(255) NOT NULL,
  identifier INT NOT NULL,
  cNumber INT NOT NULL ,
  
  CONSTRAINT oaquestionFK FOREIGN KEY (oqID) REFERENCES openQuestion(oqID),
  CONSTRAINT oastudent FOREIGN KEY (identifier) REFERENCES student(identifier),
  CONSTRAINT oaclass FOREIGN KEY (cNumber) REFERENCES class(cNumber)
);



CREATE TABLE scaleQuestion
(
  scqID INT NOT NULL,
  scqtype INT NOT NULL,
  scquestion CHAR(255) NOT NULL,
  CONSTRAINT scaleQuestionPK PRIMARY KEY (scqID)

);

CREATE TABLE scaleEvaluation
(

  cNumber INT NOT NULL,
  scqID INT NOT NULL,

  CONSTRAINT sceclassFK FOREIGN KEY (cNumber) REFERENCES class(cNumber),
  CONSTRAINT scequestionFK FOREIGN KEY (scqID) REFERENCES scaleQuestion(scqID)
);

CREATE TABLE scaleAnswer
(
  scaID INT NOT NULL,
  scqID INT NOT NULL,
  answer INT NOT NULL,
  identifier INT NOT NULL,
  cNumber INT NOT NULL,
  
  CONSTRAINT scaquestionFK FOREIGN KEY (scqID) REFERENCES scaleQuestion(scqID),
  CONSTRAINT scastudent FOREIGN KEY (identifier) REFERENCES student(identifier),
  CONSTRAINT scaclass FOREIGN KEY (cNumber) REFERENCES class(cNumber)
);