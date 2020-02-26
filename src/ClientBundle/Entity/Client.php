<?php


namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */

    protected $nom;
    /**
     * Many Users have Many Groups.
     * @ManyToMany(targetEntity="CommandeBundle\Entity\Commande", inversedBy="client")
     * @JoinTable(name="clients_commandes")
     */
    protected $commande;
    /**
     * @ORM\Column(type="string")
     */
    protected $prenom;
    /**
     * @ORM\Column(type="string")
     */

    protected $adresse ;

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function __construct()
    {
        parent::__construct();
        $this->commande = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $commande
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;
    }





}