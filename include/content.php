<div id="maincontent">
    <?php
    mysql_connect('localhost','root','');
    mysql_select_db('phpbase');
    mysql_set_charset('utf8');
// Вывод новостей
    function selectnews(){
        $out = '';

        if (isset($_GET['id'])){
        //Здесь необходимо обработать $_GET['id'], так как это уязвимость SQL инъекция
            $sql = 'SELECT * FROM news WHERE id = '.$_GET['id'].'';
            $qur = mysql_query($sql); $kol = mysql_num_rows($qur);
            if ($qur && $kol){
                $rez = mysql_fetch_assoc($qur);
                $out .= '<p><b>'.date('H:i d.m.Y',$rez['data_c']).' '.stripslashes($rez['title']).'</b><br>';
                $out .= '<br>'.stripslashes(nl2br($rez['text_f']));
                $out .= '<br><br><a href="?news">Все новости</a></p>';
            }
        } else {
            $sql = 'SELECT * FROM news ORDER BY data_c DESC';
            $qur = mysql_query($sql); $kol = mysql_num_rows($qur);
            if ($qur && $kol) {
                $out .= '<ul>';
                while ($rez = mysql_fetch_assoc($qur)) {
                    $out .= '<li><a href="?news&id='.$rez['id'].'">'.stripslashes($rez['title']).'</a></li>';
                }
                $out .= '</ul>';
            }
        }
        return $out;
    }
    echo selectnews();
    ?>
</div>