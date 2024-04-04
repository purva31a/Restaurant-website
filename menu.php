<?php
// Define an array of menu items
$menuItems = [
    [
        "category" => "Italian Food",
        "name" => "Classic Margherita Pizza",
        "description" => "Tomato sauce, mozzarella cheese, fresh basil",
        "price" => "$10",
        "image" => "pizza.jpg"
    ],
    [
        "category" => "Italian Food",
        "name" => "Spaghetti Carbonara",
        "description" => "Spaghetti with bacon, eggs, and Parmesan cheese",
        "price" => "$12",
        "image" => "pasta.jpg"
    ],
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Our Menu</h1>
        <div class="menu-items">
            <?php foreach ($menuItems as $menuItem): ?>
            <div class="menu-item">
                <img src="<?php echo $menuItem['image']; ?>" alt="<?php echo $menuItem['name']; ?>">
                <h2><?php echo $menuItem['name']; ?></h2>
                <p><?php echo $menuItem['description']; ?></p>
                <span class="price"><?php echo $menuItem['price']; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
