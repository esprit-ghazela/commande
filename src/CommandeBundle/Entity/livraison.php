<?php

namespace CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * livraison
 *
 * @ORM\Table(name="livraison")
 * @ORM\Entity(repositoryClass="CommandeBundle\Repository\livraisonRepository")
 */
class livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseLivr", type="string", length=255)
     */
    private $adresseLivr;

    /**
     *
     * @ORM\Column(name="datelivr", type="date")
     */
    private $datelivr;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adresseLivr
     *
     * @param string $adresseLivr
     *
     * @return livraison
     */
    public function setAdresseLivr($adresseLivr)
    {
        $this->adresseLivr = $adresseLivr;

        return $this;
    }

    /**
     * Get adresseLivr
     *
     * @return string
     */
    public function getAdresseLivr()
    {
        return $this->adresseLivr;
    }




    /**
     * @return mixed
     */
    public function getDatelivr()
    {
        return $this->datelivr;
    }

    /**
     * @param mixed $datelivr
     */
    public function setDatelivr($datelivr)
    {
        $this->datelivr = $datelivr;
    }

}

