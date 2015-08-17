backend
=======

A Symfony project created on July 21, 2015, 8:35 pm.

Some useful importing scripts:
php app/console doctrine:mapping:import --force AppBundle yml
php app/console doctrine:mapping:convert yml ./src
php app/console doctrine:generate:entities ./src

Symfony commands:
php app/console cache:clear --env=dev


This one DOESN'T WORK:
php app/console doctrine:mapping:import --force AppBundle xml --filter="profiles"
it doesn't create anything even if there is [profiles] in db.



