<?php

namespace App\Model;

class Brand
{
    private $id;
    private $name;
    private $date;
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    
    public function hydrate(array $data): self
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists(__CLASS__, $method)) {
                $this->$method($value);
            }
        }
        return $this;
    }

    public function isNew(): bool
    {
        return is_null($this->id);
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

}