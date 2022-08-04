<?php

class Database
{
    public PDO $pdo;
    public static Database $db;

    private $host = 'localhost';
    private $user = 'root';
    private $pwd = 'root';
    private $dbName = 'scandiweb';

    public function __construct()
    {
        $this->connect();
        self::$db = $this;
    }

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

    public function getProducts()
    {
        $sql = 'SELECT * FROM products';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getCategory()
    {
        $sql = 'SELECT * FROM category';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function setProducts(Product $product)
    {
        $sql = "INSERT INTO products (sku,	
        name,	
        price,
        category_id,	
        size,
        weight,
        height,	
        width,
        lenght
       ) VALUES (
       ?,?,?,?,?,?,?,?,?
       )";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            $product->sku,
            $product->name,
            $product->price,
            $product->category_id,
            $product->size,
            $product->weight,
            $product->height,
            $product->width,
            $product->lenght,
        ]);
    }

    public function deleteProduct($checkbox)
    {
        foreach ($checkbox as $id) {
            $sql = "DELETE FROM products WHERE id = $id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }
}
