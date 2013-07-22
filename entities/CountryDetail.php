<?php
/**
 * @Entity
 * @Table(name="country_details")
 */
class CountryDetail 
{
  /** @Id @Column(type="integer") @GeneratedValue */ 
  private $id; 
  private $country_id;
  private $name;
  private $language_id;
  
  
   
} 