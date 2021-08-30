SELECT country FROM country,customer as c, address as a, city
WHERE c.address_id= a.address_id
and a.city_id = city.city_id 
and city.country_id = country.country_id
GROUP BY country
ORDER by count(c.customer_id) DESC
LIMIT 3;
