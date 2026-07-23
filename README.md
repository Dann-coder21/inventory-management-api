# Inventory Management API

A production-style RESTful Inventory Management API built with Laravel and PostgreSQL.

The API allows businesses to manage products, categories and inventory while following Clean Architecture principles.

---

# Technologies

- Laravel
- PHP
- PostgreSQL
- Eloquent ORM
- REST API
- Postman

---

# Project Architecture

Request
↓
Route
↓
Controller
↓
Service
↓
Model
↓
Database
↓
API Resource
↓
JSON Response

---

# Folder Structure

app/

├── Http/

│ ├── Controllers/

│ ├── Requests/

│ └── Resources/

│

├── Models/

│

└── Services/

database/

├── migrations/

└── seeders/

---

# Creating the Project

Create Laravel project

```bash
composer create-project laravel/laravel inventory-management-api
```

Move into project

```bash
cd inventory-management-api
```

Start server

```bash
php artisan serve
```

---

# Database

Create PostgreSQL database

```text
inventory_api
```

Update the .env file

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=inventory_api
DB_USERNAME=postgres
DB_PASSWORD=your_password
```

Run migrations

```bash
php artisan migrate
```

Reset database

```bash
php artisan migrate:fresh
```

---

# Generate Files

## Product

Create Model + Migration

```bash
php artisan make:model Product -m
```

Create Controller

```bash
php artisan make:controller ProductController --api
```

Create Form Requests

```bash
php artisan make:request StoreProductRequest
```

```bash
php artisan make:request UpdateProductRequest
```

Create API Resource

```bash
php artisan make:resource ProductResource
```

Create Service

Laravel has no built-in command.

Create manually:

```text
app/Services/ProductService.php
```

---

## Category

Create Model + Migration

```bash
php artisan make:model Category -m
```

Create Controller

```bash
php artisan make:controller CategoryController --api
```

Create Requests

```bash
php artisan make:request StoreCategoryRequest
```

```bash
php artisan make:request UpdateCategoryRequest
```

Create API Resource

```bash
php artisan make:resource CategoryResource
```

Create Service

```text
app/Services/CategoryService.php
```

---

# Migrations

Run migrations

```bash
php artisan migrate
```

Rollback

```bash
php artisan migrate:rollback
```

Reset database

```bash
php artisan migrate:fresh
```

Reset and Seed

```bash
php artisan migrate:fresh --seed
```

---

# Useful Artisan Commands

List routes

```bash
php artisan route:list
```

Open Tinker

```bash
php artisan tinker
```

Clear cache

```bash
php artisan optimize:clear
```

Generate application key

```bash
php artisan key:generate
```

---

# Product API Endpoints

| Method | Endpoint | Description |
|----------|-------------------------|----------------|
| GET | /api/products | List Products |
| GET | /api/products/{id} | Show Product |
| POST | /api/products | Create Product |
| PUT | /api/products/{id} | Update Product |
| DELETE | /api/products/{id} | Delete Product |

---

# Category API Endpoints

| Method | Endpoint | Description |
|----------|----------------------------|----------------|
| GET | /api/categories | List Categories |
| GET | /api/categories/{id} | Show Category |
| POST | /api/categories | Create Category |
| PUT | /api/categories/{id} | Update Category |
| DELETE | /api/categories/{id} | Delete Category |

---

# Features Implemented

## Products

- ✅ CRUD
- ✅ Query Builder
- ✅ Search
- ✅ Filtering
- ✅ Pagination
- ✅ API Resources
- ✅ Validation
- ✅ Service Layer
- ✅ Dependency Injection
- ✅ Route Model Binding

## Categories

- 🚧 CRUD (In Progress)

---

# Concepts Learned

- MVC Architecture
- REST API Design
- Eloquent ORM
- Query Builder
- Route Model Binding
- Dependency Injection
- Service Layer Pattern
- API Resources
- Form Requests
- Resource Controllers
- Pagination
- Search
- Filtering
- Relationships (belongsTo)
- Validation
- Mass Assignment
- JSON Responses

---

# Future Improvements

- Authentication (Laravel Sanctum)
- Authorization
- Policies
- Gates
- Stock Management
- Suppliers
- Customers
- Orders
- Dashboard Statistics
- Redis Cache
- Queues & Jobs
- Events & Listeners
- Notifications
- File Uploads
- Unit Testing
- Feature Testing
- Docker
- CI/CD
- API Documentation (Swagger)

---

# Development Roadmap

## Phase 1 ✅

- [x] Laravel Setup
- [x] PostgreSQL
- [x] Product CRUD
- [x] Services
- [x] Resources
- [x] Requests
- [x] Pagination
- [x] Query Builder
- [x] Relationships

## Phase 2 🚧

- [ ] Category CRUD
- [ ] Category Service
- [ ] Category Resource
- [ ] Category Requests

## Phase 3

- [ ] Authentication
- [ ] Authorization

## Phase 4

- [ ] Inventory Module

## Phase 5

- [ ] Testing

## Phase 6

- [ ] Deployment

---

# Author

Daniel Kabue Maina

Software Developer

Laravel | Angular | PostgreSQL | REST APIs