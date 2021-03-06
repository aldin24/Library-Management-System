<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?= $title ?></title>
		<link rel="stylesheet" type="text/css" href="<?= base_url()."css/bootstrap.min.css" ?>" />
		<link rel="stylesheet" type="text/css" href="<?= base_url()."css/custom.css" ?>" />
		<script src="<?= base_url()."js/jquery.js" ?>"></script>
		<script src="<?= base_url()."js/bootstrap.js" ?>"></script>
		<script src="<?= base_url()."js/datatables.js" ?>"></script>
		<script src="<?= base_url()."js/datatables.bootstrap.js" ?>"></script>


	</head>
	<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/index.php/">Library System Managment</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/index.php/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php/book/">View Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php/login/">Login</a>
      </li>

    </ul>
  </div>
</nav>
