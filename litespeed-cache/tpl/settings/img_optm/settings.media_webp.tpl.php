<?php
namespace LiteSpeed ;
defined( 'WPINC' ) || exit ;
?>

	<tr>
		<th class="litespeed-padding-left">
			<?php $id = Conf::O_IMG_OPTM_WEBP_REPLACE ; ?>
			<?php $this->title( $id ) ; ?>
		</th>
		<td>
			<?php $this->build_switch( $id ) ; ?>
			<div class="litespeed-desc">
				<?php echo sprintf( __( 'Significantly improve load time by replacing images with their optimized %s versions.', 'litespeed-cache' ), '.webp' ) ; ?>
				<br /><?php Doc::notice_htaccess() ; ?>
			</div>
		</td>
	</tr>
