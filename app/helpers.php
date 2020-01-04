<?php

if(!function_exists('set_active_route'))
{
	function set_active_route($route)
	{
		return Route::is($route) ? 'active' : '';
	}

}

if(!function_exists('page_title'))
{
	function page_title($title = '')
	{
		return empty($title)
			? config('app.name')
			: sprintf('%s - %s', config('app.name'), $title);
	}

}

if(!function_exists('notify'))
{
	function notify($message, $type = 'success')
	{
		session()->flash('message.content', $message);
		session()->flash('message.type', $type);
	}

}