
INSERT INTO users(username,email,fullname,gender,password,birthdate)
VALUES ("admin3","admin3@gmail.com",'Nguyen Van A', "Nam","2121212","2018-01-15")



INSERT INTO type_product(name) VALUES ('Loai 1');

INSERT INTO products(type_id,name,quantity,price)
VALUES (2,"San pham 2", 5,50000);

--cập nhật đơn giá cho sp có id là 4

UPDATE products SET 
price=60000
WHERE id=4


