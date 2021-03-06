<?php

namespace Proxies\__CG__\AuthentBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class These extends \AuthentBundle\Entity\These implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'idThese', 'cotutelle', 'date_inscri', 'date_stnc', 'etat', 'these_pdf', 'titre', 'listeDesMembres', 'listeDesEncadrants', 'listeDesMembresExternes', 'inscri');
        }

        return array('__isInitialized__', 'idThese', 'cotutelle', 'date_inscri', 'date_stnc', 'etat', 'these_pdf', 'titre', 'listeDesMembres', 'listeDesEncadrants', 'listeDesMembresExternes', 'inscri');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (These $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdThese()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdThese();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdThese', array());

        return parent::getIdThese();
    }

    /**
     * {@inheritDoc}
     */
    public function setCotutelle($cotutelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCotutelle', array($cotutelle));

        return parent::setCotutelle($cotutelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getCotutelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCotutelle', array());

        return parent::getCotutelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateInscri($dateInscri)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateInscri', array($dateInscri));

        return parent::setDateInscri($dateInscri);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateInscri()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateInscri', array());

        return parent::getDateInscri();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateStnc($dateStnc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateStnc', array($dateStnc));

        return parent::setDateStnc($dateStnc);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateStnc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateStnc', array());

        return parent::getDateStnc();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', array($etat));

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', array());

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setThesePdf($thesePdf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThesePdf', array($thesePdf));

        return parent::setThesePdf($thesePdf);
    }

    /**
     * {@inheritDoc}
     */
    public function getThesePdf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThesePdf', array());

        return parent::getThesePdf();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function addListeDesMembre(\AuthentBundle\Entity\Membre $listeDesMembres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addListeDesMembre', array($listeDesMembres));

        return parent::addListeDesMembre($listeDesMembres);
    }

    /**
     * {@inheritDoc}
     */
    public function removeListeDesMembre(\AuthentBundle\Entity\Membre $listeDesMembres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeListeDesMembre', array($listeDesMembres));

        return parent::removeListeDesMembre($listeDesMembres);
    }

    /**
     * {@inheritDoc}
     */
    public function getListeDesMembres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListeDesMembres', array());

        return parent::getListeDesMembres();
    }

    /**
     * {@inheritDoc}
     */
    public function addListeDesEncadrant(\AuthentBundle\Entity\EncadrantExterne $listeDesEncadrants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addListeDesEncadrant', array($listeDesEncadrants));

        return parent::addListeDesEncadrant($listeDesEncadrants);
    }

    /**
     * {@inheritDoc}
     */
    public function removeListeDesEncadrant(\AuthentBundle\Entity\EncadrantExterne $listeDesEncadrants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeListeDesEncadrant', array($listeDesEncadrants));

        return parent::removeListeDesEncadrant($listeDesEncadrants);
    }

    /**
     * {@inheritDoc}
     */
    public function getListeDesEncadrants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListeDesEncadrants', array());

        return parent::getListeDesEncadrants();
    }

    /**
     * {@inheritDoc}
     */
    public function addListeDesMembresExterne(\AuthentBundle\Entity\MembreExterne $listeDesMembresExternes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addListeDesMembresExterne', array($listeDesMembresExternes));

        return parent::addListeDesMembresExterne($listeDesMembresExternes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeListeDesMembresExterne(\AuthentBundle\Entity\MembreExterne $listeDesMembresExternes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeListeDesMembresExterne', array($listeDesMembresExternes));

        return parent::removeListeDesMembresExterne($listeDesMembresExternes);
    }

    /**
     * {@inheritDoc}
     */
    public function getListeDesMembresExternes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListeDesMembresExternes', array());

        return parent::getListeDesMembresExternes();
    }

}
