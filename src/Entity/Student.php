<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $lastName;

    /**
     * @ORM\Column(type="integer")
     */
    private $numEtud;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Department", inversedBy="students")
     */
    private $department;

    /**
     * getId.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * getFirstName.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * setFirstName.
     *
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * getLastName.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * setLastName.
     *
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * getNumEtud.
     *
     * @return int|null
     */
    public function getNumEtud(): ?int
    {
        return $this->numEtud;
    }

    /**
     * setNumEtud.
     *
     * @param int $numEtud
     *
     * @return $this
     */
    public function setNumEtud(int $numEtud): self
    {
        $this->numEtud = $numEtud;

        return $this;
    }

    public function getCategory(): ?Department
    {
        return $this->category;
    }

    public function setCategory(?Department $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): self
    {
        $this->department = $department;

        return $this;
    }
}
