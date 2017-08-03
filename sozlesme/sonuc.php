<?php

			header('Content-disposition: attachment; filename=sozlesme.doc');
			header('Content-type: application/doc');
			readfile('sozlesme.doc');
			


?>