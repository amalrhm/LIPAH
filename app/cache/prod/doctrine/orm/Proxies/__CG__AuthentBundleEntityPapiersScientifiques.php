<?php

namespace Proxies\__CG__\AuthentBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PapiersScientifiques extends \AuthentBundle\Entity\PapiersScientifiques implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'idPapiers', 'auteurs', 'date', 'editeur', 'langue', 'matiere', 'titre', 'volume', 'listeDesMembres');
        }

        return array('__isInitialized__', 'idPapiers', 'auteurs', 'date', 'editeur', 'langue', 'matiere', 'titre', 'volume', 'listeDesMembres');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PapiersScientifiques $proxy) {
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
    public function getIdPapiers()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdPapiers();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPapiers', array());

        return parent::getIdPapiers();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteurs($auteurs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteurs', array($auteurs));

        return parent::setAuteurs($auteurs);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteurs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteurs', array());

        return parent::getAuteurs();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditeur($editeur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditeur', array($editeur));

        return parent::setEditeur($editeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getEditeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditeur', array());

        return parent::getEditeur();
    }

    /**
     * {@inheritDoc}
     */
    public function setLangue($langue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLangue', array($langue));

        return parent::setLangue($langue);
    }

    /**
     * {@inheritDoc}
     */
    public function getLangue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLangue', array());

        return parent::getLangue();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatiere($matiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatiere', array($matiere));

        return parent::setMatiere($matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatiere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatiere', array());

        return parent::getMatiere();
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
    public function setVolume($volume)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolume', array($volume));

        return parent::setVolume($volume);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolume()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolume', array());

        return parent::getVolume();
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

}
