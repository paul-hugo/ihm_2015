<?php

namespace LocIHM\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LocIHM\LocationBundle\Entity\PersonneRepository")
 */
class Personne
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=255)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=255)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="CBnum", type="text")
     */
    private $cBnum;

    /**
     * @var string
     *
     * @ORM\Column(name="CBdateExp", type="text")
     */
    private $cBdateExp;

    /**
     * @var string
     *
     * @ORM\Column(name="CBCrypto", type="text")
     */
    private $cBCrypto;

    /**
     * @var integer
     *
     * @ORM\Column(name="pts_fidelite", type="integer")
     */
    private $ptsFidelite;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $mdp;

    /**
     * @ORM\OneToMany(targetEntity="LocIHM\LocationBundle\Entity\Contrat", mappedBy="personne")
     */
    private $contrats;



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
     * @return Personne
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
     * Set prenom
     *
     * @param string $prenom
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Personne
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Personne
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
     * Set tel1
     *
     * @param string $tel1
     * @return Personne
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string 
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     * @return Personne
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string 
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Personne
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cBnum
     *
     * @param string $cBnum
     * @return Personne
     */
    public function setCBnum($cBnum)
    {
        $this->cBnum = $cBnum;

        return $this;
    }

    /**
     * Get cBnum
     *
     * @return string 
     */
    public function getCBnum()
    {
        return $this->cBnum;
    }

    /**
     * Set cBdateExp
     *
     * @param string $cBdateExp
     * @return Personne
     */
    public function setCBdateExp($cBdateExp)
    {
        $this->cBdateExp = $cBdateExp;

        return $this;
    }

    /**
     * Get cBdateExp
     *
     * @return string 
     */
    public function getCBdateExp()
    {
        return $this->cBdateExp;
    }

    /**
     * Set cBCrypto
     *
     * @param string $cBCrypto
     * @return Personne
     */
    public function setCBCrypto($cBCrypto)
    {
        $this->cBCrypto = $cBCrypto;

        return $this;
    }

    /**
     * Get cBCrypto
     *
     * @return string 
     */
    public function getCBCrypto()
    {
        return $this->cBCrypto;
    }

    /**
     * Set ptsFidelite
     *
     * @param integer $ptsFidelite
     * @return Personne
     */
    public function setPtsFidelite($ptsFidelite)
    {
        $this->ptsFidelite = $ptsFidelite;

        return $this;
    }

    /**
     * Get ptsFidelite
     *
     * @return integer 
     */
    public function getPtsFidelite()
    {
        return $this->ptsFidelite;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Personne
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contrats = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contrats
     *
     * @param \LocIHM\LocationBundle\Entity\Contrat $contrats
     * @return Personne
     */
    public function addContrat(\LocIHM\LocationBundle\Entity\Contrat $contrat)
    {
        $this->contrats[] = $contrat;

        $contrat->setPersonne($this);

        return $this;
    }

    /**
     * Remove contrats
     *
     * @param \LocIHM\LocationBundle\Entity\Contrat $contrats
     */
    public function removeContrat(\LocIHM\LocationBundle\Entity\Contrat $contrat)
    {
        $this->contrats->removeElement($contrat);
    }

    /**
     * Get contrats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContrats()
    {
        return $this->contrats;
    }
}
