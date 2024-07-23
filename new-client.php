<?php
    require_once("templates/aside.php");
?>

<div class="children">
    <?php
        require_once("templates/header.php");
    ?>
    <main class="main">
        <?php
            require_once("components/back.php");
        ?>
        
        <form class="form-client" action="<?= $BASE_URL ?>db/process.php" method="post">
            <input type="hidden" name="type" value="create">

            <div >
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div >
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div id="select-plan">
                <label for="plan_id">Plan:</label>
                <select name="plan_id">
                    <?php foreach($plans as $plan): ?>
                        <option value="<?= $plan["id"] ?>"><?= $plan["name"] ?></option>
                    <?php endforeach; ?> 
                </select>
            </div>
            <div class="btn-submit">
                <button type="submit">Save</button>
            </div>
        </form>
    </main>
    <?php
        require_once("templates/footer.php");
    ?>
</div>