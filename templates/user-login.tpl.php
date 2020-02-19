<div class="tw-w-full">
  <div class="md:tw-w-2/3 md:tw-mx-auto tw-bg-white tw-rounded-t-lg tw-shadow-lg tw-px-4 tw-py-4">	
		<?php print_r($messages);  ?>
    <div class="form-item form-type-textfield form-item-name tw-flex tw-items-center">
      <label for="<?php echo $form['name']['#id'];  ?>" class="tw-text-lg tw-mb-2 md:tw-mb-0 md:tw-w-1/5"><?php echo $form['name']['#title']  ?></label>
			<input id="<?php echo $form['name']['#id'];  ?>" type="text" 
				name="<?php echo $form['name']['#name'];  ?>" 
				class="tw-w-full tw-p-2 tw-border-transparent tw-rounded tw-bg-gray-200 hover:tw-bg-white hover:tw-border-solid hover:tw-border-gray-500 tw-outline-none focus:tw-bg-white focus:tw-shadow-outline <?php if($form['pass']['#needs_validation']) echo 'tw-border-red-500 hover:tw-border-red-500';  ?>">
    </div>
    <div class="form-item form-type-textfield form-item-name tw-flex tw-items-center">
      <label for="<?php echo $form['pass']['#id'];  ?>" class="tw-text-lg tw-mb-2 md:tw-mb-0 md:tw-w-1/5"><?php echo $form['pass']['#title']  ?></label>
			<input id="<?php echo $form['pass']['#id'];  ?>" type="password" 
				name="<?php echo $form['pass']['#name'];  ?>" 
				class="tw-w-full tw-p-2 tw-border-transparent tw-rounded tw-bg-gray-200 hover:tw-bg-white hover:tw-border-solid hover:tw-border-gray-500 tw-outline-none focus:tw-bg-white focus:tw-shadow-outline <?php if($form['pass']['#needs_validation']) echo 'tw-border-red-500 hover:tw-border-red-500';  ?> ">
    </div>
	</div>
	<?php
    print drupal_render($form['form_build_id']);
		print drupal_render($form['form_id']);
	?>
	<div class="md:tw-w-2/3 md:tw-mx-auto tw-bg-gray-100 tw-rounded-b-lg tw-shadow-lg tw-px-4 tw-py-1">
		<div class="form-actions form-wrapper tw-flex tw-justify-between tw-items-center" id="edit-actions">
			<div>	
				<!--a href="/user/register" class="tw-font-base tw-cursor-pointer hover:tw-bg-blue-600 hover:tw-border-transparent  tw-border-2 tw-border-gray-700 tw-text-gray-700 hover:tw-text-blue-100 tw-p-2 tw-rounded tw-font-semibold">Create Account</a-->
			</div>
			<div>
				<input type="<?php echo $form['actions']['submit']['#type'];  ?>" id="<?php echo $form['actions']['submit']['#id'];  ?>" name="<?php echo $form['actions']['submit']['#name'];  ?>" value="<?php echo $form['actions']['submit']['#value'];  ?>" class="form-submit tw-font-base tw-cursor-pointer hover:tw-bg-blue-600 tw-bg-blue-500 tw-text-blue-100 tw-border-transparent tw-p-2 tw-rounded tw-font-semibold">
				<a href="/user/password"  class="tw-text-gray-700 tw-p-2 hover:tw-underline tw-cursor-pointer hover:tw-text-blue-500">Request new password</a>
			</div>
		</div>
	</div>
</div>
