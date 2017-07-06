<li data-name="<?= $view->escape($file_name) ?>">
    <div class="image" style="background-image:url(<?= $file_url ?>)"></div>
    <?= $hidden_input ?>
    <div class="options">
        <?php if($markdown_link): ?>
        <a class="add-to-markdown btn btn-default" data-target="<?= $view->escape($markdown_link) ?>"><i class="fa fa-send" title="<?= $view->escape($text_send_to_markdown) ?>"></i></a>
        <?php endif ?>
        <!-- <a class="default-image btn <?= 1 ? 'btn-pink' : 'btn-default' ?>"><i class="fa fa-star" title="SET AS DEFAULT TEXT"></i></a> -->
        <a class="delete-image btn btn-danger"><i class="fa fa-trash" title="<?= $view->escape($text_delete_image) ?>"></i></a>
    </div>

</li>
