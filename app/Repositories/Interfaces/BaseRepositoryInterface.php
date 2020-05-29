<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 29/05/2020
 * Time: 15:40
 */

namespace App\Repositories\Interfaces;


interface BaseRepositoryInterface
{
    public function create(array $attributes);

    public function update(array $attributes, int $id);

    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'desc');

    public function find(int $id);

    public function findOrFail(int $id);

    public function findBy(array $data);

    public function findOneBy(array $data);

    public function findByOrFail(array $data);

    public function getPaginatedResults(int $paginated = 25, string $orderBy = 'id', string $sortBy = 'desc');

    public function paginateArrayResults(array $data, int $perPage = 50);

    public function delete(int $id);
}
