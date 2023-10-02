SELECT ord.id              AS 'ID', 
       customer.name       AS 'KLIENT',
       ord.date_ordered    AS 'DATA',
       emp.last_name       AS 'SPRZEDAWCA',
       ord.total           AS 'WARTOŚĆ'
  FROM ord, customer, emp
 WHERE customer_id = ord.customer_id 
   AND emp.id      = ord.sales_rep_id
   AND (ord.total < 100 OR ord.total >= 1000);

SELECT ord.id              AS 'ID', 
       customer.name       AS 'KLIENT',
       ord.date_ordered    AS 'DATA',
       emp.last_name       AS 'SPRZEDAWCA',
       ord.total           AS 'WARTOŚĆ'
  FROM ord INNER JOIN customer   ON customer.id = ord.customer_id
           INNER JOIN emp        ON emp.id      = ord.sales_rep_id
   WHERE (ord.total < 100 OR ord.total >= 1000);


SELECT ord.id              AS 'ID', 
       customer.name       AS 'KLIENT',
       ord.date_ordered    AS 'DATA',
       emp.last_name       AS 'SPRZEDAWCA',
       ord.total           AS 'WARTOŚĆ',
       item.item_id        AS 'LP',
       product.name        AS 'PRODUKT',
       item.quantity       AS 'ILOŚĆ',
       item.price          AS 'CENA'
  FROM ord INNER JOIN customer   ON customer.id = ord.customer_id
           INNER JOIN emp        ON emp.id      = ord.sales_rep_id
           INNER JOIN item       ON item.ord_id = ord.id
           INNER JOIN product    ON product.id  = item.product_id
 WHERE (ord.total < 100 OR ord.total >= 1000);



SELECT ord.id,            
       customer.name,      
       DATE_FORMAT(ord.date_ordered,'%Y-%m-%d, %W')  AS 'data',   
       emp.last_name,      
       ord.total ,         
       item.item_id ,      
       product.name             AS 'prod',       
       item.quantity,      
       item.price          
  FROM ord INNER JOIN customer   ON customer.id = ord.customer_id
           INNER JOIN emp        ON emp.id      = ord.sales_rep_id
           INNER JOIN item       ON item.ord_id = ord.id
           INNER JOIN product    ON product.id  = item.product_id
 WHERE (ord.total < 100 OR ord.total >= 1000);


SELECT osoby.id,
       osoby.nazwisko,
       osoby.imie,
       adresy.ulica,
       adresy.miasto,
       adresy.kod_pocz
  FROM osoby LEFT OUTER JOIN adresy ON osoby.id = adresy.osoby_id;

SELECT ord.id,            
       customer.name,      
       DATE_FORMAT(ord.date_ordered,'%Y-%m-%d, %W')  AS 'data',   
       CONCAT(emp.last_name, ' ', emp.first_name)    AS 'sprzed',
       ord.total ,         
       IFNULL(item.item_id, 'B.D.')                  AS 'id',
       IFNULL(product.name, 'Brak danych')           AS 'prod',       
       IFNULL(item.quantity, '-----')                AS 'ilosc',      
       IFNULL(item.price, '-----')                   AS 'cena'
  FROM ord INNER JOIN customer        ON customer.id = ord.customer_id
           INNER JOIN emp             ON emp.id      = ord.sales_rep_id
           LEFT OUTER JOIN item       ON item.ord_id = ord.id
           LEFT OUTER JOIN product    ON product.id  = item.product_id;



ZROBIĆ WIELE DO WIELU  !!!!


SELECT osoby.id,
       osoby.nazwisko,
       osoby.imie,
       adresy.ulica,
       adresy.miasto,
       adresy.kod_pocz
  FROM osoby LEFT OUTER JOIN adresy ON osoby.id = adresy.osoby_id;
  SELECT osoby.id,
       osoby.nazwisko,
       osoby.imie,
       adresy.ulica,
       adresy.miasto,
       adresy.kod_pocz
  FROM osoby RIGHT OUTER JOIN adresy ON osoby.id = adresy.osoby_id;



SELECT prac.id           AS 'ID',
       prac.last_name    AS 'Nazwisko',
       prac.first_name   AS 'Imię',
       prac.title        AS 'Stanowisko',
       prac.manager_id   AS 'Szef',
       szef.last_name    AS 'N.SZEFA',
       szef.title        AS 'St.Szefa'
  FROM emp AS szef, emp AS prac
 WHERE szef.id = prac.manager_id;

SELECT prac.id           AS 'ID',
       prac.last_name    AS 'Nazwisko',
       prac.first_name   AS 'Imię',
       prac.title        AS 'Stanowisko',
       prac.manager_id   AS 'Szef',
       szef.last_name    AS 'N.SZEFA',
       szef.title        AS 'St.Szefa'
  FROM emp AS szef INNER JOIN emp AS prac ON szef.id = prac.manager_id;


SELECT prac.id           AS 'ID',
       prac.last_name    AS 'Nazwisko',
       prac.first_name   AS 'Imię',
       prac.title        AS 'Stanowisko',
       prac.manager_id   AS 'Szef',
       szef.last_name    AS 'N.SZEFA',
       szef.title        AS 'St.Szefa'
  FROM emp AS prac LEFT OUTER JOIN emp AS szef ON szef.id = prac.manager_id;


SELECT ord.id,            
       customer.name,      
       DATE_FORMAT(ord.date_ordered,'%Y-%m-%d, %W')  AS 'data',   
       CONCAT(prac.last_name, ' ', prac.first_name)    AS 'sprzed',
       CONCAT(szef.last_name, ' ', szef.first_name)  AS 'szef',
       ord.total,         
       IFNULL(item.item_id, 'B.D.')                  AS 'id',
       IFNULL(product.name, 'Brak danych')           AS 'prod',       
       IFNULL(item.quantity, '-----')                AS 'ilosc',      
       IFNULL(item.price, '-----')                   AS 'cena'
  FROM ord INNER JOIN customer        ON customer.id = ord.customer_id
           INNER JOIN emp AS prac     ON prac.id     = ord.sales_rep_id
           INNER JOIN emp AS szef     ON szef.id     = prac.manager_id
           LEFT OUTER JOIN item       ON item.ord_id = ord.id
           LEFT OUTER JOIN product    ON product.id  = item.product_id;



SELECT emp.id,
       emp.last_name,
       emp.first_name,
       emp.title,
       emp.salary,
       job.name,
       job.salary_min,
       job.salary_max
  FROM emp, job
 WHERE emp.title = job.name 
   AND(emp.salary >= job.salary_min AND emp.salary <= job.salary_max) 



SELECT emp.id,
       emp.last_name,
       emp.first_name,
       emp.title,
       emp.salary,
       job.name,
       job.salary_min,
       job.salary_max
  FROM emp, job
 WHERE emp.title = job.name 
   AND (emp.salary < job.salary_min OR emp.salary > job.salary_max) 


SELECT emp.id,
       emp.last_name,
       emp.first_name,
       emp.title,
       emp.salary,
       job.name,
       job.salary_min,
       job.salary_max
  FROM emp, job
 WHERE emp.salary >= job.salary_min AND emp.salary <= job.salary_max 







