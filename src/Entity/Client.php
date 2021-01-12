<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="clients")
 */
class Client {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
  
    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * Menu Clients live in One State.
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     */
    protected $state;

    /**
     * Menu Clients live in One City.
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    protected $city;

    /**
     * Menu Clients live in One Street.
     * @ORM\ManyToOne(targetEntity="Street")
     * @ORM\JoinColumn(name="street_id", referencedColumnName="id")
     */
    protected $street;

    /**
     * @ORM\Column(type="string")
     */
    protected $home_number;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getStreet() {
        return $this->street;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function getHomeNumber() {
        return $this->home_number;
    }

    public function setHomeNumber($home_number) {
        $this->home_number = $home_number;
    }
}