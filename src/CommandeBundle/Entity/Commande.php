<?php

namespace CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="CommandeBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @ORM\Column(name="prixTotale", type="integer")
     */
    private $prixTotale;

    /**
     *
     * @ORM\Column(name="prixlivr", type="integer")
     */
    private $prixlivr;

    /**
     *
     * @ORM\Column(name="dateCom", type="date")
     */
    private $dateCom;
    /**
     *
     * @ORM\Column(name="produit", type="string", length=255)
     */
    private $produit;
    /**
     * @OneToOne(targetEntity="livraison")
     * @JoinColumn(name="livraison_id", referencedColumnName="id")
     */
    private $shipment;




    private $livraison;

    /**
     * @return mixed
     */
    public function getPrixlivr()
    {
        return $this->prixlivr;
    }

    /**
     * @param mixed $prixlivr
     */
    public function setPrixlivr($prixlivr)
    {
        $this->prixlivr = $prixlivr;
    }

    /**
     * @return mixed
     */
    public function getDateCom()
    {
        return $this->dateCom;
    }

    /**
     * @param mixed $dateCom
     */
    public function setDateCom($dateCom)
    {
        $this->dateCom = $dateCom;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

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
     * Set prixTotale
     *
     * @param string $prixTotale
     *
     * @return Commande
     */
    public function setPrixTotale($prixTotale)
    {
        $this->prixTotale = $prixTotale;

        return $this;
    }

    /**
     * Get prixTotale
     *
     * @return string
     */
    public function getPrixTotale()
    {
        return $this->prixTotale;
    }

    /**
     * @return mixed
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * @param mixed $livraison
     */
    public function setLivraison($livraison)
    {
        $this->livraison = $livraison;
    }

}

