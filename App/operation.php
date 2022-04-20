<?php
    require_once ("App/front-end/component.php");
    require_once ("App/back-end/db.php");
    

    $conn = createdb();

//create button click
if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['update'])){
    updateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}


function createData(){
    $bookname = textboxValue("book_name");
    $bookpublisher = textboxValue("book_publisher");
    $bookprice = textboxValue("book_price");

    if($bookname && $bookpublisher && $bookprice){

        $sql = "INSERT INTO books (book_name, book_publisher, book_price) 
                        VALUES ('$bookname','$bookpublisher','$bookprice')";

        if(mysqli_query($GLOBALS['conn'], $sql)){
            TextNode("success", "Record Successfully Inserted...!");
        }else{
            echo "Error";
        }

    }else{
            TextNode("error", "Provide Data in the Textbox");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['conn'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}



// get data from mysql database
function getData(){
    $sql = "SELECT * FROM books";

    $result = mysqli_query($GLOBALS['conn'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// updatedata 
function updateData(){
    $bookid = textboxValue(value:"book_id");
    $bookname = textboxValue(value:"book_name");
    $bookpublisher = textboxValue(value:"book_publisher");
    $bookprice = textboxValue(value:"book_price");

    if($bookname && $bookpublisher && $bookprice){
        $sql = "
            UPDATE books SET book_name='$bookname',book_publisher='$bookpublisher',book_price='$bookprice' WHERE id='$bookid'";
        if(mysqli_query($GLOBALS['conn'], $sql)){
            TextNode("success", "Data successfully updated...!");
        }else {
            TextNode("error", "Unable to update data...!");
        }
    }else {
        TextNode("error", "Select data using edit icon...!");
    }
}


function deleteRecord(){
    $bookid = (int)textboxValue(value:"book_id");

    if($bookid){
        $sql = "
            DELETE FROM books WHERE id='$bookid'";
        if(mysqli_query($GLOBALS['conn'], $sql)){
            TextNode("success", "Record successfully deleted...!");
        }else {
            TextNode("error", "Unable to delete Record...!");
        }
    }else {
        TextNode("error", "Select data using edit icon...!");
    }
}




























?>