

<!--  However, there is a function named count() which is used to count all the elements within an array or the properties of an object that implements the Countable interface. This function is commonly used to determine the size of an array -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        form {
    max-width: 300px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #f0f0f0;
    border-radius: 8px;
    background-color: #f9f9f9;
}

textarea, input[type="submit"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box; /* Include padding and border in the element's width */
}

textarea {
    resize: vertical; /* Allow vertical resize */
    min-height: 80px;
}

input[type="submit"] {
    background-color: #5c6bc0;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3f51b5;
}

    </style>
    <form method="POST">
        <textarea name="mainField" id="" cols="30" rows="3"><?php if(isset($_POST['mainField'])){ echo $_POST['mainField'];}?></textarea>
        <input type="submit" value="Go!">
    </form>

    <?php
        if(isset($_POST['mainField'])){
            $counta=0;
            $mainString  = $_POST['mainField'];
            for($i=0; $i<strlen($mainString);$i++){
                if($mainString[$i]=='Mango' OR $mainString[$i]=='Mango'){
                    $counta++;
                }
            }
            echo "Total Mango = Mango ".$counta;
        }
    ?>
</body>
</html>