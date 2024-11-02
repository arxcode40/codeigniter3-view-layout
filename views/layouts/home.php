<?php $this->layout->extend('layouts/default') ?>

<?php $this->layout->section('content') ?>
	<?php $this->layout->include('layouts/image', array('url' => 'https://picsum.photos/300/200')) ?>

	<h1>View Layout</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<?php $this->layout->end_section() ?>
