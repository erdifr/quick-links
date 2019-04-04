<?php

class pluginQuickLinks extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'qlLink1' => 'qlContentNew',
			'qlLink2' => 'qlCategories',
			'qlLink3' => 'qlUsers',
			'qlLink4' => 'qlBluditDocs',
			'qlLink5' => 'qlBluditForum',
			'qlLink6' => 'qlBluditSupport'
		);
	}

	public function form()
	{
		global $L;

		$qlLink1 = $this->getValue('qlLink1');
		$qlLink2 = $this->getValue('qlLink2');
		$qlLink3 = $this->getValue('qlLink3');
		$qlLink4 = $this->getValue('qlLink4');
		$qlLink5 = $this->getValue('qlLink5');
		$qlLink6 = $this->getValue('qlLink6');


		// Link 1
		$html .= '<div>';
		$html .= '<label>'.$L->get('link-1').'</label>';
		$html .= '<select id="jsqlLink1" name="qlLink1">';
		if (!empty($qlLink1)) {
			$html .= '<option value="'.$qlLink1.'">'.$qlLink1.'</option>';
		} else {
			$html .= '<option value="DISABLE">DISABLE</option>';
		}
		$html .= '<option value="qlBluditDocs">Bludit Docs</option>';
		$html .= '<option value="qlBluditForum">Bludit Forum</option>';
		$html .= '<option value="qlBluditSupport">Bludit Support</option>';
		$html .= '<option value="qlAbout">About</option>';
		$html .= '<option value="qlCategories">Categories</option>';
		$html .= '<option value="qlContentNew">Content New</option>';
		$html .= '<option value="qlContent">Content</option>';
		$html .= '<option value="qlLogout">Logout</option>';
		$html .= '<option value="qlPlugins">Plugins</option>';
		$html .= '<option value="qlSettings">Settings</option>';
		$html .= '<option value="qlThemes">Themes</option>';
		$html .= '<option value="qlUsers">Users</option>';
		$html .= '<option value="qlWebsite">Website</option>';
		$html .= '<option value="DISABLE">DISABLE</option>';
		$html .= '</select>';
		$html .= '</div>';


		// Link 2
		$html .= '<div>';
		$html .= '<label>'.$L->get('link-2').'</label>';
		$html .= '<select id="jsqlLink2" name="qlLink2">';
		if (!empty($qlLink2)) {
			$html .= '<option value="'.$qlLink2.'">'.$qlLink2.'</option>';
		} else {
			$html .= '<option value="DISABLE">DISABLE</option>';
		}
		$html .= '<option value="qlBluditDocs">Bludit Docs</option>';
		$html .= '<option value="qlBluditForum">Bludit Forum</option>';
		$html .= '<option value="qlBluditSupport">Bludit Support</option>';
		$html .= '<option value="qlAbout">About</option>';
		$html .= '<option value="qlCategories">Categories</option>';
		$html .= '<option value="qlContentNew">Content New</option>';
		$html .= '<option value="qlContent">Content</option>';
		$html .= '<option value="qlLogout">Logout</option>';
		$html .= '<option value="qlPlugins">Plugins</option>';
		$html .= '<option value="qlSettings">Settings</option>';
		$html .= '<option value="qlThemes">Themes</option>';
		$html .= '<option value="qlUsers">Users</option>';
		$html .= '<option value="qlWebsite">Website</option>';
		$html .= '<option value="DISABLE">DISABLE</option>';
		$html .= '</select>';
		$html .= '</div>';


		// Link 3
		$html .= '<div>';
		$html .= '<label>'.$L->get('link-3').'</label>';
		$html .= '<select id="jsqlLink3" name="qlLink3">';
		if (!empty($qlLink3)) {
			$html .= '<option value="'.$qlLink3.'">'.$qlLink3.'</option>';
		} else {
			$html .= '<option value="DISABLE">DISABLE</option>';
		}
		$html .= '<option value="qlBluditDocs">Bludit Docs</option>';
		$html .= '<option value="qlBluditForum">Bludit Forum</option>';
		$html .= '<option value="qlBluditSupport">Bludit Support</option>';
		$html .= '<option value="qlAbout">About</option>';
		$html .= '<option value="qlCategories">Categories</option>';
		$html .= '<option value="qlContentNew">Content New</option>';
		$html .= '<option value="qlContent">Content</option>';
		$html .= '<option value="qlLogout">Logout</option>';
		$html .= '<option value="qlPlugins">Plugins</option>';
		$html .= '<option value="qlSettings">Settings</option>';
		$html .= '<option value="qlThemes">Themes</option>';
		$html .= '<option value="qlUsers">Users</option>';
		$html .= '<option value="qlWebsite">Website</option>';
		$html .= '<option value="DISABLE">DISABLE</option>';
		$html .= '</select>';
		$html .= '</div>';


		// Link 4
		$html .= '<div>';
		$html .= '<label>'.$L->get('link-4').'</label>';
		$html .= '<select id="jsqlLink4" name="qlLink4">';
		if (!empty($qlLink4)) {
			$html .= '<option value="'.$qlLink4.'">'.$qlLink4.'</option>';
		} else {
			$html .= '<option value="DISABLE">DISABLE</option>';
		}
		$html .= '<option value="qlBluditDocs">Bludit Docs</option>';
		$html .= '<option value="qlBluditForum">Bludit Forum</option>';
		$html .= '<option value="qlBluditSupport">Bludit Support</option>';
		$html .= '<option value="qlAbout">About</option>';
		$html .= '<option value="qlCategories">Categories</option>';
		$html .= '<option value="qlContentNew">Content New</option>';
		$html .= '<option value="qlContent">Content</option>';
		$html .= '<option value="qlLogout">Logout</option>';
		$html .= '<option value="qlPlugins">Plugins</option>';
		$html .= '<option value="qlSettings">Settings</option>';
		$html .= '<option value="qlThemes">Themes</option>';
		$html .= '<option value="qlUsers">Users</option>';
		$html .= '<option value="qlWebsite">Website</option>';
		$html .= '<option value="DISABLE">DISABLE</option>';
		$html .= '</select>';
		$html .= '</div>';


		// Link 5
		$html .= '<div>';
		$html .= '<label>'.$L->get('link-5').'</label>';
		$html .= '<select id="jsqlLink5" name="qlLink5">';
		if (!empty($qlLink5)) {
			$html .= '<option value="'.$qlLink5.'">'.$qlLink5.'</option>';
		} else {
			$html .= '<option value="DISABLE">DISABLE</option>';
		}
		$html .= '<option value="qlBluditDocs">Bludit Docs</option>';
		$html .= '<option value="qlBluditForum">Bludit Forum</option>';
		$html .= '<option value="qlBluditSupport">Bludit Support</option>';
		$html .= '<option value="qlAbout">About</option>';
		$html .= '<option value="qlCategories">Categories</option>';
		$html .= '<option value="qlContentNew">Content New</option>';
		$html .= '<option value="qlContent">Content</option>';
		$html .= '<option value="qlLogout">Logout</option>';
		$html .= '<option value="qlPlugins">Plugins</option>';
		$html .= '<option value="qlSettings">Settings</option>';
		$html .= '<option value="qlThemes">Themes</option>';
		$html .= '<option value="qlUsers">Users</option>';
		$html .= '<option value="qlWebsite">Website</option>';
		$html .= '<option value="DISABLE">DISABLE</option>';
		$html .= '</select>';
		$html .= '</div>';


		// Link 6
		$html .= '<div>';
		$html .= '<label>'.$L->get('link-6').'</label>';
		$html .= '<select id="jsqlLink6" name="qlLink6">';
		if (!empty($qlLink6)) {
			$html .= '<option value="'.$qlLink6.'">'.$qlLink6.'</option>';
		} else {
			$html .= '<option value="DISABLE">DISABLE</option>';
		}
		$html .= '<option value="qlBluditDocs">Bludit Docs</option>';
		$html .= '<option value="qlBluditForum">Bludit Forum</option>';
		$html .= '<option value="qlBluditSupport">Bludit Support</option>';
		$html .= '<option value="qlAbout">About</option>';
		$html .= '<option value="qlCategories">Categories</option>';
		$html .= '<option value="qlContentNew">Content New</option>';
		$html .= '<option value="qlContent">Content</option>';
		$html .= '<option value="qlLogout">Logout</option>';
		$html .= '<option value="qlPlugins">Plugins</option>';
		$html .= '<option value="qlSettings">Settings</option>';
		$html .= '<option value="qlThemes">Themes</option>';
		$html .= '<option value="qlUsers">Users</option>';
		$html .= '<option value="qlWebsite">Website</option>';
		$html .= '<option value="DISABLE">DISABLE</option>';
		$html .= '</select>';
		$html .= '</div>';

		// Output html
		return $html;
	}

	public function dashboard()
	{
		global $L;

		$adminRoot = HTML_PATH_ADMIN_ROOT;
		$domain = DOMAIN;

		$qlLink1 = $this->getValue('qlLink1');
		$qlLink2 = $this->getValue('qlLink2');
		$qlLink3 = $this->getValue('qlLink3');
		$qlLink4 = $this->getValue('qlLink4');
		$qlLink5 = $this->getValue('qlLink5');
		$qlLink6 = $this->getValue('qlLink6');

		$qlBluditDocs = '<a class="quick-links text-center" target="_blank" href="https://docs.bludit.com">' .
			'<div class="oi oi-compass quick-links-icons"></div>' .
			'<div>Documentation</div>' .
		'</a>';

		$qlBluditForum = '<a class="quick-links text-center" target="_blank" href="https://forum.bludit.org">' .
			'<div class="oi oi-loop-square quick-links-icons"></div>' .
			'<div>Forum support</div>' .
		'</a>';

		$qlBluditSupport = '<a class="quick-links text-center" target="_blank" href="https://gitter.im/bludit/support">' .
			'<div class="oi oi-chat quick-links-icons"></div>' .
			'<div>Chat support</div>' .
		'</a>';

		$qlAbout = '<a class="quick-links text-center" href="'.$adminRoot.'about">' .
			'<div class="oi oi-info quick-links-icons"></div>' .
			'<div>About</div>' .
		'</a>';

		$qlCategories = '<a class="quick-links text-center" href="'.$adminRoot.'categories">' .
			'<div class="oi oi-tags quick-links-icons"></div>' .
			'<div>Categories</div>' .
		'</a>';

		$qlContentNew = '<a class="quick-links text-center" href="'.$adminRoot.'new-content">' .
			'<div class="oi oi-justify-left quick-links-icons"></div>' .
			'<div>New Content</div>' .
		'</a>';

		$qlContent = '<a class="quick-links text-center" href="'.$adminRoot.'content">' .
			'<div class="oi oi-layers quick-links-icons"></div>' .
			'<div>Content</div>' .
		'</a>';

		$qlLogout = '<a class="quick-links text-center" href="'.$adminRoot.'logout">' .
			'<div class="oi oi-account-logout quick-links-icons"></div>' .
			'<div>Logout</div>' .
		'</a>';

		$qlPlugins = '<a class="quick-links text-center" href="'.$adminRoot.'plugins">' .
			'<div class="oi oi-puzzle-piece quick-links-icons"></div>' .
			'<div>Plugins</div>' .
		'</a>';

		$qlSettings = '<a class="quick-links text-center" href="'.$adminRoot.'settings">' .
			'<div class="oi oi-cog quick-links-icons"></div>' .
			'<div>Settings</div>' .
		'</a>';

		$qlThemes = '<a class="quick-links text-center" href="'.$adminRoot.'themes">' .
			'<div class="oi oi-eye quick-links-icons"></div>' .
			'<div>Themes</div>' .
		'</a>';

		$qlUsers = '<a class="quick-links text-center" href="'.$adminRoot.'users">' .
			'<div class="oi oi-people quick-links-icons"></div>' .
			'<div>Users</div>'.
		'</a>';

		$qlWebsite = '<a class="quick-links text-center" href="'.$domain.'">' .
			'<div class="oi oi-external-link quick-links-icons"></div>' .
			'<div>Website</div>'.
		'</a>';

$html = <<<EOF
<br>
<div class="container border-bottom pb-4">
	<h4 class="pb-3">{$L->get('quick-links')}</h4>
	<div class="row">
		<div class="col">
			{$$qlLink1}
		</div>
		<div class="col border-left border-right">
			{$$qlLink2}
		</div>
		<div class="col">
			{$$qlLink3}
		</div>
	</div>
</div>
<div class="container mt-4">
	<div class="row">
		<div class="col">
			{$$qlLink4}
		</div>
		<div class="col border-left border-right">
			{$$qlLink5}
		</div>
		<div class="col">
			{$$qlLink6}
		</div>
	</div>
</div>
EOF;

		return $html.PHP_EOL;
	}

}
