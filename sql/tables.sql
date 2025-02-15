CREATE OR REPLACE TABLE users
(
    username varchar(256),
    mail varchar(256),
    password varchar(256)
);

DROP TABLE users;

INSERT INTO users (username, mail, password) VALUES ('admin', 'admin@admin.com', 'mycoolsecurepassword');

SELECT * FROM users WHERE username = 'admin'

SELECT * FROM users WHERE username='admin' -- ' AND password='tt'
SELECT * FROM users WHERE username='admin' -- ' AND password='tt'