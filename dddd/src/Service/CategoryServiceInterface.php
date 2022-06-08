<?php

namespace App\Service;

use App\Entity\Category;
use Knp\Component\Pager\Pagination\PaginationInterface;

interface CategoryServiceInterface
{
    public function getPaginatedList(int $page): PaginationInterface;

    public function save(Category $category): void;
<<<<<<< HEAD
=======

    public function delete(Category $category): void;

    public function canBeDeleted(Category $category): bool;
>>>>>>> 40746729a0cc461f332b237ac2655f18557d2f68
}
