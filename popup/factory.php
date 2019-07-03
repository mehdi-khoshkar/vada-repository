<?php

class WordPressColumn {


		/**
	 * Attach this column by using WordPress filters and actions
	 * If the post type is different from 'post' and 'page' then add a new word to filters and actions to dynamically target our columns
	 * If the post type is a page, then change the for_type variable so that the column is added to the pages section
	 * @return void 
	 */
	public function attach() {
		$post_type = '';
		if( $this->options['post_type'] != 'post' && $this->options['post_type'] != 'page'   ){
			$post_type = '_' . $this->options['post_type'];
		}
		$for_type = 'posts';
		if( $this->options['post_type'] == 'page' ) {
			$for_type = 'pages';
		}
		add_filter('manage' . $post_type . '_' . $for_type . '_columns' , array( $this, 'add_column' ) );
		add_action( 'manage' . $post_type . '_' . $for_type . '_custom_column', array( $this, 'column_data' ), 10, 2);
	}

	public $columns = array();
	public function __construct( $columns ) {
		$this->columns = $columns;
	}
	public function add_columns() {
		foreach ( $this->columns as $column ) {
			$column->attach();
		}
	}


}