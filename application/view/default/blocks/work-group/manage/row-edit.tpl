<li class="w10">
	<ul class="operation-toolbar">
		<li><a href="#" class="icon-accept" sid="{$workGroup.work_group_id}" title="{lng lng="save"}"></a></li>
		<li><a href="#" class="icon-decline" sid="{$workGroup.work_group_id}" title="{lng lng="cancel"}"></a></li>
	</ul>
</li>
<li class="w70">
	<input type="text" name="work_group_title" value="{$workGroup.work_group_title|htmlall}" />
</li>

<li class="w20">
	{include file="skin/admin/splitter.tpl" name="work_group_enabled" class="work-group-enabled" sid=$workGroup.work_group_id value=$workGroup.work_group_enabled items=$work_group_statuses}
</li>
