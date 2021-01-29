<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$lorem = "Lorem ipsum dolor sit amet. Sed cumque mollitia aut blanditiis voluptatem ad possimus totam et dicta fugiat et blanditiis eaque.";
$file = fopen('monFichier.txt', 'a+b');
fwrite($file, $lorem."\n");
fclose($file);

/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$table = ["bonjour", "comment", "ca", "va", "?", "Moi", "je", "vais", "bien"];
$file = fopen('monFichier.txt', 'r+b');
fwrite($file, $table."\n");
fclose($file);


/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
echo nl2br(file_get_contents("monFichier.txt"));


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
if (file_exists("toto.txt")) {
    echo "Le fichier toto.txt existe !";
}
else {
    echo "Le fichier toto.txt n'existe pas !";
}

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.
