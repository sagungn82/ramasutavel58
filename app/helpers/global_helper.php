<?php


use Illuminate\Support\Facades\DB;

function getExt($filename)
{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	return $ext;
}


function get_top_banner()
{
	$image_banner = DB::table('sliders')->where('category', '1')->first();

	return $image_banner->gambar ?? '';;
}


function getThumb($filename)
{
	$existing_image_name = pathinfo($filename, PATHINFO_FILENAME);
	$existing_image_ext = pathinfo($filename, PATHINFO_EXTENSION);

	$img_thumb = $existing_image_name . '_thumb.' . $existing_image_ext;

	return $img_thumb;
}


function getRunningText()
{
	$running_texts = DB::table('running_texts')->where('publish', 'Y')->limit(5)->get();


	echo '<ul>';
	foreach ($running_texts as $value) {
		echo '
						<div>
							<li>
								<span>
									' . $value->title . ' &ndash;
									<a href="' . $value->link . '" target="_blank">'.($value->title === "." ? "" : "Selengkapnya...").'</a>
								</span>
							</li>
						</div>
						';
	}
	echo '</ul>';
}
function getMeta($id) {
	return DB::table('blogs')->where('id', $id)->first();
}