<?php
class returnModel
{
    
    public $total;
    
    public $rows;
    
    //     public function __construct(){}
    public function __construct($total,$rows){
        $this->total = $total;
        $this->rows = $rows;
    }
    
    /**
     * @return the $total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return the $rows
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param field_type $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @param field_type $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    
}
