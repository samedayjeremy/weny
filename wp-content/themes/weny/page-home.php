<?php get_header(); ?>


<section id="intro" class='content-box row' data-speed="6" data-type="background">
    <div class='arrow down'></div>
    <div class="dark">
        <!--<div class=''> <!-- col-md-8 col-md-offset-2 col-xs-offset-2 col-xs-8-->
            <img src='wp-content/themes/weny/images/white_logo.png' />
        <!--</div>-->
    </div>
    <div class='arrow up'></div>
</section>

<section id="copy" class='row' data-speed="6" data-type="background">
    <div class='arrow down'></div>
    <div class='inner'>
        <div class='headline'>Our Story</div>
        <div class='columns'>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum tellus quis nulla placerat dignissim. Ut at erat ut mi fringilla lacinia sed eu sem. Curabitur at ipsum at mi dictum sagittis. Fusce ullamcorper diam id pulvinar molestie. Cras erat tellus, porttitor at posuere vitae, dapibus sed orci. Duis sed risus lectus. Integer a ullamcorper massa, nec placerat lacus.

Vivamus a metus condimentum, venenatis quam in, blandit elit. In hac habitasse platea dictumst. Nam tellus lectus, tristique vel odio eu, hendrerit vestibulum diam. Nulla facilisi. Nulla ultricies id leo a vestibulum. Duis id mi euismod, laoreet nisi ac, rutrum sem. Mauris nec venenatis libero. Maecenas rhoncus sed leo id efficitur. Phasellus quis est sit amet eros fermentum tempus.

Vivamus vitae elementum risus, sed faucibus urna. Vivamus condimentum mattis vehicula. Phasellus condimentum mattis blandit. Sed vehicula vehicula mollis. Nam non lacus eget massa euismod tempor nec mollis est. Cras sit amet urna at ipsum mollis efficitur. Duis ligula eros, mattis ac viverra eu, vehicula eget enim.

Nam luctus aliquam felis, sed ultrices nisi egestas a. Nullam ornare auctor tortor ac dignissim. Nullam hendrerit eget turpis id ultrices. Pellentesque ut rhoncus mi. Proin at arcu odio. Donec ac suscipit sem. Morbi condimentum facilisis nulla, nec mollis felis vestibulum vitae. Maecenas id est lobortis massa aliquet dignissim. Vivamus blandit nisl at magna convallis, ut mollis nulla vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque dapibus lacinia mauris nec elementum. Fusce at nunc tortor. Aenean vehicula est vulputate arcu ultrices, id convallis ligula posuere. Donec suscipit id urna at vehicula. Sed gravida pretium fermentum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum tellus quis nulla placerat dignissim. Ut at erat ut mi fringilla lacinia sed eu sem. Curabitur at ipsum at mi dictum sagittis. Fusce ullamcorper diam id pulvinar molestie. Cras erat tellus, porttitor at posuere vitae, dapibus sed orci. Duis sed risus lectus. Integer a ullamcorper massa, nec placerat lacus.

Vivamus a metus condimentum, venenatis quam in, blandit elit. In hac habitasse platea dictumst. Nam tellus lectus, tristique vel odio eu, hendrerit vestibulum diam. Nulla facilisi. Nulla ultricies id leo a vestibulum. Duis id mi euismod, laoreet nisi ac, rutrum sem. Mauris nec venenatis libero. Maecenas rhoncus sed leo id efficitur. Phasellus quis est sit amet eros fermentum tempus.
        </div>
    </div>
    <div class='arrow up'></div>
</section>

<section id="interact" class='content-box row' data-speed="6" data-type="background">
    <div class='dark'>
        <div class='headline'>Membership</div>
        <div class='inner'>
            Thank you for your interest in becoming a member!<br />
            We will send you an email shortly detailing the next steps.
        </div>
    </div>
</section>


<?php
    while ( have_posts() ) : the_post();

       
    endwhile;
?>
<?php get_footer(); ?>