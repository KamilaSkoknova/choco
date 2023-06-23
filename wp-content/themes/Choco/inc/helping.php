<?php 

//zlučovanie pre menu page chef
if ( ! function_exists( 'extend_array')) :

    /**
     * @return array
     */

    function extend_array() {
        $args = func_get_args();
        $extended = array();

        if (is_array($args) && count($args)){
            foreach ($args as $array) {
                if (!is_array($array)) continue;
                $extended = array_merge( $extended, $array);
            }
        }

        return $extended;
    }
endif;