Travel_Trove 
Project Overview
Travel Trove is a web application developed using PHP Laravel framework, designed to provide users with an enhanced travel booking experience. It includes dynamic user and admin dashboards, showcasing popular destinations and offers. This project is a collaboration between Konain Zehra, Madeha Batool, and Sabeen Kumail under the organization Codegirls.

Installation
Clone the repository: git clone https://github.com/username/repo.git
Install dependencies: composer install
Copy .env.example to .env and configure your environment variables.
Generate application key: php artisan key:generate
Migrate and seed the database: php artisan migrate --seed
Serve the application: php artisan serve

Database
Create a MySQL database named travel_trove


Features
User Dashboard: Allows users to book destinations and view current offers.
Admin Dashboard: Enables administrators to manage destinations, offers, and user activities.
Dynamic Content: Displays popular destinations and offers, enhancing user engagement.
Authentication: Secure login and registration functionalities for users and admins.
Database Integration: MySQL database for structured data storage and retrieval.

Architecture
Travel Trove follows a three-tier architecture:

Presentation Layer: User and admin dashboards.
Business Logic Layer: PHP Laravel framework handling requests and processing data.
Data Layer: MySQL database managing user information, destinations, and offers.

Functional Requirements
Dynamic Pages:
Home Page: Provides an overview of popular destinations, offers.
Login Page: Allows users and administrators to access their respective dashboards.
Register Page: Enables users to create accountsto book their tickets.

Static Pages:
Services
About
Contact Us

Email: admin@gmail.com
Password: admin12
Features of the Admin Dashboard include:

Roles and Permissions Management: Admins can create, update, delete roles, assign permissions, and manage user access.
User Management: Admins can create users with specific roles.
destination form: Admins can add destinations through form .
offer form: Admins can add offers through form
show destinations: Admins can create, update, delete destinations.
show offers:Admins can create, update, delete offers.

User Dashboard
Accessed via the login button using:

Email: konain@gmail.com
Password: konain12

Features available to users include:

book tickets: Users can book their tickets and can view their bookings.
offers: Users can view offers.

Setting Up the Application
Database: Create a MySQL database named travel_trove.
Migrations: Execute all migrations and set up the database schema using:

php artisan migrate
Seed Data: Populate the database with initial data using:
php artisan db:seed --class=PermissionData

Conclusion
In summary, Travel Trove is a cutting-edge tourism website developed by Codegirls. Featuring user-friendly interfaces and powerful backend systems, it offers travelers seamless access to popular destinations, exclusive offers, and hassle-free booking. Built on a scalable architecture with meticulous database design and rigorous testing, Travel Trove promises to redefine the travel experience.





