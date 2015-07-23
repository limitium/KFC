backend
=======

A Symfony project created on July 21, 2015, 8:35 pm.

Some useful importing scripts:
php app/console doctrine:mapping:import --force AppBundle yml
php app/console doctrine:mapping:convert annotation ./src

This one DOESN'T WORK:
php app/console doctrine:mapping:import --force AppBundle xml --filter="profiles"
it doesn't create anything even if there is [profiles] in db.



