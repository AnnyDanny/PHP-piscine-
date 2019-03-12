UPDATE ft_table Set creation_date = DATE_ADD(creation_date, INTERVAL 20 YEAR)
where id > 5;