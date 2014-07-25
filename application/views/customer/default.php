
<?php
//customer/default.php

		$this->load->view($this->config->item('theme').'header');//include path to the views file//data passed from controller into this view
		
		echo '<h1>Default Customer Page</h1>';
        
		$this->load->view($this->config->item('theme').'footer');//include path to the views file//data passed from controller into this view

		
	?>
		