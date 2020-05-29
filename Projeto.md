# Projeto de Loja Virtual de Laços

### **Criação do Projeto**

`composer create-project --prefer-dist laravel/laravel Laravel_Shopping`

### **Configuração do Layout**

`composer require laravel/ui`

##### **Página index do painél do admin**

`php artisan make:controller Admin/DashboardController`

## Categorias

#### Migration de categorias

`php artisan make:migration create_categories_table`

#### Model de categorias

`php artisan make:model Models/Category`

#### Seeder de categorias

'composer require cviebrock/eloquent-sluggable'

'php artisan make:seeder CategoriesSeeder'

'php artisan migrate --seed'

ToDo CategoryRepository, CategoryContract, CategoryRequest, Admin/CategoryController, Views Controller

#### BaseRepositoryInterface

#### BaseRepository
