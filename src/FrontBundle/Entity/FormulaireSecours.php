<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormulaireSecours
 *
 * @ORM\Table(name="formulaire_secours")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\FormulaireSecoursRepository")
 */
class FormulaireSecours
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
     * @ORM\Column(name="nomManif", type="string", length=255, nullable=true)
     */
    private $nomManif;

    /**
     * @var string
     *
     * @ORM\Column(name="presentationManif", type="text", nullable=true)
     */
    private $presentationManif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutManif", type="date", nullable=true)
     */
    private $dateDebutManif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinManif", type="date", nullable=true)
     */
    private $dateFinManif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutManif", type="time", nullable=true)
     */
    private $heureDebutManif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinManif", type="time", nullable=true)
     */
    private $heureFinManif;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseManif", type="string", length=255, nullable=true)
     */
    private $adresseManif;

    /**
     * @var string
     *
     * @ORM\Column(name="villeManif", type="string", length=255, nullable=true)
     */
    private $villeManif;

    /**
     * @var string
     *
     * @ORM\Column(name="pompiersLieu", type="string", length=255, nullable=true)
     */
    private $pompiersLieu;

    /**
     * @var string
     *
     * @ORM\Column(name="urgencesLieu", type="string", length=255, nullable=true)
     */
    private $urgencesLieu;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonSociale", type="string", length=255, nullable=true)
     */
    private $raisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRep", type="string", length=255, nullable=true)
     */
    private $nomRep;

    /**
     * @var int
     *
     * @ORM\Column(name="telRep", type="integer", nullable=true)
     */
    private $telRep;

    /**
     * @var string
     *
     * @ORM\Column(name="mailRep", type="string", length=255, nullable=true)
     */
    private $mailRep;

    /**
     * @var string
     *
     * @ORM\Column(name="nomChef", type="string", length=255, nullable=true)
     */
    private $nomChef;

    /**
     * @var int
     *
     * @ORM\Column(name="telChef", type="integer", nullable=true)
     */
    private $telChef;

    /**
     * @var string
     *
     * @ORM\Column(name="mailChef", type="string", length=255, nullable=true)
     */
    private $mailChef;

    /**
     * @var string
     *
     * @ORM\Column(name="siteWeb", type="string", length=255, nullable=true)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="typeManif", type="string", length=255, nullable=true)
     */
    private $typeManif;

    /**
     * @var string
     *
     * @ORM\Column(name="federation", type="string", length=255, nullable=true)
     */
    private $federation;

    /**
     * @var string
     *
     * @ORM\Column(name="regleFed", type="string", length=255, nullable=true)
     */
    private $regleFed;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSportifs", type="integer", nullable=true)
     */
    private $nbSportifs;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPublicInsta", type="integer", nullable=true)
     */
    private $nbPublicInsta;

    /**
     * @var string
     *
     * @ORM\Column(name="licenceSportif", type="string", length=255, nullable=true)
     */
    private $licenceSportif;

    /**
     * @var string
     *
     * @ORM\Column(name="certifMedical", type="string", length=255, nullable=true)
     */
    private $certifMedical;

    /**
     * @var string
     *
     * @ORM\Column(name="typeEvtSportif", type="string", length=255, nullable=true)
     */
    private $typeEvtSportif;

    /**
     * @var string
     *
     * @ORM\Column(name="typeCourse", type="string", length=255, nullable=true)
     */
    private $typeCourse;

    /**
     * @var int
     *
     * @ORM\Column(name="distParcours1", type="integer", nullable=true)
     */
    private $distParcours1;

    /**
     * @var int
     *
     * @ORM\Column(name="distParcours2", type="integer", nullable=true)
     */
    private $distParcours2;

    /**
     * @var string
     *
     * @ORM\Column(name="obstacles", type="string", length=255, nullable=true)
     */
    private $obstacles;

    /**
     * @var string
     *
     * @ORM\Column(name="signaleur", type="string", length=255, nullable=true)
     */
    private $signaleur;

    /**
     * @var string
     *
     * @ORM\Column(name="typePiste", type="string", length=255, nullable=true)
     */
    private $typePiste;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="typeSportCo", type="string", length=255, nullable=true)
     */
    private $typeSportCo;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauCompet", type="string", length=255, nullable=true)
     */
    private $niveauCompet;

    /**
     * @var int
     *
     * @ORM\Column(name="nbTerrains", type="integer", nullable=true)
     */
    private $nbTerrains;

    /**
     * @var string
     *
     * @ORM\Column(name="catSportif", type="string", length=255, nullable=true)
     */
    private $catSportif;

    /**
     * @var string
     *
     * @ORM\Column(name="typeSportIndiv", type="string", length=255, nullable=true)
     */
    private $typeSportIndiv;

    /**
     * @var string
     *
     * @ORM\Column(name="typeSportMeca", type="string", length=255, nullable=true)
     */
    private $typeSportMeca;

    /**
     * @var string
     *
     * @ORM\Column(name="commissaire", type="string", length=255, nullable=true)
     */
    private $commissaire;

    /**
     * @var string
     *
     * @ORM\Column(name="protection", type="string", length=255, nullable=true)
     */
    private $protection;

    /**
     * @var string
     *
     * @ORM\Column(name="typeSportAqua", type="string", length=255, nullable=true)
     */
    private $typeSportAqua;

    /**
     * @var string
     *
     * @ORM\Column(name="dispositifSecu", type="string", length=255, nullable=true)
     */
    private $dispositifSecu;

    /**
     * @var string
     *
     * @ORM\Column(name="typePlanEau", type="string", length=255, nullable=true)
     */
    private $typePlanEau;

    /**
     * @var string
     *
     * @ORM\Column(name="typeSportEquestre", type="string", length=255, nullable=true)
     */
    private $typeSportEquestre;

    /**
     * @var string
     *
     * @ORM\Column(name="typeSportAutre", type="string", length=255, nullable=true)
     */
    private $typeSportAutre;

    /**
     * @var int
     *
     * @ORM\Column(name="ageSportif", type="integer", nullable=true)
     */
    private $ageSportif;

    /**
     * @var string
     *
     * @ORM\Column(name="typeEvtCulturel", type="string", length=255, nullable=true)
     */
    private $typeEvtCulturel;

    /**
     * @var string
     *
     * @ORM\Column(name="prixEvt", type="string", length=255, nullable=true)
     */
    private $prixEvt;

    /**
     * @var string
     *
     * @ORM\Column(name="evtIntExt", type="string", length=255, nullable=true)
     */
    private $evtIntExt;

    /**
     * @var string
     *
     * @ORM\Column(name="typeSalle", type="string", length=255, nullable=true)
     */
    private $typeSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="typeSite", type="string", length=255, nullable=true)
     */
    private $typeSite;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPersoTotal", type="integer", nullable=true)
     */
    private $nbPersoTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="typeSiege", type="string", length=255, nullable=true)
     */
    private $typeSiege;

    /**
     * @var string
     *
     * @ORM\Column(name="typePublic", type="string", length=255, nullable=true)
     */
    private $typePublic;

    /**
     * @var int
     *
     * @ORM\Column(name="capaciteSite", type="integer", nullable=true)
     */
    private $capaciteSite;

    /**
     * @var int
     *
     * @ORM\Column(name="superficieSite", type="integer", nullable=true)
     */
    private $superficieSite;

    /**
     * @var int
     *
     * @ORM\Column(name="nbAcces", type="integer", nullable=true)
     */
    private $nbAcces;

    /**
     * @var int
     *
     * @ORM\Column(name="nbScene", type="integer", nullable=true)
     */
    private $nbScene;

    /**
     * @var string
     *
     * @ORM\Column(name="simulScene", type="string", length=255, nullable=true)
     */
    private $simulScene;

    /**
     * @var string
     *
     * @ORM\Column(name="amenagTemp", type="string", length=255, nullable=true)
     */
    private $amenagTemp;

    /**
     * @var string
     *
     * @ORM\Column(name="typeRdP", type="string", length=255, nullable=true)
     */
    private $typeRdP;

    /**
     * @var string
     *
     * @ORM\Column(name="animation", type="string", length=255, nullable=true)
     */
    private $animation;

    /**
     * @var string
     *
     * @ORM\Column(name="mvtPublic", type="string", length=255, nullable=true)
     */
    private $mvtPublic;

    /**
     * @var string
     *
     * @ORM\Column(name="medecin", type="string", length=255, nullable=true)
     */
    private $medecin;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMed", type="string", length=255, nullable=true)
     */
    private $nomMed;

    /**
     * @var string
     *
     * @ORM\Column(name="speMed", type="string", length=255, nullable=true)
     */
    private $speMed;

    /**
     * @var string
     *
     * @ORM\Column(name="contactMed", type="string", length=255, nullable=true)
     */
    private $contactMed;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomMed", type="string", length=255, nullable=true)
     */
    private $prenomMed;

    /**
     * @var string
     *
     * @ORM\Column(name="pieceSecours", type="string", length=255, nullable=true)
     */
    private $pieceSecours;

    /**
     * @var string
     *
     * @ORM\Column(name="repasSecours", type="string", length=255, nullable=true)
     */
    private $repasSecours;

    /**
     * @var string
     *
     * @ORM\Column(name="prestaMed", type="string", length=255, nullable=true)
     */
    private $prestaMed;

    /**
     * @var string
     *
     * @ORM\Column(name="telSite", type="string", length=255, nullable=true)
     */
    private $telSite;

    /**
     * @var string
     *
     * @ORM\Column(name="communicationSecours", type="string", length=255, nullable=true)
     */
    private $communicationSecours;

    /**
     * @var string
     *
     * @ORM\Column(name="autresSecours", type="string", length=255, nullable=true)
     */
    private $autresSecours;

    /**
     * @var string
     *
     * @ORM\Column(name="infosCompl", type="text", nullable=true)
     */
    private $infosCompl;


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
     * Set nomManif
     *
     * @param string $nomManif
     * @return FormulaireSecours
     */
    public function setNomManif($nomManif)
    {
        $this->nomManif = $nomManif;

        return $this;
    }

    /**
     * Get nomManif
     *
     * @return string 
     */
    public function getNomManif()
    {
        return $this->nomManif;
    }

    /**
     * Set presentationManif
     *
     * @param string $presentationManif
     * @return FormulaireSecours
     */
    public function setPresentationManif($presentationManif)
    {
        $this->presentationManif = $presentationManif;

        return $this;
    }

    /**
     * Get presentationManif
     *
     * @return string 
     */
    public function getPresentationManif()
    {
        return $this->presentationManif;
    }

    /**
     * Set dateDebutManif
     *
     * @param \DateTime $dateDebutManif
     * @return FormulaireSecours
     */
    public function setDateDebutManif($dateDebutManif)
    {
        $this->dateDebutManif = $dateDebutManif;

        return $this;
    }

    /**
     * Get dateDebutManif
     *
     * @return \DateTime 
     */
    public function getDateDebutManif()
    {
        return $this->dateDebutManif;
    }

    /**
     * Set dateFinManif
     *
     * @param \DateTime $dateFinManif
     * @return FormulaireSecours
     */
    public function setDateFinManif($dateFinManif)
    {
        $this->dateFinManif = $dateFinManif;

        return $this;
    }

    /**
     * Get dateFinManif
     *
     * @return \DateTime 
     */
    public function getDateFinManif()
    {
        return $this->dateFinManif;
    }

    /**
     * Set heureDebutManif
     *
     * @param \DateTime $heureDebutManif
     * @return FormulaireSecours
     */
    public function setHeureDebutManif($heureDebutManif)
    {
        $this->heureDebutManif = $heureDebutManif;

        return $this;
    }

    /**
     * Get heureDebutManif
     *
     * @return \DateTime 
     */
    public function getHeureDebutManif()
    {
        return $this->heureDebutManif;
    }

    /**
     * Set heureFinManif
     *
     * @param \DateTime $heureFinManif
     * @return FormulaireSecours
     */
    public function setHeureFinManif($heureFinManif)
    {
        $this->heureFinManif = $heureFinManif;

        return $this;
    }

    /**
     * Get heureFinManif
     *
     * @return \DateTime 
     */
    public function getHeureFinManif()
    {
        return $this->heureFinManif;
    }

    /**
     * Set adresseManif
     *
     * @param string $adresseManif
     * @return FormulaireSecours
     */
    public function setAdresseManif($adresseManif)
    {
        $this->adresseManif = $adresseManif;

        return $this;
    }

    /**
     * Get adresseManif
     *
     * @return string 
     */
    public function getAdresseManif()
    {
        return $this->adresseManif;
    }

    /**
     * Set villeManif
     *
     * @param string $villeManif
     * @return FormulaireSecours
     */
    public function setVilleManif($villeManif)
    {
        $this->villeManif = $villeManif;

        return $this;
    }

    /**
     * Get villeManif
     *
     * @return string 
     */
    public function getVilleManif()
    {
        return $this->villeManif;
    }

    /**
     * Set pompiersLieu
     *
     * @param string $pompiersLieu
     * @return FormulaireSecours
     */
    public function setPompiersLieu($pompiersLieu)
    {
        $this->pompiersLieu = $pompiersLieu;

        return $this;
    }

    /**
     * Get pompiersLieu
     *
     * @return string 
     */
    public function getPompiersLieu()
    {
        return $this->pompiersLieu;
    }

    /**
     * Set urgencesLieu
     *
     * @param string $urgencesLieu
     * @return FormulaireSecours
     */
    public function setUrgencesLieu($urgencesLieu)
    {
        $this->urgencesLieu = $urgencesLieu;

        return $this;
    }

    /**
     * Get urgencesLieu
     *
     * @return string 
     */
    public function getUrgencesLieu()
    {
        return $this->urgencesLieu;
    }

    /**
     * Set raisonSociale
     *
     * @param string $raisonSociale
     * @return FormulaireSecours
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string 
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set nomRep
     *
     * @param string $nomRep
     * @return FormulaireSecours
     */
    public function setNomRep($nomRep)
    {
        $this->nomRep = $nomRep;

        return $this;
    }

    /**
     * Get nomRep
     *
     * @return string 
     */
    public function getNomRep()
    {
        return $this->nomRep;
    }

    /**
     * Set telRep
     *
     * @param integer $telRep
     * @return FormulaireSecours
     */
    public function setTelRep($telRep)
    {
        $this->telRep = $telRep;

        return $this;
    }

    /**
     * Get telRep
     *
     * @return integer 
     */
    public function getTelRep()
    {
        return $this->telRep;
    }

    /**
     * Set mailRep
     *
     * @param string $mailRep
     * @return FormulaireSecours
     */
    public function setMailRep($mailRep)
    {
        $this->mailRep = $mailRep;

        return $this;
    }

    /**
     * Get mailRep
     *
     * @return string 
     */
    public function getMailRep()
    {
        return $this->mailRep;
    }

    /**
     * Set nomChef
     *
     * @param string $nomChef
     * @return FormulaireSecours
     */
    public function setNomChef($nomChef)
    {
        $this->nomChef = $nomChef;

        return $this;
    }

    /**
     * Get nomChef
     *
     * @return string 
     */
    public function getNomChef()
    {
        return $this->nomChef;
    }

    /**
     * Set telChef
     *
     * @param integer $telChef
     * @return FormulaireSecours
     */
    public function setTelChef($telChef)
    {
        $this->telChef = $telChef;

        return $this;
    }

    /**
     * Get telChef
     *
     * @return integer 
     */
    public function getTelChef()
    {
        return $this->telChef;
    }

    /**
     * Set mailChef
     *
     * @param string $mailChef
     * @return FormulaireSecours
     */
    public function setMailChef($mailChef)
    {
        $this->mailChef = $mailChef;

        return $this;
    }

    /**
     * Get mailChef
     *
     * @return string 
     */
    public function getMailChef()
    {
        return $this->mailChef;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return FormulaireSecours
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string 
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set typeManif
     *
     * @param string $typeManif
     * @return FormulaireSecours
     */
    public function setTypeManif($typeManif)
    {
        $this->typeManif = $typeManif;

        return $this;
    }

    /**
     * Get typeManif
     *
     * @return string 
     */
    public function getTypeManif()
    {
        return $this->typeManif;
    }

    /**
     * Set federation
     *
     * @param string $federation
     * @return FormulaireSecours
     */
    public function setFederation($federation)
    {
        $this->federation = $federation;

        return $this;
    }

    /**
     * Get federation
     *
     * @return string 
     */
    public function getFederation()
    {
        return $this->federation;
    }

    /**
     * Set regleFed
     *
     * @param string $regleFed
     * @return FormulaireSecours
     */
    public function setRegleFed($regleFed)
    {
        $this->regleFed = $regleFed;

        return $this;
    }

    /**
     * Get regleFed
     *
     * @return string 
     */
    public function getRegleFed()
    {
        return $this->regleFed;
    }

    /**
     * Set nbSportifs
     *
     * @param integer $nbSportifs
     * @return FormulaireSecours
     */
    public function setNbSportifs($nbSportifs)
    {
        $this->nbSportifs = $nbSportifs;

        return $this;
    }

    /**
     * Get nbSportifs
     *
     * @return integer 
     */
    public function getNbSportifs()
    {
        return $this->nbSportifs;
    }

    /**
     * Set nbPublicInsta
     *
     * @param integer $nbPublicInsta
     * @return FormulaireSecours
     */
    public function setNbPublicInsta($nbPublicInsta)
    {
        $this->nbPublicInsta = $nbPublicInsta;

        return $this;
    }

    /**
     * Get nbPublicInsta
     *
     * @return integer 
     */
    public function getNbPublicInsta()
    {
        return $this->nbPublicInsta;
    }

    /**
     * Set licenceSportif
     *
     * @param string $licenceSportif
     * @return FormulaireSecours
     */
    public function setLicenceSportif($licenceSportif)
    {
        $this->licenceSportif = $licenceSportif;

        return $this;
    }

    /**
     * Get licenceSportif
     *
     * @return string 
     */
    public function getLicenceSportif()
    {
        return $this->licenceSportif;
    }

    /**
     * Set certifMedical
     *
     * @param string $certifMedical
     * @return FormulaireSecours
     */
    public function setCertifMedical($certifMedical)
    {
        $this->certifMedical = $certifMedical;

        return $this;
    }

    /**
     * Get certifMedical
     *
     * @return string 
     */
    public function getCertifMedical()
    {
        return $this->certifMedical;
    }

    /**
     * Set typeEvtSportif
     *
     * @param string $typeEvtSportif
     * @return FormulaireSecours
     */
    public function setTypeEvtSportif($typeEvtSportif)
    {
        $this->typeEvtSportif = $typeEvtSportif;

        return $this;
    }

    /**
     * Get typeEvtSportif
     *
     * @return string 
     */
    public function getTypeEvtSportif()
    {
        return $this->typeEvtSportif;
    }

    /**
     * Set typeCourse
     *
     * @param string $typeCourse
     * @return FormulaireSecours
     */
    public function setTypeCourse($typeCourse)
    {
        $this->typeCourse = $typeCourse;

        return $this;
    }

    /**
     * Get typeCourse
     *
     * @return string 
     */
    public function getTypeCourse()
    {
        return $this->typeCourse;
    }

    /**
     * Set distParcours1
     *
     * @param integer $distParcours1
     * @return FormulaireSecours
     */
    public function setDistParcours1($distParcours1)
    {
        $this->distParcours1 = $distParcours1;

        return $this;
    }

    /**
     * Get distParcours1
     *
     * @return integer 
     */
    public function getDistParcours1()
    {
        return $this->distParcours1;
    }

    /**
     * Set distParcours2
     *
     * @param integer $distParcours2
     * @return FormulaireSecours
     */
    public function setDistParcours2($distParcours2)
    {
        $this->distParcours2 = $distParcours2;

        return $this;
    }

    /**
     * Get distParcours2
     *
     * @return integer 
     */
    public function getDistParcours2()
    {
        return $this->distParcours2;
    }

    /**
     * Set obstacles
     *
     * @param string $obstacles
     * @return FormulaireSecours
     */
    public function setObstacles($obstacles)
    {
        $this->obstacles = $obstacles;

        return $this;
    }

    /**
     * Get obstacles
     *
     * @return string 
     */
    public function getObstacles()
    {
        return $this->obstacles;
    }

    /**
     * Set signaleur
     *
     * @param string $signaleur
     * @return FormulaireSecours
     */
    public function setSignaleur($signaleur)
    {
        $this->signaleur = $signaleur;

        return $this;
    }

    /**
     * Get signaleur
     *
     * @return string 
     */
    public function getSignaleur()
    {
        return $this->signaleur;
    }

    /**
     * Set typePiste
     *
     * @param string $typePiste
     * @return FormulaireSecours
     */
    public function setTypePiste($typePiste)
    {
        $this->typePiste = $typePiste;

        return $this;
    }

    /**
     * Get typePiste
     *
     * @return string 
     */
    public function getTypePiste()
    {
        return $this->typePiste;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return FormulaireSecours
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set typeSportCo
     *
     * @param string $typeSportCo
     * @return FormulaireSecours
     */
    public function setTypeSportCo($typeSportCo)
    {
        $this->typeSportCo = $typeSportCo;

        return $this;
    }

    /**
     * Get typeSportCo
     *
     * @return string 
     */
    public function getTypeSportCo()
    {
        return $this->typeSportCo;
    }

    /**
     * Set niveauCompet
     *
     * @param string $niveauCompet
     * @return FormulaireSecours
     */
    public function setNiveauCompet($niveauCompet)
    {
        $this->niveauCompet = $niveauCompet;

        return $this;
    }

    /**
     * Get niveauCompet
     *
     * @return string 
     */
    public function getNiveauCompet()
    {
        return $this->niveauCompet;
    }

    /**
     * Set nbTerrains
     *
     * @param integer $nbTerrains
     * @return FormulaireSecours
     */
    public function setNbTerrains($nbTerrains)
    {
        $this->nbTerrains = $nbTerrains;

        return $this;
    }

    /**
     * Get nbTerrains
     *
     * @return integer 
     */
    public function getNbTerrains()
    {
        return $this->nbTerrains;
    }

    /**
     * Set catSportif
     *
     * @param string $catSportif
     * @return FormulaireSecours
     */
    public function setCatSportif($catSportif)
    {
        $this->catSportif = $catSportif;

        return $this;
    }

    /**
     * Get catSportif
     *
     * @return string 
     */
    public function getCatSportif()
    {
        return $this->catSportif;
    }

    /**
     * Set typeSportIndiv
     *
     * @param string $typeSportIndiv
     * @return FormulaireSecours
     */
    public function setTypeSportIndiv($typeSportIndiv)
    {
        $this->typeSportIndiv = $typeSportIndiv;

        return $this;
    }

    /**
     * Get typeSportIndiv
     *
     * @return string 
     */
    public function getTypeSportIndiv()
    {
        return $this->typeSportIndiv;
    }

    /**
     * Set typeSportMeca
     *
     * @param string $typeSportMeca
     * @return FormulaireSecours
     */
    public function setTypeSportMeca($typeSportMeca)
    {
        $this->typeSportMeca = $typeSportMeca;

        return $this;
    }

    /**
     * Get typeSportMeca
     *
     * @return string 
     */
    public function getTypeSportMeca()
    {
        return $this->typeSportMeca;
    }

    /**
     * Set commissaire
     *
     * @param string $commissaire
     * @return FormulaireSecours
     */
    public function setCommissaire($commissaire)
    {
        $this->commissaire = $commissaire;

        return $this;
    }

    /**
     * Get commissaire
     *
     * @return string 
     */
    public function getCommissaire()
    {
        return $this->commissaire;
    }

    /**
     * Set protection
     *
     * @param string $protection
     * @return FormulaireSecours
     */
    public function setProtection($protection)
    {
        $this->protection = $protection;

        return $this;
    }

    /**
     * Get protection
     *
     * @return string 
     */
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * Set typeSportAqua
     *
     * @param string $typeSportAqua
     * @return FormulaireSecours
     */
    public function setTypeSportAqua($typeSportAqua)
    {
        $this->typeSportAqua = $typeSportAqua;

        return $this;
    }

    /**
     * Get typeSportAqua
     *
     * @return string 
     */
    public function getTypeSportAqua()
    {
        return $this->typeSportAqua;
    }

    /**
     * Set dispositifSecu
     *
     * @param string $dispositifSecu
     * @return FormulaireSecours
     */
    public function setDispositifSecu($dispositifSecu)
    {
        $this->dispositifSecu = $dispositifSecu;

        return $this;
    }

    /**
     * Get dispositifSecu
     *
     * @return string 
     */
    public function getDispositifSecu()
    {
        return $this->dispositifSecu;
    }

    /**
     * Set typePlanEau
     *
     * @param string $typePlanEau
     * @return FormulaireSecours
     */
    public function setTypePlanEau($typePlanEau)
    {
        $this->typePlanEau = $typePlanEau;

        return $this;
    }

    /**
     * Get typePlanEau
     *
     * @return string 
     */
    public function getTypePlanEau()
    {
        return $this->typePlanEau;
    }

    /**
     * Set typeSportEquestre
     *
     * @param string $typeSportEquestre
     * @return FormulaireSecours
     */
    public function setTypeSportEquestre($typeSportEquestre)
    {
        $this->typeSportEquestre = $typeSportEquestre;

        return $this;
    }

    /**
     * Get typeSportEquestre
     *
     * @return string 
     */
    public function getTypeSportEquestre()
    {
        return $this->typeSportEquestre;
    }

    /**
     * Set typeSportAutre
     *
     * @param string $typeSportAutre
     * @return FormulaireSecours
     */
    public function setTypeSportAutre($typeSportAutre)
    {
        $this->typeSportAutre = $typeSportAutre;

        return $this;
    }

    /**
     * Get typeSportAutre
     *
     * @return string 
     */
    public function getTypeSportAutre()
    {
        return $this->typeSportAutre;
    }

    /**
     * Set ageSportif
     *
     * @param string $ageSportif
     * @return FormulaireSecours
     */
    public function setAgeSportif($ageSportif)
    {
        $this->ageSportif = $ageSportif;

        return $this;
    }

    /**
     * Get ageSportif
     *
     * @return integer
     */
    public function getAgeSportif()
    {
        return $this->ageSportif;
    }

    /**
     * Set typeEvtCulturel
     *
     * @param string $typeEvtCulturel
     * @return FormulaireSecours
     */
    public function setTypeEvtCulturel($typeEvtCulturel)
    {
        $this->typeEvtCulturel = $typeEvtCulturel;

        return $this;
    }

    /**
     * Get typeEvtCulturel
     *
     * @return string 
     */
    public function getTypeEvtCulturel()
    {
        return $this->typeEvtCulturel;
    }

    /**
     * Set prixEvt
     *
     * @param string $prixEvt
     * @return FormulaireSecours
     */
    public function setPrixEvt($prixEvt)
    {
        $this->prixEvt = $prixEvt;

        return $this;
    }

    /**
     * Get prixEvt
     *
     * @return string 
     */
    public function getPrixEvt()
    {
        return $this->prixEvt;
    }

    /**
     * Set evtIntExt
     *
     * @param string $evtIntExt
     * @return FormulaireSecours
     */
    public function setEvtIntExt($evtIntExt)
    {
        $this->evtIntExt = $evtIntExt;

        return $this;
    }

    /**
     * Get evtIntExt
     *
     * @return string 
     */
    public function getEvtIntExt()
    {
        return $this->evtIntExt;
    }

    /**
     * Set typeSalle
     *
     * @param string $typeSalle
     * @return FormulaireSecours
     */
    public function setTypeSalle($typeSalle)
    {
        $this->typeSalle = $typeSalle;

        return $this;
    }

    /**
     * Get typeSalle
     *
     * @return string 
     */
    public function getTypeSalle()
    {
        return $this->typeSalle;
    }

    /**
     * Set typeSite
     *
     * @param string $typeSite
     * @return FormulaireSecours
     */
    public function setTypeSite($typeSite)
    {
        $this->typeSite = $typeSite;

        return $this;
    }

    /**
     * Get typeSite
     *
     * @return string 
     */
    public function getTypeSite()
    {
        return $this->typeSite;
    }

    /**
     * Set nbPersoTotal
     *
     * @param integer $nbPersoTotal
     * @return FormulaireSecours
     */
    public function setNbPersoTotal($nbPersoTotal)
    {
        $this->nbPersoTotal = $nbPersoTotal;

        return $this;
    }

    /**
     * Get nbPersoTotal
     *
     * @return integer 
     */
    public function getNbPersoTotal()
    {
        return $this->nbPersoTotal;
    }

    /**
     * Set typeSiege
     *
     * @param string $typeSiege
     * @return FormulaireSecours
     */
    public function setTypeSiege($typeSiege)
    {
        $this->typeSiege = $typeSiege;

        return $this;
    }

    /**
     * Get typeSiege
     *
     * @return string 
     */
    public function getTypeSiege()
    {
        return $this->typeSiege;
    }

    /**
     * Set typePublic
     *
     * @param string $typePublic
     * @return FormulaireSecours
     */
    public function setTypePublic($typePublic)
    {
        $this->typePublic = $typePublic;

        return $this;
    }

    /**
     * Get typePublic
     *
     * @return string 
     */
    public function getTypePublic()
    {
        return $this->typePublic;
    }

    /**
     * Set capaciteSite
     *
     * @param integer $capaciteSite
     * @return FormulaireSecours
     */
    public function setCapaciteSite($capaciteSite)
    {
        $this->capaciteSite = $capaciteSite;

        return $this;
    }

    /**
     * Get capaciteSite
     *
     * @return integer 
     */
    public function getCapaciteSite()
    {
        return $this->capaciteSite;
    }

    /**
     * Set superficieSite
     *
     * @param integer $superficieSite
     * @return FormulaireSecours
     */
    public function setSuperficieSite($superficieSite)
    {
        $this->superficieSite = $superficieSite;

        return $this;
    }

    /**
     * Get superficieSite
     *
     * @return integer 
     */
    public function getSuperficieSite()
    {
        return $this->superficieSite;
    }

    /**
     * Set nbAcces
     *
     * @param integer $nbAcces
     * @return FormulaireSecours
     */
    public function setNbAcces($nbAcces)
    {
        $this->nbAcces = $nbAcces;

        return $this;
    }

    /**
     * Get nbAcces
     *
     * @return integer 
     */
    public function getNbAcces()
    {
        return $this->nbAcces;
    }

    /**
     * Set nbScene
     *
     * @param integer $nbScene
     * @return FormulaireSecours
     */
    public function setNbScene($nbScene)
    {
        $this->nbScene = $nbScene;

        return $this;
    }

    /**
     * Get nbScene
     *
     * @return integer 
     */
    public function getNbScene()
    {
        return $this->nbScene;
    }

    /**
     * Set simulScene
     *
     * @param string $simulScene
     * @return FormulaireSecours
     */
    public function setSimulScene($simulScene)
    {
        $this->simulScene = $simulScene;

        return $this;
    }

    /**
     * Get simulScene
     *
     * @return string 
     */
    public function getSimulScene()
    {
        return $this->simulScene;
    }

    /**
     * Set amenagTemp
     *
     * @param string $amenagTemp
     * @return FormulaireSecours
     */
    public function setAmenagTemp($amenagTemp)
    {
        $this->amenagTemp = $amenagTemp;

        return $this;
    }

    /**
     * Get amenagTemp
     *
     * @return string 
     */
    public function getAmenagTemp()
    {
        return $this->amenagTemp;
    }

    /**
     * Set typeRdP
     *
     * @param string $typeRdP
     * @return FormulaireSecours
     */
    public function setTypeRdP($typeRdP)
    {
        $this->typeRdP = $typeRdP;

        return $this;
    }

    /**
     * Get typeRdP
     *
     * @return string 
     */
    public function getTypeRdP()
    {
        return $this->typeRdP;
    }

    /**
     * Set animation
     *
     * @param string $animation
     * @return FormulaireSecours
     */
    public function setAnimation($animation)
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get animation
     *
     * @return string 
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * Set mvtPublic
     *
     * @param string $mvtPublic
     * @return FormulaireSecours
     */
    public function setMvtPublic($mvtPublic)
    {
        $this->mvtPublic = $mvtPublic;

        return $this;
    }

    /**
     * Get mvtPublic
     *
     * @return string 
     */
    public function getMvtPublic()
    {
        return $this->mvtPublic;
    }

    /**
     * Set medecin
     *
     * @param string $medecin
     * @return FormulaireSecours
     */
    public function setMedecin($medecin)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return string 
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set nomMed
     *
     * @param string $nomMed
     * @return FormulaireSecours
     */
    public function setNomMed($nomMed)
    {
        $this->nomMed = $nomMed;

        return $this;
    }

    /**
     * Get nomMed
     *
     * @return string 
     */
    public function getNomMed()
    {
        return $this->nomMed;
    }

    /**
     * Set speMed
     *
     * @param string $speMed
     * @return FormulaireSecours
     */
    public function setSpeMed($speMed)
    {
        $this->speMed = $speMed;

        return $this;
    }

    /**
     * Get speMed
     *
     * @return string 
     */
    public function getSpeMed()
    {
        return $this->speMed;
    }

    /**
     * Set contactMed
     *
     * @param string $contactMed
     * @return FormulaireSecours
     */
    public function setContactMed($contactMed)
    {
        $this->contactMed = $contactMed;

        return $this;
    }

    /**
     * Get contactMed
     *
     * @return string 
     */
    public function getContactMed()
    {
        return $this->contactMed;
    }

    /**
     * Set prenomMed
     *
     * @param string $prenomMed
     * @return FormulaireSecours
     */
    public function setPrenomMed($prenomMed)
    {
        $this->prenomMed = $prenomMed;

        return $this;
    }

    /**
     * Get prenomMed
     *
     * @return string 
     */
    public function getPrenomMed()
    {
        return $this->prenomMed;
    }

    /**
     * Set pieceSecours
     *
     * @param string $pieceSecours
     * @return FormulaireSecours
     */
    public function setPieceSecours($pieceSecours)
    {
        $this->pieceSecours = $pieceSecours;

        return $this;
    }

    /**
     * Get pieceSecours
     *
     * @return string 
     */
    public function getPieceSecours()
    {
        return $this->pieceSecours;
    }

    /**
     * Set repasSecours
     *
     * @param string $repasSecours
     * @return FormulaireSecours
     */
    public function setRepasSecours($repasSecours)
    {
        $this->repasSecours = $repasSecours;

        return $this;
    }

    /**
     * Get repasSecours
     *
     * @return string 
     */
    public function getRepasSecours()
    {
        return $this->repasSecours;
    }

    /**
     * Set prestaMed
     *
     * @param string $prestaMed
     * @return FormulaireSecours
     */
    public function setPrestaMed($prestaMed)
    {
        $this->prestaMed = $prestaMed;

        return $this;
    }

    /**
     * Get prestaMed
     *
     * @return string 
     */
    public function getPrestaMed()
    {
        return $this->prestaMed;
    }

    /**
     * Set telSite
     *
     * @param string $telSite
     * @return FormulaireSecours
     */
    public function setTelSite($telSite)
    {
        $this->telSite = $telSite;

        return $this;
    }

    /**
     * Get telSite
     *
     * @return string 
     */
    public function getTelSite()
    {
        return $this->telSite;
    }

    /**
     * Set communicationSecours
     *
     * @param string $communicationSecours
     * @return FormulaireSecours
     */
    public function setCommunicationSecours($communicationSecours)
    {
        $this->communicationSecours = $communicationSecours;

        return $this;
    }

    /**
     * Get communicationSecours
     *
     * @return string 
     */
    public function getCommunicationSecours()
    {
        return $this->communicationSecours;
    }

    /**
     * Set autresSecours
     *
     * @param string $autresSecours
     * @return FormulaireSecours
     */
    public function setAutresSecours($autresSecours)
    {
        $this->autresSecours = $autresSecours;

        return $this;
    }

    /**
     * Get autresSecours
     *
     * @return string 
     */
    public function getAutresSecours()
    {
        return $this->autresSecours;
    }

    /**
     * Set infosCompl
     *
     * @param string $infosCompl
     * @return FormulaireSecours
     */
    public function setInfosCompl($infosCompl)
    {
        $this->infosCompl = $infosCompl;

        return $this;
    }

    /**
     * Get infosCompl
     *
     * @return string 
     */
    public function getInfosCompl()
    {
        return $this->infosCompl;
    }
}
