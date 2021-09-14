/* Note: My query will find the film categories in which there are betweent 55 and 65 films. But in case there's no such category,
it will not return the highest available count as desired in the question*/
SELECT C.name, count(FC.film_id) FROM film_category as FC, category as C 
WHERE FC.category_id=C.category_id 
group by FC.category_id
HAVING (count(FC.film_id) between 55 and 65)
Order by count(FC.film_id) ;



/*ORRR*/
SELECT C.name, count(FC.film_id) FROM film_category as FC, category as C 
WHERE FC.category_id=C.category_id 
group by FC.category_id
HAVING (count(FC.film_id) between 55 and 65,count(FC.film_id), (Select MAX(y.num) from (SELECT count(film_id) AS num FROM film_category group by category_id) y) )
Order by count(FC.film_id) ;
