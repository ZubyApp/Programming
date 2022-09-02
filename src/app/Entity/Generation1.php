<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('generation1')]
#[HasLifecycleCallbacks()]
class Generation1
{
    #[Id]
    #[Column('cID'), GeneratedValue()]
    private int $id;

    #[Column(name: 'FName')]
    private string $firstName;

    #[Column(name: 'MName')]
    private string $middleName;

    #[Column(name: 'LName')]
    private string $lastName;

    #[Column(name: 'SName')]
    private string $spousesName;

    #[Column(name: 'FFName')]
    private string $fathersFirstName;

    #[Column(name: 'FLName')]
    private string $fathersLastName;

    #[Column(name: 'MFName')]
    private string $mothersFirstName;

    #[Column(name: 'MLName')]
    private string $mothersLastName;

    #[Column(name: 'PBirth')]
    private string $placeOfBirth;

    #[Column(name: 'DBirth')]
    private string $dateOfBirth;

    #[Column(name: 'Sex')]
    private string $sex;

    #[Column(name: 'MStatus')]
    private string $maritalStatus;

    #[Column(name: 'PStatus')]
    private string $personalStatus;

    #[Column(name: 'POBirth')]
    private int $positionOfBirth;

    #[Column(name: 'CCity')]
    private string $currentCity;

    // #[Column(name: 'created_at')]
    // private \DateTime $createdAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): Generation1
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function setMiddleName(string $middleName): Generation1
    {
         $this->middleName = $middleName;

         return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): Generation1
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getSpousesName(): string
    {
        return $this->spousesName;
    }

    public function setSpousesName(string $spousesName): Generation1
    {
        $this->spousesName = $spousesName;

        return $this;
    }

    public function getFathersFirstName(): string
    {
        return $this->fathersFirstName;
    }

    public function setFathersFirstName(string $fathersFirstName): Generation1
    {
        $this->fathersFirstName = $fathersFirstName;

        return $this;
    }

    public function getFathersLastName(): string
    {
        return $this->fathersLastName;
    }

    public function setFathersLastName(string $fathersLastName): Generation1
    {
        $this->fathersLastName = $fathersLastName;

        return $this;
    }

    public function getMothersFirstName(): string
    {
        return $this->mothersFirstName;
    }

    public function setMothersFirstName(string $mothersFisrtName): Generation1
    {
        $this->mothersFirstName = $mothersFisrtName;

        return $this;
    }

    public function getMothersLastName(): string
    {
        return $this->mothersLastName;
    }

    public function setMothersLastName(string $mothersLastName): Generation1
    {
        $this->mothersLastName = $mothersLastName;

        return $this;
    }

    public function getPlaceofBirth(): string
    {
        return $this->placeOfBirth;
    }

    public function setPlaceOfBirth(string $placeOfBirth): Generation1
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    public function getDateofBirth(): string
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(string $dateOfBirth): Generation1
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setSex(string $sex): Generation1
    {
        $this->sex = $sex;

        return $this;
    }

    public function getMaritalStatus(): string
    {
        return $this->maritalStatus;
    }

    public function setMaritalStatus(string $maritalStatus): Generation1
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    public function getPersonalStatus(): string
    {
        return $this->personalStatus;
    }

    public function setPersonalStatus(string $personalStatus): Generation1
    {
        $this->personalStatus = $personalStatus;

        return $this;
    }

    public function getPositionOfBirth(): int
    {
        return $this->positionOfBirth;
    }

    public function setPositionOfBirth(int $positionOfBirth): Generation1
    {
        $this->positionOfBirth = $positionOfBirth;

        return $this;
    }

    public function getCurrentCity(): string
    {
        return $this->currentCity;
    }

    public function setCurrentCity(string $currentCity): Generation1
    {
        $this->currentCity = $currentCity;

        return $this;
    }
}