<div class="tw-w-full tw-mb-8 tw-pl-4">
	<?php print_r($messages);  ?>
  <div class="md:tw-w-full md:tw-mx-auto tw-bg-white tw-rounded-t-lg tw-shadow-lg tw-px-4 tw-py-2">	
 	<h2 class="tw-text-lg tw-font-semibold">User Log In</h2>	
    <div class="form-item form-type-textfield form-item-name tw-flex tw-items-center">
      <input id="<?php echo $form['name']['#id'];  ?>" type="text" placeholder="<?php echo $form['name']['#title']  ?>" 
				name="<?php echo $form['name']['#name'];  ?>" 
				class="tw-w-full tw-p-2 tw-border-transparent tw-rounded tw-bg-gray-200 hover:tw-bg-white hover:tw-border-solid hover:tw-border-gray-500 tw-outline-none focus:tw-bg-white focus:tw-shadow-outline <?php if($form['pass']['#needs_validation']) echo 'tw-border-red-500 hover:tw-border-red-500';  ?>">
    </div>
    <div class="form-item form-type-textfield form-item-name tw-flex tw-items-center">
		<input id="<?php echo $form['pass']['#id'];  ?>" type="password" placeholder="<?php echo $form['pass']['#title']  ?>" 
				name="<?php echo $form['pass']['#name'];  ?>" 
				class="tw-w-full tw-p-2 tw-border-transparent tw-rounded tw-bg-gray-200 hover:tw-bg-white hover:tw-border-solid hover:tw-border-gray-500 tw-outline-none focus:tw-bg-white focus:tw-shadow-outline <?php if($form['pass']['#needs_validation']) echo 'tw-border-red-500 hover:tw-border-red-500';  ?> ">
    </div>
	</div>
	<?php
    print drupal_render($form['form_build_id']);
		print drupal_render($form['form_id']);
	?>
	<div class="md:tw-w-full md:tw-mx-auto tw-bg-gray-100 tw-rounded-b-lg tw-shadow-lg tw-px-4 tw-py-1">
		<div class="form-actions form-wrapper tw-text-center" id="edit-actions">
			<div>
				<input type="<?php echo $form['actions']['submit']['#type'];  ?>" id="<?php echo $form['actions']['submit']['#id'];  ?>" name="<?php echo $form['actions']['submit']['#name'];  ?>" value="<?php echo $form['actions']['submit']['#value'];  ?>" class="form-submit tw-font-base tw-cursor-pointer hover:tw-bg-blue-600 tw-bg-blue-500 tw-text-blue-100 tw-border-transparent tw-p-2 tw-rounded tw-font-semibold tw-w-full">
				<a href="/user/password"  class="tw-text-gray-700 tw-p-2 hover:tw-underline tw-cursor-pointer hover:tw-text-blue-500 tw-w-full tw-text-sm">Request new password</a>
			</div>
		</div>
	</div>
</div>
