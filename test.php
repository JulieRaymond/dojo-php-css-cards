<!-- <main>
    <section>
        <h1>Trainings</h1>
        <div class="cards">

            <?php
            include "data.php"; ?>

            <?php foreach ($data["Trainings"] as $key => $value) { ?>
                <figure>
                    <img src="assets/images/<?php echo $value['image'] ?>" alt="Highschool of Smalltown">
                    <figcaption>
                        <div> <?php echo $value['date'] ?> </div>
                        <h2><?php echo $value['title'] ?> </h2>
                        <p><?php echo $value['description'] ?>
        </div>
        </figcaption>
        </figure>
    <?php
            }
    ?>
    </div>
    </section>


    <section>
        <h1>Experiences</h1>
        <div class="cards">

            <?php foreach ($data["Experiences"] as $key => $value) { ?>
                <figure>
                    <img src="assets/images/<?php echo $value['image'] ?>" alt="Highschool of Smalltown">
                    <figcaption>
                        <div> <?php echo $value['date'] ?> </div>
                        <h2><?php echo $value['title'] ?> </h2>
                        <p><?php echo $value['description'] ?>
        </div>
        </figcaption>
        </figure>

    <?php
            }
    ?>

    </div>
    </section>
</main> -->