<?php
/**
 * @Entity
 * @Table(name="countries")
 */ 
class Country 
{
   
     /** @Id @Column(type="integer") @GeneratedValue */
    private $id;
    /** @Column(length=50) */
    private $name; // type defaults to string
    
	 /**
     * @OneToMany(targetEntity="CountryDetail", mappedBy="country_id")
     */
	private $details;
	
} 