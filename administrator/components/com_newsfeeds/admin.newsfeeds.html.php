<?php
/**
* @version $Id: admin.newsfeeds.html.php,v 1.3 2005/10/21 17:33:55 lang3 Exp $
* @package Mambo
* @subpackage Newsfeeds
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

/**
* @package Mambo
* @subpackage Newsfeeds
*/
class HTML_newsfeeds {

	function showNewsFeeds( &$rows, &$lists, $pageNav, $option ) {
		global $my, $adminLanguage;

		mosCommonHTML::loadOverlib();
		?>
		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th>
			<?php echo $adminLanguage->A_COMP_FEED_TITLE;?>
			</th>
			<td width="right">
			<?php echo $lists['category'];?>
			</td>
		</tr>
		</table>

		<table class="adminlist">
		<tr>
			<th width="20">
			<?php echo $adminLanguage->A_COMP_NB;?>
			</th>
			<th width="20">
			<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" />
			</th>
			<th class="title">
			<?php echo $adminLanguage->A_COMP_FEED_NEWS;?>
			</th>
			<th width="5%">
			<?php echo $adminLanguage->A_COMP_PUBLISHED;?>
			</th>
			<th colspan="2" width="5%">
			<?php echo $adminLanguage->A_COMP_REORDER;?>
			</th>
			<th class="title" width="20%">
			<?php echo $adminLanguage->A_COMP_CATEG;?>
			</th>
			<th width="5%" nowrap="nowrap">
			<?php echo $adminLanguage->A_COMP_FEED_ARTICLES;?>
			</th>
			<th width="10%">
			<?php echo $adminLanguage->A_COMP_FEED_CACHE;?>
			</th>
		</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$link 	= 'index2.php?option=com_newsfeeds&task=editA&hidemainmenu=1&id='. $row->id;

			$img 	= $row->published ? 'tick.png' : 'publish_x.png';
			$task	= $row->published ? $adminLanguage->A_COMP_MAMB_UNPUB : $adminLanguage->A_COMP_MAMB_PUB;
			$alt = $row->published ? $adminLanguage->A_COMP_PUBLISHED : $adminLanguage->A_COMP_UNPUBLISHED;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

			$row->cat_link 	= 'index2.php?option=com_categories&section=com_newsfeeds&task=editA&hidemainmenu=1&id='. $row->catid;
			?>
			<tr class="<?php echo 'row'. $k; ?>">
				<td align="center">
				<?php echo $pageNav->rowNumber( $i ); ?>
				</td>
				<td>
				<?php echo $checked; ?>
				</td>
				<td>
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					?>
					<?php echo $row->name; ?>
					&nbsp;[ <i><?php echo $adminLanguage->A_COMP_CHECKED_OUT;?></i> ]
					<?php
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo $adminLanguage->A_COMP_FEED_EDIT_FEED;?>">
					<?php echo $row->name; ?>
					</a>
					<?php
				}
				?>
				</td>
				<td width="10%" align="center">
				<a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')">
				<img src="images/<?php echo $img;?>" border="0" alt="<?php echo $alt; ?>" />
				</a>
				</td>
				<td align="center">
				<?php echo $pageNav->orderUpIcon( $i ); ?>
				</td>
				<td align="center">
				<?php echo $pageNav->orderDownIcon( $i, $n ); ?>
				</td>
				<td>
				<a href="<?php echo $row->cat_link; ?>" title="Edit Category">
				<?php echo $row->catname;?>
				</a>
				</td>
				<td align="center">
				<?php echo $row->numarticles;?>
				</td>
				<td align="center">
				<?php echo $row->cache_time;?>
				</td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0">
		</form>
		<?php
	}


	function editNewsFeed( &$row, &$lists, $option ) {
        global $adminLanguage;
		mosMakeHtmlSafe( $row, ENT_QUOTES );
		?>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			// do field validation
			if (form.name.value == '') {
				alert( "<?php echo $adminLanguage->A_COMP_FEED_FILL_NAME;?>" );
			} else if (form.catid.value == 0) {
				alert( "<?php echo $adminLanguage->A_COMP_FEED_SEL_CATEG;?>" );
			} else if (form.link.value == '') {
				alert( "<?php echo $adminLanguage->A_COMP_FEED_FILL_LINK;?>" );
			} else if (getSelectedValue('adminForm','catid') < 0) {
				alert( "<?php echo $adminLanguage->A_COMP_FEED_SEL_CATEG;?>" );
			} else if (form.numarticles.value == "" || form.numarticles.value == 0) {
				alert( "<?php echo $adminLanguage->A_COMP_FEED_FILL_NB;?>" );
			} else if (form.cache_time.value == "" || form.cache_time.value == 0) {
				alert( "<?php echo $adminLanguage->A_COMP_FEED_FILL_REFRESH;?>" );
			} else {
				submitform( pressbutton );
			}
		}
		</script>

		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th class="edit">
			<?php echo $adminLanguage->A_COMP_FEED_NEWS;?>: <small><?php echo $row->id ? $adminLanguage->A_COMP_EDIT : $adminLanguage->A_COMP_NEW;?></small> <small><small>[ <?php echo $row->name;?> ]</small></small>
			</th>
		</tr>
		</table>

		<table class="adminform">
		<tr>
			<th colspan="2">
			<?php echo $adminLanguage->A_DETAILS;?>
			</th>
		</tr>
		<tr>
			<td>
			<?php echo $adminLanguage->A_COMP_NAME;?>
			</td>
			<td>
			<input class="inputbox" type="text" size="40" name="name" value="<?php echo $row->name; ?>">
			</td>
		</tr>
		<tr>
			<td>
			<?php echo $adminLanguage->A_COMP_CATEG;?>
			</td>
			<td>
			<?php echo $lists['category']; ?>
			</td>
		</tr>
		<tr>
			<td>
			<?php echo $adminLanguage->A_COMP_FEED_LINK;?>
			</td>
			<td>
			<input class="inputbox" type="text" size="60" name="link" value="<?php echo $row->link; ?>">
			</td>
		</tr>
		<tr>
			<td>
			<?php echo $adminLanguage->A_COMP_FEED_NB_ARTICLE;?>
			</td>
			<td>
			<input class="inputbox" type="text" size="2" name="numarticles" value="<?php echo $row->numarticles; ?>">
			</td>
		</tr>
		<tr>
			<td>
			<?php echo $adminLanguage->A_COMP_FEED_IN_SEC;?>
			</td>
			<td>
			<input class="inputbox" type="text" size="4" name="cache_time" value="<?php echo $row->cache_time; ?>">
			</td>
		</tr>
		<tr>
			<td>
			<?php echo $adminLanguage->A_COMP_ORDERING;?>
			</td>
			<td>
			<?php echo $lists['ordering']; ?>
			</td>
		</tr>
		<tr>
			<td valign="top" align="right">
			<?php echo $adminLanguage->A_COMP_PUBLISHED;?>
			</td>
			<td>
			<?php echo $lists['published']; ?>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			</td>
		</tr>
		</table>

		<input type="hidden" name="id" value="<?php echo $row->id; ?>">
		<input type="hidden" name="option" value="<?php echo $option; ?>">
		<input type="hidden" name="task" value="">
		</form>
	<?php
	}
}
?>