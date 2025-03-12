<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TaskRepository;

final class ApiController extends AbstractController
{
    #[Route('/api/tasks', name: 'api_tasks', methods: ['GET'])]
    public function getTasks(TaskRepository $taskRepository): JsonResponse
    {
        $tasks = $taskRepository->findAll();
        
        $data = array_map(fn($task) => [
            'id' => $task->getId(),
            'title' => $task->getTitle(),
            'description' => $task->getDescription(),
            'status' => $task->isStatus(),
            'created_at' => $task->getCreatedAt()->format('Y-m-d H:i:s')
        ], $tasks);
        
        return $this->json($data);
    }
}
