# APIStore - URL Shortener & Management Platform

## Project Overview
APIStore is a powerful, user-friendly URL shortening and management application built with Laravel. Transform long, complex URLs into concise, shareable links with ease.

## Features
- URL Shortening
- User Authentication
- Link Management
- Simple and Intuitive Interface

## Tech Stack
- **Backend**: Laravel (PHP)
- **Frontend**: Blade Templates, Tailwind CSS
- **Authentication**: Laravel Auth
- **Database**: MySQL

## Prerequisites
- PHP 8.0+
- Composer
- MySQL
- Node.js & npm

## Installation

### 1. Clone the Repository
```bash
git clone https://github.com/dkyxhjj/APIStoreNew.git
cd APIStoreNew
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Configuration
- Create a MySQL database
- Update `.env` with your database credentials
```bash
php artisan migrate
```

### 5. Run the Application
```bash
php artisan serve
```

## Authentication
- Register a new account
- Login to access URL management features
- Secure authentication powered by Laravel

## Contributing
1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License
Distributed under the MIT License. See `LICENSE` for more information.

## Contact
Richard Li - richardli1@g.ucla.edu
