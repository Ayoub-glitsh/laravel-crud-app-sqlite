
<div align="center">
  
# 🥷 Ninja Network

<p align="center">
  <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&weight=600&size=28&duration=3000&pause=1000&color=F75C7E&center=true&vCenter=true&width=600&lines=Bienvenue+sur+Ninja+Network;Gérez+votre+réseau+de+ninjas;Laravel+12+%7C+PHP+8.4+%7C+Tailwind+CSS" alt="Typing SVG" />
</p>

<p align="center">
  <strong>Une application web moderne pour gérer un réseau de ninjas avec leurs compétences</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.53.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" />
  <img src="https://img.shields.io/badge/PHP-8.4.16-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.2.1-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind" />
  <img src="https://img.shields.io/badge/Vite-7.0.7-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite" />
</p>

</div>

---

## 📋 Table des Matières
- [Vue d'ensemble](#vue-densemble)
- [Technologies utilisées](#technologies-utilisées)
- [Installation et Configuration](#installation-et-configuration)
- [Structure du Projet](#structure-du-projet)
- [Fonctionnalités](#fonctionnalités)
- [Routes](#routes)
- [Base de Données](#base-de-données)
- [Vues et Composants](#vues-et-composants)
- [Développement](#développement)
- [Commandes Utiles](#commandes-utiles)

---

## 🎯 Vue d'ensemble

**Ninja Network** est une application web Laravel 12 permettant de gérer un réseau de ninjas. L'application offre des fonctionnalités pour visualiser, créer et gérer des profils de ninjas avec leurs compétences.

### Informations du Projet
- **Nom**: Ninja Network
- **Framework**: Laravel 12.53.0
- **PHP**: 8.4.16
- **Base de données**: SQLite
- **URL locale**: http://ninja_network.test (via Laravel Herd)

---

## 🛠 Technologies utilisées

<div align="center">

### Backend

| Technologie | Version | Description |
|------------|---------|-------------|
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" width="40" height="40" /> **Laravel** | v12.53.0 | Framework PHP moderne |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="40" height="40" /> **PHP** | 8.4.16 | Langage de programmation |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" width="40" height="40" /> **SQLite** | - | Base de données légère |
| <img src="https://raw.githubusercontent.com/pestphp/art/master/logo.svg" width="40" height="40" /> **Pest** | v4.4.1 | Framework de test PHP |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/phpunit/phpunit-original.svg" width="40" height="40" /> **PHPUnit** | v12.5.12 | Testing framework |

### Frontend

| Technologie | Version | Description |
|------------|---------|-------------|
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vitejs/vitejs-original.svg" width="40" height="40" /> **Vite** | v7.0.7 | Build tool ultra-rapide |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" width="40" height="40" /> **Tailwind CSS** | v4.2.1 | Framework CSS utility-first |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/axios/axios-plain.svg" width="40" height="40" /> **Axios** | v1.11.0 | Client HTTP |

### Outils de développement

| Outil | Version | Description |
|-------|---------|-------------|
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" width="40" height="40" /> **Laravel Pint** | v1.27.1 | Code formatter PHP |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="40" height="40" /> **Laravel Sail** | v1.53.0 | Environnement Docker |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" width="40" height="40" /> **Laravel Pail** | v1.2.6 | Visualiseur de logs |
| <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" width="40" height="40" /> **Laravel Boost** | v2.2.3 | Serveur MCP |
| <img src="https://avatars.githubusercontent.com/u/139895814?s=200&v=4" width="40" height="40" /> **Laravel Herd** | - | Serveur de développement local |

</div>

---

## 📦 Installation et Configuration

### Prérequis
- PHP 8.4+
- Composer
- Node.js et npm
- Laravel Herd (recommandé)

### Étapes d'installation

1. **Cloner le projet**
```bash
git clone <repository-url>
cd ninja_network
```

2. **Installer les dépendances PHP**
```bash
composer install
```

3. **Installer les dépendances JavaScript**
```bash
npm install
```

4. **Configuration de l'environnement**
```bash
# Copier le fichier d'environnement (si nécessaire)
copy .env.example .env

# Générer la clé d'application (déjà fait)
php artisan key:generate
```

5. **Créer la base de données**
```bash
# Créer le fichier SQLite (déjà créé)
type nul > database\database.sqlite
```

6. **Exécuter les migrations**
```bash
php artisan migrate
```

7. **Démarrer le serveur de développement**
```bash
# Démarrer Vite pour compiler les assets
npm run dev
```

8. **Accéder à l'application**
- Ouvrir le navigateur: http://ninja_network.test

---

## 📁 Structure du Projet

```
ninja_network/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── Controller.php
│   ├── Models/
│   │   └── User.php
│   └── Providers/
│       └── AppServiceProvider.php
├── bootstrap/
│   ├── app.php              # Configuration de l'application
│   └── providers.php        # Enregistrement des providers
├── config/                  # Fichiers de configuration
├── database/
│   ├── factories/
│   │   └── UserFactory.php
│   ├── migrations/          # Migrations de base de données
│   └── seeders/
│       └── DatabaseSeeder.php
├── public/                  # Point d'entrée public
├── resources/
│   ├── css/
│   │   └── app.css         # Styles Tailwind CSS
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── views/
│       ├── components/
│       │   ├── layout.blade.php
│       │   └── card.blade.php
│       ├── ninjas/
│       │   ├── index.blade.php
│       │   ├── show.blade.php
│       │   └── create.blade.php
│       └── welcome.blade.php
├── routes/
│   ├── web.php             # Routes web
│   └── console.php         # Routes console
├── storage/                # Fichiers générés
├── tests/                  # Tests Pest/PHPUnit
├── .env                    # Variables d'environnement
├── composer.json           # Dépendances PHP
├── package.json            # Dépendances JavaScript
└── vite.config.js          # Configuration Vite
```

---

## ⚡ Fonctionnalités

### Fonctionnalités actuelles

1. **Page d'accueil**
   - Page de bienvenue de l'application

2. **Liste des Ninjas**
   - Affichage de tous les ninjas disponibles
   - Mise en évidence des ninjas avec un niveau de compétence > 70
   - Cartes cliquables pour voir les détails

3. **Détails d'un Ninja**
   - Affichage des informations d'un ninja spécifique par ID

4. **Création de Ninja**
   - Page de formulaire pour créer un nouveau ninja (interface prête)

### Fonctionnalités à développer

- [ ] Formulaire fonctionnel de création de ninja
- [ ] Modèle Ninja avec base de données
- [ ] CRUD complet (Create, Read, Update, Delete)
- [ ] Système d'authentification
- [ ] Filtrage et recherche de ninjas
- [ ] Pagination
- [ ] API REST

---

## 🛣 Routes

### Routes Web ([`routes/web.php`](routes/web.php))

| Méthode | URI | Action | Description |
|---------|-----|--------|-------------|
| GET | `/` | Closure | Page d'accueil |
| GET | `/ninjas` | Closure | Liste de tous les ninjas |
| GET | `/ninjas/create` | Closure | Formulaire de création |
| GET | `/ninjas/{id}` | Closure | Détails d'un ninja |

### Données actuelles

Les ninjas sont actuellement stockés en dur dans le code :

```php
$ninjas = [
   ["name" => "Yoshi", "skill" => 75, "id" => 1],
   ["name" => "Hattori", "skill" => 85, "id" => 2],
   ["name" => "Hanzo", "skill" => 95, "id" => 3],
];
```

**Note**: Ces données devraient être migrées vers une base de données avec un modèle Eloquent.

---

## 🗄 Base de Données

### Configuration

- **Moteur**: SQLite
- **Fichier**: `database/database.sqlite`
- **Configuration**: Définie dans [`.env`](.env) avec `DB_CONNECTION=sqlite`

### Tables existantes

#### `users`
Table pour l'authentification des utilisateurs.

| Colonne | Type | Description |
|---------|------|-------------|
| id | integer | Clé primaire |
| name | varchar | Nom de l'utilisateur |
| email | varchar | Email (unique) |
| email_verified_at | datetime | Date de vérification |
| password | varchar | Mot de passe hashé |
| remember_token | varchar | Token de session |
| created_at | datetime | Date de création |
| updated_at | datetime | Date de mise à jour |

#### `sessions`
Gestion des sessions utilisateur.

#### `cache` / `cache_locks`
Système de cache de Laravel.

#### `jobs` / `job_batches` / `failed_jobs`
Système de files d'attente de Laravel.

#### `password_reset_tokens`
Réinitialisation de mots de passe.

### Migrations à créer

Pour une gestion complète des ninjas, il faudrait créer :

```bash
php artisan make:model Ninja -mfs
```

Cela créerait :
- Modèle `Ninja`
- Migration pour la table `ninjas`
- Factory pour générer des données de test
- Seeder pour peupler la base de données

**Structure suggérée pour la table `ninjas`**:
```php
Schema::create('ninjas', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->integer('skill');
    $table->text('description')->nullable();
    $table->string('specialty')->nullable();
    $table->timestamps();
});
```

---

## 🎨 Vues et Composants

### Layout Principal

**Fichier**: [`resources/views/components/layout.blade.php`](resources/views/components/layout.blade.php)

Composant de mise en page réutilisable contenant :
- En-tête avec navigation
- Menu avec liens vers "All Ninjas" et "Create New Ninjas"
- Zone de contenu principal (`$slot`)
- Intégration de Tailwind CSS via Vite

**Utilisation**:
```blade
<x-layout>
    <!-- Contenu de la page -->
</x-layout>
```

### Composant Card

**Fichier**: [`resources/views/components/card.blade.php`](resources/views/components/card.blade.php)

Composant de carte pour afficher les ninjas avec :
- Prop `highlight` pour mettre en évidence (skill > 70)
- Slot pour le contenu
- Bouton "View Details" avec lien dynamique

**Utilisation**:
```blade
<x-card href="/ninjas/1" :highlight="true">
    <h3>Nom du Ninja</h3>
</x-card>
```

### Pages Ninjas

#### Index ([`resources/views/ninjas/index.blade.php`](resources/views/ninjas/index.blade.php))
- Liste tous les ninjas
- Utilise le composant `<x-card>` pour chaque ninja
- Boucle `@foreach` sur le tableau de ninjas
- Mise en évidence conditionnelle basée sur le niveau de compétence

#### Show ([`resources/views/ninjas/show.blade.php`](resources/views/ninjas/show.blade.php))
- Affiche les détails d'un ninja par ID
- Actuellement affiche un message simple
- À développer avec plus d'informations

#### Create ([`resources/views/ninjas/create.blade.php`](resources/views/ninjas/create.blade.php))
- Page de création de ninja
- Formulaire à implémenter
- Devrait inclure validation côté client et serveur

---

## 💻 Développement

### Environnement de développement

L'application utilise **Laravel Herd** qui :
- Sert automatiquement l'application sur http://ninja_network.test
- Gère PHP et les certificats SSL
- Ne nécessite pas de serveur web séparé

### Compilation des assets

**Mode développement** (avec hot reload):
```bash
npm run dev
```
- Démarre Vite sur http://localhost:5173
- Recompile automatiquement à chaque modification
- Hot Module Replacement (HMR) activé

**Mode production**:
```bash
npm run build
```
- Compile et minifie les assets
- Optimise pour la production
- Génère les fichiers dans `public/build/`

### Styles CSS

**Fichier**: [`resources/css/app.css`](resources/css/app.css)

L'application utilise **Tailwind CSS 4** avec :
- Configuration via `@tailwindcss/vite`
- Classes utilitaires pour le styling
- Personnalisation possible dans le fichier CSS

### Code Formatting

**Laravel Pint** est configuré pour formater le code PHP :

```bash
# Formater tous les fichiers
vendor/bin/pint

# Formater uniquement les fichiers modifiés
vendor/bin/pint --dirty

# Format pour agent (sortie structurée)
vendor/bin/pint --dirty --format agent
```

---

## 🧪 Tests

### Framework de test

L'application utilise **Pest 4** (au-dessus de PHPUnit 12).

### Exécuter les tests

```bash
# Tous les tests
php artisan test

# Avec sortie compacte
php artisan test --compact

# Tests spécifiques
php artisan test --filter=testName

# Avec couverture de code
php artisan test --coverage
```

### Structure des tests

```
tests/
├── Feature/           # Tests d'intégration
│   └── ExampleTest.php
├── Unit/             # Tests unitaires
│   └── ExampleTest.php
├── Pest.php          # Configuration Pest
└── TestCase.php      # Classe de base
```

### Créer des tests

```bash
# Test de fonctionnalité
php artisan make:test NinjaTest --pest

# Test unitaire
php artisan make:test NinjaTest --pest --unit
```

---

## 📝 Commandes Utiles

### Artisan

```bash
# Lister toutes les commandes
php artisan list

# Lister les routes
php artisan route:list

# Vider le cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Créer un contrôleur
php artisan make:controller NinjaController

# Créer un modèle avec migration, factory et seeder
php artisan make:model Ninja -mfs

# Créer une migration
php artisan make:migration create_ninjas_table

# Exécuter les migrations
php artisan migrate

# Rollback des migrations
php artisan migrate:rollback

# Rafraîchir la base de données
php artisan migrate:fresh

# Peupler la base de données
php artisan db:seed

# Tinker (REPL PHP)
php artisan tinker
```

### Composer

```bash
# Installer les dépendances
composer install

# Mettre à jour les dépendances
composer update

# Ajouter un package
composer require vendor/package

# Autoload
composer dump-autoload
```

### NPM

```bash
# Installer les dépendances
npm install

# Développement
npm run dev

# Production
npm run build

# Ajouter un package
npm install package-name
```

### Laravel Boost (MCP)

```bash
# Démarrer le serveur MCP
php artisan boost:mcp
```

### Logs

```bash
# Voir les logs en temps réel avec Pail
php artisan pail

# Voir les dernières entrées de log
php artisan pail --filter=error
```

---

## 🔧 Configuration

### Variables d'environnement importantes

Fichier [`.env`](.env):

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:3aHbri+XhKErK+jhOxDYFEeopIba9OmGClTVrekq+Gw=
APP_DEBUG=true
APP_URL=http://ninja_network.test

DB_CONNECTION=sqlite

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database

MAIL_MAILER=log
```

### Configuration Vite

**Fichier**: [`vite.config.js`](vite.config.js)

```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
```

---

## 🚀 Prochaines Étapes

### Améliorations suggérées

1. **Créer le modèle Ninja**
   ```bash
   php artisan make:model Ninja -mfs
   ```

2. **Implémenter le CRUD complet**
   - Créer un contrôleur: `php artisan make:controller NinjaController --resource`
   - Créer des Form Requests pour la validation
   - Implémenter les méthodes du contrôleur

3. **Ajouter l'authentification**
   ```bash
   composer require laravel/breeze --dev
   php artisan breeze:install
   ```

4. **Créer des tests**
   - Tests unitaires pour le modèle Ninja
   - Tests de fonctionnalité pour les routes
   - Tests de composants Blade

5. **Améliorer l'interface**
   - Ajouter plus de styles Tailwind
   - Créer des composants réutilisables
   - Ajouter des animations

6. **Optimisation**
   - Mettre en cache les routes: `php artisan route:cache`
   - Mettre en cache la configuration: `php artisan config:cache`
   - Optimiser Composer: `composer install --optimize-autoloader --no-dev`

---

## 📚 Ressources

### Documentation officielle
- [Laravel 12](https://laravel.com/docs/12.x)
- [Tailwind CSS 4](https://tailwindcss.com/docs)
- [Pest Testing](https://pestphp.com/docs)
- [Vite](https://vite.dev/)

### Outils Laravel
- [Laravel Herd](https://herd.laravel.com/)
- [Laravel Pint](https://laravel.com/docs/12.x/pint)
- [Laravel Sail](https://laravel.com/docs/12.x/sail)

---

## 👥 Support

Pour toute question ou problème :
1. Consulter la documentation Laravel
2. Vérifier les logs: `storage/logs/laravel.log`
3. Utiliser `php artisan pail` pour les logs en temps réel
4. Utiliser `php artisan tinker` pour déboguer

---

## 📄 Licence

Ce projet est un projet d'apprentissage Laravel.

---

**Dernière mise à jour**: 28 Mars 2026
**Version Laravel**: 12.53.0
**Version PHP**: 8.4.16
