<?php

namespace PanierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="PanierBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var string
     *
     * @ORM\Column(name="ref_article", type="string")
     * @ORM\Id
     */
    private $refArticle;



    /**
     * @var int
     *
     * @ORM\Column(name="code", type="integer")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_vente", type="float")
     */
    private $prixVente;

    /**
     * @var int
     *
     * @ORM\Column(name="seuil_max", type="integer")
     */
    private $seuilMax;

    /**
     * @var int
     *
     * @ORM\Column(name="seuil_min", type="integer")
     */
    private $seuilMin;


    /**
     * @ORM\ManyToOne(targetEntity="PanierBundle\Entity\Famille")
     * @ORM\JoinColumn(name="id_famille",referencedColumnName="codeFamille")
     */
    private $Famille;
    /**
     * Set refArticle
     *
     * @param string $refArticle
     *
     * @return Article
     */
    public function setRefArticle($refArticle)
    {
        $this->refArticle = $refArticle;

        return $this;
    }

    /**
     * Get refArticle
     *
     * @return string
     */
    public function getRefArticle()
    {
        return $this->refArticle;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return Article
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Article
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set prixVente
     *
     * @param float $prixVente
     *
     * @return Article
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    /**
     * Get prixVente
     *
     * @return float
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * Set seuilMax
     *
     * @param integer $seuilMax
     *
     * @return Article
     */
    public function setSeuilMax($seuilMax)
    {
        $this->seuilMax = $seuilMax;

        return $this;
    }

    /**
     * Get seuilMax
     *
     * @return int
     */
    public function getSeuilMax()
    {
        return $this->seuilMax;
    }

    /**
     * Set seuilMin
     *
     * @param integer $seuilMin
     *
     * @return Article
     */
    public function setSeuilMin($seuilMin)
    {
        $this->seuilMin = $seuilMin;

        return $this;
    }

    /**
     * Get seuilMin
     *
     * @return int
     */
    public function getSeuilMin()
    {
        return $this->seuilMin;
    }
}

