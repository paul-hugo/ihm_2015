<?php

namespace LocIHM\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LocIHM\LocationBundle\Entity\AgenceRepository")
 */
class Agence
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="coordonnees", type="string", length=255, nullable=true)
     */
    private $coordonnees;

    /**
     * @ORM\OneToMany(targetEntity="LocIHM\LocationBundle\Entity\User", mappedBy="agence")
     */
    private $users;


    /**
    * Constructor
    */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Agence
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Agence
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set coordonnees
     *
     * @param string $coordonnees
     * @return Agence
     */
    public function setCoordonnees($coordonnees)
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    /**
     * Get coordonnees
     *
     * @return string 
     */
    public function getCoordonnees()
    {
        return $this->coordonnees;
    }

    /**
     * Add users
     *
     * @param \LocIHM\LocationBundle\Entity\User $users
     * @return Agence
     */
    public function addUser(\LocIHM\LocationBundle\Entity\User $user)
    {
        $this->users[] = $user;
        $user->setAgence($this);

        return $this;
    }

    /**
     * Remove users
     *
     * @param \LocIHM\LocationBundle\Entity\User $users
     */
    public function removeUser(\LocIHM\LocationBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
