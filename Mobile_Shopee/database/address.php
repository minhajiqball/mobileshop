<?php

// php cart class
class   address
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into Address table
    public function insertIntoAddress($params = null, $table = "address")
    {
        if ($this->db->con != null) {
            if ($params != null) {
                // "Insert into address(first_name) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',', array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and item_id and insert into cart table
    public function addToAddress($first_name, $last_name, $email_id, $address1, $address2, $city, $state, $pincode,)
    {
        if (isset($first_name) && isset($last_name) && isset($email_id) && isset($address1) && isset($address2) && isset($city) && isset($state) && isset($pincode)) {
            $params = array(
                "first_name" => $first_name,
                "last_name" => $last_name,
                "email_id" => $email_id,
                "address1" => $address1,
                "address2" => $address2,
                "city" => $city,
                "state" => $state,
                "pincode" => $pincode
            );

            // insert data into cart
            $result = $this->insertIntoAddress($params);
//            if ($result) {
//                // Reload Page
//                header("Location: " . $_SERVER['PHP_SELF']);
//            }
        }
    }
}