SELECT DISTINCT A.first_name, A.last_name,F.release_year from film_actor as FA, film as F, actor as A 
WHERE (F.description LIKE '%Shark%' or F.description LIKE '%Crocodile%') AND F.film_id = FA.film_id AND 
A.actor_id = FA.actor_id order by A.last_name;