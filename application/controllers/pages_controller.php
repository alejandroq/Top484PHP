<?php
	class PageController {
		public function home() {
			$first_name = 'Jon';
			$last_name = 'Snow';
			require_once('../application/views/pages/home.php');
		}

		public function error() {
			require_once('../application/views/pages/error.php');
		}
	}
?>