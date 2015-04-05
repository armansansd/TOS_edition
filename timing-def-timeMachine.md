###Time Machine

>Time Machine est un logiciel propriétaire de sauvegarde incrémentale automatique et de restauration d'Apple, intégré à la version 10.5 (Leopard) de Mac OS X (sortie le 26 octobre 2007), nécessitant un disque dur externe.  
Son interface graphique permet de naviguer dans le temps, les différents états étant représentés comme des fenêtres successives empilées dans l'espace les unes derrière les autres.


>"Time Machine is a backup utility, not an archival utility, it is not intended as offline storage. Time Machine captures the most recent state of your data on your disk. As snapshots age, they are prioritized progressively lower compared to your more recent ones."

Une sauvegarde peut être effectuée toute les heures jusque tout les temps, et un système de nettoyage des anciennes versions peut être mit en place.

le système enregistre lorsque chaque répertoire est modifié sur le disque dur. Cela signifie qu'au lieu d'examiner la date de modification de chaque fichier lorsqu'il est activé, Time Machine ne doit scanner les répertoires qui ont changé pour les fichiers à copier (le reste étant lié dur). Ceci diffère de l'approche adoptée par les utilitaires de sauvegarde similaires rsync et flyback, qui examinent les dates de modification de tous les fichiers lors de la sauvegarde.

######de OsXfacile

Comme il s'agit d'un navigateur, vous pouvez naviguer dans les fenêtre (comme vous le faites dans le Finder etc...) pour changer de fenêtre le cas échéant. Vous pouvez donc ouvrir des dossiers, cliquer sur des éléments de la barre latérale et vous servir du champ de recherche situé dans le coin supérieur droit de la fenêtre etc...
Utilisez les 2 flèches ou la chronologie sur le côté droit de votre écran pour parcourir les copies de sauvegarde que "Time Machine" a créées. Si vous avez besoin de plus d'informations sur un élément, double-cliquez pour obtenir un aperçu.
 
Une fois trouvé l'élément à restaurer, sélectionnez-le puis cliquez sur "Restaurer".
Si un élément que vous restaurez possède le même nom qu'un autre élément présent sur votre ordinateur, vous êtes alors invité à préciser si vous voulez conserver l'élément déjà présent, celui issu de la restauration ou les deux.
L'élément restauré reprend alors son emplacement d'origine. Par exemple, s'il se trouvait dans le dossier "Documents", c'est là qu'il est alors replacé. Il se peut que "Time Machine" vous demande si vous souhaitez recréer des dossiers afin de pouvoir replacer un élément restauré à son emplacement d'origine.
 
"Time Machine" restaure tous les fichiers que vous voulez, des dossiers complets, des photothèques "iPhoto" et même des fiches de "Contacts". Si besoin, vous pouvez même utiliser "Time Machine" pour restaurer l'intégralité de votre ordinateur. Tout dépend bien sûr de ce que vous avez prélablement sauvegardé.



### et timing dans tout ça ? 
Timing n'est pas une solution de sauvegarde mais un gestionnaire de fichiers. Il n'effectue pas une sauvegarde progressive de l'état général du système mais facilite la navigation au travers d'un ensemble de documents. Le temps devient un outil central de repérage et de marquage des fichiers pour l'utilisateur. Lorsqu'un logiciel comme Time Machine propose l'ensemble des documents présent à un instant *t*, timing ne présente que les fichiers manipulés/créés à cet instant, ces derniers ne seront pas visible à l'intant *t+1* ou *t-1*.  
Néanmoins pour des raisons d'archivage, le suivit temporel d'un contenu peut-être activé ce qui produira un versionnage du contenu choisi. 

Enfin les programmes de "sauvegarde incrémentale" préserve l'architecture en arborescence des contenus, il est important d'insister qu'au travers de timing aucune structure de ce type n'est présente. J'ai souhaité anhiler toute reference à des système de classement pour proposer un déplacement strictement temporel au sein d'un "grand contenant".

