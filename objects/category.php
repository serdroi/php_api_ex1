<?php

class Category
{
    // Verbindung zur Datenbank und zur Tabelle „Kategorien“.
    private $conn;
    private $table_name = "categories";

    // Objekteigenschaften
    public $id;
    public $name;
    public $description;
    public $created;

    public function __construct($db)
    {
        $this->conn = $db;
    }

 // Methode, um alle Produktkategorien abzurufen
public function readAll()
{
    $query = "SELECT
                id, name, description
            FROM
                " . $this->table_name . "
            ORDER BY
                name";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt;
}
}
