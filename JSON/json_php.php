<?php
class Book {
    public $title = "";
    public $author = "";
    public $yearOfPublication = "";
}
$book = new Book();
$book->title = "Fundamentals of JSON";
$book->author = "James Gosling";
$book->yearOfPublication = "2005";
$result = json_encode($book); // The json_encode function can return
echo "The JSON represenatation is ".$result;
?>