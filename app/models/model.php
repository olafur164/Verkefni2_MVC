<?php
class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    /**
     * Get all books from database
     */
    public function getAllBooks()
    {
        $sql = "SELECT book_ID, book_title, book_author FROM books";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    /** 
    * Get a book from database.
    *  */
    public function getBook($book_id)
    {
        $sql = "SELECT book_ID, book_title, book_author, book_img, book_desc FROM books WHERE book_ID = :book_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':book_id' => $book_id);
        $query->execute($parameters);
        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }
}