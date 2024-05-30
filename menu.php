<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
<label for="menu-icon"></label>
<nav class="nav">
<ul class="pt-5">
<li><a href="http://localhost/verbenko/index.php">Главная</a></li>
<?php
if (isset($_SESSION['id'])){
echo '<li><a href="http://localhost/verbenko/profile/accaunt.php">Личный
кабинет</a></li>';
}else {
echo '<li><a href="http://localhost/verbenko/auth.php">Личный кабинет</a></li>';
}
if (isset($_SESSION['id'])){
echo '<li><a
href="http://localhost/verbenko/chat/chat.php">Чат</a></li>';
}else {
echo '<li><a href="http://localhost/verbenko/auth.php">Чат</a></li>';
}
?>
<li><a href="http://localhost/verbenko/posts/posts.php">Новости</a></li>
<?php
if (isset($_SESSION['id'])) {
echo '<li><a
href="http://localhost/verbenko/shop/shop.php">Магазин</a></li>';
} else {
echo '<li><a
href="http://localhost/verbenko/auth.php">Магазин</a></li>';
}
?>
<li><a href="http://localhost/verbenko/games/games.php">Игры</a></li>
<li><a href="http://localhost/verbenko/video/all_videos.php">Видео</a></li>
<li><a href="http://localhost/Social/music/music_list.php">Музыка</a></li>
</ul>
</nav>
