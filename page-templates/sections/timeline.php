<?php
$heading = get_sub_field('heading');
$heading_tag = get_sub_field('heading_tag');
$text = get_sub_field('text');
$elements = get_sub_field('elements');
?>


<div class="timeline">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <?php if ($heading) : ?>
                    <?php echo maweo_get_heading($heading, $heading_tag, "timeline__heading") ?>
                <?php endif; ?>
                <?php if ($text) : ?>
                    <div class="maweo-wysiwyg timeline__text">
                        <?php echo $text ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="timeline__elements">
                    <?php foreach ($elements as $element) : ?>
                        <?php $image = get_image_data($element['image']); ?>
                        <div class="timeline__element">
                            <?php if ($image) : ?>
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="timeline__element-image" >
                            <?php endif; ?>
                            <div class="timeline__element-circle"></div>
                            <div class="timeline__element-content">
                                <?php if ($element['year']) : ?>
                                    <strong class="timeline__element-year">
                                        <?php echo $element['year'] ?>
                                    </strong>
                                <?php endif; ?>
                                <?php if ($element['text']) : ?>
                                    <div class="maweo-wysiwyg timeline__element-text">
                                        <?php echo $element['text'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>