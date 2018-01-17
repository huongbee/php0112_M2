--1
SELECT * FROM foods

--1.1
SELECT name,price, detail
FROM foods
ORDER BY name DESC --ASC

SELECT name,price, detail
FROM foods
ORDER BY price DESC


SELECT name,price, detail
FROM foods
WHERE name LIKE '%cua%'

SELECT name,price, detail
FROM foods
WHERE name LIKE '%crepe%'
AND price > 160000



SELECT name,price, detail
FROM foods
WHERE price BETWEEN 50000 AND 100000

SELECT name,price, detail
FROM foods
WHERE price >=50000
AND price <= 100000

SELECT name,price, detail
FROM foods
WHERE name = "Smoke Chicken Pizza"
OR name = "Bánh Gato Trái cây Việt Quất"
OR name = "...."



--Page=1
SELECT name,price, detail
FROM foods
ORDER BY price DESC
LIMIT 0,10              -- 0: vị trí; 10:số lượng

--Page=2
SELECT name,price, detail
FROM foods
ORDER BY price DESC
LIMIT 10,10 

--Page=3
SELECT name,price, detail
FROM foods
ORDER BY price DESC
LIMIT 20,10 

--p=1 0
--p=2 10=(2-1)*10
--p=3 20=(3-1)*10
--p=4 LIMIT ?,10
--p=5 LIMIT ?,10
--p=6 LIMIT ?,10


--5 
--1:  0,5
--2:  5,5

-- Liệt kê danh sách sản phẩm gồm có:
-- tên sản phẩm, Mô tả. 
-- Có sắp tăng theo cột tên sp, 
-- và sắp giảm theo cột đơn giá.

SELECT name,price, detail
FROM foods
ORDER BY name ASC, price DESC

--c1
SELECT sum(price)/count(price) as dgtb
FROM foods

--c2
SELECT avg(price) as dgtb
FROM foods


SELECT t.name as tenloai, f.name as tensp, price 
FROM foods f
INNER JOIN food_type t
    ON f.id_type = t.id
ORDER BY t.name ASC



SELECT t.name as tenloai, count(f.id) as so_sp
FROM  food_type t
INNER JOIN foods f 
    ON t.id = f.id_type
GROUP BY t.name 
ORDER BY so_sp ASC 

SELECT t.name as tenloai, avg(f.price) as dgtb
FROM  food_type t
INNER JOIN foods f 
    ON t.id = f.id_type
GROUP BY t.name 