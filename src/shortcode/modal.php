<?php

class andyp_modal
{
    public $output = '';

    public $args = [];



    public function __construct($args)
    {
        wp_register_style( 'andyp_modal_css', ANDYP_MODALS_PATH.'src/sass/style.css' );
        wp_enqueue_style(  'andyp_modal_css');
    
        wp_register_script( 'andyp_modal_js', ANDYP_MODALS_PATH.'src/js/lazyload.js' );
        wp_enqueue_script(  'andyp_modal_js');
        
        $this->args = $args;
        if (!isset($this->args['id'])) {
            echo 'Argument ID not set';
            return;
        }
        if (!isset($this->args['src'])) {
            echo 'Argument SRC not set';
            return;
        }

        $this->enqueue_dynamic_css();

        $this->render();
    }


    public function output()
    {
        return $this->output;
    }


    public function render()
    {
        $this->output .= '<div class="modal-container">';
            

        $this->render_backdrop();

        $this->output .= '<div class="modal-content">';

        $this->render_close_button();

        $this->render_iframe();

        $this->output .= '</div>';

        $this->output .= '</div>';
    }

    public function render_backdrop()
    {
        $this->output .= '<input type="checkbox" id="'.$this->args['id'].'">';
            $this->output .= '<label class="modal-backdrop" for="'.$this->args['id'].'">';
        $this->output .= '</label>';
    }

    public function render_close_button()
    {
        $this->output .= '<label class="modal-close-btn" for="'.$this->args['id'].'">';
        $this->output .= '<svg width="29" height="29" viewBox="0 0 50 50">';
        $this->output .= '<line x1="10" y1="10" x2="40" y2="40"/>';
        $this->output .= '<line x1="40" y1="10" x2="10" y2="40"/>';
        $this->output .= '</svg>';
        $this->output .= '</label>';
    }

    public function render_iframe()
    {
        $this->output .= '<iframe id="'.$this->args['id'].'-iframe" ';
            $this->output .= 'data-src='.$this->args['src'];
        $this->output .= ' ></iframe>';
    }

    

    public function enqueue_dynamic_css()
    {

        wp_register_style( 'andyp_modal_css-'.$this->args['id'], false );

        $id = '#'.$this->args['id'];

        $pre = $id.' { display: none; } ';
        $pre .= $id.':checked ~ .modal-backdrop { opacity: 1; z-index: 998; } ';
        $pre .= $id.':checked ~ .modal-content {
            opacity: 1; 
            z-index: 999; 	
            background-color: #fff;
            overflow: auto;
            pointer-events: auto;
            cursor: auto;} ';

        wp_add_inline_style('andyp_modal_css-'.$this->args['id'], $pre);
        wp_enqueue_style('andyp_modal_css-'.$this->args['id']);

    }
}
