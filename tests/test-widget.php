<?php

class SBB_Widget_Test extends WP_UnitTestCase {

	/**
	 * Confirm widget class is defined.
	 *
	 * @since NEXT
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'SBB_Widget' ) );
	}
}
