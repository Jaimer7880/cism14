
<?php
//customer/default.php

		$this->load->view($this->config->item('theme').'header');//include path to the views file//data passed from controller into this view
		foreach($query as $customer)
        {
            //var_dump($customer);
            echo '<code>' .$customer['FirstName'] . '</code>';
        }
				$this->load->view($this->config->item('theme').'footer');//include path to the views file//data passed from controller into this view

		
	?>
		