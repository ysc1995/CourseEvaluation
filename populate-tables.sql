use finalproject;
SET foreign_key_checks = 0;
LOAD DATA LOCAL INFILE '/home/kamisama_pizza/instructor.csv' INTO TABLE instructor
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/student.csv' INTO TABLE student
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/class.csv' INTO TABLE class
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/take.csv' INTO TABLE take
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/choicequestion.csv' INTO TABLE choiceQuestion
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/choiceevaluation.csv' INTO TABLE choiceEvaluation
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/choiceoption.csv' INTO TABLE choiceOption
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/choiceanswer.csv' INTO TABLE choiceAnswer
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/agreequestion.csv' INTO TABLE agreeQuestion
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/agreeoption.csv' INTO TABLE agreeOption
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/agreeevaluation.csv' INTO TABLE agreeEvaluation
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/agreeanswer.csv' INTO TABLE agreeAnswer
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/openquestion.csv' INTO TABLE openQuestion
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/openevaluation.csv' INTO TABLE openEvaluation
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/openanswer.csv' INTO TABLE openAnswer
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/scalequestion.csv' INTO TABLE scaleQuestion
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/scaleevaluation.csv' INTO TABLE scaleEvaluation
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/home/kamisama_pizza/scaleanswer.csv' INTO TABLE scaleAnswer
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n';
SET foreign_key_checks = 1;