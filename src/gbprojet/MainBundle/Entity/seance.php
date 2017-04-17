<?php

namespace gbprojet\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * seance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gbprojet\MainBundle\Entity\seanceRepository")
 */
class seance
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
     *
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\typeseance")
     * @ORM\JoinColumn(nullable=False)
     */
    private $typeseance;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\niveau")
     * @ORM\JoinColumn(nullable=False)
     */
    private $niveau;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\ecue")
     * @ORM\JoinColumn(nullable=False)
     */
    private $ecue;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\enseignant")
     * @ORM\JoinColumn(nullable=False)
     */
    private $enseignant;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\salle")
     * @ORM\JoinColumn(nullable=False)
     */
    private $salle;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="gbprojet\MainBundle\Entity\sp")
     * @ORM\JoinColumn(nullable=False)
     */
    private $sp;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateseance", type="date")
     */
    private $dateseance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heuredebut", type="time")
     */
    private $heuredebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heurefin", type="time")
     */
    private $heurefin;

    /**
     * @var string
     *
     * @ORM\Column(name="prescription", type="text")
     */
    private $prescription;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return seance
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set dateseance
     *
     * @param \DateTime $dateseance
     *
     * @return seance
     */
    public function setDateseance($dateseance)
    {
        $this->dateseance = $dateseance;

        return $this;
    }

    /**
     * Get dateseance
     *
     * @return \DateTime
     */
    public function getDateseance()
    {
        return $this->dateseance;
    }

    /**
     * Set heuredebut
     *
     * @param \DateTime $heuredebut
     *
     * @return seance
     */
    public function setHeuredebut($heuredebut)
    {
        $this->heuredebut = $heuredebut;

        return $this;
    }

    /**
     * Get heuredebut
     *
     * @return \DateTime
     */
    public function getHeuredebut()
    {
        return $this->heuredebut;
    }

    /**
     * Set heurefin
     *
     * @param \DateTime $heurefin
     *
     * @return seance
     */
    public function setHeurefin($heurefin)
    {
        $this->heurefin = $heurefin;

        return $this;
    }

    /**
     * Get heurefin
     *
     * @return \DateTime
     */
    public function getHeurefin()
    {
        return $this->heurefin;
    }

    /**
     * Set prescription
     *
     * @param string $prescription
     *
     * @return seance
     */
    public function setPrescription($prescription)
    {
        $this->prescription = $prescription;

        return $this;
    }

    /**
     * Get prescription
     *
     * @return string
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * Set typeseance
     *
     * @param \gbprojet\MainBundle\Entity\typeseance $typeseance
     *
     * @return seance
     */
    public function setTypeseance(\gbprojet\MainBundle\Entity\typeseance $typeseance)
    {
        $this->typeseance = $typeseance;

        return $this;
    }

    /**
     * Get typeseance
     *
     * @return \gbprojet\MainBundle\Entity\typeseance
     */
    public function getTypeseance()
    {
        return $this->typeseance;
    }

    /**
     * Set niveau
     *
     * @param \gbprojet\MainBundle\Entity\niveau $niveau
     *
     * @return seance
     */
    public function setNiveau(\gbprojet\MainBundle\Entity\niveau $niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return \gbprojet\MainBundle\Entity\niveau
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set ecue
     *
     * @param \gbprojet\MainBundle\Entity\ecue $ecue
     *
     * @return seance
     */
    public function setEcue(\gbprojet\MainBundle\Entity\ecue $ecue)
    {
        $this->ecue = $ecue;

        return $this;
    }

    /**
     * Get ecue
     *
     * @return \gbprojet\MainBundle\Entity\ecue
     */
    public function getEcue()
    {
        return $this->ecue;
    }

    /**
     * Set enseignant
     *
     * @param \gbprojet\MainBundle\Entity\enseignant $enseignant
     *
     * @return seance
     */
    public function setEnseignant(\gbprojet\MainBundle\Entity\enseignant $enseignant)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \gbprojet\MainBundle\Entity\enseignant
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set salle
     *
     * @param \gbprojet\MainBundle\Entity\salle $salle
     *
     * @return seance
     */
    public function setSalle(\gbprojet\MainBundle\Entity\salle $salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \gbprojet\MainBundle\Entity\salle
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set sp
     *
     * @param \gbprojet\MainBundle\Entity\sp $sp
     *
     * @return seance
     */
    public function setSp(\gbprojet\MainBundle\Entity\sp $sp)
    {
        $this->sp = $sp;

        return $this;
    }

    /**
     * Get sp
     *
     * @return \gbprojet\MainBundle\Entity\sp
     */
    public function getSp()
    {
        return $this->sp;
    }
}
