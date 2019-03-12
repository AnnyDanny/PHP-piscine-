INSERT into ft_table (login, creation_date, `group`) 
SELECT last_name, birthdate, 'other' from user_card
where CHAR_LENGTH(last_name) <= 8
AND last_name like '%a%'
order by last_name asc limit 10;