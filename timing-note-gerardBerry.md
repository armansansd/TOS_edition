##l'informatique du temps et des événements
cours au collège de france 2012-2013  

Parler du temps de manière formelle : 

temps et événement sont indispensable pour parler d'informatique 
l'informatique classic ne parle pas de temps et d'événement  

orchestrer un service web est très difficile,   
codage temporel de l'information en neuroscience, à peine découvert, temps événement et causalité.  

Au 21s tout devient plus compliqué car nous avons affaire à des systèmes distrinués  
avant c'était des système s discret, situé et centralisé. Effectuant une seul et même fonction. Système asynchrone. 
PLus d'interface spécifique, orientation vers des interface web pour  être géré via téléphone par exemple.  
---> compléxité des nouveaux circuits,  composé de plusieur Processeur, possédant chacun des horloges différentes et des langages particuliers. Gestion de plusieur protocol.

####Interprète et partion 

la partition en musique est un langage de programmation pour humain, il parle du temps, c'est un langage ou le temps est logique et non physique, les notes ne sont pas faites pour être jouées à la vitesse marquée. jouer avant après le temps.  
*Antescofo* possède un algorithme permettant à l'ordinateur de suivre un musicien. Quel langage pour informatiser une partition ?  

Debugging c'est comprendre ce qu'il s'est passé avant d'avant un futur. Rechercher des causalités et des corrélation.  

Google utilise des horloge atomique pour synchronisé ses serveur dans le monde.
>le rôle de l'historien est de prévoir le passé
Henry Laurens

####Bug et mauvais design lié au temps 
Bug du Zune : en 2008 (année bissextile) 
` while (days>365)
{
if (IsLeapYear(year)){
if (days < 366){
...

BUG boucle infinie car "<=" au lieu de ">̀"`

Bug sony PS3 28 fevrier 
Bug iphone  2010/2011
Darhan  missile  Patriot 25 février 1991 
Débordement de buffer  
	plantage un jour par semaine (à cause de codage des jour de la semaine  sur 8bit au lieu de 12b) 

Notre perception du temps est très faible.

Les natures du temps : 
temps physique/ temps logique
temps continu / temps discret 
temps plat / temps hiérarchique
temps absolu / temps multiforme 

Nous passons notre temps à ralentir les horloges, car plus une horloge est rapide plus elle consomme, en espaçant les temps d'horloge nous baissons la consomation. 

**concept temporel :** 
* instant (l'instant a une épaisseur "l'espace d'un instant), intervalles
* passé, présent, futur
* évenement sur instant ou intervalles // qqch qui se passe 
* précendence, causilité, corrélation
* épaisseur de l'instant 
* épaisseur de l'action

**Le partage du temps**
le rapport temps espace, le codage de l'information est temporel et spatial, en information on utilise un codage spatial (?) tandis que le système nerveux utilise surement un codage temporel. On peut échanger le temps et l'espace (cf 2em partie), gagner du temps en perdant de l'espace ou l'inverse. 

Comment parler du temps ? 
les nombres 2-adiques  
les logiques temporelles, toujour, un jour, jusqu'à etc.   
les langages de spécification/programmation temporels  


Résumé
====

– **l’épaisseur de l’instant**, qui permet de voir des suites d’actions soit comme se
déroulant en un temps fin dans un modèle d’exécution, soit comme atomiques et de
durée conceptuellement nulle dans un modèle synchrone plus abstrait ;
– **la distinction entre modèles en temps continu**, standards en physique et en
automatique, et en temps discret, plus naturels en informatique ;
– le temps multiforme, où l’on considère que la répétition de tout événement
produit un quasi-temps analogue au temps physique : il n’y a pas de distinction à
faire entre marcher dix minutes, dix kilomètres, ou dix mille pas, et il faut donc en
parler de la même façon ;
– **le temps hiérarchique**, dans lequel les activités se décrivent à des degrés de
temporalité emboîtés. Par exemple, en musique, on parle de la vibration interne de
chaque note, de son ornementation, de l’organisation des notes en thèmes, de celle
des retours et associations de thème, de celle des mouvements, etc. ;
– **les logiques et langages de programmation temporels**, qui permettent de parler
des divers modèles de temps correspondants, et en particulier leslangages synchrones
– beaux produits de l’école française qui a toujours été en pointe dans ce sujet ;
– **l’échange espace-temps**, crucial en algorithmique et en conception de circuits
électroniques. Il est impossible de concevoir des circuits performants sans
comprendre à fond ce sujet aux techniques particulièrement élégantes ;
– **la sémantique mathématique** des modèles et langages temporels, indispensable
pour les preuves de correction des raisonnements et des programmes.


####Partie 2

note : c'est le télégraphe et le chemin de fer qui permis aux villes d'avoir la même heure et au gens d'arriver à l'heure.  

le temps mesure la distance, par le déplacement des photons et bientôt la masse par la seconde. 
