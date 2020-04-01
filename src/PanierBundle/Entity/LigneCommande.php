<?php

namespace PanierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table(name="ligne_commande")
 * @ORM\Entity(repositoryClass="PanierBundle\Repository\LigneCommandeRepository")
 */
class LigneCommande
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
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;

    /**
     * @var float
     *
     * @ORM\Column(name="pu", type="float")
     */
    private $pu;

    /**
     * @var int
     *
     * @ORM\Column(name="tva", type="integer")
     */
    private $tva;

    /**
     * @return mixed
     */
    public function getCommande()
    {
        return $this->Commande;
    }

    /**
     * @param mixed $Commande
     */
    public function setCommande($Commande)
    {
        $this->Commande = $Commande;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->Article;
    }

    /**
     * @param mixed $Article
     */
    public function setArticle($Article)
    {
        $this->Article = $Article;
    }


    /**
     * @ORM\ManyToOne(targetEntity="PanierBundle\Entity\Commande")
     * @ORM\JoinColumn(name="id_commande",referencedColumnName="id_commande")
     */
    private $Commande;
    /**
     * @ORM\ManyToOne(targetEntity="PanierBundle\Entity\Article")
     * @ORM\JoinColumn(name="id_article",referencedColumnName="ref_article")
     */
    private $Article;


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
     * Set qte
     *
     * @param integer $qte
     *
     * @return LigneCommande
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return int
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set pu
     *
     * @param float $pu
     *
     * @return LigneCommande
     */
    public function setPu($pu)
    {
        $this->pu = $pu;

        return $this;
    }

    /**
     * Get pu
     *
     * @return float
     */
    public function getPu()
    {
        return $this->pu;
    }

    /**
     * Set tva
     *
     * @param integer $tva
     *
     * @return LigneCommande
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return int
     */
    public function getTva()
    {
        return $this->tva;
    }
}

