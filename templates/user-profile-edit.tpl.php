<div class="tw-bg-white tw-p-4 tw-rounded-lg tw-shadow-lg">
<?php
print render($form['form_id']);
print render($form['form_build_id']);
print render($form['form_token']);

print drupal_render_children($form);
?>
</div>
