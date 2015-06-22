<?php
if(file_exists('C:\xampp\htdocs\pictures\Kris\movie_tmp\out.mp4'))
{
	echo "File is exist!";
}
else
{
	$last_line = system('C:\xampp\htdocs\ffmpeg-static\bin\ffmpeg -framerate 1/5 -i C:\xampp\htdocs\pictures\Kris\movie_tmp\%d.jpg -i C:\xampp\htdocs\pictures\Kris\movie_tmp\music.mp3 -c:v libx264 -r 30 -pix_fmt yuv420p C:\xampp\htdocs\pictures\Kris\movie_tmp\out.mp4', $return_var);
	echo "finish!";
}

?>