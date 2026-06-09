# SocialPro

SocialPro is an internal social and professional network built for **ESPRIT** (École Supérieure Privée d'Ingénierie et de Technologies). It gives employees a single place to collaborate, share updates, manage projects, and stay connected across departments.

Originally created in November 2016, the application is built on **Symfony 3.1** with **Doctrine ORM** and **FOSUserBundle** for authentication.

## ✨ Features

- **News feed** — Publish and browse company updates (`Fil d'actualité`)
- **Employee management** — Add, edit, and remove employees; handle registration requests
- **Departments** — Organize teams and manage employee assignments
- **Projects & tasks** — Create projects, assign tasks, and manage teams
- **Meetings** — Schedule and manage meetings and meeting rooms
- **Job offers** — Post, search, and manage internal job listings
- **User profiles** — Update contact info, availability status, certifications, and skills
- **Calendar** — View scheduled events and meetings
- **Statistics** — Dashboard with charts and activity metrics
- **Activity history** — Track user actions across the platform
- **Forum** — Community discussions powered by [DForumBundle](https://github.com/Discutea/forum-bundle)

## 🛠 Tech Stack

| Layer | Technology |
|-------|------------|
| Framework | Symfony 3.1 |
| Language | PHP >= 5.5.9 |
| ORM | Doctrine 2.5 |
| Authentication | FOSUserBundle |
| Templating | Twig |
| Assets | Assetic |
| Forum | Discutea DForumBundle |
| Pagination | KnpPaginatorBundle |

## 📋 Requirements

- PHP >= 5.5.9 with extensions: `pdo`, `mbstring`, `xml`, `intl`
- Composer
- MySQL (or another database supported by Doctrine)
- A web server (Apache, Nginx) or PHP built-in server for local development

## 🚀 Installation

### 📥 1. Clone the repository

```bash
git clone <repository-url> SocialPro
cd SocialPro
```

### 📦 2. Install dependencies

```bash
php composer.phar install
# or, if Composer is installed globally:
composer install
```

### 🗄️ 3. Configure the database

Copy the parameters template and edit it with your database credentials:

```bash
cp app/config/parameters.yml.dist app/config/parameters.yml
```

Update `app/config/parameters.yml`:

```yaml
parameters:
    database_host: 127.0.0.1
    database_port: ~
    database_name: pidevsocialpro
    database_user: root
    database_password: your_password
    secret: your_secret_key
```

### 🏗️ 4. Create the database schema

```bash
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
```

### 🎨 5. Install assets

```bash
php bin/console assets:install --symlink web
```

## ▶️ Running the Application

### 💻 Development server

From the project root:

```bash
php bin/console server:run
# or with the PHP built-in server:
php -S localhost:8000 -t web web/app_dev.php
```

Then open [http://localhost:8000](http://localhost:8000) in your browser.

> **Note:** The development front controller (`web/app_dev.php`) only accepts requests from `127.0.0.1` and `::1`.

### 🌐 Production

Point your web server document root to the `web/` directory and use `web/app.php` as the front controller.

## 🔐 User Roles

The application defines the following roles:

| Role | Description |
|------|-------------|
| `ROLE_EMPLOYE` | Standard employee |
| `ROLE_CHEF_DEP` | Department head |
| `ROLE_CHEF_PROJET` | Project manager |
| `ROLE_ADMIN` | Administrator (includes moderator privileges) |

After login, users are redirected to `/socialpro/Filactualite` (the news feed).

## 📁 Project Structure

```
SocialPro/
├── app/                  # Application configuration, kernel, and Twig overrides
│   ├── config/           # YAML configuration (routing, security, parameters)
│   └── Resources/        # Global Twig templates (FOSUser, DForum)
├── bin/                  # Symfony console
├── src/
│   ├── AppBundle/        # Default Symfony bundle
│   └── Esprit/
│       └── socialproBundle/   # Main application bundle
│           ├── Controller/
│           ├── Entity/
│           ├── Form/
│           └── Resources/
├── tests/                # PHPUnit tests
├── var/                  # Cache and logs
├── vendor/               # Composer dependencies
└── web/                  # Public document root
```

## 🗺 Main Routes

All application routes are prefixed with `/socialpro`:

| Path | Feature |
|------|---------|
| `/socialpro/Filactualite` | News feed |
| `/socialpro/Employes` | Employee list |
| `/socialpro/Departements` | Departments |
| `/socialpro/Projets` | Projects |
| `/socialpro/Reunions` | Meetings |
| `/socialpro/Offres` | Job offers |
| `/socialpro/profil` | User profile |
| `/socialpro/Statistiques` | Statistics dashboard |
| `/socialpro/Calendrier` | Calendar |
| `/socialpro/Historique` | Activity history |

Forum routes are served at the site root via DForumBundle.

## 🧪 Testing

Run the test suite with PHPUnit:

```bash
php bin/phpunit
```

## 📝 License

This project is proprietary software. All rights reserved.
