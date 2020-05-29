<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 29/05/2020
 * Time: 15:51
 */

namespace App\Repositories\Interfaces;


use App\Models\Category;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function ListCategories(string $order = 'id', string $sort = 'desc') : array;

    public function createCategory(array $params) : Category;

    public function updateCategory(array $params) : Category;

    public function findCategoryById(int $id) : Category;

    public function deleteCategory() : bool;

    public function findCategoryBySlug(array $slug) : Category;
}
