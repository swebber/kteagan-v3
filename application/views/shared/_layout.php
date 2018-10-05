<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 

    $isActive = '';
    if (isset($active)) {
        $isActive = $active;
    }

    $pageTitle = 'kteagan.com';
    if (isset($title)) {
        $pageTitle = $title . ' - ' . $pageTitle;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><? echo $pageTitle; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/site.css'); ?>">
</head>
<body>

    <?php $this->load->view('shared/_navbar'); ?>

    <aside class="marquee-left hidden-xs">
        <p><a href="<?php echo site_url(); ?>" <?php if ($isActive === 'home'): echo 'class="active"'; endif; ?>>KELLY CARTER</a></p>
    </aside>

	<aside class="marquee hidden-xs">
		<p>
			<a href="<?php echo site_url('about'); ?>" <?php if ($isActive === 'about'): echo 'class="active"'; endif; ?>>ABOUT</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="https://www.dropbox.com/s/7er8k54biaspiek/KellyCarter_Resume_100518.pdf?dl=0" target="_blank" <?php if ($isActive === 'resume'): echo 'class="active"'; endif; ?>>RESUME</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url('elsewhere'); ?>" <?php 
                if ($isActive === 'elsewhere'): 
                    echo 'class="active"'; 
                    endif; 
            ?>>ELSEWHERE</a>
		</p>
	</aside>

	<?php echo $content; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/11bfe14d8a.js"></script>
    
    <?php if (isset($jsToLoad) && ($jsToLoad !== '')): ?>
        <script src="<?=$jsToLoad;?>"></script>
    <?php endif; ?>

</body>
</html>