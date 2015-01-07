<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title><?= $page['title']; ?></title>
    <meta name="description" content="">

    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
    
    <?php if (isset($page['header_includes'])): foreach ($page['header_includes'] as $include): ?>
        <?php if ($include['type'] == 'js'): ?>
            <script src="<?= $include['link']; ?>"></script>
        <?php else: ?>
            <link href="<?= $include['link']; ?>" rel="stylesheet">
        <?php endif; ?>
    <?php endforeach; endif; ?>
    
    <?= (isset($page['header_js']) ? $page['header_js'] : ''); ?>
</head>
<body>
	<div class="wrap">