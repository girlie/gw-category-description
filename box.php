<?php
/*
Name: Category Description Box
Author: GirlieWorks, LLC
Description: Display Category Description
Version: 1.2
Class: gwthesis_category_description
*/

class gwthesis_category_description extends thesis_box {
	public $templates = array('archive');

	protected function translate() {
		$this->title = __('Category Description', $this->_class);
	}

	public function html() {
		if (is_category()) {
		?>
		<div class="catdesc"><?php echo category_description(); ?></div>
		<?php }
	}
}
