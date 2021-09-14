SELECT c.first_name, c.last_name , COUNT(r.customer_id) 
from rental as r, customer as c 
where year(r.rental_date)=2005 and  c.customer_id = r.customer_id
GROUP BY r.customer_id
ORDER BY COUNT(r.customer_id) DESC
LIMIT 3;




/* The following is just because i spent several hours extracting the top 3 of each year. Then when i was done, someone told me you said to just pick a year.. 

WITH cte AS
(SELECT ROW_NUMBER() OVER (
      PARTITION BY year(r.rental_date)
      ORDER BY COUNT(r.customer_id) DESC) 
      row_num, year(r.rental_date), c.first_name, c.last_name , COUNT(r.customer_id) 
from rental as r, customer as c 
where c.customer_id = r.customer_id
GROUP BY year(r.rental_date), r.customer_id)

SELECT *
FROM cte
WHERE row_num <=3
order by row_num;



*/