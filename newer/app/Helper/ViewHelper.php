<?php

use App\PromocodeUsage;
use App\ServiceType;

function userTypeDropdown($value = '')
{
    $str = '<select id="UserType" class="form-control" name="user_type" required>';
    $str .= '<option value="">Select</option>';
    $str .= '<option value="1" '. (($value == 1) ? 'selected' : '') . '>Competitor</option>';
    $str .= '<option value="2" '. (($value == 2) ? 'selected' : '') . '>Sponsor</option>';
    $str .= '<option value="3" '. (($value == 3) ? 'selected' : '') . '>Investor</option>';
    $str .= '<option value="4" '. (($value == 4) ? 'selected' : '') . '>MET Employee</option>';
    $str .= '</select>';
    return $str;
}

function roleTypeDropdown($value = '')
{
    $str = '<select id="RoleId" class="form-control" name="role_id" required>';
    $str .= '<option value="">Select</option>';
    $str .= '<option value="2" '. (($value == 2) ? 'selected' : '') . '>Innovation Admin</option>';
    $str .= '<option value="3" '. (($value == 3) ? 'selected' : '') . '>MLT Admin</option>';
    $str .= '<option value="4" '. (($value == 4) ? 'selected' : '') . '>Documentation Admin</option>';
    $str .= '<option value="5" '. (($value == 5) ? 'selected' : '') . '>Marketing Admin</option>';
    $str .= '</select>';
    return $str;
}

function userType($value = '')
{
	if ($value == 1)
	    return "Competitors";
	else if ($value == 2)
	    return "Sponsors";
	else if ($value == 3)
	       return "Investors";
	else if ($value == 4)
	    return "Metee Employee";
	else 
	    return '';
}

function roleType($value = '')
{
    if ($value == 2)
        return "Innovation Admin";
    else if ($value == 3)
        return "MLT Admin";
    else if ($value == 4)
        return "Documentation Admin";
    else if ($value == 5)
        return "Marketing Admin";
    else
        return '';
}

function img($img){
	if($img == ""){
		return asset('main/avatar.jpg');
	}else if (strpos($img, 'http') !== false) {
        return $img;
    }else{
		return asset('storage/'.$img);
	}
}

function image($img){
	if($img == ""){
		return asset('main/avatar.jpg');
	}else{
		return asset($img);
	}
}

function originalDate($date)
{
    $dt = explode('-',$date);
    return $dt[1]."-".$dt[2]."-".$dt[0];
}

