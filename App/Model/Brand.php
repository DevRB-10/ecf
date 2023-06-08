<?php

namespace App\Model;

class Brand
{
    /**
     * variable id de la marque
     *
     * @var int
     */
    private int $id;

    /**
     * variable name de la marque
     *
     * @var string
     */
    private string $name;

    /**
     * variable date de la marque
     *
     * @var [type]
     */
    private $date;
    /**
     * fonction constructeur
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    
    /**
     * Hydrate l'entité avec les données fournies.
     *
     * @param array $data Les données à utiliser pour l'hydratation de l'entité.
     * @return self Retourne l'instance de l'entité hydratée.
     */
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

    /**
     * Vérifie si la marque est nouvelle.
     *
     * @return bool Retourne true si l'entité est nouvelle, sinon false.
     */
    public function isNew(): bool
    {
        return is_null($this->id);
    }
    
    /**
     * Définit l'identifiant de la marque.
     *
     * @param int|null $id Identifiant de la citation.
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Définit le nom de la marque.
     *
     * @param [type] $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Retourne l'id de la marque.
     *
     * @param [type] $name
     * @return void
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retourn le nom de la marque.
     *
     * @param [type] $name
     * @return void
     */
    public function getName()
    {
        return $this->name;
    }

}