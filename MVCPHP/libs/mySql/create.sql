CREATE TABLE article (

id int(11) NOT NULL PRIMARY KEY auto_increment,

title char(100) NOT NULL,

author char(50) not null ,

description varchar(255) not null,

content text not null,

dateline int(11) not null default 0

);