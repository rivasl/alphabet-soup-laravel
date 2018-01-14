<?php

namespace App;

/**
* Alphabeth Soup (class Soup)
*
* Handling a simple word search in a simple alphabet soup.
* Really, is an technical exercise for projectcor.
*
* @author Luis A. Rivas
* @version 1.0
*/
class Soup
{
    private $r; /* rows */
    private $c; /* columns */
    public $search; /* Contain the word to search */
    private $lines; /* Contain line by line the input of the user */
    private $ocurrence; /* Number of occurence of the word in the matrix */
    private $matrix = array(); /* Matrix for to do the search */

   /**
   * Constructor of a alphabet soup
   * @access private
   * @param string  formatted_text
   */
    function __construct($formatted_text)
    {
        $this->lines = preg_split("/[\s]+/", $formatted_text);
        $this->r = array_shift($this->lines); 
        $this->c = array_shift($this->lines);
        $this->ocurrence = 0;
    }
    
    /**
     * Build the main matrix
     * @access protected
     */
    private function buildMatrix()
    {
        for ($i=0; $i < $this->r; $i++) {
            array_push($this->matrix, str_split(array_shift($this->lines)));
        }
    }
    
    /**
   * Set a word to find in the alphabet soup
   * @access public
   * @param string search
   */
    public function setSearch($search){
        $this->search = $search;
    }

    /**
   * Check Horizontally (by rows) to find the word in the alphabet soup
   * @access private
   */
    private function checkHorizontally()
    {
        for ($i=0; $i < $this->r; $i++) {
            $horizontal = '';
            for ($j=0; $j < $this->c; $j++) {
                $horizontal .= $this->matrix[$i][$j];
            }
            $this->ocurrence += substr_count($horizontal, $this->search) + substr_count(strrev($horizontal), $this->search);
        }
    }

    /**
   * Check Vertically (by columns) to find the word in the alphabet soup
   * @access private
   */
    private function checkVertically()
    {
        for ($i=0; $i < $this->c; $i++) {
            $vertical = '';
            for ($j=0; $j < $this->r; $j++) {
                $vertical .= $this->matrix[$j][$i];
            }	
            $this->ocurrence += substr_count($vertical, $this->search) + substr_count(strrev($vertical), $this->search);
        }
    }

    /**
   * Check the main diagonal to find the word in the alphabet soup
   * @access private
   */
    private function checkMainDiagonal()
    {
        $main_diagonal = '';
        for ($i=0; $i < $this->r; $i++) {
            for ($j=0; $j < $this->c; $j++) {
                if ($i == $j) {
                    $main_diagonal .= $this->matrix[$i][$j];	
                }
            }
        }
        $this->ocurrence += substr_count($main_diagonal, $this->search) + substr_count(strrev($main_diagonal), $this->search);
    }

    /**
   * Check the secondary diagonal to find the word in the alphabet soup
   * @access private
   */
    private function checkSecondaryDiagonal()
    {
        $secondary_diagonal = '';
        for ($i=0; $i < $this->r; $i++) {
            for ($j=0; $j < $this->c; $j++) {
                if ((($this->c-1) - $i) == $j) {
                    $secondary_diagonal .= $this->matrix[$i][$j];	
                }
            }
        }
        $this->ocurrence += substr_count($secondary_diagonal, $this->search) + substr_count(strrev($secondary_diagonal), $this->search);
    }

    /**
   * Check and find all the ocurrences of the word in the alphabet soup
   * @access public
   * @return $this->ocurrence
   */
    public function checkSoup()
    {
        do {
            $this->buildMatrix();               // The matrix is built
            $this->checkHorizontally();         // Check horizontally
            $this->checkVertically();           // Check vertically
            $this->checkMainDiagonal();         // The main diagonal is checked
            $this->checkSecondaryDiagonal();    // The secondary diagonal is checked
        }
        while (count($this->lines) > 0);

        return ($this->ocurrence);
    }
}
