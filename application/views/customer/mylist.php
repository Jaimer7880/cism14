
<?php
//customer/mylist.php

		$this->load->view($this->config->item('theme').'header');//include path to the views file//data passed from controller into this view
		echo '<h1>List of Customers</h1>';
		if($query->num_rows()>0){
			//loop thru data
				foreach($query->result()as $customer){
            
					echo '<p>';
            		echo '<p>CustomerID:' .$customer->CustomerID . '</p>';
            		echo '<p>FirstName:' .$customer->FirstName . '</p>';
            		echo '<p>LastName:' .$customer->LastName . '</p>';
            		echo '<p>Email:' .$customer->Email . '</p>';
					echo anchor('customer/view/'. $customer->CustomerID,'View Customer Details');
           			echo '</p>';
        		}
        
			}
			else{
				echo '<p>Sorry, no customers</p>';
				//sorry no customers
			}
		
		$this->load->view($this->config->item('theme').'footer');//include path to the views file//data passed from controller into this view

		
	?>
		