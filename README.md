# AutoTheme

## Description
Custom WordPress theme for a used car dealership. Built from scratch with custom post types, ACF fields, and custom styling.

## Features
- Custom Post Type: Cars
- 6+ custom fields: Brand, Model, Price, Year, Mileage, Fuel, Transmission
- SOLD and -20% DEAL logic with visual badges
- News/blog section using default posts
- Responsive layout (3 cards per row, mobile stacking)
- Featured Image support for cars and news
- Clean menu + footer
- No user registration required

## Plugins Used
- [Advanced Custom Fields (ACF)](https://wordpress.org/plugins/advanced-custom-fields/)

## Folder Structure
- `/header.php` — site header + menu
- `/footer.php` — site footer
- `/index.php` — car listing homepage
- `/single-car.php` — single car page
- `/single-post.php` — single post page
- `/home-news.php` — news page
- `/style.css` — main theme styles
- `/functions.php` — theme setup, custom post type, menu

## How to Install
1. Upload the theme to `wp-content/themes/`
2. Activate it from the WordPress admin panel
3. Install ACF plugin
4. Create car posts and news posts
5. Set featured images and custom fields
## Development Environment

This WordPress project was developed using [LocalWP](https://localwp.com/), 
a local development tool that uses Docker containers under the hood for WordPress, PHP, Nginx, and MySQL services.

No additional docker-compose setup is required.

To test the project:
- Install LocalWP
- Import the project
- Start the AutoTheme site

## Demo Content

You can import demo easily:

1. Go to WordPress Dashboard > Tools > Import
2. Install the "WordPress Importer" plugin if asked
3. Upload the file `AllContentExport.xml`
4. Assign posts to your current user
5. Done!
