SELECT * FROM phone_book.contacts;

CREATE TABLE contacts(
	id int primary key AUTO_INCREMENT,
    first_name VARCHAR(25) NOT NULL,
    middle_name VARCHAR(25),
    last_name VARCHAR(25) NOT NULL,
    phone_number VARCHAR(10) NOT NULL 

);

INSERT INTO contacts (first_name, middle_name, last_name, phone_number) 
values
('anjan','kumar','shrestha','9863727324')
