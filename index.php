<?php
    require_once("templates/aside.php");
?>

<div class="children">
    <?php
        require_once("templates/header.php");
    ?>
    <main class="main">
        <div id="dashboard-grid">
            <div id="div1" class="square" id="qtt-clients">
                <h2>Clients <i class="fa-solid fa-person"></i></h2>
                <span><?= count($clients) ?></span>
            </div>
            <div id="div2" class="square" id="balance">
                <h2>Balance <i class="fa-solid fa-sack-dollar"></i></h2>
                <span>1500</span>
            </div>
            <div id="div3" class="square" id="other">
                <h2>Others</h2>
                <span>Others</span>
            </div>
            <div id="div4" class="square">
                <canvas id="my-chart4"></canvas>
                <div id="info">
                    <h2 id="info-h2">UP <i class="fa-solid fa-arrow-up-right-dots"></i></h2>
                    <span id="info-span">20%</span>
                </div>
            </div>
            <div id="div5" class="square shadow"><canvas id="my-chart5"></canvas></div>
            <div id="div6" class="square"><canvas id="my-chart6"></canvas></div>
            <div id="div7" class="square"><canvas id="my-chart7"></canvas></div>
        </div>
    </main>
    <?php
        require_once("templates/footer.php");
    ?>
</div>
