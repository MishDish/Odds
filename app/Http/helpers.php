<?php 

function sort_odds_by($column,$body)
{
	return link_to_route('odds',$body,['sortBy' => $column]);
}
