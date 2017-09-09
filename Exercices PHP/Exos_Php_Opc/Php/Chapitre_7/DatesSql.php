<?php // LES DATES EN SQL //

// Liste des messages postés entre le 02/04/2010 et le 18/04/2010
('SELECT pseudo, message, date FROM minichat WHERE date BETWEEN \'2010-04-02 00:00:00\' AND \'2010-04-18 00:00:00\'');

// Si on veut insérer un quelque chose a la date actuelle
('INSERT INTO minichat (pseudo, message, date) VALUES (?, ?, ?)');


// DAY(), MONTH(), YEAR() //

// Extraire des informations d'une date ? C'est facile ! Voici un exemple d'utilisation
('SELECT pseudo, message, DAY(date) AS jour FROM minichat');


// HOUR(), MINUTE(), SECOND() //

// De la même façon, avec ces fonctions il est possible d'extraire les heures, minutes et secondes d'un champ de type DATETIME ou TIME
('SELECT pseudo, message, HOUR(date) AS heure FROM minichat');


// DATE_FORMAT //

// Avec les fonctions que l'on vient de découvrir à l'instant, on pourrait extraire tous les éléments de la date, comme ceci
('SELECT pseudo, message, DAY(date) AS jour, MONTH(date) AS mois, YEAR(date) AS annee, HOUR(date) AS heure, MINUTE(date) AS minute, SECOND(date) AS seconde FROM minichat');


// Le code ci-dessus est un peu compliqué, voila comment faire plus simple avec exactement le même résultat
('SELECT pseudo, message, DATE_FORMAT(date, \'%d/%m/%Y %Hh%imin%ss\') AS date FROM minichat');


// DATE_ADD et DATE_SUB //

// Par exemple, supposons que l'on souhaite afficher une date d'expiration du message. Celle-ci correspond à « la date où a été posté le message + 15 jours ». Voici comment écrire la requête
('SELECT pseudo, message, DATE_ADD(date, INTERVAL 15 DAY) AS date_expiration FROM minichat');

// Le champdate_expirationcorrespond à « la date de l'entrée + 15 jours ». Le mot-cléINTERVALne doit pas être changé ; en revanche, vous pouvez remplacerDAYparMONTH,YEAR,HOUR,MINUTE,SECOND, etc. Par conséquent, si vous souhaitez indiquer que les messages expirent dans deux mois
('SELECT pseudo, message, DATE_ADD(date, INTERVAL 2 MONTH) AS date_expiration FROM minichat');
?>