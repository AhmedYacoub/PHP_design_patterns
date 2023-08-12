<?php

require_once 'App/Book.php';
require_once 'App/Kindle.php';
require_once 'App/PdfReader.php';
require_once 'App/EReaderAdapter.php';
require_once 'App/Interfaces/BookInterface.php';

class Person
{
    public function __construct(private BookInterface $book)
    {
        $book->open();
        $book->turnPage();
        $book->turnPage();
        $book->turnPage();
    }
}

$book = new Book;

$kindle = new Kindle;
$kindleAdapter = new EReaderAdapter($kindle);

$adobeAcrobat = new PdfReader;
$adobeAcrobatAdapter = new EReaderAdapter($adobeAcrobat);

$person = new Person($book);
$person = new Person($kindleAdapter);
$person = new Person($adobeAcrobatAdapter);