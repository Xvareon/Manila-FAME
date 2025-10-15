# Manila FAME Buyer Campaign Landing Page
A multi-step user registration system for the Manila FAME event, developed as a single-page application using Laravel for the backend API and Vue.js for the frontend. The application guides participants through three stages to collect comprehensive personal and company details, featuring robust validation and secure file uploads.

# Project Requirements
- Laragon (https://github.com/leokhoa/laragon/releases/download/8.3.0/laragon-wamp.exe)
- PHP 8.4 (Open Laragon → Click Menu → Tools → Quick add → PHP 8.4)
- Composer (https://getcomposer.org/Composer-Setup.exe)
- Node.js (https://nodejs.org/dist/v22.20.0/node-v22.20.0-x64.msi)
- Laravel 12
- Vue 3, VITE
- Bootstrap 5
- MySQL

# Project Setup
## Setup composer to work with Laragon:
- Install composer via installer from the link in Project Requirements.
- Setup the PHP command line via laragon (this is a step required in the composer installer) and add it to the path by navigating to the laragon folder and selecting php.ini.

## DB Setup
- Create a connection (Open Laragon → Click Database)
- Rename the session to what you want and open it.
- After opening, right click the session and create a new database.
- The database name should be the same with what you set up in your .env later (DB_DATABASE=your_db_name)

## NPM Setup
- Download the msi installer to automatically set up the PATH of node for npm installations

## Clone the Repository
```
# Go to C:\laragon\www (or where you have installed laragon). Open a terminal there and clone the repository:
git clone https://github.com/Xvareon/Manila-FAME.git
```

## Laravel setup
```
# Go to the project directory itself
cd manila-fame or cd Manila-FAME

# Install dependencies
composer install

# Copy environment config and setup your DB credentials
cp .env.example .env

# Then generate the app key
php artisan key:generate

# Run database migrations
php artisan migrate

# Create storage symlink
php artisan storage:link

# Start Laravel server
php artisan serve
```

## Vue Setup
```
# Install dependencies
npm install

# Install vue
npm install vue@3 vue-router@4 pinia @vitejs/plugin-vue@latest --legacy-peer-deps

# Install bootstrap
npm install bootstrap@5.3.3

# Install bootstrap icons
npm install bootstrap-icons

# Start dev server
npm run dev
```

What the website should look like:
<img width="1911" height="912" alt="image" src="https://github.com/user-attachments/assets/d5608120-3cd6-4497-b485-e33c6ea6a5e0" />
<img width="1919" height="904" alt="image" src="https://github.com/user-attachments/assets/19f37426-b44b-449b-bf46-f34aa57b4dc8" />
<img width="1919" height="883" alt="image" src="https://github.com/user-attachments/assets/626c8971-9ba7-4188-be23-1e31ea4076fa" />
<img width="1919" height="622" alt="image" src="https://github.com/user-attachments/assets/d2f84703-4d19-41a3-b3d7-7e6c7eabac93" />
<img width="1919" height="910" alt="image" src="https://github.com/user-attachments/assets/a025b46b-bb8e-4059-868a-d061c9792f3b" />
<img width="1919" height="904" alt="image" src="https://github.com/user-attachments/assets/a5af0374-2f27-44da-ba4d-0597b2963fb2" />
<img width="1919" height="907" alt="image" src="https://github.com/user-attachments/assets/60dd4f71-1f5e-4d7b-a613-6c280ef4a82a" />
<img width="1919" height="907" alt="image" src="https://github.com/user-attachments/assets/bdd16e56-9c30-4041-a053-12d5ad880890" />




