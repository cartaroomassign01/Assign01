CREATE DATABASE cartaroom;
CREATE TABLE host(
company_id int(10) NOT NULL,
company_name varchar(255) NOT NULL,
company_email varchar(255) NOT NULL,
company_address varchar(255) NOT NULL,
PRIMARY KEY (company_id)
);

INSERT INTO host (company_id, company_name, company_email,company_address) VALUES (1234567890, "waves coffee", "waves@gmail.com","123 77ave");