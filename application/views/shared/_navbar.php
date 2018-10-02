<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 

    $isActive = '';
    if (isset($active)) {
        $isActive = $active;
    }
?>

<nav class="navbar navbar-inverse visible-xs">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Kelly Carter</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li <?php if ($isActive === 'home'): ?>class="active"<?php endif; ?>><a href="/">Home</a></li>
        <li <?php if ($isActive === 'about'): ?>class="active"<?php endif; ?>><a href="/about">About</a></li>
        <li <?php if ($isActive === 'resume'): ?>class="active"<?php endif; ?>><a href="https://www.dropbox.com/s/02klhtxzbhw3y9b/KellyWebber_Resume_020317.pdf?dl=0" target="_blank">Resume</a></li>
        <li <?php if ($isActive === 'elsewhere'): ?>class="active"<?php endif; ?>><a href="/elsewhere">Elsewhere</a></li>
        </ul>
    </div>
</nav>