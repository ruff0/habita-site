<?
// image
$meta_image_url = ($image = $page->image()) ? thumb($image, array('width' => 1200, 'height' => 630, 'crop' => true))->url() : url('assets/images/sitting-meeting.jpg');
// description
$description = (isset($meta_descr)) ? $meta_descr : excerpt($page->text(), 160);
if (strlen($description) < 1) { $description = $site->description()->html(); }
?>

<meta name="description" content="<?= $description ?>">
<meta name="keywords" content="<?= $site->keywords()->html() ?>">

<!-- Social share parameters -->
<meta property="og:image" content="<?= (isset($meta_image)) ? $meta_image : $meta_image_url; ?>" />
<meta property="og:title" content="<?= $page->title() ?>" />
<meta property="og:site_name" content="<?= $site->title() ?>" />
<meta property="og:description" content="<?= $description ?>" />
