<?php

/*

 Se dau urmatoarele colecții: Apps, Themes, Developers, Photos, Fonts din folderul collections si modelele corespunzatoare
 Orice obiect ( App, Theme, ... ) poate avea 0, una sau mai multe Photos asociate
 Un obiect de tip-ul App poate avea 0 sau mai multi Developers asociati
 Un obiect de tip-ul Theme poate avea 0 sau mai multe Fonts asociate 
 
 * Nu este esential ce relatii are fiecare obiect cu alte obiecte. 
 * Ideea e sa intelegi ca e vorba de obiecte care pot avea orice relatii cu alte obiecte

Codul din acest fisier este ineficient in stadiul actual, deoarece va face cate un query
in baza de date ca sa obtina pozele, fonturile sau developerii pentru fiecare item in parte.
 
 * getWhereNameLike('timmy') returneaza 100 de themes.
 * Asta inseamna 100 de query-uri pt poze si 100 de query-uri pt fonturi

 * getByPackageName('com.jb.gokeyboard') returneaza 500 de themes.
 * Asta inseamna 500 de query-uri pt poze si 500 de query-uri pt fonturi
 
 * getByLauncherId(6) returneaza 2000 de themes.
 * Asta inseamna 2000 de query-uri pt poze si 2000 de query-uri pt fonturi
 
 * getWhereNameLike('tme') returneaza 50 de apps.
 * Asta inseamna 50 de query-uri pt poze si 50 de query-uri pt fonturi
 
 * getByColor('red') returneaza 600 de apps.
 * Asta inseamna 600 de query-uri pt poze si 600 de query-uri pt fonturi
   
 Asta inseamna ca in total vei face 6505 query-uri in baza de date.
 Scrie codul necesar astfel incat respectand restrictiile de mai jos sa restrangi la 15 query-uri

RESTRICTIE: Nu trebuie sa modifici nicio clasa existenta
HINT: Ai voie doar sa creezi clase noi
 
 */

use collections\Apps;
use collections\Themes;

$themes = new Themes();
$apps = new Apps();

/*
 RESTRICTIE: NU POTI MODIFICA CODUL DE MAI JOS
 */

/** @var \models\Theme $theme */
foreach($themes->getWhereNameLike('timmy') as $theme) {
    var_dump($theme->getPhotos());
    var_dump($theme->getFonts());
} 

/** @var \models\Theme $theme */
foreach($themes->getByPackageName('com.jb.gokeyboard') as $theme) {
    var_dump($theme->getPhotos());
    var_dump($theme->getFonts());
} 

/** @var \models\Theme $theme */
foreach($themes->getByLauncherId(6) as $theme) {
    var_dump($theme->getPhotos());
    var_dump($theme->getFonts());
} 

/** @var \models\App $theme */
foreach($apps->getWhereNameLike('tme') as $theme) {
    var_dump($theme->getDevelopers());
    var_dump($theme->getPhotos());
} 

/** @var \models\App $theme */
foreach($apps->getByColor('red') as $theme) {
    var_dump($theme->getDevelopers());
    var_dump($theme->getPhotos());
} 
