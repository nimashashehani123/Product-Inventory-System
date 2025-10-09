# Product Inventory System

A simple and elegant **Product Inventory System** built with **Laravel**.  
This project allows users to manage products, track stock, view recent updates, and perform CRUD operations. Admin users have full access to manage all products and users, while regular users can manage their own products.

---


## 🎬 Demo Video

  Check out a demo of this project on YouTube:

## 🎯 Features

- User authentication (login/register)
- Role-based access: Admin vs Regular User
- CRUD operations for products
- Recent products overview
- Responsive and modern UI with light/dark mode
- SweetAlert2 for confirmations
- Pagination for product listing
- Dashboard with stats (total products, total users, recent products)

---

## 💻 Technologies Used

- Laravel 10
- Blade Templates
- Tailwind CSS
- SweetAlert2
- MySQL
- HTML, CSS, JavaScript

---

## 🚀 Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/YOUR_USERNAME/product-inventory-system.git
   cd product-inventory-system
2. Install dependencies:
    ```bash
    composer install
    npm install
    npm run dev
3. Copy .env.example to .env and configure your database credentials:
    ```bash
    cp .env.example .env
    php artisan key:generate
4. Run migrations:
    ```bash
    php artisan migrate
5. Start the development server:
    ```bash
    php artisan serve
## 📝 Usage

- Admin users can manage all products and view total users/products.

- Regular users can add, edit, and delete their own products.

- Dashboard provides recent products and quick stats.

## 📂 Folder Structure
    app/          - Laravel backend code
    resources/    - Blade templates and front-end assets
    routes/       - Web routes for the application
    database/     - Migrations and seeders
    public/       - Images, JS, CSS

## 🛠 Future Improvements

Implement product categories with separate tables

Add image upload for products


## ⚖ License

This project is licensed under the MIT License.