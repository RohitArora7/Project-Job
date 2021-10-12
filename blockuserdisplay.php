<div style="position:absolute;left:10px;top:29px;width:681px;height:50px;z-index:11">
<table class="table table-hover">
<tr>

<td><b>Blocked Users</b></td>


</tr>
<tr ng-repeat="detail in detailsblock| filter:search_query">




<td><a  href  id="click" ng-click="profileviewpass(detail.uid) ">{{detail.firstname}} </a></td>


</tr>
</table>
</div>
