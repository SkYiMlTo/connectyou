CREATE TABLE users
(
    username varchar(256),
    mail varchar(256),
    password varchar(256)
);


INSERT INTO users (username, mail, password) VALUES ('admin', 'admin@admin.com', 'mycoolsecurepassword');
