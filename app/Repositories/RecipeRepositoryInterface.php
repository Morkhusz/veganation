<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface RecipeRepositoryInterface
{
    public function all(): Collection;
    public function create(array $attributes): Model;
    public function update(int $id, array $attributes): ?Model;
    public function delete(int $id): int;
}
