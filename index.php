<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <?php
    $date = date("G");
    if ($date >= 0 && $date < 6) {
            echo '<style type="text/css">
                body {
                    background-image: url("night.png");
                }
                </style>';
    } elseif ($date >= 6 && $date < 12) {
            echo '<style type="text/css">
                body {
                    background-image: url("morning.png");
                }
                </style>';
    } elseif ($date >= 12 && $date < 18) {
            echo '<style type="text/css">
                body {
                    background-image: url("afternoon.png");
                }
                </style>';
    } elseif ($date >= 18 && $date < 24) {
            echo '<style type="text/css">
                body {
                    background-image: url("evening.png");
                }
                </style>';
    }
    ?>
    
</head>

<body>
    <div class="text">
        <h1>Goede Morgen!<br>Het is nu
            <?php 
            $date = date("H") + 2;
            echo date("$date:i") ?>
        </h1>
    </div>
</body>

</html>
