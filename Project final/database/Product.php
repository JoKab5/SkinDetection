<?php

// Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray=array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;

    }

    // get product using item id
    public function getProduct($item_id=null,$table='product'){
        if (isset($item_id)){
            $result=$this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");
            $resultArray=array();
            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[]= $item;
            }

            return $resultArray;

        }
    }

    // get product using item brand
    public function getProductBrand(){
        $result=$this->db->con->query("SELECT * FROM `product` WHERE item_brand='Liputa'");
        $resultArray=array();

        // fetch product data one by one
        while ($item= mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }

        return $resultArray;
    }
    // get product using item brand
    public function getProductBrand1(){
        $result=$this->db->con->query("SELECT * FROM `product` WHERE item_brand='shirt'");
        $resultArray=array();

        // fetch product data one by one
        while ($item= mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }

        return $resultArray;
    }
    // get product using item brand
    public function getProductBrand2(){
        $result=$this->db->con->query("SELECT * FROM `product` WHERE item_brand='dress'");
        $resultArray=array();

        // fetch product data one by one
        while ($item= mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }

        return $resultArray;
    }
    // get product using item brand
    public function getProductBrand3(){
        $result=$this->db->con->query("SELECT * FROM `product` WHERE item_brand='Sandal'");
        $resultArray=array();

        // fetch product data one by one
        while ($item= mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }

        return $resultArray;
    }
    // get product using item brand
    public function getProductBrand4(){
        $result=$this->db->con->query("SELECT * FROM `product` WHERE item_brand='Adidas'");
        $resultArray=array();

        // fetch product data one by one
        while ($item= mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }

        return $resultArray;
    }

    public function getProductSearch(){
        if (isset($_POST['search-submit'])){
            $search =$_POST['search-input'] ?? 'a';
            $result=$this->db->con->query("SELECT * FROM `product` WHERE item_brand LIKE '%$search%' OR item_name LIKE '%$search%'");
            $resultArray=array();
            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[]= $item;
            }

            return $resultArray;

        }
    }
}