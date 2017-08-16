<?php

			header('Content-disposition: attachment; filename=sozlesme.doc');
			header('Content-type: application/doc');
			header("Access-Control-Allow-Origin: *");
			readfile('sozlesme.doc');
			
?>