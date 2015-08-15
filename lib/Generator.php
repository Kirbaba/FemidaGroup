<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 15.08.2015
 * Time: 12:21
 */

class Generator {
    public function generatorCategories($categories){
        $html = '';
        if( $categories ){
            $html .= '<ul class="li-container">';
            foreach( $categories as $cat ){
                $html .= '

    	            <li class="side-menu">
		                <ul>
			                <li class="sb-but"><a href="#nowhere" class="box1">♦ '.$cat->name.'</a></li>
                            <li class="dropdown" style="display: none;">';
                            $html .= $this->generatorPosts($cat->term_id);
                    $html .= '</li>
                        </ul>
                    </li>';
            }
            $html .= '</ul>';
        }
        return $html;
    }

    public function generatorPosts($id){
        $html = '';
        $posts = get_posts( array(
            'numberposts'     => -1, // тоже самое что posts_per_page
            'offset'          => 0,
            'category'        => $id,
            'orderby'         => 'post_date',
            'order'           => 'DESC',
            'include'         => '',
            'exclude'         => '',
            'meta_key'        => '',
            'meta_value'      => '',
            'post_type'       => 'post',
            'post_mime_type'  => '', // image, video, video/mp4
            'post_parent'     => '',
            'post_status'     => 'publish'
        ) );
        foreach($posts as $post){

            $html .= '<ul class="down">
			        	<li><a class="down_li" href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li></ul>';

        }
        return $html;
    }

} 