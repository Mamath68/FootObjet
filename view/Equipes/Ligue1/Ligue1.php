<?php
$ligueOne = $result["data"]["ligueOne"]
    ?>
<h1>Equipes de Ligue 1</h1>

<table class="table container">
    <thead>
        <tr class="bg-black">
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">MJ</th>
            <th scope="col">G</th>
            <th scope="col">N</th>
            <th scope="col">P</th>
            <th scope="col">BP</th>
            <th scope="col">BC</th>
            <th scope="col">DB</th>
            <th scope="col">PTS</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($ligueOne as $teams) {
            ?>
            <tr>
                <td>
                    <?= $teams->getPosition() ?>
                </td>
                <td>
                    <?= $teams->getName() ?>
                </td>
                <td>
                    <?= $teams->getGamePlayed() ?>
                </td>
                <td>
                    <?= $teams->getWinn() ?>
                </td>
                <td>
                    <?= $teams->getNull() ?>
                </td>
                <td>
                    <?= $teams->getLoose() ?>
                </td>
                <td>
                    <?= $teams->getGoalFor() ?>
                </td>
                <td>
                    <?= $teams->getGoalAgainst() ?>
                </td>
                <td>
                    <?= $teams->getDiffGoal() ?>
                </td>
                <td>
                    <?= $teams->getPoints() ?>
                </td>
            </tr>
            <?php
        }

        ?>
    </tbody>
</table>
<?php
$title = "Ligue 1";
?>