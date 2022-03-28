<?php

namespace App\Controller;

use App\Entity\Department;
use App\Entity\Student;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * @Route("/api", name="api_")
 */
class ApiController extends AbstractController
{
    /**
     * @Rest\Get("/department/{department}", name="students_by_department")
     *
     * @Rest\View
     */
    public function studentsByDepartment(Department $department, EntityManagerInterface $em)
    {
        $students = $em->getRepository(Student::class)->findStudentsByDepartment($department);

        return $students;
    }

}
