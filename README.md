Portal de gestió inmobiliaria

Aquesta web està dissenyada com a intranet, és a dir, de cara als professionals del món inmobiliari,
on podràn portar un registre dels clients, els pisos, i les reserves que tenen registrades.

Per a executar l'aplicació, és necessari clonar-se el repositori al vostre ordinador, crear
una còpia de .env i executar "composer install". 
Un cop fet això, introduïr les següents linies de codi a la vostre terminal quan obriu el projecte:

1. Per fer les migracions de les taules a la base de dades:

                 php artisan migrate 

 2. Per poblar la base de dades i poder probar tota l'aplicació:

                 php artisan db:seed

3. Per últim, servir el projecte per poder testejar-lo:

                 php artisan serve


