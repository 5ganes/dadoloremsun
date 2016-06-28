<div id="sidebar-left" class="sidebar cf">
	<div id="widgets-wrap-sidebar-left">

		<div id="text-9" class="widget-sidebar frontier-widget widget_text">
	      <?php
	      $officer=$groups->getById(OFFICER); $officer=$conn->fetchArray($officer);
	      ?>
	      <h4 class="widget-title"><?=$officer['name'];?></h4>
	      <div class="textwidget">
	        <a><img src="<?=CMS_GROUPS_DIR.$officer['image'];?>"></a>
	        <?=$officer['shortcontents'];?>
	      </div>
	      <a></a>
	    </div>

	    <div id="text-2" class="widget-sidebar frontier-widget widget_text">
			<?php
			$info_officer=$groups->getById(INFO_OFFICER); $info_officer=$conn->fetchArray($info_officer);
			?>
			<h4 class="widget-title"><?php echo $info_officer['name'];?></h4>
			<div class="textwidget">
				<a href="<?=$info_officer['urlname']; ?>">
				<img src="<?=CMS_GROUPS_DIR.$info_officer['image'];?>" <figcaption="">
				<?=$info_officer['shortcontents']; ?>
				</a>
			</div>
		</div>

		<div id="text-3" class="widget-sidebar frontier-widget widget_text">
			<h4 class="widget-title">उपयोगी लिङ्क्स</h4>
			<div class="textwidget">
				<?php
				$links=$groups->getByParentId(LINKS);
				while($linksGet=$conn->fetchArray($links)){?>
					<a href="<?=$linksGet['contents'];?>" title="<?=$linksGet['name']?>" target="_blank">
						<?=$linksGet['name']?>
					</a><br>
				<?php }?>
			</div>
		</div>		
	</div>
</div>
<div class="dynamic">