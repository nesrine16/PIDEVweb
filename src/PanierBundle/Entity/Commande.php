<?php

namespace PanierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="PanierBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer")
     * @ORM\Id
     */
    private $idCommande;



    /**
     * @var string
     *
     * @ORM\Column(name="num_commande", type="string", length=255)
     */
    private $numCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commande", type="date")
     */
    private $dateCommande;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison", type="date")
     */
    private $dateLivraison;


    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;
    /**
     * @var float
     *
     * @ORM\Column(name="tht", type="float")
     */
    private $tht;
    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float")
     */
    private $tva;

    /**
     * @return float
     */
    public function getTht()
    {
        return $this->tht;
    }

    /**
     * @param float $tht
     */
    public function setTht($tht)
    {
        $this->tht = $tht;
    }

    /**
     * @return float
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param float $tva
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    }

    /**
     * @return float
     */
    public function getTtc()
    {
        return $this->ttc;
    }

    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }

    /**
     * @param mixed $Utilisateur
     */
    public function setUtilisateur($Utilisateur)
    {
        $this->Utilisateur = $Utilisateur;
    }

    /**
     * @param float $ttc
     */
    public function setTtc($ttc)
    {
        $this->ttc = $ttc;
    }

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
    /**
     * @var float
     *
     * @ORM\Column(name="ttc", type="float")
     */
    private $ttc;



    /**
     * @ORM\ManyToOne(targetEntity="PanierBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(name="id_utilisateur",referencedColumnName="id")
     */
    private $Utilisateur;
    /**
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * @param \DateTime $dateLivraison
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;
    }


    /**
     * Set idCommande
     *
     * @param integer $idCommande
     *
     * @return Commande
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     * @return int
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set numCommande
     *
     * @param string $numCommande
     *
     * @return Commande
     */
    public function setNumCommande($numCommande)
    {
        $this->numCommande = $numCommande;

        return $this;
    }

    /**
     * Get numCommande
     *
     * @return string
     */
    public function getNumCommande()
    {
        return $this->numCommande;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Commande
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Commande
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

