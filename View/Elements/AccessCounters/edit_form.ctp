<?php
/**
 * AccessCounter edit template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<?php echo $this->Form->hidden('Frame.id'); ?>

<?php echo $this->Form->hidden('Block.id'); ?>

<?php echo $this->Form->hidden('Block.key'); ?>

<?php echo $this->Form->hidden('Block.language_id'); ?>

<?php echo $this->Form->hidden('Block.room_id'); ?>

<?php echo $this->Form->hidden('Block.plugin_key'); ?>

<?php echo $this->Form->hidden('AccessCounter.id'); ?>

<?php echo $this->Form->hidden('AccessCounter.block_key'); ?>

<?php echo $this->NetCommonsForm->input('Block.name', array(
		'type' => 'text',
		'label' => __d('access_counters', 'Access counter name'),
		'required' => true
	)); ?>

<?php if (! PageLayoutHelper::$frame['block_id']) : ?>
	<?php echo $this->element('AccessCounterFrameSettings/edit_form'); ?>
<?php endif; ?>

<?php echo $this->NetCommonsForm->input('AccessCounter.count_start', array(
		'type' => 'number',
		'label' => __d('access_counters', 'Starting Value'),
		'disabled' => (bool)$this->data['AccessCounter']['id']
	)); ?>

<?php echo $this->element('Blocks.public_type');
