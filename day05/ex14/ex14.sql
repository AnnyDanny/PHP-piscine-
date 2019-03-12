SELECT floor_number as 'floor', sum(nb_seats) AS 'seats' FROM cinema
group by floor_number
ORDER BY sum(nb_seats) DESC;