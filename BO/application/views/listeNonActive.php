<h1>Comptes en attente d'activation</h1>

<table border="1">
    <tr>
        <th>mail</th>
        <th>Action</th>
    </tr>
    <?php foreach ($all as $user) { ?>
        <tr>
            <td><?php echo $user->email; ?></td>
            <td><a href="<?php echo site_url('ActivateController/activate/'.$user->id) ?>"><button>Activer</button></a></td>
        </tr>
    <?php } ?>
</table>