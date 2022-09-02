<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('spouses')]
#[HasLifecycleCallbacks()]
class Spouses
{
    #[Id]
    #[Column('sID'), GeneratedValue()]
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

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): Spouses
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function setMiddleName(string $middleName): Spouses
    {
         $this->middleName = $middleName;

         return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): Spouses
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getSpousesName(): string
    {
        return $this->spousesName;
    }

    public function setSpousesName(string $spousesName): Spouses
    {
        $this->spousesName = $spousesName;

        return $this;
    }

    public function getFathersFirstName(): string
    {
        return $this->fathersFirstName;
    }

    public function setFathersFirstName(string $fathersFirstName): Spouses
    {
        $this->fathersFirstName = $fathersFirstName;

        return $this;
    }

    public function getFathersLastName(): string
    {
        return $this->fathersLastName;
    }

    public function setFathersLastName(string $fathersLastName): Spouses
    {
        $this->fathersLastName = $fathersLastName;

        return $this;
    }

    public function getMothersFirstName(): string
    {
        return $this->mothersFirstName;
    }

    public function setMothersFirstName(string $mothersFisrtName): Spouses
    {
        $this->mothersFirstName = $mothersFisrtName;

        return $this;
    }

    public function getMothersLastName(): string
    {
        return $this->mothersLastName;
    }

    public function setMothersLastName(string $mothersLastName): Spouses
    {
        $this->mothersLastName = $mothersLastName;

        return $this;
    }

    public function getPlaceofBirth(): string
    {
        return $this->placeOfBirth;
    }

    public function setPlaceOfBirth(string $placeOfBirth): Spouses
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    public function getDateofBirth(): string
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(string $dateOfBirth): Spouses
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setSex(string $sex): Spouses
    {
        $this->sex = $sex;

        return $this;
    }

    public function getMaritalStatus(): string
    {
        return $this->maritalStatus;
    }

    public function setMaritalStatus(string $maritalStatus): Spouses
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    public function getPersonalStatus(): string
    {
        return $this->personalStatus;
    }

    public function setPersonalStatus(string $personalStatus): Spouses
    {
        $this->personalStatus = $personalStatus;

        return $this;
    }

    public function getPositionOfBirth(): int
    {
        return $this->positionOfBirth;
    }

    public function setPositionOfBirth(int $positionOfBirth): Spouses
    {
        $this->positionOfBirth = $positionOfBirth;

        return $this;
    }

    public function getCurrentCity(): string
    {
        return $this->currentCity;
    }

    public function setCurrentCity(string $currentCity): Spouses
    {
        $this->currentCity = $currentCity;

        return $this;
    }
}