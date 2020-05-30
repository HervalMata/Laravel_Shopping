<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 29/05/2020
 * Time: 16:38
 */

namespace App\Repositories;


use App\Exceptions\CategoryNotFoundException;
use App\Models\Category;
use App\Repositories\BaseRepository;
use App\Exceptions\CategoryInvalidArgumentException;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{

    /**
     * CategoryRepository constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    /**
     * @param string $order
     * @param string $sort
     * @return array
     */
    public function ListCategories(string $order = 'id', string $sort = 'desc'): array
    {
        $list = $this->model->orderBy($order, $sort)->get();
        return collect($list)->all();
    }

    /**
     * @param array $params
     * @return Category
     */
    public function createCategory(array $params): Category
    {
        try {
            $category = $this->model->create($params);

            return $category;
        } catch (QueryException $e) {
            throw new CategoryInvalidArgumentException($e->getMessage());
        }
    }

    public function updateCategory(array $params): Category
    {
        $category = $this->findCategoryById($this->model->id);
        $category->update($params->all());
        return $category;
    }

    public function findCategoryById(int $id): Category
    {
        try {
            return $this->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            throw new CategoryNotFoundException($e->getMessage());
        }
    }

    public function deleteCategory(): bool
    {
        return $this->model->delete();
    }

    public function findCategoryBySlug(array $slug): Category
    {
        try {
            return $this->findByOrFail($slug);
        } catch (ModelNotFoundException $e) {
            throw new CategoryNotFoundException($e->getMessage());
        }
    }
}
