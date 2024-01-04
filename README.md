# Design Pattern

Date de création: 4 janvier 2024 10:43
Author: Matteo_Rossi

_Projet évalué sur le Design Pattern_

## Tables des Matières

- [Réponses aux Questions](#reponses-aux-questions)
- [Design Pattern Singleton](#design-pattern-singleton)
  - [Contexte](#contexte)
  - [Avantages et Inconvénients](#avantages-et-inconvénients)
  - [Diagramme de classes UML du pattern Singleton](#diagramme-de-classes-uml-du-pattern-singleton)
  - [Lancer le Projet](#lancer-le-projet)

## Réponses aux Questions

### 1 - Quel(s) avantage(s) procure le fait de programmer vers une interface et non vers une implémentation ?

Programmer vers une interface permet d’ajouter de nouvelles fonctionnalités sans avoir à modifier le code existant. Elle favorise la réutilisation du code.

Une interface donne également plus de flexibilité en permettant de se concentrer sur le comportement attendu plutôt que sur les détails d’implémentation

### 2 - Pourquoi, de manière générale, vaut-il mieux préférer la composition à l’héritage ?

La composition réduit le couplage entre les classes car les relations sont établies à travers des interfaces bien définies plutôt que par des hiérarchies d'héritage. Cela donne un code moins sensible aux changements dans la structure de classe.

A la différence de la hiérarchie la composition permet de réutiliser des composants dans différentes classes, ce qui favorise la réutilisabilité du code.

De plus, pour utiliser l’héritage il faut absolument connaître les détails de l’objet, alors qu’avec une interface ce n’est pas le cas.

### 3 - En programmation orienté objet, qu’est ce qu’une interface ?

Une interface en Programmation Orienté Objet définit plusieurs méthodes qu’une classe doit implémenter. Une interface définit uniquement le concept des méthodes afin que les classes l’implémentant puissent en écrire leur code.

## Design Pattern Singleton

### _Contexte_

Imaginons une application web gérant les les sessions utilisateur pour suivre les paniers d'achats, les préférences des utilisateurs, et d'autres informations liées à la navigation sur le site. Chaque fois qu'un utilisateur se connecte ou navigue sur le site, des informations de session doivent être récupérées ou mises à jour.

Le problème qu’il faut éviter est de créer et/ou détruire une instance de gestion de session à chaque requête HTTP.

### _Avantages et Inconvénients_

L’utilisation du pattern Singleton nous permettrait :

- d’économiser des ressources en assurant qu’une seule instance de gestion de session ne soit utilisé puis réutilisée.
- d’offrir un point d’accès global à l’instance de la classe de gestion de session ce qui facilite son utilisation.

Néanmoins l’inconvénient de l’utilisation de ce pattern est :

- la difficulté à effectuer des tests unitaires sur le projet.

### _Diagramme de classes UML du pattern Singleton_

| SessionManager |
| -------------- |

| - instance

- userData |
  | +getInstance()
  +getUserData()
  +setUserData() |

| UserManager | ProductManager |
| ----------- | -------------- |

| - instance

- userList | - instance
- productList |
  | +getInstance()
  +getUserList()
  +addUser() | +getInstance()
  +getProductList()
  +addProduct() |

### _Lancer le Projet_

Pour lancer le projet vous devez posséder une version de _WampServer_, _XAMPP_ ou tout autre outil permettant de mettre en place un serveur web local.

Pour cette démo de comment Lancer le Projet, nous utiliserons **[WampServer](https://www.wampserver.com).**

1 - Cloner le dépôt github dans votre répertoire `/wamp64/www/`

```jsx
git clone https://github.com/TheVisitor-coding/design-pattern-singleton.git
```

2 - Lancer votre serveur Wamp puis se rendre à l’adresse `localhost/design-pattern-singleton`
