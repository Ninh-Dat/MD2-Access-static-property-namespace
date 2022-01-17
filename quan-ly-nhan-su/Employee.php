<?php

class Employee
{
    private $ho;
    private $ten;
    private $date;
    private $diachi;
    private $vitricongviec;

    public function __construct($ho, $ten, $date, $diachi, $vitricongviec)
    {
        $this->ho = $ho;
        $this->ten = $ten;
        $this->date = $date;
        $this->diachi = $diachi;
        $this->vitricongviec = $vitricongviec;
    }

    public function getho()
    {
        return $this->ho;
    }

    public function setHo($ho): void
    {
        $this->ho = $ho;
    }

    public function getten()
    {
        return $this->ten;
    }

    public function setTen($ten): void
    {
        $this->ten = $ten;
    }

    public function getdate()
    {
        return $this->date;
    }

    public function setdate($date): void
    {
        $this->date = $date;
    }

    public function getdiachi()
    {
        return $this->diachi;
    }

    public function setdiachi($diachi): void
    {
        $this->diachi = $diachi;
    }

    public function getvitricongviec()
    {
        return $this->vitricongviec;
    }

    public function setvitricongviec($vitricongviec): void
    {
        $this->vitricongviec = $vitricongviec;
    }


}