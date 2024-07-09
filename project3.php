<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        .menu-category {
            margin-top: 20px;
        }
        .menu-category h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        .menu-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Restaurant Menu</h1>
    </header>

    <div class="menu-category">
        <h2>Appetizers</h2>
        <div class="menu-item">
            <span>Bruschetta</span>
            <span>$8.99</span>
        </div>
        <div class="menu-item">
            <span>Caprese Salad</span>
            <span>$9.99</span>
        </div>
        <div class="menu-item">
            <span>Garlic Bread</span>
            <span>$6.99</span>
        </div>
    </div>

    <div class="menu-category">
        <h2>Main Courses</h2>
        <div class="menu-item">
            <span>Spaghetti Carbonara</span>
            <span>$14.99</span>
        </div>
        <div class="menu-item">
            <span>Chicken Parmesan</span>
            <span>$16.99</span>
        </div>
        <div class="menu-item">
            <span>Grilled Salmon</span>
            <span>$18.99</span>
        </div>
    </div>

    <div class="menu-category">
        <h2>Desserts</h2>
        <div class="menu-item">
            <span>Tiramisu</span>
            <span>$7.99</span>
        </div>
        <div class="menu-item">
            <span>Cheesecake</span>
            <span>$6.99</span>
        </div>
        <div class="menu-item">
            <span>Chocolate Fondant</span>
            <span>$8.99</span>
        </div>
    </div>

</body>
</html>
