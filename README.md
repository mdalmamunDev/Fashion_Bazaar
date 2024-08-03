
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

1. **Super Admin**: Full control over the application, including all administrative functions. Represented by `1` in the system.
    - He can post.
    - Create category,
    - Change user type.
    - Modify any user, post or category.
    - But can't modify user's email and password.
2. **Admin**: Limited control compared to the Super Admin. Has access to manage products and categories but with some restrictions. Represented by `2` in the system.
    - He can post.
    - Modify only his own post.
    - Can't modify other user or other's post and any category.
3. **Regular User**: Common buyer or user with basic access to view and purchase products. Represented by `3` in the system.
    - He can only buy product.
    - Can change his profile information only.

## Installation

### Prerequisites

Ensure you have the following installed:
- PHP 8.0 or higher
- Composer
- MySQL or another supported database

### Libraries
We use those libraries for improve our app
- Toastr: https://github.com/brian2694/laravel-toastr?tab=readme-ov-file
- Profile Page: https://bootstrapbrain.com/component/bootstrap-free-profile-template/#code

### Setup

1. **Clone the Repository**

   ```bash
   git clone https://github.com/mdalmamun5354/Fashion_Bazaar.git
   cd Fashion_Bazaar
