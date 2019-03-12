SELECT title as Title, summary as Summary, prod_year from film 
JOIN genre on film.id_genre = genre.id_genre
and genre.name = 'erotic' ORDER BY prod_year DESC;