
INSERT INTO users(username,email,fullname,gender,password,birthdate)
VALUES ("admin3","admin3@gmail.com",'Nguyen Van A', "Nam","2121212","2018-01-15")



INSERT INTO type_product(name) VALUES ('Loai 1');

INSERT INTO products(type_id,name,quantity,price)
VALUES (2,"San pham 2", 5,50000);

--cập nhật đơn giá cho sp có id là 4

UPDATE products SET 
price=60000
WHERE id=4

-- Cập nhật id loại cho các sp có tên Oppo biết loại Oppo có id là 2
--C1
UPDATE products SET
type_id = 2
WHERE id=4 OR id=6

--C2
UPDATE products SET
type_id = 2
WHERE id IN (4,6)

--C3
UPDATE products SET
type_id = 2
WHERE name LIKE "Oppo%"

--Cập nhật id loại cho các sp có tên Samsung biết loại Samsung có id là 5
UPDATE products SET
type_id = 5
WHERE name LIKE "%Samsung%"

-- cập nhật đơn giá cho những sp có đơn giá trong khoảng 50000-100000 với đơn giá mới là 250000

--C1
UPDATE products SET
price = 250000
WHERE price BETWEEN 50000 AND 100000

--C2
UPDATE products SET
price = 250000
WHERE price>=50000
AND price<=100000

/*
WHERE

IN(1,2,34)
NOT IN
LIKE 
NOT LIKE
AND
OR
BETWEEN min AND max
>    <    =    >=   <=    !=    <>

*/

DELETE FROM products
WHERE price=250000

DELETE FROM products WHERE type_id=5;
DELETE FROM type_product
WHERE id=5


SELECT name, price FROM products
WHERE name LIKE "%oppo%"

SELECT name as "Tên sp", price as "Đơn giá" 
FROM products
WHERE name LIKE "%oppo%"


-- lien ket bang

--C1
SELECT products.name as 'ten sp', type_product.name as 'ten loai'
FROM products,type_product
WHERE products.type_id = type_product.id
AND type_product.name LIKE "sony"

--C2
SELECT p.name as 'ten sp', t.name as 'ten loai'
FROM products p
INNER JOIN type_product t
    ON  p.type_id = t.id
WHERE t.name LIKE "sony"

