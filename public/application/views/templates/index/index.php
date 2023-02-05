Добро пожаловать
<?php if ($this->ion_auth->logged_in()) : ?>
		<br><?php echo $user[0]->email; ?>
	<?php if ($this->ion_auth->is_admin()) : ?>
		<br><a href="/auth">Управление</a>
	<?php endif; ?>	
	<br><a href="/auth/logout">Выход</a> 
<?php endif; ?>
