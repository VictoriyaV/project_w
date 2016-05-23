<?php
mysql_connect('localhost','root','');
mysql_select_db('phpbase');
mysql_set_charset('utf8');
// Вывод новостей
function news(){
	$out = '';
	$sql = 'SELECT * FROM news ORDER BY data_c DESC';
	$qur = mysql_query($sql); $kol = mysql_num_rows($qur);
	if ($qur && $kol) {
		$out .= '<ul>';
			// $out .= '<table cellpadding="0" cellspacing="0" border="0" width="80%" align="center">';
		while ($rez = mysql_fetch_assoc($qur)) {
				// $out .= '<tr><td><b>'.date('H:i d.m.Y',$rez['data_c']).'</b> <a href="?news&id='.$rez['id'].'">'.stripslashes($rez['title']).'</a></td></tr>';
			$out .= '<li><a href="doings.php?news&id='.$rez['id'].'">'.stripslashes($rez['title']).'</a></li>';
		}
			// $out .= '</table>';
		$out .= '</ul>';
	}
	// }
	return $out;
}
echo news();
?>