<?php
include('data.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Dojo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>John Doe</h1>
        <h2>Consultant in economics</h2>
    </header>
    <main>
        <section>
            <h1>Trainings</h1>
            <div class="cards">
                <?php foreach ($data['Trainings'] as $value) { ?>
                    <figure>
                        <img src="assets/images/<?php echo $value['image']; ?>" alt="Highschool of Smalltown">
                        <figcaption>
                            <div><?php echo $value['date']; ?></div>
                            <h2><?php echo $value['title']; ?></h2>
                            <p><?php echo $value['description']; ?></p>
                            <p><?php echo $value['location']; ?></p>
                        </figcaption>
                    </figure>
                <?php } ?>
            </div>
        </section>
        <section>
            <h1>Experiences</h1>
            <div class="cards">
                <?php foreach ($data['Experiences'] as $value) { ?>
                    <figure>
                        <img src="assets/images/<?php echo $value['image']; ?>" alt="Highschool of Smalltown">
                        <figcaption>
                            <div><?php echo $value['date']; ?></div>
                            <h2><?php echo $value['title']; ?></h2>
                            <p><?php echo $value['description']; ?></p>
                            <p><?php echo $value['location']; ?></p>
                        </figcaption>
                    </figure>
                <?php } ?>
            </div>
        </section>
    </main>
</body>

</html>