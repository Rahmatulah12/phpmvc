<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <link rel="icon" href="img/rahmat.ico"> -->
	<meta charset="UTF-8">
	<title><?php echo $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/about.css">
</head>
<body>

<!-- Image and text -->
<nav class="navbar navbar-dark navbar-expand-lg bg-info fixed-top mb-5">
  <div class="container">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav font-weight-bold">
	    <?php if($data['link'] === BASEURL): ?>
	      <li class="nav-item active">
	    <?php else: ?>
	      <li class="nav-item ">
		<?php endif; ?>
	        <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	    <?php if($data['link'] === BASEURL . '/about'): ?>
	      <li class="nav-item active">
	    <?php else: ?>
	      <li class="nav-item ">
		<?php endif; ?>
	        <a class="nav-link" href="<?= BASEURL; ?>/about">About Me</a>
	      </li>
	    <?php if($data['link'] === BASEURL . '/about/page'): ?>
	      <li class="nav-item active">
	    <?php else: ?>
	      <li class="nav-item ">
		<?php endif; ?>
	        <a class="nav-link" href="<?= BASEURL; ?>/about/page">My Pages</a>
	      </li>
	    <?php if($data["link"] === BASEURL . '/mahasiswa'): ?>
	     	<li class="nav-item active">
		<?php else : ?>
			<li class="nav-item">
		<?php endif; ?>
	     		<a href="<?= BASEURL; ?>/mahasiswa" class="nav-link">Mahasiswa</a>
	     	</li>
	    </ul>
	  </div>
  </div>
</nav>
<div class="container mt-5 pt-1">