<?php

function addClassification($classification) {
    $db = phpmotorsConnect();
    $sql = 'INSERT INTO carclassification (classificationName) VALUES (:classificationName)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':classificationName', $classification, PDO::PARAM_STR);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function addVehicle($make, $model, $desc, $imagePath, $thumbnail, $price, $stock, $color, $classification) {
    // Create a connection object using the phpmotors connection function
    $db = phpmotorsConnect();
    // The SQL statement
    $sql = 'INSERT INTO inventory (invMake, invModel, invDescription, invImage, invThumbnail, invPrice, invStock, invColor, classificationId)
        VALUES (:make, :model, :descrip, :imagePath, :thumbnail, :price, :stock, :color, :classification)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':make', $make, PDO::PARAM_STR);
    $stmt->bindValue(':model', $model, PDO::PARAM_STR);
    $stmt->bindValue(':descrip', $desc, PDO::PARAM_STR);
    $stmt->bindValue(':imagePath', $imagePath, PDO::PARAM_STR);
    $stmt->bindValue(':thumbnail', $thumbnail, PDO::PARAM_STR);
    $stmt->bindValue(':price', $price, PDO::PARAM_STR);
    $stmt->bindValue(':stock', $stock, PDO::PARAM_STR);
    $stmt->bindValue(':color', $color, PDO::PARAM_STR);
    $stmt->bindValue(':classification', $classification, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
   }