<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinTable;

/**
 *	@Entity
 */
class Payment {
	
	/**
	 *	@Id	@GeneratedValue
	 * @Column(type="integer")
	 */
	private $id;
	
	/**
	 *	@Column(type="string")
	 */
	private $address;
	
	/**
	 *	@Column(type="string")
	 */
	private $contactName;
	
	/**
	 *	@Column(type="string")
	 */
	private $contactPhone;
	
	/**
	 * @ManyToMany(targetEntity="Menu") 
	 */
	private $items;
	
	public function __construct(){
		$items =  new ArrayCollection();
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
     * Set address
     *
     * @param string $address
     * @return Payment
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return Payment
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    
        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     * @return Payment
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    
        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string 
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Add items
     *
     * @param \Acme\StoreBundle\Entity\Menu $items
     * @return Payment
     */
    public function addItem(\Acme\StoreBundle\Entity\Menu $items)
    {
        $this->items[] = $items;
    
        return $this;
    }

    /**
     * Remove items
     *
     * @param \Acme\StoreBundle\Entity\Menu $items
     */
    public function removeItem(\Acme\StoreBundle\Entity\Menu $items)
    {
        $this->items->removeElement($items);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItems()
    {
        return $this->items;
    }
}