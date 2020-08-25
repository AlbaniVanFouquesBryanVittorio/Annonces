<?php
if( !isset( $login) ){
    header( "refresh:5;url=index.php" );
    echo 'Erreur de login et/ou de mot de passe (redirection
automatique dans 5 sec.)';
    exit;
}
?>
<?php $title= 'Exemple Annonces Basic PHP: Annonces'; ?>
<?php ob_start(); ?>
    <p> Hello <?php echo $login; ?> </p>
    <h1>List of Posts</h1>
    <ul>
        <?php foreach( $posts as $post ) : ?>
            <li>
                <a href="post.php?id=<?php echo $post['postId']; ?>">
                    <?php echo $post['postTitle']; ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>