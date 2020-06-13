--- tampilkan semua berita dengan user/penulis
select * from posts INNER JOIN users ON posts.User_id = users.id;

--- Tampilkan berita sesuai user yang membuat
select * from posts where User_id = 1;

--- tampilan detail berita
select * from posts where id = 1;

--- Create table post
 CREATE TABLE posts( id serial PRIMARY KEY, title VARCHAR (100) NOT NULL, image VARCHAR (100) NOT NULL, deskripsi TEXT NOT NULL, User_id integer NOT NULL, created_on TIMESTAMP NOT NULL default current_timestamp, CONSTRAINT fk_user_id FOREIGN KEY (User_id) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE);

--- Create table user
CREATE TABLE users( id serial PRIMARY KEY, name VARCHAR (100) NOT NULL, email VARCHAR (355) NOT NULL, created_on TIMESTAMP NOT NULL default current_timestamp);