<?php
/* @var $data News */
?>
<h4><?php echo CHtml::link(CHtml::encode($data->title), $data->getUrl()); ?></h4>
<p> <?php echo $data->short_text; ?></p>

<p class="text-right"><?php echo CHtml::link(Yii::t('NewsModule.news', 'read...'), $data->getUrl(), ['class' => 'btn btn-default']); ?></p>
<hr>
