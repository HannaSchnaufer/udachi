<?php
$data = [
    [
        "position" => 1,
        "url" => "https://www.nike.com/",
        "title" => "Nike. Just Do It. Nike.com",
        "description" => "Nike delivers innovative products, experiences and services to inspire athletes."
    ],
    [
        "position" => 2,
        "url" => "https://www.instagram.com/nike/?hl=de",
        "title" => "Nike (@nike) • Instagram photos and videos",
        "description" => "255m Followers, 147 Following, 1019 Posts - See Instagram photos and videos from Nike (@nike)"
    ],
    [
        "position" => 3,
        "url" => "https://twitter.com/nike",
        "title" => "Nike - Twitter",
        "description" => "Welcome to Nike FC. We're not a club. We're a community. If you love the game of football, you're a part of Nike FC. Let's change the game, ..."
    ],
    [
        "position" => 4,
        "url" => "https://en.wikipedia.org/wiki/Nike,_Inc.",
        "title" => "Nike, Inc. - Wikipedia",
        "description" => "Nike, Inc is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, ..."
    ],
    [
        "position" => 5,
        "url" => "https://www.youtube.com/user/nike",
        "title" => "Nike - YouTube",
        "description" => "We will continue to stand up for equality and work to break down barriers for athletes* all over the world. We will do and invest more to uphold ..."
    ],
    [
        "position" => 6,
        "url" => "https://www.footlocker.com/category/brands/nike.html",
        "title" => "Nike Sneakers, Apparel, and Accessories - Foot Locker",
        "description" => "Shop the latest selection of Nike at Foot Locker. Find the hottest sneaker drops from brands like Jordan, Nike, Under Armour, ..."
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>i luv hardcore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    table {
      border: 1px solid;
    }
    th {
      background-color: #213752;
      color: #ffffff;
    }
    tr {
      border: 2px solid;
    }
    body {
      border: 2px solid;
    }
  </style>
</head>
<body>

  <table border="1">
    <tr>
      <th>Numero</th>
      <th>Links auf</th>
      <th>Kompanie</th>
      <th>Yapper</th>
    </tr>

    <?php
    //still doesnt undertsnado this like, why cantwe just use $data instead $item, i dont want to use foreach :c
      foreach ($data as $item) { //needed so this wont warning shi or something
        echo "<tr>";
        echo "<td>{$item['position']}</td>";
        echo "<td><a href='{$item['url']}' target='_blank'>{$item['title']}</a></td>";
        echo "<td>{$item['title']}</td>";
        echo "<td>{$item['description']}</td>";
        echo "</tr>";
      }
    ?>
  </table>

</body>
</html>
