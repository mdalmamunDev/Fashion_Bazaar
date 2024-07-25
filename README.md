
# FashionBazaar Web App

FashionBazaar is an e-commerce web application for selling men's and women's clothing, watches, shoes, and more.

## Features

- User authentication and authorization
- Product management
- Category management
- User role management (Super Admin, Admin, Regular User)
- Image uploads for products

## User Roles

There are three types of users in the system:

- **Super Admin**: Full control over the application, including all administrative functions. Represented by `1` in the system.
- **Admin**: Limited control compared to the Super Admin. Has access to manage products and categories but with some restrictions. Represented by `2` in the system.
- **Regular User**: Common buyer or user with basic access to view and purchase products. Represented by `3` in the system.

## Installation

### Prerequisites

Ensure you have the following installed:
- PHP 8.0 or higher
- Composer
- MySQL or another supported database

### Setup

1. **Clone the Repository**

   ```bash
   git clone https://github.com/mdalmamun5354/Fashion_Bazaar.git
   cd Fashion_Bazaar
