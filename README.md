# 🚀 **E-Commerce Amazon clone Website**

<p align="center">
  <a href="https://imgbb.com/">
    <img src="https://i.ibb.co/S47h4N8B/Amazon-icon.png" alt="Amazon-icon" border="0" width="200" />
  </a>
</p>
**ERD**
<p align="center">
  <a href="https://imgbb.com/">
  <img src="https://i.ibb.co/8DPLD5Cb/ERD.png" alt="ERD" border="0" width ="300">
  </a>
</p>

## Overview
This project is an **E-commerce platform** built using **Laravel**, featuring an **Admin Dashboard** and an intuitive **User Experience** for managing products, orders, and more. It includes features for **product management**, **order tracking**, **cart management**, **payment integration**, and **shipment tracking**.

---

## 🛠️ **Features**

### **Admin POV:**
- **Product Management**: Add, update, and remove products from the platform.
- **Order Management**: View and manage all user orders including status updates (Pending, Shipped, Delivered).
- **User Management**: View, update, and delete user profiles.
- **Payment Management**: Manage and update payment statuses for orders.
- **Shipment Management**: Update shipment statuses for orders (Pending, In Transit, Delivered, Returned).
- **Statistics**: Monitor total sales, orders, and product stocks in real-time.

### **User POV:**
- **Product Browsing**: Users can view products, read descriptions, and check prices.
- **Cart Management**: Add items to the cart, update quantity, or remove items.
- **Checkout**: Complete the checkout process by providing shipping details and making a payment.
- **Order History**: View order details and track shipment statuses.

---

## 💻 **Installation Guide**

### **Requirements:**
- PHP >= 8.1
- Laravel >= 9.x
- Composer
- MySQL or SQLite (for the database)

### **Setup Steps:**

1. **Clone the Repository:**
   ```bash
    git clone https://github.com/yourusername/ecommerce-laravel.git
    cd ecommerce-laravel
2.Install Dependencies:
```bash
   composer install
```

3.Create .env file:
 ```bash
    cp .env.example .env
    php artisan key:generate
```
4.Database Configuration:
- Set up your database in the .env file:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ecommerce
    DB_USERNAME=root
    DB_PASSWORD=
5.Run Migrations:
  ```bash
  php artisan migrate
  ```
6.Seed the Database (Optional):
To populate some sample data (products, users, orders):
```bash
php artisan db:seed
```
7.Run the Application:
```bash
php artisan serve
```

🔑 Authentication & Roles

Admin Login: Admin credentials are seeded with email: admin@gmail.com, password: admin123.
User Registration: Users can register through the registration form or use the seeded user@gmail.com account , password: user123.
```bash
   git clone https://github.com/yourusername/ecommerce-laravel.git
   cd ecommerce-laravel
```
🌐 Routes Overview
Admin Routes:

1.Dashboard: /admin — The main dashboard for monitoring platform statistics.

2.Product Management: /admin/products — Create, edit, and delete products.

3.Order Management: /admin/orders — View and manage user orders.

4.User Management: /admin/users — Manage user profiles.

5.Payment Management: /admin/payments — Manage payment statuses.

6.Shipment Management: /admin/shipments — Update shipment statuses.

User Routes:

1.Home: / — View featured products and shop.

2.Product Details: /product/{product} — View detailed information for a product , (in develop).

3.Cart: /cart — Add, update, or remove products from the shopping cart.

4.Checkout: /checkout — Complete the checkout process.

5.Orders: /orders — View all past orders.

6.Order Details: /orders/{order} — View detailed information for an order.

📱 User Dashboard

1.View Products:
Users can browse products by categories like Electronics, Books, etc. Clicking on a product redirects to the product detail page where users can add it to their cart.

2.Cart Management:
Users can see their cart, update quantities, or remove items. Users can proceed to checkout, filling in their shipping information.

3.Checkout:
Payment methods include Credit Card, PayPal, Cash, and Bank Transfer. On successful payment, users can track their order and shipment.

4.Order History:
Users can view all orders placed, including their status and products bought.

⚙️ Admin Dashboard

1.Admin Home:
Displays platform statistics, including total sales, number of orders, and user count.

2.Product Management:
Admins can create, update, and delete products. Admins can set the price, stock quantity, description, and image for each product.

3.Order Management:
Admins can manage orders, including status updates like Pending, Shipped, and Delivered. Admins can see detailed information about products, users, and payment statuses for each order.

4.User Management:
Admins can view and manage user profiles. Admins can delete or update user information.

4.Payment & Shipment Management:
Admins can update the payment status for each order. Admins can manage shipment status such as In Transit, Delivered, or Returned.

🎨 UI Design & Styling

The frontend is powered by AdminLTE for admin views and a custom theme for the user-facing shop.

The cart and checkout pages use responsive design for mobile-friendly interaction.

Toast Notifications inform users of successful actions like adding to cart or updating their profile.

💡 Future Features

Advanced Search & Filters: Enhance product search with filters for categories, price ranges, etc.

Admin Analytics Dashboard: Provide detailed analytics for sales, popular products, and more.

Product Reviews: Enable users to leave reviews for products.

Admin Role-based Access: Admins with different roles to manage products, users, orders, etc.

Feel free to fork, clone, or contribute to this project! ✨

![Laravel](https://img.shields.io/badge/Laravel-9.x-orange)
![PHP](https://img.shields.io/badge/PHP-%3E%3D%208.1-blue)
![MySQL](https://img.shields.io/badge/MySQL-8.x-blue)
