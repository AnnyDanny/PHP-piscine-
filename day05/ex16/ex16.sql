SELECT COUNT(id_film) movies FROM member_history
WHERE date(date) >= '2006-10-30' and date(date) <= '2007-07-27'
OR (MONTH(date) = 12 AND DAY(date) = 24);