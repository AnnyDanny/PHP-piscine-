SELECT UPPER(user_card.last_name) AS NAME, first_name, price
FROM user_card, member, subscription
where member.id_sub=subscription.id_sub and user_card.id_user=member.id_user_card and subscription.price > 42
ORDER BY user_card.last_name, user_card.first_name ASC;