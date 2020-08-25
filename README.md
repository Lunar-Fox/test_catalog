<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Setup

<p>1. Clone this repository</p>
<p>2. Run "composer update"</p>
<p>3. Run "cp .env.example .env"</p>
<p>4. Configure database</p>
<p>5. Run migrations "php artisan migrate"</p>
<p>6. Run seed for products and categories "php artisan db:seed --class=ProductAndCategories"</p>
<p>7. Run seed for message examples "php artisan db:seed --class=Messages"</p>

## Main files

<p>Categories and Products</p>

<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/app/Category.php">Category model</a></p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/app/Product.php">Product model</a></p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/database/migrations/2020_08_25_104908_create_products_table.php">Products migration</a></p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/database/migrations/2020_08_25_104857_create_categories_table.php">Categories migration</a></p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/database/migrations/2020_08_25_110426_creates_product_category_pivot_table.php">Products and categories relationship table</a></p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/database/seeds/ProductAndCategories.php">Products and categories seeder</a></p>
<br/>
<p>Books</p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/app/Http/Controllers/BooksController.php">Books controller</a></p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/database/migrations/2020_08_25_111842_create_books_table.php">Books migration</a></p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/database/seeds/Books.php">Books seeder</a></p>
<br/>
<p>Guestbook</p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/database/migrations/2020_08_25_113806_create_guest_messages_table.php">Guestbook migration</a></p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/app/Http/Controllers/GuestBookController.php">Guestbook controller</a></p>
<p><a href="https://github.com/Lunar-Fox/test_catalog/blob/master/resources/views/messages.blade.php">Guestbook messages template with pagination</a></p>


