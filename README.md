# Laravel Restaurant Management System

A powerful and flexible Restaurant Management System built with Laravel, designed to simplify and streamline restaurant operations. This system enables restaurant owners to manage menus, orders, reservations, and more, all from a single platform.

## Features

- **User-Friendly Dashboard**: Intuitive interface for managing daily operations.
- **Menu Management**: Create, update, and delete menu items with ease.
- **Order Management**: Handle dine-in, takeout, and delivery orders.
- **Reservation System**: Accept and manage table reservations.
- **Customer Management**: Track customer details and order history.
- **Reporting & Analytics**: Gain insights into sales and performance.
- **Role-Based Access Control**: Assign roles to staff members and restrict access.
- **Responsive Design**: Fully optimized for desktop and mobile devices.

## Installation

### Prerequisites

- PHP >= 8.0
- Composer
- MySQL or any other supported database
- Laravel 10 or later
- A web server like Apache or Nginx

### Steps

1. **Clone the Repository**
   ```bash
   https://github.com/AbdualimovBotir/Laravel-Restaurant-Managament-Systeam.git
   cd Laravel-Restaurant-Managament-Systeam
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Environment Configuration**
   Copy the `.env.example` file to `.env` and update the necessary environment variables:
   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations and Seeders**
   ```bash
   php artisan migrate --seed
   ```

6. **Start the Development Server**
   ```bash
   php artisan serve
   ```

7. **Access the Application**
   Open your browser and navigate to `http://localhost:8000`.

## Usage

1. Log in as an admin using the default credentials provided in the seeders.
2. Explore the dashboard to manage menus, orders, and reservations.
3. Update roles and permissions for staff members.
4. Use the analytics section to view reports and track restaurant performance.

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Commit your changes with clear messages.
4. Push to your fork and submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Support

If you encounter any issues or have questions, feel free to open an issue in the repository or contact us at support@example.com.

---

### Screenshots

1. **Dashboard**
   ![Dashboard](screenshot-dashboard.png)

2. **Menu Management**
   ![Menu Management](screenshot-menu.png)

3. **Order Management**
   ![Order Management](screenshot-orders.png)

