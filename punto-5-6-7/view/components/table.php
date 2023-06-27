<?php 
    include "./controller/userController.php";
?>

<div class="table__container">
    <table>
        <tr>   
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
        </tr>
    <?php
        $users = getUsers();
        foreach($users as $user){
    ?>
        <tr>   
            <th><?php echo $user->getId(); ?></th>
            <th><?php echo $user->getName(); ?></th>
            <th><?php echo $user->getLastName(); ?></th>
            <th><?php echo $user->getIdNumber(); ?></th>
        </tr>        

    <?php
        } 
    ?>
    </table>
</div>