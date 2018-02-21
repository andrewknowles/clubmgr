<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
			<meta charset="UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="Bowling In Mill Hill Park" />
			<meta name="keywords" content="bowling, bowls, green" />
			<meta name="author" content="Andrew Knowles" />
	<!--PAGE TITLE -->
			<title>Mill Hill Bowling Club | BBPSBC </title>
	<!--CSS -->
			<link href="css/main2.css" rel="stylesheet" type="text/css" media="screen" />
			<link rel="stylesheet" href="css/sliderstyle.css" />

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>

<?php
//imgfix is passed from html page that calls this gallery
$mypath = $_GET['imgfix'];
//$mypath = "./images/2017/2017";
$mypath1 = $mypath . 't';
$mypath2 = $mypath . 'c';

//$imagesTotal = $_GET['numimg'];     // SET TOTAL IMAGES IN GALLERY
$imagesTotal = 5;
//	$imagesTotal = 8;     // SET TOTAL IMAGES IN GALLERY
?>

<div class="galleryContainer">

	<div class="galleryThumbnailsContainer">
		<div class="galleryThumbnails">
<?php
	for ($t = 1; $t <= $imagesTotal; $t++) {
	if ($t ==8 || $t==16 || $t==24) {echo '<br>';}

	echo '<a href="javascript: changeimage(' . $t . ')" class="thumbnailsimage' . $t . '"><img src='.$mypath1.$t.'.jpg width="auto" height="100" alt="" /></a>';
//		echo '<a href="javascript: changeimage(' . $t . ')" class="thumbnailsimage' . $t . '"><img src="./images/bbpsbc' . $t . '.jpg" width="auto" height="100" alt="" /></a>';
}
?>
		</div>
	</div>
	<div class="galleryPreviewContainer">
		<div class="galleryPreviewImage">
			<?php
				for ($i = 1; $i <= $imagesTotal; $i++) {
					echo '<img class="previewImage' . $i . '" src='.$mypath2.$i.'.jpg width="1250" height="auto" alt="" />';
				}
			?>
		</div>

<!--		<div class="galleryPreviewArrows">
			<a href="#" class="previousSlideArrow">&lt;</a>
			<a href="#" class="nextSlideArrow">&gt;</a>
		</div>-->
	</div>

	<!--<div class="galleryNavigationBullets">-->
		<?php
	//		for ($b = 1; $b <= $imagesTotal; $b++) {
	//			echo '<a href="javascript: changeimage(' . $b . ')" class="galleryBullet' . $b . '"><span>Bullet</span></a> ';
	//		}
	//	?>
	<!--</div>-->
</div>


<script type="text/javascript">
// init variables
var imagesTotal = <?php echo $imagesTotal; ?>;
var currentImage = 1;
var thumbsTotalWidth = 0;

$('a.galleryBullet' + currentImage).addClass("active");
$('a.thumbnailsimage' + currentImage).addClass("active");


// SET WIDTH for THUMBNAILS CONTAINER
$(window).load(function() {
	$('.galleryThumbnails a img').each(function() {
		thumbsTotalWidth += $(this).width() + 10 + 8;
	});
	$('.galleryThumbnails').width(thumbsTotalWidth);
});


// PREVIOUS ARROW CODE
$('a.previousSlideArrow').click(function() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	currentImage--;

	if (currentImage == 0) {
		currentImage = imagesTotal;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();

	return false;
});
// ===================


// NEXT ARROW CODE
$('a.nextSlideArrow').click(function() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();

	return false;
});
// ===================


// BULLETS CODE
function changeimage(imageNumber) {
	$('img.previewImage' + currentImage).hide();
	currentImage = imageNumber;
	$('img.previewImage' + imageNumber).show();
	$('.galleryNavigationBullets a').removeClass("active");
	$('.galleryThumbnails a').removeClass("active");
	$('a.galleryBullet' + imageNumber).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
}
// ===================


// AUTOMATIC CHANGE SLIDES
function autoChangeSlides() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();
}

var slideTimer = setInterval(function() {autoChangeSlides(); }, 3000);
</script>

</body>
</html>
