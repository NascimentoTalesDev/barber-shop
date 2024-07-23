<?php
    require_once("templates/aside.php");
?>

<div class="children">
    <?php
        require_once("templates/header.php");
    ?>
    <main class="main">
        <div class="create-container">
            <div>
                <h2>Add new client</h2>
            </div>
            <a id="btn-new" href="<?= $BASE_URL ?>new-client.php">
                <button>
                    Add
                </button>
            </a>
        </div>
        <div id="table-clients" class=""> 
            <table>
                    <tr>
                        <th id="id"><i class="fa-solid fa-hashtag"></i> Id</th>
                        <th id="name"><i class="fa-solid fa-at"></i> Name/Email</th>
                        <th id="plan"><i class="fa-solid fa-rocket"></i> Plan</th>
                        <th id="edit"><i class="fa-solid fa-pencil"></i> Edit </th>
                    </tr>
                    <?php foreach ($clients as $client): ?>
                        <tr>
                            <td><?= $client['id'] ?></td>
                            <td id="email">
                                <div><?= $client['name'] ?></div>
                                <div><?= $client['email'] ?></div>
                            </td>
                            <td><?= $client['plan_name'] ?></td>
                            <td><a id="link-edit" href="<?= $BASE_URL ?>edit.php?id=<?= $client['id'] ?>">Edit</a></td>
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>

    </main>
    <?php
        require_once("templates/footer.php");
    ?>
</div>