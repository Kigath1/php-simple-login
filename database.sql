-- After creating database create the table below 

create table user (
	user_id int PRIMARY KEY UNIQUE AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL
	);


-- insert logins into the database 
insert into user (username, password) VALUES
    ('Admin', 'password'),
    ('john_doe', 'john_doe');

-- N/B: the inserted data can be edited it's not a constant 
