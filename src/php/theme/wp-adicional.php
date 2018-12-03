<?

// Woocommerce rating stars always
function your_get_rating_html( $id ) {
    //   if ( $rating > 0 ) {
    //     $title = sprintf( __( 'Rated %s out of 5', 'woocommerce' ), $rating );
    //   } else {
    //     $title = 'Not yet rated';
    //     $rating = 0;
    //   }
    // $id 
    global $post;
    // $id = $post->get_id();
    // echo '-->'.$id;
    $best = get_option('kksr_stars');
    // print_r ($best);
    
        $score = get_post_meta($id, '_kksr_ratings', true) ? ((int) get_post_meta($id, '_kksr_ratings', true)) : 0;
        $votes = get_post_meta($id, '_kksr_casts', true) ? ((int) get_post_meta($id, '_kksr_casts', true)) : 0;
        $avg = $score && $votes ? round((float)(($score/$votes)*($best/5)), 1) : 0;
        $per = $score && $votes ? round((float)((($score/$votes)/5)*100), 2) : 0;
        $all_ra = compact('best', 'score', 'votes', 'avg', 'per');
    // echo 'p->'.$avg;
    $rating  = $avg;
    
    
            $legend = get_option('kksr_legend');
            $leg = str_replace('[total]', '<span itemprop="ratingCount">'.$votes.'</span>', $legend);
            $leg = str_replace('[avg]', '<span itemprop="ratingValue">'.$avg.'</span>', $leg);
            $leg = str_replace('[per]',  $per .'%', $leg);
            $leg = str_replace('[s]', $votes == 1 ? '' : 's', $leg);
            $leg = str_replace('[best]', $best, $leg);
            // echo $leg;
            //    $rating_html .= '<p>' . $leg .'</p>';
    
    //    $rating_html  = '<div class="star-rating" title="produto_' . $id . '">';
    //    $rating_html .= '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%">   XXXXXXXXXXXX </span>';
    $rating_html .='<div class="kk-star-ratings  top-left lft" >
    <div class="kksr-stars kksr-star gray">
        <div class="kksr-fuel kksr-star yellow" style="width: '.$per.'%;"></div>
        <!-- kksr-fuel --><a href="#1" onclick="return false;"></a><a href="#2" onclick="return false;"></a><a href="#3"></a><a href="#4"></a><a href="#5"></a>
    </div>
</div>';
// $rating_html .= '<div class="kksr-stars kksr-star gray"> ';
// $rating_html .= '<div class="kksr-fuel kksr-star yellow" style="width: 80%;"></div>';
// $rating_html .= '<a href="#1"></a> <a href="#2"></a> <a href="#3"></a> <a href="#4"></a> <a href="#5"></a>';
// $rating_html .= '</div>';
    // $rating_html .= $leg;
    //    $rating_html .= '</div>';
    
    // $markup = '
    // <!-- kk-star-ratings -->
    // <div class="kk-star-ratings '.($disabled || ( get_option('kksr_disable_in_archives')) ? 'disabled ' : ' ').$pos.($pos=='top-right'||$pos=='bottom-right' ? ' rgt' : ' lft').'" data-id="'.$product->id.'">
    //     <div class="kksr-stars kksr-star gray">
    //         <div class="kksr-fuel kksr-star '.($disabled ? 'orange' : 'yellow').'" style="width:0%;"></div>
    //         <!-- kksr-fuel -->';
    // $total_stars = get_option('kksr_stars');
    
    // for($ts = 1; $ts <= $total_stars; $ts++)
    // {
    //     $markup .= '<a href="#'.$ts.'"></a>';
    // }
    // $markup .='
    //     </div>
    //     <!-- kksr-stars -->
    // </div>
    // <!-- kk-star-ratings -->
    // ';
    // // $markup .= get_option('kksr_clear') ? '<br clear="both" />' : '';
    // return $markup;
    
    
    
       return $rating_html;
    }