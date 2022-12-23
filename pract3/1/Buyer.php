<?php

class Buyer
{
    private $surname;
    private $name;
    private $patronymic;
    private $address;
    private $creditCardNumber;
    private $bankNumber;

    function __construct(string $surname, string $name, string $patronymic, string $address, int $creditCardNumber, int $bankNumber)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
        $this->address = $address;
        $this->creditCardNumber = $creditCardNumber;
        $this->bankNumber = $bankNumber;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setCreditCardNumber($creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;
    }

    public function setBankNumber($bankNumber)
    {
        $this->bankNumber = $bankNumber;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPatronymic(): string
    {
        return $this->patronymic;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getCreditCardNumber(): int
    {
        return $this->creditCardNumber;
    }

    public function getBankNumber(): int
    {
        return $this->bankNumber;
    }

    public function outputInformation(int $indx)
    {
        print("$indx - ");
        print("фамилия - $this->surname\n");
        print("имя - $this->name\n");
        print("отчество - $this->patronymic\n");
        print("адрес - $this->address\n");
        print("номер кредитки - $this->creditCardNumber\n");
        print("номер счета - $this->bankNumber\n");
    }
}
