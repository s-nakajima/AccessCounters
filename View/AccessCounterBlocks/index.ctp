<?php
/**
 * AccessCounterBlocks index template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<div class="modal-body">
	<?php echo $this->element('NetCommons.setting_tabs', $settingTabs); ?>

	<div class="tab-content">
		<div class="text-right">
			<a class="btn btn-success" href="<?php echo $this->Html->url('/access_counters/access_counters/add/' . $frameId);?>">
				<span class="glyphicon glyphicon-plus"> </span>
			</a>
		</div>

		<div id="nc-link-setting-<?php echo $frameId; ?>">
			<?php echo $this->Form->create('', array(
					'url' => '/frames/frames/edit/' . $frameId
				)); ?>

				<?php echo $this->Form->hidden('Frame.id', array(
						'value' => $frameId,
					)); ?>

				<table class="table table-hover">
					<thead>
						<tr>
							<th></th>
							<th>
								<?php echo $this->Paginator->sort('Block.name', __d('access_counters', 'Access counter name')); ?>
							</th>
							<th>
								<?php echo $this->Paginator->sort('AccessCounter.count', __d('access_counters', 'Count number')); ?>
							</th>
							<th>
								<?php echo $this->Paginator->sort('AccessCounter.modified', __d('net_commons', 'Created datetime')); ?>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($accessCounters as $accessCounter) : ?>
							<tr<?php echo ($blockId === $accessCounter['Block']['id'] ? ' class="active"' : ''); ?>>
								<td>
									<?php echo $this->Form->input('Frame.block_id',
										array(
											'type' => 'radio',
											'name' => 'data[Frame][block_id]',
											'options' => array((int)$accessCounter['Block']['id'] => ''),
											'div' => false,
											'legend' => false,
											'label' => false,
											'hiddenField' => false,
											'checked' => (int)$accessCounter['Block']['id'] === (int)$blockId,
											'onclick' => 'submit()'
										)); ?>
								</td>
								<td>
									<a href="<?php echo $this->Html->url('/access_counters/access_counters/edit/' . $frameId . '/' . (int)$accessCounter['Block']['id']); ?>">
										<?php echo h($accessCounter['Block']['name']); ?>
									</a>
								</td>
								<td>
									<?php echo (int)$accessCounter['AccessCounter']['count']; ?>
								</td>
								<td>
									<?php echo $this->Date->dateFormat($accessCounter['AccessCounter']['created']); ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php echo $this->Form->end(); ?>

			<?php echo $this->element('NetCommons.paginator'); ?>
		</div>
	</div>
</div>




