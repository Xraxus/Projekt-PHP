<?php

namespace App\Service;

use App\Entity\Category;
use App\Repository\CategoryRepository;
<<<<<<< HEAD
=======
use App\Repository\TaskRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
>>>>>>> 40746729a0cc461f332b237ac2655f18557d2f68
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

class CategoryService implements CategoryServiceInterface
{
    private CategoryRepository $categoryRepository;
    private PaginatorInterface $paginator;
<<<<<<< HEAD

    public function __construct(CategoryRepository $categoryRepository, PaginatorInterface $paginator)
    {
        $this->categoryRepository = $categoryRepository;
        $this->paginator = $paginator;
=======
    private TaskRepository $taskRepository;

    public function __construct(CategoryRepository $categoryRepository, PaginatorInterface $paginator, TaskRepository $taskRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->paginator = $paginator;
        $this->taskRepository = $taskRepository;
>>>>>>> 40746729a0cc461f332b237ac2655f18557d2f68
    }

    public function getPaginatedList(int $page): PaginationInterface
    {
        return $this->paginator->paginate(
            $this->categoryRepository->queryAll(),
            $page,
            CategoryRepository::PAGINATOR_ITEMS_PER_PAGE
        );
    }

    public function save(Category $category): void
    {
<<<<<<< HEAD
        if (null == $category->getId()) {
            $category->setCreatedAt(new \DateTimeImmutable());
        }
        $category->setUpdatedAt(new \DateTimeImmutable());

        $this->categoryRepository->save($category);
    }
=======


        $this->categoryRepository->save($category);
    }

    public function delete(Category $category): void
    {
        $this->categoryRepository->delete($category);
    }

    public function canBeDeleted(Category $category): bool
    {
        try {
            $result = $this->taskRepository->countByCategory($category);

            return !($result > 0);
        } catch (NoResultException|NonUniqueResultException) {
            return false;
        }
    }

>>>>>>> 40746729a0cc461f332b237ac2655f18557d2f68
}
