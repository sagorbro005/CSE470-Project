Medimart - Your Online Medical Store

Medimart is a modern e-commerce platform designed to simplify the purchase of medicines, medical equipment, and beauty products. Built using PHP and Laravel, it provides a seamless shopping experience with features like theme customization, a user-friendly interface, and secure transactions.
Features

    Product Categories: Organized categories for medicines, medical equipment, and beauty products.
    User Authentication: Secure login and registration for customers.
    Cart and Checkout: Add-to-cart functionality with a smooth checkout process.
    Order Management: Track orders from placement to delivery.
    Search and Filter: Easily find products with an advanced search and filtering system.
    Theme Toggle: Switch between light and dark themes for a personalized experience.
    Secure Payments: Integrated payment gateway for safe transactions.

Tech Stack

    Backend: PHP, Laravel Framework
    Frontend: Blade Templates, Tailwind CSS
    Database: MySQL
    Dependencies: Composer, NPM
    Deployment: Localhost using Laravel’s built-in server or external hosting

Installation
Prerequisites

    PHP >= 8.1
    Composer
    Node.js and NPM
    MySQL or compatible database

Steps

    Clone the Repository:
    git clone https://github.com/yourusername/medimart.git
cd medimart
Install Dependencies:

composer install
npm install

Configure Environment:

    Copy .env.example to .env:

cp .env.example .env

Update the .env file with your database credentials and application settings:

DB_DATABASE=medimart
DB_USERNAME=root
DB_PASSWORD=yourpassword

Generate Application Key:

php artisan key:generate

Run Migrations and Seed Database:

php artisan migrate --seed

Build Assets:

npm run dev

Start the Application:

    php artisan serve

        Visit http://localhost:8000 in your browser.

Usage

    User Roles:
        Customers: Can browse products, add items to the cart, and place orders.
        Admin: Manage products, categories, and orders via the admin dashboard.

    Theme Toggle:
        Use the Switch Theme button in the header to toggle between light and dark themes.

    Adding Products:
        Admin can log in and use the product management interface to add or update items.

Future Features

    Prescription Upload: Allow users to upload prescriptions for custom orders.
    Live Chat: Integrated customer support chat.
    Offers and Discounts: Dynamic pricing and coupons for promotions.
    Mobile App: Expand the platform to Android and iOS.

Contributing

Contributions are welcome! Follow these steps:

    Fork the repository.
    Create a feature branch:

git checkout -b feature/your-feature

Commit changes:

git commit -m "Add your feature"

Push the branch:

    git push origin feature/your-feature

    Open a pull request.

License

This project is licensed under the MIT License.
Contact

For inquiries or support, reach out to us:

    Email: support@medimart.com
    Website: Medimart
