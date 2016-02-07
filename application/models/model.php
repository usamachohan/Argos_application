<?php
class model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
    
    
    
    
    /* 
    
    This function obtains the deals data from the HUKD Rest API URL. then the £ symbol characters is converted to the correct format in the String.  */
    function get_deals()
    {
        
        
        $homepage  = file_get_contents('http://api.hotukdeals.com/rest_api/v2/?key=1f9343aece57d6c2d75e02bff4381e9e&merchant=Argos&exclude_expired=true&results_per_page=30&min_temp=1000&output=json');
        $corrected = str_replace("\u00c2\u00a3", "\u00a3", $homepage);
        return $corrected;
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>
