<?php

foreach($db->query('SELECT * FROM articles', 'App\table\Article') as $post) {

?>

    <h2>
        <a href="<?= $post->getUrl; ?>"><?= $post->titre; ?></a>
    </h2>

    <p><?= $post->getExtrait; ?></p>
<?php
    
    }
    
?>