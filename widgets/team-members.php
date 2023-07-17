<?php
class Team_Member_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'team_widget';
	}

	public function get_title() {
		return esc_html__( 'Team Widget', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-person';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'Team', 'Members' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Ashraf Uddin', 'elementor-addon' ),
			]
		);
		$this->add_control(
			'designation',
			[
				'label' => esc_html__( 'Designaton', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Developer', 'elementor-addon' ),
			]
		);
		$this->add_control(
			'photo',
			[
				'label' => esc_html__( 'Photo', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				
			]
		);

		$this->end_controls_section();

		// Content Tab End


		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-widget' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<pre>
			<?php echo var_dump($settings)?>
		</pre>

		<!-- <div class="ashraf-team-widget">
			<div class="team-member-photo">
				<?php echo wp_get_attachment_image($settings['photo'], ['id'],'large')?>
			</div>
		</div> -->

		<?php
	}
}