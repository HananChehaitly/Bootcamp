SELECT s.store_id, concat(month(p.payment_date),"-",year(p.payment_date)),sum(p.amount), AVG(p.amount) 
from payment as p, staff as s 
where p.staff_id = s.staff_id
group by YEAR(p.payment_date), Month(p.payment_date), s.store_id;