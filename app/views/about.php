<?php foreach($data as $item){ ?>
    <div><?php echo $item['Name'] ?></div> 
    <?php } ?>


    <form action="add_user" method="POST">
        <input type="text" name="name">
        <input type="submit" name="add" value="add">
    </form>
<?php
    if(isset($data)){
        echo $data;
    }