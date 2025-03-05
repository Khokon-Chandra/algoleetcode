## About AlgoLeetCode

Welcome to AlgoLeetCode, an online platform dedicated to enhancing coding skills through diverse, algorithm-based problem-solving challenges inspired by *LeetCode*. This full-stack application is powered by **Laravel 11**, **Vue.js 3**, **Inertia.js**, and **Tailwind CSS** to provide a seamless and responsive user experience. Users can tackle coding problems, prepare for interviews, and track progress within an engaging, interactive platform. We extend full credit to <a href="https://leetcode.com">LeetCode</a> for the original concept and design inspiration behind this project.


# AlgoLeetCode

This is a Laravel Inertia.js and Vue.js project that provides a LeetCode-like problem-solving platform.

## 🚀 Installation Guide

Follow these steps to clone and set up the project locally.

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/Khokon-Chandra/algoleetcode.git
cd algoleetcode
```

### 2️⃣ Install Dependencies
#### Backend (Laravel)
```bash
composer install
```

#### Frontend (Vue.js, Inertia.js)
```bash
npm install
```

### 3️⃣ Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Configure Database
Update the `.env` file with your database credentials, then run:
```bash
php artisan migrate --seed
```

### 5️⃣ Start the Development Server
```bash
php artisan serve
```

### 6️⃣ Start Vite for Frontend Assets
```bash
npm run dev
```

## 🎯 Features
- Solve algorithm problems similar to LeetCode.
- Built with Laravel, Vue.js, and Inertia.js.
- User authentication and problem submission.

## 🤝 Contributing
Pull requests are welcome! Feel free to open issues and contribute to the project.

## 📜 License
This project is open-source under the MIT License.
