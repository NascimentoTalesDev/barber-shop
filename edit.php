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
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $client["id"] ?>">

            <div >
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="<?= $client["name"] ?>" required>
            </div>
            <div >
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required value="<?= $client["email"] ?>">
            </div>
            <div id="select-plan">
                <label for="plan_id">Plan:</label>
                <select name="plan_id" id="">
                    <option value="<?= $client["plan_id"] ?>"><?= $client["plan_name"] ?></option>
                    
                    <?php foreach($plans as $plan): ?>
                        <?php if($plan["id"] !== $client["plan_id"]): ?>
                            <option value="<?= $plan["id"] ?>"><?= $plan["name"] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?> 

                </select>
            </div>
            <div class="btn-submit">
                <button type="submit">Update</button>
            </div>
        </form>
        <form class="form-client" action="<?= $BASE_URL ?>db/process.php" method="post">
            <input type="hidden" name="type" value="delete">
            <input type="hidden" name="id" value="<?= $client["id"] ?>">
            <div class="btn-submit">
                <button type="submit">Delete</button>
            </div>
        </form>
    </main>
    <?php
        require_once("templates/footer.php");
    ?>
</div>