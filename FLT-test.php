<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
<!-- LOC2-GPSVISstart.txt 12:18 PM 1/31/2019-->
		<title>Allegany Region<br /><span style='text-align:center; font-family: arial,helvetica,sans-serif; font-size: x-small;'>Refreshed Feb 14,19 9:35am</title>
		<base target="_top"></base>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<!-- RAH following from http://www.geo-tag.de/generator/en.html to be modified for map center -->
		<meta name="geo.region" content="US-NY" />
		<meta name="geo.placename" content="Finger Lakes Trail" />
		<meta name="geo.position" content="'auto'" />
		<meta name="ICBM" content="'auto'" />
	</head>
	<body style="margin:0px;">
<!-- RAH to provide enlarged view of elevation profile -->
		<script type="text/javascript">
		function makePopup(href, name, width, height, left, top) {
		var win = window.open(href,  name, 'width=' + width + ',height=' + height +
		 ',left=' + left + ',top=' + top + ',location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no');
		win.focus();
		return win.closed;
		}
		</script> <!-- /RAH -->

		<script type="text/javascript">
			var google_api_key = 'AIzaSyArJEUz9p8k7kri21liIdlp-1eJ0Q3EQdo'; // RAH Your project's Google Maps API key goes here (https://code.google.com/apis/console)
			document.writeln('<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;libraries=geometry&amp;sensor=false&amp;'+((self.google_api_key&&document.location.toString().indexOf('file://')!=0)?'key='+google_api_key:'')+'"><'+'/script>');
		thunderforest_api_key = 'e4ffd893074a4ee7831e93caaf8688c0';
		</script>


		<!--
			If you want to transplant this map into another Web page, by far the best method is to
			simply include it in a IFRAME tag (see http://www.gpsvisualizer.com/faq.html#google_html).
			But, if you must paste the code into another page, be sure to include all of these parts:
			   1. The "div" tags that contain the map and its widgets, below
			   2. Three sections of JavaScript code:
			      a. The Google code (maps.google.com or googleapis.com) code, above
			      b. "gv_options" and the code that calls a .js file on maps.gpsvisualizer.com
			      c. The "GV_Map" function, which contains all the geographic info for the map
		-->
		<div style="margin-left:0px; margin-right:0px; margin-top:0px; margin-bottom:0px;">
			<div id="gmap_div" style="width:700px; height:441px; margin:0px; margin-right:12px; background-color:#F0F0F0; float:left; overflow:hidden;">
				<p align="center" style="font:10px Arial;">This map was created using <a target="_blank" href="http://www.gpsvisualizer.com/">GPS Visualizer</a>'s do-it-yourself geographic utilities.<br /><br />Please wait while the map data loads...<!-- RAH --> <br /><br />

If you are having trouble loading the interactive maps with Internet Explorer, please try Chrome, Firefox, or Safari. <!-- /RAH --> </p>
			</div>

			<div id="gv_infobox" class="gv_infobox" style="font:11px Arial; border:solid #666666 1px; background:#ffffff; padding:4px; overflow:auto; display:none; max-width:400px;">
				<!-- Although GPS Visualizer didn't create a legend/info box with your map, you can use this space for something else if you'd like; enable it by setting gv_options.infobox_options.enabled to true -->
				<b>Allegany Region<br /><span style='text-align:center; font-family: arial,helvetica,sans-serif; font-size: x-small;'>Refreshed Feb 14,19 9:35am</b>
			</div>

			<div id="gv_searchbox" class="gv_searchbox" style="font:10px Arial; border:solid #666666 1px; background:#ffffff; padding:4px; width:145px;">
				Find an Address or Lat, Lon:
				<br /><input id="gv_searchbox_input" type="text" size="14" style="font:10px Arial;" /> <input id="gv_searchbox_button" type="button" value="Find" style="font:10px Verdana;" onclick="GV_Center_On_Address({input_box:'gv_searchbox_input',button:'gv_searchbox_button',message_box:'gv_searchbox_message',found_template:'',unfound_template:'',zoom:true});" />
				<br /><span style="font:10px Arial;" id="gv_searchbox_message">&nbsp;</span>
			</div>

			<div id="gv_tracklist" class="gv_tracklist" style="font:11px Arial; line-height:11px; background:#ffffff; overflow:auto; display:none;"><!-- --></div>

			<div id="gv_marker_list" class="gv_marker_list" style="background:#ffffff; overflow:auto; display:none;"><!-- --></div>

			<div id="gv_clear_margins" style="height:0px; clear:both;"><!-- clear the "float" --></div>
		</div>


		<!-- begin GPS Visualizer setup script (must come after maps.google.com code) -->
		<script type="text/javascript">
			/* Global variables used by the GPS Visualizer functions (20141209072631): */
			gv_options = {};

			// basic map parameters:
			gv_options.center = ['auto'];  // [latitude,longitude] - be sure to keep the square brackets
			gv_options.zoom = 'auto';  // higher number means closer view; can also be 'auto' for automatic zoom/center based on map elements
			gv_options.map_type = 'G_PHYSICAL_MAP';  // popular map_type choices are 'GV_STREET', 'GV_SATELLITE', 'GV_HYBRID', 'GV_TERRAIN', 'GV_TOPO_US', 'GV_TOPO_WORLD', 'GV_OSM'
			gv_options.map_opacity = .9;  //RAH number from 0 to 1
			gv_options.full_screen = true;  // true|false: should the map fill the entire page (or frame)?
			gv_options.width = 940;  // width of the map, in pixels
			gv_options.height = 600;  // height of the map, in pixels

			gv_options.map_div = 'gmap_div';  // the name of the HTML "div" tag containing the map itself; usually 'gmap_div'
			gv_options.doubleclick_zoom = true;  // true|false: zoom in when mouse is double-clicked?
			gv_options.doubleclick_center = true;  // true|false: re-center the map on the point that was double-clicked?
			gv_options.mousewheel_zoom = true; // true|false; or 'reverse' for down=in and up=out
			gv_options.autozoom_adjustment = 0;
			gv_options.centering_options = { 'open_info_window':true, 'partial_match':true, 'center_key':'center', 'default_zoom':null } // URL-based centering (e.g., ?center=name_of_marker&zoom=14)
			gv_options.tilt = false; // true|false: allow Google to show 45-degree tilted aerial imagery?
			gv_options.street_view = false; // true|false: allow Google Street View on the map
			gv_options.animated_zoom = false; // true|false: may or may not work properly

			// widgets on the map:
			gv_options.zoom_control = 'large'; // 'large'|'small'|'none'
			gv_options.recenter_button = true; // true|false: is there a 'double-click to recenter' option in the zoom control?
			gv_options.scale_control = true; // true|false
			gv_options.center_coordinates = true;  // true|false: show a "center coordinates" box and crosshair?
			gv_options.mouse_coordinates = false;  // true|false: show a "mouse coordinates" box?
			gv_options.crosshair_hidden = false;  // true|false: hide the crosshair initially?
			gv_options.map_opacity_control = 'utilities';  // 'map'|'utilities'|'both'|false: where does the opacity control appear?
			gv_options.map_type_control = {};  // widget to change the background map
			  gv_options.map_type_control.placement = 'utilities';  // 'map'|'utilities'|'both'
			  gv_options.map_type_control.filter = true;  // true|false: when map loads, are irrelevant maps ignored?
<!-- RAH replaced with included
			gv_options.map_type_control.excluded = [];  // comma-separated list of quoted map IDs that will never show in the list ('included' also works)
-->
			gv_options.map_type_control.included =['G_NORMAL_MAP','G_SATELLITE_MAP','G_HYBRID_MAP','G_PHYSICAL_MAP','GV_OSM','GV_OSM2','GV_OCM','GV_TOPO','ARCGIS_TOPO_WORLD','GV_TOPO_US','CALTOPO_USGS','CALTOPO_USGS_RELIEF','STAMEN_TERRAIN','US_NATIONAL_ATLAS','FOURUMAPS_TOPO','YAHOO_MAP','YAHOO_AERIAL','YAHOO_HYBRID','US_BLM_GOOGLE','US_BLM_TOPO','US_BLM_USGS','','','NATIONALGEOGRAPHIC'];

			gv_options.disable_google_pois = false;  // true|false: if you disable clickable POIs, you also lose the labels on parks, airports, etc.
			gv_options.measurement_tools = "map"; //'map'|'utilities'|'both'|'none'
			gv_options.measurement_options = { visible:false, distance_color:'', area_color:'' };
			gv_options.infobox_options = {}; // options for a floating info box (id="gv_infobox"), which can contain anything
			  gv_options.infobox_options.enabled = true;  // true|false: enable or disable the info box altogether
			  gv_options.infobox_options.position = ['G_ANCHOR_TOP_LEFT',40,0];  // RAH  // [Google anchor name, relative x, relative y]
			  gv_options.infobox_options.draggable = true;  // true|false: can it be moved around the screen?
			  gv_options.infobox_options.collapsible = true;  // true|false: can it be collapsed by double-clicking its top bar?
			gv_options.utilities_menu = true;  // true|false
			gv_options.allow_export = true;  // true|false
			gv_options.searchbox_options = {}; // options for a floating address search box
			  gv_options.searchbox_options.enabled = true;  // true|false: enable or disable the search box altogether
			  gv_options.searchbox_options.zoom = true;  // true|false: zoom in on search result?
			  gv_options.searchbox_options.position = ['G_ANCHOR_BOTTOM_LEFT',3,55];  // RAH// [Google anchor name, relative x, relative y]
			  gv_options.searchbox_options.draggable = true;  // true|false: can it be moved around the screen?
			  gv_options.searchbox_options.collapsible = true;  // true|false: can it be collapsed by double-clicking its top bar?

			// track-related options:
			gv_options.track_tooltips = true; // true|false: should the name of a track appear on the map when you mouse over the track itself?
			gv_options.tracklist_options = {}; // options for a floating list of the tracks visible on the map
			  gv_options.tracklist_options.enabled = false; // RAH // true|false: enable or disable the tracklist altogether
			  gv_options.tracklist_options.position = ['RIGHT_TOP',4,32];  // [Google anchor name, relative x, relative y]
			  gv_options.tracklist_options.min_width = 0; // minimum width of the tracklist, in pixels
			  gv_options.tracklist_options.max_width = 180; // maximum width of the tracklist, in pixels
			  gv_options.tracklist_options.min_height = 0; // minimum height of the tracklist, in pixels; if the list is longer, scrollbars will appear
			  gv_options.tracklist_options.max_height = 180; // maximum height of the tracklist, in pixels; if the list is longer, scrollbars will appear
			  gv_options.tracklist_options.desc = true;  // true|false: should tracks' descriptions be shown in the list
			  gv_options.tracklist_options.toggle_names = true;  // true|false: should clicking on a track's name turn it on or off?
			  gv_options.tracklist_options.toggle_links = false;  // true|false: should there be a separate icon/checkbox for toggling visibility?
			  gv_options.tracklist_options.zoom_links = true;  // true|false: should each item include a small icon that will zoom to that track?
			  gv_options.tracklist_options.tooltips = true;  // true|false: should the name of the track appear on the map when you mouse over the name in the list?
			  gv_options.tracklist_options.highlighting = true;  // true|false: should the track be highlighted when you mouse over the name in the list?
			  gv_options.tracklist_options.draggable = true;  // true|false: can it be moved around the screen?
			  gv_options.tracklist_options.collapsible = true;  // true|false: can it be collapsed by double-clicking its top bar?
			  gv_options.tracklist_options.header = 'Tracks:'; // HTML code; be sure to put backslashes in front of any single quotes, and don't include any line breaks
			  gv_options.tracklist_options.footer = ''; // HTML code

			// marker-related options:
			gv_options.default_marker = { color:'red',icon:'googlemini',scale:1 }; // icon can be a URL, but be sure to also include size:[w,h] and optionally anchor:[x,y]
			gv_options.marker_tooltips = true; // do the names of the markers show up when you mouse-over them?
			gv_options.marker_shadows = true; // true|false: do the standard markers have "shadows" behind them?
			gv_options.marker_link_target = '_blank'; // the name of the window or frame into which markers' URLs will load
			gv_options.info_window_width = 0;  // in pixels, the width of the markers' pop-up info "bubbles" (can be overridden by 'window_width' in individual markers)
			gv_options.thumbnail_width = 0;  // in pixels, the width of the markers' thumbnails (can be overridden by 'thumbnail_width' in individual markers)
			gv_options.photo_size = [0,0];  // in pixels, the size of the photos in info windows (can be overridden by 'photo_width' or 'photo_size' in individual markers)
			gv_options.hide_labels = false;  // true|false: hide labels when map first loads?
			gv_options.labels_behind_markers = false; // true|false: are the labels behind other markers (true) or in front of them (false)?
			gv_options.label_offset = [0,0];  // [x,y]: shift all markers' labels (positive numbers are right and down)
			gv_options.label_centered = false;  // true|false: center labels with respect to their markers?  (label_left is also a valid option.)
			gv_options.driving_directions = false;  // put a small "driving directions" form in each marker's pop-up window? (override with dd:true or dd:false in a marker's options)
			gv_options.garmin_icon_set = 'gpsmap'; // 'gpsmap' are the small 16x16 icons; change it to '24x24' for larger icons
			gv_options.marker_list_options = {};  // options for a dynamically-created list of markers
			  gv_options.marker_list_options.enabled = false;  // true|false: enable or disable the marker list altogether
			  gv_options.marker_list_options.floating = true;  // is the list a floating box inside the map itself?
			  gv_options.marker_list_options.position = ['RIGHT_BOTTOM',6,38];  // floating list only: position within map
			  gv_options.marker_list_options.min_width = 160; // minimum width, in pixels, of the floating list
			  gv_options.marker_list_options.max_width = 160;  // maximum width
			  gv_options.marker_list_options.min_height = 0;  // minimum height, in pixels, of the floating list
			  gv_options.marker_list_options.max_height = 180;  // maximum height
			  gv_options.marker_list_options.draggable = true;  // true|false, floating list only: can it be moved around the screen?
			  gv_options.marker_list_options.collapsible = true;  // true|false, floating list only: can it be collapsed by double-clicking its top bar?
			  gv_options.marker_list_options.include_tickmarks = false;  // true|false: are distance/time tickmarks included in the list?
			  gv_options.marker_list_options.include_trackpoints = false;  // true|false: are "trackpoint" markers included in the list?
			  gv_options.marker_list_options.dividers = false;  // true|false: will a thin line be drawn between each item in the list?
			  gv_options.marker_list_options.desc = false;  // true|false: will the markers' descriptions be shown below their names in the list?
			  gv_options.marker_list_options.icons = true;  // true|false: should the markers' icons appear to the left of their names in the list?
			  gv_options.marker_list_options.thumbnails = false;  // true|false: should markers' thumbnails be shown in the list?
			  gv_options.marker_list_options.folders_collapsed = false;  // true|false: do folders in the list start out in a collapsed state?
			  gv_options.marker_list_options.folders_hidden = false;  // true|false: do folders in the list start out in a hidden state?
			  gv_options.marker_list_options.collapsed_folders = []; // an array of folder names
			  gv_options.marker_list_options.hidden_folders = ['Closure','TickMarks']; // an array of folder names
			  gv_options.marker_list_options.count_folder_items = false;  // true|false: list the number of items in each folder?
			  gv_options.marker_list_options.wrap_names = true;  // true|false: should marker's names be allowed to wrap onto more than one line?
			  gv_options.marker_list_options.unnamed = '[unnamed]';  // what 'name' should be assigned to  unnamed markers in the list?
			  gv_options.marker_list_options.colors = false;  // true|false: should the names/descs of the points in the list be colorized the same as their markers?
			  gv_options.marker_list_options.default_color = '';  // default HTML color code for the names/descs in the list
			  gv_options.marker_list_options.limit = 0;  // how many markers to show in the list; 0 for no limit
			  gv_options.marker_list_options.center = false;  // true|false: does the map center upon a marker when you click its name in the list?
			  gv_options.marker_list_options.zoom = false;  // true|false: does the map zoom to a certain level when you click on a marker's name in the list?
			  gv_options.marker_list_options.zoom_level = 15;  // if 'zoom' is true, what level should the map zoom to?
			  gv_options.marker_list_options.info_window = true;  // true|false: do info windows pop up when the markers' names are clicked in the list?
			  gv_options.marker_list_options.url_links = false;  // true|false: do the names in the list become instant links to the markers' URLs?
			  gv_options.marker_list_options.toggle = false;  // true|false: does a marker disappear if you click on its name in the list?
			  gv_options.marker_list_options.help_tooltips = false;  // true|false: do "tooltips" appear on marker names that tell you what happens when you click?
			  gv_options.marker_list_options.id = 'gv_marker_list';  // id of a DIV tag that holds the list
			  gv_options.marker_list_options.header = ''; // HTML code; be sure to put backslashes in front of any single quotes, and don't include any line breaks
			  gv_options.marker_list_options.footer = ''; // HTML code
			gv_options.marker_filter_options = {};  // options for removing waypoints that are out of the current view
			  gv_options.marker_filter_options.enabled = true;  // RAH // true|false: should out-of-range markers be removed?
			  gv_options.marker_filter_options.movement_threshold = 8;  // in pixels, how far the map has to move to trigger filtering
			  gv_options.marker_filter_options.limit = 0;  // maximum number of markers to display on the map; 0 for no limit
			  gv_options.marker_filter_options.update_list = true;  // true|false: should the marker list be updated with only the filtered markers?
			  gv_options.marker_filter_options.sort_list_by_distance = false;  // true|false: should the marker list be sorted by distance from the center of the map?
			  gv_options.marker_filter_options.min_zoom = 10;  // below this zoom level, don't show any markers at all
			  gv_options.marker_filter_options.zoom_message = '';  // message to put in the marker list if the map is below the min_zoom threshold
			gv_options.synthesize_fields = {}; // for example: {label:'{name}'} would cause all markers' names to become visible labels

gv_options.marker_list_options.position = ['RIGHT_TOP',6,38];  // floating list only: position within map
gv_options.marker_list_options.min_width = 90; // minimum width, in pixels, of the floating list
gv_options.marker_list_options.max_width = 90;  // maximum width
gv_options.marker_list_options.min_height = 130;  // minimum height, in pixels, of the floating list
gv_options.marker_list_options.max_height = 130;  // maximum height
gv_options.marker_list_options.enabled = true;  // true|false: enable or disable the marker list altogether
gv_options.marker_list_options.folders_collapsed = true;  // true|false: do folders in the list start out in a collapsed state?
gv_options.marker_list_options.collapsed_folders = ['Parking','Camping','Closure','Other','Water']; // an array of folder names
gv_options.marker_list_options.hidden_folders = ['x','TickMarks']; // an array of folder names
gv_options.marker_list_options.limit = 3;  // how many markers to show in the list; 0 for no limit
gv_options.marker_list_options.header = 'Hide/Show Symbols'; // HTML code;
gv_options.marker_filter_options.zoom_message = '<b>Zoom in to view symbols</b>';
gv_options.zoom_control = 'small';

			// Load GPS Visualizer's Google Maps functions (this must be loaded AFTER gv_options are set):
			if (window.location.toString().indexOf('https://') == 0) { // secure pages require secure scripts
				document.writeln('<script src="https://www.gpsvisualizer.com/google_maps/functions3.js" type="text/javascript"><'+'/script>');
			} else {
				document.writeln('<script src="http://maps.gpsvisualizer.com/google_maps/functions3.js" type="text/javascript"><'+'/script>');
			}

		</script>

		<style type="text/css">
			/* Put any custom style definitions here (e.g., .gv_marker_info_window, .gv_marker_info_window_name, .gv_marker_list_item, .gv_tooltip, .gv_label, etc.) */
			#gmap_div .gv_marker_info_window {
				font-size:11px !important;
			}
			#gmap_div .gv_marker_list_folder {padding-bottom: 2.7px; !important;}
			#gmap_div .gv_marker_list {max-height: 140px; !important;}
			#gmap_div .gv_marker_list_folder_header {
				font-size: 9px;
				padding-bottom: 0px;
			}
			#gmap_div .gv_label {
				background:#333333; border:1px solid black; padding:1px;
				color:white; font:9px Verdana,sans-serif !important; font-weight:normal !important;
				opacity:0.80; filter:alpha(opacity=80);
			}
			.FLTC_button {
				padding:0px 4px 0px 3px;
				margin: 6px 5px 6px 0px;
				display: block;
				z-index: 0;
				text-decoration:none;
				color:black;
				font-style:normal;
				font-variant:normal;
				font-weight:normal;
				font-stretch:normal;
				font-size:10px;
				text-align:center;
				line-height:normal;
				font-family:Verdana;
				background-color:white;
				cursor: pointer;
			}

#gv_folder_collapse_1, #gv_folder_collapse_2, #gv_folder_collapse_3, #gv_folder_collapse_4, #gv_folder_collapse_5, #gv_folder_collapse_6 {display:none;}
.gv_marker_list {font-size:15px;} .gv_marker_list_header {text-align:center;}
		</style>


<div style='position:absolute;top:7px; right:120px; height: 23px; width: 25px; z-index: 100; text-align:center; font-family: arial,helvetica,sans-serif; font-size: 9pt;'>
<a href='javascript:GV_Geolocate({marker:true,marker_list:true,info_window:true})'><img src='geolocateme.gif' alt='Show my location' title='Show my location'></a></div>

</div><script>
function ToggleHunt() {
	var x=document.getElementById("ToggleHuntLink").innerHTML;
	if (x=="Hide/Show") {
		GV_Hide_Tracks("HntClose|HBP|map coverage");
		GV_Hide_Folder("Closure");
		document.getElementById("ToggleHuntLink").innerHTML="Show/Hide";
	} else {
		GV_Show_Tracks("HntClose|HBP|map coverage");
		GV_Show_Folder("Closure");
		document.getElementById("ToggleHuntLink").innerHTML="Hide/Show";
	}
}
</script>

<div class="FLTC_button" style="position: absolute; right: 22px; top: 0px; border:1px solid black;" onclick="ToggleHunt();">
	<a style="text-decoration:none; color: black;" href="javascript:void(0)"><span id="ToggleHuntLink">Hide/Show</span><br /> Hunt Closures</a>
</div>

		<!-- end GPSV setup script and styles; begin map-drawing script (they must be separate) -->
		<script type="text/javascript">
			function GV_Map() {

				GV_Setup_Map();

// The data goes here


GV_Draw_Marker({lat:41.98443,lon:-78.90238,color:'',dd:true
,name:'Access 1: PA-346',desc:'Small parking lot N side Rd<br /><br />Location: <b>41.9844, -78.9024  or N41 59.0658 W78 54.1429</b><br /><br />This is <b>Map M1/CT1</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.00253,lon:-78.81826,color:'',dd:true
,name:'Access 3: Coon Run Rd',desc:'Shoulder parking E side of Rd<br /><br />Location: <b>42.0025, -78.8183  or N42 .152 W78 49.0958</b><br /><br />This is <b>Map M1/CT1</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.05307,lon:-78.76564,color:'',dd:true
,name:'Access 5: ASP 1',desc:'Shoulder parking here; better parking 0.1 mi NE on S side of ASP 1<br /><br />Location: <b>42.0531, -78.7656  or N42 3.184 W78 45.9385</b><br /><br />This is <b>Map M1/CT1</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.10776,lon:-78.77519,color:'',dd:true
,name:'Access 8: ASP 2',desc:'Good shoulder parking<br /><br />Location: <b>42.1078, -78.7752  or N42 6.4658 W78 46.5115</b><br /><br />This is <b>Map M1/CT1</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.05454,lon:-78.76536,color:'',dd:true
,name:'Access 5: Parking Lot on ASP1',desc:'0.1 mi NE of Access Point 5, S side Rd<br /><br />Location: <b>42.0545, -78.7654  or N42 3.2726 W78 45.9219</b><br /><br />This is <b>Map M1/CT1</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.00735,lon:-78.79446,color:'',dd:true
,name:'Access 4 parking lot on ASP 3',desc:'Parking lot NE side of Rd<br /><br />Location: <b>42.0073, -78.7945  or N42 .4408 W78 47.6678</b><br /><br />This is <b>Map M1/CT1</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.10037,lon:-78.74938,color:'',dd:true
,name:'Allegany SP Administration Building',desc:'Parking behind Allegany S.P. Administration Building<br /><br />Location: <b>42.1004, -78.7494  or N42 6.0223 W78 44.9627</b><br /><br />This is <b>Map M1/CT1</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.08539,lon:-78.77843,color:''
,name:'BeckHollLeanTo',desc:'Outhouse-spring-table-register<br /><br />Location: <b>42.0854, -78.7784  or N42 5.1234 W78 46.7057</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.00118,lon:-78.81653,color:''
,name:'CoonRunCrk',desc:'Reliable stream<br /><br />Location: <b>42.0012, -78.8165  or N42 .0708 W78 48.9919</b>',icon:'Water Source',scale: 1, folder:'Water'});
GV_Draw_Marker({lat:42.10032,lon:-78.92686,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "M1/CT1 - Allegany State Park"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Mar 1, 2014</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M01\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/M01.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map M1/CT1 shows the FLT Main/North Country/Conservation Trail in McKean (PA)-Cattaraugus (NY) counties from FLT Westerm Terminus on PA Route 346 (W Washington St.) to ASP Route 2 ramp at I86. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M1/CT1\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.00146,lon:-78.81421,color:''
,name:'M01Spring1',desc:'Piped spring<br /><br />Location: <b>42.0015, -78.8142  or N42 .0875 W78 48.8525</b>',icon:'Water Source',scale: 1, folder:'Water'});
GV_Draw_Marker({lat:42.08647,lon:-78.77835,color:''
,name:'M01Spring2',desc:'Piped spring<br /><br />Location: <b>42.0865, -78.7783  or N42 5.188 W78 46.7009</b>',icon:'Water Source',scale: 1, folder:'Water'});
GV_Draw_Marker({lat:42.03434,lon:-78.7688,color:''
,name:'M01Spring3',desc:'Piped spring<br /><br />Location: <b>42.0343, -78.7688  or N42 2.0602 W78 46.1283</b>',icon:'Water Source',scale: 1, folder:'Water'});
GV_Draw_Marker({lat:42.00248,lon:-78.83876,color:''
,name:'M01Spring4',desc:'Piped spring<br /><br />Location: <b>42.0025, -78.8388  or N42 .1487 W78 50.3257</b>',icon:'Water Source',scale: 1, folder:'Water'});
GV_Draw_Marker({lat:42.03473,lon:-78.76925,color:''
,name:'Stony Brook LeanTo',desc:'Outhouse-spring-table-camping-register<br /><br />Location: <b>42.0347, -78.7693  or N42 2.0837 W78 46.1552</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.00286,lon:-78.83821,color:''
,name:'Willis Creek LeanTo',desc:'Outhouse-spring-table-camping-register<br /><br />Location: <b>42.0029, -78.8382  or N42 .1714 W78 50.2926</b>',icon:'Campground',scale: 1, folder:'Camping'});

t =  427 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M01ASP3Prkng - 0.14 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.00735,-78.79446],[42.00736,-78.79444],[42.00735,-78.79441],[42.00734,-78.79436],[42.00732,-78.7943],[42.00732,-78.79425],[42.00731,-78.7942],[42.0073,-78.79416],[42.00725,-78.79414],[42.0072,-78.79411],
[42.00717,-78.79408],[42.00712,-78.79404],[42.00707,-78.794],[42.00701,-78.79399],[42.00698,-78.79397],[42.00695,-78.79395],[42.00692,-78.79395],[42.00688,-78.79396],[42.00684,-78.79398],[42.00682,-78.79399],
[42.00678,-78.79398],[42.00675,-78.79397],[42.00672,-78.79395],[42.00669,-78.79395],[42.00666,-78.79393],[42.00663,-78.7939],[42.0066,-78.79387],[42.00657,-78.79384],[42.00653,-78.79382],[42.0065,-78.7938],
[42.00647,-78.79377],[42.00644,-78.79376],[42.0064,-78.79374],[42.00636,-78.7937],[42.00633,-78.79369],[42.00629,-78.7937],[42.00623,-78.79369],[42.00619,-78.79369],[42.00615,-78.79369],[42.00612,-78.79367],
[42.00605,-78.79367],[42.00598,-78.79368],[42.00594,-78.79365],[42.00589,-78.79363],[42.00584,-78.7936],[42.00579,-78.79359],[42.00576,-78.79358],[42.00573,-78.79358],[42.0057,-78.79355],[42.00569,-78.79351],
[42.00566,-78.79346],[42.00565,-78.79343]
 ] }); GV_Draw_Track(t);

t =  428 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M01BlueTrlAdmin - 2.23 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.10036,-78.74958],[42.10035,-78.7497],[42.10041,-78.7498],[42.10041,-78.74985],[42.10043,-78.75013],[42.10045,-78.75019],[42.10058,-78.75039],[42.10067,-78.75048],[42.10081,-78.75052],[42.10088,-78.75065],
[42.10088,-78.75074],[42.10083,-78.75083],[42.10077,-78.75102],[42.10079,-78.7511],[42.10071,-78.75118],[42.10055,-78.7512],[42.10047,-78.75132],[42.10035,-78.75142],[42.10025,-78.75159],[42.1002,-78.7516],
[42.10011,-78.75165],[42.10006,-78.75171],[42.10002,-78.75171],[42.09979,-78.75194],[42.09974,-78.75196],[42.09964,-78.75202],[42.09961,-78.75208],[42.09948,-78.75237],[42.09943,-78.75257],[42.09942,-78.75269],
[42.09939,-78.75276],[42.09935,-78.75296],[42.09931,-78.7531],[42.09928,-78.75347],[42.0993,-78.75368],[42.09927,-78.75389],[42.09928,-78.75411],[42.09924,-78.75434],[42.09917,-78.75444],[42.09912,-78.7546],
[42.09906,-78.75461],[42.09895,-78.7548],[42.0989,-78.75481],[42.09886,-78.75485],[42.09871,-78.7553],[42.09857,-78.75551],[42.09852,-78.75555],[42.09845,-78.75567],[42.09831,-78.75578],[42.09823,-78.75589],
[42.09805,-78.75599],[42.09802,-78.75594],[42.09788,-78.7559],[42.09775,-78.756],[42.0977,-78.75602],[42.09761,-78.75597],[42.09755,-78.75598],[42.09745,-78.75601],[42.09721,-78.75602],[42.09716,-78.75606],
[42.09693,-78.7563],[42.09683,-78.75625],[42.09674,-78.75626],[42.09668,-78.75636],[42.09664,-78.75642],[42.09662,-78.75649],[42.09657,-78.75653],[42.09654,-78.7566],[42.09644,-78.75667],[42.09621,-78.7566],
[42.0961,-78.75651],[42.0958,-78.75642],[42.09548,-78.75621],[42.09538,-78.75618],[42.09532,-78.75616],[42.09522,-78.75619],[42.09518,-78.75621],[42.09505,-78.75622],[42.09468,-78.75616],[42.09456,-78.75618],
[42.09449,-78.75617],[42.09439,-78.75612],[42.09426,-78.75611],[42.09406,-78.756],[42.09395,-78.756],[42.09371,-78.75611],[42.09358,-78.75604],[42.09351,-78.75602],[42.09343,-78.7561],[42.09335,-78.75621],
[42.09318,-78.75633],[42.09298,-78.75641],[42.09294,-78.75647],[42.09288,-78.75651],[42.09281,-78.75652],[42.09263,-78.75675],[42.09243,-78.75692],[42.09232,-78.75698],[42.09223,-78.75709],[42.09192,-78.75717],
[42.09147,-78.75714],[42.09121,-78.75723],[42.0911,-78.75714],[42.09104,-78.75716],[42.09101,-78.75722],[42.09079,-78.75739],[42.09067,-78.75738],[42.09056,-78.75742],[42.09037,-78.75743],[42.09023,-78.75765],
[42.09017,-78.75766],[42.09013,-78.75769],[42.09,-78.75766],[42.08994,-78.75771],[42.08979,-78.75795],[42.08973,-78.75813],[42.08967,-78.75813],[42.08944,-78.75819],[42.08927,-78.75832],[42.0892,-78.75835],
[42.08916,-78.75841],[42.089,-78.75856],[42.08888,-78.75877],[42.08874,-78.75889],[42.08856,-78.75899],[42.08844,-78.75899],[42.08838,-78.75906],[42.08816,-78.75917],[42.08809,-78.75915],[42.08798,-78.75918],
[42.08794,-78.75923],[42.08789,-78.75927],[42.08756,-78.75948],[42.08747,-78.7596],[42.08734,-78.75968],[42.08729,-78.75969],[42.08712,-78.75985],[42.08693,-78.75993],[42.08679,-78.75995],[42.0866,-78.76005],
[42.08625,-78.76038],[42.08615,-78.7604],[42.08587,-78.76054],[42.0858,-78.76053],[42.08559,-78.76057],[42.08551,-78.76064],[42.08532,-78.76071],[42.08519,-78.76069],[42.08509,-78.76063],[42.08503,-78.76063],
[42.08496,-78.76065],[42.08481,-78.76082],[42.08466,-78.76094],[42.08456,-78.76096],[42.08446,-78.76092],[42.08441,-78.76094],[42.08428,-78.761],[42.08423,-78.76104],[42.08415,-78.76099],[42.08403,-78.76098],
[42.08394,-78.761],[42.08386,-78.76099],[42.08373,-78.76101],[42.0836,-78.76106],[42.08344,-78.76116],[42.08325,-78.76131],[42.0831,-78.76145],[42.08298,-78.76152],[42.0829,-78.76165],[42.08285,-78.76168],
[42.08276,-78.76179],[42.08269,-78.7619],[42.08254,-78.76209],[42.08243,-78.76219],[42.0821,-78.7625],[42.08204,-78.7626],[42.08199,-78.76266],[42.08198,-78.76274],[42.08189,-78.76287],[42.08162,-78.76315],
[42.08159,-78.7632],[42.08144,-78.76333],[42.08135,-78.76345],[42.08095,-78.76363],[42.0808,-78.7638],[42.08069,-78.76397],[42.08067,-78.76412],[42.08064,-78.76418],[42.08058,-78.76418],[42.08049,-78.76443],
[42.08043,-78.76448],[42.08037,-78.7646],[42.08026,-78.76532],[42.08015,-78.76551],[42.08003,-78.76579],[42.07999,-78.76586],[42.07981,-78.76608],[42.07966,-78.76642],[42.07962,-78.76688],[42.07964,-78.76713] ] });
trk_segments[t].push({ points:[[42.07964,-78.76713],
[42.07963,-78.76744],[42.07959,-78.7675],[42.07947,-78.7676],[42.07943,-78.76766],[42.07927,-78.76775],[42.07914,-78.76775],[42.07909,-78.76779],[42.07903,-78.76793],[42.07891,-78.76809],[42.07882,-78.76818],
[42.07868,-78.76828],[42.07857,-78.76835],[42.07849,-78.76836],[42.07837,-78.76839],[42.07812,-78.76881],[42.07792,-78.76899],[42.07789,-78.76907],[42.07786,-78.76913],[42.07786,-78.7692],[42.07785,-78.76927],
[42.07784,-78.76949],[42.07779,-78.76951],[42.07764,-78.76948],[42.07762,-78.76943],[42.07755,-78.76948],[42.07737,-78.7697],[42.0774,-78.76978]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.09728,lon:-78.75602,color:'#00B0D8',name:'M01BlueTrlAdmin - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 183 })
GV_Draw_Marker({lat:42.09074,lon:-78.75738,color:'#00B0D8',name:'M01BlueTrlAdmin - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 178 })
GV_Draw_Marker({lat:42.0844,lon:-78.76095,color:'#00B0D8',name:'M01BlueTrlAdmin - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 199 })
GV_Draw_Marker({lat:42.07964,lon:-78.76714,color:'#00B0D8',name:'M01BlueTrlAdmin - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 268 })

t =  429 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M01OrTrlAdmin - 0.50 miles (orange blazes)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.08554,-78.76931],[42.08549,-78.76928],[42.08546,-78.76923],[42.08544,-78.76919],[42.08538,-78.76915],[42.08536,-78.76909],[42.08534,-78.76902],[42.08532,-78.76894],[42.08529,-78.76887],[42.08528,-78.7688],
[42.08524,-78.76874],[42.08517,-78.76868],[42.08514,-78.7686],[42.08513,-78.76852],[42.08513,-78.76846],[42.08508,-78.76839],[42.08503,-78.76832],[42.08501,-78.76824],[42.08498,-78.76816],[42.08497,-78.76809],
[42.08494,-78.76801],[42.08491,-78.76793],[42.08485,-78.76786],[42.08474,-78.76782],[42.08468,-78.76776],[42.08466,-78.76768],[42.08465,-78.76762],[42.08456,-78.76759],[42.08453,-78.76754],[42.08451,-78.76749],
[42.08451,-78.76743],[42.08449,-78.76737],[42.08449,-78.76731],[42.08447,-78.76723],[42.08445,-78.76716],[42.08444,-78.76709],[42.08443,-78.76702],[42.0844,-78.76695],[42.08437,-78.76688],[42.08436,-78.76679],
[42.08434,-78.76671],[42.08432,-78.76664],[42.08433,-78.76657],[42.08433,-78.76652],[42.08431,-78.76646],[42.08431,-78.76638],[42.0843,-78.76633],[42.08427,-78.76625],[42.08427,-78.76618],[42.08429,-78.76611],
[42.08431,-78.76601],[42.08433,-78.76595],[42.08433,-78.76587],[42.08431,-78.7658],[42.08431,-78.76574],[42.08427,-78.76569],[42.08424,-78.76561],[42.08416,-78.7655],[42.08416,-78.76543],[42.08416,-78.76535],
[42.0841,-78.76528],[42.0841,-78.7652],[42.0841,-78.76512],[42.08405,-78.76507],[42.08407,-78.76499],[42.08408,-78.76493],[42.08409,-78.76486],[42.0841,-78.76479],[42.08406,-78.76473],[42.08403,-78.76465],
[42.08402,-78.76457],[42.08399,-78.76451],[42.08399,-78.76443],[42.08399,-78.76437],[42.084,-78.76429],[42.08401,-78.76419],[42.084,-78.76414],[42.08399,-78.76408],[42.08395,-78.76401],[42.08395,-78.76392],
[42.08396,-78.76384],[42.08397,-78.76375],[42.08395,-78.76369],[42.08391,-78.76359],[42.08392,-78.76352],[42.0839,-78.76342],[42.08389,-78.76333],[42.0839,-78.76322],[42.0839,-78.76313],[42.0839,-78.76307],
[42.08391,-78.76301],[42.08391,-78.76295],[42.08394,-78.76285],[42.08394,-78.76276],[42.08397,-78.76269],[42.08402,-78.76258],[42.08406,-78.76249],[42.08407,-78.7624],[42.0841,-78.76232],[42.08416,-78.76222],
[42.08421,-78.76217],[42.08429,-78.76214],[42.08432,-78.76211],[42.08434,-78.76205],[42.08436,-78.76196],[42.08437,-78.76189],[42.08439,-78.76183],[42.08442,-78.76176],[42.08443,-78.7617],[42.08447,-78.76163],
[42.08452,-78.76155],[42.08457,-78.76148],[42.08461,-78.7614],[42.08465,-78.7613],[42.08469,-78.76122],[42.0847,-78.76115],[42.08473,-78.76107],[42.08471,-78.761],[42.08471,-78.7609]
 ] }); GV_Draw_Track(t);

t =  430 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M01TF - 20.94 miles (white blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M01\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M01.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[41.98447,-78.90233],[41.98466,-78.90226],[41.98491,-78.90191],[41.98515,-78.902],[41.9856,-78.90186],[41.98586,-78.90141],[41.98609,-78.9013],[41.98642,-78.90075],[41.9878,-78.89964],[41.98827,-78.8994],
[41.98844,-78.89902],[41.98945,-78.89831],[41.98966,-78.89783],[41.98994,-78.89784],[41.99057,-78.89748],[41.99067,-78.89729],[41.99164,-78.89688],[41.99187,-78.89693],[41.99219,-78.89678],[41.99252,-78.89678],
[41.99259,-78.89667],[41.99337,-78.89714],[41.99353,-78.89696],[41.99367,-78.89713],[41.99489,-78.89768],[41.99549,-78.89776],[41.99583,-78.898],[41.99692,-78.89823],[41.99704,-78.89816],[41.9976,-78.89844],
[41.99776,-78.8984],[41.99848,-78.89717],[41.99845,-78.89631],[41.999,-78.8949],[41.99935,-78.89447],[41.99951,-78.89446],[42.00023,-78.89264],[42.00029,-78.89222],[42.00043,-78.89203],[42.00047,-78.89156],
[42.00153,-78.8887],[42.00148,-78.88758],[42.00161,-78.88705],[42.00187,-78.8868],[42.0023,-78.8855],[42.00235,-78.8849],[42.00262,-78.88379],[42.00285,-78.88347],[42.00338,-78.88333],[42.00396,-78.88347],
[42.0047,-78.88336],[42.00514,-78.88348],[42.00532,-78.88371],[42.00563,-78.88456],[42.00559,-78.88488],[42.00575,-78.8861],[42.00624,-78.88719],[42.00635,-78.88726],[42.00657,-78.88781],[42.0067,-78.88857],
[42.00694,-78.88923],[42.00781,-78.8904],[42.00931,-78.8913],[42.00964,-78.89134],[42.0102,-78.89097],[42.0103,-78.89071],[42.01119,-78.88943],[42.01125,-78.88903],[42.01082,-78.88778],[42.01044,-78.88716],
[42.01024,-78.88703],[42.01022,-78.88687],[42.00954,-78.88583],[42.0096,-78.88516],[42.00936,-78.88451],[42.00936,-78.88371],[42.00923,-78.88331],[42.00893,-78.88291],[42.00866,-78.88144],[42.00819,-78.8799],
[42.00798,-78.87785],[42.00772,-78.87724],[42.00727,-78.87693],[42.007,-78.87646],[42.00681,-78.8763],[42.00619,-78.87532],[42.00618,-78.87421],[42.00593,-78.87409],[42.00589,-78.87388],[42.0061,-78.87339],
[42.00655,-78.87288],[42.00682,-78.87181],[42.00702,-78.87159],[42.00741,-78.87069],[42.00727,-78.87015],[42.00657,-78.86862],[42.00631,-78.86767],[42.00625,-78.86697],[42.00671,-78.86645],[42.00702,-78.86656],
[42.0074,-78.8662],[42.00746,-78.86603],[42.00857,-78.86497],[42.00877,-78.86489],[42.00938,-78.86413],[42.0096,-78.86408],[42.01003,-78.86353],[42.01023,-78.86347],[42.01076,-78.86292],[42.01106,-78.86284],
[42.01129,-78.86243],[42.012,-78.86201],[42.01218,-78.86176],[42.01243,-78.86088],[42.01271,-78.86068],[42.01376,-78.86068],[42.01398,-78.86049],[42.01401,-78.86019],[42.01528,-78.85869],[42.01561,-78.85858],
[42.01568,-78.85844],[42.0162,-78.85823],[42.01649,-78.85764],[42.01731,-78.85688],[42.01771,-78.8561],[42.01765,-78.85593],[42.01687,-78.8552],[42.0166,-78.85454],[42.01636,-78.85461],[42.01631,-78.85477],
[42.01526,-78.8553],[42.01501,-78.8556],[42.01449,-78.85577],[42.01386,-78.85566],[42.01299,-78.85518],[42.01292,-78.85495],[42.01257,-78.85465],[42.01255,-78.8544],[42.01237,-78.85413],[42.01218,-78.85414],
[42.012,-78.85382],[42.0107,-78.85293],[42.01006,-78.85233],[42.00787,-78.85138],[42.00749,-78.85105],[42.00695,-78.85008],[42.00685,-78.84926],[42.00701,-78.84813],[42.00728,-78.84763],[42.00747,-78.84762],
[42.0076,-78.84725],[42.00753,-78.84693],[42.0073,-78.84655],[42.00813,-78.84693],[42.0081,-78.84653],[42.0072,-78.84528],[42.0064,-78.84491],[42.0054,-78.84536],[42.0053,-78.84532],[42.00529,-78.8446],
[42.00447,-78.84428],[42.00431,-78.84406],[42.00413,-78.84406],[42.00415,-78.84366],[42.00389,-78.84255],[42.00367,-78.84216],[42.00333,-78.84106],[42.00311,-78.84068],[42.00292,-78.83967],[42.00298,-78.83902],
[42.00281,-78.8384],[42.00288,-78.83819],[42.00272,-78.83807],[42.00281,-78.8375],[42.00311,-78.83727],[42.00326,-78.837],[42.00429,-78.83641],[42.00531,-78.83645],[42.0058,-78.83631],[42.00621,-78.83602],
[42.00653,-78.83539],[42.00666,-78.83465],[42.00661,-78.83424],[42.00587,-78.83256],[42.00562,-78.83123],[42.0057,-78.83015],[42.00542,-78.82892],[42.00537,-78.82807],[42.00551,-78.82699],[42.00602,-78.82605],
[42.00617,-78.82497],[42.00554,-78.82324],[42.00545,-78.82244],[42.00472,-78.82116],[42.00461,-78.82076],[42.00464,-78.82047],[42.00409,-78.81954],[42.00332,-78.81911],[42.00296,-78.81902],[42.00263,-78.81876] ] });
trk_segments[t].push({ points:[[42.00263,-78.81876],
[42.00258,-78.81833],[42.002,-78.81729],[42.00193,-78.81692],[42.00152,-78.81665],[42.00134,-78.81668],[42.0005,-78.816],[42.00044,-78.8158],[42.00055,-78.8155],[42.00061,-78.81467],[42.00106,-78.81423],
[42.00175,-78.81473],[42.00261,-78.81514],[42.0041,-78.81519],[42.00627,-78.81424],[42.00664,-78.81386],[42.00741,-78.81209],[42.00743,-78.81164],[42.00816,-78.80983],[42.00838,-78.80907],[42.00847,-78.80825],
[42.00826,-78.8053],[42.00806,-78.80451],[42.00706,-78.80225],[42.00639,-78.80019],[42.00625,-78.79937],[42.00562,-78.79723],[42.00531,-78.7958],[42.0047,-78.79512],[42.00463,-78.79456],[42.00453,-78.79438],
[42.00491,-78.7938],[42.00519,-78.79375],[42.00552,-78.79408],[42.00562,-78.79385],[42.00567,-78.79284],[42.00542,-78.7923],[42.00501,-78.79191],[42.0051,-78.7914],[42.00527,-78.79111],[42.0056,-78.79098],
[42.00568,-78.79082],[42.00628,-78.79057],[42.00666,-78.78966],[42.00668,-78.78934],[42.0072,-78.78808],[42.00758,-78.78652],[42.00781,-78.78637],[42.00785,-78.78603],[42.00805,-78.78556],[42.00883,-78.78436],
[42.00896,-78.78379],[42.01018,-78.78238],[42.0106,-78.78214],[42.01101,-78.78206],[42.01144,-78.78165],[42.0117,-78.78182],[42.01266,-78.7817],[42.01329,-78.78197],[42.01344,-78.78189],[42.01398,-78.78196],
[42.01426,-78.78216],[42.01515,-78.78343],[42.01537,-78.78317],[42.01586,-78.78163],[42.01636,-78.78075],[42.01682,-78.78031],[42.01706,-78.77916],[42.01739,-78.77824],[42.0177,-78.77788],[42.01798,-78.77775],
[42.01827,-78.77736],[42.01894,-78.77717],[42.01941,-78.7764],[42.01999,-78.77596],[42.02053,-78.77512],[42.02095,-78.77475],[42.02125,-78.77414],[42.02127,-78.77393],[42.02191,-78.77384],[42.02231,-78.77359],
[42.02276,-78.77366],[42.02308,-78.77358],[42.0233,-78.77368],[42.02404,-78.77333],[42.0248,-78.77261],[42.0257,-78.77132],[42.02634,-78.77086],[42.02645,-78.77067],[42.02743,-78.77067],[42.02765,-78.77077],
[42.02854,-78.77063],[42.02883,-78.7707],[42.029,-78.77054],[42.02908,-78.7707],[42.02968,-78.77051],[42.03007,-78.77072],[42.03017,-78.77096],[42.03064,-78.77116],[42.03128,-78.77123],[42.03187,-78.77091],
[42.03204,-78.77059],[42.03271,-78.7705],[42.03285,-78.76895],[42.03304,-78.7685],[42.03321,-78.76841],[42.03404,-78.76961],[42.03488,-78.76969],[42.03538,-78.76957],[42.03576,-78.76913],[42.03642,-78.76929],
[42.03749,-78.76868],[42.03821,-78.76864],[42.03844,-78.76878],[42.03866,-78.76912],[42.03885,-78.76921],[42.0393,-78.76919],[42.03959,-78.7693],[42.03974,-78.76921],[42.04047,-78.7697],[42.04167,-78.76961],
[42.04194,-78.76974],[42.04236,-78.76955],[42.04291,-78.76802],[42.043,-78.76794],[42.04303,-78.76767],[42.04349,-78.76661],[42.04432,-78.76521],[42.04461,-78.76494],[42.04484,-78.76414],[42.04509,-78.76062],
[42.04546,-78.75704],[42.04565,-78.75699],[42.04728,-78.75789],[42.04821,-78.75941],[42.04875,-78.75992],[42.04966,-78.76049],[42.05027,-78.76108],[42.05057,-78.7615],[42.05068,-78.76224],[42.0511,-78.76361],
[42.05124,-78.76363],[42.0514,-78.76418],[42.05226,-78.76487],[42.05239,-78.76486],[42.05275,-78.7653],[42.05304,-78.76545],[42.0532,-78.76584],[42.05375,-78.76633],[42.05385,-78.76662],[42.05421,-78.76679],
[42.05456,-78.76719],[42.05464,-78.76715],[42.05498,-78.76622],[42.0553,-78.76601],[42.05543,-78.76578],[42.05567,-78.76594],[42.05585,-78.76628],[42.05584,-78.76668],[42.05597,-78.76715],[42.05612,-78.76727],
[42.05618,-78.76754],[42.05632,-78.76762],[42.05727,-78.76944],[42.05744,-78.76998],[42.05802,-78.77067],[42.05869,-78.77169],[42.05908,-78.77207],[42.05932,-78.77266],[42.05982,-78.77277],[42.06019,-78.77259],
[42.06071,-78.77292],[42.06113,-78.77259],[42.0619,-78.77264],[42.06207,-78.77279],[42.06262,-78.77286],[42.06293,-78.77325],[42.06302,-78.77319],[42.06339,-78.77333],[42.0643,-78.77416],[42.06476,-78.77396],
[42.06496,-78.77426],[42.06546,-78.77438],[42.06589,-78.77426],[42.06611,-78.77398],[42.06674,-78.7738],[42.06712,-78.77324],[42.06748,-78.77323],[42.06792,-78.77298],[42.06799,-78.77312],[42.0686,-78.77328],
[42.06896,-78.77379],[42.06951,-78.77488],[42.07136,-78.77439],[42.07196,-78.77479],[42.07257,-78.77423],[42.07334,-78.77324],[42.07412,-78.77349],[42.07454,-78.77341],[42.07549,-78.77236],[42.07587,-78.77222] ] });
trk_segments[t].push({ points:[[42.07587,-78.77222],
[42.07606,-78.77179],[42.07662,-78.77114],[42.07683,-78.77069],[42.07711,-78.77038],[42.07738,-78.76978],[42.07793,-78.77101],[42.07832,-78.77156],[42.07869,-78.77161],[42.07886,-78.77181],[42.07924,-78.77169],
[42.07991,-78.77172],[42.08012,-78.77157],[42.0803,-78.7711],[42.08046,-78.77001],[42.08064,-78.76982],[42.08211,-78.77062],[42.08269,-78.77059],[42.08321,-78.77019],[42.08347,-78.76976],[42.08394,-78.76967],
[42.08404,-78.76977],[42.08428,-78.76965],[42.0846,-78.76968],[42.08465,-78.76956],[42.08543,-78.76936],[42.08558,-78.76964],[42.08565,-78.77113],[42.08546,-78.77199],[42.08538,-78.7731],[42.08543,-78.77391],
[42.08499,-78.77493],[42.08495,-78.77528],[42.0847,-78.77566],[42.08468,-78.77621],[42.08492,-78.77794],[42.08514,-78.77846],[42.08599,-78.77868],[42.08655,-78.7794],[42.0866,-78.77964],[42.08737,-78.78025],
[42.08781,-78.7811],[42.08915,-78.78138],[42.08965,-78.78169],[42.09018,-78.78183],[42.09071,-78.78231],[42.0912,-78.78295],[42.09192,-78.78422],[42.09201,-78.78468],[42.09256,-78.78521],[42.09282,-78.78513],
[42.09341,-78.78584],[42.09391,-78.78593],[42.09407,-78.7858],[42.09459,-78.78584],[42.0948,-78.78569],[42.09556,-78.78558],[42.09613,-78.78588],[42.09616,-78.78627],[42.09641,-78.78647],[42.09659,-78.78626],
[42.09668,-78.78636],[42.09701,-78.78594],[42.09727,-78.7858],[42.09787,-78.78571],[42.09805,-78.78551],[42.10066,-78.78443],[42.10091,-78.78422],[42.10097,-78.78397],[42.10112,-78.7843],[42.10139,-78.78445],
[42.10162,-78.7849],[42.10181,-78.78591],[42.10191,-78.78592],[42.10218,-78.78547],[42.10238,-78.78539],[42.10321,-78.78389],[42.10327,-78.78359],[42.10348,-78.78359],[42.10384,-78.78299],[42.10401,-78.78293],
[42.10415,-78.78268],[42.10405,-78.7825],[42.10409,-78.78217],[42.10447,-78.78236],[42.10464,-78.78274],[42.10478,-78.78267],[42.10522,-78.78148],[42.10521,-78.78117],[42.10451,-78.78083],[42.10429,-78.78061],
[42.10437,-78.77989],[42.10456,-78.77925],[42.10523,-78.77818],[42.1056,-78.77782],[42.10614,-78.77759],[42.10644,-78.7778],[42.10672,-78.77667],[42.10698,-78.77613],[42.10755,-78.77542],[42.10772,-78.77537]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:41.9904,lon:-78.89758,color:'black',name:'M01TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 23 })
GV_Draw_Marker({lat:41.99713,lon:-78.8982,color:'black',name:'M01TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 339 })
GV_Draw_Marker({lat:42.00072,lon:-78.89089,color:'black',name:'M01TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 63 })
GV_Draw_Marker({lat:42.00397,lon:-78.88347,color:'black',name:'M01TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 7 })
GV_Draw_Marker({lat:42.00787,lon:-78.89043,color:'black',name:'M01TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 336 })
GV_Draw_Marker({lat:42.00963,lon:-78.88595,color:'black',name:'M01TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 131 })
GV_Draw_Marker({lat:42.00744,lon:-78.87705,color:'black',name:'M01TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 153 })
GV_Draw_Marker({lat:42.00682,lon:-78.86917,color:'black',name:'M01TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 122 })
GV_Draw_Marker({lat:42.01065,lon:-78.86304,color:'black',name:'M01TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 37 })
GV_Draw_Marker({lat:42.01627,lon:-78.85809,color:'black',name:'M01TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 58 })
GV_Draw_Marker({lat:42.01341,lon:-78.8554,color:'black',name:'M01TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 157 })
GV_Draw_Marker({lat:42.00734,lon:-78.85077,color:'black',name:'M01TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 127 })
GV_Draw_Marker({lat:42.00617,lon:-78.84501,color:'black',name:'M01TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 198 })
GV_Draw_Marker({lat:42.00282,lon:-78.83841,color:'black',name:'M01TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 109 })
GV_Draw_Marker({lat:42.00594,lon:-78.83273,color:'black',name:'M01TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 121 })
GV_Draw_Marker({lat:42.00565,lon:-78.82355,color:'black',name:'M01TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 116 })
GV_Draw_Marker({lat:42.00137,lon:-78.81667,color:'black',name:'M01TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 186 })
GV_Draw_Marker({lat:42.00549,lon:-78.81458,color:'black',name:'M01TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 18 })
GV_Draw_Marker({lat:42.00835,lon:-78.80646,color:'black',name:'M01TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 95 })
GV_Draw_Marker({lat:42.00569,lon:-78.7975,color:'black',name:'M01TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 112 })
GV_Draw_Marker({lat:42.00587,lon:-78.79074,color:'black',name:'M01TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 17 })
GV_Draw_Marker({lat:42.00968,lon:-78.78295,color:'black',name:'M01TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 41 })
GV_Draw_Marker({lat:42.01563,lon:-78.78235,color:'black',name:'M01TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 67 })
GV_Draw_Marker({lat:42.02026,lon:-78.77554,color:'black',name:'M01TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 49 })
GV_Draw_Marker({lat:42.02614,lon:-78.771,color:'black',name:'M01TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 28 })
GV_Draw_Marker({lat:42.03272,lon:-78.77037,color:'black',name:'M01TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 83 })
GV_Draw_Marker({lat:42.03819,lon:-78.76865,color:'black',name:'M01TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 2 })
GV_Draw_Marker({lat:42.04367,lon:-78.76631,color:'black',name:'M01TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 51 })
GV_Draw_Marker({lat:42.04545,lon:-78.75719,color:'black',name:'M01TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 82 })
GV_Draw_Marker({lat:42.0508,lon:-78.76262,color:'black',name:'M01TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 292 })
GV_Draw_Marker({lat:42.05577,lon:-78.76612,color:'black',name:'M01TF - Mile  15.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 305 })
GV_Draw_Marker({lat:42.06031,lon:-78.77266,color:'black',name:'M01TF - Mile  16 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 334 })
GV_Draw_Marker({lat:42.0668,lon:-78.77372,color:'black',name:'M01TF - Mile  16.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 47 })
GV_Draw_Marker({lat:42.07284,lon:-78.77388,color:'black',name:'M01TF - Mile  17 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 44 })
GV_Draw_Marker({lat:42.0781,lon:-78.77125,color:'black',name:'M01TF - Mile  17.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 314 })
GV_Draw_Marker({lat:42.08387,lon:-78.76969,color:'black',name:'M01TF - Mile  18 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 8 })
GV_Draw_Marker({lat:42.08471,lon:-78.77645,color:'black',name:'M01TF - Mile  18.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 280 })
GV_Draw_Marker({lat:42.08991,lon:-78.78176,color:'black',name:'M01TF - Mile  19 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 349 })
GV_Draw_Marker({lat:42.09571,lon:-78.78566,color:'black',name:'M01TF - Mile  19.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 339 })
GV_Draw_Marker({lat:42.10164,lon:-78.785,color:'black',name:'M01TF - Mile  20 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 284 })
GV_Draw_Marker({lat:42.10476,lon:-78.78095,color:'black',name:'M01TF - Mile  20.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 160 })

t =  431 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M01 map coverage - 20.94 miles ( 12 )</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M01\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M01.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.11532,-78.74562],[42.11532,-78.94686],[41.99402,-78.94686],[41.99402,-78.74562],[42.11532,-78.74562]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.10776,lon:-78.77519,color:'',dd:true
,name:'Access 1: ASP 2',desc:'Ample shoulder parking<br /><br />Location: <b>42.1078, -78.7752  or N42 6.4658 W78 46.5115</b><br /><br />This is <b>Map M2/CT2</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.16011,lon:-78.81272,color:'',dd:true
,name:'Access 3: Sawmill Run Rd',desc:'Shoulder parking on south side of Sawmill Run Rd<br /><br />Location: <b>42.1601, -78.8127  or N42 9.6064 W78 48.7634</b><br /><br />This is <b>Map M2/CT2</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.19632,lon:-78.8157,color:'',dd:true
,name:'Access 4: W Branch Bucktooth Run Rd',desc:'Limited shoulder parking<br /><br />Location: <b>42.1963, -78.8157  or N42 11.7789 W78 48.9422</b><br /><br />This is <b>Map M2/CT2</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.20673,lon:-78.79218,color:'',dd:true
,name:'Access 5: E Branch Bucktooth Run Rd',desc:'Limited shoulder parking<br /><br />Location: <b>42.2067, -78.7922  or N42 12.4037 W78 47.531</b><br /><br />This is <b>Map M2/CT2</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.10766,lon:-78.70123,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "M2/CT2 - Salamanca"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Jun 14, 2017</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M02\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/M02.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map M2/CT2 shows the FLT Main/North Country/Conservation Trail in Cattaraugus County from ASP Route 2 ramp to I86 to NY Route 353 & Stone Chimney Rd.. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M2/CT2\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.16866,lon:-78.81824,color:''
,name:'Spring&Fall hunting closure',desc:'Hunting Closure: May 1-31 and Oct 1-Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M2/CT2\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.1687, -78.8182  or N42 10.1198 W78 49.0947</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.20442,lon:-78.79563,color:''
,name:'Spring&Fall hunting closure',desc:'Hunting Closure: May 1-31 and Oct 1-Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M2/CT2\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.2044, -78.7956  or N42 12.2654 W78 47.7378</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.2049,lon:-78.80517,color:''
,name:'Tent site',desc:'No water-better tenting uphill<br /><br />Location: <b>42.2049, -78.8052  or N42 12.2941 W78 48.3099</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.19849,lon:-78.81583,color:''
,name:'M02 Bucktooth S.F. Lean-to',desc:'Picnic table, two benches, fire ring. Privy located east of trail.<br /><br />Location: <b>42.1985, -78.8158  or N42 11.9092 W78 48.95</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.16001,lon:-78.81372,color:''
,name:'M02Water',desc:'Faucet house front #8831<br /><br />Location: <b>42.16, -78.8137  or N42 9.6005 W78 48.8234</b>',icon:'Drinking Water',scale: 2, folder:'Water'});
GV_Draw_Marker({lat:42.20449,lon:-78.75543,color:'',dd:true
,name:'Rail Trail Parking',desc:'Parking lot at Patricia McGee Rail Trail<br /><br />Location: <b>42.2045, -78.7554  or N42 12.2696 W78 45.3257</b><br /><br />This is <b>Map M2/CT2</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.15283,lon:-78.74522,color:'',dd:true
,name:'Seneca Allegany Casino Parking',desc:'Large paved parking lot on East side of Casino building<br /><br />Location: <b>42.1528, -78.7452  or N42 9.1696 W78 44.7133</b><br /><br />This is <b>Map M2/CT2</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  432 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M02HBP01 - 3.32 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.16313,-78.77216],[42.16321,-78.77253],[42.16399,-78.77306],[42.16492,-78.7737],[42.16657,-78.77484],[42.1673,-78.77534],[42.16813,-78.77589],[42.16849,-78.77613],[42.16915,-78.77661],[42.16987,-78.77711],
[42.17095,-78.77785],[42.17219,-78.77869],[42.17279,-78.7791],[42.1732,-78.77939],[42.17356,-78.77963],[42.17384,-78.77979],[42.17433,-78.78008],[42.17462,-78.78026],[42.17528,-78.78064],[42.17564,-78.78085],
[42.17578,-78.78094],[42.17631,-78.78119],[42.17679,-78.78142],[42.17703,-78.78154],[42.17803,-78.78201],[42.17866,-78.78232],[42.17906,-78.78247],[42.17969,-78.7827],[42.1797,-78.78268],[42.18004,-78.78231],
[42.18031,-78.78227],[42.18237,-78.78227],[42.18404,-78.78227],[42.18567,-78.78227],[42.1875,-78.78228],[42.188,-78.78221],[42.18899,-78.78206],[42.19073,-78.78193],[42.19136,-78.78201],[42.19226,-78.78236],
[42.19376,-78.78235],[42.1953,-78.78231],[42.1962,-78.78227],[42.1967,-78.78249],[42.19943,-78.78539],[42.19978,-78.78575],[42.2005,-78.78654],[42.20115,-78.78724],[42.20166,-78.78777],[42.2025,-78.78862],
[42.20381,-78.78996],[42.20501,-78.7912],[42.20592,-78.79176],[42.20671,-78.79221],[42.20671,-78.79221]
 ] }); GV_Draw_Track(t);

t =  433 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M02TF - 21.45 miles (white blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M02\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M02.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.10769,-78.77531],[42.10777,-78.77513],[42.10773,-78.77488],[42.10654,-78.77192],[42.10662,-78.77176],[42.10726,-78.77135],[42.10755,-78.77091],[42.10762,-78.77059],[42.10761,-78.77005],[42.10741,-78.76918],
[42.10738,-78.76873],[42.10748,-78.76823],[42.10762,-78.76795],[42.10784,-78.76768],[42.10821,-78.76748],[42.10867,-78.76748],[42.10926,-78.76774],[42.10972,-78.76806],[42.1098,-78.76799],[42.10995,-78.7675],
[42.11001,-78.76699],[42.11019,-78.76719],[42.11095,-78.76862],[42.11125,-78.7696],[42.11165,-78.77041],[42.11215,-78.77211],[42.11248,-78.77261],[42.11336,-78.77326],[42.11406,-78.77348],[42.11437,-78.77336],
[42.11471,-78.77306],[42.11506,-78.77251],[42.11552,-78.77146],[42.11604,-78.77082],[42.11666,-78.77032],[42.11695,-78.77018],[42.11706,-78.77019],[42.11773,-78.77095],[42.11821,-78.771],[42.11864,-78.77075],
[42.11893,-78.77039],[42.11917,-78.76962],[42.12027,-78.76816],[42.12045,-78.76807],[42.12088,-78.76823],[42.12187,-78.76832],[42.12293,-78.76864],[42.12324,-78.76866],[42.12376,-78.76881],[42.12402,-78.76901],
[42.12483,-78.76983],[42.1253,-78.77014],[42.12555,-78.77021],[42.12591,-78.77007],[42.12625,-78.7696],[42.12639,-78.76923],[42.12655,-78.76838],[42.12693,-78.76818],[42.12716,-78.76793],[42.12743,-78.76741],
[42.128,-78.76499],[42.12815,-78.76386],[42.12838,-78.76319],[42.12874,-78.76274],[42.12885,-78.7627],[42.12926,-78.76311],[42.12963,-78.76322],[42.12979,-78.76319],[42.1298,-78.76312],[42.13025,-78.76313],
[42.13041,-78.76356],[42.13178,-78.7685],[42.13208,-78.76936],[42.13322,-78.77165],[42.13406,-78.77315],[42.13441,-78.7736],[42.13484,-78.774],[42.13539,-78.77433],[42.13559,-78.77434],[42.13608,-78.77463],
[42.13694,-78.77581],[42.13708,-78.77559],[42.13747,-78.77543],[42.13753,-78.77546],[42.13754,-78.77554],[42.13761,-78.77558],[42.13765,-78.77514],[42.13758,-78.77503],[42.13763,-78.77491],[42.13779,-78.77488],
[42.13812,-78.77454],[42.13823,-78.77417],[42.13805,-78.77376],[42.13796,-78.77325],[42.13785,-78.77308],[42.13786,-78.77266],[42.13835,-78.77231],[42.13844,-78.77213],[42.13919,-78.77153],[42.13949,-78.77151],
[42.14433,-78.76796],[42.1446,-78.76782],[42.14494,-78.76748],[42.14545,-78.76712],[42.14639,-78.76624],[42.14626,-78.7659],[42.14658,-78.76496],[42.14657,-78.76466],[42.14676,-78.76379],[42.14702,-78.76303],
[42.14708,-78.76297],[42.14722,-78.76242],[42.14791,-78.76092],[42.14849,-78.76033],[42.14908,-78.76],[42.14949,-78.75984],[42.14964,-78.75986],[42.14974,-78.75977],[42.14999,-78.75919],[42.15017,-78.75892],
[42.15008,-78.7587],[42.15123,-78.75503],[42.15168,-78.75291],[42.15183,-78.75243],[42.15202,-78.75231],[42.15218,-78.75236],[42.15268,-78.75226],[42.15571,-78.75066],[42.15687,-78.74975],[42.15768,-78.74884],
[42.15826,-78.74801],[42.15863,-78.74726],[42.15903,-78.74623],[42.1592,-78.74558],[42.15928,-78.74549],[42.15946,-78.74452],[42.15952,-78.74372],[42.15949,-78.74273],[42.15954,-78.74246],[42.15964,-78.74243],
[42.1636,-78.74449],[42.16394,-78.7446],[42.16532,-78.74483],[42.16529,-78.74567],[42.16497,-78.74959],[42.16489,-78.75149],[42.16456,-78.75606],[42.16445,-78.75703],[42.16437,-78.75877],[42.16429,-78.75941],
[42.16428,-78.76003],[42.16421,-78.76054],[42.16417,-78.76167],[42.16403,-78.76307],[42.16401,-78.76403],[42.16372,-78.76745],[42.16363,-78.76957],[42.16352,-78.77028],[42.16353,-78.77074],[42.16344,-78.77156],
[42.16332,-78.77185],[42.16304,-78.77216],[42.16111,-78.77543],[42.16086,-78.77569],[42.16039,-78.77578],[42.15945,-78.77539],[42.15909,-78.77556],[42.15832,-78.77641],[42.15826,-78.77655],[42.15699,-78.77779],
[42.15462,-78.78037],[42.15434,-78.78083],[42.15355,-78.78182],[42.1525,-78.783],[42.15222,-78.78323],[42.15189,-78.78373],[42.15137,-78.78427],[42.15132,-78.78444],[42.15134,-78.78483],[42.15147,-78.7851],
[42.1529,-78.787],[42.15401,-78.78831],[42.15455,-78.78916],[42.15496,-78.78996],[42.15609,-78.79284],[42.15662,-78.79381],[42.15741,-78.79478],[42.15766,-78.79526],[42.15811,-78.79713],[42.15817,-78.79723],
[42.15858,-78.79911],[42.15854,-78.79975],[42.15816,-78.80141],[42.15816,-78.80182],[42.15824,-78.80218],[42.15916,-78.80449],[42.15963,-78.80596],[42.1598,-78.80705],[42.16008,-78.80977],[42.16014,-78.81326] ] });
trk_segments[t].push({ points:[[42.16014,-78.81326],
[42.16018,-78.81338],[42.16056,-78.81341],[42.16088,-78.81335],[42.16123,-78.81364],[42.16171,-78.81392],[42.16191,-78.81388],[42.1625,-78.81415],[42.16265,-78.81434],[42.16341,-78.81491],[42.16355,-78.81516],
[42.16392,-78.81525],[42.16465,-78.81522],[42.16481,-78.81546],[42.16543,-78.8155],[42.16559,-78.81572],[42.16588,-78.81585],[42.16599,-78.81581],[42.1665,-78.81619],[42.16722,-78.81641],[42.16782,-78.81695],
[42.16798,-78.81717],[42.16804,-78.8175],[42.16837,-78.81779],[42.16843,-78.81799],[42.16867,-78.81832],[42.16919,-78.81878],[42.16939,-78.81907],[42.16971,-78.81913],[42.16981,-78.81905],[42.16993,-78.81907],
[42.17025,-78.81874],[42.17075,-78.81896],[42.17131,-78.8187],[42.17162,-78.81875],[42.17198,-78.81898],[42.17211,-78.81919],[42.17213,-78.81941],[42.1723,-78.81958],[42.1724,-78.81959],[42.17311,-78.81899],
[42.17337,-78.81862],[42.17361,-78.81815],[42.17357,-78.81737],[42.17389,-78.81687],[42.1741,-78.81675],[42.17438,-78.81675],[42.17462,-78.81689],[42.17481,-78.81718],[42.17481,-78.81753],[42.1751,-78.81938],
[42.17499,-78.81986],[42.17469,-78.8206],[42.17501,-78.82086],[42.17514,-78.82113],[42.1756,-78.82155],[42.17597,-78.82161],[42.17612,-78.82152],[42.1763,-78.82158],[42.17653,-78.82152],[42.17668,-78.82138],
[42.17713,-78.82121],[42.17759,-78.82114],[42.17803,-78.8209],[42.17827,-78.82085],[42.17873,-78.8209],[42.17907,-78.82077],[42.17937,-78.82076],[42.18016,-78.82094],[42.18098,-78.82132],[42.18109,-78.82125],
[42.18197,-78.82124],[42.18243,-78.8211],[42.18292,-78.82037],[42.18283,-78.81937],[42.18287,-78.81916],[42.18285,-78.81887],[42.18289,-78.81864],[42.18286,-78.81839],[42.183,-78.81824],[42.18317,-78.81827],
[42.18331,-78.81818],[42.18353,-78.81815],[42.18368,-78.81801],[42.18395,-78.81789],[42.18415,-78.81768],[42.18473,-78.8174],[42.18525,-78.81743],[42.18608,-78.81776],[42.18659,-78.81772],[42.18712,-78.81779],
[42.18725,-78.81771],[42.18766,-78.81775],[42.18784,-78.81786],[42.18823,-78.81787],[42.18871,-78.81757],[42.18898,-78.8173],[42.18915,-78.81728],[42.18937,-78.81699],[42.19018,-78.8165],[42.19034,-78.8162],
[42.19097,-78.81582],[42.19154,-78.8157],[42.19166,-78.81561],[42.19182,-78.81562],[42.19203,-78.81553],[42.19225,-78.81527],[42.19267,-78.81511],[42.19341,-78.81454],[42.19348,-78.81442],[42.1938,-78.81424],
[42.19389,-78.81399],[42.1939,-78.81339],[42.19385,-78.81308],[42.19389,-78.81257],[42.19385,-78.8124],[42.19388,-78.81232],[42.19409,-78.8124],[42.19418,-78.81259],[42.19486,-78.81348],[42.19514,-78.81396],
[42.19566,-78.8146],[42.19581,-78.81507],[42.19599,-78.81541],[42.19619,-78.81566],[42.19638,-78.81573],[42.19652,-78.81596],[42.19706,-78.81596],[42.19714,-78.81586],[42.19707,-78.81504],[42.19726,-78.81507],
[42.19733,-78.81517],[42.19751,-78.81518],[42.19783,-78.81589],[42.19832,-78.81592],[42.19844,-78.81586],[42.19899,-78.81587],[42.19923,-78.81546],[42.19936,-78.81543],[42.19981,-78.81508],[42.19997,-78.81472],
[42.20004,-78.81438],[42.20014,-78.81429],[42.20034,-78.81369],[42.20061,-78.81361],[42.20175,-78.81359],[42.20186,-78.81353],[42.20197,-78.81359],[42.20268,-78.81355],[42.20297,-78.81287],[42.20309,-78.81271],
[42.20313,-78.81252],[42.20324,-78.81245],[42.20345,-78.81202],[42.20363,-78.81196],[42.20383,-78.81147],[42.20438,-78.81099],[42.20445,-78.81061],[42.20447,-78.8099],[42.20442,-78.80957],[42.20451,-78.80834],
[42.20432,-78.8078],[42.20409,-78.80651],[42.20422,-78.80634],[42.20439,-78.80562],[42.20439,-78.80535],[42.20452,-78.80514],[42.20501,-78.80528],[42.20491,-78.80453],[42.20492,-78.80409],[42.20476,-78.80336],
[42.20454,-78.80309],[42.20453,-78.80242],[42.20437,-78.80232],[42.20418,-78.80198],[42.20362,-78.80151],[42.20343,-78.80117],[42.203,-78.80078],[42.20288,-78.80042],[42.2025,-78.79996],[42.20229,-78.79954],
[42.20236,-78.79908],[42.2023,-78.79892],[42.20213,-78.79886],[42.20187,-78.79856],[42.20179,-78.7982],[42.20163,-78.79781],[42.20143,-78.79759],[42.20144,-78.79752],[42.20167,-78.79726],[42.20217,-78.79722],
[42.20242,-78.79711],[42.20298,-78.79707],[42.20338,-78.79687],[42.20364,-78.79628],[42.20418,-78.79561],[42.20451,-78.79565],[42.20488,-78.79551],[42.20513,-78.79502],[42.20535,-78.79478],[42.20575,-78.79411] ] });
trk_segments[t].push({ points:[[42.20575,-78.79411],
[42.20613,-78.79376],[42.20625,-78.79316],[42.20632,-78.79315],[42.20662,-78.79267],[42.20662,-78.79247],[42.20671,-78.79223],[42.20982,-78.7939],[42.21345,-78.79613],[42.215,-78.79696],[42.21557,-78.79688],
[42.21851,-78.79614],[42.21944,-78.79613],[42.22038,-78.79624],[42.2239,-78.79698],[42.22539,-78.79799],[42.22631,-78.79838],[42.22642,-78.79795],[42.22639,-78.79754],[42.22579,-78.79689],[42.22564,-78.79665],
[42.22544,-78.79612],[42.22542,-78.79581],[42.22547,-78.79547],[42.22548,-78.79406],[42.22525,-78.79333],[42.22527,-78.79291],[42.22516,-78.7923],[42.22509,-78.79223],[42.2249,-78.79226],[42.22434,-78.7926],
[42.22422,-78.79231],[42.22423,-78.79134],[42.22428,-78.79125],[42.22424,-78.79054],[42.22435,-78.7902],[42.22425,-78.78904],[42.22411,-78.7884],[42.22414,-78.78811],[42.22409,-78.78788],[42.22418,-78.78729],
[42.22443,-78.7871],[42.22471,-78.78649],[42.22504,-78.78642],[42.22515,-78.78633],[42.22519,-78.78608],[42.22501,-78.78565],[42.22514,-78.78563],[42.2256,-78.78514],[42.22556,-78.78494],[42.22558,-78.78474],
[42.22582,-78.78429],[42.22616,-78.78399],[42.22608,-78.78367],[42.22611,-78.7834],[42.22597,-78.78297],[42.22601,-78.78279],[42.22661,-78.78271],[42.22752,-78.78167],[42.22772,-78.78122],[42.22798,-78.78089],
[42.22802,-78.78026],[42.22816,-78.78019],[42.22839,-78.77992],[42.22848,-78.77972],[42.22848,-78.77948],[42.22838,-78.77921],[42.22842,-78.77897],[42.22898,-78.77827],[42.22899,-78.77763],[42.22913,-78.77698],
[42.22926,-78.77667],[42.22949,-78.77643],[42.22982,-78.77594],[42.22984,-78.77571],[42.23002,-78.7755],[42.23007,-78.77484],[42.23003,-78.77343],[42.23007,-78.77313],[42.23006,-78.77244],[42.22995,-78.77214],
[42.22963,-78.7717],[42.22866,-78.77109],[42.22851,-78.77073],[42.22844,-78.77038],[42.22882,-78.76978],[42.22899,-78.76935],[42.22916,-78.76869],[42.22912,-78.76854],[42.22883,-78.76825],[42.22774,-78.76741],
[42.22618,-78.76637],[42.22573,-78.76615],[42.21656,-78.76039],[42.21466,-78.7596],[42.21417,-78.75946],[42.20824,-78.7571],[42.20747,-78.75686],[42.20436,-78.75562],[42.20424,-78.75442],[42.20421,-78.75327]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.10834,lon:-78.76748,color:'black',name:'M02TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 0 })
GV_Draw_Marker({lat:42.11247,lon:-78.7726,color:'black',name:'M02TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 312 })
GV_Draw_Marker({lat:42.11833,lon:-78.77093,color:'black',name:'M02TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 23 })
GV_Draw_Marker({lat:42.12441,lon:-78.7694,color:'black',name:'M02TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 323 })
GV_Draw_Marker({lat:42.12823,lon:-78.76361,color:'black',name:'M02TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 65 })
GV_Draw_Marker({lat:42.13198,lon:-78.76908,color:'black',name:'M02TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 295 })
GV_Draw_Marker({lat:42.13693,lon:-78.77581,color:'black',name:'M02TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 314 })
GV_Draw_Marker({lat:42.14112,lon:-78.77029,color:'black',name:'M02TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 29 })
GV_Draw_Marker({lat:42.14658,lon:-78.7648,color:'black',name:'M02TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 91 })
GV_Draw_Marker({lat:42.15047,lon:-78.75746,color:'black',name:'M02TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 67 })
GV_Draw_Marker({lat:42.15491,lon:-78.75111,color:'black',name:'M02TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 21 })
GV_Draw_Marker({lat:42.15948,lon:-78.7442,color:'black',name:'M02TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 84 })
GV_Draw_Marker({lat:42.16517,lon:-78.74481,color:'black',name:'M02TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 353 })
GV_Draw_Marker({lat:42.16467,lon:-78.75436,color:'black',name:'M02TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 264 })
GV_Draw_Marker({lat:42.164,lon:-78.76407,color:'black',name:'M02TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 263 })
GV_Draw_Marker({lat:42.1624,lon:-78.77326,color:'black',name:'M02TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 232 })
GV_Draw_Marker({lat:42.15673,lon:-78.77808,color:'black',name:'M02TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 219 })
GV_Draw_Marker({lat:42.15132,lon:-78.78448,color:'black',name:'M02TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:42.15576,lon:-78.79198,color:'black',name:'M02TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 298 })
GV_Draw_Marker({lat:42.15835,lon:-78.80058,color:'black',name:'M02TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 253 })
GV_Draw_Marker({lat:42.16008,lon:-78.8098,color:'black',name:'M02TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 271 })
GV_Draw_Marker({lat:42.16434,lon:-78.81523,color:'black',name:'M02TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 2 })
GV_Draw_Marker({lat:42.17036,lon:-78.81878,color:'black',name:'M02TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 342 })
GV_Draw_Marker({lat:42.17499,lon:-78.81862,color:'black',name:'M02TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 282 })
GV_Draw_Marker({lat:42.17997,lon:-78.82089,color:'black',name:'M02TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 351 })
GV_Draw_Marker({lat:42.18515,lon:-78.81742,color:'black',name:'M02TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 358 })
GV_Draw_Marker({lat:42.19183,lon:-78.81562,color:'black',name:'M02TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 17 })
GV_Draw_Marker({lat:42.19626,lon:-78.81568,color:'black',name:'M02TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 344 })
GV_Draw_Marker({lat:42.20149,lon:-78.81359,color:'black',name:'M02TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 1 })
GV_Draw_Marker({lat:42.20409,lon:-78.80654,color:'black',name:'M02TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 104 })
GV_Draw_Marker({lat:42.20232,lon:-78.79934,color:'black',name:'M02TF - Mile  15.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 79 })
GV_Draw_Marker({lat:42.20583,lon:-78.79403,color:'black',name:'M02TF - Mile  16 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 35 })
GV_Draw_Marker({lat:42.21181,lon:-78.7951,color:'black',name:'M02TF - Mile  16.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 336 })
GV_Draw_Marker({lat:42.21871,lon:-78.79614,color:'black',name:'M02TF - Mile  17 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 1 })
GV_Draw_Marker({lat:42.22571,lon:-78.79812,color:'black',name:'M02TF - Mile  17.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 343 })
GV_Draw_Marker({lat:42.22423,lon:-78.79165,color:'black',name:'M02TF - Mile  18 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 89 })
GV_Draw_Marker({lat:42.22609,lon:-78.78369,color:'black',name:'M02TF - Mile  18.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 108 })
GV_Draw_Marker({lat:42.22951,lon:-78.77641,color:'black',name:'M02TF - Mile  19 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 48 })
GV_Draw_Marker({lat:42.22899,lon:-78.76841,color:'black',name:'M02TF - Mile  19.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 143 })
GV_Draw_Marker({lat:42.2225,lon:-78.76412,color:'black',name:'M02TF - Mile  20 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 155 })
GV_Draw_Marker({lat:42.2159,lon:-78.76012,color:'black',name:'M02TF - Mile  20.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 163 })
GV_Draw_Marker({lat:42.20894,lon:-78.75744,color:'black',name:'M02TF - Mile  21 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 164 })

t =  434 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M02X1HntClose - 1.46 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.16014,-78.81326],[42.16018,-78.81338],[42.16056,-78.81341],[42.16088,-78.81335],[42.16123,-78.81364],[42.16171,-78.81392],[42.16191,-78.81388],[42.1625,-78.81415],[42.16265,-78.81434],[42.16341,-78.81491],
[42.16355,-78.81516],[42.16392,-78.81525],[42.16465,-78.81522],[42.16481,-78.81546],[42.16543,-78.8155],[42.16559,-78.81572],[42.16588,-78.81585],[42.16599,-78.81581],[42.1665,-78.81619],[42.16722,-78.81641],
[42.16782,-78.81695],[42.16798,-78.81717],[42.16804,-78.8175],[42.16837,-78.81779],[42.16843,-78.81799],[42.16867,-78.81832],[42.16919,-78.81878],[42.16939,-78.81907],[42.16971,-78.81913],[42.16993,-78.81907],
[42.17025,-78.81874],[42.17075,-78.81896],[42.17131,-78.8187],[42.17162,-78.81875],[42.17198,-78.81898],[42.17211,-78.81919],[42.17213,-78.81941],[42.1723,-78.81958],[42.1724,-78.81959],[42.17311,-78.81899],
[42.17337,-78.81862],[42.17361,-78.81815],[42.17357,-78.81737],[42.17389,-78.81687],[42.1741,-78.81675],[42.17438,-78.81675],[42.17462,-78.81689],[42.17481,-78.81718],[42.17481,-78.81753],[42.1751,-78.81938],
[42.17499,-78.81986],[42.17469,-78.8206],[42.17501,-78.82086]
 ] }); GV_Draw_Track(t);

t =  435 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M02X2HntClose - 0.46 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.20167,-78.79726],[42.20217,-78.79722],[42.20242,-78.79711],[42.20298,-78.79707],[42.20338,-78.79687],[42.20364,-78.79628],[42.20418,-78.79561],[42.20451,-78.79565],[42.20488,-78.79551],[42.20513,-78.79502],
[42.20535,-78.79478],[42.20575,-78.79411],[42.20613,-78.79376],[42.20625,-78.79316],[42.20632,-78.79315],[42.20662,-78.79267],[42.20662,-78.79247]
 ] }); GV_Draw_Track(t);

t =  436 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M02 map coverage - 0.46 miles ( 12 )</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M02\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M02.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.24215,-78.67623],[42.24215,-78.82625],[42.08766,-78.82625],[42.08766,-78.67623],[42.24215,-78.67623]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.33262,lon:-78.63931,color:'',dd:true
,name:'Access 10: Irish Hill Rd',desc:'Shoulder parking<br /><br />Location: <b>42.3326, -78.6393  or N42 19.957 W78 38.3587</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.32899,lon:-78.62291,color:'',dd:true
,name:'Access 11: Brennan Rd',desc:'Limited shoulder parking<br /><br />Location: <b>42.329, -78.6229  or N42 19.7395 W78 37.3744</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.34305,lon:-78.61304,color:'',dd:true
,name:'Access 12: NY-240/Fancy Tract Rd',desc:'Good shoulder parking<br /><br />Location: <b>42.343, -78.613  or N42 20.5829 W78 36.7826</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.20903,lon:-78.71126,color:'',dd:true
,name:'Access 2: Little Rock City Rd',desc:'Shoulder parking-better parking 0.1 mi E at turn around<br /><br />Location: <b>42.209, -78.7113  or N42 12.5419 W78 42.6753</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.22452,lon:-78.69881,color:'',dd:true
,name:'Access 3: Hungry Hollow Rd',desc:'Parking nearby at old Seneca CCC camp<br /><br />Location: <b>42.2245, -78.6988  or N42 13.4713 W78 41.9286</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.23999,lon:-78.69952,color:'',dd:true
,name:'Access 4: McCarthy Hill Rd',desc:'Shoulder parking<br /><br />Location: <b>42.24, -78.6995  or N42 14.3993 W78 41.9712</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.25623,lon:-78.69516,color:'',dd:true
,name:'Access 5: Mutton Hollow Rd',desc:'Ample shoulder parking<br /><br />Location: <b>42.2562, -78.6952  or N42 15.3738 W78 41.7099</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.2748,lon:-78.68621,color:'',dd:true
,name:'Access 6: NY-242',desc:'Shoulder parking<br /><br />Location: <b>42.2748, -78.6862  or N42 16.4881 W78 41.1729</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.2989,lon:-78.70157,color:'',dd:true
,name:'Access 7: CR-13/ Maples-Ellicottville Rd',desc:'Shoulder parking<br /><br />Location: <b>42.2989, -78.7016  or N42 17.9342 W78 42.0944</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.31095,lon:-78.68141,color:'',dd:true
,name:'Access 8: Poverty Hill Rd',desc:'Shoulder parking<br /><br />Location: <b>42.311, -78.6814  or N42 18.657 W78 40.8846</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.2156,lon:-78.63334,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "M3/CT3 - Ellicottville"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Aug 2, 2017</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M03\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/M03.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map M3/CT3 shows the FLT Main/North Country/Conservation Trail in Cattaraugus County from NY Route 353 & Stone Chimney Rd. to W Valley Rd (CR 32). <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M3/CT3\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.25844,lon:-78.69086,color:''
,name:'Holiday Valley LeanTo',desc:'Dirt floor-picnic table inside<br /><br />Location: <b>42.2584, -78.6909  or N42 15.5067 W78 41.4515</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.2864,lon:-78.69715,color:''
,name:'Spring&Fall hunting closure',desc:'Hunting Closure: May 1-31 and Oct 1  -Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M3/CT3\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.2864, -78.6971  or N42 17.1842 W78 41.8288</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.30935,lon:-78.67546,color:''
,name:'Fall hunting closure',desc:'Hunting Closure: Oct 1 - Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M3/CT3\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3093, -78.6755  or N42 18.5608 W78 40.5274</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.20799,lon:-78.7125,color:''
,name:'Tent site',desc:'At high point-no water<br /><br />Location: <b>42.208, -78.7125  or N42 12.4794 W78 42.7498</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.25625,lon:-78.69397,color:''
,name:'Tent site',desc:'Just E of tower-no water<br /><br />Location: <b>42.2563, -78.694  or N42 15.3751 W78 41.6383</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.26555,lon:-78.69219,color:''
,name:'Tent site',desc:'Pond, register, fire ring, seats<br /><br />Location: <b>42.2656, -78.6922  or N42 15.9332 W78 41.5315</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.30856,lon:-78.67311,color:''
,name:'Tent site',desc:'Fire ring, no water source<br /><br />Location: <b>42.3086, -78.6731  or N42 18.5138 W78 40.3863</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.22407,lon:-78.70003,color:''
,name:'Tent sites at CCC site',desc:'Creek-pavilion-tables<br /><br />Location: <b>42.2241, -78.7  or N42 13.4443 W78 42.002</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.31694,lon:-78.65743,color:''
,name:'Spring&Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct 1 - Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M3/CT3\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3169, -78.6574  or N42 19.0162 W78 39.446</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.33076,lon:-78.64643,color:''
,name:'Spring&Fall hunting closure',desc:'Hunting Closure: May 1-May 31 and Oct 1 to Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M3/CT3\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3308, -78.6464  or N42 19.8455 W78 38.7858</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.33189,lon:-78.63132,color:''
,name:'Fall hunting closure',desc:'Hunting Closure: Oct 1 - Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M3/CT3\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3319, -78.6313  or N42 19.9135 W78 37.8791</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.33346,lon:-78.61367,color:''
,name:'Fall hunting closure',desc:'Hunting Closure:  Oct 1 - Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M3/CT3\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3335, -78.6137  or N42 20.0077 W78 36.8203</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.20449,lon:-78.75543,color:'',dd:true
,name:'RailTrail parking',desc:'Parking lot-Patricia McGee Trl<br /><br />Location: <b>42.2045, -78.7554  or N42 12.2696 W78 45.3257</b><br /><br />This is <b>Map M3/CT3</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  437 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03BlueLeanTo - 0.34 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.25623,-78.69524],[42.25623,-78.69524],[42.25621,-78.69522],[42.25622,-78.6952],[42.25623,-78.69516],[42.25626,-78.69514],[42.25629,-78.69511],[42.25632,-78.69508],[42.25632,-78.69504],[42.25633,-78.69501],
[42.25635,-78.69498],[42.25634,-78.69497],[42.25632,-78.69489],[42.25633,-78.69482],[42.25634,-78.69476],[42.25636,-78.6947],[42.2564,-78.69465],[42.25644,-78.6946],[42.25646,-78.69453],[42.25653,-78.69444],
[42.25656,-78.69434],[42.2566,-78.69425],[42.25661,-78.69418],[42.25663,-78.69412],[42.25663,-78.69405],[42.25664,-78.69398],[42.25663,-78.69391],[42.25663,-78.69382],[42.25663,-78.69373],[42.25662,-78.69364],
[42.25661,-78.69357],[42.25659,-78.69348],[42.25658,-78.69341],[42.25657,-78.69337],[42.25657,-78.69331],[42.25654,-78.69324],[42.25651,-78.69317],[42.25651,-78.6931],[42.25653,-78.69303],[42.25652,-78.69296],
[42.2565,-78.69288],[42.25649,-78.6928],[42.2565,-78.69273],[42.25648,-78.69268],[42.25647,-78.6926],[42.25644,-78.69248],[42.25644,-78.6924],[42.25641,-78.69229],[42.25644,-78.69225],[42.25647,-78.69225],
[42.25652,-78.69225],[42.25654,-78.69228],[42.25657,-78.69227],[42.25661,-78.69225],[42.25664,-78.69221],[42.25668,-78.69218],[42.25672,-78.69218],[42.25675,-78.69217],[42.25679,-78.69214],[42.25681,-78.69212],
[42.25683,-78.69209],[42.25685,-78.69205],[42.25694,-78.69193],[42.25703,-78.69184],[42.25705,-78.69177],[42.25709,-78.69173],[42.25712,-78.69167],[42.25714,-78.69162],[42.25716,-78.69155],[42.25718,-78.6915],
[42.25721,-78.69143],[42.25725,-78.69137],[42.25729,-78.69135],[42.25732,-78.69131],[42.25737,-78.69128],[42.25743,-78.69123],[42.25751,-78.6912],[42.25755,-78.69115],[42.2576,-78.69111],[42.25763,-78.69107],
[42.25766,-78.69103],[42.25774,-78.691],[42.25777,-78.69098],[42.2578,-78.69095],[42.25782,-78.69092],[42.25786,-78.69089],[42.2579,-78.69087],[42.25794,-78.69084],[42.25798,-78.69083],[42.25809,-78.6908],
[42.25819,-78.69079],[42.25827,-78.69078],[42.25832,-78.69079],[42.25833,-78.69077],[42.25837,-78.69076],[42.25837,-78.69076],[42.25837,-78.69076],[42.25837,-78.69076],[42.25839,-78.69077],[42.25839,-78.6908],
[42.25842,-78.69078]
 ] }); GV_Draw_Track(t);

t =  438 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03HBP01 - 6.93 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.27461,-78.68529],[42.27426,-78.68361],[42.2742,-78.68219],[42.27431,-78.67967],[42.27437,-78.67812],[42.27395,-78.67542],[42.27641,-78.66963],[42.27879,-78.66733],[42.27974,-78.66651],[42.28076,-78.66554],
[42.28193,-78.66418],[42.28312,-78.66271],[42.28415,-78.66087],[42.28494,-78.65907],[42.28651,-78.65587],[42.28719,-78.65421],[42.28774,-78.6522],[42.28852,-78.64958],[42.28937,-78.64766],[42.29091,-78.64522],
[42.29165,-78.64402],[42.29248,-78.64328],[42.29468,-78.64199],[42.29616,-78.63997],[42.29731,-78.63824],[42.29892,-78.63628],[42.30052,-78.63398],[42.30175,-78.63232],[42.30333,-78.63021],[42.3063,-78.62703],
[42.3073,-78.62604],[42.30974,-78.62361],[42.31209,-78.62155],[42.31323,-78.61969],[42.31566,-78.6156],[42.31792,-78.61191],[42.3193,-78.60961],[42.32074,-78.60735],[42.32336,-78.60797],[42.32579,-78.60891],
[42.329,-78.60934],[42.33114,-78.60919],[42.33253,-78.60907],[42.33463,-78.61057],[42.3385,-78.61228],[42.34007,-78.61306],[42.34171,-78.61344],[42.34301,-78.61313]
 ] }); GV_Draw_Track(t);

t =  439 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03HBP04 - 2.45 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.27507,-78.6728],[42.27624,-78.67364],[42.27969,-78.67278],[42.28562,-78.67608],[42.2871,-78.6769],[42.28803,-78.67752],[42.28887,-78.67751],[42.28878,-78.67749],[42.28912,-78.67906],[42.28947,-78.67952],
[42.29265,-78.68772],[42.29342,-78.68882],[42.29443,-78.6916],[42.29529,-78.6925],[42.29621,-78.69363],[42.29724,-78.69579],[42.29818,-78.69834],[42.29901,-78.70142]
 ] }); GV_Draw_Track(t);

t =  440 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03HBP05 - 1.91 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.31148,-78.6669],[42.30444,-78.668],[42.30297,-78.66737],[42.30143,-78.66609],[42.29613,-78.66352],[42.2918,-78.66322],[42.2909,-78.66272],[42.28977,-78.66246],[42.28849,-78.66142],[42.28518,-78.6592]

 ] }); GV_Draw_Track(t);

t =  441 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03HBP06 - 2.24 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.30183,-78.63239],[42.30251,-78.63453],[42.3035,-78.63583],[42.30463,-78.63716],[42.30832,-78.63729],[42.31098,-78.6363],[42.31581,-78.63364],[42.31816,-78.63473],[42.3201,-78.63743],[42.32248,-78.63744],
[42.32492,-78.63614],[42.32677,-78.63586],[42.32744,-78.63641],[42.32895,-78.63744],[42.33003,-78.63811],[42.33037,-78.63826]
 ] }); GV_Draw_Track(t);

t =  442 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03TF - 22.56 miles (white blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M03\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M03.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.20424,-78.75319],[42.20421,-78.74206],[42.20412,-78.73973],[42.20422,-78.73529],[42.20461,-78.73474],[42.20489,-78.7346],[42.20522,-78.73468],[42.20636,-78.73584],[42.20698,-78.7368],[42.20769,-78.73723],
[42.2099,-78.73681],[42.21093,-78.73725],[42.21148,-78.73702],[42.21168,-78.73674],[42.21052,-78.73583],[42.20996,-78.73585],[42.20923,-78.73523],[42.20901,-78.73467],[42.20918,-78.73365],[42.20949,-78.73283],
[42.20912,-78.73217],[42.20892,-78.731],[42.20907,-78.73044],[42.20895,-78.73045],[42.20886,-78.73023],[42.20889,-78.72976],[42.20872,-78.72901],[42.20887,-78.72787],[42.20881,-78.7273],[42.20909,-78.72626],
[42.20906,-78.72604],[42.20922,-78.72559],[42.20899,-78.72506],[42.20907,-78.72482],[42.20881,-78.72406],[42.20847,-78.72381],[42.20804,-78.7225],[42.20802,-78.72213],[42.2084,-78.72031],[42.20826,-78.71862],
[42.20834,-78.71853],[42.20832,-78.7181],[42.20814,-78.7179],[42.20813,-78.71769],[42.20843,-78.71726],[42.20866,-78.71723],[42.20874,-78.7169],[42.2086,-78.71658],[42.20787,-78.71574],[42.20776,-78.71523],
[42.20786,-78.7152],[42.20768,-78.71458],[42.20775,-78.71413],[42.20767,-78.71346],[42.20793,-78.71255],[42.20809,-78.71255],[42.20858,-78.71148],[42.20879,-78.71139],[42.20901,-78.71097],[42.20902,-78.71136],
[42.20907,-78.70992],[42.20891,-78.70869],[42.20868,-78.708],[42.20846,-78.70788],[42.20818,-78.70743],[42.20784,-78.70714],[42.20719,-78.7074],[42.20705,-78.70723],[42.20707,-78.70663],[42.20737,-78.70644],
[42.20731,-78.70653],[42.20762,-78.7063],[42.20771,-78.70607],[42.20811,-78.70662],[42.20841,-78.7066],[42.20855,-78.70644],[42.20874,-78.70692],[42.20934,-78.70744],[42.2092,-78.7077],[42.20936,-78.70855],
[42.20955,-78.70886],[42.20944,-78.71003],[42.20971,-78.71018],[42.20981,-78.7107],[42.21012,-78.71142],[42.21018,-78.71111],[42.21035,-78.71142],[42.21069,-78.71129],[42.21087,-78.71181],[42.21174,-78.71231],
[42.21202,-78.71208],[42.21244,-78.71241],[42.21255,-78.71266],[42.21346,-78.71283],[42.21426,-78.71271],[42.21443,-78.71228],[42.2146,-78.71218],[42.2147,-78.71227],[42.21509,-78.71221],[42.21533,-78.71252],
[42.21586,-78.71207],[42.21593,-78.7118],[42.21638,-78.71141],[42.21715,-78.71148],[42.21772,-78.71118],[42.21789,-78.71126],[42.21804,-78.71115],[42.2181,-78.71079],[42.21839,-78.71062],[42.21851,-78.70948],
[42.2193,-78.70773],[42.21918,-78.70754],[42.21939,-78.70729],[42.21956,-78.70645],[42.21998,-78.70555],[42.22041,-78.70495],[42.22064,-78.70494],[42.22078,-78.70549],[42.22159,-78.70626],[42.22237,-78.70665],
[42.22241,-78.7059],[42.22233,-78.70519],[42.22257,-78.70199],[42.22247,-78.70137],[42.22261,-78.70092],[42.22256,-78.70009],[42.22235,-78.69947],[42.22239,-78.69926],[42.22273,-78.69894],[42.22321,-78.69884],
[42.22391,-78.69947],[42.2241,-78.69897],[42.22433,-78.69871],[42.22452,-78.69881],[42.2246,-78.69824],[42.22498,-78.69788],[42.22782,-78.69712],[42.2295,-78.69596],[42.2299,-78.69525],[42.23048,-78.69508],
[42.23065,-78.69514],[42.23094,-78.69476],[42.23217,-78.69436],[42.23248,-78.69349],[42.23247,-78.69283],[42.23311,-78.69245],[42.23335,-78.69256],[42.23437,-78.69375],[42.23473,-78.69448],[42.23495,-78.69442],
[42.23544,-78.6948],[42.23617,-78.69504],[42.23716,-78.69603],[42.2379,-78.69653],[42.23819,-78.69696],[42.23827,-78.69692],[42.24004,-78.69868],[42.2403,-78.69879],[42.24037,-78.69894],[42.24014,-78.69915],
[42.23959,-78.7001],[42.24021,-78.70064],[42.24075,-78.7009],[42.24164,-78.70228],[42.24225,-78.70252],[42.24281,-78.70229],[42.24325,-78.70183],[42.24411,-78.70195],[42.24525,-78.7011],[42.24542,-78.70111],
[42.24613,-78.70053],[42.24651,-78.7004],[42.24681,-78.70051],[42.24693,-78.70073],[42.24749,-78.70074],[42.24795,-78.70055],[42.2485,-78.70012],[42.24957,-78.69998],[42.24973,-78.70008],[42.24985,-78.70041],
[42.25014,-78.70051],[42.25095,-78.7001],[42.25136,-78.7002],[42.25208,-78.70009],[42.25318,-78.69898],[42.25344,-78.69819],[42.25365,-78.69801],[42.25402,-78.69691],[42.25511,-78.69618],[42.25547,-78.69579],
[42.25539,-78.69512],[42.25653,-78.69516],[42.25677,-78.69536],[42.25677,-78.6955],[42.25701,-78.69578],[42.25793,-78.69616],[42.25897,-78.69605],[42.25898,-78.69653],[42.25921,-78.69705],[42.26026,-78.69744] ] });
trk_segments[t].push({ points:[[42.26026,-78.69744],
[42.26057,-78.69743],[42.26079,-78.69703],[42.26136,-78.69666],[42.26178,-78.69654],[42.26202,-78.69673],[42.26302,-78.69637],[42.26371,-78.69633],[42.26481,-78.69528],[42.26456,-78.69501],[42.26468,-78.69435],
[42.26571,-78.69127],[42.26622,-78.69041],[42.26722,-78.68912],[42.2675,-78.68692],[42.26737,-78.68533],[42.2671,-78.68416],[42.26725,-78.68248],[42.26741,-78.68205],[42.26767,-78.68204],[42.26807,-78.6815],
[42.26861,-78.68116],[42.26937,-78.68095],[42.2694,-78.68114],[42.26905,-78.68153],[42.2687,-78.68249],[42.26896,-78.68318],[42.26959,-78.6838],[42.27053,-78.68443],[42.27175,-78.68552],[42.27189,-78.68577],
[42.27285,-78.68569],[42.27385,-78.6851],[42.2738,-78.68471],[42.2745,-78.68478],[42.27479,-78.6862],[42.27521,-78.68572],[42.27531,-78.68487],[42.27551,-78.68448],[42.27574,-78.6836],[42.27602,-78.68352],
[42.27631,-78.68374],[42.27705,-78.68353],[42.27743,-78.6837],[42.27755,-78.68404],[42.27744,-78.68439],[42.27798,-78.68478],[42.27912,-78.6862],[42.2797,-78.68729],[42.28018,-78.68781],[42.28131,-78.68724],
[42.28116,-78.68464],[42.28127,-78.68367],[42.28207,-78.68312],[42.2835,-78.68315],[42.28377,-78.68284],[42.2839,-78.6819],[42.28403,-78.68177],[42.28431,-78.68221],[42.28424,-78.68355],[42.28433,-78.68426],
[42.284,-78.68558],[42.28397,-78.68611],[42.28379,-78.68655],[42.28376,-78.68733],[42.28343,-78.6881],[42.2834,-78.68853],[42.28361,-78.6904],[42.28356,-78.69073],[42.28385,-78.69185],[42.28377,-78.69232],
[42.28407,-78.69311],[42.28424,-78.69319],[42.28426,-78.69342],[42.28398,-78.69399],[42.28398,-78.69438],[42.28446,-78.6951],[42.28504,-78.69538],[42.28556,-78.69619],[42.286,-78.6965],[42.28644,-78.69716],
[42.28647,-78.698],[42.28704,-78.69913],[42.2878,-78.70126],[42.28776,-78.70198],[42.289,-78.70287],[42.28956,-78.70295],[42.29017,-78.70336],[42.29094,-78.70319],[42.29113,-78.70302],[42.29161,-78.70302],
[42.29194,-78.7027],[42.29207,-78.70232],[42.29206,-78.70192],[42.29274,-78.70198],[42.29357,-78.70154],[42.29372,-78.70161],[42.2937,-78.70208],[42.29424,-78.70261],[42.29452,-78.7027],[42.29469,-78.70253],
[42.29539,-78.70292],[42.29575,-78.70334],[42.29611,-78.70414],[42.29686,-78.70496],[42.29721,-78.70498],[42.29737,-78.70487],[42.29744,-78.70461],[42.29736,-78.70382],[42.29774,-78.70292],[42.29777,-78.70249],
[42.29894,-78.70171],[42.29908,-78.70215],[42.29929,-78.70205],[42.29968,-78.7013],[42.29999,-78.70159],[42.30018,-78.70132],[42.30066,-78.69862],[42.30127,-78.69759],[42.30133,-78.69671],[42.30148,-78.69631],
[42.30126,-78.69603],[42.30166,-78.69487],[42.30154,-78.69451],[42.3016,-78.69415],[42.30224,-78.69356],[42.30303,-78.69337],[42.30357,-78.69292],[42.30559,-78.69276],[42.3063,-78.69205],[42.30677,-78.69118],
[42.30775,-78.68982],[42.30843,-78.68912],[42.30854,-78.68875],[42.30839,-78.68717],[42.30848,-78.68686],[42.30949,-78.68595],[42.31003,-78.68572],[42.31046,-78.68537],[42.31097,-78.68446],[42.31108,-78.68324],
[42.31108,-78.68167],[42.31094,-78.68143],[42.30901,-78.68138],[42.3087,-78.68126],[42.30885,-78.67936],[42.30953,-78.67924],[42.30959,-78.67717],[42.30949,-78.6768],[42.3095,-78.67563],[42.30885,-78.67512],
[42.30895,-78.67435],[42.30863,-78.67366],[42.30854,-78.67293],[42.30879,-78.67235],[42.30881,-78.6717],[42.30861,-78.6713],[42.30875,-78.67085],[42.31006,-78.67056],[42.31193,-78.67056],[42.31259,-78.67035],
[42.31283,-78.66999],[42.31242,-78.66991],[42.3127,-78.66962],[42.31238,-78.66942],[42.31259,-78.66925],[42.31187,-78.66929],[42.31158,-78.66916],[42.3124,-78.66872],[42.31255,-78.66852],[42.31253,-78.66835],
[42.312,-78.66841],[42.31207,-78.66832],[42.31194,-78.66832],[42.31208,-78.66824],[42.31179,-78.66819],[42.31182,-78.66804],[42.3117,-78.66805],[42.31236,-78.66745],[42.31238,-78.66716],[42.31226,-78.66697],
[42.31231,-78.6669],[42.31157,-78.66709],[42.31147,-78.66695],[42.31169,-78.66681],[42.31167,-78.66646],[42.31225,-78.66624],[42.31227,-78.66596],[42.31251,-78.66551],[42.3129,-78.66536],[42.31304,-78.66509],
[42.3128,-78.66491],[42.31286,-78.66439],[42.31407,-78.66262],[42.3147,-78.66226],[42.31555,-78.66141],[42.31571,-78.66105],[42.31582,-78.66017],[42.31572,-78.65957],[42.3158,-78.65809],[42.31607,-78.65744] ] });
trk_segments[t].push({ points:[[42.31607,-78.65744],
[42.31803,-78.65752],[42.31897,-78.65722],[42.32095,-78.65586],[42.32116,-78.65584],[42.32111,-78.65616],[42.32132,-78.65672],[42.32125,-78.65689],[42.32139,-78.65709],[42.32135,-78.6572],[42.3218,-78.65805],
[42.32238,-78.65687],[42.32303,-78.65623],[42.32453,-78.65407],[42.32521,-78.65259],[42.32715,-78.65072],[42.32797,-78.64907],[42.32861,-78.64894],[42.32904,-78.64863],[42.32932,-78.64861],[42.32947,-78.64819],
[42.32954,-78.64725],[42.33012,-78.64668],[42.33144,-78.646],[42.33298,-78.64412],[42.33301,-78.64347],[42.33282,-78.64301],[42.33251,-78.64268],[42.33239,-78.64166],[42.33245,-78.64124],[42.33232,-78.64098],
[42.33234,-78.6405],[42.33247,-78.64036],[42.33261,-78.63987],[42.33259,-78.63933],[42.33035,-78.63812],[42.33053,-78.63766],[42.33166,-78.63755],[42.3318,-78.63519],[42.33231,-78.63532],[42.33236,-78.63473],
[42.33205,-78.63383],[42.33199,-78.63296],[42.33183,-78.63263],[42.33175,-78.63162],[42.3319,-78.63083],[42.33177,-78.62945],[42.3319,-78.62858],[42.33164,-78.62802],[42.33156,-78.62736],[42.33139,-78.62704],
[42.33132,-78.62658],[42.33168,-78.62575],[42.33153,-78.62538],[42.33069,-78.6245],[42.33051,-78.62448],[42.329,-78.62293],[42.32907,-78.62188],[42.32871,-78.62172],[42.32892,-78.62061],[42.32955,-78.61999],
[42.32959,-78.61945],[42.33108,-78.61974],[42.33145,-78.61816],[42.33152,-78.61737],[42.33221,-78.6156],[42.33221,-78.6152],[42.33285,-78.61479],[42.33306,-78.61448],[42.33323,-78.61446],[42.33319,-78.61379],
[42.33342,-78.61377],[42.33363,-78.61355],[42.33384,-78.61268],[42.33458,-78.61275],[42.33497,-78.61305],[42.33574,-78.61315],[42.3358,-78.61301],[42.33608,-78.61317],[42.33696,-78.61313],[42.33726,-78.6134],
[42.33744,-78.61335],[42.3378,-78.61352],[42.33785,-78.61369],[42.33829,-78.6137],[42.33836,-78.61389],[42.33827,-78.61417],[42.33788,-78.61462],[42.33824,-78.61465],[42.33833,-78.61492],[42.33855,-78.61502],
[42.33881,-78.61536],[42.33889,-78.61507],[42.33914,-78.61481],[42.33939,-78.61491],[42.33985,-78.61444],[42.34076,-78.61406],[42.34193,-78.61402],[42.34248,-78.61359],[42.34263,-78.61331],[42.34301,-78.61308]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.20424,lon:-78.74342,color:'black',name:'M03TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 90 })
GV_Draw_Marker({lat:42.20523,lon:-78.73469,color:'black',name:'M03TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 323 })
GV_Draw_Marker({lat:42.21163,lon:-78.73682,color:'black',name:'M03TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 45 })
GV_Draw_Marker({lat:42.20888,lon:-78.72993,color:'black',name:'M03TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 86 })
GV_Draw_Marker({lat:42.20827,lon:-78.72097,color:'black',name:'M03TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 74 })
GV_Draw_Marker({lat:42.20791,lon:-78.71261,color:'black',name:'M03TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 69 })
GV_Draw_Marker({lat:42.20732,lon:-78.70647,color:'black',name:'M03TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 26 })
GV_Draw_Marker({lat:42.21075,lon:-78.71147,color:'black',name:'M03TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 296 })
GV_Draw_Marker({lat:42.21689,lon:-78.71146,color:'black',name:'M03TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 356 })
GV_Draw_Marker({lat:42.22074,lon:-78.70532,color:'black',name:'M03TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 289 })
GV_Draw_Marker({lat:42.22241,lon:-78.69965,color:'black',name:'M03TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 115 })
GV_Draw_Marker({lat:42.22825,lon:-78.69682,color:'black',name:'M03TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 27 })
GV_Draw_Marker({lat:42.23379,lon:-78.69308,color:'black',name:'M03TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 319 })
GV_Draw_Marker({lat:42.23963,lon:-78.69829,color:'black',name:'M03TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 323 })
GV_Draw_Marker({lat:42.24397,lon:-78.70193,color:'black',name:'M03TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 354 })
GV_Draw_Marker({lat:42.25051,lon:-78.70032,color:'black',name:'M03TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 21 })
GV_Draw_Marker({lat:42.25567,lon:-78.69513,color:'black',name:'M03TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 359 })
GV_Draw_Marker({lat:42.26181,lon:-78.69656,color:'black',name:'M03TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 330 })
GV_Draw_Marker({lat:42.26609,lon:-78.69064,color:'black',name:'M03TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 51 })
GV_Draw_Marker({lat:42.26769,lon:-78.68201,color:'black',name:'M03TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 45 })
GV_Draw_Marker({lat:42.27179,lon:-78.68559,color:'black',name:'M03TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 308 })
GV_Draw_Marker({lat:42.27639,lon:-78.68372,color:'black',name:'M03TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 12 })
GV_Draw_Marker({lat:42.28126,lon:-78.6864,color:'black',name:'M03TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 94 })
GV_Draw_Marker({lat:42.28428,lon:-78.68384,color:'black',name:'M03TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 280 })
GV_Draw_Marker({lat:42.2841,lon:-78.69312,color:'black',name:'M03TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 341 })
GV_Draw_Marker({lat:42.28757,lon:-78.70059,color:'black',name:'M03TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 296 })
GV_Draw_Marker({lat:42.29305,lon:-78.70182,color:'black',name:'M03TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 21 })
GV_Draw_Marker({lat:42.29774,lon:-78.70289,color:'black',name:'M03TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 85 })
GV_Draw_Marker({lat:42.30134,lon:-78.69666,color:'black',name:'M03TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 63 })
GV_Draw_Marker({lat:42.30631,lon:-78.69204,color:'black',name:'M03TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 54 })
GV_Draw_Marker({lat:42.31057,lon:-78.68517,color:'black',name:'M03TF - Mile  15.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 53 })
GV_Draw_Marker({lat:42.30946,lon:-78.67926,color:'black',name:'M03TF - Mile  16 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 7 })
GV_Draw_Marker({lat:42.30906,lon:-78.67078,color:'black',name:'M03TF - Mile  16.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 9 })
GV_Draw_Marker({lat:42.31243,lon:-78.66867,color:'black',name:'M03TF - Mile  17 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 43 })
GV_Draw_Marker({lat:42.31308,lon:-78.66408,color:'black',name:'M03TF - Mile  17.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 47 })
GV_Draw_Marker({lat:42.31703,lon:-78.65748,color:'black',name:'M03TF - Mile  18 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 358 })
GV_Draw_Marker({lat:42.3223,lon:-78.65701,color:'black',name:'M03TF - Mile  18.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 57 })
GV_Draw_Marker({lat:42.3274,lon:-78.65022,color:'black',name:'M03TF - Mile  19 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 56 })
GV_Draw_Marker({lat:42.33264,lon:-78.64453,color:'black',name:'M03TF - Mile  19.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 42 })
GV_Draw_Marker({lat:42.33061,lon:-78.63765,color:'black',name:'M03TF - Mile  20 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 4 })
GV_Draw_Marker({lat:42.33185,lon:-78.63022,color:'black',name:'M03TF - Mile  20.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 97 })
GV_Draw_Marker({lat:42.32902,lon:-78.62262,color:'black',name:'M03TF - Mile  21 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 85 })
GV_Draw_Marker({lat:42.33196,lon:-78.61623,color:'black',name:'M03TF - Mile  21.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 62 })
GV_Draw_Marker({lat:42.3372,lon:-78.61335,color:'black',name:'M03TF - Mile  22 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 326 })
GV_Draw_Marker({lat:42.34232,lon:-78.61371,color:'black',name:'M03TF - Mile  22.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 30 })

t =  443 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03X1HntClose - 3.28 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.27521,-78.68572],[42.27531,-78.68487],[42.27551,-78.68448],[42.27574,-78.6836],[42.27602,-78.68352],[42.27631,-78.68374],[42.27705,-78.68353],[42.27743,-78.6837],[42.27755,-78.68404],[42.27744,-78.68439],
[42.27798,-78.68478],[42.27912,-78.6862],[42.2797,-78.68729],[42.28018,-78.68781],[42.28131,-78.68724],[42.28116,-78.68464],[42.28127,-78.68367],[42.28207,-78.68312],[42.2835,-78.68315],[42.28377,-78.68284],
[42.2839,-78.6819],[42.28403,-78.68177],[42.28431,-78.68221],[42.28435,-78.68269],[42.28424,-78.68355],[42.28433,-78.68426],[42.284,-78.68558],[42.28397,-78.68611],[42.28379,-78.68655],[42.28376,-78.68733],
[42.28343,-78.6881],[42.2834,-78.68853],[42.28361,-78.6904],[42.28356,-78.69073],[42.28385,-78.69185],[42.28377,-78.69232],[42.28407,-78.69311],[42.28424,-78.69319],[42.28426,-78.69342],[42.28398,-78.69399],
[42.28398,-78.69438],[42.28446,-78.6951],[42.28504,-78.69538],[42.28556,-78.69619],[42.286,-78.6965],[42.28644,-78.69716],[42.28647,-78.698],[42.28704,-78.69913],[42.2878,-78.70126],[42.28776,-78.70198],
[42.289,-78.70287],[42.28956,-78.70295],[42.29017,-78.70336],[42.29094,-78.70319],[42.29113,-78.70302],[42.29161,-78.70302],[42.29194,-78.7027],[42.29207,-78.70232],[42.29206,-78.70192],[42.29274,-78.70198],
[42.29357,-78.70154],[42.29372,-78.70161],[42.2937,-78.70208],[42.29424,-78.70261],[42.29452,-78.7027],[42.29469,-78.70253],[42.29539,-78.70292],[42.29575,-78.70334],[42.29611,-78.70414],[42.29686,-78.70496],
[42.29721,-78.70498],[42.29737,-78.70487],[42.29744,-78.70461],[42.29736,-78.70382],[42.29774,-78.70292],[42.29777,-78.70249],[42.29894,-78.70171]
 ] }); GV_Draw_Track(t);

t =  444 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03X2HntClose - 1.42 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.3087,-78.68126],[42.30885,-78.67936],[42.30912,-78.67924],[42.30953,-78.67924],[42.30959,-78.67717],[42.30949,-78.6768],[42.30956,-78.67603],[42.3095,-78.67563],[42.30885,-78.67512],[42.30895,-78.67435],
[42.30863,-78.67366],[42.30854,-78.67293],[42.30879,-78.67235],[42.30881,-78.6717],[42.30861,-78.6713],[42.30875,-78.67085],[42.31006,-78.67056],[42.31193,-78.67056],[42.31259,-78.67035],[42.31283,-78.66999],
[42.31262,-78.66988],[42.31242,-78.66991],[42.3127,-78.66962],[42.31238,-78.66942],[42.31259,-78.66925],[42.31187,-78.66929],[42.31158,-78.66916],[42.31196,-78.66887],[42.3124,-78.66872],[42.31255,-78.66852],
[42.31253,-78.66835],[42.312,-78.66841],[42.31207,-78.66832],[42.31194,-78.66832],[42.31208,-78.66824],[42.31179,-78.66819],[42.31182,-78.66804],[42.3117,-78.66805],[42.31211,-78.66775],[42.31213,-78.66761],
[42.31236,-78.66745],[42.31232,-78.66724],[42.31238,-78.66716],[42.31226,-78.66697],[42.31231,-78.6669],[42.31204,-78.66688],[42.31157,-78.66709],[42.31147,-78.66695]
 ] }); GV_Draw_Track(t);

t =  445 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03X3HntClose - 1.17 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.31147,-78.66695],[42.31169,-78.66681],[42.31167,-78.66646],[42.31225,-78.66624],[42.31236,-78.6657],[42.31251,-78.66551],[42.3129,-78.66536],[42.31304,-78.66509],[42.313,-78.66497],[42.3128,-78.66491],
[42.31286,-78.66439],[42.31304,-78.66403],[42.31407,-78.66262],[42.3147,-78.66226],[42.31555,-78.66141],[42.31556,-78.66123],[42.31571,-78.66105],[42.31582,-78.66017],[42.31572,-78.65957],[42.3158,-78.65809],
[42.31607,-78.65744],[42.31655,-78.65751],[42.31691,-78.65744],[42.31803,-78.65752],[42.31897,-78.65722],[42.32095,-78.65586],[42.32116,-78.65584],[42.32111,-78.65616],[42.32132,-78.65672],[42.32125,-78.65689],
[42.32139,-78.65709],[42.32135,-78.6572],[42.32171,-78.65803],[42.3218,-78.65805]
 ] }); GV_Draw_Track(t);

t =  446 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03X4HntClose - 0.73 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.32797,-78.64907],[42.32861,-78.64894],[42.32904,-78.64863],[42.32932,-78.64861],[42.32947,-78.64819],[42.32944,-78.64785],[42.32954,-78.64725],[42.33012,-78.64668],[42.33144,-78.646],[42.33298,-78.64412],
[42.33301,-78.64347],[42.33282,-78.64301],[42.33251,-78.64268],[42.33239,-78.64166],[42.33245,-78.64124],[42.33232,-78.64098],[42.33234,-78.6405],[42.33247,-78.64036],[42.33261,-78.63987],[42.33259,-78.63933]

 ] }); GV_Draw_Track(t);

t =  447 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03X5HntClose - 1.02 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.33035,-78.63812],[42.33053,-78.63766],[42.33166,-78.63755],[42.3318,-78.63519],[42.33231,-78.63532],[42.33236,-78.63473],[42.33205,-78.63383],[42.33199,-78.63296],[42.33183,-78.63263],[42.33175,-78.63162],
[42.3319,-78.63083],[42.33177,-78.62945],[42.3319,-78.62858],[42.33164,-78.62802],[42.33156,-78.62736],[42.33139,-78.62704],[42.33132,-78.62658],[42.33168,-78.62575],[42.33153,-78.62538],[42.33069,-78.6245],
[42.33051,-78.62448],[42.329,-78.62293]
 ] }); GV_Draw_Track(t);

t =  448 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03X6HntClose - 1.58 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.329,-78.62293],[42.32907,-78.62188],[42.32871,-78.62172],[42.32892,-78.62061],[42.32919,-78.62044],[42.32955,-78.61999],[42.32959,-78.61945],[42.331,-78.6198],[42.33108,-78.61974],[42.33145,-78.61816],
[42.33142,-78.61793],[42.33152,-78.61737],[42.33221,-78.6156],[42.33221,-78.6152],[42.33285,-78.61479],[42.33306,-78.61448],[42.33323,-78.61446],[42.33319,-78.61379],[42.33342,-78.61377],[42.33363,-78.61355],
[42.33384,-78.61268],[42.33419,-78.6128],[42.33458,-78.61275],[42.33497,-78.61305],[42.33574,-78.61315],[42.3358,-78.61301],[42.33608,-78.61317],[42.33696,-78.61313],[42.33726,-78.6134],[42.33744,-78.61335],
[42.3378,-78.61352],[42.33785,-78.61369],[42.33829,-78.6137],[42.33836,-78.61389],[42.33827,-78.61417],[42.33788,-78.61462],[42.33824,-78.61465],[42.33833,-78.61492],[42.33855,-78.61502],[42.33881,-78.61536],
[42.33889,-78.61507],[42.33914,-78.61481],[42.33939,-78.61491],[42.33985,-78.61444],[42.34076,-78.61406],[42.34139,-78.61412],[42.34193,-78.61402],[42.34248,-78.61359],[42.34263,-78.61331],[42.34301,-78.61308]

 ] }); GV_Draw_Track(t);

t =  449 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M03 map coverage - 1.58 miles ( 12 )</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M03\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M03.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.35046,-78.60834],[42.35046,-78.75881],[42.1956,-78.75881],[42.1956,-78.60834],[42.35046,-78.60834]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.34305,lon:-78.61304,color:'',dd:true
,name:'Access 1: NY-240/Fancy Tract Rd',desc:'Good shoulder parking<br /><br />Location: <b>42.343, -78.613  or N42 20.5829 W78 36.7826</b><br /><br />This is <b>Map M4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.33781,lon:-78.55494,color:'',dd:true
,name:'Access 2: NY-242',desc:'Limited shoulder parking<br /><br />Location: <b>42.3378, -78.5549  or N42 20.2684 W78 33.2963</b><br /><br />This is <b>Map M4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.36776,lon:-78.45987,color:'',dd:true
,name:'Access 3: NY-16',desc:'Wide shoulder parking<br /><br />Location: <b>42.3678, -78.4599  or N42 22.0656 W78 27.5923</b><br /><br />This is <b>Map M4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.362,lon:-78.41777,color:'',dd:true
,name:'Access 4: Kingsbury Hill Rd',desc:'Shoulder parking<br /><br />Location: <b>42.362, -78.4178  or N42 21.72 W78 25.066</b><br /><br />This is <b>Map M4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.36067,lon:-78.47798,color:'',dd:true
,name:'Bear Creek Rd',desc:'Shoulder parking<br /><br />Location: <b>42.3607, -78.478  or N42 21.6404 W78 28.6789</b><br /><br />This is <b>Map M4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.32897,lon:-78.58164,color:''
,name:'<center><span style="text-align:center;font-size:14pt;">FLTC Loop Trail Map "CL"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Jan 1, 2012</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CL\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CL.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Loop Map "CL" shows the Cobb&rsquo;s Loop in Cattaraugus County at a larger scale than shown on map M4. <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticonLoop.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.29176,lon:-78.43515,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "M4 - Franklinville"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised May 1, 2016</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M04\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/M04.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map M4 shows the FLT Main/North Country Trail in Cattaraugus County from W Valley Rd (CR 32) to Kingsbury Hill Rd. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M4\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.33263,lon:-78.51989,color:'',dd:true
,name:'DEC truck trail',desc:'Shoulder parking<br /><br />Location: <b>42.3326, -78.5199  or N42 19.958 W78 31.1932</b><br /><br />This is <b>Map M4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.3378,lon:-78.58342,color:''
,name:'Fall hunting closure',desc:'Hunting Closure:  Nov15-Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M4\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3378, -78.5834  or N42 20.268 W78 35.0049</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.34839,lon:-78.59999,color:''
,name:'Fall Hunting Closure',desc:'Hunting Closure: Oct 01-Dec 25<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M4\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3484, -78.6  or N42 20.9035 W78 35.9992</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.33848,lon:-78.57803,color:''
,name:'Tent site',desc:'Picnic table, grill, fire ring<br /><br />Location: <b>42.3385, -78.578  or N42 20.3087 W78 34.6816</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.33266,lon:-78.52107,color:''
,name:'Tent site',desc:'E side of pond, fire ring<br /><br />Location: <b>42.3327, -78.5211  or N42 19.9595 W78 31.2642</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.33418,lon:-78.53292,color:''
,name:'M04 Boyce Hill S. F. Lean-to',desc:'Fire ring, picnic table, open air outhouse, bench, with nearby stream<br /><br />Location: <b>42.3342, -78.5329  or N42 20.051 W78 31.975</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.33418,lon:-78.57594,color:''
,name:'M04RelStream1',desc:'1710 ft<br /><br />Location: <b>42.3342, -78.5759  or N42 20.0505 W78 34.5566</b>',icon:'Water Source',scale: 1, folder:'Water'});
GV_Draw_Marker({lat:42.33603,lon:-78.53349,color:''
,name:'M04RelStream2',desc:'1920 ft<br /><br />Location: <b>42.336, -78.5335  or N42 20.1619 W78 32.0092</b>',icon:'Water Source',scale: 1, folder:'Water'});
GV_Draw_Marker({lat:42.33524,lon:-78.57552,color:''
,name:'M04Spring1',desc:'1780 ft<br /><br />Location: <b>42.3352, -78.5755  or N42 20.1146 W78 34.5313</b>',icon:'Water Source',scale: 1, folder:'Water'});
GV_Draw_Marker({lat:42.33169,lon:-78.57605,color:'',dd:true
,name:'NY-242',desc:'Parking area at kiosk for 4 vehicles<br /><br />Location: <b>42.3317, -78.576  or N42 19.9014 W78 34.5627</b><br /><br />This is <b>Map M4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.34844,lon:-78.58443,color:'',dd:true
,name:'S Canada Hill Rd',desc:'Shoulder parking<br /><br />Location: <b>42.3484, -78.5844  or N42 20.9066 W78 35.066</b><br /><br />This is <b>Map M4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.33346,lon:-78.49337,color:''
,name:'Triple R Campground',desc:'Highly recommended full facility campground with heated pool and wi-fi (716) 676-3856<br /><br />Location: <b>42.3335, -78.4934  or N42 20.0073 W78 29.602</b>',icon:'Campground',scale: 1, folder:'Camping'});

t =  450 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M04CobbTrails - 0.96 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.33336,-78.57636],[42.33338,-78.57642],[42.33338,-78.57658],[42.33348,-78.57664],[42.33353,-78.57683],[42.33356,-78.57704],[42.33367,-78.57725],[42.33376,-78.57739],[42.33393,-78.5776],[42.33407,-78.57768],
[42.33405,-78.57792],[42.33393,-78.57807],[42.33388,-78.57815],[42.33396,-78.57824],[42.3339,-78.57844],[42.33397,-78.57864],[42.33395,-78.57888],[42.334,-78.57905],[42.33399,-78.57928],[42.33399,-78.57952],
[42.33413,-78.57953],[42.33431,-78.57955],[42.33447,-78.57959],[42.33463,-78.57961],[42.33479,-78.57959],[42.33493,-78.57965],[42.33509,-78.57965],[42.33521,-78.57963],[42.33536,-78.57958],[42.33555,-78.57961],
[42.33573,-78.57964],[42.33589,-78.57967],[42.33605,-78.57965],[42.33615,-78.57962],[42.3362,-78.57962],[42.3363,-78.57958],[42.3364,-78.5795],[42.33646,-78.57945],[42.33647,-78.5794],[42.33657,-78.57933],
[42.33662,-78.57927],[42.3367,-78.57923],[42.33677,-78.57918],[42.33686,-78.57911],[42.33692,-78.57907],[42.33693,-78.57903],[42.33692,-78.57886],[42.33693,-78.57879],[42.33693,-78.57875],[42.33694,-78.57871],
[42.33693,-78.57865],[42.33692,-78.57859],[42.33691,-78.57853],[42.33692,-78.57848],[42.33691,-78.57844],[42.33693,-78.57837],[42.33695,-78.57831],[42.33698,-78.57826],[42.33699,-78.5782],[42.337,-78.57815],
[42.33702,-78.57809],[42.33703,-78.57805],[42.33703,-78.578],[42.33709,-78.57793],[42.33715,-78.57788],[42.3372,-78.5779],[42.33727,-78.57793],[42.33733,-78.57792],[42.33737,-78.57791],[42.33744,-78.57791],
[42.33748,-78.57792],[42.33752,-78.57791],[42.33756,-78.5779],[42.33761,-78.57788],[42.33766,-78.5779],[42.33771,-78.57791],[42.33775,-78.57792],[42.33784,-78.57793],[42.33787,-78.57792],[42.33794,-78.57793],
[42.33797,-78.57795],[42.338,-78.57795],[42.33804,-78.57796],[42.33809,-78.57797],[42.33813,-78.57797],[42.33818,-78.57798],[42.33822,-78.57799],[42.33827,-78.578],[42.3383,-78.578],[42.33834,-78.57799],
[42.33839,-78.57798],[42.33843,-78.57798],[42.33848,-78.578],[42.33853,-78.57799],[42.33855,-78.57798],[42.33858,-78.57794],[42.33863,-78.57792],[42.33869,-78.57788],[42.33873,-78.57784],[42.33876,-78.5778],
[42.33875,-78.57775],[42.33874,-78.57771],[42.33872,-78.57768],[42.3387,-78.57764],[42.3387,-78.57758],[42.33867,-78.57752],[42.33864,-78.5775],[42.33861,-78.57744],[42.33856,-78.57741],[42.33853,-78.57739],
[42.33848,-78.57734],[42.33845,-78.57734],[42.3384,-78.57738],[42.33833,-78.5774],[42.33828,-78.5774],[42.33822,-78.57742],[42.33816,-78.57745],[42.33809,-78.57745],[42.33804,-78.57745],[42.33799,-78.57746],
[42.33794,-78.57745],[42.33789,-78.57744],[42.33786,-78.57741],[42.3378,-78.5774],[42.33776,-78.5774],[42.3377,-78.57741],[42.33765,-78.57736],[42.33761,-78.57733],[42.33758,-78.57729],[42.33754,-78.57724],
[42.33751,-78.57721],[42.33749,-78.57714],[42.3375,-78.57706],[42.33751,-78.57702],[42.33753,-78.57697],[42.33757,-78.57695],[42.33761,-78.57695],[42.33765,-78.57699],[42.33768,-78.57702],[42.33772,-78.57704],
[42.33776,-78.57705],[42.33781,-78.57705],[42.33785,-78.57704],[42.33789,-78.57703],[42.33794,-78.577],[42.33798,-78.57699],[42.33801,-78.57698],[42.33804,-78.57694],[42.33805,-78.57688],[42.33805,-78.57683],
[42.33807,-78.57676],[42.33808,-78.5767],[42.33809,-78.57665],[42.33812,-78.57659],[42.33816,-78.57653],[42.33818,-78.57649],[42.33818,-78.57643],[42.33819,-78.57638],[42.3382,-78.57631],[42.3382,-78.57625],
[42.33819,-78.5762],[42.3382,-78.57615],[42.33819,-78.57608],[42.33818,-78.57601],[42.33818,-78.57597],[42.33819,-78.5759],[42.33816,-78.57585],[42.33818,-78.57579],[42.33819,-78.57573],[42.3382,-78.57566],
[42.33821,-78.57562],[42.3382,-78.57553],[42.3382,-78.57547],[42.33821,-78.57541],[42.33821,-78.57538],[42.33818,-78.57535],[42.33811,-78.57532],[42.33806,-78.5753],[42.338,-78.5753],[42.33797,-78.57529],
[42.33793,-78.57526],[42.33789,-78.57525],[42.33785,-78.57526],[42.33779,-78.57526],[42.33774,-78.57527],[42.3377,-78.57528],[42.33765,-78.5753],[42.33762,-78.57532],[42.33756,-78.57532],[42.33752,-78.57533],
[42.33746,-78.57534],[42.33741,-78.57537],[42.33737,-78.57538],[42.33732,-78.57537],[42.33727,-78.57537],[42.33723,-78.57538],[42.3372,-78.5754],[42.33714,-78.57539],[42.3371,-78.57539],[42.33705,-78.57541] ] });
trk_segments[t].push({ points:[[42.33705,-78.57541],
[42.33701,-78.57544],[42.33698,-78.57548],[42.33694,-78.57552],[42.3369,-78.57557],[42.33687,-78.57562],[42.33684,-78.57567],[42.3368,-78.57571],[42.33675,-78.57574],[42.3367,-78.57577],[42.33667,-78.57579],
[42.33662,-78.57582],[42.33655,-78.57585],[42.33651,-78.57588],[42.33645,-78.57593]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.33753,lon:-78.57791,color:'#00B0D8',name:'M04CobbTrails - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 8 })

t =  451 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M04HBP01 - 0.80 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.34476,-78.58433],[42.34474,-78.58505],[42.34473,-78.58608],[42.34469,-78.58715],[42.34464,-78.5888],[42.34459,-78.58987],[42.34459,-78.59063],[42.34458,-78.59213],[42.34453,-78.5935],[42.34453,-78.59413],
[42.34455,-78.59484],[42.34456,-78.59541],[42.34451,-78.59629],[42.34433,-78.59744],[42.34426,-78.59843],[42.34416,-78.59998]
 ] }); GV_Draw_Track(t);

t =  452 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M04HBP02 - 1.39 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.33167,-78.57568],[42.33181,-78.57778],[42.33186,-78.57843],[42.33189,-78.57898],[42.3319,-78.57941],[42.33187,-78.58037],[42.33174,-78.58205],[42.33163,-78.58311],[42.33157,-78.58348],[42.33133,-78.58457],
[42.33074,-78.58686],[42.33105,-78.58688],[42.33178,-78.58675],[42.33244,-78.58659],[42.33258,-78.58656],[42.3328,-78.58655],[42.33385,-78.58657],[42.33426,-78.5866],[42.33534,-78.5867],[42.33559,-78.58669],
[42.33578,-78.58662],[42.33628,-78.58634],[42.33683,-78.58604],[42.33733,-78.58583],[42.33775,-78.58572],[42.33864,-78.5856],[42.33926,-78.58553],[42.33966,-78.5855],[42.34002,-78.58544],[42.34027,-78.58541],
[42.34067,-78.58539],[42.341,-78.58534],[42.34125,-78.58526],[42.34152,-78.58514],[42.34172,-78.58502],[42.34196,-78.58485],[42.34214,-78.58474]
 ] }); GV_Draw_Track(t);

t =  453 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M04TF - 16.31 miles (white blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M04\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M04.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.34304,-78.61298],[42.34316,-78.61163],[42.3434,-78.61076],[42.34382,-78.60976],[42.34417,-78.60784],[42.34444,-78.60668],[42.34451,-78.60613],[42.34444,-78.60518],[42.3439,-78.60264],[42.3439,-78.60181],
[42.34416,-78.60015],[42.34437,-78.59986],[42.34492,-78.59968],[42.34541,-78.59978],[42.34582,-78.60004],[42.34633,-78.6002],[42.34645,-78.6001],[42.34686,-78.6],[42.34709,-78.60005],[42.3474,-78.59999],
[42.34753,-78.5999],[42.34868,-78.60001],[42.34891,-78.59995],[42.3492,-78.60009],[42.34949,-78.59994],[42.3497,-78.59972],[42.35001,-78.59962],[42.3501,-78.59951],[42.35011,-78.59936],[42.35033,-78.59894],
[42.35056,-78.59881],[42.35102,-78.59879],[42.35117,-78.59862],[42.35149,-78.59849],[42.3518,-78.59853],[42.35211,-78.59836],[42.35229,-78.59778],[42.35256,-78.59745],[42.35308,-78.59745],[42.3533,-78.59738],
[42.35342,-78.59724],[42.35357,-78.5972],[42.3537,-78.59685],[42.35398,-78.59692],[42.35426,-78.59671],[42.35432,-78.59656],[42.35429,-78.59625],[42.3541,-78.59615],[42.35372,-78.59627],[42.35354,-78.5962],
[42.35364,-78.59586],[42.35384,-78.59554],[42.35415,-78.59465],[42.35428,-78.59405],[42.35411,-78.59325],[42.35388,-78.59285],[42.35387,-78.59251],[42.35403,-78.59205],[42.35438,-78.59152],[42.35449,-78.5915],
[42.3545,-78.59137],[42.35442,-78.59121],[42.35447,-78.59099],[42.35435,-78.59059],[42.35425,-78.59051],[42.354,-78.58986],[42.35382,-78.5896],[42.35374,-78.58918],[42.35364,-78.58908],[42.35326,-78.58931],
[42.35301,-78.58933],[42.35293,-78.58913],[42.35248,-78.58883],[42.35211,-78.58879],[42.35191,-78.58867],[42.35195,-78.58846],[42.35189,-78.58827],[42.35197,-78.58785],[42.3517,-78.5875],[42.35141,-78.58743],
[42.35119,-78.58712],[42.35055,-78.58675],[42.35037,-78.58655],[42.35003,-78.58652],[42.34981,-78.58634],[42.34973,-78.58596],[42.34921,-78.58592],[42.34895,-78.58549],[42.34844,-78.58486],[42.34838,-78.58454],
[42.34844,-78.58442],[42.34691,-78.58427],[42.34541,-78.58433],[42.3444,-78.58423],[42.34322,-78.5843],[42.34277,-78.5844],[42.34209,-78.58473],[42.34204,-78.5846],[42.34164,-78.5846],[42.34144,-78.58451],
[42.3408,-78.58446],[42.34045,-78.58462],[42.34031,-78.58456],[42.33991,-78.58465],[42.33941,-78.58449],[42.33924,-78.58451],[42.33866,-78.58429],[42.33819,-78.5843],[42.3381,-78.58372],[42.33789,-78.5836],
[42.33785,-78.58346],[42.33728,-78.58334],[42.33692,-78.58274],[42.33681,-78.58268],[42.33669,-78.58246],[42.33643,-78.58227],[42.33605,-78.58135],[42.33602,-78.58109],[42.33607,-78.58098],[42.33609,-78.58036],
[42.33616,-78.58006],[42.33613,-78.57914],[42.33629,-78.57864],[42.33637,-78.5781],[42.33628,-78.57775],[42.33643,-78.57743],[42.3365,-78.5771],[42.33644,-78.57646],[42.33651,-78.576],[42.33638,-78.57583],
[42.33611,-78.57573],[42.33596,-78.57553],[42.33568,-78.57542],[42.33532,-78.57549],[42.33527,-78.57562],[42.3352,-78.5754],[42.33472,-78.57545],[42.33433,-78.57564],[42.33425,-78.57584],[42.3341,-78.57597],
[42.33389,-78.57575],[42.33377,-78.57579],[42.33356,-78.57565],[42.33349,-78.57546],[42.33323,-78.57541],[42.33326,-78.57567],[42.33343,-78.5761],[42.33343,-78.57633],[42.33318,-78.57625],[42.33305,-78.5765],
[42.33264,-78.57659],[42.33241,-78.57629],[42.33193,-78.57624],[42.3317,-78.57603],[42.33158,-78.57322],[42.33165,-78.57175],[42.33176,-78.571],[42.3324,-78.56856],[42.33456,-78.56202],[42.33496,-78.56096],
[42.33781,-78.55494],[42.33732,-78.55445],[42.3373,-78.55425],[42.33698,-78.55354],[42.33689,-78.55349],[42.33678,-78.55324],[42.33663,-78.55315],[42.33633,-78.552],[42.3364,-78.55132],[42.33624,-78.54964],
[42.33629,-78.54944],[42.33621,-78.54858],[42.33624,-78.54847],[42.33619,-78.54834],[42.3363,-78.54781],[42.33603,-78.54763],[42.33596,-78.54696],[42.33578,-78.54664],[42.3358,-78.54624],[42.33571,-78.54555],
[42.33561,-78.54535],[42.33548,-78.54454],[42.33552,-78.54443],[42.33539,-78.54383],[42.33536,-78.54305],[42.33515,-78.54286],[42.33479,-78.54275],[42.33463,-78.54246],[42.33466,-78.5418],[42.33443,-78.54129],
[42.33441,-78.54104],[42.33417,-78.54061],[42.33416,-78.54043],[42.33434,-78.54006],[42.33476,-78.53955],[42.33485,-78.53935],[42.33497,-78.53928],[42.33508,-78.53909],[42.33573,-78.53853],[42.33642,-78.53813] ] });
trk_segments[t].push({ points:[[42.33642,-78.53813],
[42.33652,-78.53798],[42.33658,-78.53728],[42.33653,-78.53699],[42.33641,-78.53672],[42.33628,-78.53593],[42.33632,-78.53544],[42.33656,-78.53483],[42.33657,-78.53433],[42.3365,-78.53404],[42.33653,-78.53393],
[42.33646,-78.53377],[42.3362,-78.53349],[42.33561,-78.53353],[42.33548,-78.53363],[42.33483,-78.53364],[42.33476,-78.53346],[42.33466,-78.53339],[42.33456,-78.53316],[42.33433,-78.53152],[42.33449,-78.52999],
[42.33447,-78.52922],[42.3344,-78.52879],[42.33439,-78.52797],[42.33431,-78.52774],[42.33431,-78.52756],[42.33405,-78.52662],[42.33401,-78.52628],[42.33381,-78.52568],[42.33376,-78.52528],[42.33358,-78.52483],
[42.33283,-78.52438],[42.332,-78.5236],[42.33199,-78.52299],[42.33191,-78.52273],[42.33192,-78.52253],[42.33212,-78.5224],[42.33283,-78.52146],[42.3328,-78.52129],[42.33264,-78.52106],[42.33269,-78.52065],
[42.33258,-78.52049],[42.33249,-78.51989],[42.33308,-78.51966],[42.33482,-78.51946],[42.33496,-78.51938],[42.33577,-78.51837],[42.33736,-78.51733],[42.33746,-78.51712],[42.3372,-78.5158],[42.33719,-78.51541],
[42.33983,-78.51231],[42.3394,-78.51161],[42.33927,-78.51121],[42.33949,-78.51094],[42.3394,-78.51051],[42.33935,-78.50981],[42.33946,-78.50921],[42.33937,-78.50866],[42.33925,-78.50843],[42.33919,-78.50756],
[42.33927,-78.50747],[42.33926,-78.50706],[42.33935,-78.50662],[42.33959,-78.50623],[42.33963,-78.50597],[42.33978,-78.50588],[42.33975,-78.50553],[42.33956,-78.50532],[42.33945,-78.50486],[42.33949,-78.50467],
[42.33945,-78.50462],[42.33947,-78.50441],[42.33942,-78.50431],[42.33951,-78.50413],[42.33974,-78.50396],[42.33965,-78.50375],[42.33976,-78.50356],[42.33989,-78.50359],[42.34006,-78.5035],[42.3402,-78.50316],
[42.34022,-78.50294],[42.34014,-78.50254],[42.34031,-78.50219],[42.34046,-78.50123],[42.34107,-78.501],[42.34121,-78.50083],[42.3412,-78.5004],[42.3411,-78.50002],[42.34126,-78.49975],[42.3412,-78.49955],
[42.34135,-78.49937],[42.34166,-78.49934],[42.34182,-78.49923],[42.34472,-78.49921],[42.3452,-78.49853],[42.346,-78.49855],[42.34622,-78.4984],[42.34647,-78.49788],[42.3465,-78.49768],[42.34668,-78.49733],
[42.34666,-78.49698],[42.34671,-78.49692],[42.34659,-78.4967],[42.34656,-78.49645],[42.34664,-78.49634],[42.34665,-78.49567],[42.34665,-78.49572],[42.34685,-78.49505],[42.34788,-78.49506],[42.34804,-78.49513],
[42.34996,-78.49512],[42.34994,-78.49515],[42.35083,-78.49512],[42.35083,-78.49443],[42.35077,-78.4943],[42.35074,-78.49346],[42.35095,-78.49291],[42.35106,-78.49229],[42.35105,-78.49173],[42.35098,-78.49141],
[42.35102,-78.49093],[42.3508,-78.48994],[42.35086,-78.48954],[42.35097,-78.4893],[42.3511,-78.48865],[42.35092,-78.4881],[42.35063,-78.48746],[42.35073,-78.48672],[42.35067,-78.4857],[42.35081,-78.48544],
[42.35086,-78.48509],[42.35083,-78.48492],[42.35072,-78.48473],[42.35073,-78.48441],[42.35083,-78.48423],[42.35079,-78.48411],[42.35085,-78.48361],[42.35082,-78.48315],[42.3511,-78.48289],[42.35139,-78.48221],
[42.35135,-78.48187],[42.3514,-78.48176],[42.35147,-78.48115],[42.35114,-78.48067],[42.35141,-78.48063],[42.3518,-78.48069],[42.35231,-78.48057],[42.35251,-78.4802],[42.35253,-78.47951],[42.35273,-78.47926],
[42.35313,-78.47917],[42.35361,-78.47941],[42.35425,-78.47938],[42.35437,-78.47946],[42.35471,-78.47949],[42.35494,-78.47936],[42.35556,-78.47943],[42.35573,-78.4793],[42.35597,-78.47887],[42.35617,-78.47872],
[42.35636,-78.47808],[42.35665,-78.47742],[42.35707,-78.47692],[42.35719,-78.47658],[42.35722,-78.47676],[42.35733,-78.47689],[42.35741,-78.47686],[42.35749,-78.47668],[42.35775,-78.47645],[42.35779,-78.47627],
[42.3579,-78.47637],[42.35794,-78.47619],[42.35801,-78.47618],[42.35803,-78.47628],[42.35828,-78.47596],[42.35869,-78.47574],[42.35915,-78.47605],[42.35932,-78.47591],[42.35944,-78.47592],[42.35959,-78.47608],
[42.35993,-78.47674],[42.35989,-78.47737],[42.35995,-78.47755],[42.36029,-78.47777],[42.36031,-78.47785],[42.36073,-78.47799],[42.3627,-78.47371],[42.3629,-78.47314],[42.36305,-78.47239],[42.36313,-78.46912],
[42.36295,-78.46719],[42.36294,-78.46641],[42.36306,-78.46466],[42.36324,-78.46429],[42.36352,-78.46403],[42.36621,-78.46239],[42.36658,-78.46203],[42.36764,-78.46018],[42.3678,-78.45981],[42.36726,-78.45673] ] });
trk_segments[t].push({ points:[[42.36726,-78.45673],
[42.366,-78.45273],[42.36579,-78.45223],[42.36513,-78.45157],[42.36327,-78.45093],[42.36323,-78.45035],[42.36327,-78.44953],[42.36322,-78.44911],[42.36326,-78.44889],[42.36331,-78.44602],[42.36354,-78.44573],
[42.36369,-78.44569],[42.36396,-78.44577],[42.36485,-78.44571],[42.36533,-78.44596],[42.36596,-78.446],[42.36617,-78.44574],[42.36658,-78.44565],[42.36653,-78.44568],[42.36649,-78.4453],[42.3665,-78.44399],
[42.36658,-78.44379],[42.36649,-78.44347],[42.36648,-78.44295],[42.36679,-78.44147],[42.36683,-78.44074],[42.36695,-78.44032],[42.36696,-78.43961],[42.36685,-78.43921],[42.3667,-78.43916],[42.36664,-78.43906],
[42.36662,-78.43882],[42.36609,-78.43854],[42.36598,-78.43856],[42.36583,-78.43876],[42.36551,-78.43886],[42.3653,-78.43877],[42.36486,-78.43879],[42.36392,-78.43865],[42.36385,-78.4387],[42.36367,-78.43863],
[42.36332,-78.4387],[42.3632,-78.43867],[42.36273,-78.4388],[42.36243,-78.43872],[42.36238,-78.43862],[42.36218,-78.43851],[42.36162,-78.43787],[42.36161,-78.43721],[42.36169,-78.43698],[42.36159,-78.43621],
[42.36087,-78.43623],[42.36065,-78.43604],[42.36033,-78.43592],[42.36,-78.43568],[42.35987,-78.43568],[42.35917,-78.43522],[42.35875,-78.43483],[42.35788,-78.43463],[42.35759,-78.43445],[42.35734,-78.43413],
[42.35691,-78.43392],[42.35668,-78.4337],[42.35653,-78.43365],[42.35603,-78.43324],[42.35594,-78.43307],[42.35643,-78.43278],[42.35716,-78.43267],[42.35796,-78.43153],[42.35806,-78.43113],[42.35839,-78.43078],
[42.35849,-78.43029],[42.35843,-78.42989],[42.35828,-78.42972],[42.35814,-78.4297],[42.3578,-78.42849],[42.35819,-78.42765],[42.35818,-78.42747],[42.35838,-78.4271],[42.35834,-78.42702],[42.35849,-78.42696],
[42.35892,-78.42634],[42.35899,-78.42588],[42.35908,-78.42581],[42.36069,-78.42596],[42.36102,-78.42589],[42.36157,-78.42544],[42.36209,-78.42479],[42.36223,-78.4247],[42.36281,-78.424],[42.36302,-78.42276],
[42.363,-78.42235],[42.36304,-78.4223],[42.36305,-78.42159],[42.3631,-78.42146],[42.36304,-78.42049],[42.36309,-78.41957],[42.36289,-78.41897],[42.36258,-78.41858],[42.36235,-78.41814],[42.36206,-78.41781]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.34411,lon:-78.6036,color:'black',name:'M04TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 106 })
GV_Draw_Marker({lat:42.34857,lon:-78.6,color:'black',name:'M04TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 356 })
GV_Draw_Marker({lat:42.35423,lon:-78.59622,color:'black',name:'M04TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 159 })
GV_Draw_Marker({lat:42.35327,lon:-78.58931,color:'black',name:'M04TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 204 })
GV_Draw_Marker({lat:42.34814,lon:-78.58439,color:'black',name:'M04TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 176 })
GV_Draw_Marker({lat:42.34103,lon:-78.58448,color:'black',name:'M04TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 176 })
GV_Draw_Marker({lat:42.33616,lon:-78.58002,color:'black',name:'M04TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 92 })
GV_Draw_Marker({lat:42.33328,lon:-78.57573,color:'black',name:'M04TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 298 })
GV_Draw_Marker({lat:42.3321,lon:-78.56967,color:'black',name:'M04TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 71 })
GV_Draw_Marker({lat:42.33506,lon:-78.56075,color:'black',name:'M04TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 57 })
GV_Draw_Marker({lat:42.33653,lon:-78.55277,color:'black',name:'M04TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 109 })
GV_Draw_Marker({lat:42.33538,lon:-78.54355,color:'black',name:'M04TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 93 })
GV_Draw_Marker({lat:42.33634,lon:-78.5363,color:'black',name:'M04TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 102 })
GV_Draw_Marker({lat:42.33444,lon:-78.52904,color:'black',name:'M04TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 103 })
GV_Draw_Marker({lat:42.33281,lon:-78.52132,color:'black',name:'M04TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 101 })
GV_Draw_Marker({lat:42.33734,lon:-78.51648,color:'black',name:'M04TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 105 })
GV_Draw_Marker({lat:42.33939,lon:-78.50876,color:'black',name:'M04TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 102 })
GV_Draw_Marker({lat:42.34105,lon:-78.50101,color:'black',name:'M04TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 15 })
GV_Draw_Marker({lat:42.34653,lon:-78.49762,color:'black',name:'M04TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 53 })
GV_Draw_Marker({lat:42.35075,lon:-78.49374,color:'black',name:'M04TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 93 })
GV_Draw_Marker({lat:42.35073,lon:-78.48448,color:'black',name:'M04TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 87 })
GV_Draw_Marker({lat:42.35437,lon:-78.47946,color:'black',name:'M04TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 333 })
GV_Draw_Marker({lat:42.35965,lon:-78.47619,color:'black',name:'M04TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 305 })
GV_Draw_Marker({lat:42.36307,lon:-78.47173,color:'black',name:'M04TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 88 })
GV_Draw_Marker({lat:42.36473,lon:-78.46331,color:'black',name:'M04TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 24 })
GV_Draw_Marker({lat:42.36696,lon:-78.45577,color:'black',name:'M04TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 113 })
GV_Draw_Marker({lat:42.36327,lon:-78.44875,color:'black',name:'M04TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 89 })
GV_Draw_Marker({lat:42.36649,lon:-78.44346,color:'black',name:'M04TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 92 })
GV_Draw_Marker({lat:42.36319,lon:-78.43867,color:'black',name:'M04TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 192 })
GV_Draw_Marker({lat:42.3577,lon:-78.43452,color:'black',name:'M04TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 156 })
GV_Draw_Marker({lat:42.3578,lon:-78.42848,color:'black',name:'M04TF - Mile  15.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 58 })
GV_Draw_Marker({lat:42.36293,lon:-78.42332,color:'black',name:'M04TF - Mile  16 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 77 })

t =  454 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M04X02HntClose - 0.60 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.34416,-78.60015],[42.34437,-78.59986],[42.34492,-78.59968],[42.34541,-78.59978],[42.34582,-78.60004],[42.34606,-78.6001],[42.34622,-78.60021],[42.34633,-78.6002],[42.34645,-78.6001],[42.34686,-78.6],
[42.34709,-78.60005],[42.3474,-78.59999],[42.34753,-78.5999],[42.3479,-78.59989],[42.34812,-78.59997],[42.34868,-78.60001],[42.34891,-78.59995],[42.34907,-78.60007],[42.3492,-78.60009],[42.34949,-78.59994],
[42.3497,-78.59972],[42.35001,-78.59962],[42.3501,-78.59951],[42.35011,-78.59936],[42.35033,-78.59894],[42.35056,-78.59881],[42.35102,-78.59879],[42.35117,-78.59862],[42.35149,-78.59849],[42.3518,-78.59853],
[42.35211,-78.59836]
 ] }); GV_Draw_Track(t);

t =  455 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M04X1HntClose - 1.24 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.34204,-78.5846],[42.34164,-78.5846],[42.34144,-78.58451],[42.34101,-78.58452],[42.3408,-78.58446],[42.34045,-78.58462],[42.34031,-78.58456],[42.33991,-78.58465],[42.33952,-78.58457],[42.33941,-78.58449],
[42.33924,-78.58451],[42.33866,-78.58429],[42.33819,-78.5843],[42.33815,-78.58386],[42.3381,-78.58372],[42.33789,-78.5836],[42.33785,-78.58346],[42.33728,-78.58334],[42.337,-78.58294],[42.33692,-78.58274],
[42.33681,-78.58268],[42.33669,-78.58246],[42.33643,-78.58227],[42.33605,-78.58135],[42.33602,-78.58109],[42.33607,-78.58098],[42.33609,-78.58036],[42.33616,-78.58006],[42.33617,-78.57938],[42.33613,-78.57914],
[42.33629,-78.57864],[42.33637,-78.5781],[42.33628,-78.57775],[42.33643,-78.57743],[42.3365,-78.5771],[42.33644,-78.57646],[42.33651,-78.576],[42.33638,-78.57583],[42.33611,-78.57573],[42.33596,-78.57553],
[42.33568,-78.57542],[42.33532,-78.57549],[42.33527,-78.57562],[42.3352,-78.5754],[42.33472,-78.57545],[42.33433,-78.57564],[42.33425,-78.57584],[42.3341,-78.57597],[42.33389,-78.57575],[42.33377,-78.57579],
[42.33356,-78.57565],[42.33349,-78.57546],[42.33323,-78.57541],[42.33326,-78.57567],[42.33343,-78.5761],[42.33343,-78.57633],[42.33318,-78.57625],[42.33305,-78.5765],[42.33264,-78.57659],[42.33241,-78.57629],
[42.33193,-78.57624],[42.3317,-78.57603]
 ] }); GV_Draw_Track(t);

t =  456 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M04 map coverage - 1.24 miles ( 12 )</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M04\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M04.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.38095,-78.41015],[42.38095,-78.62182],[42.27176,-78.62182],[42.27176,-78.41015],[42.38095,-78.41015]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.36201,lon:-78.41776,color:'',dd:true
,name:'Access 1: Kingsbury Hill Rd',desc:'Shoulder parking<br /><br />Location: <b>42.362, -78.4178  or N42 21.7204 W78 25.0658</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.37527,lon:-78.37269,color:'',dd:true
,name:'Access 2: Peet Hill Rd',desc:'Shoulder parking<br /><br />Location: <b>42.3753, -78.3727  or N42 22.5162 W78 22.3613</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.39095,lon:-78.32476,color:'',dd:true
,name:'Access 3: W Branch Rd',desc:'Off road parking<br /><br />Location: <b>42.391, -78.3248  or N42 23.4571 W78 19.4858</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.42386,lon:-78.32484,color:'',dd:true
,name:'Access 4:  Huyck Rd',desc:'Wide shoulder parking<br /><br />Location: <b>42.4239, -78.3248  or N42 25.4315 W78 19.4902</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.46657,lon:-78.23446,color:'',dd:true
,name:'Access 6: Handcock Rd',desc:'Shoulder parking<br /><br />Location: <b>42.4666, -78.2345  or N42 27.9939 W78 14.0678</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.45397,lon:-78.40828,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "M5 - Farmersville"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Oct 24, 2017</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M05\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/M05.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map M5 shows the FLT Main/North Country Trail in Cattaraugus-Allegany  counties from Kingsbury Hill Rd to Hancock Rd. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M5\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.41463,lon:-78.32287,color:'',dd:true
,name:'Hess Rd',desc:'Shoulder parking<br /><br />Location: <b>42.4146, -78.3229  or N42 24.8778 W78 19.372</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.37524,lon:-78.37218,color:''
,name:'Tent site',desc:'Fire ring, parking, cistern<br /><br />Location: <b>42.3752, -78.3722  or N42 22.5145 W78 22.331</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.3955,lon:-78.32385,color:''
,name:'Tent site',desc:'Seasonal water to E<br /><br />Location: <b>42.3955, -78.3238  or N42 23.7301 W78 19.4309</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.37525,lon:-78.37142,color:''
,name:'M05Cistern1',desc:'CCC cistern-treat water<br /><br />Location: <b>42.3753, -78.3714  or N42 22.5152 W78 22.2853</b>',icon:'Water Source',scale: 1, folder:'Water'});
GV_Draw_Marker({lat:42.45834,lon:-78.24961,color:'',dd:true
,name:'Rushford Rd',desc:'Large DEC parking lot<br /><br />Location: <b>42.4583, -78.2496  or N42 27.5006 W78 14.9768</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.38182,lon:-78.33811,color:'',dd:true
,name:'Stebbins Rd-North',desc:'Shoulder parking<br /><br />Location: <b>42.3818, -78.3381  or N42 22.9092 W78 20.2868</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.37469,lon:-78.33824,color:'',dd:true
,name:'Stebbins Rd-South',desc:'Shoulder parking<br /><br />Location: <b>42.3747, -78.3382  or N42 22.4817 W78 20.2945</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.46528,lon:-78.23878,color:'',dd:true
,name:'Swift Hill Rd',desc:'Shoulder parking<br /><br />Location: <b>42.4653, -78.2388  or N42 27.9171 W78 14.3266</b><br /><br />This is <b>Map M5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  457 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M05TF - 17.23 miles (white blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M05\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M05.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.36204,-78.4177],[42.36217,-78.41734],[42.36261,-78.41644],[42.36319,-78.41552],[42.36333,-78.41538],[42.36339,-78.41526],[42.36519,-78.41295],[42.3666,-78.41098],[42.37289,-78.40107],[42.37306,-78.40089],
[42.37341,-78.40073],[42.37393,-78.39945],[42.37649,-78.39506],[42.37638,-78.39515],[42.3762,-78.39515],[42.37615,-78.39521],[42.37568,-78.39523],[42.37484,-78.39465],[42.37472,-78.39472],[42.37461,-78.39489],
[42.37436,-78.39559],[42.37425,-78.39579],[42.3738,-78.39554],[42.3733,-78.39504],[42.37318,-78.39525],[42.3731,-78.39573],[42.37297,-78.39607],[42.37283,-78.3962],[42.3727,-78.39625],[42.37256,-78.39642],
[42.37239,-78.39646],[42.37204,-78.39707],[42.37183,-78.39714],[42.37167,-78.39703],[42.37163,-78.39692],[42.37137,-78.39677],[42.37135,-78.3966],[42.37129,-78.39655],[42.37117,-78.39667],[42.37089,-78.39672],
[42.37063,-78.3965],[42.37056,-78.39629],[42.3706,-78.39611],[42.37057,-78.39603],[42.37039,-78.3959],[42.37028,-78.39593],[42.37021,-78.39601],[42.36993,-78.39601],[42.36978,-78.39607],[42.3692,-78.39612],
[42.3684,-78.39603],[42.36822,-78.3959],[42.36816,-78.39574],[42.36817,-78.39552],[42.36809,-78.39518],[42.36819,-78.39507],[42.36823,-78.39481],[42.36818,-78.39456],[42.36826,-78.39399],[42.36822,-78.39279],
[42.36847,-78.39242],[42.36858,-78.39214],[42.3688,-78.39194],[42.36883,-78.39175],[42.36905,-78.39161],[42.36911,-78.39152],[42.36948,-78.39137],[42.36967,-78.39124],[42.36972,-78.39108],[42.36971,-78.39091],
[42.36984,-78.3907],[42.36992,-78.39005],[42.37006,-78.38984],[42.37016,-78.38957],[42.37036,-78.38932],[42.37038,-78.38921],[42.37049,-78.38905],[42.37054,-78.38874],[42.37067,-78.38844],[42.37077,-78.38801],
[42.37104,-78.38783],[42.37105,-78.38739],[42.37097,-78.38728],[42.37097,-78.38714],[42.37118,-78.38676],[42.37142,-78.38654],[42.37165,-78.38621],[42.37172,-78.38591],[42.37183,-78.38564],[42.37185,-78.38547],
[42.37176,-78.38476],[42.3718,-78.38442],[42.37206,-78.38375],[42.37211,-78.38338],[42.37222,-78.38304],[42.37221,-78.38274],[42.37212,-78.38241],[42.37214,-78.38223],[42.3723,-78.38207],[42.37255,-78.38149],
[42.37288,-78.3814],[42.37314,-78.38143],[42.37326,-78.38137],[42.37348,-78.38145],[42.37361,-78.38137],[42.37369,-78.38122],[42.37375,-78.38091],[42.37381,-78.38079],[42.374,-78.38067],[42.37435,-78.3809],
[42.37466,-78.3808],[42.37479,-78.38065],[42.37486,-78.38036],[42.37498,-78.38016],[42.375,-78.37977],[42.37512,-78.37898],[42.37511,-78.37887],[42.37517,-78.37848],[42.37516,-78.3782],[42.37524,-78.37742],
[42.37517,-78.3774],[42.37489,-78.3769],[42.37473,-78.37644],[42.37467,-78.37612],[42.37458,-78.37587],[42.37461,-78.37573],[42.37475,-78.37564],[42.37503,-78.37501],[42.37522,-78.37477],[42.37527,-78.37457],
[42.37522,-78.37394],[42.37534,-78.37297],[42.37525,-78.37278],[42.37529,-78.37257],[42.37527,-78.37242],[42.37519,-78.37233],[42.37511,-78.37183],[42.37516,-78.37154],[42.37512,-78.37131],[42.37515,-78.37117],
[42.37539,-78.371],[42.37552,-78.37097],[42.37573,-78.37043],[42.3759,-78.36932],[42.37594,-78.36876],[42.37587,-78.36791],[42.37593,-78.36753],[42.37592,-78.36739],[42.37609,-78.36673],[42.37639,-78.3659],
[42.37631,-78.3653],[42.37645,-78.36447],[42.37635,-78.36393],[42.37638,-78.36301],[42.37647,-78.36228],[42.37642,-78.36151],[42.37637,-78.36141],[42.37613,-78.36137],[42.37567,-78.3615],[42.37555,-78.36159],
[42.37535,-78.36162],[42.37522,-78.36169],[42.37477,-78.36173],[42.37473,-78.36164],[42.37439,-78.36153],[42.37401,-78.36104],[42.37365,-78.36047],[42.37354,-78.36013],[42.37346,-78.35968],[42.37353,-78.35936],
[42.37344,-78.35882],[42.37321,-78.3585],[42.3731,-78.35826],[42.37308,-78.35809],[42.37299,-78.35796],[42.37283,-78.35732],[42.37268,-78.35705],[42.37248,-78.35688],[42.37241,-78.35674],[42.37239,-78.35647],
[42.37234,-78.35627],[42.37232,-78.35592],[42.37238,-78.35546],[42.37236,-78.35522],[42.37226,-78.35503],[42.37226,-78.3548],[42.37233,-78.3547],[42.37228,-78.35425],[42.37201,-78.35278],[42.37192,-78.35268],
[42.37185,-78.35231],[42.37194,-78.35211],[42.37189,-78.35182],[42.37195,-78.35165],[42.37177,-78.35146],[42.37151,-78.35096],[42.37138,-78.3501],[42.37121,-78.3499],[42.37118,-78.34974],[42.37103,-78.34956] ] });
trk_segments[t].push({ points:[[42.37103,-78.34956],
[42.37103,-78.3493],[42.37089,-78.34882],[42.37083,-78.34872],[42.37089,-78.3486],[42.37082,-78.34832],[42.37111,-78.34778],[42.37115,-78.34764],[42.37146,-78.34737],[42.37152,-78.34717],[42.37172,-78.34683],
[42.372,-78.34656],[42.37238,-78.34646],[42.37249,-78.34635],[42.3726,-78.34613],[42.37286,-78.34586],[42.37346,-78.34541],[42.37364,-78.34539],[42.37371,-78.34517],[42.37391,-78.34499],[42.37402,-78.34472],
[42.37403,-78.34428],[42.37407,-78.34383],[42.37408,-78.34341],[42.37423,-78.34335],[42.37425,-78.34318],[42.37407,-78.34292],[42.37407,-78.34287],[42.37419,-78.34276],[42.37416,-78.34253],[42.37418,-78.34223],
[42.37406,-78.3418],[42.37407,-78.34132],[42.37398,-78.34098],[42.37396,-78.34062],[42.37403,-78.34037],[42.37398,-78.34025],[42.37401,-78.34019],[42.37395,-78.33999],[42.37395,-78.33963],[42.37405,-78.33949],
[42.37416,-78.33911],[42.37424,-78.33908],[42.37422,-78.33898],[42.37461,-78.33853],[42.37464,-78.33832],[42.37485,-78.33822],[42.37523,-78.33815],[42.37527,-78.33807],[42.3753,-78.33706],[42.37537,-78.33699],
[42.37541,-78.33656],[42.37537,-78.33602],[42.37544,-78.3359],[42.37564,-78.33572],[42.37616,-78.33613],[42.37632,-78.3362],[42.37632,-78.33646],[42.37654,-78.33666],[42.37671,-78.33691],[42.37663,-78.33738],
[42.37669,-78.33767],[42.37671,-78.33808],[42.37935,-78.33807],[42.37951,-78.33785],[42.37956,-78.33761],[42.37975,-78.33717],[42.38019,-78.33704],[42.38041,-78.33689],[42.38076,-78.33684],[42.38086,-78.33688],
[42.38101,-78.3371],[42.38118,-78.33725],[42.38133,-78.33759],[42.38153,-78.33781],[42.3818,-78.338],[42.38184,-78.33813],[42.3849,-78.33814],[42.38729,-78.33809],[42.39139,-78.33811],[42.39146,-78.33805],
[42.3915,-78.33793],[42.39172,-78.33523],[42.3918,-78.33366],[42.39181,-78.33223],[42.39197,-78.32932],[42.39198,-78.32859],[42.39191,-78.32757],[42.39173,-78.32669],[42.39157,-78.32629],[42.39115,-78.32542],
[42.39096,-78.32478],[42.3912,-78.32466],[42.39129,-78.32455],[42.3914,-78.32453],[42.39164,-78.32438],[42.39196,-78.32446],[42.39235,-78.32471],[42.39244,-78.32471],[42.39248,-78.32476],[42.39249,-78.32487],
[42.39274,-78.32491],[42.39306,-78.32481],[42.39317,-78.32465],[42.39332,-78.32457],[42.39339,-78.32446],[42.39372,-78.32435],[42.39466,-78.32435],[42.39496,-78.3243],[42.39513,-78.32418],[42.39538,-78.32408],
[42.39564,-78.32384],[42.39639,-78.3239],[42.39653,-78.32382],[42.39677,-78.32356],[42.39708,-78.32361],[42.39758,-78.32345],[42.39786,-78.32317],[42.39815,-78.32308],[42.39852,-78.32311],[42.39884,-78.32307],
[42.39967,-78.32316],[42.40023,-78.32317],[42.40041,-78.3231],[42.40096,-78.32316],[42.40105,-78.32324],[42.40114,-78.32346],[42.40119,-78.32392],[42.40135,-78.32409],[42.40152,-78.32462],[42.40159,-78.32494],
[42.40157,-78.32516],[42.4016,-78.32563],[42.40177,-78.32591],[42.40191,-78.32599],[42.40199,-78.32596],[42.40218,-78.32549],[42.40231,-78.32497],[42.40231,-78.32452],[42.40222,-78.32421],[42.40224,-78.32371],
[42.40238,-78.3233],[42.40262,-78.32329],[42.40309,-78.3234],[42.40311,-78.32346],[42.40335,-78.32339],[42.40337,-78.32331],[42.40346,-78.32329],[42.40365,-78.32315],[42.40369,-78.32303],[42.40381,-78.32295],
[42.40408,-78.3229],[42.40461,-78.3227],[42.4048,-78.32269],[42.40533,-78.32279],[42.40593,-78.3226],[42.40653,-78.32253],[42.40681,-78.32228],[42.40701,-78.32217],[42.40739,-78.32218],[42.40767,-78.32145],
[42.40792,-78.32115],[42.40807,-78.32107],[42.40836,-78.32116],[42.40866,-78.32096],[42.40892,-78.3209],[42.40909,-78.32078],[42.40924,-78.32074],[42.40932,-78.32078],[42.40958,-78.32069],[42.41021,-78.32069],
[42.4103,-78.32076],[42.41103,-78.32059],[42.41161,-78.32082],[42.41172,-78.32094],[42.41175,-78.32105],[42.41198,-78.32143],[42.41221,-78.32153],[42.41273,-78.32148],[42.41285,-78.3216],[42.4132,-78.32179],
[42.41327,-78.32187],[42.41327,-78.32205],[42.41335,-78.32236],[42.41352,-78.32258],[42.41357,-78.32275],[42.4137,-78.32284],[42.41399,-78.32279],[42.41475,-78.32287],[42.41493,-78.32299],[42.41495,-78.32305],
[42.41509,-78.32308],[42.4152,-78.32317],[42.41532,-78.32315],[42.41579,-78.32352],[42.41594,-78.32379],[42.41637,-78.32408],[42.41659,-78.32397],[42.41669,-78.32377],[42.41691,-78.32358],[42.41719,-78.32351] ] });
trk_segments[t].push({ points:[[42.41719,-78.32351],
[42.41742,-78.32334],[42.41765,-78.32334],[42.41793,-78.32317],[42.41821,-78.32318],[42.41833,-78.32331],[42.41857,-78.32334],[42.41867,-78.32341],[42.41895,-78.32339],[42.41914,-78.32321],[42.41964,-78.32312],
[42.41974,-78.32314],[42.42005,-78.32308],[42.42046,-78.32309],[42.42059,-78.32305],[42.42182,-78.32308],[42.42201,-78.32313],[42.42225,-78.32336],[42.42243,-78.32375],[42.42257,-78.32394],[42.42264,-78.32414],
[42.42288,-78.32451],[42.42294,-78.32473],[42.42305,-78.32479],[42.42326,-78.32476],[42.42359,-78.32478],[42.42375,-78.32476],[42.42385,-78.32479],[42.43249,-78.31348],[42.44436,-78.29823],[42.44751,-78.294],
[42.44756,-78.29386],[42.44733,-78.27707],[42.44705,-78.24992],[42.44711,-78.24987],[42.45254,-78.24989],[42.45812,-78.24981],[42.45817,-78.24912],[42.45812,-78.24872],[42.45813,-78.24846],[42.45808,-78.24831],
[42.45811,-78.24722],[42.45864,-78.24692],[42.45883,-78.24696],[42.45906,-78.2468],[42.45922,-78.24658],[42.45941,-78.24653],[42.45959,-78.24639],[42.4598,-78.24633],[42.4603,-78.24605],[42.46037,-78.24591],
[42.46036,-78.24569],[42.46042,-78.24546],[42.4604,-78.24535],[42.4605,-78.24515],[42.4605,-78.2451],[42.46058,-78.24496],[42.46063,-78.24467],[42.46071,-78.24454],[42.46074,-78.24434],[42.46112,-78.24388],
[42.46135,-78.24377],[42.46158,-78.2436],[42.46171,-78.2436],[42.46205,-78.24336],[42.46204,-78.2433],[42.46216,-78.24313],[42.46225,-78.24307],[42.46232,-78.24291],[42.46229,-78.24269],[42.46236,-78.24219],
[42.46249,-78.24205],[42.46272,-78.24152],[42.46302,-78.24127],[42.46321,-78.24101],[42.46342,-78.24054],[42.46363,-78.24035],[42.46383,-78.24024],[42.46401,-78.24024],[42.46417,-78.24007],[42.46421,-78.23997],
[42.46445,-78.23973],[42.46457,-78.23974],[42.46466,-78.23969],[42.46505,-78.23972],[42.46518,-78.23932],[42.46522,-78.23881],[42.46526,-78.23879],[42.46525,-78.23795],[42.46529,-78.23771],[42.46548,-78.23763],
[42.46567,-78.23763],[42.46598,-78.23744],[42.46618,-78.2374],[42.46629,-78.23727],[42.46634,-78.23696],[42.46642,-78.23574],[42.4665,-78.23542],[42.46653,-78.23497],[42.46661,-78.23482],[42.46656,-78.23446]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.3669,lon:-78.41051,color:'black',name:'M05TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 49 })
GV_Draw_Marker({lat:42.37165,lon:-78.40312,color:'black',name:'M05TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 49 })
GV_Draw_Marker({lat:42.37615,lon:-78.3956,color:'black',name:'M05TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 52 })
GV_Draw_Marker({lat:42.37144,lon:-78.39681,color:'black',name:'M05TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 157 })
GV_Draw_Marker({lat:42.36885,lon:-78.39174,color:'black',name:'M05TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 25 })
GV_Draw_Marker({lat:42.37199,lon:-78.38393,color:'black',name:'M05TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 63 })
GV_Draw_Marker({lat:42.37516,lon:-78.37739,color:'black',name:'M05TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 127 })
GV_Draw_Marker({lat:42.37594,lon:-78.36873,color:'black',name:'M05TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 96 })
GV_Draw_Marker({lat:42.37476,lon:-78.36171,color:'black',name:'M05TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 117 })
GV_Draw_Marker({lat:42.37212,lon:-78.35338,color:'black',name:'M05TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 104 })
GV_Draw_Marker({lat:42.37299,lon:-78.34575,color:'black',name:'M05TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 29 })
GV_Draw_Marker({lat:42.37513,lon:-78.33816,color:'black',name:'M05TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 8 })
GV_Draw_Marker({lat:42.37947,lon:-78.33791,color:'black',name:'M05TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 47 })
GV_Draw_Marker({lat:42.38592,lon:-78.33812,color:'black',name:'M05TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 1 })
GV_Draw_Marker({lat:42.39167,lon:-78.3358,color:'black',name:'M05TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 84 })
GV_Draw_Marker({lat:42.3915,lon:-78.32613,color:'black',name:'M05TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 123 })
GV_Draw_Marker({lat:42.39661,lon:-78.32374,color:'black',name:'M05TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 38 })
GV_Draw_Marker({lat:42.40209,lon:-78.32572,color:'black',name:'M05TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 61 })
GV_Draw_Marker({lat:42.40741,lon:-78.32213,color:'black',name:'M05TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 62 })
GV_Draw_Marker({lat:42.41346,lon:-78.32251,color:'black',name:'M05TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 316 })
GV_Draw_Marker({lat:42.42,lon:-78.32309,color:'black',name:'M05TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 9 })
GV_Draw_Marker({lat:42.42584,lon:-78.32219,color:'black',name:'M05TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 44 })
GV_Draw_Marker({lat:42.43104,lon:-78.31538,color:'black',name:'M05TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 44 })
GV_Draw_Marker({lat:42.43631,lon:-78.30866,color:'black',name:'M05TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 43 })
GV_Draw_Marker({lat:42.4416,lon:-78.30197,color:'black',name:'M05TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 43 })
GV_Draw_Marker({lat:42.44672,lon:-78.29504,color:'black',name:'M05TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 45 })
GV_Draw_Marker({lat:42.44746,lon:-78.2857,color:'black',name:'M05TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 91 })
GV_Draw_Marker({lat:42.44732,lon:-78.27589,color:'black',name:'M05TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 91 })
GV_Draw_Marker({lat:42.44719,lon:-78.26609,color:'black',name:'M05TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 91 })
GV_Draw_Marker({lat:42.44706,lon:-78.25628,color:'black',name:'M05TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 91 })
GV_Draw_Marker({lat:42.44958,lon:-78.24987,color:'black',name:'M05TF - Mile  15.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 0 })
GV_Draw_Marker({lat:42.45682,lon:-78.24979,color:'black',name:'M05TF - Mile  16 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 1 })
GV_Draw_Marker({lat:42.46089,lon:-78.24416,color:'black',name:'M05TF - Mile  16.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 42 })
GV_Draw_Marker({lat:42.46526,lon:-78.23788,color:'black',name:'M05TF - Mile  17 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 77 })

t =  458 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M05 map coverage - 17.23 miles ( 12 )</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M05\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M05.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.46897,-78.21612],[42.46897,-78.42828],[42.35866,-78.42828],[42.35866,-78.21612],[42.46897,-78.21612]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.46657,lon:-78.23447,color:'',dd:true
,name:'Access 1: Handcock Rd',desc:'Shoulder parking<br /><br />Location: <b>42.4666, -78.2345  or N42 27.994 W78 14.068</b><br /><br />This is <b>Map M6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.47515,lon:-78.21559,color:'',dd:true
,name:'Access 2: Higgins Creek Rd',desc:'Shoulder parking<br /><br />Location: <b>42.4752, -78.2156  or N42 28.5093 W78 12.9356</b><br /><br />This is <b>Map M6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.4809,lon:-78.15176,color:'',dd:true
,name:'Access 3: CR-3 (Buffalo Rd)',desc:'Good shoulder parking<br /><br />Location: <b>42.4809, -78.1518  or N42 28.8537 W78 9.1056</b><br /><br />This is <b>Map M6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.5009,lon:-78.13967,color:'',dd:true
,name:'Access 4: Rice Rd',desc:'Shoulder parking<br /><br />Location: <b>42.5009, -78.1397  or N42 30.0542 W78 8.3803</b><br /><br />This is <b>Map M6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.52506,lon:-78.11881,color:'',dd:true
,name:'Access 5: Camp Rd',desc:'Shoulder parking<br /><br />Location: <b>42.5251, -78.1188  or N42 31.5039 W78 7.1288</b><br /><br />This is <b>Map M6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.55693,lon:-78.2271,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "M6 - Higgins"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Oct 31, 2018</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M06\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/M06.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map M6 shows the FLT Main/North Country Trail in Allegany-Wyoming counties from Hancock Rd to NY 19A & River Rd. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M6\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.55483,lon:-78.05293,color:'',dd:true
,name:'M6 AP 6, M7 AP 1, L2 AP M',desc:'Good shoulder parking<br /><br />Location: <b>42.5548, -78.0529  or N42 33.2899 W78 3.1759</b><br /><br />This is <b>Map M6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.50606,lon:-78.13023,color:''
,name:'Fall Hunting Closure',desc:'<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#M6\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.5061, -78.1302  or N42 30.3635 W78 7.8136</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.53132,lon:-78.11965,color:''
,name:'M06Water',desc:'Camp Sam Wood potable water<br /><br />Location: <b>42.5313, -78.1196  or N42 31.8792 W78 7.1789</b>',icon:'Drinking Water',scale: 2, folder:'Water'});
GV_Draw_Marker({lat:42.48467,lon:-78.14414,color:'',dd:true
,name:'NY19',desc:'Wide shoulder parking for 2 vehicles<br /><br />Location: <b>42.4847, -78.1441  or N42 29.0805 W78 8.6484</b><br /><br />This is <b>Map M6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.49964,lon:-78.13191,color:'',dd:true
,name:'Pond Rd',desc:'Shoulder parking<br /><br />Location: <b>42.4996, -78.1319  or N42 29.9783 W78 7.9147</b><br /><br />This is <b>Map M6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.52369,lon:-78.1218,color:''
,name:'LeanTo at BSA Camp Sam Wood',desc:'Murky pond, outhouse<br /><br />Location: <b>42.5237, -78.1218  or N42 31.4214 W78 7.3079</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.46646,lon:-78.19786,color:''
,name:'Sixtown tent site',desc:'Picnic table, piped spring<br /><br />Location: <b>42.4665, -78.1979  or N42 27.9877 W78 11.8714</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.53033,lon:-78.08897,color:'',dd:true
,name:'Wiscoy Rd (CR-29)',desc:'Shoulder parking<br /><br />Location: <b>42.5303, -78.089  or N42 31.8197 W78 5.3381</b><br /><br />This is <b>Map M6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  459 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M06ChTreeSpur - 0.08 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.47051,-78.19251],[42.47047,-78.19251],[42.47041,-78.19252],[42.47037,-78.19258],[42.47032,-78.1926],[42.47026,-78.19264],[42.47019,-78.19263],[42.47014,-78.19266],[42.47008,-78.1927],[42.47001,-78.19278],
[42.46992,-78.1929],[42.46987,-78.19294],[42.46982,-78.19296],[42.46979,-78.19301],[42.46973,-78.19302],[42.4696,-78.19301],[42.46955,-78.19298]
 ] }); GV_Draw_Track(t);

t =  460 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M06HBP01 - 4.75 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.48458,-78.14427],[42.4853,-78.14477],[42.4876,-78.14721],[42.48826,-78.1476],[42.48886,-78.14764],[42.49104,-78.14674],[42.49211,-78.14628],[42.49297,-78.14601],[42.49374,-78.14605],[42.49406,-78.14614],
[42.49491,-78.14657],[42.49631,-78.14738],[42.49754,-78.14804],[42.49826,-78.14829],[42.50001,-78.14838],[42.50224,-78.14829],[42.50109,-78.14571],[42.501,-78.14523],[42.50091,-78.14224],[42.5009,-78.13965],
[42.50087,-78.13462],[42.50087,-78.13328],[42.4998,-78.1333],[42.49963,-78.13193],[42.49936,-78.12987],[42.4989,-78.12765],[42.49852,-78.12683],[42.49847,-78.12602],[42.49868,-78.12485],[42.49915,-78.12318],
[42.50001,-78.12176],[42.50053,-78.1206],[42.50078,-78.1203],[42.50117,-78.12001],[42.50142,-78.11984],[42.50182,-78.11987],[42.50208,-78.12014],[42.5033,-78.12186],[42.50358,-78.12224],[42.50464,-78.12357],
[42.5049,-78.12378],[42.50538,-78.12396],[42.50577,-78.124],[42.50624,-78.1239],[42.50647,-78.12378],[42.50787,-78.12261],[42.50963,-78.12114],[42.51153,-78.1195],[42.51233,-78.11881],[42.51289,-78.1185],
[42.51371,-78.11838],[42.51645,-78.11834],[42.51803,-78.11833],[42.52118,-78.1182],[42.52134,-78.1182],[42.52134,-78.11816],[42.52142,-78.11825],[42.52191,-78.11825],[42.52281,-78.11812],[42.5234,-78.11802],
[42.52396,-78.11811],[42.52469,-78.11872],[42.52506,-78.11881]
 ] }); GV_Draw_Track(t);

t =  461 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M06SmWdLeanTo - 0.07 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.52465,-78.12172],[42.52461,-78.12171],[42.52456,-78.1217],[42.52451,-78.12169],[42.52447,-78.12169],[42.52442,-78.12169],[42.52438,-78.12165],[42.52434,-78.12164],[42.52431,-78.12168],[42.52427,-78.12173],
[42.52421,-78.12174],[42.52415,-78.12174],[42.52407,-78.12173],[42.52402,-78.12172],[42.52399,-78.12172],[42.52392,-78.12172],[42.52388,-78.12176],[42.52383,-78.12177],[42.52378,-78.12177],[42.5237,-78.12178]

 ] }); GV_Draw_Track(t);

t =  462 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M06TF - 17.61 miles (white blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M06\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M06.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.46656,-78.23444],[42.46727,-78.2345],[42.46731,-78.23362],[42.46716,-78.23241],[42.46703,-78.23054],[42.46752,-78.22992],[42.46761,-78.22924],[42.46747,-78.22909],[42.46758,-78.22821],[42.46872,-78.22672],
[42.46872,-78.22657],[42.46883,-78.22638],[42.46938,-78.22619],[42.46964,-78.22636],[42.47012,-78.22647],[42.47019,-78.22642],[42.46986,-78.22539],[42.4697,-78.22456],[42.46979,-78.22389],[42.46972,-78.22147],
[42.46976,-78.22121],[42.46968,-78.22091],[42.46974,-78.22021],[42.46967,-78.2177],[42.46951,-78.21631],[42.46954,-78.21623],[42.46981,-78.21631],[42.46997,-78.21623],[42.47024,-78.21622],[42.47029,-78.21614],
[42.47091,-78.21586],[42.47136,-78.21586],[42.4715,-78.2156],[42.47166,-78.21546],[42.47193,-78.21541],[42.47238,-78.21548],[42.47253,-78.21519],[42.4726,-78.21518],[42.4729,-78.21554],[42.47306,-78.21562],
[42.47323,-78.21586],[42.47337,-78.21634],[42.47382,-78.2162],[42.47402,-78.21652],[42.47416,-78.21654],[42.47513,-78.21559],[42.47238,-78.21129],[42.47175,-78.21022],[42.47079,-78.20794],[42.46949,-78.20519],
[42.46941,-78.20494],[42.46949,-78.20446],[42.46947,-78.2043],[42.46963,-78.20429],[42.46987,-78.204],[42.47,-78.20334],[42.46992,-78.20238],[42.46938,-78.20085],[42.46898,-78.20061],[42.46891,-78.20051],
[42.46897,-78.19987],[42.46963,-78.19919],[42.46954,-78.19836],[42.46951,-78.19696],[42.46956,-78.19653],[42.46957,-78.19522],[42.46946,-78.19477],[42.46955,-78.19447],[42.46954,-78.19397],[42.46946,-78.19365],
[42.46955,-78.19313],[42.46946,-78.19237],[42.46952,-78.19213],[42.46931,-78.19131],[42.46934,-78.19119],[42.4695,-78.19102],[42.47038,-78.19071],[42.4707,-78.19079],[42.47088,-78.19093],[42.47152,-78.19085],
[42.47174,-78.19093],[42.47197,-78.19087],[42.47206,-78.19065],[42.47237,-78.19062],[42.47255,-78.19032],[42.47293,-78.1902],[42.47324,-78.18967],[42.47336,-78.18927],[42.47335,-78.18905],[42.47343,-78.18893],
[42.47348,-78.18817],[42.47328,-78.18774],[42.4736,-78.18724],[42.47387,-78.18716],[42.474,-78.18703],[42.47412,-78.18651],[42.4743,-78.18604],[42.47443,-78.18595],[42.47456,-78.18524],[42.47454,-78.18459],
[42.47362,-78.18445],[42.4732,-78.18431],[42.47315,-78.18354],[42.4732,-78.18334],[42.47341,-78.18313],[42.47351,-78.18265],[42.47335,-78.1821],[42.47338,-78.18179],[42.47342,-78.18179],[42.47341,-78.18148],
[42.47348,-78.18124],[42.47359,-78.18115],[42.47396,-78.18055],[42.47388,-78.18035],[42.47386,-78.18004],[42.47399,-78.17989],[42.47409,-78.17957],[42.4745,-78.17908],[42.4754,-78.17855],[42.47571,-78.17819],
[42.47567,-78.17807],[42.47588,-78.17773],[42.47624,-78.17767],[42.47635,-78.17783],[42.47644,-78.17833],[42.47681,-78.17809],[42.47691,-78.17784],[42.47684,-78.17735],[42.47696,-78.17696],[42.4769,-78.17637],
[42.47664,-78.17555],[42.47668,-78.17534],[42.47692,-78.17493],[42.47703,-78.17489],[42.47736,-78.17515],[42.47755,-78.17557],[42.4779,-78.17593],[42.4784,-78.17598],[42.47867,-78.1763],[42.47868,-78.17638],
[42.47859,-78.1765],[42.47852,-78.17721],[42.47868,-78.17748],[42.47881,-78.17819],[42.47911,-78.17869],[42.47922,-78.17878],[42.47966,-78.17889],[42.47981,-78.17779],[42.47979,-78.17652],[42.4795,-78.17459],
[42.47944,-78.17358],[42.47941,-78.16704],[42.47933,-78.16499],[42.47935,-78.16461],[42.47982,-78.16202],[42.48005,-78.15837],[42.47999,-78.15748],[42.47942,-78.1555],[42.47943,-78.15485],[42.47956,-78.15421],
[42.47972,-78.15384],[42.4809,-78.15185],[42.4813,-78.15133],[42.48175,-78.15056],[42.48207,-78.14965],[42.48213,-78.14918],[42.48204,-78.14859],[42.48182,-78.14797],[42.48182,-78.14766],[42.48192,-78.14707],
[42.48265,-78.14471],[42.48282,-78.14437],[42.48305,-78.14343],[42.48314,-78.14334],[42.48452,-78.14427],[42.48465,-78.14422],[42.48463,-78.14401],[42.48473,-78.14387],[42.48537,-78.14371],[42.48565,-78.14352],
[42.48582,-78.14292],[42.4861,-78.14282],[42.4864,-78.1431],[42.48664,-78.14316],[42.48678,-78.14335],[42.48697,-78.14383],[42.48791,-78.14409],[42.48831,-78.14412],[42.48906,-78.14385],[42.48925,-78.14358],
[42.48942,-78.14346],[42.49006,-78.14244],[42.49029,-78.14221],[42.49079,-78.14202],[42.49083,-78.14192],[42.49168,-78.14127],[42.49187,-78.14121],[42.49211,-78.14036],[42.49232,-78.14036],[42.493,-78.14017] ] });
trk_segments[t].push({ points:[[42.493,-78.14017],
[42.49311,-78.1403],[42.49416,-78.14027],[42.49515,-78.14004],[42.49549,-78.14044],[42.49569,-78.14048],[42.49581,-78.14065],[42.49632,-78.14069],[42.49671,-78.14062],[42.49705,-78.14067],[42.49754,-78.14059],
[42.49789,-78.14062],[42.49791,-78.14053],[42.49787,-78.14043],[42.49786,-78.13946],[42.49913,-78.13946],[42.50088,-78.13964],[42.50092,-78.13941],[42.50092,-78.13373],[42.50085,-78.13333],[42.50078,-78.13328],
[42.50008,-78.13331],[42.49989,-78.13325],[42.49981,-78.13304],[42.49968,-78.1319],[42.50019,-78.1315],[42.5003,-78.13119],[42.50053,-78.13088],[42.50051,-78.13076],[42.5006,-78.13058],[42.50058,-78.12998],
[42.50063,-78.12981],[42.50091,-78.12958],[42.50095,-78.12893],[42.50122,-78.12817],[42.50164,-78.12789],[42.50173,-78.12792],[42.50204,-78.1278],[42.50236,-78.12718],[42.50257,-78.12702],[42.50353,-78.127],
[42.50373,-78.12712],[42.50421,-78.12716],[42.50436,-78.12743],[42.50449,-78.12749],[42.50461,-78.12797],[42.50449,-78.12854],[42.50456,-78.12894],[42.50457,-78.12937],[42.50467,-78.12995],[42.50485,-78.13014],
[42.50489,-78.13061],[42.50482,-78.13086],[42.50497,-78.13104],[42.50497,-78.13139],[42.50538,-78.13142],[42.50562,-78.13161],[42.50567,-78.13191],[42.506,-78.13213],[42.50619,-78.13199],[42.50663,-78.13196],
[42.50707,-78.13262],[42.50759,-78.13289],[42.5079,-78.13272],[42.50813,-78.13274],[42.50834,-78.13289],[42.5087,-78.13284],[42.50875,-78.13253],[42.50898,-78.13212],[42.50896,-78.13162],[42.50875,-78.13076],
[42.50878,-78.13008],[42.50887,-78.12963],[42.50905,-78.12915],[42.50949,-78.12856],[42.50978,-78.1284],[42.50983,-78.12845],[42.51041,-78.12837],[42.51057,-78.12847],[42.51068,-78.12834],[42.51101,-78.12835],
[42.51112,-78.1283],[42.5114,-78.12864],[42.51161,-78.12869],[42.51184,-78.1286],[42.51191,-78.1283],[42.51187,-78.12807],[42.5119,-78.12756],[42.51197,-78.12748],[42.5134,-78.12706],[42.51389,-78.12702],
[42.51391,-78.12696],[42.51432,-78.127],[42.51459,-78.1269],[42.5147,-78.12653],[42.51482,-78.12561],[42.51478,-78.1251],[42.51457,-78.12458],[42.51466,-78.12446],[42.51485,-78.12442],[42.51497,-78.1245],
[42.51549,-78.12447],[42.51566,-78.12463],[42.51571,-78.12509],[42.51603,-78.12579],[42.51678,-78.1265],[42.51741,-78.12644],[42.51817,-78.12603],[42.51836,-78.12611],[42.51864,-78.12602],[42.5188,-78.12608],
[42.51898,-78.12603],[42.51918,-78.12609],[42.51921,-78.12603],[42.51954,-78.12607],[42.51973,-78.12588],[42.51989,-78.12552],[42.52019,-78.12518],[42.5204,-78.12467],[42.52063,-78.12437],[42.5212,-78.12466],
[42.5216,-78.12455],[42.52172,-78.12439],[42.52208,-78.12422],[42.52217,-78.12424],[42.52236,-78.12403],[42.52299,-78.12379],[42.52322,-78.12384],[42.52371,-78.12371],[42.5239,-78.12352],[42.52395,-78.12327],
[42.52453,-78.12224],[42.52468,-78.12163],[42.52482,-78.12137],[42.52496,-78.12129],[42.52499,-78.12115],[42.52484,-78.11973],[42.525,-78.11884],[42.52516,-78.11875],[42.52511,-78.11864],[42.52513,-78.11839],
[42.52492,-78.11805],[42.52492,-78.11767],[42.52484,-78.1172],[42.52489,-78.11677],[42.52513,-78.116],[42.52535,-78.11571],[42.52559,-78.1151],[42.52561,-78.11487],[42.52573,-78.11447],[42.52599,-78.11416],
[42.52617,-78.11369],[42.52614,-78.11264],[42.5263,-78.11211],[42.5264,-78.11197],[42.52666,-78.11094],[42.52684,-78.11058],[42.5269,-78.11015],[42.52727,-78.10896],[42.52722,-78.10767],[42.52733,-78.1069],
[42.52724,-78.10655],[42.52748,-78.1062],[42.53043,-78.10425],[42.53095,-78.10414],[42.53501,-78.10413],[42.53564,-78.10406],[42.53576,-78.10386],[42.5358,-78.1032],[42.53578,-78.09726],[42.53569,-78.09523],
[42.53576,-78.0927],[42.53569,-78.08914],[42.53563,-78.089],[42.53034,-78.08891],[42.53028,-78.0888],[42.53026,-78.08709],[42.53038,-78.08644],[42.53038,-78.08499],[42.53025,-78.08294],[42.53022,-78.08137],
[42.53034,-78.07939],[42.53018,-78.07872],[42.53023,-78.07851],[42.53038,-78.07832],[42.53048,-78.07796],[42.53079,-78.0776],[42.53095,-78.0772],[42.5312,-78.07622],[42.53178,-78.07576],[42.53205,-78.07568],
[42.53223,-78.07576],[42.53245,-78.07572],[42.53279,-78.07626],[42.53333,-78.07625],[42.53337,-78.07615],[42.53358,-78.07622],[42.53382,-78.07611],[42.53395,-78.07621],[42.53413,-78.07592],[42.53432,-78.07606] ] });
trk_segments[t].push({ points:[[42.53432,-78.07606],
[42.53444,-78.07625],[42.53466,-78.07613],[42.53493,-78.0763],[42.53515,-78.07623],[42.53559,-78.07634],[42.5358,-78.07662],[42.5364,-78.07696],[42.53652,-78.0769],[42.53691,-78.07693],[42.53711,-78.07677],
[42.53739,-78.07683],[42.53749,-78.07667],[42.5379,-78.07648],[42.53801,-78.07593],[42.53781,-78.07553],[42.53778,-78.07517],[42.53772,-78.07506],[42.53768,-78.07467],[42.53772,-78.07423],[42.53789,-78.07397],
[42.53811,-78.07382],[42.53843,-78.0738],[42.53885,-78.07405],[42.53917,-78.07407],[42.53941,-78.074],[42.53963,-78.07373],[42.53972,-78.07377],[42.53969,-78.07395],[42.54014,-78.07426],[42.54035,-78.07416],
[42.54073,-78.07422],[42.54097,-78.07433],[42.54145,-78.07428],[42.54173,-78.07436],[42.542,-78.07432],[42.54227,-78.0741],[42.54282,-78.07395],[42.54299,-78.07365],[42.54309,-78.07361],[42.54309,-78.07277],
[42.54315,-78.07258],[42.54315,-78.0722],[42.54306,-78.07171],[42.54326,-78.0708],[42.54319,-78.07041],[42.54303,-78.07012],[42.54295,-78.06978],[42.54294,-78.06947],[42.54298,-78.06938],[42.54296,-78.06904],
[42.54304,-78.06854],[42.5432,-78.06816],[42.54338,-78.06796],[42.54379,-78.06727],[42.54396,-78.06652],[42.54352,-78.06541],[42.5435,-78.06502],[42.54314,-78.06466],[42.54281,-78.06453],[42.5422,-78.06411],
[42.54213,-78.06392],[42.54221,-78.06355],[42.5422,-78.06323],[42.54233,-78.06311],[42.54244,-78.06314],[42.54255,-78.06301],[42.54259,-78.06284],[42.54294,-78.06246],[42.54309,-78.06244],[42.5429,-78.0622],
[42.54262,-78.06206],[42.54253,-78.0618],[42.54254,-78.06139],[42.54262,-78.061],[42.54235,-78.06023],[42.5424,-78.06014],[42.54268,-78.06014],[42.54273,-78.06002],[42.54244,-78.05956],[42.54233,-78.05925],
[42.54242,-78.05883],[42.54264,-78.05823],[42.54286,-78.05804],[42.54325,-78.05788],[42.54329,-78.05774],[42.54306,-78.0567],[42.54319,-78.05572],[42.54543,-78.05634],[42.5463,-78.05648],[42.54672,-78.05638],
[42.54767,-78.05587],[42.54904,-78.05527],[42.5491,-78.05519],[42.55072,-78.05451],[42.55102,-78.05429],[42.55188,-78.05393],[42.55281,-78.05367],[42.55299,-78.05354],[42.55335,-78.05346],[42.55481,-78.05293]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.4687,lon:-78.22673,color:'black',name:'M06TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 44 })
GV_Draw_Marker({lat:42.46972,lon:-78.21912,color:'black',name:'M06TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 92 })
GV_Draw_Marker({lat:42.47384,lon:-78.21623,color:'black',name:'M06TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 311 })
GV_Draw_Marker({lat:42.47155,lon:-78.20974,color:'black',name:'M06TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 120 })
GV_Draw_Marker({lat:42.46953,lon:-78.20125,color:'black',name:'M06TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 115 })
GV_Draw_Marker({lat:42.46947,lon:-78.19243,color:'black',name:'M06TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 99 })
GV_Draw_Marker({lat:42.47349,lon:-78.18742,color:'black',name:'M06TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 49 })
GV_Draw_Marker({lat:42.4739,lon:-78.18041,color:'black',name:'M06TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 118 })
GV_Draw_Marker({lat:42.47722,lon:-78.17504,color:'black',name:'M06TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 330 })
GV_Draw_Marker({lat:42.47957,lon:-78.17508,color:'black',name:'M06TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 102 })
GV_Draw_Marker({lat:42.47934,lon:-78.16528,color:'black',name:'M06TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 93 })
GV_Draw_Marker({lat:42.47946,lon:-78.1557,color:'black',name:'M06TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 112 })
GV_Draw_Marker({lat:42.4819,lon:-78.14719,color:'black',name:'M06TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 77 })
GV_Draw_Marker({lat:42.48645,lon:-78.14311,color:'black',name:'M06TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 349 })
GV_Draw_Marker({lat:42.49224,lon:-78.14036,color:'black',name:'M06TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 359 })
GV_Draw_Marker({lat:42.49834,lon:-78.13946,color:'black',name:'M06TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 0 })
GV_Draw_Marker({lat:42.50083,lon:-78.13331,color:'black',name:'M06TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 154 })
GV_Draw_Marker({lat:42.50273,lon:-78.12702,color:'black',name:'M06TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 1 })
GV_Draw_Marker({lat:42.50683,lon:-78.13226,color:'black',name:'M06TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 313 })
GV_Draw_Marker({lat:42.51104,lon:-78.12834,color:'black',name:'M06TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 20 })
GV_Draw_Marker({lat:42.51547,lon:-78.12447,color:'black',name:'M06TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 3 })
GV_Draw_Marker({lat:42.52118,lon:-78.12465,color:'black',name:'M06TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 339 })
GV_Draw_Marker({lat:42.52513,lon:-78.1184,color:'black',name:'M06TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 86 })
GV_Draw_Marker({lat:42.52709,lon:-78.10952,color:'black',name:'M06TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 67 })
GV_Draw_Marker({lat:42.53178,lon:-78.10414,color:'black',name:'M06TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 0 })
GV_Draw_Marker({lat:42.5358,lon:-78.09955,color:'black',name:'M06TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 90 })
GV_Draw_Marker({lat:42.53568,lon:-78.08974,color:'black',name:'M06TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 92 })
GV_Draw_Marker({lat:42.53027,lon:-78.08705,color:'black',name:'M06TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 76 })
GV_Draw_Marker({lat:42.53078,lon:-78.07761,color:'black',name:'M06TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 41 })
GV_Draw_Marker({lat:42.53657,lon:-78.07691,color:'black',name:'M06TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 357 })
GV_Draw_Marker({lat:42.54125,lon:-78.0743,color:'black',name:'M06TF - Mile  15.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 5 })
GV_Draw_Marker({lat:42.54382,lon:-78.0671,color:'black',name:'M06TF - Mile  16 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 73 })
GV_Draw_Marker({lat:42.5426,lon:-78.06014,color:'black',name:'M06TF - Mile  16.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 0 })
GV_Draw_Marker({lat:42.54636,lon:-78.05646,color:'black',name:'M06TF - Mile  17 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 10 })
GV_Draw_Marker({lat:42.55322,lon:-78.05349,color:'black',name:'M06TF - Mile  17.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 9 })

t =  463 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M06TwnCrkSpur - 0.28 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.46947,-78.19514],[42.46942,-78.19518],[42.46938,-78.19521],[42.46934,-78.19521],[42.46928,-78.19525],[42.46924,-78.19528],[42.46919,-78.19528],[42.46913,-78.19529],[42.46908,-78.19532],[42.46902,-78.19533],
[42.46897,-78.1953],[42.4689,-78.19528],[42.46884,-78.1953],[42.46877,-78.19534],[42.46876,-78.19538],[42.46873,-78.19544],[42.46868,-78.19549],[42.46864,-78.19557],[42.46862,-78.19563],[42.46858,-78.19566],
[42.46853,-78.1957],[42.46848,-78.19572],[42.46843,-78.19574],[42.46838,-78.1958],[42.46832,-78.19587],[42.46826,-78.19588],[42.46817,-78.19589],[42.46809,-78.1959],[42.46801,-78.19592],[42.46793,-78.19593],
[42.46792,-78.196],[42.46792,-78.19611],[42.46789,-78.19624],[42.46787,-78.19642],[42.46785,-78.19658],[42.46784,-78.19673],[42.46783,-78.19683],[42.46782,-78.1969],[42.46784,-78.19696],[42.46786,-78.19704],
[42.46786,-78.19713],[42.46787,-78.19721],[42.46786,-78.19731],[42.46783,-78.19739],[42.46779,-78.19741],[42.46772,-78.19741],[42.46764,-78.19743],[42.46759,-78.19741],[42.46753,-78.19736],[42.46748,-78.19732],
[42.46744,-78.19734],[42.46739,-78.19737],[42.46733,-78.19738],[42.46729,-78.1974],[42.46723,-78.19739],[42.46718,-78.19742],[42.46714,-78.19747],[42.4671,-78.19749],[42.46705,-78.1975],[42.46699,-78.19752],
[42.46693,-78.19754],[42.46688,-78.19756],[42.46678,-78.19766]
 ] }); GV_Draw_Track(t);

t =  464 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M06WBP01 - 2.83 miles ( 2 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'lightblue';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.46653,-78.23448],[42.45822,-78.2344],[42.45806,-78.23411],[42.45803,-78.23394],[42.45802,-78.21276],[42.4582,-78.21178],[42.45893,-78.20993],[42.46315,-78.20513],[42.46536,-78.20137],[42.46646,-78.20079],
[42.4671,-78.20052],[42.46751,-78.20068],[42.46765,-78.20107],[42.46796,-78.20241],[42.46866,-78.20144],[42.46889,-78.20065],[42.46892,-78.20065],[42.46892,-78.20065]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.45929,lon:-78.23448,color:'#00B0D8',name:'M06WBP01 - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 180 })
GV_Draw_Marker({lat:42.45803,lon:-78.22613,color:'#00B0D8',name:'M06WBP01 - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 90 })
GV_Draw_Marker({lat:42.45803,lon:-78.21632,color:'#00B0D8',name:'M06WBP01 - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 90 })
GV_Draw_Marker({lat:42.46071,lon:-78.20791,color:'#00B0D8',name:'M06WBP01 - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 40 })
GV_Draw_Marker({lat:42.46583,lon:-78.20112,color:'#00B0D8',name:'M06WBP01 - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 21 })

t =  465 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M06X1HntClose - 4.65 miles ( 14 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'white'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.48452,-78.14427],[42.48465,-78.14422],[42.48463,-78.14401],[42.48473,-78.14387],[42.48537,-78.14371],[42.48565,-78.14352],[42.48582,-78.14292],[42.4861,-78.14282],[42.4864,-78.1431],[42.48664,-78.14316],
[42.48678,-78.14335],[42.48697,-78.14383],[42.48791,-78.14409],[42.48831,-78.14412],[42.48906,-78.14385],[42.48925,-78.14358],[42.48942,-78.14346],[42.49006,-78.14244],[42.49029,-78.14221],[42.49079,-78.14202],
[42.49083,-78.14192],[42.49168,-78.14127],[42.49187,-78.14121],[42.49211,-78.14036],[42.49232,-78.14036],[42.493,-78.14017],[42.49311,-78.1403],[42.49416,-78.14027],[42.49515,-78.14004],[42.49549,-78.14044],
[42.49569,-78.14048],[42.49581,-78.14065],[42.49632,-78.14069],[42.49671,-78.14062],[42.49705,-78.14067],[42.49754,-78.14059],[42.49789,-78.14062],[42.49791,-78.14053],[42.49787,-78.14043],[42.49786,-78.13946],
[42.49913,-78.13946],[42.50088,-78.13964],[42.50092,-78.13941],[42.50092,-78.13373],[42.50085,-78.13333],[42.50078,-78.13328],[42.50008,-78.13331],[42.49989,-78.13325],[42.49981,-78.13304],[42.49968,-78.1319],
[42.50019,-78.1315],[42.5003,-78.13119],[42.50053,-78.13088],[42.50051,-78.13076],[42.5006,-78.13058],[42.50058,-78.12998],[42.50063,-78.12981],[42.50091,-78.12958],[42.50095,-78.12893],[42.50122,-78.12817],
[42.50164,-78.12789],[42.50173,-78.12792],[42.50204,-78.1278],[42.50236,-78.12718],[42.50257,-78.12702],[42.50353,-78.127],[42.50373,-78.12712],[42.50421,-78.12716],[42.50436,-78.12743],[42.50449,-78.12749],
[42.50461,-78.12797],[42.50449,-78.12854],[42.50456,-78.12894],[42.50457,-78.12937],[42.50467,-78.12995],[42.50485,-78.13014],[42.50489,-78.13061],[42.50482,-78.13086],[42.50497,-78.13104],[42.50497,-78.13139],
[42.50538,-78.13142],[42.50562,-78.13161],[42.50567,-78.13191],[42.506,-78.13213],[42.50619,-78.13199],[42.50663,-78.13196],[42.50707,-78.13262],[42.50759,-78.13289],[42.5079,-78.13272],[42.50813,-78.13274],
[42.50834,-78.13289],[42.5087,-78.13284],[42.50875,-78.13253],[42.50898,-78.13212],[42.50896,-78.13162],[42.50875,-78.13076],[42.50878,-78.13008],[42.50887,-78.12963],[42.50905,-78.12915],[42.50949,-78.12856],
[42.50978,-78.1284],[42.50983,-78.12845],[42.51041,-78.12837],[42.51057,-78.12847],[42.51068,-78.12834],[42.51101,-78.12835],[42.51112,-78.1283],[42.5114,-78.12864],[42.51161,-78.12869],[42.51184,-78.1286],
[42.51191,-78.1283],[42.51187,-78.12807],[42.5119,-78.12756],[42.51197,-78.12748],[42.5134,-78.12706],[42.51389,-78.12702],[42.51391,-78.12696],[42.51432,-78.127],[42.51459,-78.1269],[42.5147,-78.12653],
[42.51482,-78.12561],[42.51478,-78.1251],[42.51457,-78.12458],[42.51466,-78.12446],[42.51485,-78.12442],[42.51497,-78.1245],[42.51549,-78.12447],[42.51566,-78.12463],[42.51571,-78.12509],[42.51603,-78.12579],
[42.51678,-78.1265],[42.51741,-78.12644],[42.51817,-78.12603],[42.51836,-78.12611],[42.51864,-78.12602],[42.5188,-78.12608],[42.51898,-78.12603],[42.51918,-78.12609],[42.51921,-78.12603],[42.51954,-78.12607],
[42.51973,-78.12588],[42.51989,-78.12552],[42.52019,-78.12518],[42.5204,-78.12467],[42.52063,-78.12437],[42.5212,-78.12466],[42.5216,-78.12455],[42.52172,-78.12439],[42.52208,-78.12422],[42.52217,-78.12424],
[42.52236,-78.12403],[42.52299,-78.12379],[42.52322,-78.12384],[42.52371,-78.12371],[42.5239,-78.12352],[42.52395,-78.12327],[42.52453,-78.12224],[42.52468,-78.12163],[42.52482,-78.12137],[42.52496,-78.12129],
[42.52499,-78.12115],[42.52484,-78.11973],[42.525,-78.11884]
 ] }); GV_Draw_Track(t);

t =  466 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">M06 map coverage - 4.65 miles ( 12 )</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=M06\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/M06.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.57193,-78.03607],[42.57193,-78.2471],[42.46144,-78.2471],[42.46144,-78.03607],[42.57193,-78.03607]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.36483,lon:-78.59799,color:'',dd:true
,name:'Access 2: Kruse Rd',desc:'Limited shoulder parking on Kruse Rd<br /><br />Location: <b>42.3648, -78.598  or N42 21.8896 W78 35.8796</b><br /><br />This is <b>Map CT4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.39364,lon:-78.58281,color:'',dd:true
,name:'Access 3: CR-16 (Rosyk Hill Rd)',desc:'Limited shoulder parking<br /><br />Location: <b>42.3936, -78.5828  or N42 23.6181 W78 34.9686</b><br /><br />This is <b>Map CT4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.41716,lon:-78.57809,color:'',dd:true
,name:'Access 4: Felton Hill Rd',desc:'Limited shoulder parking<br /><br />Location: <b>42.4172, -78.5781  or N42 25.0297 W78 34.6855</b><br /><br />This is <b>Map CT4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.44736,lon:-78.60314,color:'',dd:true
,name:'Access 5: Gooseneck Rd (CR-55)',desc:'Wide shoulder parking<br /><br />Location: <b>42.4474, -78.6031  or N42 26.8417 W78 36.1886</b><br /><br />This is <b>Map CT4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.35815,lon:-78.59805,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct 1-Dec 25<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT4\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3581, -78.5981  or N42 21.4889 W78 35.8832</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.38784,lon:-78.59021,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct 1-Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT4\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3878, -78.5902  or N42 23.2704 W78 35.4129</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.40724,lon:-78.57886,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct 1-Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT4\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.4072, -78.5789  or N42 24.4344 W78 34.7317</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.43204,lon:-78.59586,color:''
,name:'Spring,Fall,summer hunting closure',desc:'Hunting closure: May 1-31, Oct 1-Dec 22 and July 4-Labor Day<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT4\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.432, -78.5959  or N42 25.9227 W78 35.7518</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.38312,lon:-78.58044,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: Blue Spur Trail May 1-31 and Oct 1-Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT4\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.3831, -78.5804  or N42 22.9872 W78 34.8262</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.38165,lon:-78.58089,color:'',dd:true
,name:'Canada Hill Rd',desc:'Good off road parking-S side<br /><br />Location: <b>42.3817, -78.5809  or N42 22.8992 W78 34.8532</b><br /><br />This is <b>Map CT4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.45534,lon:-78.63904,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "CT4 - West Valley"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Sep 14, 2017</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT04\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CT04.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map CT4 shows the Conservation Trail in Cattaraugus County from FLT Main Trail junction to Gooseneck Rd (CR-55). <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT4\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.36307,lon:-78.59784,color:'',dd:true
,name:'Kruse Hill Rd parking',desc:'Parking east of trailread<br /><br />Location: <b>42.3631, -78.5978  or N42 21.7844 W78 35.8704</b><br /><br />This is <b>Map CT4</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  467 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C04Blue - 1.26 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.37779,-78.59369],[42.37786,-78.59368],[42.37791,-78.59368],[42.37795,-78.59366],[42.378,-78.59364],[42.37806,-78.59363],[42.37811,-78.59361],[42.37816,-78.5936],[42.37821,-78.59359],[42.37825,-78.59358],
[42.3783,-78.59358],[42.37835,-78.59357],[42.37839,-78.59356],[42.37843,-78.59355],[42.37847,-78.59354],[42.37851,-78.59354],[42.37857,-78.59354],[42.37861,-78.59354],[42.37865,-78.59354],[42.37869,-78.59354],
[42.37873,-78.59354],[42.37877,-78.59353],[42.37881,-78.59353],[42.37887,-78.59353],[42.37891,-78.59353],[42.37896,-78.59353],[42.37899,-78.59352],[42.37904,-78.59352],[42.37907,-78.59352],[42.37913,-78.59352],
[42.37918,-78.59352],[42.37923,-78.59352],[42.37928,-78.59352],[42.37934,-78.59352],[42.3794,-78.59351],[42.37949,-78.59351],[42.37954,-78.5935],[42.37959,-78.59348],[42.37964,-78.59347],[42.37969,-78.59346],
[42.37973,-78.59345],[42.37978,-78.59344],[42.37983,-78.59342],[42.37987,-78.59341],[42.37992,-78.5934],[42.37997,-78.59339],[42.38001,-78.59337],[42.38006,-78.59335],[42.38011,-78.59334],[42.38016,-78.59332],
[42.38021,-78.5933],[42.38025,-78.59327],[42.3803,-78.59324],[42.38035,-78.59321],[42.38039,-78.59319],[42.38043,-78.59315],[42.38047,-78.5931],[42.3805,-78.59305],[42.38054,-78.59299],[42.38057,-78.59294],
[42.38059,-78.59289],[42.38061,-78.59283],[42.38062,-78.59276],[42.38062,-78.5927],[42.38062,-78.59264],[42.38063,-78.59257],[42.38062,-78.5925],[42.38063,-78.59243],[42.38063,-78.59236],[42.38062,-78.59229],
[42.38064,-78.59222],[42.38064,-78.59215],[42.38064,-78.59207],[42.38065,-78.59201],[42.38066,-78.59194],[42.38066,-78.59187],[42.38066,-78.59181],[42.38066,-78.59174],[42.38066,-78.59167],[42.38066,-78.59161],
[42.38066,-78.59153],[42.38067,-78.59146],[42.38067,-78.5914],[42.38067,-78.59133],[42.38067,-78.59126],[42.38068,-78.59119],[42.38068,-78.59112],[42.38068,-78.59105],[42.38067,-78.59099],[42.38068,-78.59093],
[42.38068,-78.59087],[42.38067,-78.5908],[42.38066,-78.59073],[42.38064,-78.59066],[42.38065,-78.59061],[42.38065,-78.59054],[42.38065,-78.59047],[42.38064,-78.5904],[42.38064,-78.59032],[42.38063,-78.59025],
[42.38064,-78.5902],[42.38065,-78.59012],[42.38066,-78.59005],[42.38066,-78.58998],[42.38067,-78.58991],[42.38067,-78.58984],[42.38067,-78.58977],[42.38067,-78.5897],[42.38067,-78.58964],[42.38067,-78.58958],
[42.38068,-78.58952],[42.38068,-78.58946],[42.38068,-78.58939],[42.38068,-78.58933],[42.38069,-78.58926],[42.3807,-78.5892],[42.3807,-78.58913],[42.38071,-78.58905],[42.38073,-78.58896],[42.38073,-78.58889],
[42.38074,-78.58881],[42.38074,-78.58874],[42.38074,-78.58867],[42.38074,-78.58861],[42.38075,-78.58854],[42.38076,-78.58848],[42.38076,-78.5884],[42.38076,-78.58833],[42.38076,-78.58826],[42.38076,-78.58819],
[42.38076,-78.58812],[42.38076,-78.58805],[42.38076,-78.58799],[42.38076,-78.58791],[42.38076,-78.58784],[42.38075,-78.58777],[42.38076,-78.58769],[42.38077,-78.58763],[42.38078,-78.58757],[42.38079,-78.58752],
[42.38079,-78.58746],[42.38078,-78.58739],[42.38077,-78.58731],[42.38077,-78.58724],[42.38076,-78.58716],[42.38075,-78.5871],[42.38074,-78.58703],[42.38074,-78.58697],[42.38072,-78.58691],[42.38073,-78.58684],
[42.38074,-78.58677],[42.38075,-78.5867],[42.38075,-78.58663],[42.38075,-78.58655],[42.38075,-78.58648],[42.38075,-78.58641],[42.38075,-78.58634],[42.38076,-78.58627],[42.38076,-78.5862],[42.38076,-78.58613],
[42.38077,-78.58605],[42.38077,-78.58598],[42.38077,-78.58591],[42.38078,-78.58584],[42.38078,-78.58576],[42.38079,-78.58569],[42.3808,-78.58562],[42.38079,-78.58554],[42.38079,-78.58548],[42.38078,-78.58541],
[42.38078,-78.58534],[42.38078,-78.58528],[42.38078,-78.58521],[42.38077,-78.58514],[42.38077,-78.58507],[42.38077,-78.585],[42.38076,-78.58494],[42.38076,-78.58487],[42.38077,-78.58481],[42.38077,-78.58474],
[42.38076,-78.58467],[42.38075,-78.5846],[42.38075,-78.58453],[42.38076,-78.58447],[42.38076,-78.58442],[42.38076,-78.58435],[42.38075,-78.58428],[42.38076,-78.58422],[42.38078,-78.58415],[42.38079,-78.58409],
[42.3808,-78.58402],[42.3808,-78.58396],[42.3808,-78.58391],[42.38081,-78.58385],[42.38081,-78.58378],[42.38081,-78.58371],[42.3808,-78.58364],[42.38081,-78.58358],[42.38084,-78.58349],[42.38086,-78.58343] ] });
trk_segments[t].push({ points:[[42.38086,-78.58343],
[42.38089,-78.58335],[42.3809,-78.58329],[42.38093,-78.58323],[42.38095,-78.58316],[42.38097,-78.58309],[42.381,-78.58304],[42.38101,-78.58298],[42.38102,-78.58291],[42.38103,-78.58285],[42.38104,-78.58279],
[42.38107,-78.58273],[42.38108,-78.58267],[42.38108,-78.5826],[42.38112,-78.58253],[42.38115,-78.58247],[42.38117,-78.58241],[42.38118,-78.58235],[42.38119,-78.58229],[42.38119,-78.58223],[42.3812,-78.58217],
[42.38123,-78.58212],[42.38126,-78.58207],[42.38129,-78.58202],[42.38132,-78.58196],[42.38135,-78.5819],[42.38137,-78.58185],[42.38139,-78.5818],[42.38142,-78.58175],[42.38144,-78.58169],[42.38147,-78.58164],
[42.38149,-78.58159],[42.38152,-78.58153],[42.38154,-78.58147],[42.38157,-78.58141],[42.38157,-78.58135],[42.3816,-78.5813],[42.38163,-78.58125],[42.38165,-78.5812],[42.38168,-78.58115],[42.3817,-78.5811],
[42.38171,-78.58104],[42.38172,-78.58098],[42.38173,-78.58092],[42.38174,-78.58086],[42.38175,-78.5808],[42.38177,-78.58074],[42.38178,-78.58068],[42.3818,-78.58065],[42.38183,-78.58065],[42.38187,-78.58065],
[42.3819,-78.58064],[42.38195,-78.58064],[42.38198,-78.58062],[42.38202,-78.58058],[42.38203,-78.58053],[42.38204,-78.58047],[42.38207,-78.58042],[42.38211,-78.58041],[42.38215,-78.58039],[42.38219,-78.58043],
[42.38222,-78.58047],[42.38227,-78.5805],[42.38232,-78.58052],[42.38237,-78.58055],[42.38242,-78.58055],[42.38248,-78.58055],[42.38253,-78.58053],[42.38257,-78.5805],[42.38262,-78.5805],[42.38266,-78.58051],
[42.38271,-78.58052],[42.38276,-78.58053],[42.3828,-78.58054],[42.38285,-78.58054],[42.38289,-78.58054],[42.38294,-78.58053],[42.38299,-78.58054],[42.38303,-78.58054],[42.38308,-78.58053],[42.38313,-78.58053],
[42.38317,-78.58053],[42.38321,-78.58052],[42.38325,-78.58052],[42.38329,-78.58051],[42.38333,-78.5805],[42.38337,-78.58046],[42.38341,-78.58042],[42.38344,-78.58037],[42.38347,-78.58032],[42.38349,-78.58027],
[42.38352,-78.58022],[42.38355,-78.58018],[42.38356,-78.58013],[42.38357,-78.58007],[42.38358,-78.58001],[42.3836,-78.57997],[42.38362,-78.57991],[42.38366,-78.57991],[42.38371,-78.57993],[42.38377,-78.57994],
[42.38382,-78.57994],[42.38386,-78.57997],[42.3839,-78.58],[42.38395,-78.58002],[42.384,-78.58],[42.38406,-78.57999],[42.3841,-78.57999],[42.38416,-78.57997],[42.38423,-78.57997],[42.38431,-78.58],
[42.38433,-78.58004],[42.38437,-78.58009],[42.38442,-78.58014],[42.38445,-78.58017],[42.3845,-78.58021],[42.38454,-78.58027],[42.38454,-78.58035],[42.38456,-78.58044],[42.38455,-78.58051],[42.38456,-78.58058],
[42.3846,-78.58065],[42.38466,-78.58072],[42.38469,-78.5808],[42.38468,-78.58088],[42.38468,-78.58094],[42.38468,-78.58103],[42.38466,-78.58113],[42.38465,-78.5812],[42.38466,-78.58131],[42.38467,-78.58139],
[42.3847,-78.58146],[42.38474,-78.58151],[42.3848,-78.58158],[42.38485,-78.58167],[42.38488,-78.58172],[42.38495,-78.58182],[42.38499,-78.58188],[42.38503,-78.58192],[42.38508,-78.58194],[42.38514,-78.58198],
[42.38519,-78.58203],[42.38523,-78.58209],[42.38528,-78.58215],[42.38532,-78.58221],[42.38535,-78.58226],[42.3854,-78.58232],[42.38545,-78.58238],[42.38551,-78.58243],[42.38556,-78.58248],[42.38561,-78.58254],
[42.38566,-78.58256],[42.38571,-78.5826],[42.38576,-78.58264],[42.38582,-78.58268],[42.38585,-78.58273],[42.3859,-78.58276],[42.38594,-78.58282],[42.38595,-78.58292],[42.38597,-78.58299]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.38075,lon:-78.58713,color:'#00B0D8',name:'C04Blue - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 100 })
GV_Draw_Marker({lat:42.3836,lon:-78.57998,color:'#00B0D8',name:'C04Blue - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 62 })

t =  468 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C04HBP01 - 8.29 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.34321,-78.61306],[42.34429,-78.61254],[42.34494,-78.61205],[42.34599,-78.61098],[42.34739,-78.61006],[42.34825,-78.60944],[42.34904,-78.60863],[42.35058,-78.60784],[42.3515,-78.60737],[42.35272,-78.60697],
[42.3539,-78.6066],[42.35485,-78.6064],[42.35624,-78.60623],[42.35678,-78.60627],[42.35766,-78.60659],[42.35813,-78.60674],[42.36048,-78.60682],[42.36118,-78.6068],[42.363,-78.6067],[42.36402,-78.60679],
[42.36469,-78.60658],[42.3651,-78.60666],[42.36692,-78.60637],[42.36936,-78.60617],[42.37146,-78.60514],[42.37473,-78.60461],[42.37777,-78.6042],[42.38047,-78.60378],[42.38311,-78.60436],[42.38701,-78.60628],
[42.39015,-78.60794],[42.39143,-78.6087],[42.3916,-78.60877],[42.39243,-78.60874],[42.39418,-78.60816],[42.3958,-78.60758],[42.39914,-78.60735],[42.4003,-78.60775],[42.40372,-78.61232],[42.40546,-78.61227],
[42.40732,-78.61229],[42.41296,-78.61239],[42.41309,-78.60844],[42.4146,-78.60554],[42.41478,-78.60532],[42.41823,-78.60227],[42.42239,-78.60243],[42.42408,-78.60226],[42.42439,-78.60222],[42.42719,-78.60333],
[42.42929,-78.60436],[42.43246,-78.60407],[42.43339,-78.60541],[42.43342,-78.60612],[42.43444,-78.60711],[42.43489,-78.6063],[42.43629,-78.60582],[42.43883,-78.60852],[42.43982,-78.60903],[42.44313,-78.6125],
[42.44317,-78.61235],[42.44364,-78.61121],[42.44412,-78.60994],[42.44466,-78.60847],[42.44466,-78.60838],[42.44546,-78.60588],[42.44594,-78.60494],[42.4475,-78.60289]
 ] }); GV_Draw_Track(t);

t =  469 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C04HBP02 - 1.24 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.41718,-78.57815],[42.41726,-78.57974],[42.41759,-78.58132],[42.41753,-78.58263],[42.41765,-78.5844],[42.41844,-78.58781],[42.41845,-78.58794],[42.41862,-78.59252],[42.41861,-78.59347],[42.41857,-78.59416],
[42.41853,-78.59665],[42.41848,-78.59716],[42.41843,-78.59935],[42.41834,-78.60226]
 ] }); GV_Draw_Track(t);

t =  470 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C04TF - 9.51 miles (orange blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT04\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/CT04.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.35205,-78.5984],[42.35209,-78.59831],[42.35226,-78.59835],[42.35261,-78.59826],[42.35271,-78.59832],[42.3532,-78.59836],[42.35328,-78.59832],[42.35356,-78.59835],[42.35367,-78.59829],[42.354,-78.59827],
[42.35421,-78.59821],[42.35443,-78.59822],[42.35459,-78.59828],[42.35486,-78.5983],[42.35512,-78.59836],[42.35528,-78.59834],[42.35539,-78.59828],[42.35556,-78.59823],[42.35582,-78.59825],[42.35604,-78.59818],
[42.35611,-78.59826],[42.35623,-78.59831],[42.35651,-78.5983],[42.35684,-78.59824],[42.35751,-78.5983],[42.35778,-78.59822],[42.35811,-78.59806],[42.35825,-78.59806],[42.35847,-78.5979],[42.3586,-78.59789],
[42.35885,-78.59779],[42.35887,-78.59782],[42.35903,-78.59788],[42.35916,-78.59786],[42.35952,-78.59773],[42.35964,-78.59764],[42.35972,-78.59767],[42.35998,-78.59746],[42.36035,-78.59746],[42.36077,-78.59742],
[42.36106,-78.59722],[42.36116,-78.59707],[42.36129,-78.59699],[42.36155,-78.59693],[42.36185,-78.59784],[42.36193,-78.59792],[42.36225,-78.59809],[42.36295,-78.59816],[42.36329,-78.59811],[42.36355,-78.59815],
[42.36479,-78.59814],[42.36484,-78.59809],[42.36493,-78.59771],[42.36499,-78.59761],[42.36516,-78.59747],[42.36677,-78.59666],[42.36888,-78.59574],[42.36982,-78.59544],[42.37053,-78.59529],[42.37076,-78.59529],
[42.37143,-78.59518],[42.37262,-78.59481],[42.37436,-78.59432],[42.37473,-78.59414],[42.37523,-78.59396],[42.37658,-78.59374],[42.37693,-78.59371],[42.3778,-78.59373],[42.37782,-78.59393],[42.37783,-78.59755],
[42.378,-78.59758],[42.37874,-78.5974],[42.37941,-78.59738],[42.38076,-78.59746],[42.38357,-78.59751],[42.38744,-78.59766],[42.38752,-78.59761],[42.38752,-78.59713],[42.38745,-78.59697],[42.38749,-78.59676],
[42.38754,-78.59665],[42.38756,-78.59641],[42.38769,-78.59639],[42.38791,-78.59623],[42.3881,-78.59589],[42.3881,-78.59583],[42.38817,-78.59546],[42.38815,-78.59534],[42.38809,-78.59526],[42.3875,-78.59483],
[42.38674,-78.59374],[42.3865,-78.59344],[42.38634,-78.59329],[42.38621,-78.59324],[42.38518,-78.59335],[42.38515,-78.59331],[42.38505,-78.5923],[42.38514,-78.59221],[42.38527,-78.59168],[42.38533,-78.59163],
[42.38547,-78.59133],[42.38557,-78.5912],[42.386,-78.59094],[42.38615,-78.5908],[42.3863,-78.5908],[42.38661,-78.59064],[42.38748,-78.59039],[42.38816,-78.59023],[42.38825,-78.59026],[42.38888,-78.59027],
[42.38932,-78.59031],[42.38943,-78.59026],[42.38949,-78.59033],[42.38956,-78.59037],[42.38968,-78.59021],[42.38971,-78.59024],[42.38975,-78.59022],[42.38979,-78.59026],[42.38983,-78.59023],[42.38984,-78.59018],
[42.38988,-78.59014],[42.39006,-78.59011],[42.39057,-78.59015],[42.39085,-78.59021],[42.39116,-78.59022],[42.39124,-78.59019],[42.39155,-78.59025],[42.39163,-78.58928],[42.3923,-78.58684],[42.39287,-78.58505],
[42.39365,-78.58279],[42.39364,-78.58281],[42.39378,-78.58261],[42.39397,-78.58257],[42.39406,-78.58251],[42.39414,-78.58252],[42.39429,-78.58244],[42.39441,-78.5822],[42.39479,-78.58162],[42.39488,-78.58141],
[42.39504,-78.58122],[42.39552,-78.58045],[42.39557,-78.58044],[42.39584,-78.58062],[42.39597,-78.58081],[42.39627,-78.58076],[42.39644,-78.58068],[42.3967,-78.58047],[42.39697,-78.58034],[42.39717,-78.58034],
[42.39732,-78.58025],[42.39748,-78.5802],[42.39766,-78.58019],[42.39789,-78.58036],[42.39804,-78.58055],[42.39815,-78.58087],[42.39824,-78.58097],[42.39838,-78.58096],[42.39843,-78.58099],[42.39865,-78.58068],
[42.39875,-78.58061],[42.3989,-78.58057],[42.39933,-78.58058],[42.39953,-78.58067],[42.39974,-78.58061],[42.4,-78.58037],[42.40026,-78.58023],[42.40065,-78.57984],[42.40098,-78.57962],[42.40132,-78.57957],
[42.4017,-78.57946],[42.40186,-78.57949],[42.40199,-78.57955],[42.40233,-78.57954],[42.40239,-78.57957],[42.40249,-78.57954],[42.4027,-78.5796],[42.4029,-78.57947],[42.40297,-78.57938],[42.40329,-78.57938],
[42.40339,-78.57934],[42.40372,-78.57931],[42.40393,-78.57925],[42.40436,-78.57924],[42.40446,-78.57917],[42.40462,-78.57921],[42.40482,-78.57916],[42.40498,-78.57918],[42.40547,-78.57912],[42.40605,-78.579],
[42.40629,-78.579],[42.40646,-78.57894],[42.4065,-78.57889],[42.40651,-78.57882],[42.40656,-78.57877],[42.4069,-78.57878],[42.4072,-78.57887],[42.4074,-78.57896],[42.4078,-78.57929],[42.40811,-78.57937] ] });
trk_segments[t].push({ points:[[42.40811,-78.57937],
[42.40839,-78.57953],[42.40873,-78.5799],[42.40889,-78.58],[42.40906,-78.58028],[42.4094,-78.58013],[42.40954,-78.58025],[42.40958,-78.58038],[42.40975,-78.58043],[42.40989,-78.58055],[42.41009,-78.58062],
[42.4103,-78.58059],[42.41063,-78.58025],[42.41082,-78.58013],[42.411,-78.58013],[42.41109,-78.58003],[42.41121,-78.57983],[42.41157,-78.57948],[42.41176,-78.57944],[42.41187,-78.57937],[42.41224,-78.57942],
[42.41232,-78.57946],[42.41246,-78.5797],[42.41256,-78.57981],[42.41303,-78.57971],[42.41315,-78.57972],[42.41334,-78.57965],[42.41345,-78.57955],[42.41371,-78.57958],[42.41384,-78.57955],[42.41404,-78.5792],
[42.41418,-78.57904],[42.41424,-78.579],[42.41444,-78.5791],[42.41458,-78.5792],[42.41493,-78.5791],[42.41524,-78.57908],[42.41529,-78.57904],[42.41536,-78.5789],[42.41538,-78.57867],[42.41549,-78.57852],
[42.41566,-78.57859],[42.41584,-78.57852],[42.41587,-78.57845],[42.41611,-78.57834],[42.41618,-78.57836],[42.41624,-78.5782],[42.41631,-78.57818],[42.41635,-78.57803],[42.41644,-78.57792],[42.4165,-78.57792],
[42.41683,-78.57805],[42.41695,-78.57803],[42.41706,-78.57807],[42.41719,-78.57817],[42.41775,-78.57823],[42.41922,-78.57822],[42.4211,-78.57831],[42.42113,-78.57834],[42.42108,-78.5785],[42.42103,-78.57915],
[42.42105,-78.57938],[42.42099,-78.57978],[42.42095,-78.58038],[42.42105,-78.58043],[42.42118,-78.58043],[42.42134,-78.58061],[42.4215,-78.58072],[42.42166,-78.58074],[42.42174,-78.58072],[42.42184,-78.58074],
[42.42192,-78.58092],[42.42201,-78.58103],[42.42199,-78.58113],[42.42203,-78.58116],[42.4221,-78.58112],[42.42222,-78.58115],[42.42225,-78.58132],[42.4225,-78.58157],[42.42258,-78.58159],[42.42274,-78.58174],
[42.42284,-78.58176],[42.42294,-78.58186],[42.42305,-78.58186],[42.42315,-78.58179],[42.42328,-78.58178],[42.42337,-78.58182],[42.42398,-78.58171],[42.42412,-78.58185],[42.42417,-78.58195],[42.42433,-78.58269],
[42.42396,-78.58326],[42.42386,-78.58347],[42.42386,-78.58359],[42.4238,-78.58373],[42.42377,-78.58376],[42.42365,-78.58373],[42.42357,-78.58392],[42.42359,-78.58419],[42.42359,-78.58457],[42.42351,-78.58466],
[42.4233,-78.5847],[42.42317,-78.58491],[42.42314,-78.58491],[42.42312,-78.58494],[42.42313,-78.5855],[42.4232,-78.58582],[42.42332,-78.58612],[42.42344,-78.58662],[42.4234,-78.58682],[42.42336,-78.58691],
[42.42335,-78.58719],[42.42338,-78.58724],[42.42384,-78.58763],[42.42402,-78.58802],[42.42405,-78.58843],[42.42404,-78.58861],[42.42394,-78.58899],[42.42394,-78.58911],[42.42401,-78.58919],[42.42401,-78.58924],
[42.42416,-78.58949],[42.42414,-78.58972],[42.42434,-78.58998],[42.42437,-78.59008],[42.42455,-78.59029],[42.42458,-78.5904],[42.42469,-78.59054],[42.42503,-78.59071],[42.42511,-78.59072],[42.42522,-78.59079],
[42.42543,-78.59081],[42.42556,-78.59096],[42.42568,-78.591],[42.42588,-78.59127],[42.42599,-78.59152],[42.42603,-78.59176],[42.42602,-78.59188],[42.42605,-78.59198],[42.42614,-78.59208],[42.4262,-78.59238],
[42.42635,-78.59267],[42.42668,-78.59282],[42.4268,-78.59292],[42.42683,-78.5929],[42.42712,-78.59292],[42.4272,-78.5929],[42.4273,-78.59301],[42.4274,-78.59306],[42.42751,-78.59306],[42.42765,-78.59312],
[42.42786,-78.59315],[42.42802,-78.59307],[42.42815,-78.59309],[42.42843,-78.59292],[42.42858,-78.59277],[42.42865,-78.59279],[42.42891,-78.59228],[42.42903,-78.59231],[42.42909,-78.59225],[42.42914,-78.59231],
[42.42938,-78.59227],[42.42949,-78.59221],[42.42964,-78.59219],[42.4298,-78.59224],[42.42992,-78.5924],[42.43007,-78.59247],[42.43011,-78.59259],[42.43018,-78.59255],[42.4303,-78.59253],[42.43035,-78.5926],
[42.43045,-78.59292],[42.43065,-78.59317],[42.43074,-78.59337],[42.43076,-78.59348],[42.43087,-78.59374],[42.43093,-78.59414],[42.431,-78.59432],[42.431,-78.59461],[42.43104,-78.59478],[42.4311,-78.59485],
[42.43125,-78.5949],[42.43146,-78.59522],[42.43154,-78.59528],[42.4317,-78.5955],[42.4318,-78.59571],[42.43198,-78.59591],[42.43211,-78.59594],[42.4322,-78.59604],[42.43223,-78.59621],[42.43229,-78.5963],
[42.43232,-78.59642],[42.4323,-78.59646],[42.43236,-78.59659],[42.43236,-78.59665],[42.4323,-78.59671],[42.43229,-78.59695],[42.43237,-78.5971],[42.43239,-78.59719],[42.43247,-78.59731],[42.43255,-78.59732] ] });
trk_segments[t].push({ points:[[42.43255,-78.59732],
[42.43261,-78.59738],[42.43278,-78.59778],[42.43274,-78.59808],[42.43278,-78.5982],[42.43277,-78.59841],[42.4328,-78.59852],[42.43278,-78.59857],[42.43282,-78.59864],[42.43276,-78.59883],[42.43278,-78.59905],
[42.43272,-78.59949],[42.43285,-78.59963],[42.43339,-78.59961],[42.43355,-78.59966],[42.43386,-78.59963],[42.43396,-78.59954],[42.43439,-78.59958],[42.43551,-78.59955],[42.43572,-78.59952],[42.43582,-78.59963],
[42.43615,-78.59974],[42.43626,-78.59981],[42.43662,-78.5999],[42.43712,-78.60025],[42.43717,-78.60017],[42.43725,-78.59994],[42.43737,-78.59986],[42.43747,-78.59966],[42.43749,-78.59954],[42.43758,-78.59941],
[42.43809,-78.59942],[42.43839,-78.59951],[42.43852,-78.59945],[42.43874,-78.59951],[42.43885,-78.5995],[42.43899,-78.59954],[42.43896,-78.59951],[42.43897,-78.59939],[42.43929,-78.59945],[42.43962,-78.59941],
[42.43976,-78.59949],[42.43978,-78.59957],[42.43994,-78.59982],[42.43997,-78.59997],[42.43995,-78.60013],[42.44003,-78.60028],[42.43998,-78.60035],[42.43994,-78.60072],[42.43997,-78.60082],[42.43997,-78.60099],
[42.44011,-78.60144],[42.44023,-78.60157],[42.4405,-78.60206],[42.44057,-78.60212],[42.44073,-78.60215],[42.44086,-78.60212],[42.44113,-78.60229],[42.44121,-78.60222],[42.4413,-78.60224],[42.4414,-78.60218],
[42.44158,-78.60217],[42.44172,-78.60212],[42.44196,-78.60214],[42.44219,-78.6023],[42.44242,-78.60221],[42.44267,-78.60217],[42.44285,-78.60202],[42.44297,-78.60175],[42.44309,-78.60156],[42.4432,-78.6015],
[42.44332,-78.60149],[42.44353,-78.60135],[42.44373,-78.60129],[42.44383,-78.60109],[42.44393,-78.60106],[42.4445,-78.60064],[42.44453,-78.60056],[42.44459,-78.60057],[42.44471,-78.60049],[42.44506,-78.60017],
[42.44511,-78.60017],[42.44533,-78.60035],[42.44557,-78.60041],[42.44585,-78.60038],[42.44598,-78.60044],[42.44635,-78.60045],[42.44652,-78.60066],[42.44663,-78.60066],[42.44672,-78.60061],[42.447,-78.60032],
[42.447,-78.60022],[42.44715,-78.60006],[42.44726,-78.59966],[42.44738,-78.59948],[42.44755,-78.59985],[42.44759,-78.60013],[42.44762,-78.60155],[42.44751,-78.60276],[42.44745,-78.60294],[42.44729,-78.60317]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.35906,lon:-78.59788,color:'orange',name:'C04TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 6 })
GV_Draw_Marker({lat:42.36534,lon:-78.59738,color:'orange',name:'C04TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 20 })
GV_Draw_Marker({lat:42.37232,lon:-78.59491,color:'orange',name:'C04TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 13 })
GV_Draw_Marker({lat:42.37782,lon:-78.59596,color:'orange',name:'C04TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 270 })
GV_Draw_Marker({lat:42.38387,lon:-78.59753,color:'orange',name:'C04TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 358 })
GV_Draw_Marker({lat:42.38697,lon:-78.59405,color:'orange',name:'C04TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 133 })
GV_Draw_Marker({lat:42.38887,lon:-78.59026,color:'orange',name:'C04TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 0 })
GV_Draw_Marker({lat:42.393,lon:-78.58466,color:'orange',name:'C04TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 65 })
GV_Draw_Marker({lat:42.39814,lon:-78.58084,color:'orange',name:'C04TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 294 })
GV_Draw_Marker({lat:42.4049,lon:-78.57917,color:'orange',name:'C04TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 355 })
GV_Draw_Marker({lat:42.41135,lon:-78.57969,color:'orange',name:'C04TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 36 })
GV_Draw_Marker({lat:42.4176,lon:-78.57822,color:'orange',name:'C04TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 355 })
GV_Draw_Marker({lat:42.42265,lon:-78.58166,color:'orange',name:'C04TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 326 })
GV_Draw_Marker({lat:42.42402,lon:-78.58803,color:'orange',name:'C04TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 276 })
GV_Draw_Marker({lat:42.42869,lon:-78.59272,color:'orange',name:'C04TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 56 })
GV_Draw_Marker({lat:42.43276,lon:-78.59817,color:'orange',name:'C04TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 292 })
GV_Draw_Marker({lat:42.43842,lon:-78.59949,color:'orange',name:'C04TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 16 })
GV_Draw_Marker({lat:42.44367,lon:-78.60131,color:'orange',name:'C04TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 13 })
GV_Draw_Marker({lat:42.44741,lon:-78.603,color:'orange',name:'C04TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 227 })

t =  471 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C04X1HntClose - 0.84 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.35205,-78.5984],[42.35209,-78.59831],[42.35226,-78.59835],[42.35261,-78.59826],[42.35271,-78.59832],[42.3532,-78.59836],[42.35328,-78.59832],[42.35356,-78.59835],[42.35367,-78.59829],[42.354,-78.59827],
[42.35421,-78.59821],[42.35443,-78.59822],[42.35459,-78.59828],[42.35486,-78.5983],[42.35512,-78.59836],[42.35528,-78.59834],[42.35556,-78.59823],[42.35582,-78.59825],[42.35604,-78.59818],[42.35611,-78.59826],
[42.35623,-78.59831],[42.35651,-78.5983],[42.35684,-78.59824],[42.35751,-78.5983],[42.35778,-78.59822],[42.35811,-78.59806],[42.35825,-78.59806],[42.35847,-78.5979],[42.3586,-78.59789],[42.35885,-78.59779],
[42.35887,-78.59782],[42.35903,-78.59788],[42.35952,-78.59773],[42.35964,-78.59764],[42.35972,-78.59767],[42.35998,-78.59746],[42.36077,-78.59742],[42.36106,-78.59722],[42.36116,-78.59707],[42.36129,-78.59699],
[42.36155,-78.59693],[42.36185,-78.59784],[42.36193,-78.59792],[42.36225,-78.59809],[42.36295,-78.59816],[42.36329,-78.59811]
 ] }); GV_Draw_Track(t);

t =  472 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C04X2HntClose - 1.61 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.37783,-78.59755],[42.378,-78.59758],[42.37874,-78.5974],[42.37941,-78.59738],[42.38076,-78.59746],[42.38357,-78.59751],[42.38744,-78.59766],[42.38752,-78.59761],[42.38752,-78.59713],[42.38745,-78.59697],
[42.38749,-78.59676],[42.38754,-78.59665],[42.38756,-78.59641],[42.38769,-78.59639],[42.38791,-78.59623],[42.3881,-78.59589],[42.3881,-78.59583],[42.38817,-78.59546],[42.38815,-78.59534],[42.38809,-78.59526],
[42.3875,-78.59483],[42.38674,-78.59374],[42.3865,-78.59344],[42.38634,-78.59329],[42.38621,-78.59324],[42.38518,-78.59335],[42.38515,-78.59331],[42.38505,-78.5923],[42.38514,-78.59221],[42.38527,-78.59168],
[42.38533,-78.59163],[42.38547,-78.59133],[42.38557,-78.5912],[42.386,-78.59094],[42.38615,-78.5908],[42.3863,-78.5908],[42.38661,-78.59064],[42.38748,-78.59039],[42.38816,-78.59023],[42.38825,-78.59026],
[42.38888,-78.59027],[42.38932,-78.59031],[42.38943,-78.59026],[42.38949,-78.59033],[42.38956,-78.59037],[42.38968,-78.59021],[42.38971,-78.59024],[42.38975,-78.59022],[42.38979,-78.59026],[42.38983,-78.59023],
[42.38984,-78.59018],[42.38988,-78.59014],[42.39006,-78.59011],[42.39057,-78.59015],[42.39085,-78.59021],[42.39116,-78.59022],[42.39124,-78.59019],[42.39155,-78.59025]
 ] }); GV_Draw_Track(t);

t =  473 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C04X3HntClose - 1.86 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.39364,-78.58281],[42.39378,-78.58261],[42.39397,-78.58257],[42.39406,-78.58251],[42.39414,-78.58252],[42.39429,-78.58244],[42.39441,-78.5822],[42.39479,-78.58162],[42.39488,-78.58141],[42.39504,-78.58122],
[42.39552,-78.58045],[42.39557,-78.58044],[42.39584,-78.58062],[42.39597,-78.58081],[42.39627,-78.58076],[42.39644,-78.58068],[42.3967,-78.58047],[42.39697,-78.58034],[42.39717,-78.58034],[42.39732,-78.58025],
[42.39748,-78.5802],[42.39766,-78.58019],[42.39789,-78.58036],[42.39804,-78.58055],[42.39815,-78.58087],[42.39824,-78.58097],[42.39838,-78.58096],[42.39843,-78.58099],[42.39865,-78.58068],[42.39875,-78.58061],
[42.3989,-78.58057],[42.39933,-78.58058],[42.39953,-78.58067],[42.39974,-78.58061],[42.4,-78.58037],[42.40026,-78.58023],[42.40065,-78.57984],[42.40098,-78.57962],[42.40132,-78.57957],[42.4017,-78.57946],
[42.40186,-78.57949],[42.40199,-78.57955],[42.40233,-78.57954],[42.40239,-78.57957],[42.40249,-78.57954],[42.4027,-78.5796],[42.4029,-78.57947],[42.40297,-78.57938],[42.40329,-78.57938],[42.40339,-78.57934],
[42.40372,-78.57931],[42.40393,-78.57925],[42.40436,-78.57924],[42.40446,-78.57917],[42.40462,-78.57921],[42.40482,-78.57916],[42.40498,-78.57918],[42.40547,-78.57912],[42.40605,-78.579],[42.40629,-78.579],
[42.40646,-78.57894],[42.4065,-78.57889],[42.40651,-78.57882],[42.40656,-78.57877],[42.4069,-78.57878],[42.4072,-78.57887],[42.4074,-78.57896],[42.4078,-78.57929],[42.40811,-78.57937],[42.40839,-78.57953],
[42.40873,-78.5799],[42.40889,-78.58],[42.40906,-78.58028],[42.4094,-78.58013],[42.40954,-78.58025],[42.40958,-78.58038],[42.40975,-78.58043],[42.40989,-78.58055],[42.41009,-78.58062],[42.4103,-78.58059],
[42.41063,-78.58025],[42.41082,-78.58013],[42.411,-78.58013],[42.41109,-78.58003],[42.41121,-78.57983],[42.41157,-78.57948],[42.41176,-78.57944],[42.41187,-78.57937],[42.41224,-78.57942],[42.41232,-78.57946],
[42.41246,-78.5797],[42.41256,-78.57981],[42.41303,-78.57971],[42.41315,-78.57972],[42.41334,-78.57965],[42.41345,-78.57955],[42.41371,-78.57958],[42.41384,-78.57955],[42.41404,-78.5792],[42.41418,-78.57904],
[42.41424,-78.579],[42.41444,-78.5791],[42.41458,-78.5792],[42.41493,-78.5791],[42.41524,-78.57908],[42.41529,-78.57904],[42.41536,-78.5789],[42.41538,-78.57867],[42.41549,-78.57852],[42.41566,-78.57859],
[42.41584,-78.57852],[42.41587,-78.57845],[42.41611,-78.57834],[42.41618,-78.57836],[42.41624,-78.5782],[42.41631,-78.57818],[42.41635,-78.57803],[42.41644,-78.57792],[42.4165,-78.57792],[42.41683,-78.57805],
[42.41695,-78.57803],[42.41706,-78.57807],[42.41719,-78.57817]
 ] }); GV_Draw_Track(t);

t =  474 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C04X4HntClose - 3.54 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.41719,-78.57817],[42.41775,-78.57823],[42.41922,-78.57822],[42.4211,-78.57831],[42.42113,-78.57834],[42.42108,-78.5785],[42.42103,-78.57915],[42.42105,-78.57938],[42.42099,-78.57978],[42.42095,-78.58038],
[42.42105,-78.58043],[42.42118,-78.58043],[42.42134,-78.58061],[42.4215,-78.58072],[42.42166,-78.58074],[42.42174,-78.58072],[42.42184,-78.58074],[42.42192,-78.58092],[42.42201,-78.58103],[42.42199,-78.58113],
[42.42203,-78.58116],[42.4221,-78.58112],[42.42222,-78.58115],[42.42225,-78.58132],[42.4225,-78.58157],[42.42258,-78.58159],[42.42274,-78.58174],[42.42284,-78.58176],[42.42294,-78.58186],[42.42305,-78.58186],
[42.42315,-78.58179],[42.42328,-78.58178],[42.42337,-78.58182],[42.42398,-78.58171],[42.42412,-78.58185],[42.42417,-78.58195],[42.42433,-78.58269],[42.42396,-78.58326],[42.42386,-78.58347],[42.42386,-78.58359],
[42.4238,-78.58373],[42.42377,-78.58376],[42.42365,-78.58373],[42.42357,-78.58392],[42.42359,-78.58419],[42.42359,-78.58457],[42.42351,-78.58466],[42.4233,-78.5847],[42.42317,-78.58491],[42.42314,-78.58491],
[42.42312,-78.58494],[42.42313,-78.5855],[42.4232,-78.58582],[42.42332,-78.58612],[42.42344,-78.58662],[42.4234,-78.58682],[42.42336,-78.58691],[42.42335,-78.58719],[42.42338,-78.58724],[42.42384,-78.58763],
[42.42402,-78.58802],[42.42405,-78.58843],[42.42404,-78.58861],[42.42394,-78.58899],[42.42394,-78.58911],[42.42401,-78.58919],[42.42401,-78.58924],[42.42416,-78.58949],[42.42414,-78.58972],[42.42434,-78.58998],
[42.42437,-78.59008],[42.42455,-78.59029],[42.42458,-78.5904],[42.42469,-78.59054],[42.42503,-78.59071],[42.42511,-78.59072],[42.42522,-78.59079],[42.42543,-78.59081],[42.42556,-78.59096],[42.42568,-78.591],
[42.42588,-78.59127],[42.42599,-78.59152],[42.42603,-78.59176],[42.42602,-78.59188],[42.42605,-78.59198],[42.42614,-78.59208],[42.4262,-78.59238],[42.42635,-78.59267],[42.42668,-78.59282],[42.4268,-78.59292],
[42.42683,-78.5929],[42.42712,-78.59292],[42.4272,-78.5929],[42.4273,-78.59301],[42.4274,-78.59306],[42.42751,-78.59306],[42.42765,-78.59312],[42.42786,-78.59315],[42.42802,-78.59307],[42.42815,-78.59309],
[42.42843,-78.59292],[42.42858,-78.59277],[42.42865,-78.59279],[42.42891,-78.59228],[42.42903,-78.59231],[42.42909,-78.59225],[42.42914,-78.59231],[42.42938,-78.59227],[42.42949,-78.59221],[42.42964,-78.59219],
[42.4298,-78.59224],[42.42992,-78.5924],[42.43007,-78.59247],[42.43011,-78.59259],[42.43018,-78.59255],[42.4303,-78.59253],[42.43035,-78.5926],[42.43045,-78.59292],[42.43065,-78.59317],[42.43074,-78.59337],
[42.43076,-78.59348],[42.43087,-78.59374],[42.43093,-78.59414],[42.431,-78.59432],[42.431,-78.59461],[42.43104,-78.59478],[42.4311,-78.59485],[42.43125,-78.5949],[42.43146,-78.59522],[42.43154,-78.59528],
[42.4317,-78.5955],[42.4318,-78.59571],[42.43198,-78.59591],[42.43211,-78.59594],[42.4322,-78.59604],[42.43223,-78.59621],[42.43229,-78.5963],[42.43232,-78.59642],[42.4323,-78.59646],[42.43236,-78.59659],
[42.43236,-78.59665],[42.4323,-78.59671],[42.43229,-78.59695],[42.43237,-78.5971],[42.43239,-78.59719],[42.43247,-78.59731],[42.43255,-78.59732],[42.43261,-78.59738],[42.43278,-78.59778],[42.43274,-78.59808],
[42.43278,-78.5982],[42.43277,-78.59841],[42.4328,-78.59852],[42.43278,-78.59857],[42.43282,-78.59864],[42.43276,-78.59883],[42.43278,-78.59905],[42.43272,-78.59949],[42.43285,-78.59963],[42.43339,-78.59961],
[42.43355,-78.59966],[42.43386,-78.59963],[42.43396,-78.59954],[42.43439,-78.59958],[42.43551,-78.59955],[42.43572,-78.59952],[42.43582,-78.59963],[42.43615,-78.59974],[42.43626,-78.59981],[42.43662,-78.5999],
[42.43712,-78.60025],[42.43717,-78.60017],[42.43725,-78.59994],[42.43737,-78.59986],[42.43747,-78.59966],[42.43749,-78.59954],[42.43758,-78.59941],[42.43809,-78.59942],[42.43839,-78.59951],[42.43852,-78.59945],
[42.43874,-78.59951],[42.43885,-78.5995],[42.43899,-78.59954],[42.43896,-78.59951],[42.43897,-78.59939],[42.43929,-78.59945],[42.43962,-78.59941],[42.43976,-78.59949],[42.43978,-78.59957],[42.43994,-78.59982],
[42.43997,-78.59997],[42.43995,-78.60013],[42.44003,-78.60028],[42.43998,-78.60035],[42.43994,-78.60072],[42.43997,-78.60082],[42.43997,-78.60099],[42.44011,-78.60144],[42.44023,-78.60157],[42.4405,-78.60206] ] });
trk_segments[t].push({ points:[[42.4405,-78.60206],
[42.44057,-78.60212],[42.44073,-78.60215],[42.44086,-78.60212],[42.44113,-78.60229],[42.44121,-78.60222],[42.4413,-78.60224],[42.4414,-78.60218],[42.44158,-78.60217],[42.44172,-78.60212],[42.44196,-78.60214],
[42.44219,-78.6023],[42.44242,-78.60221],[42.44267,-78.60217],[42.44285,-78.60202],[42.44297,-78.60175],[42.44309,-78.60156],[42.4432,-78.6015],[42.44332,-78.60149],[42.44353,-78.60135],[42.44373,-78.60129],
[42.44383,-78.60109],[42.44393,-78.60106],[42.4445,-78.60064],[42.44453,-78.60056],[42.44459,-78.60057],[42.44471,-78.60049],[42.44506,-78.60017],[42.44511,-78.60017],[42.44533,-78.60035],[42.44557,-78.60041],
[42.44585,-78.60038],[42.44598,-78.60044],[42.44635,-78.60045],[42.44652,-78.60066],[42.44663,-78.60066],[42.44672,-78.60061],[42.447,-78.60032],[42.447,-78.60022],[42.44715,-78.60006],[42.44726,-78.59966],
[42.44738,-78.59948],[42.44755,-78.59985],[42.44759,-78.60013],[42.44762,-78.60155],[42.44751,-78.60276],[42.44745,-78.60294],[42.44729,-78.60317]
 ] }); GV_Draw_Track(t);

t =  475 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C04X5HntClose - 1.26 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.37779,-78.59369],[42.37786,-78.59368],[42.37791,-78.59368],[42.37795,-78.59366],[42.378,-78.59364],[42.37806,-78.59363],[42.37811,-78.59361],[42.37816,-78.5936],[42.37821,-78.59359],[42.37825,-78.59358],
[42.3783,-78.59358],[42.37835,-78.59357],[42.37839,-78.59356],[42.37843,-78.59355],[42.37847,-78.59354],[42.37851,-78.59354],[42.37857,-78.59354],[42.37861,-78.59354],[42.37865,-78.59354],[42.37869,-78.59354],
[42.37873,-78.59354],[42.37877,-78.59353],[42.37881,-78.59353],[42.37887,-78.59353],[42.37891,-78.59353],[42.37896,-78.59353],[42.37899,-78.59352],[42.37904,-78.59352],[42.37907,-78.59352],[42.37913,-78.59352],
[42.37918,-78.59352],[42.37923,-78.59352],[42.37928,-78.59352],[42.37934,-78.59352],[42.3794,-78.59351],[42.37949,-78.59351],[42.37954,-78.5935],[42.37959,-78.59348],[42.37964,-78.59347],[42.37969,-78.59346],
[42.37973,-78.59345],[42.37978,-78.59344],[42.37983,-78.59342],[42.37987,-78.59341],[42.37992,-78.5934],[42.37997,-78.59339],[42.38001,-78.59337],[42.38006,-78.59335],[42.38011,-78.59334],[42.38016,-78.59332],
[42.38021,-78.5933],[42.38025,-78.59327],[42.3803,-78.59324],[42.38035,-78.59321],[42.38039,-78.59319],[42.38043,-78.59315],[42.38047,-78.5931],[42.3805,-78.59305],[42.38054,-78.59299],[42.38057,-78.59294],
[42.38059,-78.59289],[42.38061,-78.59283],[42.38062,-78.59276],[42.38062,-78.5927],[42.38062,-78.59264],[42.38063,-78.59257],[42.38062,-78.5925],[42.38063,-78.59243],[42.38063,-78.59236],[42.38062,-78.59229],
[42.38064,-78.59222],[42.38064,-78.59215],[42.38064,-78.59207],[42.38065,-78.59201],[42.38066,-78.59194],[42.38066,-78.59187],[42.38066,-78.59181],[42.38066,-78.59174],[42.38066,-78.59167],[42.38066,-78.59161],
[42.38066,-78.59153],[42.38067,-78.59146],[42.38067,-78.5914],[42.38067,-78.59133],[42.38067,-78.59126],[42.38068,-78.59119],[42.38068,-78.59112],[42.38068,-78.59105],[42.38067,-78.59099],[42.38068,-78.59093],
[42.38068,-78.59087],[42.38067,-78.5908],[42.38066,-78.59073],[42.38064,-78.59066],[42.38065,-78.59061],[42.38065,-78.59054],[42.38065,-78.59047],[42.38064,-78.5904],[42.38064,-78.59032],[42.38063,-78.59025],
[42.38064,-78.5902],[42.38065,-78.59012],[42.38066,-78.59005],[42.38066,-78.58998],[42.38067,-78.58991],[42.38067,-78.58984],[42.38067,-78.58977],[42.38067,-78.5897],[42.38067,-78.58964],[42.38067,-78.58958],
[42.38068,-78.58952],[42.38068,-78.58946],[42.38068,-78.58939],[42.38068,-78.58933],[42.38069,-78.58926],[42.3807,-78.5892],[42.3807,-78.58913],[42.38071,-78.58905],[42.38073,-78.58896],[42.38073,-78.58889],
[42.38074,-78.58881],[42.38074,-78.58874],[42.38074,-78.58867],[42.38074,-78.58861],[42.38075,-78.58854],[42.38076,-78.58848],[42.38076,-78.5884],[42.38076,-78.58833],[42.38076,-78.58826],[42.38076,-78.58819],
[42.38076,-78.58812],[42.38076,-78.58805],[42.38076,-78.58799],[42.38076,-78.58791],[42.38076,-78.58784],[42.38075,-78.58777],[42.38076,-78.58769],[42.38077,-78.58763],[42.38078,-78.58757],[42.38079,-78.58752],
[42.38079,-78.58746],[42.38078,-78.58739],[42.38077,-78.58731],[42.38077,-78.58724],[42.38076,-78.58716],[42.38075,-78.5871],[42.38074,-78.58703],[42.38074,-78.58697],[42.38072,-78.58691],[42.38073,-78.58684],
[42.38074,-78.58677],[42.38075,-78.5867],[42.38075,-78.58663],[42.38075,-78.58655],[42.38075,-78.58648],[42.38075,-78.58641],[42.38075,-78.58634],[42.38076,-78.58627],[42.38076,-78.5862],[42.38076,-78.58613],
[42.38077,-78.58605],[42.38077,-78.58598],[42.38077,-78.58591],[42.38078,-78.58584],[42.38078,-78.58576],[42.38079,-78.58569],[42.3808,-78.58562],[42.38079,-78.58554],[42.38079,-78.58548],[42.38078,-78.58541],
[42.38078,-78.58534],[42.38078,-78.58528],[42.38078,-78.58521],[42.38077,-78.58514],[42.38077,-78.58507],[42.38077,-78.585],[42.38076,-78.58494],[42.38076,-78.58487],[42.38077,-78.58481],[42.38077,-78.58474],
[42.38076,-78.58467],[42.38075,-78.5846],[42.38075,-78.58453],[42.38076,-78.58447],[42.38076,-78.58442],[42.38076,-78.58435],[42.38075,-78.58428],[42.38076,-78.58422],[42.38078,-78.58415],[42.38079,-78.58409],
[42.3808,-78.58402],[42.3808,-78.58396],[42.3808,-78.58391],[42.38081,-78.58385],[42.38081,-78.58378],[42.38081,-78.58371],[42.3808,-78.58364],[42.38081,-78.58358],[42.38084,-78.58349],[42.38086,-78.58343] ] });
trk_segments[t].push({ points:[[42.38086,-78.58343],
[42.38089,-78.58335],[42.3809,-78.58329],[42.38093,-78.58323],[42.38095,-78.58316],[42.38097,-78.58309],[42.381,-78.58304],[42.38101,-78.58298],[42.38102,-78.58291],[42.38103,-78.58285],[42.38104,-78.58279],
[42.38107,-78.58273],[42.38108,-78.58267],[42.38108,-78.5826],[42.38112,-78.58253],[42.38115,-78.58247],[42.38117,-78.58241],[42.38118,-78.58235],[42.38119,-78.58229],[42.38119,-78.58223],[42.3812,-78.58217],
[42.38123,-78.58212],[42.38126,-78.58207],[42.38129,-78.58202],[42.38132,-78.58196],[42.38135,-78.5819],[42.38137,-78.58185],[42.38139,-78.5818],[42.38142,-78.58175],[42.38144,-78.58169],[42.38147,-78.58164],
[42.38149,-78.58159],[42.38152,-78.58153],[42.38154,-78.58147],[42.38157,-78.58141],[42.38157,-78.58135],[42.3816,-78.5813],[42.38163,-78.58125],[42.38165,-78.5812],[42.38168,-78.58115],[42.3817,-78.5811],
[42.38171,-78.58104],[42.38172,-78.58098],[42.38173,-78.58092],[42.38174,-78.58086],[42.38175,-78.5808],[42.38177,-78.58074],[42.38178,-78.58068],[42.3818,-78.58065],[42.38183,-78.58065],[42.38187,-78.58065],
[42.3819,-78.58064],[42.38195,-78.58064],[42.38198,-78.58062],[42.38202,-78.58058],[42.38203,-78.58053],[42.38204,-78.58047],[42.38207,-78.58042],[42.38211,-78.58041],[42.38215,-78.58039],[42.38219,-78.58043],
[42.38222,-78.58047],[42.38227,-78.5805],[42.38232,-78.58052],[42.38237,-78.58055],[42.38242,-78.58055],[42.38248,-78.58055],[42.38253,-78.58053],[42.38257,-78.5805],[42.38262,-78.5805],[42.38266,-78.58051],
[42.38271,-78.58052],[42.38276,-78.58053],[42.3828,-78.58054],[42.38285,-78.58054],[42.38289,-78.58054],[42.38294,-78.58053],[42.38299,-78.58054],[42.38303,-78.58054],[42.38308,-78.58053],[42.38313,-78.58053],
[42.38317,-78.58053],[42.38321,-78.58052],[42.38325,-78.58052],[42.38329,-78.58051],[42.38333,-78.5805],[42.38337,-78.58046],[42.38341,-78.58042],[42.38344,-78.58037],[42.38347,-78.58032],[42.38349,-78.58027],
[42.38352,-78.58022],[42.38355,-78.58018],[42.38356,-78.58013],[42.38357,-78.58007],[42.38358,-78.58001],[42.3836,-78.57997],[42.38362,-78.57991],[42.38366,-78.57991],[42.38371,-78.57993],[42.38377,-78.57994],
[42.38382,-78.57994],[42.38386,-78.57997],[42.3839,-78.58],[42.38395,-78.58002],[42.384,-78.58],[42.38406,-78.57999],[42.3841,-78.57999],[42.38416,-78.57997],[42.38423,-78.57997],[42.38431,-78.58],
[42.38433,-78.58004],[42.38437,-78.58009],[42.38442,-78.58014],[42.38445,-78.58017],[42.3845,-78.58021],[42.38454,-78.58027],[42.38454,-78.58035],[42.38456,-78.58044],[42.38455,-78.58051],[42.38456,-78.58058],
[42.3846,-78.58065],[42.38466,-78.58072],[42.38469,-78.5808],[42.38468,-78.58088],[42.38468,-78.58094],[42.38468,-78.58103],[42.38466,-78.58113],[42.38465,-78.5812],[42.38466,-78.58131],[42.38467,-78.58139],
[42.3847,-78.58146],[42.38474,-78.58151],[42.3848,-78.58158],[42.38485,-78.58167],[42.38488,-78.58172],[42.38495,-78.58182],[42.38499,-78.58188],[42.38503,-78.58192],[42.38508,-78.58194],[42.38514,-78.58198],
[42.38519,-78.58203],[42.38523,-78.58209],[42.38528,-78.58215],[42.38532,-78.58221],[42.38535,-78.58226],[42.3854,-78.58232],[42.38545,-78.58238],[42.38551,-78.58243],[42.38556,-78.58248],[42.38561,-78.58254],
[42.38566,-78.58256],[42.38571,-78.5826],[42.38576,-78.58264],[42.38582,-78.58268],[42.38585,-78.58273],[42.3859,-78.58276],[42.38594,-78.58282],[42.38595,-78.58292],[42.38597,-78.58299]
 ] }); GV_Draw_Track(t);

t =  476 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">CT04 map coverage - 1.26 miles ( 12 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.47034,-78.50819],[42.47034,-78.65904],[42.3141,-78.65904],[42.3141,-78.50819],[42.47034,-78.50819]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.44736,lon:-78.60314,color:'',dd:true
,name:'Access 1: Gooseneck Rd (CR-55)',desc:'Wide shoulder parking<br /><br />Location: <b>42.4474, -78.6031  or N42 26.8417 W78 36.1886</b><br /><br />This is <b>Map CT5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.47927,lon:-78.59789,color:'',dd:true
,name:'Access 2: Folts Rd',desc:'Limited shoulder parking<br /><br />Location: <b>42.4793, -78.5979  or N42 28.7563 W78 35.8734</b><br /><br />This is <b>Map CT5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.51481,lon:-78.58234,color:'',dd:true
,name:'Access 3: NY-39 (Springville Sardinia Hwy)',desc:'Large parking area for 12 vehicles<br /><br />Location: <b>42.5148, -78.5823  or N42 30.8887 W78 34.9407</b><br /><br />This is <b>Map CT5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.52934,lon:-78.58217,color:'',dd:true
,name:'Access 4: Middle Rd',desc:'Limited shoulder parking<br /><br />Location: <b>42.5293, -78.5822  or N42 31.7605 W78 34.93</b><br /><br />This is <b>Map CT5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.5509,lon:-78.57056,color:'',dd:true
,name:'Access 5: Genesee Rd',desc:'Good offroad parking for 10 vehicles at Erie Co. Forest, restrooms (when open), pavilion, picnic tables<br /><br />Location: <b>42.5509, -78.5706  or N42 33.0543 W78 34.2335</b><br /><br />This is <b>Map CT5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.57281,lon:-78.56909,color:'',dd:true
,name:'Access 6: Allen Rd',desc:'Limited shoulder parking on N side of road<br /><br />Location: <b>42.5728, -78.5691  or N42 34.3688 W78 34.1452</b><br /><br />This is <b>Map CT5</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.56608,lon:-78.56736,color:''
,name:'Spring&Fall hunting closure',desc:'Hunting closure May 1 - May 31 and Oct 1 - Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT5\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.5661, -78.5674  or N42 33.9646 W78 34.0415</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.48157,lon:-78.59587,color:''
,name:'Spring&Fall hunting closure',desc:'Hunting closure May 1 - May 31 and Oct 1 - Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT5\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.4816, -78.5959  or N42 28.8943 W78 35.7519</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.56931,lon:-78.63467,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "CT5 - Erie County Forest"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Jul 26, 2017</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT05\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CT05.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map CT5 shows the Conservation Trail in Cattaraugus-Erie counties from Gooseneck Rd (CR-55) to Allen Rd. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT5\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});

t =  477 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C05HBP01 - 2.41 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.57301,-78.55124],[42.55111,-78.55186],[42.55088,-78.56943]
 ] }); GV_Draw_Track(t);

t =  478 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C05HBP02 - 0.47 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.47936,-78.59788],[42.47937,-78.59238],[42.47952,-78.59223],[42.47968,-78.59215],[42.48209,-78.59175]
 ] }); GV_Draw_Track(t);

t =  479 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C05TF - 11.55 miles (orange blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT05\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/CT05.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.44733,-78.60312],[42.44764,-78.60326],[42.45043,-78.60325],[42.45118,-78.60322],[42.45345,-78.60325],[42.45415,-78.60332],[42.45441,-78.60339],[42.45541,-78.6038],[42.45576,-78.60398],[42.4561,-78.6042],
[42.45612,-78.60423],[42.45617,-78.60422],[42.45648,-78.60432],[42.45735,-78.6045],[42.45903,-78.60456],[42.45968,-78.60455],[42.46081,-78.60459],[42.46104,-78.60463],[42.46223,-78.60464],[42.46248,-78.60467],
[42.46314,-78.60467],[42.46372,-78.60474],[42.46481,-78.60474],[42.46599,-78.60482],[42.46623,-78.60487],[42.46637,-78.60486],[42.46696,-78.60491],[42.46744,-78.6049],[42.46816,-78.60496],[42.46834,-78.60495],
[42.46905,-78.60499],[42.47018,-78.605],[42.47051,-78.60497],[42.47108,-78.60482],[42.47158,-78.60462],[42.47253,-78.60436],[42.47291,-78.60428],[42.47381,-78.60417],[42.47472,-78.60413],[42.47528,-78.60418],
[42.47602,-78.60433],[42.47611,-78.60433],[42.4771,-78.6045],[42.47768,-78.60452],[42.47893,-78.60473],[42.47935,-78.60486],[42.47943,-78.60485],[42.4795,-78.6048],[42.47955,-78.6047],[42.47955,-78.60345],
[42.47958,-78.6022],[42.47956,-78.602],[42.47956,-78.60145],[42.47953,-78.60074],[42.47947,-78.6002],[42.47948,-78.60008],[42.47942,-78.59942],[42.47941,-78.59909],[42.47938,-78.59894],[42.47933,-78.59791],
[42.47935,-78.59788],[42.47941,-78.59791],[42.47963,-78.59768],[42.47961,-78.5977],[42.47972,-78.59758],[42.47973,-78.59751],[42.4797,-78.59746],[42.47977,-78.5974],[42.47982,-78.59746],[42.47989,-78.59732],
[42.47989,-78.59706],[42.47995,-78.59689],[42.48009,-78.59677],[42.48023,-78.59676],[42.48026,-78.59669],[42.48032,-78.59669],[42.4804,-78.59661],[42.48043,-78.59648],[42.4805,-78.59636],[42.48059,-78.5961],
[42.48065,-78.59602],[42.48074,-78.59596],[42.48082,-78.59598],[42.48095,-78.59629],[42.48105,-78.59605],[42.4811,-78.59601],[42.48128,-78.59595],[42.48133,-78.59591],[42.48136,-78.59579],[42.4814,-78.59577],
[42.48159,-78.59598],[42.48163,-78.59611],[42.48168,-78.59617],[42.48178,-78.59619],[42.48205,-78.59645],[42.48217,-78.59649],[42.48223,-78.59646],[42.48224,-78.59628],[42.48219,-78.59612],[42.48215,-78.5958],
[42.48217,-78.59566],[42.48212,-78.59531],[42.48209,-78.59527],[42.48208,-78.59521],[42.4821,-78.59515],[42.48211,-78.59495],[42.48209,-78.59489],[42.48207,-78.59471],[42.48211,-78.59455],[42.48205,-78.59203],
[42.48208,-78.59189],[42.48208,-78.59171],[42.48241,-78.5916],[42.48274,-78.59144],[42.48353,-78.59099],[42.48381,-78.59086],[42.48405,-78.5908],[42.48458,-78.59075],[42.48724,-78.59079],[42.48741,-78.59075],
[42.48748,-78.5907],[42.48752,-78.59055],[42.48757,-78.58504],[42.48766,-78.58354],[42.48772,-78.58335],[42.48784,-78.58319],[42.48915,-78.5831],[42.49027,-78.5831],[42.49987,-78.58288],[42.50016,-78.58292],
[42.50064,-78.58305],[42.50071,-78.5831],[42.50112,-78.58317],[42.50149,-78.58315],[42.50215,-78.58289],[42.50249,-78.5828],[42.50293,-78.58274],[42.50363,-78.58282],[42.50431,-78.58281],[42.50624,-78.58268],
[42.5065,-78.58268],[42.5068,-78.58276],[42.50706,-78.58294],[42.50757,-78.58341],[42.50792,-78.58356],[42.50818,-78.58361],[42.50836,-78.58359],[42.50874,-78.5835],[42.50899,-78.58339],[42.51018,-78.58304],
[42.51033,-78.58303],[42.51104,-78.58278],[42.51136,-78.5826],[42.51158,-78.58244],[42.5118,-78.58232],[42.51206,-78.58233],[42.51252,-78.58244],[42.51467,-78.58244],[42.51474,-78.58246],[42.5148,-78.58258],
[42.51476,-78.58309],[42.51476,-78.5836],[42.51465,-78.58441],[42.51459,-78.5847],[42.51424,-78.58579],[42.51412,-78.58632],[42.51405,-78.58696],[42.51405,-78.58731],[42.51408,-78.5878],[42.51431,-78.58792],
[42.51453,-78.58795],[42.51476,-78.58793],[42.51521,-78.58796],[42.5155,-78.58793],[42.51637,-78.58771],[42.51668,-78.58772],[42.5172,-78.58779],[42.51765,-78.58795],[42.51834,-78.58815],[42.5188,-78.5882],
[42.51905,-78.58818],[42.51954,-78.58803],[42.51989,-78.58803],[42.52006,-78.58799],[42.52054,-78.58795],[42.5209,-78.58786],[42.52148,-78.58777],[42.52233,-78.58755],[42.52244,-78.58748],[42.52286,-78.5874],
[42.52514,-78.58684],[42.52852,-78.58663],[42.52951,-78.58662],[42.52945,-78.58535],[42.52935,-78.58218],[42.52943,-78.58216],[42.52966,-78.58228],[42.53008,-78.58241],[42.53037,-78.58247],[42.53049,-78.58252] ] });
trk_segments[t].push({ points:[[42.53049,-78.58252],
[42.5307,-78.58256],[42.53093,-78.58268],[42.5312,-78.58304],[42.53141,-78.5831],[42.53165,-78.58324],[42.53235,-78.58327],[42.53275,-78.58323],[42.53289,-78.58324],[42.53333,-78.58317],[42.53374,-78.58318],
[42.53383,-78.58315],[42.53399,-78.58317],[42.53426,-78.58311],[42.53438,-78.58305],[42.53448,-78.58296],[42.53469,-78.58284],[42.53494,-78.58261],[42.5351,-78.58237],[42.53516,-78.58208],[42.5353,-78.58186],
[42.5355,-78.58164],[42.53559,-78.58148],[42.53561,-78.58138],[42.53559,-78.58127],[42.53563,-78.5813],[42.5357,-78.5813],[42.53572,-78.58125],[42.53565,-78.58104],[42.53567,-78.58093],[42.53577,-78.58069],
[42.53602,-78.58055],[42.53605,-78.58051],[42.53608,-78.58038],[42.53605,-78.58025],[42.53589,-78.58003],[42.53575,-78.57995],[42.53574,-78.57989],[42.53575,-78.57957],[42.53585,-78.57936],[42.53588,-78.57923],
[42.53598,-78.57903],[42.53599,-78.57896],[42.53623,-78.57828],[42.53636,-78.57778],[42.53639,-78.57746],[42.53646,-78.57729],[42.53648,-78.57716],[42.53658,-78.5769],[42.53673,-78.57669],[42.53685,-78.57656],
[42.53703,-78.57646],[42.53721,-78.57627],[42.53731,-78.57607],[42.53739,-78.57599],[42.53746,-78.57588],[42.53773,-78.57576],[42.53777,-78.57579],[42.53795,-78.57572],[42.53802,-78.57562],[42.538,-78.57536],
[42.53806,-78.57527],[42.53809,-78.57517],[42.53801,-78.57467],[42.53799,-78.57459],[42.538,-78.57441],[42.53814,-78.57411],[42.53813,-78.57401],[42.53815,-78.57392],[42.53822,-78.57385],[42.53848,-78.57381],
[42.53859,-78.57363],[42.53872,-78.57336],[42.53871,-78.57324],[42.53875,-78.57316],[42.53873,-78.57234],[42.53878,-78.57224],[42.53885,-78.57215],[42.53895,-78.5721],[42.53954,-78.57213],[42.53963,-78.5722],
[42.54015,-78.57206],[42.54022,-78.57213],[42.54029,-78.57237],[42.54065,-78.57291],[42.54073,-78.57296],[42.54078,-78.57295],[42.54094,-78.57277],[42.54081,-78.57271],[42.54069,-78.57236],[42.54064,-78.57198],
[42.54054,-78.57177],[42.54052,-78.57162],[42.54055,-78.5715],[42.54048,-78.57121],[42.54043,-78.57108],[42.54027,-78.57089],[42.54014,-78.57066],[42.54012,-78.57056],[42.54016,-78.57043],[42.54016,-78.57009],
[42.54026,-78.56988],[42.54043,-78.56975],[42.54065,-78.56979],[42.54091,-78.56979],[42.54104,-78.56974],[42.54108,-78.56977],[42.5412,-78.56977],[42.54127,-78.56973],[42.54139,-78.56978],[42.54141,-78.56982],
[42.54159,-78.56992],[42.54169,-78.56982],[42.54182,-78.5698],[42.54187,-78.56963],[42.54186,-78.56935],[42.5419,-78.56925],[42.5419,-78.56889],[42.54195,-78.56869],[42.54201,-78.56857],[42.54219,-78.56847],
[42.54265,-78.56856],[42.54302,-78.56858],[42.54324,-78.56855],[42.5436,-78.5686],[42.54381,-78.56879],[42.54396,-78.56886],[42.54414,-78.56884],[42.54441,-78.56896],[42.5446,-78.56899],[42.54474,-78.56897],
[42.54499,-78.56901],[42.54502,-78.56931],[42.54502,-78.56958],[42.5451,-78.56964],[42.54542,-78.56966],[42.5456,-78.5696],[42.54602,-78.56961],[42.54618,-78.56956],[42.54714,-78.56955],[42.54768,-78.56949],
[42.54772,-78.56951],[42.54812,-78.56947],[42.54823,-78.56949],[42.54841,-78.56948],[42.54851,-78.56936],[42.5487,-78.56931],[42.54906,-78.56928],[42.54926,-78.5693],[42.5495,-78.56926],[42.54957,-78.56935],
[42.54962,-78.56966],[42.5497,-78.56988],[42.54973,-78.57017],[42.5497,-78.57029],[42.54971,-78.57037],[42.54979,-78.5705],[42.55014,-78.57064],[42.55022,-78.5706],[42.55055,-78.57061],[42.55085,-78.57058],
[42.55103,-78.57031],[42.55122,-78.57025],[42.55134,-78.57017],[42.55164,-78.56983],[42.55169,-78.56972],[42.55169,-78.56962],[42.55173,-78.56946],[42.55172,-78.56938],[42.55169,-78.56932],[42.55183,-78.56882],
[42.55185,-78.56842],[42.55191,-78.56821],[42.55212,-78.56813],[42.55226,-78.56797],[42.55233,-78.56781],[42.55233,-78.56766],[42.5523,-78.56759],[42.55235,-78.56747],[42.55248,-78.56727],[42.55252,-78.56725],
[42.55264,-78.56699],[42.55273,-78.56691],[42.55286,-78.56687],[42.55298,-78.56688],[42.55308,-78.56694],[42.55316,-78.56705],[42.55327,-78.5671],[42.55364,-78.56742],[42.5537,-78.56756],[42.55378,-78.56768],
[42.55385,-78.56783],[42.55393,-78.56795],[42.55428,-78.56827],[42.55464,-78.56821],[42.5548,-78.56812],[42.55487,-78.56814],[42.55499,-78.56826],[42.55511,-78.56831],[42.55549,-78.56833],[42.55554,-78.56838] ] });
trk_segments[t].push({ points:[[42.55554,-78.56838],
[42.55567,-78.56836],[42.55581,-78.5682],[42.55602,-78.56803],[42.55624,-78.56799],[42.55627,-78.56793],[42.5565,-78.56774],[42.55658,-78.56762],[42.5566,-78.56746],[42.55663,-78.5674],[42.5567,-78.56735],
[42.55688,-78.56736],[42.55723,-78.56751],[42.55728,-78.56749],[42.55736,-78.56742],[42.55749,-78.56714],[42.5575,-78.56698],[42.55756,-78.56694],[42.55778,-78.56698],[42.55788,-78.56702],[42.55809,-78.56718],
[42.55841,-78.56738],[42.55854,-78.56741],[42.55869,-78.56757],[42.55874,-78.5676],[42.55883,-78.56752],[42.55901,-78.56742],[42.55915,-78.56731],[42.55929,-78.56702],[42.5594,-78.5669],[42.55959,-78.56688],
[42.55977,-78.56697],[42.5599,-78.56711],[42.55996,-78.56723],[42.56004,-78.56732],[42.5601,-78.56735],[42.56025,-78.56727],[42.5604,-78.56728],[42.56066,-78.56705],[42.56092,-78.56697],[42.56101,-78.567],
[42.56115,-78.56686],[42.56125,-78.56687],[42.56135,-78.56683],[42.56145,-78.56675],[42.56157,-78.5667],[42.56167,-78.56671],[42.56177,-78.56668],[42.56181,-78.56663],[42.56181,-78.56658],[42.5617,-78.56649],
[42.5617,-78.56642],[42.56177,-78.56623],[42.56182,-78.5662],[42.56227,-78.56616],[42.56247,-78.56617],[42.56256,-78.56615],[42.56274,-78.5662],[42.56286,-78.56632],[42.56325,-78.56646],[42.56346,-78.56644],
[42.56388,-78.56655],[42.56394,-78.56666],[42.56412,-78.56676],[42.5645,-78.56708],[42.56455,-78.56722],[42.56471,-78.56736],[42.56476,-78.56735],[42.56484,-78.56729],[42.56507,-78.56731],[42.56529,-78.56739],
[42.56542,-78.56738],[42.56553,-78.56731],[42.56558,-78.56731],[42.56574,-78.56721],[42.56581,-78.56721],[42.56604,-78.56737],[42.56612,-78.56759],[42.56619,-78.56775],[42.56636,-78.5679],[42.56651,-78.56815],
[42.56666,-78.5682],[42.56676,-78.56837],[42.56701,-78.56867],[42.56731,-78.56884],[42.56747,-78.56879],[42.56772,-78.56895],[42.56789,-78.569],[42.56855,-78.56895],[42.56876,-78.56899],[42.56902,-78.56898],
[42.56911,-78.56904],[42.56919,-78.56914],[42.5693,-78.56925],[42.56944,-78.56932],[42.56949,-78.56932],[42.56968,-78.56923],[42.57044,-78.56912],[42.57223,-78.56907],[42.57276,-78.56908],[42.5728,-78.56903]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.45454,lon:-78.60345,color:'orange',name:'C05TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 343 })
GV_Draw_Marker({lat:42.46164,lon:-78.60463,color:'orange',name:'C05TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 0 })
GV_Draw_Marker({lat:42.46887,lon:-78.60497,color:'orange',name:'C05TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 358 })
GV_Draw_Marker({lat:42.47603,lon:-78.60433,color:'orange',name:'C05TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 3 })
GV_Draw_Marker({lat:42.47945,lon:-78.59977,color:'orange',name:'C05TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 97 })
GV_Draw_Marker({lat:42.48211,lon:-78.59452,color:'orange',name:'C05TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 92 })
GV_Draw_Marker({lat:42.48712,lon:-78.59081,color:'orange',name:'C05TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 359 })
GV_Draw_Marker({lat:42.48909,lon:-78.5831,color:'orange',name:'C05TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 3 })
GV_Draw_Marker({lat:42.49633,lon:-78.58296,color:'orange',name:'C05TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 1 })
GV_Draw_Marker({lat:42.50351,lon:-78.58281,color:'orange',name:'C05TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 355 })
GV_Draw_Marker({lat:42.51052,lon:-78.58296,color:'orange',name:'C05TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 14 })
GV_Draw_Marker({lat:42.51413,lon:-78.58625,color:'orange',name:'C05TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 252 })
GV_Draw_Marker({lat:42.52008,lon:-78.58798,color:'orange',name:'C05TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 3 })
GV_Draw_Marker({lat:42.52723,lon:-78.58669,color:'orange',name:'C05TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 3 })
GV_Draw_Marker({lat:42.53097,lon:-78.58272,color:'orange',name:'C05TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 316 })
GV_Draw_Marker({lat:42.53576,lon:-78.57955,color:'orange',name:'C05TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 57 })
GV_Draw_Marker({lat:42.53909,lon:-78.57211,color:'orange',name:'C05TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 358 })
GV_Draw_Marker({lat:42.54196,lon:-78.56867,color:'orange',name:'C05TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 54 })
GV_Draw_Marker({lat:42.54861,lon:-78.56933,color:'orange',name:'C05TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 11 })
GV_Draw_Marker({lat:42.5533,lon:-78.56713,color:'orange',name:'C05TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 328 })
GV_Draw_Marker({lat:42.55929,lon:-78.56703,color:'orange',name:'C05TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 56 })
GV_Draw_Marker({lat:42.56551,lon:-78.56732,color:'orange',name:'C05TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 28 })
GV_Draw_Marker({lat:42.57211,lon:-78.56908,color:'orange',name:'C05TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 1 })

t =  480 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C05X1HntClose - 0.86 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.56167,-78.56671],[42.56177,-78.56668],[42.56181,-78.56663],[42.56181,-78.56658],[42.5617,-78.56649],[42.5617,-78.56642],[42.56177,-78.56623],[42.56182,-78.5662],[42.56227,-78.56616],[42.56247,-78.56617],
[42.56256,-78.56615],[42.56274,-78.5662],[42.56286,-78.56632],[42.56325,-78.56646],[42.56346,-78.56644],[42.56388,-78.56655],[42.56394,-78.56666],[42.56412,-78.56676],[42.5645,-78.56708],[42.56455,-78.56722],
[42.56471,-78.56736],[42.56476,-78.56735],[42.56484,-78.56729],[42.56507,-78.56731],[42.56529,-78.56739],[42.56542,-78.56738],[42.56553,-78.56731],[42.56558,-78.56731],[42.56574,-78.56721],[42.56581,-78.56721],
[42.56604,-78.56737],[42.56612,-78.56759],[42.56619,-78.56775],[42.56636,-78.5679],[42.56651,-78.56815],[42.56666,-78.5682],[42.56676,-78.56837],[42.56701,-78.56867],[42.56731,-78.56884],[42.56747,-78.56879],
[42.56772,-78.56895],[42.56789,-78.569],[42.56855,-78.56895],[42.56876,-78.56899],[42.56902,-78.56898],[42.56911,-78.56904],[42.56919,-78.56914],[42.5693,-78.56925],[42.56944,-78.56932],[42.56949,-78.56932],
[42.56968,-78.56923],[42.57044,-78.56912],[42.57223,-78.56907],[42.57276,-78.56908],[42.5728,-78.56903]
 ] }); GV_Draw_Track(t);

t =  481 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C05X2HntClose - 0.55 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.47933,-78.59791],[42.47935,-78.59788],[42.47941,-78.59791],[42.47963,-78.59768],[42.47961,-78.5977],[42.47972,-78.59758],[42.47973,-78.59751],[42.4797,-78.59746],[42.47977,-78.5974],[42.47982,-78.59746],
[42.47989,-78.59732],[42.47989,-78.59706],[42.47995,-78.59689],[42.48009,-78.59677],[42.48023,-78.59676],[42.48026,-78.59669],[42.48032,-78.59669],[42.4804,-78.59661],[42.48043,-78.59648],[42.4805,-78.59636],
[42.48059,-78.5961],[42.48065,-78.59602],[42.48074,-78.59596],[42.48082,-78.59598],[42.48095,-78.59629],[42.48105,-78.59605],[42.4811,-78.59601],[42.48128,-78.59595],[42.48133,-78.59591],[42.48136,-78.59579],
[42.4814,-78.59577],[42.48159,-78.59598],[42.48163,-78.59611],[42.48168,-78.59617],[42.48178,-78.59619],[42.48205,-78.59645],[42.48217,-78.59649],[42.48223,-78.59646],[42.48224,-78.59628],[42.48219,-78.59612],
[42.48215,-78.5958],[42.48217,-78.59566],[42.48212,-78.59531],[42.48209,-78.59527],[42.48208,-78.59521],[42.4821,-78.59515],[42.48211,-78.59495],[42.48209,-78.59489],[42.48207,-78.59471],[42.48211,-78.59455],
[42.48205,-78.59203],[42.48208,-78.59189],[42.48208,-78.59171]
 ] }); GV_Draw_Track(t);

t =  482 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">CT05 map coverage - 0.55 miles ( 12 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.58431,-78.50321],[42.58431,-78.65467],[42.42836,-78.65467],[42.42836,-78.50321],[42.58431,-78.50321]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.57282,lon:-78.56908,color:'',dd:true
,name:'Access 1: Allen Rd',desc:'Limited shoulder parking on N side of road<br /><br />Location: <b>42.5728, -78.5691  or N42 34.369 W78 34.145</b><br /><br />This is <b>Map CT6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.59486,lon:-78.55944,color:'',dd:true
,name:'Access 2: Matteson Corners Rd',desc:'Shoulder parking<br /><br />Location: <b>42.5949, -78.5594  or N42 35.6916 W78 33.5662</b><br /><br />This is <b>Map CT6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.61682,lon:-78.55052,color:'',dd:true
,name:'Access 3: Warner Gulf Rd',desc:'Wide shoulder parking<br /><br />Location: <b>42.6168, -78.5505  or N42 37.0092 W78 33.0315</b><br /><br />This is <b>Map CT6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.69942,lon:-78.55388,color:'',dd:true
,name:'Access 7: Carpenter Rd',desc:'Limited shoulder parking<br /><br />Location: <b>42.6994, -78.5539  or N42 41.9651 W78 33.2329</b><br /><br />This is <b>Map CT6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.59026,lon:-78.56434,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct 1 to Dec 22, Allen Rd. to Warner Gulf Rd.<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT6\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.5903, -78.5643  or N42 35.4157 W78 33.8606</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.65059,lon:-78.52979,color:''
,name:'Tent site',desc:'Picnic table only, no outhouse, no reliable water nearby<br /><br />Location: <b>42.6506, -78.5298  or N42 39.0354 W78 31.7876</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.62131,lon:-78.53899,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct 1 to Dec 22, Warner Gulf Rd. to NY Rte 16<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT6\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.6213, -78.539  or N42 37.2788 W78 32.3392</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.63733,lon:-78.52362,color:''
,name:'Fall hunting closure',desc:'Hunting closure: Oct 1-Dec. 22, NY Rte 16. to Vermont St<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT6\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.6373, -78.5236  or N42 38.2396 W78 31.4171</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.67083,lon:-78.54435,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct 1 to Dec 22, Vermont St to Carpenter Rd<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT6\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.6708, -78.5444  or N42 40.2499 W78 32.6611</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.63218,lon:-78.52969,color:'',dd:true
,name:'Holland Willows Tavern',desc:'Parking lot at tavern for many vehicles; park away from tavern<br /><br />Location: <b>42.6322, -78.5297  or N42 37.9309 W78 31.7815</b><br /><br />This is <b>Map CT6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.70869,lon:-78.58813,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "CT6 - Holland"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Aug 6, 2017</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT06\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CT06.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map CT6 shows the Conservation Trail in Erie County from Allen Rd to Warner Hill Rd. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT6\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.68191,lon:-78.53825,color:'',dd:true
,name:'Humphries Road near Vermont Hill Rd',desc:'Park here on shoulder away from homes for access to trail from Humphries Rd<br /><br />Location: <b>42.6819, -78.5382  or N42 40.9148 W78 32.2948</b><br /><br />This is <b>Map CT6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.6304,lon:-78.52428,color:'',dd:true
,name:'NY-16 (Olean Rd)',desc:'Shoulder parking<br /><br />Location: <b>42.6304, -78.5243  or N42 37.8238 W78 31.4569</b><br /><br />This is <b>Map CT6</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  483 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C06HBP01 - 3.08 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.57296,-78.55079],[42.58395,-78.55069],[42.59096,-78.55049],[42.59494,-78.5504],[42.59834,-78.5504],[42.60354,-78.5502],[42.6042,-78.55021],[42.60542,-78.55015],[42.60584,-78.55015],[42.60733,-78.55027],
[42.61002,-78.5503],[42.61149,-78.55039],[42.61313,-78.5497],[42.6143,-78.54962],[42.61524,-78.5497],[42.61592,-78.55003],[42.61627,-78.55018],[42.6169,-78.5507],[42.61732,-78.55072]
 ] }); GV_Draw_Track(t);

t =  484 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C06HBP02 - 2.46 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.62564,-78.55107],[42.62819,-78.55111],[42.62894,-78.54981],[42.62984,-78.5489],[42.63073,-78.54631],[42.63195,-78.54402],[42.63238,-78.54331],[42.6331,-78.5426],[42.63417,-78.54158],[42.63467,-78.5415],
[42.63516,-78.5417],[42.63649,-78.54241],[42.63906,-78.54379],[42.63973,-78.54347],[42.6403,-78.54312],[42.64074,-78.54241],[42.64175,-78.5406],[42.64204,-78.53985],[42.64233,-78.53859],[42.64328,-78.53591],
[42.64377,-78.53465],[42.64418,-78.53351],[42.64348,-78.53245],[42.64346,-78.53083],[42.64253,-78.52898],[42.64181,-78.52752],[42.64149,-78.52717],[42.64071,-78.52583],[42.64056,-78.52524],[42.64056,-78.52489],
[42.64082,-78.52473],[42.64195,-78.52489]
 ] }); GV_Draw_Track(t);

t =  485 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C06HBP03 - 4.19 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.6431,-78.52509],[42.64388,-78.52522],[42.64455,-78.52484],[42.64501,-78.52363],[42.64811,-78.52001],[42.64926,-78.52307],[42.65356,-78.52595],[42.65746,-78.52821],[42.65914,-78.52923],[42.66557,-78.53412],
[42.66897,-78.5361],[42.67105,-78.53765],[42.68125,-78.53758],[42.68162,-78.53763],[42.68198,-78.53761],[42.68727,-78.53765],[42.69033,-78.53781],[42.69259,-78.53887],[42.69805,-78.5399]
 ] }); GV_Draw_Track(t);

t =  486 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C06NatureTrl - 0.28 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.65006,-78.53013],[42.64972,-78.52965],[42.64968,-78.529],[42.65004,-78.52876],[42.65041,-78.52847],[42.65056,-78.52798],[42.65075,-78.52787],[42.65097,-78.52784],[42.65115,-78.52793],[42.65136,-78.52829],
[42.65143,-78.52849],[42.6516,-78.52927],[42.65168,-78.52949]
 ] }); GV_Draw_Track(t);

t =  487 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C06TF - 17.70 miles (orange blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT06\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/CT06.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.57282,-78.56907],[42.57291,-78.56568],[42.57318,-78.56559],[42.57372,-78.56565],[42.57378,-78.56575],[42.57391,-78.56573],[42.57391,-78.56543],[42.57487,-78.56527],[42.57524,-78.56533],[42.57555,-78.56531],
[42.57632,-78.56515],[42.57671,-78.56433],[42.57727,-78.56413],[42.57758,-78.56374],[42.57807,-78.56377],[42.57847,-78.56414],[42.57867,-78.5641],[42.57878,-78.56442],[42.57897,-78.56459],[42.5793,-78.56471],
[42.57938,-78.56482],[42.58047,-78.56522],[42.58088,-78.56513],[42.58131,-78.56481],[42.58155,-78.56485],[42.58188,-78.56469],[42.58207,-78.56477],[42.58256,-78.56535],[42.58285,-78.56544],[42.58336,-78.56535],
[42.58396,-78.56551],[42.5844,-78.56546],[42.58501,-78.56505],[42.58555,-78.56498],[42.58578,-78.56507],[42.58578,-78.56521],[42.586,-78.56541],[42.58666,-78.56525],[42.58708,-78.56527],[42.58728,-78.56512],
[42.58761,-78.56525],[42.58832,-78.56508],[42.58843,-78.56492],[42.58875,-78.56497],[42.58879,-78.56473],[42.5889,-78.56464],[42.58939,-78.56478],[42.59011,-78.56429],[42.59022,-78.56435],[42.59094,-78.5639],
[42.5913,-78.5639],[42.59142,-78.56404],[42.59223,-78.56349],[42.59244,-78.56306],[42.59324,-78.5629],[42.59357,-78.56255],[42.59367,-78.56194],[42.59361,-78.56119],[42.59425,-78.5597],[42.59466,-78.55949],
[42.59482,-78.55932],[42.59638,-78.5591],[42.59647,-78.55925],[42.59766,-78.55941],[42.59787,-78.55931],[42.59844,-78.55961],[42.59855,-78.56047],[42.59848,-78.56072],[42.59847,-78.56118],[42.59863,-78.56179],
[42.59997,-78.56192],[42.60025,-78.56238],[42.60035,-78.56241],[42.60075,-78.56195],[42.60097,-78.56201],[42.60173,-78.56255],[42.60223,-78.56314],[42.60296,-78.56313],[42.60331,-78.56336],[42.60356,-78.56399],
[42.60355,-78.5646],[42.6041,-78.56442],[42.60454,-78.56403],[42.60525,-78.56399],[42.60548,-78.56433],[42.6059,-78.56472],[42.60603,-78.56498],[42.60615,-78.56574],[42.60602,-78.56666],[42.60605,-78.56689],
[42.60599,-78.56731],[42.60643,-78.56735],[42.60681,-78.56752],[42.6072,-78.56731],[42.60804,-78.5676],[42.60845,-78.56788],[42.60898,-78.56741],[42.6093,-78.56732],[42.60982,-78.56749],[42.61011,-78.56736],
[42.61131,-78.56564],[42.61181,-78.56508],[42.61205,-78.56493],[42.6123,-78.5646],[42.61268,-78.56381],[42.61294,-78.56346],[42.61313,-78.56303],[42.61322,-78.56201],[42.61334,-78.56187],[42.61377,-78.56166],
[42.61406,-78.56138],[42.61434,-78.5609],[42.61447,-78.56038],[42.61479,-78.56011],[42.61492,-78.5598],[42.61543,-78.55956],[42.61563,-78.55928],[42.61581,-78.55848],[42.6161,-78.55788],[42.61633,-78.55765],
[42.61653,-78.55687],[42.61656,-78.5563],[42.61644,-78.556],[42.61705,-78.5527],[42.61747,-78.5519],[42.61767,-78.55118],[42.61733,-78.55071],[42.61737,-78.55063],[42.61824,-78.55079],[42.61962,-78.55056],
[42.62121,-78.55079],[42.6256,-78.55092],[42.6256,-78.54994],[42.62528,-78.54951],[42.62447,-78.54905],[42.62416,-78.54875],[42.62389,-78.54884],[42.6229,-78.54876],[42.62257,-78.54864],[42.62265,-78.54775],
[42.62241,-78.54747],[42.62242,-78.54662],[42.6223,-78.54566],[42.62191,-78.54445],[42.62169,-78.54334],[42.62156,-78.54304],[42.62133,-78.54293],[42.6212,-78.543],[42.62104,-78.54285],[42.62068,-78.54153],
[42.62066,-78.5411],[42.6208,-78.53996],[42.62119,-78.53916],[42.62132,-78.5382],[42.62138,-78.5362],[42.62152,-78.5359],[42.62193,-78.53591],[42.62244,-78.53559],[42.62304,-78.53503],[42.62334,-78.53456],
[42.62391,-78.5343],[42.62435,-78.53424],[42.62497,-78.53334],[42.6252,-78.53321],[42.62524,-78.53304],[42.62512,-78.53243],[42.6252,-78.53184],[42.62563,-78.5318],[42.62577,-78.53168],[42.62554,-78.5312],
[42.62536,-78.53102],[42.62502,-78.5304],[42.62494,-78.5301],[42.62495,-78.52964],[42.62527,-78.52925],[42.62553,-78.52868],[42.62813,-78.52853],[42.62877,-78.52863],[42.62991,-78.52908],[42.63001,-78.52886],
[42.62978,-78.52808],[42.62986,-78.52793],[42.6298,-78.52756],[42.62987,-78.52738],[42.62956,-78.52683],[42.62977,-78.52651],[42.62977,-78.5264],[42.62947,-78.52599],[42.62928,-78.52519],[42.62924,-78.52448],
[42.62907,-78.52417],[42.62954,-78.52366],[42.63023,-78.52432],[42.63039,-78.52428],[42.63063,-78.5246],[42.63087,-78.52458],[42.63121,-78.524],[42.63126,-78.52348],[42.63158,-78.52293],[42.6321,-78.52239] ] });
trk_segments[t].push({ points:[[42.6321,-78.52239],
[42.63263,-78.52252],[42.63281,-78.5224],[42.6332,-78.52277],[42.6335,-78.52223],[42.63375,-78.52217],[42.63402,-78.5219],[42.63412,-78.52201],[42.63419,-78.52267],[42.63436,-78.52286],[42.63439,-78.52302],
[42.63456,-78.52316],[42.6346,-78.52335],[42.63471,-78.52316],[42.63484,-78.5231],[42.63516,-78.5232],[42.6353,-78.52394],[42.63543,-78.52386],[42.63595,-78.52397],[42.63618,-78.52378],[42.63662,-78.5237],
[42.63687,-78.52381],[42.63745,-78.52357],[42.63776,-78.52367],[42.63784,-78.52392],[42.63805,-78.52386],[42.63851,-78.52428],[42.63863,-78.52418],[42.63885,-78.52372],[42.63929,-78.52364],[42.63935,-78.52347],
[42.63963,-78.52338],[42.63987,-78.5236],[42.64,-78.52349],[42.64059,-78.52174],[42.64084,-78.52132],[42.64112,-78.52116],[42.6413,-78.52124],[42.64154,-78.52158],[42.64167,-78.52149],[42.64201,-78.52158],
[42.642,-78.52325],[42.64207,-78.52367],[42.64194,-78.52433],[42.642,-78.52462],[42.64195,-78.52487],[42.64308,-78.52508],[42.64321,-78.52546],[42.64303,-78.52683],[42.64352,-78.52753],[42.6437,-78.52764],
[42.64382,-78.52786],[42.64395,-78.52776],[42.64405,-78.52802],[42.6445,-78.52861],[42.64488,-78.52886],[42.64516,-78.52862],[42.64568,-78.52865],[42.64576,-78.52873],[42.64578,-78.52866],[42.64607,-78.52904],
[42.64658,-78.52919],[42.64735,-78.52967],[42.64758,-78.52969],[42.64807,-78.52999],[42.64821,-78.52998],[42.64852,-78.52924],[42.64863,-78.52957],[42.64866,-78.52951],[42.64874,-78.52964],[42.64874,-78.52991],
[42.64892,-78.53033],[42.64947,-78.5306],[42.64997,-78.53029],[42.65029,-78.52995],[42.65066,-78.52981],[42.65113,-78.52991],[42.65161,-78.5294],[42.65179,-78.52958],[42.65336,-78.53014],[42.65343,-78.53029],
[42.65343,-78.53082],[42.65359,-78.53104],[42.65415,-78.53148],[42.65429,-78.53143],[42.65449,-78.53104],[42.65469,-78.53106],[42.65472,-78.53148],[42.65494,-78.5319],[42.65493,-78.53234],[42.65484,-78.53248],
[42.65455,-78.53256],[42.65446,-78.53283],[42.65451,-78.53301],[42.65471,-78.53318],[42.65495,-78.53384],[42.655,-78.5343],[42.65526,-78.53471],[42.65536,-78.53502],[42.65553,-78.53508],[42.65576,-78.53481],
[42.65606,-78.53471],[42.65645,-78.53474],[42.65669,-78.53488],[42.65668,-78.53518],[42.65655,-78.53542],[42.65673,-78.53581],[42.65706,-78.53602],[42.65717,-78.53655],[42.65729,-78.53661],[42.6574,-78.53653],
[42.65764,-78.53565],[42.65762,-78.53545],[42.65773,-78.53532],[42.65797,-78.53529],[42.6584,-78.53554],[42.65873,-78.53548],[42.6589,-78.53532],[42.65901,-78.53538],[42.65918,-78.53568],[42.65913,-78.53604],
[42.65884,-78.53654],[42.65893,-78.53679],[42.65877,-78.53749],[42.65855,-78.53798],[42.65819,-78.53816],[42.65819,-78.53846],[42.65841,-78.53885],[42.6592,-78.53891],[42.65926,-78.53883],[42.65957,-78.53901],
[42.65998,-78.53896],[42.66031,-78.53813],[42.66068,-78.53796],[42.66103,-78.53804],[42.66166,-78.53741],[42.66166,-78.53712],[42.66141,-78.53669],[42.66146,-78.53616],[42.66161,-78.53621],[42.6617,-78.53639],
[42.66187,-78.53647],[42.66201,-78.53642],[42.66246,-78.53671],[42.66258,-78.53671],[42.66278,-78.53648],[42.66359,-78.53605],[42.66386,-78.53635],[42.66453,-78.53666],[42.66488,-78.53765],[42.66487,-78.5384],
[42.66509,-78.5386],[42.66565,-78.53867],[42.66606,-78.53828],[42.66609,-78.53834],[42.66627,-78.53806],[42.66627,-78.53817],[42.66632,-78.53814],[42.66648,-78.53876],[42.66647,-78.53912],[42.66635,-78.53923],
[42.66603,-78.53922],[42.66589,-78.53958],[42.66612,-78.53961],[42.66645,-78.54027],[42.66672,-78.54048],[42.66668,-78.54106],[42.66681,-78.54154],[42.66724,-78.54174],[42.66749,-78.54205],[42.6674,-78.54311],
[42.6675,-78.54325],[42.66777,-78.54312],[42.66786,-78.54318],[42.66807,-78.54368],[42.66819,-78.54356],[42.66904,-78.54345],[42.66967,-78.54367],[42.67022,-78.54423],[42.67111,-78.54417],[42.6712,-78.54409],
[42.67166,-78.54411],[42.67197,-78.54458],[42.67214,-78.54504],[42.67245,-78.5453],[42.67291,-78.54509],[42.67318,-78.54507],[42.67335,-78.5452],[42.67361,-78.54507],[42.67368,-78.54465],[42.67377,-78.54465],
[42.67401,-78.5444],[42.67421,-78.54449],[42.67466,-78.54436],[42.6748,-78.54449],[42.67472,-78.54579],[42.67495,-78.54592],[42.67607,-78.54619],[42.67623,-78.54611],[42.6766,-78.54553],[42.67676,-78.54542] ] });
trk_segments[t].push({ points:[[42.67676,-78.54542],
[42.67702,-78.54481],[42.67712,-78.54364],[42.67732,-78.54295],[42.67746,-78.54273],[42.67755,-78.54283],[42.67737,-78.54437],[42.67746,-78.54497],[42.67825,-78.54514],[42.67848,-78.54479],[42.67868,-78.54463],
[42.67876,-78.54467],[42.67907,-78.54433],[42.67912,-78.54406],[42.67942,-78.54385],[42.67957,-78.54396],[42.67985,-78.54446],[42.68022,-78.54479],[42.68112,-78.54464],[42.68135,-78.54432],[42.68197,-78.54409],
[42.68232,-78.54417],[42.68274,-78.54413],[42.68358,-78.5443],[42.68422,-78.54418],[42.68428,-78.54629],[42.68451,-78.54648],[42.68521,-78.54665],[42.68531,-78.54706],[42.68544,-78.54723],[42.68519,-78.5483],
[42.68517,-78.54874],[42.68503,-78.54906],[42.68501,-78.54948],[42.68485,-78.54973],[42.68464,-78.55049],[42.68471,-78.55103],[42.68517,-78.5513],[42.686,-78.5515],[42.68605,-78.55182],[42.68644,-78.55204],
[42.68661,-78.55204],[42.68702,-78.55252],[42.68715,-78.55256],[42.68757,-78.55314],[42.68764,-78.55341],[42.68803,-78.55384],[42.68825,-78.5532],[42.68838,-78.55312],[42.68855,-78.55317],[42.68873,-78.55288],
[42.68909,-78.55289],[42.68948,-78.55273],[42.6898,-78.55283],[42.68985,-78.55234],[42.69007,-78.55206],[42.6903,-78.55272],[42.69051,-78.55268],[42.69061,-78.55276],[42.69059,-78.55212],[42.69067,-78.55209],
[42.6909,-78.55235],[42.69095,-78.55271],[42.69157,-78.55284],[42.69171,-78.55298],[42.69173,-78.55332],[42.69188,-78.55309],[42.69191,-78.55352],[42.69196,-78.55349],[42.69195,-78.55365],[42.69233,-78.55309],
[42.69252,-78.55304],[42.69298,-78.55328],[42.69335,-78.55363],[42.69361,-78.55372],[42.69389,-78.55348],[42.69455,-78.55338],[42.69465,-78.55353],[42.69472,-78.55347],[42.69494,-78.55362],[42.69536,-78.55371],
[42.69551,-78.55365],[42.69574,-78.5538],[42.69614,-78.55365],[42.69687,-78.55395],[42.69752,-78.55467],[42.69765,-78.55467],[42.69775,-78.55429],[42.69801,-78.55429],[42.69825,-78.55393],[42.69937,-78.55385],
[42.69943,-78.5537],[42.69943,-78.55259],[42.69937,-78.55252],[42.69815,-78.55244],[42.69807,-78.53988],[42.69812,-78.53981],[42.71459,-78.54259],[42.71559,-78.54325],[42.7209,-78.54801],[42.72193,-78.54864]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.57702,lon:-78.56422,color:'orange',name:'C06TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 15 })
GV_Draw_Marker({lat:42.58351,lon:-78.56539,color:'orange',name:'C06TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 349 })
GV_Draw_Marker({lat:42.59013,lon:-78.5643,color:'orange',name:'C06TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 336 })
GV_Draw_Marker({lat:42.5952,lon:-78.55926,color:'orange',name:'C06TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 6 })
GV_Draw_Marker({lat:42.6006,lon:-78.56211,color:'orange',name:'C06TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 41 })
GV_Draw_Marker({lat:42.6061,lon:-78.56541,color:'orange',name:'C06TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 283 })
GV_Draw_Marker({lat:42.61109,lon:-78.56594,color:'orange',name:'C06TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 47 })
GV_Draw_Marker({lat:42.61568,lon:-78.55903,color:'orange',name:'C06TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 73 })
GV_Draw_Marker({lat:42.61774,lon:-78.5507,color:'orange',name:'C06TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 352 })
GV_Draw_Marker({lat:42.62495,lon:-78.55087,color:'orange',name:'C06TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 359 })
GV_Draw_Marker({lat:42.6222,lon:-78.54535,color:'orange',name:'C06TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 114 })
GV_Draw_Marker({lat:42.62136,lon:-78.53657,color:'orange',name:'C06TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 88 })
GV_Draw_Marker({lat:42.62533,lon:-78.53095,color:'orange',name:'C06TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 127 })
GV_Draw_Marker({lat:42.62979,lon:-78.52809,color:'orange',name:'C06TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 111 })
GV_Draw_Marker({lat:42.6318,lon:-78.5227,color:'orange',name:'C06TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 38 })
GV_Draw_Marker({lat:42.63725,lon:-78.52366,color:'orange',name:'C06TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 17 })
GV_Draw_Marker({lat:42.642,lon:-78.52258,color:'orange',name:'C06TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 269 })
GV_Draw_Marker({lat:42.64536,lon:-78.52863,color:'orange',name:'C06TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 358 })
GV_Draw_Marker({lat:42.65115,lon:-78.52988,color:'orange',name:'C06TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 38 })
GV_Draw_Marker({lat:42.65497,lon:-78.53402,color:'orange',name:'C06TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 279 })
GV_Draw_Marker({lat:42.65897,lon:-78.53632,color:'orange',name:'C06TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 232 })
GV_Draw_Marker({lat:42.66153,lon:-78.53618,color:'orange',name:'C06TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 347 })
GV_Draw_Marker({lat:42.66647,lon:-78.53906,color:'orange',name:'C06TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 268 })
GV_Draw_Marker({lat:42.66993,lon:-78.54393,color:'orange',name:'C06TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 323 })
GV_Draw_Marker({lat:42.67516,lon:-78.54597,color:'orange',name:'C06TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 350 })
GV_Draw_Marker({lat:42.67882,lon:-78.5446,color:'orange',name:'C06TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 38 })
GV_Draw_Marker({lat:42.68426,lon:-78.54575,color:'orange',name:'C06TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 272 })
GV_Draw_Marker({lat:42.68676,lon:-78.55221,color:'orange',name:'C06TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 319 })
GV_Draw_Marker({lat:42.69153,lon:-78.55284,color:'orange',name:'C06TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 351 })
GV_Draw_Marker({lat:42.69734,lon:-78.55447,color:'orange',name:'C06TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 321 })
GV_Draw_Marker({lat:42.69811,lon:-78.5489,color:'orange',name:'C06TF - Mile  15.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 91 })
GV_Draw_Marker({lat:42.69865,lon:-78.5399,color:'orange',name:'C06TF - Mile  16 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 353 })
GV_Draw_Marker({lat:42.70583,lon:-78.5411,color:'orange',name:'C06TF - Mile  16.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 353 })
GV_Draw_Marker({lat:42.71302,lon:-78.5423,color:'orange',name:'C06TF - Mile  17 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 353 })
GV_Draw_Marker({lat:42.7194,lon:-78.54661,color:'orange',name:'C06TF - Mile  17.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 327 })

t =  488 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C06X1HntClose - 4.47 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.57282,-78.56907],[42.57291,-78.56568],[42.57318,-78.56559],[42.57372,-78.56565],[42.57378,-78.56575],[42.57391,-78.56573],[42.57391,-78.56543],[42.57487,-78.56527],[42.57524,-78.56533],[42.57555,-78.56531],
[42.57632,-78.56515],[42.57671,-78.56433],[42.57727,-78.56413],[42.57758,-78.56374],[42.57807,-78.56377],[42.57847,-78.56414],[42.57867,-78.5641],[42.57878,-78.56442],[42.57897,-78.56459],[42.5793,-78.56471],
[42.57938,-78.56482],[42.58047,-78.56522],[42.58088,-78.56513],[42.58131,-78.56481],[42.58155,-78.56485],[42.58188,-78.56469],[42.58207,-78.56477],[42.58256,-78.56535],[42.58285,-78.56544],[42.58336,-78.56535],
[42.58396,-78.56551],[42.5844,-78.56546],[42.58501,-78.56505],[42.58555,-78.56498],[42.58578,-78.56507],[42.58578,-78.56521],[42.586,-78.56541],[42.58666,-78.56525],[42.58708,-78.56527],[42.58728,-78.56512],
[42.58761,-78.56525],[42.58832,-78.56508],[42.58843,-78.56492],[42.58875,-78.56497],[42.58879,-78.56473],[42.5889,-78.56464],[42.58939,-78.56478],[42.59011,-78.56429],[42.59022,-78.56435],[42.59094,-78.5639],
[42.5913,-78.5639],[42.59142,-78.56404],[42.59223,-78.56349],[42.59244,-78.56306],[42.59324,-78.5629],[42.59357,-78.56255],[42.59367,-78.56194],[42.59361,-78.56119],[42.59425,-78.5597],[42.59466,-78.55949],
[42.59482,-78.55932],[42.59638,-78.5591],[42.59647,-78.55925],[42.59766,-78.55941],[42.59787,-78.55931],[42.59844,-78.55961],[42.59855,-78.56047],[42.59848,-78.56072],[42.59847,-78.56118],[42.59863,-78.56179],
[42.59997,-78.56192],[42.60025,-78.56238],[42.60035,-78.56241],[42.60075,-78.56195],[42.60097,-78.56201],[42.60173,-78.56255],[42.60223,-78.56314],[42.60296,-78.56313],[42.60331,-78.56336],[42.60356,-78.56399],
[42.60355,-78.5646],[42.6041,-78.56442],[42.60454,-78.56403],[42.60525,-78.56399],[42.60548,-78.56433],[42.6059,-78.56472],[42.60603,-78.56498],[42.60615,-78.56574],[42.60602,-78.56666],[42.60605,-78.56689],
[42.60599,-78.56731],[42.60643,-78.56735],[42.60681,-78.56752],[42.6072,-78.56731],[42.60804,-78.5676],[42.60845,-78.56788],[42.60898,-78.56741],[42.6093,-78.56732],[42.60982,-78.56749],[42.61011,-78.56736],
[42.61131,-78.56564],[42.61181,-78.56508],[42.61205,-78.56493],[42.6123,-78.5646],[42.61268,-78.56381],[42.61294,-78.56346],[42.61313,-78.56303],[42.61322,-78.56201],[42.61334,-78.56187],[42.61377,-78.56166],
[42.61406,-78.56138],[42.61434,-78.5609],[42.61447,-78.56038],[42.61479,-78.56011],[42.61492,-78.5598],[42.61543,-78.55956],[42.61563,-78.55928],[42.61581,-78.55848],[42.6161,-78.55788],[42.61633,-78.55765],
[42.61653,-78.55687],[42.61656,-78.5563],[42.61644,-78.556],[42.61705,-78.5527],[42.61747,-78.5519],[42.61767,-78.55118],[42.61733,-78.55071]
 ] }); GV_Draw_Track(t);

t =  489 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C06X2HntClose - 2.34 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.6256,-78.55092],[42.6256,-78.54994],[42.62528,-78.54951],[42.62447,-78.54905],[42.62416,-78.54875],[42.62389,-78.54884],[42.6229,-78.54876],[42.62257,-78.54864],[42.62265,-78.54775],[42.62241,-78.54747],
[42.62242,-78.54662],[42.6223,-78.54566],[42.62191,-78.54445],[42.62169,-78.54334],[42.62156,-78.54304],[42.62133,-78.54293],[42.6212,-78.543],[42.62104,-78.54285],[42.62068,-78.54153],[42.62066,-78.5411],
[42.6208,-78.53996],[42.62119,-78.53916],[42.62132,-78.5382],[42.62138,-78.5362],[42.62152,-78.5359],[42.62193,-78.53591],[42.62244,-78.53559],[42.62304,-78.53503],[42.62334,-78.53456],[42.62391,-78.5343],
[42.62435,-78.53424],[42.62497,-78.53334],[42.6252,-78.53321],[42.62524,-78.53304],[42.62512,-78.53243],[42.6252,-78.53184],[42.62563,-78.5318],[42.62577,-78.53168],[42.62554,-78.5312],[42.62536,-78.53102],
[42.62502,-78.5304],[42.62494,-78.5301],[42.62495,-78.52964],[42.62527,-78.52925],[42.62553,-78.52868],[42.62813,-78.52853],[42.62877,-78.52863],[42.62991,-78.52908],[42.63001,-78.52886],[42.62978,-78.52808],
[42.62986,-78.52793],[42.6298,-78.52756],[42.62987,-78.52738],[42.62956,-78.52683],[42.62977,-78.52651],[42.62977,-78.5264],[42.62947,-78.52599],[42.62928,-78.52519],[42.62924,-78.52448],[42.62907,-78.52417],
[42.62954,-78.52366],[42.63023,-78.52432],[42.63039,-78.52428],[42.63063,-78.5246],[42.63087,-78.52458]
 ] }); GV_Draw_Track(t);

t =  490 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C06X3HntClose - 1.24 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.63087,-78.52458],[42.63121,-78.524],[42.63126,-78.52348],[42.63158,-78.52293],[42.6321,-78.52239],[42.63263,-78.52252],[42.63281,-78.5224],[42.6332,-78.52277],[42.6335,-78.52223],[42.63375,-78.52217],
[42.63402,-78.5219],[42.63412,-78.52201],[42.63419,-78.52267],[42.63436,-78.52286],[42.63439,-78.52302],[42.63456,-78.52316],[42.6346,-78.52335],[42.63471,-78.52316],[42.63484,-78.5231],[42.63516,-78.5232],
[42.6353,-78.52394],[42.63543,-78.52386],[42.63595,-78.52397],[42.63618,-78.52378],[42.63662,-78.5237],[42.63687,-78.52381],[42.63745,-78.52357],[42.63776,-78.52367],[42.63784,-78.52392],[42.63805,-78.52386],
[42.63851,-78.52428],[42.63863,-78.52418],[42.63885,-78.52372],[42.63929,-78.52364],[42.63935,-78.52347],[42.63963,-78.52338],[42.63987,-78.5236],[42.64,-78.52349],[42.64059,-78.52174],[42.64084,-78.52132],
[42.64112,-78.52116],[42.6413,-78.52124],[42.64154,-78.52158],[42.64167,-78.52149],[42.64201,-78.52158],[42.642,-78.52325],[42.64207,-78.52367],[42.64194,-78.52433],[42.642,-78.52462],[42.64195,-78.52487]

 ] }); GV_Draw_Track(t);

t =  491 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C06X4HntClose - 6.48 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.64308,-78.52508],[42.64321,-78.52546],[42.64303,-78.52683],[42.64352,-78.52753],[42.6437,-78.52764],[42.64382,-78.52786],[42.64395,-78.52776],[42.64405,-78.52802],[42.6445,-78.52861],[42.64488,-78.52886],
[42.64516,-78.52862],[42.64568,-78.52865],[42.64576,-78.52873],[42.64578,-78.52866],[42.64607,-78.52904],[42.64658,-78.52919],[42.64735,-78.52967],[42.64758,-78.52969],[42.64807,-78.52999],[42.64821,-78.52998],
[42.64852,-78.52924],[42.64863,-78.52957],[42.64866,-78.52951],[42.64874,-78.52964],[42.64874,-78.52991],[42.64892,-78.53033],[42.64947,-78.5306],[42.64997,-78.53029],[42.65029,-78.52995],[42.65066,-78.52981],
[42.65113,-78.52991],[42.65161,-78.5294],[42.65179,-78.52958],[42.65336,-78.53014],[42.65343,-78.53029],[42.65343,-78.53082],[42.65359,-78.53104],[42.65415,-78.53148],[42.65429,-78.53143],[42.65449,-78.53104],
[42.65469,-78.53106],[42.65472,-78.53148],[42.65494,-78.5319],[42.65493,-78.53234],[42.65484,-78.53248],[42.65455,-78.53256],[42.65446,-78.53283],[42.65451,-78.53301],[42.65471,-78.53318],[42.65495,-78.53384],
[42.655,-78.5343],[42.65526,-78.53471],[42.65536,-78.53502],[42.65553,-78.53508],[42.65576,-78.53481],[42.65606,-78.53471],[42.65645,-78.53474],[42.65669,-78.53488],[42.65668,-78.53518],[42.65655,-78.53542],
[42.65673,-78.53581],[42.65706,-78.53602],[42.65717,-78.53655],[42.65729,-78.53661],[42.6574,-78.53653],[42.65764,-78.53565],[42.65762,-78.53545],[42.65773,-78.53532],[42.65797,-78.53529],[42.6584,-78.53554],
[42.65873,-78.53548],[42.6589,-78.53532],[42.65901,-78.53538],[42.65918,-78.53568],[42.65913,-78.53604],[42.65884,-78.53654],[42.65893,-78.53679],[42.65877,-78.53749],[42.65855,-78.53798],[42.65819,-78.53816],
[42.65819,-78.53846],[42.65841,-78.53885],[42.6592,-78.53891],[42.65926,-78.53883],[42.65957,-78.53901],[42.65998,-78.53896],[42.66031,-78.53813],[42.66068,-78.53796],[42.66103,-78.53804],[42.66166,-78.53741],
[42.66166,-78.53712],[42.66141,-78.53669],[42.66146,-78.53616],[42.66161,-78.53621],[42.6617,-78.53639],[42.66187,-78.53647],[42.66201,-78.53642],[42.66246,-78.53671],[42.66258,-78.53671],[42.66278,-78.53648],
[42.66359,-78.53605],[42.66386,-78.53635],[42.66453,-78.53666],[42.66488,-78.53765],[42.66487,-78.5384],[42.66509,-78.5386],[42.66565,-78.53867],[42.66606,-78.53828],[42.66609,-78.53834],[42.66627,-78.53806],
[42.66627,-78.53817],[42.66632,-78.53814],[42.66648,-78.53876],[42.66647,-78.53912],[42.66635,-78.53923],[42.66603,-78.53922],[42.66589,-78.53958],[42.66612,-78.53961],[42.66645,-78.54027],[42.66672,-78.54048],
[42.66668,-78.54106],[42.66681,-78.54154],[42.66724,-78.54174],[42.66749,-78.54205],[42.6674,-78.54311],[42.6675,-78.54325],[42.66777,-78.54312],[42.66786,-78.54318],[42.66807,-78.54368],[42.66819,-78.54356],
[42.66904,-78.54345],[42.66967,-78.54367],[42.67022,-78.54423],[42.67111,-78.54417],[42.6712,-78.54409],[42.67166,-78.54411],[42.67197,-78.54458],[42.67214,-78.54504],[42.67245,-78.5453],[42.67291,-78.54509],
[42.67318,-78.54507],[42.67335,-78.5452],[42.67361,-78.54507],[42.67368,-78.54465],[42.67377,-78.54465],[42.67401,-78.5444],[42.67421,-78.54449],[42.67466,-78.54436],[42.6748,-78.54449],[42.67472,-78.54579],
[42.67495,-78.54592],[42.67607,-78.54619],[42.67623,-78.54611],[42.6766,-78.54553],[42.67676,-78.54542],[42.67702,-78.54481],[42.67712,-78.54364],[42.67732,-78.54295],[42.67746,-78.54273],[42.67755,-78.54283],
[42.67737,-78.54437],[42.67746,-78.54497],[42.67825,-78.54514],[42.67848,-78.54479],[42.67868,-78.54463],[42.67876,-78.54467],[42.67907,-78.54433],[42.67912,-78.54406],[42.67942,-78.54385],[42.67957,-78.54396],
[42.67985,-78.54446],[42.68022,-78.54479],[42.68112,-78.54464],[42.68135,-78.54432],[42.68197,-78.54409],[42.68232,-78.54417],[42.68274,-78.54413],[42.68358,-78.5443],[42.68422,-78.54418],[42.68428,-78.54629],
[42.68451,-78.54648],[42.68521,-78.54665],[42.68531,-78.54706],[42.68544,-78.54723],[42.68519,-78.5483],[42.68517,-78.54874],[42.68503,-78.54906],[42.68501,-78.54948],[42.68485,-78.54973],[42.68464,-78.55049],
[42.68471,-78.55103],[42.68517,-78.5513],[42.686,-78.5515],[42.68605,-78.55182],[42.68644,-78.55204],[42.68661,-78.55204],[42.68702,-78.55252],[42.68715,-78.55256],[42.68757,-78.55314],[42.68764,-78.55341] ] });
trk_segments[t].push({ points:[[42.68764,-78.55341],
[42.68803,-78.55384],[42.68825,-78.5532],[42.68838,-78.55312],[42.68855,-78.55317],[42.68873,-78.55288],[42.68909,-78.55289],[42.68948,-78.55273],[42.6898,-78.55283],[42.68985,-78.55234],[42.69007,-78.55206],
[42.6903,-78.55272],[42.69051,-78.55268],[42.69061,-78.55276],[42.69059,-78.55212],[42.69067,-78.55209],[42.6909,-78.55235],[42.69095,-78.55271],[42.69157,-78.55284],[42.69171,-78.55298],[42.69173,-78.55332],
[42.69188,-78.55309],[42.69191,-78.55352],[42.69196,-78.55349],[42.69195,-78.55365],[42.69233,-78.55309],[42.69252,-78.55304],[42.69298,-78.55328],[42.69335,-78.55363],[42.69361,-78.55372],[42.69389,-78.55348],
[42.69455,-78.55338],[42.69465,-78.55353],[42.69472,-78.55347],[42.69494,-78.55362],[42.69536,-78.55371],[42.69551,-78.55365],[42.69574,-78.5538],[42.69614,-78.55365],[42.69687,-78.55395],[42.69752,-78.55467],
[42.69765,-78.55467],[42.69775,-78.55429],[42.69801,-78.55429],[42.69825,-78.55393],[42.69937,-78.55385],[42.69943,-78.5537]
 ] }); GV_Draw_Track(t);

t =  492 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">CT06 map coverage - 6.48 miles ( 12 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.72369,-78.45605],[42.72369,-78.60813],[42.56765,-78.60813],[42.56765,-78.45605],[42.72369,-78.45605]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.75739,lon:-78.53148,color:'',dd:true
,name:'Access 3: Hunters Creek Rd',desc:'Large parking lot, room for 15 vehicles<br /><br />Location: <b>42.7574, -78.5315  or N42 45.4435 W78 31.8887</b><br /><br />This is <b>Map CT7</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.76484,lon:-78.51365,color:'',dd:true
,name:'Access 4: US-20A (Big Tree Rd)',desc:'Good shoulder parking near entrance to Camp Aloha<br /><br />Location: <b>42.7648, -78.5136  or N42 45.8902 W78 30.8188</b><br /><br />This is <b>Map CT7</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.78225,lon:-78.49227,color:'',dd:true
,name:'Access 5: Bear Rd',desc:'Shoulder parking on S side of road<br /><br />Location: <b>42.7823, -78.4923  or N42 46.9353 W78 29.5365</b><br /><br />This is <b>Map CT7</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.80981,lon:-78.46138,color:'',dd:true
,name:'Access 6: Bailey Rd',desc:'Limited shoulder parking<br /><br />Location: <b>42.8098, -78.4614  or N42 48.5888 W78 27.6829</b><br /><br />This is <b>Map CT7</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.83509,lon:-78.43912,color:'',dd:true
,name:'Access 8: Clinton St (NY-354)',desc:'Good shoulder parking on S side of road<br /><br />Location: <b>42.8351, -78.4391  or N42 50.1055 W78 26.3473</b><br /><br />This is <b>Map CT7</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.85689,lon:-78.425,color:'',dd:true
,name:'Access 9: Getman Rd',desc:'Shoulder parking<br /><br />Location: <b>42.8569, -78.425  or N42 51.4136 W78 25.5001</b><br /><br />This is <b>Map CT7</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.77381,lon:-78.50565,color:''
,name:'Spring&Fall hunting closure',desc:'Hunting closure: May 1 - 31 and Oct 1 - Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT7\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.7738, -78.5056  or N42 46.4287 W78 30.3388</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.84258,lon:-78.43144,color:''
,name:'Spring&Fall hunting closure',desc:'Hunting closure: May 1 - 31 and Oct 1 - Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT7\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.8426, -78.4314  or N42 50.5548 W78 25.8866</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.85012,lon:-78.55002,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "CT7 - Hunters Creek Park"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Sep 11, 2018</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT07\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CT07.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map CT7 shows the Conservation Trail in Erie-Wyoming counties from Warner Hill Rd to Getman Rd. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT7\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.7368,lon:-78.55136,color:'',dd:true
,name:'Centerline Rd parking lot',desc:'Large offroad parking lot for 20 vehicles<br /><br />Location: <b>42.7368, -78.5514  or N42 44.2079 W78 33.0815</b><br /><br />This is <b>Map CT7</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  493 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C07HBP01 - 2.35 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.76258,-78.51755],[42.76472,-78.51755],[42.76617,-78.51839],[42.76648,-78.51859],[42.76645,-78.5186],[42.76704,-78.52055],[42.76767,-78.52223],[42.76841,-78.52126],[42.77048,-78.519],[42.77255,-78.51626],
[42.7742,-78.51368],[42.77522,-78.51211],[42.77636,-78.51038],[42.777,-78.5094],[42.77749,-78.5085],[42.778,-78.50728],[42.77904,-78.5045],[42.78048,-78.49912],[42.78164,-78.49475],[42.7823,-78.49224]

 ] }); GV_Draw_Track(t);

t =  494 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C07HBP02 - 4.21 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.81652,-78.45218],[42.81922,-78.45415],[42.82373,-78.45429],[42.82606,-78.44981],[42.82673,-78.44877],[42.82717,-78.44849],[42.82983,-78.44999],[42.83189,-78.45117],[42.8348,-78.4538],[42.83489,-78.45389],
[42.83523,-78.45405],[42.83731,-78.454],[42.83536,-78.44969],[42.83498,-78.44849],[42.83485,-78.44743],[42.83503,-78.4392],[42.84437,-78.43899],[42.84453,-78.43899],[42.84843,-78.43885],[42.84865,-78.4388],
[42.84891,-78.43871],[42.84907,-78.43854],[42.84907,-78.4346],[42.84916,-78.43434],[42.84925,-78.43416],[42.85196,-78.43356],[42.85374,-78.43308],[42.85496,-78.43258],[42.85691,-78.43256]
 ] }); GV_Draw_Track(t);

t =  495 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C07TF - 15.85 miles (orange blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT07\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/CT07.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.72194,-78.54866],[42.72252,-78.54888],[42.72354,-78.54938],[42.725,-78.55027],[42.72863,-78.5519],[42.73098,-78.5544],[42.73639,-78.55427],[42.73643,-78.55431],[42.73647,-78.55423],[42.73671,-78.55422],
[42.73672,-78.55407],[42.73683,-78.55389],[42.73683,-78.55337],[42.73699,-78.55295],[42.73713,-78.55282],[42.73723,-78.5526],[42.7371,-78.55227],[42.73689,-78.55196],[42.73699,-78.55139],[42.7364,-78.5513],
[42.73631,-78.54687],[42.73636,-78.54687],[42.7364,-78.54665],[42.7366,-78.54665],[42.73663,-78.54659],[42.73679,-78.54662],[42.73696,-78.54656],[42.73704,-78.54661],[42.73721,-78.54659],[42.73767,-78.54697],
[42.7377,-78.54711],[42.73766,-78.5473],[42.73784,-78.54767],[42.73813,-78.54769],[42.73842,-78.54779],[42.73868,-78.54778],[42.73876,-78.5477],[42.73877,-78.54757],[42.73869,-78.54723],[42.73872,-78.54716],
[42.73897,-78.54723],[42.73915,-78.54743],[42.7393,-78.54733],[42.73927,-78.54707],[42.73935,-78.54698],[42.73943,-78.54716],[42.73993,-78.54732],[42.7403,-78.5475],[42.74035,-78.54764],[42.74073,-78.54777],
[42.74096,-78.54778],[42.74128,-78.5477],[42.7414,-78.54773],[42.74215,-78.5473],[42.74249,-78.54732],[42.74275,-78.54711],[42.7431,-78.54694],[42.74353,-78.54685],[42.74371,-78.54692],[42.74403,-78.54717],
[42.74412,-78.54733],[42.74437,-78.54755],[42.74465,-78.54754],[42.74481,-78.5474],[42.74494,-78.54741],[42.7453,-78.54716],[42.74557,-78.54723],[42.74573,-78.5472],[42.74591,-78.54707],[42.74605,-78.54688],
[42.7462,-78.54678],[42.74642,-78.54684],[42.74671,-78.54671],[42.74687,-78.54648],[42.74689,-78.54636],[42.74676,-78.54591],[42.7466,-78.54557],[42.74666,-78.54542],[42.74657,-78.5452],[42.74666,-78.54509],
[42.74688,-78.5451],[42.747,-78.54502],[42.74718,-78.54501],[42.7472,-78.54517],[42.74728,-78.54527],[42.74744,-78.54534],[42.74789,-78.54521],[42.7483,-78.54536],[42.74851,-78.54566],[42.74863,-78.54593],
[42.74914,-78.54623],[42.74918,-78.5462],[42.74921,-78.54606],[42.74966,-78.54554],[42.74967,-78.54531],[42.74973,-78.54517],[42.74973,-78.54483],[42.74968,-78.54453],[42.74971,-78.54429],[42.74952,-78.54404],
[42.74943,-78.54357],[42.74939,-78.54353],[42.74926,-78.54292],[42.74926,-78.54277],[42.74917,-78.5424],[42.74902,-78.54206],[42.74903,-78.54187],[42.74886,-78.54157],[42.74866,-78.54145],[42.74859,-78.54124],
[42.74859,-78.54082],[42.74843,-78.54031],[42.74829,-78.54011],[42.74828,-78.53968],[42.74824,-78.53946],[42.74826,-78.53931],[42.74822,-78.53912],[42.74836,-78.53883],[42.74852,-78.53871],[42.74866,-78.53783],
[42.74869,-78.53724],[42.74894,-78.53684],[42.74911,-78.53674],[42.74928,-78.53673],[42.74938,-78.53677],[42.74957,-78.53697],[42.74985,-78.53715],[42.75012,-78.53722],[42.7506,-78.5377],[42.75061,-78.53784],
[42.75112,-78.5382],[42.75147,-78.53832],[42.75164,-78.53828],[42.75186,-78.53839],[42.75216,-78.53836],[42.75251,-78.53841],[42.75268,-78.53838],[42.75308,-78.53847],[42.75322,-78.53838],[42.75351,-78.53806],
[42.75379,-78.53796],[42.75404,-78.53765],[42.75447,-78.53746],[42.75465,-78.53717],[42.75476,-78.53688],[42.75497,-78.5368],[42.75505,-78.53668],[42.75577,-78.53691],[42.75589,-78.53699],[42.75604,-78.537],
[42.75652,-78.53671],[42.75679,-78.53664],[42.75685,-78.53655],[42.75748,-78.5362],[42.75836,-78.53547],[42.75856,-78.53537],[42.75874,-78.53538],[42.75879,-78.53529],[42.75879,-78.53508],[42.75875,-78.53494],
[42.75856,-78.53465],[42.75832,-78.53448],[42.75817,-78.53423],[42.75815,-78.53398],[42.75822,-78.53371],[42.75784,-78.53307],[42.75775,-78.53303],[42.75765,-78.53287],[42.75766,-78.53271],[42.75759,-78.53268],
[42.75749,-78.53253],[42.75739,-78.53147],[42.76102,-78.53124],[42.76121,-78.53107],[42.76045,-78.5283],[42.76016,-78.52701],[42.75995,-78.52552],[42.75966,-78.5223],[42.75917,-78.51946],[42.7595,-78.51913],
[42.76027,-78.51817],[42.76068,-78.51782],[42.76114,-78.51765],[42.76253,-78.51751],[42.76257,-78.51746],[42.7624,-78.51716],[42.76244,-78.51499],[42.76241,-78.51477],[42.76244,-78.51461],[42.76254,-78.51447],
[42.76274,-78.51453],[42.7629,-78.51469],[42.76309,-78.5146],[42.76313,-78.51464],[42.76329,-78.51462],[42.76346,-78.51437],[42.76354,-78.51434],[42.76371,-78.51414],[42.76372,-78.51394],[42.7638,-78.51382] ] });
trk_segments[t].push({ points:[[42.7638,-78.51382],
[42.76429,-78.51376],[42.76434,-78.51379],[42.76442,-78.51376],[42.76473,-78.51389],[42.76487,-78.51382],[42.76493,-78.51372],[42.76482,-78.51308],[42.76537,-78.51275],[42.76558,-78.51273],[42.76574,-78.51281],
[42.76605,-78.51265],[42.76617,-78.51273],[42.76625,-78.51261],[42.76651,-78.51263],[42.76687,-78.51251],[42.76725,-78.51246],[42.76731,-78.5124],[42.76816,-78.51233],[42.76817,-78.51107],[42.76823,-78.5101],
[42.76878,-78.51009],[42.76889,-78.51014],[42.76915,-78.51013],[42.76934,-78.51031],[42.7702,-78.50975],[42.77031,-78.50974],[42.77053,-78.50983],[42.77083,-78.50974],[42.77118,-78.50987],[42.77133,-78.50987],
[42.77206,-78.51054],[42.77228,-78.51041],[42.77255,-78.50993],[42.77271,-78.50944],[42.77273,-78.50864],[42.7727,-78.50852],[42.77274,-78.50788],[42.77289,-78.50758],[42.77288,-78.50709],[42.77292,-78.50702],
[42.77329,-78.50681],[42.77337,-78.5067],[42.77344,-78.50638],[42.77345,-78.50613],[42.77351,-78.50601],[42.77352,-78.50571],[42.77343,-78.50528],[42.77346,-78.50512],[42.7737,-78.50488],[42.77369,-78.50461],
[42.77396,-78.50452],[42.7741,-78.50432],[42.77412,-78.5042],[42.77436,-78.50393],[42.77439,-78.50368],[42.77457,-78.50347],[42.77464,-78.50348],[42.77472,-78.50339],[42.77475,-78.50325],[42.77487,-78.50307],
[42.77542,-78.50303],[42.77571,-78.50272],[42.77599,-78.50182],[42.77633,-78.50156],[42.77641,-78.50156],[42.77662,-78.50183],[42.77674,-78.50188],[42.77703,-78.50174],[42.77713,-78.50159],[42.77746,-78.5014],
[42.7776,-78.50124],[42.77755,-78.5011],[42.77764,-78.50091],[42.77787,-78.50059],[42.77823,-78.4997],[42.77817,-78.49851],[42.77808,-78.49831],[42.77802,-78.49802],[42.77805,-78.49724],[42.77811,-78.49706],
[42.77804,-78.49638],[42.7779,-78.49598],[42.77786,-78.49575],[42.77789,-78.49563],[42.77787,-78.49531],[42.77794,-78.49493],[42.77804,-78.49475],[42.77819,-78.49422],[42.77819,-78.49395],[42.77812,-78.49388],
[42.77812,-78.49365],[42.77844,-78.49357],[42.7793,-78.49352],[42.77957,-78.49363],[42.77973,-78.49339],[42.77975,-78.49328],[42.78006,-78.49336],[42.78024,-78.49313],[42.78034,-78.49289],[42.78041,-78.49284],
[42.78061,-78.49252],[42.78076,-78.49244],[42.78089,-78.49245],[42.78113,-78.49204],[42.78155,-78.49216],[42.78167,-78.49213],[42.78214,-78.49234],[42.7823,-78.49233],[42.78313,-78.48942],[42.7836,-78.48792],
[42.78479,-78.48337],[42.78905,-78.46851],[42.79136,-78.46084],[42.80146,-78.46092],[42.80358,-78.46088],[42.80418,-78.46083],[42.80466,-78.46093],[42.80806,-78.46135],[42.80887,-78.4615],[42.81286,-78.46178],
[42.81282,-78.46067],[42.81291,-78.45716],[42.8129,-78.45113],[42.81303,-78.45001],[42.81369,-78.45046],[42.81387,-78.45053],[42.81392,-78.45061],[42.81446,-78.45094],[42.81464,-78.45112],[42.81552,-78.45164],
[42.81631,-78.45218],[42.81653,-78.45222],[42.81771,-78.45127],[42.81798,-78.45111],[42.81808,-78.45099],[42.81873,-78.45052],[42.81989,-78.44955],[42.82002,-78.44937],[42.82047,-78.4491],[42.82201,-78.44883],
[42.82219,-78.44874],[42.82325,-78.44851],[42.82367,-78.44836],[42.8241,-78.44841],[42.82519,-78.44916],[42.82549,-78.44944],[42.82566,-78.4497],[42.82591,-78.44988],[42.82612,-78.44995],[42.82631,-78.44965],
[42.82639,-78.44943],[42.82688,-78.44861],[42.82704,-78.44848],[42.82731,-78.44806],[42.82756,-78.44779],[42.82773,-78.4475],[42.82781,-78.44752],[42.82846,-78.44708],[42.82884,-78.447],[42.82916,-78.44681],
[42.8293,-78.44659],[42.82968,-78.44513],[42.82995,-78.44456],[42.83028,-78.44359],[42.83082,-78.44293],[42.83141,-78.44203],[42.83163,-78.44184],[42.83203,-78.44131],[42.83226,-78.44109],[42.83245,-78.44083],
[42.8328,-78.44048],[42.83291,-78.44045],[42.83325,-78.44015],[42.83321,-78.44001],[42.83321,-78.4398],[42.83338,-78.43946],[42.83384,-78.43932],[42.83429,-78.43944],[42.83505,-78.43919],[42.83512,-78.43901],
[42.83516,-78.43604],[42.83522,-78.43478],[42.8352,-78.43443],[42.83526,-78.43262],[42.83534,-78.43243],[42.83538,-78.43195],[42.83535,-78.43176],[42.83541,-78.43118],[42.83564,-78.43114],[42.8362,-78.4312],
[42.83635,-78.43115],[42.83756,-78.43121],[42.8377,-78.43112],[42.83805,-78.43109],[42.83822,-78.43115],[42.83839,-78.43107],[42.83855,-78.43115],[42.83869,-78.43145],[42.83868,-78.43152],[42.83882,-78.43179] ] });
trk_segments[t].push({ points:[[42.83882,-78.43179],
[42.83908,-78.4321],[42.83928,-78.43252],[42.83935,-78.43253],[42.83955,-78.4324],[42.83966,-78.43219],[42.83978,-78.43209],[42.83987,-78.43214],[42.84007,-78.43243],[42.84047,-78.43261],[42.84055,-78.43273],
[42.84052,-78.4332],[42.84064,-78.43331],[42.841,-78.43308],[42.84109,-78.43297],[42.8412,-78.43263],[42.84147,-78.43212],[42.84177,-78.4318],[42.84195,-78.43169],[42.84192,-78.43156],[42.84196,-78.43138],
[42.84222,-78.43121],[42.84225,-78.43109],[42.84241,-78.43106],[42.84273,-78.43086],[42.84307,-78.43073],[42.84338,-78.43047],[42.84369,-78.43044],[42.84392,-78.43032],[42.84411,-78.43033],[42.84418,-78.43027],
[42.84452,-78.43024],[42.84483,-78.43011],[42.84492,-78.42995],[42.845,-78.42992],[42.84509,-78.42981],[42.84534,-78.42972],[42.84539,-78.42974],[42.84558,-78.4296],[42.8457,-78.42944],[42.84591,-78.42928],
[42.84605,-78.42938],[42.8462,-78.42941],[42.84643,-78.42931],[42.84684,-78.42941],[42.8469,-78.4295],[42.84732,-78.42973],[42.84743,-78.42973],[42.84756,-78.42985],[42.84769,-78.42989],[42.84786,-78.42969],
[42.84812,-78.4295],[42.8482,-78.42954],[42.84838,-78.42947],[42.84857,-78.42949],[42.84874,-78.4298],[42.84885,-78.42973],[42.84895,-78.42941],[42.84917,-78.42919],[42.84925,-78.429],[42.84951,-78.42898],
[42.84966,-78.42905],[42.85025,-78.42901],[42.8504,-78.42904],[42.85055,-78.42918],[42.85076,-78.42923],[42.85084,-78.42915],[42.85149,-78.42918],[42.85174,-78.42912],[42.85187,-78.42917],[42.85204,-78.42905],
[42.85211,-78.42893],[42.85227,-78.42881],[42.85232,-78.42861],[42.85248,-78.42847],[42.85258,-78.42848],[42.85274,-78.4286],[42.85284,-78.42873],[42.853,-78.42878],[42.85307,-78.42865],[42.85334,-78.42846],
[42.85343,-78.42821],[42.85355,-78.42815],[42.85379,-78.42818],[42.85392,-78.42828],[42.85401,-78.42844],[42.85419,-78.42837],[42.85426,-78.42827],[42.85441,-78.42818],[42.85476,-78.42772],[42.85498,-78.42754],
[42.85551,-78.4269],[42.85574,-78.42649],[42.85577,-78.42637],[42.85595,-78.42609],[42.85615,-78.42598],[42.85622,-78.4258],[42.85635,-78.42582],[42.85646,-78.42613],[42.85689,-78.42628],[42.85689,-78.42504]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.72873,lon:-78.55201,color:'orange',name:'C07TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 322 })
GV_Draw_Marker({lat:42.73537,lon:-78.55429,color:'orange',name:'C07TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 1 })
GV_Draw_Marker({lat:42.7363,lon:-78.54738,color:'orange',name:'C07TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 92 })
GV_Draw_Marker({lat:42.7415,lon:-78.54767,color:'orange',name:'C07TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 23 })
GV_Draw_Marker({lat:42.74681,lon:-78.5451,color:'orange',name:'C07TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 357 })
GV_Draw_Marker({lat:42.74859,lon:-78.541,color:'orange',name:'C07TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 90 })
GV_Draw_Marker({lat:42.75237,lon:-78.53839,color:'orange',name:'C07TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 355 })
GV_Draw_Marker({lat:42.75876,lon:-78.53534,color:'orange',name:'C07TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 50 })
GV_Draw_Marker({lat:42.76113,lon:-78.53115,color:'orange',name:'C07TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 33 })
GV_Draw_Marker({lat:42.75956,lon:-78.52167,color:'orange',name:'C07TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 103 })
GV_Draw_Marker({lat:42.76243,lon:-78.51521,color:'orange',name:'C07TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 89 })
GV_Draw_Marker({lat:42.76798,lon:-78.51234,color:'orange',name:'C07TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 4 })
GV_Draw_Marker({lat:42.77271,lon:-78.50917,color:'orange',name:'C07TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 88 })
GV_Draw_Marker({lat:42.77598,lon:-78.50186,color:'orange',name:'C07TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 67 })
GV_Draw_Marker({lat:42.77811,lon:-78.4945,color:'orange',name:'C07TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 69 })
GV_Draw_Marker({lat:42.78292,lon:-78.49013,color:'orange',name:'C07TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 69 })
GV_Draw_Marker({lat:42.78548,lon:-78.48091,color:'orange',name:'C07TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 69 })
GV_Draw_Marker({lat:42.78808,lon:-78.4717,color:'orange',name:'C07TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 69 })
GV_Draw_Marker({lat:42.79081,lon:-78.46257,color:'orange',name:'C07TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 68 })
GV_Draw_Marker({lat:42.79722,lon:-78.46084,color:'orange',name:'C07TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 0 })
GV_Draw_Marker({lat:42.80445,lon:-78.46088,color:'orange',name:'C07TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 352 })
GV_Draw_Marker({lat:42.81166,lon:-78.4617,color:'orange',name:'C07TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 357 })
GV_Draw_Marker({lat:42.81291,lon:-78.45356,color:'orange',name:'C07TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 90 })
GV_Draw_Marker({lat:42.81717,lon:-78.45172,color:'orange',name:'C07TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 30 })
GV_Draw_Marker({lat:42.82382,lon:-78.44838,color:'orange',name:'C07TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 355 })
GV_Draw_Marker({lat:42.82945,lon:-78.44604,color:'orange',name:'C07TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 70 })
GV_Draw_Marker({lat:42.83412,lon:-78.43939,color:'orange',name:'C07TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 349 })
GV_Draw_Marker({lat:42.83576,lon:-78.43115,color:'orange',name:'C07TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 355 })
GV_Draw_Marker({lat:42.84137,lon:-78.4323,color:'orange',name:'C07TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 54 })
GV_Draw_Marker({lat:42.84766,lon:-78.42988,color:'orange',name:'C07TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 348 })
GV_Draw_Marker({lat:42.85382,lon:-78.4282,color:'orange',name:'C07TF - Mile  15.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 330 })

t =  496 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C07X1HntClose - 2.50 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.76253,-78.51751],[42.76257,-78.51746],[42.7624,-78.51716],[42.76244,-78.51499],[42.76241,-78.51477],[42.76244,-78.51461],[42.76254,-78.51447],[42.76274,-78.51453],[42.7629,-78.51469],[42.76309,-78.5146],
[42.76313,-78.51464],[42.76329,-78.51462],[42.76346,-78.51437],[42.76354,-78.51434],[42.76371,-78.51414],[42.76372,-78.51394],[42.7638,-78.51382],[42.76429,-78.51376],[42.76434,-78.51379],[42.76442,-78.51376],
[42.76473,-78.51389],[42.76487,-78.51382],[42.76493,-78.51372],[42.76482,-78.51308],[42.76537,-78.51275],[42.76558,-78.51273],[42.76574,-78.51281],[42.76605,-78.51265],[42.76617,-78.51273],[42.76625,-78.51261],
[42.76651,-78.51263],[42.76687,-78.51251],[42.76725,-78.51246],[42.76731,-78.5124],[42.76816,-78.51233],[42.76817,-78.51107],[42.76823,-78.5101],[42.76878,-78.51009],[42.76889,-78.51014],[42.76915,-78.51013],
[42.76934,-78.51031],[42.7702,-78.50975],[42.77031,-78.50974],[42.77053,-78.50983],[42.77083,-78.50974],[42.77118,-78.50987],[42.77133,-78.50987],[42.77206,-78.51054],[42.77228,-78.51041],[42.77255,-78.50993],
[42.77271,-78.50944],[42.77273,-78.50864],[42.7727,-78.50852],[42.77274,-78.50788],[42.77289,-78.50758],[42.77288,-78.50709],[42.77292,-78.50702],[42.77329,-78.50681],[42.77337,-78.5067],[42.77344,-78.50638],
[42.77345,-78.50613],[42.77351,-78.50601],[42.77352,-78.50571],[42.77343,-78.50528],[42.77346,-78.50512],[42.7737,-78.50488],[42.77369,-78.50461],[42.77396,-78.50452],[42.7741,-78.50432],[42.77412,-78.5042],
[42.77436,-78.50393],[42.77439,-78.50368],[42.77457,-78.50347],[42.77464,-78.50348],[42.77472,-78.50339],[42.77475,-78.50325],[42.77487,-78.50307],[42.77542,-78.50303],[42.77571,-78.50272],[42.77599,-78.50182],
[42.77633,-78.50156],[42.77641,-78.50156],[42.77662,-78.50183],[42.77674,-78.50188],[42.77703,-78.50174],[42.77713,-78.50159],[42.77746,-78.5014],[42.7776,-78.50124],[42.77755,-78.5011],[42.77764,-78.50091],
[42.77787,-78.50059],[42.77823,-78.4997],[42.77817,-78.49851],[42.77808,-78.49831],[42.77802,-78.49802],[42.77805,-78.49724],[42.77811,-78.49706],[42.77804,-78.49638],[42.7779,-78.49598],[42.77786,-78.49575],
[42.77789,-78.49563],[42.77787,-78.49531],[42.77794,-78.49493],[42.77804,-78.49475],[42.77819,-78.49422],[42.77819,-78.49395],[42.77812,-78.49388],[42.77812,-78.49365],[42.77844,-78.49357],[42.7793,-78.49352],
[42.77957,-78.49363],[42.77973,-78.49339],[42.77975,-78.49328],[42.78006,-78.49336],[42.78024,-78.49313],[42.78034,-78.49289],[42.78041,-78.49284],[42.78061,-78.49252],[42.78076,-78.49244],[42.78089,-78.49245],
[42.78113,-78.49204],[42.78155,-78.49216],[42.78167,-78.49213],[42.78214,-78.49234],[42.7823,-78.49233]
 ] }); GV_Draw_Track(t);

t =  497 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C07X2HntClose - 3.86 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.81653,-78.45222],[42.81771,-78.45127],[42.81798,-78.45111],[42.81989,-78.44955],[42.82002,-78.44937],[42.82047,-78.4491],[42.82201,-78.44883],[42.82219,-78.44874],[42.82325,-78.44851],[42.82367,-78.44836],
[42.8241,-78.44841],[42.82519,-78.44916],[42.82549,-78.44944],[42.82566,-78.4497],[42.82591,-78.44988],[42.82612,-78.44995],[42.82631,-78.44965],[42.82639,-78.44943],[42.82688,-78.44861],[42.82704,-78.44848],
[42.82731,-78.44806],[42.82756,-78.44779],[42.82773,-78.4475],[42.82781,-78.44752],[42.82846,-78.44708],[42.82884,-78.447],[42.82916,-78.44681],[42.8293,-78.44659],[42.82968,-78.44513],[42.82995,-78.44456],
[42.83028,-78.44359],[42.83082,-78.44293],[42.83141,-78.44203],[42.83163,-78.44184],[42.83203,-78.44131],[42.83226,-78.44109],[42.83245,-78.44083],[42.8328,-78.44048],[42.83291,-78.44045],[42.83325,-78.44015],
[42.83321,-78.44001],[42.83321,-78.4398],[42.83338,-78.43946],[42.83384,-78.43932],[42.83429,-78.43944],[42.83505,-78.43919],[42.83512,-78.43901],[42.83516,-78.43604],[42.83522,-78.43478],[42.8352,-78.43443],
[42.83526,-78.43262],[42.83534,-78.43243],[42.83538,-78.43195],[42.83535,-78.43176],[42.83541,-78.43118],[42.83564,-78.43114],[42.8362,-78.4312],[42.83635,-78.43115],[42.83756,-78.43121],[42.8377,-78.43112],
[42.83805,-78.43109],[42.83822,-78.43115],[42.83839,-78.43107],[42.83855,-78.43115],[42.83869,-78.43145],[42.83868,-78.43152],[42.83882,-78.43179],[42.83908,-78.4321],[42.83928,-78.43252],[42.83935,-78.43253],
[42.83955,-78.4324],[42.83966,-78.43219],[42.83978,-78.43209],[42.83987,-78.43214],[42.84007,-78.43243],[42.84047,-78.43261],[42.84055,-78.43273],[42.84052,-78.4332],[42.84064,-78.43331],[42.841,-78.43308],
[42.84109,-78.43297],[42.8412,-78.43263],[42.84147,-78.43212],[42.84177,-78.4318],[42.84195,-78.43169],[42.84192,-78.43156],[42.84196,-78.43138],[42.84222,-78.43121],[42.84225,-78.43109],[42.84241,-78.43106],
[42.84273,-78.43086],[42.84307,-78.43073],[42.84338,-78.43047],[42.84369,-78.43044],[42.84392,-78.43032],[42.84411,-78.43033],[42.84418,-78.43027],[42.84452,-78.43024],[42.84483,-78.43011],[42.84492,-78.42995],
[42.845,-78.42992],[42.84509,-78.42981],[42.84534,-78.42972],[42.84539,-78.42974],[42.84558,-78.4296],[42.8457,-78.42944],[42.84591,-78.42928],[42.84605,-78.42938],[42.8462,-78.42941],[42.84643,-78.42931],
[42.84684,-78.42941],[42.8469,-78.4295],[42.84732,-78.42973],[42.84743,-78.42973],[42.84756,-78.42985],[42.84769,-78.42989],[42.84786,-78.42969],[42.84812,-78.4295],[42.8482,-78.42954],[42.84838,-78.42947],
[42.84857,-78.42949],[42.84874,-78.4298],[42.84885,-78.42973],[42.84895,-78.42941],[42.84917,-78.42919],[42.84925,-78.429],[42.84951,-78.42898],[42.84966,-78.42905],[42.85025,-78.42901],[42.8504,-78.42904],
[42.85055,-78.42918],[42.85076,-78.42923],[42.85084,-78.42915],[42.85149,-78.42918],[42.85174,-78.42912],[42.85187,-78.42917],[42.85204,-78.42905],[42.85211,-78.42893],[42.85227,-78.42881],[42.85232,-78.42861],
[42.85248,-78.42847],[42.85258,-78.42848],[42.85274,-78.4286],[42.85284,-78.42873],[42.853,-78.42878],[42.85307,-78.42865],[42.85334,-78.42846],[42.85343,-78.42821],[42.85355,-78.42815],[42.85379,-78.42818],
[42.85392,-78.42828],[42.85401,-78.42844],[42.85419,-78.42837],[42.85426,-78.42827],[42.85441,-78.42818],[42.85476,-78.42772],[42.85498,-78.42754],[42.85551,-78.4269],[42.85574,-78.42649],[42.85577,-78.42637],
[42.85595,-78.42609],[42.85615,-78.42598],[42.85622,-78.4258],[42.85629,-78.42576],[42.8563,-78.42568],[42.85641,-78.42567],[42.85649,-78.4259],[42.85664,-78.42596],[42.85665,-78.42582],[42.85683,-78.42559],
[42.85691,-78.42532]
 ] }); GV_Draw_Track(t);

t =  498 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">CT07 map coverage - 3.86 miles ( 12 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.86512,-78.41895],[42.86512,-78.57002],[42.70935,-78.57002],[42.70935,-78.41895],[42.86512,-78.41895]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.85689,lon:-78.425,color:'',dd:true
,name:'Access 1: Getman Rd',desc:'Shoulder parking<br /><br />Location: <b>42.8569, -78.425  or N42 51.4136 W78 25.5001</b><br /><br />This is <b>Map CT8</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.90054,lon:-78.42269,color:'',dd:true
,name:'Access 3: US-20 (Broadway)',desc:'Parking area for 10 vehicles - do not block gate<br /><br />Location: <b>42.9005, -78.4227  or N42 54.0324 W78 25.3613</b><br /><br />This is <b>Map CT8</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.92236,lon:-78.42162,color:'',dd:true
,name:'Access 4: Sumner Rd',desc:'Parking lot for 12 vehicles on S side of road<br /><br />Location: <b>42.9224, -78.4216  or N42 55.3417 W78 25.2973</b><br /><br />This is <b>Map CT8</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.95722,lon:-78.42064,color:'',dd:true
,name:'Access 6: Genesee St (NY 33)',desc:'Good shoulder parking<br /><br />Location: <b>42.9572, -78.4206  or N42 57.4333 W78 25.2382</b><br /><br />This is <b>Map CT8</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.99527,lon:-78.42803,color:'',dd:true
,name:'Access 8: NY-5 (Main Rd)',desc:'Shoulder parking<br /><br />Location: <b>42.9953, -78.428  or N42 59.7164 W78 25.6817</b><br /><br />This is <b>Map CT8</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.86644,lon:-78.41663,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct 1-Dec 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT8\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.8664, -78.4166  or N42 51.9865 W78 24.9977</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.88606,lon:-78.42351,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct. 1 - Dec. 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT8\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.8861, -78.4235  or N42 53.1634 W78 25.4106</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.94771,lon:-78.41949,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1 - 31 and Oct. 1 - Dec. 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT8\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.9477, -78.4195  or N42 56.8625 W78 25.1696</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.96712,lon:-78.42841,color:''
,name:'Spring & Fall hunting closure',desc:'Hunting closure: May 1-31 and Oct. 1 - Dec. 22<br /><br />Respect landowner wishes; do not hike on sections that are closed during hunting seasons. <br /><b><a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT8\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">Check trail conditions before your hike.</a></b><br /><br />Location: <b>42.9671, -78.4284  or N42 58.027 W78 25.7044</b>',icon:'Flag, Red',scale: 1, folder:'Closure'});
GV_Draw_Marker({lat:42.91571,lon:-78.42413,color:''
,name:'C08 Lean-to',desc:'Picnic table, fire ring, but no nearby reliable water or outhouse<br /><br />Location: <b>42.9157, -78.4241  or N42 54.9425 W78 25.448</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.90797,lon:-78.42492,color:''
,name:'C08PotablWater',desc:'Potable water in state park<br /><br />Location: <b>42.908, -78.4249  or N42 54.4782 W78 25.495</b>',icon:'Drinking Water',scale: 2, folder:'Water'});
GV_Draw_Marker({lat:42.98478,lon:-78.34854,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "CT8 - Darien Lake"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Jul 22, 2018</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT08\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CT08.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map CT8 shows the Conservation Trail in Wyoming-Genesee counties from Getman Rd to NY-5 (Main Rd). <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT8\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:42.90778,lon:-78.42706,color:''
,name:'Darien Lake State Park Campground',desc:'Full facility campground with electric hookups, water, showers, picnic tables<br /><br />Location: <b>42.9078, -78.4271  or N42 54.4667 W78 25.6234</b>',icon:'Campground',scale: 1, folder:'Camping'});
GV_Draw_Marker({lat:42.91439,lon:-78.41317,color:''
,name:'Darien Lake S. P. Lean-to',desc:'Picnic table, fire ring, but no nearby reliable water or outhouse<br /><br />Location: <b>42.9144, -78.4132  or N42 54.8631 W78 24.7903</b>',icon:'Campground',scale: 1, folder:'Camping'});

t =  499 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C08DarLeanTo - 0.52 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.91007,-78.41849],[42.91009,-78.41846],[42.91012,-78.41845],[42.91017,-78.41842],[42.91021,-78.41837],[42.91025,-78.41833],[42.91028,-78.41828],[42.91031,-78.41823],[42.91034,-78.4182],[42.91036,-78.41815],
[42.91037,-78.41809],[42.91039,-78.41802],[42.91036,-78.41796],[42.91035,-78.41788],[42.91037,-78.41782],[42.91041,-78.4178],[42.91042,-78.41775],[42.91043,-78.4177],[42.91044,-78.41764],[42.91048,-78.41758],
[42.9105,-78.41753],[42.91054,-78.41749],[42.91058,-78.41744],[42.9106,-78.41737],[42.91062,-78.41733],[42.91064,-78.41727],[42.91066,-78.41723],[42.9107,-78.41717],[42.91071,-78.41713],[42.91072,-78.41707],
[42.91075,-78.41701],[42.91077,-78.41695],[42.91079,-78.41689],[42.91082,-78.41684],[42.91084,-78.41679],[42.91085,-78.41672],[42.91086,-78.41666],[42.91086,-78.41662],[42.91086,-78.41656],[42.91087,-78.4165],
[42.91089,-78.41644],[42.91091,-78.41638],[42.91093,-78.41632],[42.91093,-78.41627],[42.91094,-78.41621],[42.91095,-78.41615],[42.91094,-78.4161],[42.91095,-78.41604],[42.91093,-78.41599],[42.91093,-78.41599],
[42.91094,-78.41599],[42.91093,-78.41597],[42.91095,-78.41596],[42.91103,-78.41591],[42.91106,-78.41589],[42.91111,-78.41589],[42.91114,-78.41587],[42.91116,-78.41586],[42.91117,-78.41586],[42.91122,-78.41584],
[42.91128,-78.41584],[42.91133,-78.41583],[42.91138,-78.41584],[42.91142,-78.41583],[42.91148,-78.41586],[42.91155,-78.41587],[42.91161,-78.41589],[42.91167,-78.4159],[42.91173,-78.41591],[42.91178,-78.41592],
[42.91184,-78.41594],[42.91187,-78.41599],[42.91188,-78.41605],[42.9119,-78.41608],[42.91192,-78.41614],[42.91195,-78.41618],[42.91199,-78.41623],[42.91203,-78.41631],[42.91209,-78.41635],[42.91214,-78.41639],
[42.9122,-78.41641],[42.91225,-78.41644],[42.9123,-78.41643],[42.91232,-78.41643],[42.91233,-78.41642],[42.91233,-78.41643],[42.91234,-78.41643],[42.91235,-78.41644],[42.91237,-78.41644],[42.9124,-78.41646],
[42.91245,-78.4165],[42.91248,-78.41654],[42.9125,-78.41656],[42.91256,-78.41658],[42.91259,-78.41657],[42.91264,-78.41657],[42.91269,-78.41653],[42.91273,-78.4165],[42.91276,-78.41645],[42.91276,-78.41639],
[42.91278,-78.41635],[42.91279,-78.4163],[42.91282,-78.41625],[42.91285,-78.41618],[42.91288,-78.41615],[42.91293,-78.41612],[42.91296,-78.41607],[42.913,-78.41602],[42.91303,-78.41599],[42.91306,-78.41594],
[42.9131,-78.41588],[42.91314,-78.41583],[42.91316,-78.4158],[42.9132,-78.41578],[42.91325,-78.41576],[42.91329,-78.41572],[42.91333,-78.41568],[42.91338,-78.41566],[42.91342,-78.41564],[42.91347,-78.41563],
[42.91351,-78.41561],[42.91355,-78.41558],[42.91359,-78.41553],[42.91361,-78.41546],[42.91364,-78.41538],[42.91365,-78.41531],[42.91364,-78.41525],[42.91365,-78.4152],[42.91366,-78.41515],[42.91367,-78.41509],
[42.91366,-78.41505],[42.91367,-78.41497],[42.91367,-78.41489],[42.91369,-78.41483],[42.91372,-78.4148],[42.91373,-78.41474],[42.91376,-78.41471],[42.9138,-78.41467],[42.91384,-78.41464],[42.91389,-78.4146],
[42.91393,-78.41454],[42.91396,-78.41451],[42.914,-78.41446],[42.91405,-78.4144],[42.91408,-78.41435],[42.91412,-78.4143],[42.91415,-78.41424],[42.91419,-78.41419],[42.91422,-78.41412],[42.91424,-78.41405],
[42.91426,-78.41399],[42.9143,-78.41393],[42.91431,-78.41388],[42.91434,-78.41385],[42.91435,-78.41379],[42.91435,-78.41375],[42.91436,-78.41369],[42.91437,-78.41362],[42.91437,-78.41354],[42.91437,-78.41347],
[42.91439,-78.41338],[42.91441,-78.41328],[42.91438,-78.41319],[42.91437,-78.41318],[42.91439,-78.41319],[42.91439,-78.41316],[42.91441,-78.41316],[42.9144,-78.41318],[42.9144,-78.41318],[42.9144,-78.41316],
[42.91439,-78.41316],[42.9144,-78.41316],[42.9144,-78.41315]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.91437,lon:-78.41345,color:'#00B0D8',name:'C08DarLeanTo - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 73 })

t =  500 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C08HBP01 - 4.26 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.93773,-78.44057],[42.94071,-78.44069],[42.94169,-78.44073],[42.94409,-78.44069],[42.94548,-78.44033],[42.95242,-78.44049],[42.95236,-78.44042],[42.95133,-78.44511],[42.95253,-78.44528],[42.95422,-78.44541],
[42.95541,-78.44574],[42.95685,-78.44627],[42.95724,-78.44629],[42.95964,-78.4463],[42.96239,-78.44627],[42.96574,-78.44622],[42.96824,-78.4461],[42.97178,-78.44588],[42.97231,-78.44587],[42.97321,-78.44601],
[42.97439,-78.44636],[42.9753,-78.44627],[42.97526,-78.44636],[42.97733,-78.42045]
 ] }); GV_Draw_Track(t);

t =  501 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C08HBP02 - 3.53 miles (closure bypass)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'red'; trk_info[t]['width'] =  1 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_info[t]['outline_color'] = 'pink';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 0.5 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.85688,-78.4325],[42.85786,-78.43251],[42.85882,-78.43249],[42.86019,-78.43248],[42.86115,-78.43245],[42.86215,-78.43242],[42.86314,-78.43243],[42.86399,-78.43239],[42.8647,-78.4324],[42.86473,-78.43238],
[42.86566,-78.43237],[42.86655,-78.43233],[42.86752,-78.43231],[42.86873,-78.4323],[42.86977,-78.43229],[42.87071,-78.43234],[42.87165,-78.4324],[42.8723,-78.4324],[42.87327,-78.43241],[42.87332,-78.43245],
[42.87426,-78.43242],[42.87528,-78.43239],[42.87608,-78.43243],[42.87706,-78.43246],[42.87776,-78.43253],[42.87787,-78.43244],[42.87805,-78.43234],[42.87814,-78.43202],[42.87819,-78.43191],[42.8784,-78.43171],
[42.87862,-78.43164],[42.87912,-78.43149],[42.87989,-78.43131],[42.88056,-78.43114],[42.88082,-78.43105],[42.88118,-78.4311],[42.88152,-78.43116],[42.88153,-78.43119],[42.88167,-78.43125],[42.88179,-78.43137],
[42.88203,-78.43159],[42.88259,-78.43212],[42.88295,-78.43248],[42.88343,-78.43256],[42.88394,-78.43258],[42.88485,-78.43261],[42.88487,-78.43262],[42.88573,-78.43262],[42.88661,-78.43267],[42.8872,-78.43268],
[42.88756,-78.4324],[42.88794,-78.43203],[42.88818,-78.43194],[42.88854,-78.43193],[42.88883,-78.43198],[42.88902,-78.43204],[42.88993,-78.43264],[42.88996,-78.43264],[42.89079,-78.43281],[42.89157,-78.43283],
[42.89263,-78.43283],[42.89349,-78.43285],[42.89448,-78.43287],[42.8945,-78.43288],[42.8948,-78.43281],[42.89554,-78.43283],[42.89589,-78.43281],[42.89621,-78.43287],[42.89684,-78.43295],[42.8973,-78.43299],
[42.89792,-78.433],[42.89902,-78.43304],[42.89993,-78.43305],[42.89994,-78.43304],[42.90037,-78.43309],[42.90037,-78.43125],[42.90041,-78.43033],[42.90044,-78.42923],[42.90044,-78.42924],[42.90045,-78.42777],
[42.90047,-78.42678],[42.9005,-78.42564],[42.90053,-78.42481],[42.90056,-78.42401]
 ] }); GV_Draw_Track(t);

t =  502 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C08LeanTo - 0.02 miles (blue blazed spur)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = '#00B0D8'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.91558,-78.42382],[42.91568,-78.42399],[42.91571,-78.42412]
 ] }); GV_Draw_Track(t);

t =  503 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C08TF - 15.45 miles (orange blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT08\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/CT08.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.85693,-78.42503],[42.85699,-78.42398],[42.85711,-78.42398],[42.85717,-78.42393],[42.85769,-78.42393],[42.85774,-78.42384],[42.85812,-78.42367],[42.8583,-78.42386],[42.85862,-78.4239],[42.859,-78.42382],
[42.85932,-78.42391],[42.85972,-78.42374],[42.85977,-78.4238],[42.85982,-78.42422],[42.85978,-78.42437],[42.85979,-78.42455],[42.85971,-78.42476],[42.85973,-78.42531],[42.85999,-78.42547],[42.86042,-78.42527],
[42.86065,-78.42462],[42.86091,-78.4243],[42.86101,-78.42426],[42.86109,-78.42445],[42.86119,-78.42456],[42.86134,-78.42461],[42.8615,-78.42458],[42.86159,-78.42444],[42.86171,-78.42408],[42.86184,-78.42397],
[42.86178,-78.4236],[42.86181,-78.42331],[42.86176,-78.42322],[42.86174,-78.42282],[42.8618,-78.4224],[42.86174,-78.42211],[42.86176,-78.42169],[42.86183,-78.42164],[42.86187,-78.42139],[42.86197,-78.42119],
[42.86214,-78.42106],[42.86239,-78.42102],[42.86275,-78.42082],[42.86296,-78.42063],[42.86311,-78.42063],[42.86333,-78.42043],[42.86336,-78.42019],[42.86327,-78.41983],[42.86326,-78.41945],[42.86321,-78.41923],
[42.86325,-78.41868],[42.86335,-78.41841],[42.86347,-78.41827],[42.86385,-78.41819],[42.86466,-78.41775],[42.8647,-78.41764],[42.86492,-78.41751],[42.86521,-78.41695],[42.86542,-78.41681],[42.86572,-78.41678],
[42.86597,-78.41666],[42.86627,-78.41662],[42.86666,-78.41696],[42.86704,-78.41629],[42.86711,-78.41631],[42.86738,-78.41677],[42.86746,-78.41666],[42.86799,-78.41651],[42.868,-78.41701],[42.86779,-78.41884],
[42.86783,-78.41968],[42.86821,-78.41985],[42.86874,-78.41962],[42.86889,-78.41946],[42.86924,-78.41946],[42.8695,-78.41927],[42.86959,-78.4191],[42.86968,-78.41902],[42.86992,-78.41911],[42.87022,-78.4191],
[42.8704,-78.41901],[42.87053,-78.41884],[42.87051,-78.41869],[42.87064,-78.41844],[42.8708,-78.41797],[42.87088,-78.41753],[42.87097,-78.41734],[42.87106,-78.41729],[42.87108,-78.41721],[42.87119,-78.41713],
[42.87155,-78.41707],[42.87177,-78.41714],[42.87204,-78.41752],[42.87219,-78.41747],[42.8725,-78.41717],[42.87287,-78.41703],[42.87333,-78.41659],[42.8737,-78.4164],[42.87392,-78.41592],[42.87422,-78.41553],
[42.87439,-78.41524],[42.87458,-78.41512],[42.87479,-78.41487],[42.87531,-78.41472],[42.87545,-78.41463],[42.87559,-78.4142],[42.87565,-78.41418],[42.87577,-78.41396],[42.87582,-78.41376],[42.87581,-78.41265],
[42.87585,-78.41251],[42.87586,-78.412],[42.87592,-78.41172],[42.87596,-78.41105],[42.87588,-78.41061],[42.87589,-78.41046],[42.87595,-78.41033],[42.87586,-78.40966],[42.87595,-78.40874],[42.8764,-78.40867],
[42.87651,-78.40871],[42.87702,-78.40866],[42.87734,-78.40869],[42.87746,-78.40865],[42.87837,-78.40871],[42.8784,-78.40886],[42.87837,-78.41171],[42.8783,-78.4134],[42.87833,-78.41431],[42.87829,-78.41461],
[42.87831,-78.41544],[42.87821,-78.41728],[42.87824,-78.41743],[42.87821,-78.41879],[42.87825,-78.41885],[42.87842,-78.41888],[42.87856,-78.41901],[42.87933,-78.41926],[42.87959,-78.4194],[42.87997,-78.4193],
[42.88014,-78.41906],[42.88038,-78.41853],[42.88058,-78.41848],[42.8808,-78.41858],[42.88102,-78.41848],[42.88136,-78.41845],[42.88154,-78.41854],[42.88169,-78.41875],[42.88168,-78.41903],[42.88179,-78.42],
[42.88173,-78.42029],[42.88155,-78.42064],[42.88167,-78.42128],[42.8816,-78.42158],[42.88162,-78.42206],[42.88168,-78.42236],[42.88165,-78.42369],[42.88169,-78.42412],[42.88187,-78.42416],[42.88237,-78.42401],
[42.88251,-78.42374],[42.8826,-78.42367],[42.88286,-78.42374],[42.88363,-78.42355],[42.88401,-78.42361],[42.88425,-78.42351],[42.88499,-78.42358],[42.8859,-78.42345],[42.88605,-78.42349],[42.8867,-78.42321],
[42.88746,-78.42348],[42.88816,-78.42358],[42.88834,-78.42365],[42.8895,-78.42384],[42.8901,-78.42376],[42.89028,-78.42384],[42.89061,-78.42387],[42.89079,-78.42402],[42.89099,-78.42436],[42.8908,-78.42472],
[42.89091,-78.42493],[42.89082,-78.42545],[42.89103,-78.42555],[42.89164,-78.4256],[42.89174,-78.42566],[42.89199,-78.42567],[42.89217,-78.42578],[42.89219,-78.42593],[42.89235,-78.42619],[42.89267,-78.42619],
[42.8928,-78.42613],[42.89294,-78.42619],[42.89307,-78.42614],[42.89331,-78.42583],[42.89342,-78.4258],[42.89347,-78.42567],[42.89349,-78.42528],[42.89353,-78.42519],[42.89393,-78.42484],[42.89394,-78.42473] ] });
trk_segments[t].push({ points:[[42.89394,-78.42473],
[42.89383,-78.42432],[42.89384,-78.4241],[42.89373,-78.42364],[42.8938,-78.42339],[42.89375,-78.42311],[42.89383,-78.42284],[42.89393,-78.4228],[42.89403,-78.42287],[42.89411,-78.42312],[42.89426,-78.42331],
[42.89444,-78.42329],[42.89459,-78.42311],[42.89473,-78.42309],[42.89483,-78.42298],[42.89498,-78.42297],[42.89505,-78.42304],[42.89512,-78.42301],[42.89517,-78.42278],[42.89524,-78.42269],[42.89546,-78.42277],
[42.89565,-78.42264],[42.89601,-78.42259],[42.89648,-78.42267],[42.89666,-78.42262],[42.89732,-78.42269],[42.89773,-78.42264],[42.89794,-78.42268],[42.89807,-78.42265],[42.89852,-78.42278],[42.89861,-78.42304],
[42.8988,-78.42335],[42.8988,-78.42345],[42.89899,-78.42365],[42.89904,-78.4238],[42.89912,-78.42387],[42.89952,-78.42374],[42.89966,-78.42377],[42.89982,-78.42401],[42.89994,-78.42394],[42.9002,-78.42406],
[42.90044,-78.42407],[42.90057,-78.42399],[42.90059,-78.42278],[42.90068,-78.42271],[42.90084,-78.42281],[42.90094,-78.42279],[42.901,-78.42284],[42.90139,-78.42288],[42.90186,-78.42306],[42.902,-78.42319],
[42.90211,-78.42321],[42.90223,-78.42311],[42.90216,-78.42263],[42.90213,-78.42262],[42.90214,-78.42241],[42.90231,-78.42241],[42.90241,-78.42264],[42.90241,-78.42284],[42.90254,-78.42295],[42.90277,-78.42302],
[42.9029,-78.42291],[42.90307,-78.42285],[42.90327,-78.42297],[42.90368,-78.42284],[42.90379,-78.42291],[42.90387,-78.42287],[42.90384,-78.42289],[42.90416,-78.42254],[42.90453,-78.42237],[42.90469,-78.42224],
[42.90517,-78.4223],[42.9054,-78.42179],[42.90546,-78.42143],[42.9056,-78.42114],[42.90581,-78.4211],[42.90594,-78.42116],[42.90644,-78.42108],[42.90672,-78.4211],[42.90677,-78.42107],[42.90677,-78.42059],
[42.90645,-78.41966],[42.90703,-78.41919],[42.9076,-78.41904],[42.90786,-78.41933],[42.90806,-78.41927],[42.90823,-78.4193],[42.9085,-78.41917],[42.90895,-78.41907],[42.90917,-78.41895],[42.90923,-78.41888],
[42.90931,-78.41888],[42.90963,-78.41853],[42.90974,-78.41848],[42.91007,-78.41849],[42.91021,-78.41865],[42.91025,-78.41878],[42.91035,-78.41885],[42.91088,-78.41987],[42.91129,-78.4203],[42.91137,-78.42033],
[42.91149,-78.4203],[42.91187,-78.42045],[42.91222,-78.42078],[42.91249,-78.42089],[42.9128,-78.42123],[42.9128,-78.42133],[42.91293,-78.42165],[42.91331,-78.42166],[42.91349,-78.42185],[42.91357,-78.42217],
[42.91369,-78.42228],[42.91376,-78.42242],[42.91385,-78.42294],[42.914,-78.42314],[42.91417,-78.42319],[42.91435,-78.42333],[42.91434,-78.42339],[42.91452,-78.42345],[42.91465,-78.42341],[42.91477,-78.42351],
[42.91487,-78.42353],[42.91492,-78.42362],[42.91508,-78.4237],[42.91528,-78.42397],[42.91538,-78.42399],[42.91574,-78.42373],[42.91605,-78.42335],[42.91624,-78.42283],[42.91653,-78.42263],[42.91677,-78.42265],
[42.91684,-78.42278],[42.91701,-78.42289],[42.91715,-78.4231],[42.91719,-78.42327],[42.91719,-78.42352],[42.91725,-78.42358],[42.91739,-78.42348],[42.91761,-78.42353],[42.91783,-78.42274],[42.91789,-78.42266],
[42.9181,-78.42278],[42.91811,-78.42313],[42.91816,-78.42327],[42.91824,-78.42331],[42.91847,-78.42314],[42.91879,-78.42322],[42.91885,-78.42317],[42.9191,-78.42313],[42.91913,-78.42309],[42.9192,-78.42313],
[42.91959,-78.42307],[42.91992,-78.42322],[42.92,-78.42339],[42.92015,-78.42342],[42.9202,-78.42336],[42.92059,-78.42343],[42.92084,-78.42359],[42.92093,-78.42355],[42.92102,-78.42361],[42.92133,-78.42355],
[42.92147,-78.42338],[42.92176,-78.42342],[42.92189,-78.4232],[42.92196,-78.4224],[42.92212,-78.42226],[42.92212,-78.42219],[42.92234,-78.42181],[42.92258,-78.42181],[42.92226,-78.43348],[42.92626,-78.4364],
[42.92767,-78.43736],[42.92932,-78.43883],[42.93259,-78.44105],[42.93292,-78.44113],[42.93451,-78.44094],[42.93597,-78.44085],[42.93768,-78.44061],[42.93774,-78.43634],[42.93807,-78.43343],[42.9381,-78.43265],
[42.93807,-78.43185],[42.93822,-78.43052],[42.93889,-78.42823],[42.93928,-78.42672],[42.93937,-78.42101],[42.93984,-78.42101],[42.94011,-78.42086],[42.9403,-78.42067],[42.94081,-78.42058],[42.9412,-78.41987],
[42.94175,-78.4194],[42.94252,-78.41937],[42.94484,-78.41952],[42.94525,-78.41945],[42.94605,-78.41953],[42.94644,-78.41946],[42.94733,-78.41957],[42.94754,-78.41969],[42.94778,-78.42002],[42.94802,-78.42026] ] });
trk_segments[t].push({ points:[[42.94802,-78.42026],
[42.94812,-78.42042],[42.94925,-78.42102],[42.94952,-78.42107],[42.95004,-78.42105],[42.95033,-78.42095],[42.951,-78.42085],[42.95247,-78.4209],[42.95276,-78.42103],[42.95298,-78.42104],[42.95321,-78.42093],
[42.95355,-78.42098],[42.95445,-78.42082],[42.95509,-78.42063],[42.95714,-78.42065],[42.95702,-78.42141],[42.95693,-78.42175],[42.95671,-78.42323],[42.95756,-78.42337],[42.95779,-78.42356],[42.95792,-78.42416],
[42.95812,-78.4242],[42.9589,-78.42419],[42.95957,-78.42412],[42.9612,-78.42417],[42.96165,-78.42395],[42.96385,-78.42343],[42.96396,-78.42347],[42.96424,-78.42374],[42.96462,-78.42432],[42.96473,-78.42467],
[42.9649,-78.4261],[42.96489,-78.42629],[42.96475,-78.42647],[42.9645,-78.427],[42.9644,-78.42729],[42.96412,-78.42785],[42.96408,-78.42812],[42.96414,-78.42834],[42.96431,-78.42834],[42.96451,-78.42844],
[42.96478,-78.42846],[42.96522,-78.42824],[42.96541,-78.42843],[42.96556,-78.42842],[42.96581,-78.4282],[42.96593,-78.42818],[42.9662,-78.42857],[42.96638,-78.42867],[42.96787,-78.42861],[42.9682,-78.42868],
[42.96881,-78.4286],[42.96887,-78.42853],[42.96901,-78.42854],[42.96962,-78.42826],[42.96968,-78.42817],[42.96978,-78.42754],[42.97016,-78.42724],[42.97026,-78.42706],[42.97057,-78.42681],[42.97073,-78.42645],
[42.97077,-78.42605],[42.97086,-78.42588],[42.97119,-78.42558],[42.97139,-78.42511],[42.97135,-78.42489],[42.97122,-78.42472],[42.97125,-78.42421],[42.97119,-78.42375],[42.97127,-78.42356],[42.97159,-78.42345],
[42.97157,-78.42337],[42.97164,-78.42338],[42.97177,-78.42316],[42.97178,-78.4228],[42.97183,-78.42265],[42.97177,-78.42196],[42.97185,-78.42117],[42.97196,-78.42074],[42.97216,-78.42061],[42.97243,-78.42056],
[42.97321,-78.42061],[42.97553,-78.42046],[42.97578,-78.42052],[42.97878,-78.42048],[42.97929,-78.42038],[42.98174,-78.4191],[42.98236,-78.41887],[42.98327,-78.41869],[42.98382,-78.41843],[42.98475,-78.41767],
[42.98796,-78.41606],[42.9883,-78.41597],[42.99286,-78.41572],[42.99291,-78.41579],[42.993,-78.41757],[42.99316,-78.41874],[42.99431,-78.42376],[42.99497,-78.42696],[42.99526,-78.42797],[42.99534,-78.42799]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.86153,lon:-78.42452,color:'orange',name:'C08TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 46 })
GV_Draw_Marker({lat:42.86472,lon:-78.41763,color:'orange',name:'C08TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 23 })
GV_Draw_Marker({lat:42.86862,lon:-78.41967,color:'orange',name:'C08TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 18 })
GV_Draw_Marker({lat:42.87416,lon:-78.41561,color:'orange',name:'C08TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 43 })
GV_Draw_Marker({lat:42.87716,lon:-78.40867,color:'orange',name:'C08TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 356 })
GV_Draw_Marker({lat:42.87823,lon:-78.41691,color:'orange',name:'C08TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 266 })
GV_Draw_Marker({lat:42.88165,lon:-78.4212,color:'orange',name:'C08TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 284 })
GV_Draw_Marker({lat:42.88657,lon:-78.42326,color:'orange',name:'C08TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 18 })
GV_Draw_Marker({lat:42.89232,lon:-78.42613,color:'orange',name:'C08TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 311 })
GV_Draw_Marker({lat:42.89687,lon:-78.42264,color:'orange',name:'C08TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 356 })
GV_Draw_Marker({lat:42.90217,lon:-78.42269,color:'orange',name:'C08TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 101 })
GV_Draw_Marker({lat:42.9066,lon:-78.41954,color:'orange',name:'C08TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 30 })
GV_Draw_Marker({lat:42.91272,lon:-78.42114,color:'orange',name:'C08TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 321 })
GV_Draw_Marker({lat:42.91774,lon:-78.42305,color:'orange',name:'C08TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 69 })
GV_Draw_Marker({lat:42.92255,lon:-78.42291,color:'orange',name:'C08TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 268 })
GV_Draw_Marker({lat:42.9223,lon:-78.43279,color:'orange',name:'C08TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 268 })
GV_Draw_Marker({lat:42.92819,lon:-78.43782,color:'orange',name:'C08TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 327 })
GV_Draw_Marker({lat:42.93481,lon:-78.44092,color:'orange',name:'C08TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 3 })
GV_Draw_Marker({lat:42.93793,lon:-78.43468,color:'orange',name:'C08TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 81 })
GV_Draw_Marker({lat:42.9393,lon:-78.42509,color:'orange',name:'C08TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 89 })
GV_Draw_Marker({lat:42.94318,lon:-78.41942,color:'orange',name:'C08TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 357 })
GV_Draw_Marker({lat:42.95009,lon:-78.42104,color:'orange',name:'C08TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 14 })
GV_Draw_Marker({lat:42.95712,lon:-78.42081,color:'orange',name:'C08TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 258 })
GV_Draw_Marker({lat:42.96172,lon:-78.42393,color:'orange',name:'C08TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 10 })
GV_Draw_Marker({lat:42.96493,lon:-78.42839,color:'orange',name:'C08TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 20 })
GV_Draw_Marker({lat:42.97084,lon:-78.42593,color:'orange',name:'C08TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 53 })
GV_Draw_Marker({lat:42.97465,lon:-78.4205,color:'orange',name:'C08TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 3 })
GV_Draw_Marker({lat:42.9817,lon:-78.41912,color:'orange',name:'C08TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 21 })
GV_Draw_Marker({lat:42.9885,lon:-78.41596,color:'orange',name:'C08TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 2 })
GV_Draw_Marker({lat:42.99335,lon:-78.41956,color:'orange',name:'C08TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 287 })

t =  504 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C08X1HntClose - 2.36 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.85699,-78.42398],[42.85711,-78.42398],[42.85717,-78.42393],[42.85769,-78.42393],[42.85774,-78.42384],[42.85812,-78.42367],[42.8583,-78.42386],[42.85862,-78.4239],[42.859,-78.42382],[42.85932,-78.42391],
[42.85972,-78.42374],[42.85977,-78.4238],[42.85982,-78.42422],[42.85978,-78.42437],[42.85979,-78.42455],[42.85971,-78.42476],[42.85973,-78.42531],[42.85999,-78.42547],[42.86042,-78.42527],[42.86065,-78.42462],
[42.86091,-78.4243],[42.86101,-78.42426],[42.86109,-78.42445],[42.86119,-78.42456],[42.86134,-78.42461],[42.8615,-78.42458],[42.86159,-78.42444],[42.86171,-78.42408],[42.86184,-78.42397],[42.86178,-78.4236],
[42.86181,-78.42331],[42.86176,-78.42322],[42.86174,-78.42282],[42.8618,-78.4224],[42.86174,-78.42211],[42.86176,-78.42169],[42.86183,-78.42164],[42.86187,-78.42139],[42.86197,-78.42119],[42.86214,-78.42106],
[42.86239,-78.42102],[42.86275,-78.42082],[42.86296,-78.42063],[42.86311,-78.42063],[42.86333,-78.42043],[42.86336,-78.42019],[42.86327,-78.41983],[42.86326,-78.41945],[42.86321,-78.41923],[42.86325,-78.41868],
[42.86335,-78.41841],[42.86347,-78.41827],[42.86385,-78.41819],[42.86466,-78.41775],[42.8647,-78.41764],[42.86492,-78.41751],[42.86521,-78.41695],[42.86542,-78.41681],[42.86572,-78.41678],[42.86597,-78.41666],
[42.86627,-78.41662],[42.86666,-78.41696],[42.86704,-78.41629],[42.86711,-78.41631],[42.86738,-78.41677],[42.86746,-78.41666],[42.86799,-78.41651],[42.868,-78.41701],[42.86779,-78.41884],[42.86783,-78.41968],
[42.86821,-78.41985],[42.86874,-78.41962],[42.86889,-78.41946],[42.86924,-78.41946],[42.8695,-78.41927],[42.86959,-78.4191],[42.86968,-78.41902],[42.86992,-78.41911],[42.87022,-78.4191],[42.8704,-78.41901],
[42.87053,-78.41884],[42.87051,-78.41869],[42.87064,-78.41844],[42.8708,-78.41797],[42.87088,-78.41753],[42.87097,-78.41734],[42.87106,-78.41729],[42.87108,-78.41721],[42.87119,-78.41713],[42.87155,-78.41707],
[42.87177,-78.41714],[42.87204,-78.41752],[42.87219,-78.41747],[42.8725,-78.41717],[42.87287,-78.41703],[42.87333,-78.41659],[42.8737,-78.4164],[42.87392,-78.41592],[42.87422,-78.41553],[42.87439,-78.41524],
[42.87458,-78.41512],[42.87479,-78.41487],[42.87531,-78.41472],[42.87545,-78.41463],[42.87559,-78.4142],[42.87565,-78.41418],[42.87577,-78.41396],[42.87582,-78.41376],[42.87581,-78.41265],[42.87585,-78.41251],
[42.87586,-78.412],[42.87592,-78.41172],[42.87596,-78.41105],[42.87588,-78.41061],[42.87589,-78.41046],[42.87595,-78.41033],[42.87586,-78.40966],[42.87595,-78.40874]
 ] }); GV_Draw_Track(t);

t =  505 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C08X2HntClose - 1.89 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.87821,-78.42474],[42.8788,-78.42471],[42.879,-78.42485],[42.87967,-78.42483],[42.8798,-78.42473],[42.88028,-78.42471],[42.88078,-78.42482],[42.8809,-78.4249],[42.88101,-78.42482],[42.88143,-78.42476],
[42.8815,-78.42466],[42.88155,-78.42429],[42.88177,-78.42413],[42.88187,-78.42416],[42.88237,-78.42401],[42.88251,-78.42374],[42.8826,-78.42367],[42.88286,-78.42374],[42.88363,-78.42355],[42.88401,-78.42361],
[42.88425,-78.42351],[42.88499,-78.42358],[42.8859,-78.42345],[42.88605,-78.42349],[42.8867,-78.42321],[42.88746,-78.42348],[42.8895,-78.42384],[42.8901,-78.42376],[42.89028,-78.42384],[42.89061,-78.42387],
[42.89079,-78.42402],[42.89099,-78.42436],[42.8908,-78.42472],[42.89091,-78.42493],[42.89082,-78.42545],[42.89103,-78.42555],[42.89164,-78.4256],[42.89174,-78.42566],[42.89199,-78.42567],[42.89217,-78.42578],
[42.89219,-78.42593],[42.89235,-78.42619],[42.89267,-78.42619],[42.8928,-78.42613],[42.89294,-78.42619],[42.89307,-78.42614],[42.89331,-78.42583],[42.89342,-78.4258],[42.89347,-78.42567],[42.89353,-78.42519],
[42.89393,-78.42484],[42.89394,-78.42473],[42.89383,-78.42432],[42.89384,-78.4241],[42.89373,-78.42364],[42.8938,-78.42339],[42.89375,-78.42311],[42.89383,-78.42284],[42.89393,-78.4228],[42.89403,-78.42287],
[42.89411,-78.42312],[42.89426,-78.42331],[42.89444,-78.42329],[42.89459,-78.42311],[42.89473,-78.42309],[42.89483,-78.42298],[42.89498,-78.42297],[42.89505,-78.42304],[42.89512,-78.42301],[42.89517,-78.42278],
[42.89524,-78.42269],[42.89546,-78.42277],[42.89565,-78.42264],[42.89601,-78.42259],[42.89648,-78.42267],[42.89666,-78.42262],[42.89732,-78.42269],[42.89773,-78.42264],[42.89794,-78.42268],[42.89807,-78.42265],
[42.89852,-78.42278],[42.89861,-78.42304],[42.8988,-78.42335],[42.8988,-78.42345],[42.89899,-78.42365],[42.89904,-78.4238],[42.89912,-78.42387],[42.89952,-78.42374],[42.89966,-78.42377],[42.89982,-78.42401],
[42.89994,-78.42394],[42.9002,-78.42406]
 ] }); GV_Draw_Track(t);

t =  506 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C08X3HntClose - 1.04 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.93937,-78.42101],[42.93984,-78.42101],[42.94011,-78.42086],[42.9403,-78.42067],[42.94081,-78.42058],[42.9412,-78.41987],[42.94175,-78.4194],[42.94252,-78.41937],[42.94484,-78.41952],[42.94525,-78.41945],
[42.94605,-78.41953],[42.94644,-78.41946],[42.94733,-78.41957],[42.94754,-78.41969],[42.94778,-78.42002],[42.94802,-78.42026],[42.94812,-78.42042],[42.94925,-78.42102],[42.94952,-78.42107],[42.95004,-78.42105],
[42.95033,-78.42095],[42.951,-78.42085],[42.95247,-78.4209],[42.95276,-78.42103],[42.95298,-78.42104],[42.95321,-78.42093],[42.95355,-78.42098]
 ] }); GV_Draw_Track(t);

t =  507 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C08X4HntClose - 2.07 miles ( 15 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'black'; trk_info[t]['width'] =  4 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 40; trk_info[t]['outline_color'] = 'red';  trk_info[t]['outline_width'] =  6 ; trk_info[t]['outline_opacity'] = 1 ;
; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.95671,-78.42323],[42.95756,-78.42337],[42.95779,-78.42356],[42.95792,-78.42416],[42.95812,-78.4242],[42.9589,-78.42419],[42.95957,-78.42412],[42.9612,-78.42417],[42.96165,-78.42395],[42.96385,-78.42343],
[42.96396,-78.42347],[42.96424,-78.42374],[42.96462,-78.42432],[42.96473,-78.42467],[42.9649,-78.4261],[42.96489,-78.42629],[42.96475,-78.42647],[42.9645,-78.427],[42.9644,-78.42729],[42.96412,-78.42785],
[42.96408,-78.42812],[42.96414,-78.42834],[42.96431,-78.42834],[42.96451,-78.42844],[42.96478,-78.42846],[42.96522,-78.42824],[42.96541,-78.42843],[42.96556,-78.42842],[42.96581,-78.4282],[42.96593,-78.42818],
[42.9662,-78.42857],[42.96638,-78.42867],[42.96787,-78.42861],[42.9682,-78.42868],[42.96881,-78.4286],[42.96887,-78.42853],[42.96901,-78.42854],[42.96962,-78.42826],[42.96968,-78.42817],[42.96978,-78.42754],
[42.97016,-78.42724],[42.97026,-78.42706],[42.97057,-78.42681],[42.97073,-78.42645],[42.97077,-78.42605],[42.97086,-78.42588],[42.97119,-78.42558],[42.97139,-78.42511],[42.97135,-78.42489],[42.97122,-78.42472],
[42.97125,-78.42421],[42.97119,-78.42375],[42.97127,-78.42356],[42.97159,-78.42345],[42.97157,-78.42337],[42.97164,-78.42338],[42.97177,-78.42316],[42.97178,-78.4228],[42.97183,-78.42265],[42.97177,-78.42196],
[42.97185,-78.42117],[42.97196,-78.42074],[42.97216,-78.42061],[42.97243,-78.42056],[42.97321,-78.42061],[42.97553,-78.42046],[42.97578,-78.42052],[42.97752,-78.42041]
 ] }); GV_Draw_Track(t);

t =  508 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">CT08 map coverage - 2.07 miles ( 12 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.99978,-78.32354],[42.99978,-78.4752],[42.84441,-78.4752],[42.84441,-78.32354],[42.99978,-78.32354]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:43.01362,lon:-78.48243,color:'',dd:true
,name:'Akron Falls County Park entrance on Skyline Drive',desc:'Ample parking in park<br /><br />Location: <b>43.0136, -78.4824  or N43 .8172 W78 28.9457</b><br /><br />This is <b>Map CT9</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.01178,lon:-78.52096,color:'',dd:true
,name:'Clarence Center Rd',desc:'Parking area<br /><br />Location: <b>43.0118, -78.521  or N43 .7066 W78 31.2577</b><br /><br />This is <b>Map CT9</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.09336,lon:-78.52827,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "CT9 - Akron"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Jul 1, 2009</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT09\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CT09.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map CT9 shows the Conservation Trail in Genesee-Erie counties from NY-5 (Main Rd) to Newstead Bikepath/Peanut Line. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT9\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:43.00626,lon:-78.43429,color:'',dd:true
,name:'Lake Rd (CR-4)',desc:'Shoulder parking<br /><br />Location: <b>43.0063, -78.4343  or N43 .3754 W78 26.0572</b><br /><br />This is <b>Map CT9</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.99527,lon:-78.42803,color:'',dd:true
,name:'NY-5 (Main Rd)',desc:'Shoulder parking<br /><br />Location: <b>42.9953, -78.428  or N42 59.7164 W78 25.6817</b><br /><br />This is <b>Map CT9</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.0189,lon:-78.50852,color:'',dd:true
,name:'Newstead Bike Path Entrance at Jackson St',desc:'Limited parking<br /><br />Location: <b>43.0189, -78.5085  or N43 1.1339 W78 30.5109</b><br /><br />This is <b>Map CT9</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  509 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C09TF - 7.52 miles (orange blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT09\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/CT09.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.99534,-78.42799],[42.99538,-78.42797],[42.99542,-78.42792],[42.99546,-78.42786],[42.99567,-78.42746],[42.99573,-78.42731],[42.99577,-78.42721],[42.99578,-78.42715],[42.99588,-78.42707],[42.99596,-78.42689],
[42.99602,-78.42681],[42.99616,-78.42655],[42.99633,-78.4262],[42.9964,-78.42607],[42.99654,-78.42581],[42.99669,-78.42557],[42.99698,-78.42503],[42.997,-78.42499],[42.99707,-78.42486],[42.99708,-78.4248],
[42.99724,-78.42456],[42.99728,-78.42456],[42.99732,-78.42458],[42.99738,-78.42463],[42.99742,-78.42461],[42.99744,-78.42459],[42.99747,-78.42454],[42.9975,-78.42444],[42.99756,-78.42436],[42.9976,-78.42425],
[42.99769,-78.42411],[42.9978,-78.42398],[42.99783,-78.42393],[42.99785,-78.42387],[42.998,-78.42361],[42.99802,-78.42356],[42.99808,-78.42346],[42.9981,-78.42341],[42.99818,-78.42328],[42.9982,-78.42321],
[42.99822,-78.42317],[42.99829,-78.42303],[42.99832,-78.42299],[42.99834,-78.42294],[42.99838,-78.42291],[42.99847,-78.42291],[42.99858,-78.42295],[42.99863,-78.42296],[42.99876,-78.423],[42.99891,-78.42301],
[42.99908,-78.42303],[42.99916,-78.42301],[42.99921,-78.42302],[42.99931,-78.42302],[42.9994,-78.42305],[42.99949,-78.42306],[42.99953,-78.42306],[42.99968,-78.42307],[42.99978,-78.42312],[42.99996,-78.42333],
[43.,-78.42336],[43.00006,-78.42338],[43.00033,-78.42341],[43.00059,-78.42346],[43.00075,-78.42346],[43.00086,-78.42348],[43.00105,-78.42347],[43.00124,-78.42344],[43.00146,-78.42336],[43.00154,-78.42335],
[43.00158,-78.42335],[43.00177,-78.42332],[43.00193,-78.42328],[43.00203,-78.42322],[43.00206,-78.4232],[43.00212,-78.42325],[43.00226,-78.42335],[43.00234,-78.42336],[43.00244,-78.42337],[43.00246,-78.4234],
[43.00267,-78.42347],[43.00271,-78.4235],[43.00272,-78.42352],[43.00275,-78.42372],[43.00273,-78.42383],[43.00273,-78.42402],[43.00273,-78.42406],[43.0027,-78.42416],[43.00271,-78.42426],[43.00271,-78.42431],
[43.00273,-78.42436],[43.00273,-78.42441],[43.00271,-78.42451],[43.00271,-78.42456],[43.00272,-78.42461],[43.00274,-78.42465],[43.00277,-78.42467],[43.00325,-78.42461],[43.00355,-78.4246],[43.00403,-78.42458],
[43.00464,-78.42454],[43.00479,-78.42451],[43.00489,-78.42451],[43.00492,-78.42449],[43.0051,-78.42447],[43.00511,-78.42448],[43.00513,-78.42457],[43.00524,-78.42558],[43.00545,-78.42739],[43.00547,-78.42755],
[43.0055,-78.42774],[43.00551,-78.42788],[43.00554,-78.42812],[43.00563,-78.4289],[43.00575,-78.42984],[43.00583,-78.43058],[43.00587,-78.43095],[43.00595,-78.43167],[43.00603,-78.43228],[43.00621,-78.43388],
[43.00625,-78.43409],[43.00625,-78.43422],[43.00627,-78.43436],[43.00628,-78.43436],[43.00626,-78.43468],[43.00626,-78.43473],[43.00629,-78.43485],[43.00631,-78.43507],[43.00647,-78.43625],[43.00658,-78.43722],
[43.00665,-78.43773],[43.00673,-78.43845],[43.00674,-78.43867],[43.00676,-78.43876],[43.00687,-78.43961],[43.00688,-78.43976],[43.00711,-78.44167],[43.00715,-78.4419],[43.00722,-78.44247],[43.00722,-78.44266],
[43.00726,-78.44281],[43.00727,-78.44299],[43.00735,-78.44374],[43.00737,-78.44383],[43.00744,-78.44437],[43.00747,-78.44459],[43.00747,-78.44464],[43.00747,-78.44469],[43.00748,-78.44473],[43.00748,-78.44478],
[43.0075,-78.44503],[43.0075,-78.44513],[43.00752,-78.44527],[43.00751,-78.44528],[43.00753,-78.44531],[43.00752,-78.44532],[43.00752,-78.44536],[43.00757,-78.44574],[43.00758,-78.44591],[43.00765,-78.44637],
[43.00767,-78.44647],[43.00774,-78.44709],[43.00781,-78.44781],[43.00796,-78.4491],[43.00802,-78.44957],[43.00805,-78.44986],[43.0081,-78.45025],[43.00811,-78.45052],[43.00814,-78.4506],[43.00815,-78.45068],
[43.00816,-78.45086],[43.00819,-78.4511],[43.00825,-78.4514],[43.00825,-78.45145],[43.00823,-78.4515],[43.00823,-78.45156],[43.00826,-78.45172],[43.00829,-78.45192],[43.00832,-78.45207],[43.00833,-78.45212],
[43.00832,-78.45217],[43.00841,-78.45283],[43.00844,-78.4532],[43.00847,-78.45336],[43.00866,-78.45498],[43.0087,-78.45541],[43.00884,-78.45658],[43.00908,-78.45861],[43.00923,-78.45987],[43.0093,-78.46055],
[43.00938,-78.46113],[43.00946,-78.4618],[43.00952,-78.4624],[43.00961,-78.46303],[43.00961,-78.46327],[43.00968,-78.4638],[43.00974,-78.46425],[43.00988,-78.46554],[43.00989,-78.46563],[43.00995,-78.46602] ] });
trk_segments[t].push({ points:[[43.00995,-78.46602],
[43.00999,-78.46642],[43.01013,-78.46765],[43.01013,-78.46781],[43.01017,-78.46798],[43.01021,-78.46831],[43.01022,-78.46851],[43.01028,-78.46894],[43.0103,-78.46921],[43.01033,-78.46939],[43.01039,-78.46993],
[43.01044,-78.47024],[43.01048,-78.47033],[43.01048,-78.47032],[43.01051,-78.47031],[43.01049,-78.4703],[43.01056,-78.47033],[43.01067,-78.47039],[43.01071,-78.4704],[43.0108,-78.4704],[43.01087,-78.47035],
[43.0109,-78.47033],[43.011,-78.47026],[43.01107,-78.47024],[43.01117,-78.47021],[43.01156,-78.47016],[43.01169,-78.47015],[43.01199,-78.47015],[43.01268,-78.4701],[43.01287,-78.47012],[43.01311,-78.47019],
[43.01317,-78.47019],[43.01318,-78.47021],[43.01336,-78.47026],[43.01363,-78.4703],[43.01367,-78.47034],[43.01371,-78.47035],[43.01378,-78.47035],[43.01389,-78.47039],[43.01391,-78.47038],[43.01392,-78.47035],
[43.01396,-78.47037],[43.01399,-78.47041],[43.01401,-78.47047],[43.0141,-78.47102],[43.01442,-78.47321],[43.01443,-78.47336],[43.01462,-78.47465],[43.01477,-78.47577],[43.01484,-78.47632],[43.01483,-78.47641],
[43.01481,-78.4765],[43.01474,-78.47663],[43.01473,-78.47661],[43.0147,-78.4766],[43.01467,-78.47661],[43.01464,-78.47659],[43.01456,-78.47658],[43.01441,-78.4766],[43.01425,-78.4766],[43.01362,-78.47663],
[43.01307,-78.47667],[43.01293,-78.47669],[43.01247,-78.47678],[43.01198,-78.47691],[43.01195,-78.47692],[43.01199,-78.47693],[43.01194,-78.47698],[43.01195,-78.47707],[43.01198,-78.47713],[43.01201,-78.47718],
[43.01204,-78.47726],[43.01211,-78.47745],[43.01218,-78.47771],[43.01225,-78.47793],[43.01243,-78.47857],[43.01252,-78.47884],[43.01294,-78.48031],[43.01301,-78.48057],[43.01325,-78.48143],[43.01334,-78.48177],
[43.0134,-78.48199],[43.01344,-78.48209],[43.01352,-78.48234],[43.01356,-78.48242],[43.0136,-78.48246],[43.01363,-78.48243],[43.0138,-78.48262],[43.01388,-78.48272],[43.01398,-78.48287],[43.01432,-78.48349],
[43.01434,-78.48355],[43.01464,-78.48406],[43.01467,-78.48409],[43.01471,-78.48409],[43.01475,-78.48406],[43.01481,-78.48399],[43.01484,-78.48397],[43.01496,-78.48396],[43.015,-78.48397],[43.01508,-78.48402],
[43.01511,-78.48406],[43.01515,-78.48415],[43.01521,-78.48421],[43.01524,-78.48425],[43.01527,-78.48434],[43.01527,-78.48438],[43.01526,-78.48443],[43.01525,-78.48459],[43.01523,-78.48466],[43.01524,-78.48487],
[43.01524,-78.48492],[43.01524,-78.48497],[43.01527,-78.48502],[43.01528,-78.48508],[43.01528,-78.48518],[43.01526,-78.48524],[43.01525,-78.4853],[43.01528,-78.48534],[43.01531,-78.48533],[43.01534,-78.4853],
[43.01535,-78.48527],[43.01538,-78.48505],[43.01541,-78.48491],[43.01544,-78.48492],[43.01547,-78.48502],[43.0155,-78.48514],[43.01552,-78.4852],[43.01553,-78.48525],[43.01559,-78.48541],[43.01561,-78.48552],
[43.01563,-78.48558],[43.01564,-78.48565],[43.01562,-78.48577],[43.01563,-78.48582],[43.01561,-78.48599],[43.01559,-78.48609],[43.01551,-78.48638],[43.01549,-78.48651],[43.01549,-78.48658],[43.01544,-78.48674],
[43.01534,-78.48713],[43.01531,-78.48719],[43.0153,-78.48725],[43.0152,-78.48743],[43.01516,-78.48758],[43.01513,-78.48786],[43.01513,-78.48792],[43.01514,-78.48797],[43.01509,-78.48818],[43.01509,-78.48825],
[43.01509,-78.48832],[43.01505,-78.48858],[43.01505,-78.48865],[43.015,-78.48881],[43.01499,-78.48887],[43.01498,-78.48921],[43.015,-78.48927],[43.01502,-78.48949],[43.01512,-78.48982],[43.01517,-78.4899],
[43.01523,-78.49012],[43.01527,-78.49026],[43.01529,-78.4903],[43.01533,-78.49028],[43.01539,-78.49023],[43.01547,-78.49029],[43.01555,-78.49041],[43.01556,-78.49047],[43.01559,-78.49051],[43.01567,-78.4907],
[43.0157,-78.4908],[43.01578,-78.49116],[43.01578,-78.49126],[43.01581,-78.49146],[43.01585,-78.49165],[43.01585,-78.49177],[43.01593,-78.49217],[43.01599,-78.49241],[43.01605,-78.49271],[43.01611,-78.49305],
[43.01614,-78.49322],[43.01617,-78.49335],[43.01619,-78.49351],[43.01621,-78.49358],[43.01623,-78.49371],[43.01629,-78.49393],[43.01632,-78.49416],[43.01635,-78.49449],[43.01638,-78.49462],[43.01639,-78.49474],
[43.01639,-78.49488],[43.01634,-78.49503],[43.01631,-78.49506],[43.01632,-78.49522],[43.01629,-78.49551],[43.01631,-78.49552],[43.0164,-78.49556],[43.01655,-78.4956],[43.0168,-78.49572],[43.01689,-78.49578] ] });
trk_segments[t].push({ points:[[43.01689,-78.49578],
[43.01715,-78.49599],[43.01737,-78.49619],[43.01742,-78.49624],[43.01746,-78.4963],[43.01751,-78.49645],[43.0176,-78.49685],[43.01765,-78.497],[43.01772,-78.49715],[43.01781,-78.49728],[43.01788,-78.49735],
[43.01795,-78.49741],[43.01811,-78.49749],[43.01838,-78.4976],[43.01844,-78.49764],[43.0185,-78.4977],[43.01854,-78.49779],[43.01857,-78.49789],[43.01859,-78.49804],[43.01859,-78.49829],[43.0186,-78.49838],
[43.01869,-78.49867],[43.01871,-78.49877],[43.01874,-78.49906],[43.01878,-78.5005],[43.01877,-78.50079],[43.01879,-78.50124],[43.01883,-78.50247],[43.01884,-78.50305],[43.01882,-78.50319],[43.01881,-78.50346],
[43.01881,-78.50371],[43.01879,-78.50393],[43.0188,-78.50396],[43.01879,-78.50401],[43.01881,-78.50425],[43.0188,-78.5043],[43.01882,-78.50435],[43.01885,-78.50529],[43.01885,-78.50552],[43.01886,-78.5058],
[43.01887,-78.50621],[43.01888,-78.50643],[43.01889,-78.50672],[43.01889,-78.50688],[43.01891,-78.50757],[43.0189,-78.5078],[43.01891,-78.50829],[43.0189,-78.50845],[43.01889,-78.50853],[43.01887,-78.50857],
[43.01885,-78.50861],[43.0188,-78.50872],[43.01789,-78.51032],[43.01783,-78.51041],[43.01773,-78.51061],[43.01749,-78.51102],[43.01698,-78.51194],[43.01689,-78.51208],[43.01638,-78.51299],[43.01611,-78.51346],
[43.01596,-78.51374],[43.01581,-78.51397],[43.0158,-78.51397],[43.01559,-78.51436],[43.01531,-78.51488],[43.0152,-78.51507],[43.01483,-78.51572],[43.01475,-78.51587],[43.01453,-78.51626],[43.01445,-78.51642],
[43.01412,-78.517],[43.014,-78.51719],[43.01345,-78.51822],[43.01266,-78.51962],[43.01231,-78.52023],[43.01216,-78.52051],[43.01204,-78.52069],[43.01184,-78.52104],[43.01176,-78.52118],[43.01171,-78.52127],
[43.01142,-78.52174],[43.01123,-78.5221],[43.01105,-78.52242],[43.01047,-78.52347],[43.01015,-78.52404],[43.01005,-78.52423],[43.0094,-78.52538],[43.00923,-78.52567],[43.00887,-78.52635],[43.00815,-78.5276],
[43.00751,-78.52875],[43.00705,-78.52963],[43.00656,-78.53061],[43.00591,-78.532],[43.00558,-78.53276],[43.0055,-78.53291],[43.00516,-78.53366],[43.005,-78.53402],[43.00494,-78.53425],[43.00488,-78.53452]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:43.00057,lon:-78.42346,color:'orange',name:'C09TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 352 })
GV_Draw_Marker({lat:43.00538,lon:-78.42685,color:'orange',name:'C09TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 279 })
GV_Draw_Marker({lat:43.00651,lon:-78.43659,color:'orange',name:'C09TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 279 })
GV_Draw_Marker({lat:43.00764,lon:-78.44633,color:'orange',name:'C09TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 281 })
GV_Draw_Marker({lat:43.00878,lon:-78.45608,color:'orange',name:'C09TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 279 })
GV_Draw_Marker({lat:43.00992,lon:-78.46585,color:'orange',name:'C09TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 282 })
GV_Draw_Marker({lat:43.01405,lon:-78.47074,color:'orange',name:'C09TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 283 })
GV_Draw_Marker({lat:43.01196,lon:-78.47692,color:'orange',name:'C09TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 351 })
GV_Draw_Marker({lat:43.01524,lon:-78.48487,color:'orange',name:'C09TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 279 })
GV_Draw_Marker({lat:43.0161,lon:-78.49298,color:'orange',name:'C09TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 283 })
GV_Draw_Marker({lat:43.01878,lon:-78.50097,color:'orange',name:'C09TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 273 })
GV_Draw_Marker({lat:43.01786,lon:-78.51037,color:'orange',name:'C09TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 229 })
GV_Draw_Marker({lat:43.01345,lon:-78.51821,color:'orange',name:'C09TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 233 })
GV_Draw_Marker({lat:43.00903,lon:-78.52605,color:'orange',name:'C09TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 234 })
GV_Draw_Marker({lat:43.00495,lon:-78.5342,color:'orange',name:'C09TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 249 })

t =  510 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">CT09 map coverage - 7.52 miles ( 12 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[43.10836,-78.3977],[43.10836,-78.54827],[42.95274,-78.54827],[42.95274,-78.3977],[43.10836,-78.3977]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:43.01524,lon:-78.63719,color:''
,name:'C10DrinkFountn',desc:'Drinking fountain<br /><br />Location: <b>43.0152, -78.6372  or N43 .9142 W78 38.2313</b>',icon:'Drinking Water',scale: 2, folder:'Water'});
GV_Draw_Marker({lat:43.00927,lon:-78.56139,color:'',dd:true
,name:'Clarence Center Rd',desc:'Parking area<br /><br />Location: <b>43.0093, -78.5614  or N43 .556 W78 33.6834</b><br /><br />This is <b>Map CT10</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.94198,lon:-78.71379,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "CT10 - Clarence Center"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Jul 1, 2009</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT10\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CT10.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map CT10 shows the Conservation Trail in Erie County from Newstead Bikepath/Peanut Line to E Pinelake Dr/Peanut Line. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT10\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:43.01514,lon:-78.63648,color:'',dd:true
,name:'Goodrich Rd Sheriff Substation',desc:'Parking at sheriff substation<br /><br />Location: <b>43.0151, -78.6365  or N43 .9087 W78 38.189</b><br /><br />This is <b>Map CT10</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.01665,lon:-78.66247,color:'',dd:true
,name:'Stahley Rd',desc:'Parking area<br /><br />Location: <b>43.0166, -78.6625  or N43 .9987 W78 39.7482</b><br /><br />This is <b>Map CT10</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  511 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C10TF - 10.34 miles (orange blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT10\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/CT10.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[43.00488,-78.53452],[43.0049,-78.53458],[43.0049,-78.53463],[43.00507,-78.53599],[43.00514,-78.53648],[43.00544,-78.53828],[43.0055,-78.53864],[43.00602,-78.5418],[43.00612,-78.54234],[43.00627,-78.54333],
[43.0063,-78.54347],[43.0064,-78.54406],[43.00644,-78.54427],[43.00653,-78.54478],[43.00661,-78.54535],[43.00664,-78.54549],[43.00694,-78.5473],[43.00697,-78.54752],[43.00702,-78.54788],[43.00711,-78.54831],
[43.00738,-78.54991],[43.00741,-78.55014],[43.00746,-78.55044],[43.00752,-78.55087],[43.00755,-78.55114],[43.00768,-78.55181],[43.00769,-78.5518],[43.00774,-78.55208],[43.00777,-78.55234],[43.0079,-78.55309],
[43.00792,-78.55323],[43.00815,-78.55459],[43.00821,-78.55503],[43.00854,-78.55699],[43.00856,-78.5572],[43.00875,-78.5584],[43.00891,-78.5593],[43.00902,-78.56005],[43.00905,-78.56018],[43.00914,-78.56075],
[43.00915,-78.56088],[43.00916,-78.56125],[43.00916,-78.56143],[43.00916,-78.56151],[43.00918,-78.56157],[43.00921,-78.5616],[43.00928,-78.56163],[43.00929,-78.56164],[43.00932,-78.56174],[43.00935,-78.56203],
[43.0094,-78.56231],[43.00951,-78.5631],[43.00957,-78.56339],[43.0096,-78.56356],[43.00965,-78.56384],[43.00974,-78.56445],[43.00977,-78.56456],[43.00982,-78.5649],[43.00989,-78.56527],[43.00993,-78.56552],
[43.00998,-78.56576],[43.01009,-78.56654],[43.01012,-78.5667],[43.01013,-78.56666],[43.01016,-78.56684],[43.01024,-78.56732],[43.01027,-78.56756],[43.01033,-78.56787],[43.0104,-78.56836],[43.01047,-78.56873],
[43.01055,-78.56922],[43.0107,-78.5701],[43.01073,-78.57029],[43.01095,-78.5716],[43.01103,-78.57211],[43.01123,-78.5733],[43.01135,-78.57398],[43.0116,-78.57554],[43.01161,-78.57574],[43.01166,-78.576],
[43.01174,-78.57675],[43.01176,-78.57699],[43.01179,-78.57725],[43.01181,-78.5775],[43.01182,-78.57782],[43.01186,-78.57832],[43.01187,-78.57859],[43.01189,-78.57892],[43.01194,-78.57993],[43.01197,-78.58055],
[43.01201,-78.58118],[43.01208,-78.58227],[43.01208,-78.58241],[43.01216,-78.5839],[43.0122,-78.58451],[43.01221,-78.58478],[43.01222,-78.58498],[43.01224,-78.58538],[43.01227,-78.58571],[43.01234,-78.58713],
[43.01235,-78.58737],[43.01236,-78.58748],[43.01236,-78.58748],[43.01237,-78.58763],[43.01237,-78.58774],[43.01241,-78.58814],[43.01241,-78.58829],[43.01243,-78.58856],[43.01256,-78.59062],[43.0126,-78.59134],
[43.01261,-78.59152],[43.01267,-78.59253],[43.01285,-78.59575],[43.01285,-78.59595],[43.01289,-78.59656],[43.01289,-78.5967],[43.01294,-78.59761],[43.01294,-78.59783],[43.013,-78.59883],[43.01302,-78.59904],
[43.01306,-78.59965],[43.01311,-78.60042],[43.01326,-78.60295],[43.01327,-78.60315],[43.0133,-78.60349],[43.01335,-78.60453],[43.01336,-78.6048],[43.01346,-78.60653],[43.01347,-78.60679],[43.01351,-78.60738],
[43.0135,-78.60738],[43.01351,-78.60751],[43.01352,-78.60763],[43.01354,-78.60769],[43.01355,-78.60794],[43.01354,-78.60801],[43.01358,-78.60841],[43.01368,-78.61004],[43.0137,-78.61051],[43.01376,-78.61154],
[43.01377,-78.61179],[43.01379,-78.61208],[43.01387,-78.61336],[43.01388,-78.61378],[43.01392,-78.61436],[43.01393,-78.61461],[43.01396,-78.61491],[43.01399,-78.61552],[43.014,-78.6159],[43.01406,-78.61679],
[43.01407,-78.61704],[43.01409,-78.61738],[43.0141,-78.6176],[43.01416,-78.61868],[43.01417,-78.6188],[43.01427,-78.62063],[43.0143,-78.62106],[43.01441,-78.62317],[43.01447,-78.62402],[43.01447,-78.62432],
[43.01452,-78.62496],[43.01452,-78.62526],[43.01454,-78.62556],[43.01456,-78.62579],[43.01459,-78.62626],[43.01463,-78.62685],[43.01463,-78.62701],[43.01465,-78.62715],[43.01468,-78.62728],[43.0147,-78.62746],
[43.0147,-78.62746],[43.01469,-78.62751],[43.01471,-78.62818],[43.01474,-78.62851],[43.01475,-78.62871],[43.01479,-78.62919],[43.01486,-78.63027],[43.01487,-78.63057],[43.01491,-78.63111],[43.01495,-78.63193],
[43.01495,-78.63224],[43.01505,-78.63414],[43.01507,-78.63441],[43.01513,-78.63527],[43.01513,-78.63548],[43.01515,-78.63562],[43.01513,-78.63586],[43.01513,-78.63596],[43.01517,-78.636],[43.01514,-78.63624],
[43.01514,-78.63655],[43.01515,-78.6367],[43.01516,-78.63678],[43.01516,-78.63682],[43.01516,-78.63702],[43.01517,-78.63707],[43.01524,-78.6372],[43.01525,-78.63732],[43.01524,-78.63737],[43.01523,-78.63747] ] });
trk_segments[t].push({ points:[[43.01523,-78.63747],
[43.01525,-78.63751],[43.01529,-78.63806],[43.01531,-78.63857],[43.01536,-78.63935],[43.01537,-78.63972],[43.01539,-78.64026],[43.01547,-78.64149],[43.01548,-78.6418],[43.01555,-78.64299],[43.01555,-78.64315],
[43.01561,-78.64425],[43.01562,-78.64448],[43.01567,-78.64529],[43.0157,-78.64581],[43.01573,-78.64639],[43.01578,-78.647],[43.01581,-78.64764],[43.01582,-78.64775],[43.01584,-78.64826],[43.01586,-78.64845],
[43.01596,-78.65001],[43.01598,-78.65057],[43.01602,-78.65121],[43.01602,-78.65141],[43.01605,-78.65177],[43.01607,-78.65199],[43.0161,-78.65225],[43.0161,-78.65229],[43.01612,-78.65242],[43.01612,-78.6524],
[43.01612,-78.65246],[43.01613,-78.65252],[43.01614,-78.6529],[43.01618,-78.65331],[43.01624,-78.6544],[43.01625,-78.65477],[43.01626,-78.65489],[43.01627,-78.65556],[43.01626,-78.65616],[43.01628,-78.65654],
[43.01633,-78.6573],[43.01636,-78.65759],[43.01639,-78.65835],[43.01642,-78.6586],[43.01648,-78.65926],[43.01648,-78.65939],[43.01653,-78.6601],[43.01655,-78.66064],[43.01658,-78.66104],[43.0166,-78.66166],
[43.01664,-78.66226],[43.01665,-78.66239],[43.01665,-78.66242],[43.01665,-78.66252],[43.01665,-78.66253],[43.01665,-78.66259],[43.01666,-78.66263],[43.01666,-78.66273],[43.01669,-78.66296],[43.0167,-78.66318],
[43.01675,-78.66412],[43.01681,-78.66487],[43.01681,-78.66514],[43.01686,-78.66583],[43.01688,-78.66616],[43.01692,-78.66684],[43.01693,-78.66704],[43.01695,-78.66738],[43.017,-78.66835],[43.01711,-78.6696],
[43.01711,-78.66971],[43.01712,-78.66977],[43.0171,-78.66975],[43.01711,-78.66977],[43.0171,-78.66987],[43.0171,-78.6701],[43.01712,-78.67044],[43.01712,-78.67065],[43.01716,-78.67162],[43.01722,-78.67241],
[43.01724,-78.67292],[43.01728,-78.6737],[43.01731,-78.67404],[43.01733,-78.67423],[43.01735,-78.67465],[43.01744,-78.67609],[43.01747,-78.67673],[43.01747,-78.67695],[43.01753,-78.67776],[43.01753,-78.67786],
[43.01753,-78.67784],[43.01754,-78.67803],[43.01754,-78.67816],[43.01756,-78.67832],[43.01758,-78.67883],[43.01762,-78.67938],[43.01765,-78.68021],[43.01769,-78.68085],[43.01775,-78.68171],[43.01777,-78.6822],
[43.01778,-78.68234],[43.01779,-78.68262],[43.01782,-78.683],[43.01784,-78.68316],[43.01785,-78.68334],[43.01787,-78.68344],[43.01788,-78.68355],[43.01786,-78.68358],[43.01786,-78.68363],[43.01786,-78.68368],
[43.01785,-78.6838],[43.01787,-78.68393],[43.01788,-78.68421],[43.01792,-78.68489],[43.01795,-78.68528],[43.01803,-78.68639],[43.01803,-78.68653],[43.01805,-78.68681],[43.01809,-78.6875],[43.01811,-78.68793],
[43.01811,-78.68807],[43.01813,-78.68853],[43.01816,-78.68884],[43.01817,-78.6889],[43.01816,-78.6889],[43.01815,-78.68895],[43.01816,-78.68897],[43.01815,-78.68904],[43.01818,-78.68918],[43.01822,-78.68973],
[43.01822,-78.68995],[43.01829,-78.69094],[43.0183,-78.69138],[43.01834,-78.69195],[43.01834,-78.69213],[43.01837,-78.69251],[43.01842,-78.69365],[43.01845,-78.69423],[43.01848,-78.69467],[43.0185,-78.6948],
[43.01852,-78.69515],[43.01855,-78.69539],[43.01857,-78.69587],[43.01861,-78.69632],[43.01862,-78.69653],[43.01862,-78.69675],[43.01863,-78.69678],[43.01871,-78.69721],[43.01871,-78.69734],[43.0187,-78.69743],
[43.0187,-78.69754],[43.0187,-78.69759],[43.01869,-78.69817],[43.01867,-78.69822],[43.01866,-78.69827],[43.0187,-78.699],[43.01872,-78.69909],[43.01872,-78.69914],[43.01875,-78.69955],[43.01875,-78.69961],
[43.01876,-78.69976],[43.01878,-78.69991],[43.0188,-78.70021],[43.01879,-78.70026],[43.01881,-78.70046],[43.01881,-78.70051],[43.01882,-78.70067],[43.01882,-78.70078],[43.01883,-78.7009],[43.01884,-78.70102],
[43.01885,-78.70113],[43.01884,-78.70119],[43.01886,-78.7014],[43.01888,-78.70156],[43.0189,-78.70196],[43.01891,-78.70217],[43.01891,-78.70239],[43.01893,-78.70254],[43.01894,-78.70282],[43.01895,-78.70287],
[43.01895,-78.70298],[43.01896,-78.70304],[43.01898,-78.70361],[43.01898,-78.70377],[43.01899,-78.70403],[43.019,-78.70414],[43.01901,-78.70435],[43.01907,-78.70525],[43.01913,-78.70612],[43.01913,-78.70628],
[43.01915,-78.7065],[43.01916,-78.70663],[43.01915,-78.70675],[43.01917,-78.70691],[43.01919,-78.70703],[43.01921,-78.70719],[43.01921,-78.70735],[43.01921,-78.70752],[43.01922,-78.70762],[43.01923,-78.70783] ] });
trk_segments[t].push({ points:[[43.01923,-78.70783],
[43.01923,-78.70788],[43.01923,-78.70805],[43.01925,-78.70826],[43.01926,-78.70847],[43.01925,-78.7086],[43.01926,-78.70885],[43.01929,-78.70917],[43.01929,-78.70944],[43.01934,-78.7098],[43.01935,-78.70985],
[43.01934,-78.70997],[43.01934,-78.71018],[43.01935,-78.71028],[43.01935,-78.7106],[43.01936,-78.71075],[43.01935,-78.71106],[43.01937,-78.71127],[43.01939,-78.71152],[43.01939,-78.71167],[43.0194,-78.71183],
[43.01942,-78.71198],[43.01945,-78.71257],[43.01947,-78.71272],[43.01949,-78.71305],[43.01958,-78.71415],[43.01958,-78.7142],[43.01959,-78.7143],[43.01961,-78.71462],[43.01962,-78.71473],[43.01964,-78.71531],
[43.01969,-78.71584],[43.01973,-78.71638],[43.01973,-78.71654],[43.01975,-78.71685],[43.01975,-78.71715],[43.01978,-78.71736],[43.01982,-78.71794],[43.01982,-78.71814],[43.01983,-78.71825],[43.01983,-78.7184],
[43.01982,-78.71869],[43.01985,-78.71922],[43.01985,-78.71933],[43.01987,-78.71979],[43.0199,-78.72024],[43.01992,-78.72055],[43.01996,-78.72117],[43.01997,-78.72128],[43.01997,-78.72133],[43.01998,-78.72153],
[43.01997,-78.72164],[43.01998,-78.72168],[43.02,-78.72173],[43.02005,-78.72226],[43.02005,-78.72236],[43.02006,-78.72241],[43.02008,-78.72281],[43.02009,-78.72291],[43.02009,-78.72301],[43.02011,-78.72327],
[43.02011,-78.72337],[43.02014,-78.72399],[43.02013,-78.72419],[43.02013,-78.72424],[43.02014,-78.72434],[43.02013,-78.72439],[43.02012,-78.72443],[43.02013,-78.72454],[43.02014,-78.7246],[43.01994,-78.72459],
[43.0199,-78.72461],[43.01994,-78.72461],[43.02,-78.72458],[43.02015,-78.72455],[43.0203,-78.72453],[43.02062,-78.72453],[43.02124,-78.72455],[43.02157,-78.72454],[43.02187,-78.72455],[43.02206,-78.72457],
[43.02225,-78.7246],[43.0225,-78.72468],[43.02264,-78.72473],[43.02277,-78.72479],[43.02293,-78.72488],[43.02297,-78.72492],[43.023,-78.72496],[43.02302,-78.72502],[43.02302,-78.72654],[43.023,-78.72904],
[43.023,-78.72919],[43.02297,-78.72927],[43.02294,-78.72931],[43.02286,-78.72932],[43.02229,-78.72933],[43.02201,-78.72934],[43.02076,-78.72935],[43.02061,-78.72934],[43.02045,-78.72931],[43.02041,-78.72928]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:43.00642,lon:-78.54419,color:'orange',name:'C10TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 286 })
GV_Draw_Marker({lat:43.00802,lon:-78.55382,color:'orange',name:'C10TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 283 })
GV_Draw_Marker({lat:43.00957,lon:-78.56339,color:'orange',name:'C10TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 282 })
GV_Draw_Marker({lat:43.01117,lon:-78.57296,color:'orange',name:'C10TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 283 })
GV_Draw_Marker({lat:43.0121,lon:-78.58275,color:'orange',name:'C10TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:43.01267,lon:-78.5926,color:'orange',name:'C10TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:43.01324,lon:-78.60246,color:'orange',name:'C10TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 275 })
GV_Draw_Marker({lat:43.01381,lon:-78.61232,color:'orange',name:'C10TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 275 })
GV_Draw_Marker({lat:43.01435,lon:-78.62219,color:'orange',name:'C10TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:43.01495,lon:-78.63203,color:'orange',name:'C10TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 271 })
GV_Draw_Marker({lat:43.01548,lon:-78.64183,color:'orange',name:'C10TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 275 })
GV_Draw_Marker({lat:43.01604,lon:-78.65169,color:'orange',name:'C10TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 275 })
GV_Draw_Marker({lat:43.0166,lon:-78.66152,color:'orange',name:'C10TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 273 })
GV_Draw_Marker({lat:43.01715,lon:-78.67132,color:'orange',name:'C10TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:43.01771,lon:-78.68113,color:'orange',name:'C10TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 276 })
GV_Draw_Marker({lat:43.01829,lon:-78.69096,color:'orange',name:'C10TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 273 })
GV_Draw_Marker({lat:43.01882,lon:-78.7008,color:'orange',name:'C10TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 279 })
GV_Draw_Marker({lat:43.01935,lon:-78.71064,color:'orange',name:'C10TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 277 })
GV_Draw_Marker({lat:43.01991,lon:-78.7205,color:'orange',name:'C10TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 273 })
GV_Draw_Marker({lat:43.02302,lon:-78.72608,color:'orange',name:'C10TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 270 })

t =  512 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">CT10 map coverage - 10.34 miles ( 12 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[43.04256,-78.53002],[43.04256,-78.73379],[42.92198,-78.73379],[42.92198,-78.53002],[43.04256,-78.53002]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:43.02102,lon:-78.87817,color:'',dd:true
,name:'Main St',desc:'Street parking<br /><br />Location: <b>43.021, -78.8782  or N43 1.261 W78 52.6903</b><br /><br />This is <b>Map CT11</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.0014,lon:-78.92607,color:'',dd:true
,name:'River Rd parking lot',desc:'Very large parking lot for Niagara River Walk paved trail<br /><br />Location: <b>43.0014, -78.9261  or N43 .084 W78 55.564</b><br /><br />This is <b>Map CT11</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.02261,lon:-78.76785,color:'',dd:true
,name:'Campbell Blvd (NY 270)',desc:'Parking area N of RR grade<br /><br />Location: <b>43.0226, -78.7678  or N43 1.3564 W78 46.0707</b><br /><br />This is <b>Map CT11</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.9622,lon:-78.91187,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "CT11 - Tonawanda"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Jul 1, 2009</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT11\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CT11.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map CT11 shows the Conservation Trail in Erie County from E Pinelake Dr/Peanut Line to S Grand Island Bridge at River Rd (NY-266). <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT11\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:43.02237,lon:-78.83475,color:'',dd:true
,name:'Creekside Dr',desc:'Parking in Ellicott Creek Park<br /><br />Location: <b>43.0224, -78.8347  or N43 1.3422 W78 50.0848</b><br /><br />This is <b>Map CT11</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.02144,lon:-78.79231,color:'',dd:true
,name:'N Forest Rd',desc:'Shoulder parking at bike path<br /><br />Location: <b>43.0214, -78.7923  or N43 1.2866 W78 47.5385</b><br /><br />This is <b>Map CT11</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.02522,lon:-78.82217,color:'',dd:true
,name:'Niagara Falls Blvd (US-62)',desc:'Street & Park parking<br /><br />Location: <b>43.0252, -78.8222  or N43 1.5132 W78 49.33</b><br /><br />This is <b>Map CT11</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.02073,lon:-78.88001,color:'',dd:true
,name:'Niagara St entrance to River Walk',desc:'Street parking<br /><br />Location: <b>43.0207, -78.88  or N43 1.2436 W78 52.8006</b><br /><br />This is <b>Map CT11</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.99613,lon:-78.93258,color:'',dd:true
,name:'S Grand Island Bridge at River Rd (NY-266)',desc:'Street parking nearby<br /><br />Location: <b>42.9961, -78.9326  or N42 59.7678 W78 55.955</b><br /><br />This is <b>Map CT11</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  513 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C11TF - 11.87 miles (orange blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT11\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/CT11.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[43.02043,-78.72923],[43.02043,-78.72958],[43.02045,-78.72961],[43.0205,-78.73061],[43.02053,-78.73084],[43.02061,-78.7324],[43.02063,-78.73254],[43.02074,-78.73465],[43.0208,-78.73539],[43.0209,-78.73745],
[43.02093,-78.73767],[43.02092,-78.73781],[43.02094,-78.73798],[43.02094,-78.73838],[43.02096,-78.73851],[43.02096,-78.73885],[43.021,-78.73978],[43.02096,-78.7399],[43.02096,-78.73997],[43.02098,-78.74018],
[43.02109,-78.74245],[43.02113,-78.74291],[43.02117,-78.74309],[43.02121,-78.74377],[43.02125,-78.74393],[43.02124,-78.74403],[43.02127,-78.74422],[43.02128,-78.74425],[43.02127,-78.74426],[43.02126,-78.74445],
[43.02127,-78.74455],[43.02127,-78.74467],[43.02133,-78.74545],[43.02134,-78.74575],[43.02138,-78.74607],[43.02146,-78.74719],[43.02152,-78.74828],[43.02154,-78.74834],[43.02154,-78.74865],[43.02158,-78.74931],
[43.02158,-78.74965],[43.02163,-78.75024],[43.02169,-78.75153],[43.02172,-78.75187],[43.02173,-78.75212],[43.02165,-78.75241],[43.02166,-78.75251],[43.02172,-78.75265],[43.02175,-78.75268],[43.02182,-78.75378],
[43.02184,-78.75395],[43.02194,-78.75573],[43.02194,-78.75587],[43.0219,-78.756],[43.0219,-78.75609],[43.02196,-78.75631],[43.02199,-78.75701],[43.02203,-78.75724],[43.02201,-78.7574],[43.02204,-78.75806],
[43.02215,-78.7596],[43.02222,-78.76105],[43.02226,-78.76129],[43.02226,-78.76142],[43.02223,-78.76151],[43.02223,-78.76163],[43.02227,-78.76177],[43.02233,-78.76268],[43.02236,-78.76348],[43.02238,-78.7636],
[43.02246,-78.76505],[43.0225,-78.76548],[43.02256,-78.7668],[43.02261,-78.76756],[43.02261,-78.76789],[43.02269,-78.76862],[43.02271,-78.76921],[43.02281,-78.77061],[43.02279,-78.77087],[43.02287,-78.77178],
[43.02291,-78.77273],[43.02293,-78.77286],[43.02294,-78.77325],[43.02296,-78.77338],[43.02297,-78.77415],[43.02313,-78.77722],[43.02327,-78.77963],[43.02328,-78.78008],[43.02335,-78.78136],[43.02338,-78.78196],
[43.02329,-78.78205],[43.02328,-78.7821],[43.02333,-78.78212],[43.02333,-78.78219],[43.02341,-78.78251],[43.02341,-78.78271],[43.02342,-78.78275],[43.02343,-78.78303],[43.02349,-78.78371],[43.02348,-78.78386],
[43.02352,-78.78409],[43.02358,-78.78489],[43.02363,-78.78604],[43.0236,-78.78663],[43.02358,-78.78678],[43.02355,-78.78768],[43.02356,-78.78783],[43.02352,-78.78805],[43.02347,-78.78812],[43.02339,-78.7882],
[43.02333,-78.78834],[43.0231,-78.78965],[43.02299,-78.79014],[43.0229,-78.79041],[43.02279,-78.79067],[43.022,-78.79224],[43.02192,-78.79236],[43.02178,-78.79243],[43.02171,-78.79242],[43.02153,-78.79231],
[43.02155,-78.79229],[43.02147,-78.79227],[43.02139,-78.79231],[43.02134,-78.79238],[43.02133,-78.79243],[43.02134,-78.79253],[43.02154,-78.79289],[43.02207,-78.79354],[43.0223,-78.79371],[43.02237,-78.79379],
[43.02245,-78.79383],[43.02259,-78.79386],[43.02267,-78.7939],[43.02314,-78.79424],[43.02366,-78.79465],[43.02383,-78.79475],[43.02447,-78.79526],[43.02454,-78.79533],[43.02463,-78.79553],[43.0247,-78.79575],
[43.02476,-78.79617],[43.0248,-78.797],[43.02486,-78.79861],[43.02479,-78.79909],[43.02481,-78.79923],[43.02495,-78.79967],[43.02525,-78.80026],[43.02538,-78.80055],[43.02542,-78.80073],[43.02558,-78.80185],
[43.02571,-78.80341],[43.02574,-78.80399],[43.02581,-78.80625],[43.02585,-78.80706],[43.0259,-78.80762],[43.02593,-78.80779],[43.02604,-78.80939],[43.02605,-78.80967],[43.02616,-78.81125],[43.02614,-78.812],
[43.02633,-78.81422],[43.02642,-78.81545],[43.02642,-78.81572],[43.0264,-78.81593],[43.02638,-78.81607],[43.02627,-78.81644],[43.02616,-78.81666],[43.02554,-78.81774],[43.02548,-78.81794],[43.02549,-78.81831],
[43.02562,-78.82053],[43.02565,-78.82133],[43.02565,-78.82175],[43.02561,-78.8219],[43.02557,-78.82194],[43.02552,-78.82197],[43.02522,-78.82197],[43.02522,-78.82231],[43.02526,-78.82242],[43.02526,-78.82249],
[43.02523,-78.82269],[43.02526,-78.82307],[43.02526,-78.82318],[43.02522,-78.82342],[43.0252,-78.82383],[43.02518,-78.82392],[43.02501,-78.82426],[43.02494,-78.82456],[43.02492,-78.8248],[43.02496,-78.82484],
[43.02495,-78.82499],[43.02493,-78.82507],[43.0249,-78.82515],[43.02484,-78.82519],[43.02472,-78.82519],[43.02462,-78.82527],[43.02458,-78.82535],[43.0244,-78.8258],[43.02433,-78.82593],[43.0241,-78.82625] ] });
trk_segments[t].push({ points:[[43.0241,-78.82625],
[43.02408,-78.82629],[43.02408,-78.82633],[43.02371,-78.82673],[43.02357,-78.82687],[43.02343,-78.82703],[43.02335,-78.8272],[43.02321,-78.82726],[43.02312,-78.82732],[43.02299,-78.82751],[43.02294,-78.82766],
[43.02291,-78.82776],[43.02287,-78.82817],[43.02285,-78.82832],[43.02281,-78.82841],[43.02275,-78.82849],[43.02268,-78.82853],[43.02239,-78.82853],[43.02232,-78.82857],[43.02225,-78.82864],[43.02214,-78.82887],
[43.022,-78.82908],[43.02187,-78.82923],[43.02156,-78.82949],[43.02142,-78.82967],[43.0213,-78.82988],[43.02101,-78.83025],[43.02079,-78.83068],[43.02069,-78.83092],[43.02062,-78.83117],[43.02059,-78.83137],
[43.02058,-78.83187],[43.0206,-78.83213],[43.02063,-78.83228],[43.02073,-78.83261],[43.02092,-78.83304],[43.021,-78.83316],[43.02121,-78.83345],[43.02142,-78.83365],[43.02152,-78.83374],[43.02183,-78.83394],
[43.02214,-78.83424],[43.02226,-78.83439],[43.02236,-78.83457],[43.02237,-78.83461],[43.02236,-78.83461],[43.02234,-78.8347],[43.0223,-78.83481],[43.02227,-78.83487],[43.02134,-78.83585],[43.02086,-78.83642],
[43.02055,-78.83686],[43.02018,-78.83744],[43.01977,-78.8381],[43.01929,-78.83892],[43.01908,-78.83933],[43.01886,-78.83983],[43.01874,-78.84015],[43.01859,-78.84067],[43.0185,-78.84103],[43.01841,-78.84161],
[43.01838,-78.84197],[43.01838,-78.84227],[43.0184,-78.84281],[43.01845,-78.84333],[43.01856,-78.84393],[43.01879,-78.84485],[43.01886,-78.84533],[43.0189,-78.84577],[43.01894,-78.84649],[43.01895,-78.84713],
[43.01892,-78.84754],[43.01873,-78.84879],[43.01867,-78.84926],[43.01863,-78.84969],[43.01863,-78.85006],[43.01866,-78.85121],[43.01871,-78.852],[43.01878,-78.85233],[43.01882,-78.85241],[43.01885,-78.85243],
[43.019,-78.85246],[43.01905,-78.85251],[43.01929,-78.85308],[43.01949,-78.85343],[43.01957,-78.85354],[43.02009,-78.85414],[43.02025,-78.85433],[43.02039,-78.85457],[43.02051,-78.85471],[43.02073,-78.85485],
[43.02097,-78.85514],[43.02135,-78.85588],[43.02152,-78.85626],[43.02163,-78.85656],[43.02175,-78.85698],[43.02182,-78.85733],[43.02192,-78.85766],[43.02208,-78.8585],[43.02222,-78.85931],[43.02235,-78.85998],
[43.02237,-78.86041],[43.02241,-78.86065],[43.02245,-78.86087],[43.02246,-78.86107],[43.02249,-78.8613],[43.02254,-78.86149],[43.02257,-78.86185],[43.02262,-78.862],[43.02269,-78.86282],[43.02271,-78.8634],
[43.0227,-78.86376],[43.02271,-78.86408],[43.02275,-78.86441],[43.02273,-78.86512],[43.02275,-78.86561],[43.02282,-78.86649],[43.02291,-78.86703],[43.02296,-78.86738],[43.02301,-78.86807],[43.02299,-78.8687],
[43.02294,-78.86902],[43.02284,-78.86957],[43.02278,-78.86973],[43.02268,-78.87008],[43.02263,-78.87039],[43.02254,-78.87062],[43.02236,-78.8712],[43.02227,-78.87145],[43.02217,-78.87181],[43.0219,-78.87262],
[43.02185,-78.87278],[43.02181,-78.87319],[43.02176,-78.87341],[43.02174,-78.87359],[43.0217,-78.87375],[43.02159,-78.87408],[43.02135,-78.87528],[43.02115,-78.87593],[43.02104,-78.87651],[43.02089,-78.87714],
[43.02084,-78.87737],[43.02086,-78.87743],[43.02091,-78.87749],[43.02092,-78.87759],[43.02095,-78.87769],[43.02107,-78.87793],[43.02107,-78.87799],[43.02104,-78.87823],[43.02106,-78.87833],[43.02096,-78.87881],
[43.02093,-78.87913],[43.02082,-78.87952],[43.0208,-78.87967],[43.02071,-78.87998],[43.02071,-78.88003],[43.02074,-78.88007],[43.02082,-78.88012],[43.02092,-78.88011],[43.02113,-78.87998],[43.02118,-78.87996],
[43.02129,-78.87998],[43.02133,-78.88003],[43.02138,-78.88023],[43.02147,-78.88048],[43.0216,-78.88071],[43.02217,-78.88151],[43.02238,-78.88173],[43.02256,-78.88186],[43.02342,-78.88228],[43.02348,-78.88235],
[43.02349,-78.88239],[43.02348,-78.88249],[43.02344,-78.88256],[43.0233,-78.88273],[43.02293,-78.88329],[43.02232,-78.88427],[43.02166,-78.88526],[43.02127,-78.88574],[43.0212,-78.8858],[43.021,-78.88592],
[43.01996,-78.88682],[43.01981,-78.88696],[43.01966,-78.88718],[43.01946,-78.88753],[43.01935,-78.88765],[43.0192,-78.88778],[43.01908,-78.88786],[43.01903,-78.88793],[43.01895,-78.88813],[43.01842,-78.88883],
[43.0183,-78.88903],[43.01818,-78.8892],[43.01806,-78.88933],[43.01803,-78.88935],[43.01801,-78.88935],[43.018,-78.88939],[43.01777,-78.88968],[43.01741,-78.89019],[43.01694,-78.89091],[43.01679,-78.89108] ] });
trk_segments[t].push({ points:[[43.01679,-78.89108],
[43.01663,-78.89129],[43.01631,-78.89204],[43.0163,-78.89223],[43.01599,-78.89282],[43.01589,-78.89312],[43.01574,-78.89346],[43.01546,-78.89433],[43.01539,-78.89469],[43.01525,-78.89509],[43.01505,-78.8955],
[43.01475,-78.89642],[43.01444,-78.89718],[43.01399,-78.8984],[43.01383,-78.89894],[43.01369,-78.89929],[43.01364,-78.89947],[43.01361,-78.89949],[43.01357,-78.8996],[43.01328,-78.90032],[43.01307,-78.90064],
[43.013,-78.90079],[43.0129,-78.90106],[43.01277,-78.90145],[43.0125,-78.90218],[43.01237,-78.90245],[43.01199,-78.90355],[43.01178,-78.90397],[43.01103,-78.90587],[43.01095,-78.90623],[43.01085,-78.90659],
[43.01076,-78.90677],[43.01067,-78.90687],[43.01063,-78.90694],[43.01059,-78.90708],[43.01053,-78.90746],[43.01026,-78.9084],[43.0098,-78.90985],[43.00971,-78.90995],[43.00966,-78.91004],[43.00954,-78.9104],
[43.00952,-78.9105],[43.00952,-78.91068],[43.00873,-78.91292],[43.00859,-78.91323],[43.00817,-78.91422],[43.00791,-78.91493],[43.00777,-78.91525],[43.00759,-78.91575],[43.00715,-78.91678],[43.00653,-78.91827],
[43.0064,-78.91855],[43.00604,-78.91924],[43.00591,-78.91959],[43.0057,-78.92002],[43.0055,-78.92027],[43.00544,-78.92037],[43.00531,-78.92071],[43.00466,-78.92186],[43.00459,-78.92195],[43.00412,-78.92244],
[43.00313,-78.9238],[43.00307,-78.92393],[43.00302,-78.92416],[43.00292,-78.925],[43.00288,-78.92518],[43.00282,-78.92541],[43.00277,-78.92551],[43.00255,-78.92584],[43.00243,-78.9261],[43.00222,-78.92643],
[43.00214,-78.9265],[43.00203,-78.92658],[43.00194,-78.9266],[43.00186,-78.9266],[43.00176,-78.92658],[43.00155,-78.92646],[43.00156,-78.92648],[43.0014,-78.9264],[43.00129,-78.92642],[43.0012,-78.92648],
[43.00078,-78.927],[43.00053,-78.9274],[43.00044,-78.9275],[43.00023,-78.92769],[42.99951,-78.92866],[42.99936,-78.92891],[42.99924,-78.92905],[42.99883,-78.92947],[42.99868,-78.92968],[42.99848,-78.93004],
[42.99829,-78.93032],[42.9982,-78.93043],[42.99792,-78.93069],[42.99744,-78.93125],[42.99691,-78.93182],[42.99682,-78.93197],[42.99664,-78.93218],[42.99658,-78.93221],[42.99617,-78.93258],[42.99613,-78.93258]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:43.02097,lon:-78.73909,color:'orange',name:'C11TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:43.02155,lon:-78.74889,color:'orange',name:'C11TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:43.02209,lon:-78.75867,color:'orange',name:'C11TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 276 })
GV_Draw_Marker({lat:43.02268,lon:-78.7685,color:'orange',name:'C11TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 279 })
GV_Draw_Marker({lat:43.02319,lon:-78.77837,color:'orange',name:'C11TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:43.0235,lon:-78.78808,color:'orange',name:'C11TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 228 })
GV_Draw_Marker({lat:43.0237,lon:-78.79468,color:'orange',name:'C11TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 336 })
GV_Draw_Marker({lat:43.02571,lon:-78.80358,color:'orange',name:'C11TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:43.02627,lon:-78.81344,color:'orange',name:'C11TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 277 })
GV_Draw_Marker({lat:43.02526,lon:-78.82243,color:'orange',name:'C11TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 270 })
GV_Draw_Marker({lat:43.02139,lon:-78.82971,color:'orange',name:'C11TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 232 })
GV_Draw_Marker({lat:43.02048,lon:-78.83697,color:'orange',name:'C11TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 228 })
GV_Draw_Marker({lat:43.0189,lon:-78.8459,color:'orange',name:'C11TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 275 })
GV_Draw_Marker({lat:43.0205,lon:-78.85469,color:'orange',name:'C11TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 320 })
GV_Draw_Marker({lat:43.0227,lon:-78.86378,color:'orange',name:'C11TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 274 })
GV_Draw_Marker({lat:43.02177,lon:-78.87332,color:'orange',name:'C11TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 252 })
GV_Draw_Marker({lat:43.02216,lon:-78.88148,color:'orange',name:'C11TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 315 })
GV_Draw_Marker({lat:43.01935,lon:-78.88766,color:'orange',name:'C11TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 212 })
GV_Draw_Marker({lat:43.0151,lon:-78.8954,color:'orange',name:'C11TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 236 })
GV_Draw_Marker({lat:43.01173,lon:-78.90412,color:'orange',name:'C11TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 242 })
GV_Draw_Marker({lat:43.00869,lon:-78.91301,color:'orange',name:'C11TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 238 })
GV_Draw_Marker({lat:43.00491,lon:-78.92142,color:'orange',name:'C11TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 232 })
GV_Draw_Marker({lat:43.00015,lon:-78.9278,color:'orange',name:'C11TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 224 })

t =  514 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">CT11 map coverage - 11.87 miles ( 12 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[43.06242,-78.72905],[43.06242,-78.93187],[42.9422,-78.93187],[42.9422,-78.72905],[43.06242,-78.72905]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:43.07426,lon:-79.00372,color:'',dd:true
,name:'54th St parking',desc:'Large parking area from 54th St, Niagara Falls<br /><br />Location: <b>43.0743, -79.0037  or N43 4.4555 W79 .2231</b><br /><br />This is <b>Map CT12</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.9631,lon:-79.05973,color:''
,name:'<center><span style="text-align:center;font-size:10pt;">FLTC Map "CT12 - Grand Island - Niagara Falls"</span><br>&copy; Copyright Finger Lakes Trail Conference, Inc. &nbsp; &nbsp; &nbsp;Revised Jul 1, 2009</center>',desc:'<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT12\',\'FLTCProfile\', 730, 455,40,60);" alt="View elevation profile" title="View elevation profile"><img src="ProfilesIcons/CT12.png" height="57"width="100" style="float:right;margin-left:5px;border:1px solid gray;" ></a>Map CT12 shows the Conservation Trail in Erie-Niagara counties from S Grand Island Bridge at River Rd (NY-266) to Rainbow Bridge, Niagara Falls. <br /><br />View <a href="javascript:;" onclick="makePopup(\'https://fingerlakestrail.org/FLTC/notices.php#CT12\', \'trailnotice\', 580, 600, 40, 60);" alt="View trail notices" title="View trail notices">trail condition notices for this map</a>.</p><p style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/"target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.</p>',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/flticon.gif',scale: .55, folder:'Other'});
GV_Draw_Marker({lat:43.05287,lon:-78.99745,color:'',dd:true
,name:'Eagles Overlook off W River Pkwy',desc:'Eagles Overlook parking lot<br /><br />Location: <b>43.0529, -78.9974  or N43 3.1721 W78 59.8469</b><br /><br />This is <b>Map CT12</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.0869,lon:-79.06458,color:'',dd:true
,name:'Parking at Niagara Falls S. P.',desc:'Entrance to paid parking lot at Niagara Falls S. P.<br /><br />Location: <b>43.0869, -79.0646  or N43 5.214 W79 3.875</b><br /><br />This is <b>Map CT12</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.07506,lon:-78.98752,color:'',dd:true
,name:'East end of Niagara River Bike Trail',desc:'Large parking lot<br /><br />Location: <b>43.0751, -78.9875  or N43 4.5039 W78 59.2512</b><br /><br />This is <b>Map CT12</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.98304,lon:-79.00224,color:'',dd:true
,name:'Overlook 1 off W River Pkwy',desc:'Parking area for 20 vehicles<br /><br />Location: <b>42.983, -79.0022  or N42 58.9824 W79 .1345</b><br /><br />This is <b>Map CT12</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.01684,lon:-79.02076,color:'',dd:true
,name:'Overlook 2 off W River Pkwy',desc:'Parking area for 20 vehicles<br /><br />Location: <b>43.0168, -79.0208  or N43 1.0101 W79 1.2455</b><br /><br />This is <b>Map CT12</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.07724,lon:-79.01598,color:'',dd:true
,name:'Power plant water intake',desc:'Very large parking lot<br /><br />Location: <b>43.0772, -79.016  or N43 4.6341 W79 .9586</b><br /><br />This is <b>Map CT12</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:43.07814,lon:-79.03255,color:'',dd:true
,name:'Robert Moses Pkwy Access',desc:'Large parking area<br /><br />Location: <b>43.0781, -79.0325  or N43 4.6885 W79 1.9529</b><br /><br />This is <b>Map CT12</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});
GV_Draw_Marker({lat:42.99613,lon:-78.93258,color:'',dd:true
,name:'S Grand Island Bridge at River Rd (NY-266)',desc:'Street parking nearby<br /><br />Location: <b>42.9961, -78.9326  or N42 59.7678 W78 55.955</b><br /><br />This is <b>Map CT12</b>. You can purchase maps at the <a href="/store/maps-and-gps/" target="_parent">FLTC&nbsp;Store</a>.',icon:'https://fingerlakestrail.org/FLTC/Interactive/MapIcons/ParkingGreen.png',scale: .6, folder:'Parking'});

t =  515 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">C12TF - 18.69 miles (orange blazes)</span>'; trk_info[t]['desc'] = '<a href="javascript:;" onclick="makePopup(\'ProfilesPNG/prof.php?mp=CT12\',\'FLTCProfile\', 730, 505,40,60);" alt="Click to enlarge" title="Click to enlarge"><img src="ProfilesPNG/CT12.png" height="200" width="350" ><br><p style="text-align:center;">Click to enlarge</p></a> <br><br><span style="font-size:12pt;">Purchase&nbsp;FLTC&nbsp;maps&nbsp;<a href="/store/maps-and-gps/" target="_parent">at&nbsp;the&nbsp;FLTC&nbsp;Store</a>.'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'orange'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[42.99613,-78.93258],[42.99604,-78.93243],[42.99597,-78.93237],[42.99584,-78.93212],[42.99566,-78.9319],[42.99559,-78.93188],[42.9954,-78.93191],[42.99529,-78.93186],[42.9952,-78.93174],[42.995,-78.93133],
[42.99474,-78.93099],[42.99459,-78.93069],[42.99462,-78.93068],[42.99484,-78.93091],[42.99781,-78.93603],[42.99794,-78.9362],[42.99802,-78.93627],[42.998,-78.93627],[42.99803,-78.93638],[42.99814,-78.9366],
[43.00089,-78.94135],[43.00088,-78.94139],[43.00085,-78.94141],[43.00081,-78.94139],[43.00069,-78.94123],[43.00065,-78.9411],[43.00068,-78.94097],[43.00071,-78.94091],[43.00072,-78.94083],[43.00069,-78.94077],
[43.00064,-78.94077],[43.0005,-78.94094],[43.00031,-78.9413],[43.00025,-78.9415],[43.00015,-78.94202],[43.00014,-78.94222],[43.00016,-78.94241],[43.00031,-78.9428],[43.00031,-78.94291],[43.00025,-78.94298],
[43.00009,-78.9431],[43.00007,-78.94316],[42.99999,-78.94477],[43.00001,-78.94509],[43.,-78.94532],[42.99997,-78.9454],[42.99994,-78.94543],[42.99983,-78.94544],[42.99981,-78.94549],[42.99974,-78.9467],
[42.99964,-78.94756],[42.99955,-78.9481],[42.99946,-78.94849],[42.99934,-78.94891],[42.99887,-78.95016],[42.9987,-78.95042],[42.99813,-78.95147],[42.99767,-78.9522],[42.99714,-78.95288],[42.99669,-78.95339],
[42.99613,-78.95393],[42.99552,-78.9544],[42.99536,-78.95458],[42.99382,-78.9557],[42.99288,-78.95629],[42.99268,-78.95632],[42.9925,-78.95643],[42.99238,-78.95657],[42.9923,-78.95663],[42.99165,-78.95697],
[42.9903,-78.9576],[42.98957,-78.95789],[42.98858,-78.95823],[42.9876,-78.95853],[42.98632,-78.95879],[42.98554,-78.9589],[42.98545,-78.95888],[42.98511,-78.95871],[42.9848,-78.95845],[42.98464,-78.95837],
[42.98423,-78.95838],[42.98418,-78.95843],[42.9841,-78.95869],[42.98394,-78.95894],[42.98386,-78.95901],[42.98361,-78.95906],[42.98298,-78.95907],[42.98273,-78.95911],[42.98238,-78.95908],[42.98203,-78.95909],
[42.98169,-78.95904],[42.98055,-78.95899],[42.9803,-78.95902],[42.98004,-78.95899],[42.9798,-78.959],[42.97962,-78.95908],[42.97903,-78.95907],[42.97894,-78.95905],[42.97872,-78.95892],[42.97863,-78.95889],
[42.9778,-78.9589],[42.97688,-78.95886],[42.97679,-78.95883],[42.97656,-78.95868],[42.97623,-78.9584],[42.9761,-78.95833],[42.97581,-78.95826],[42.97546,-78.95828],[42.97525,-78.95832],[42.97508,-78.95839],
[42.97463,-78.95864],[42.97441,-78.95872],[42.97419,-78.95877],[42.97386,-78.95878],[42.97305,-78.9587],[42.97197,-78.95866],[42.97172,-78.95861],[42.97108,-78.9586],[42.97069,-78.95864],[42.9697,-78.95856],
[42.96886,-78.95859],[42.9688,-78.95857],[42.96873,-78.95859],[42.9686,-78.95869],[42.96831,-78.95931],[42.96823,-78.95944],[42.96797,-78.95979],[42.96785,-78.96005],[42.96781,-78.96029],[42.96779,-78.96111],
[42.96782,-78.96448],[42.96784,-78.96492],[42.9679,-78.96565],[42.96802,-78.96638],[42.96816,-78.96709],[42.96831,-78.96758],[42.96846,-78.96801],[42.96845,-78.96811],[42.96841,-78.96817],[42.96831,-78.96823],
[42.96825,-78.9683],[42.96822,-78.9684],[42.96819,-78.96924],[42.96821,-78.96943],[42.96826,-78.9696],[42.96835,-78.96974],[42.9692,-78.97045],[42.97021,-78.97138],[42.97147,-78.97293],[42.97236,-78.97397],
[42.97269,-78.9744],[42.97376,-78.97567],[42.97436,-78.97641],[42.97452,-78.97665],[42.97465,-78.97691],[42.97473,-78.97713],[42.97485,-78.97765],[42.97488,-78.97801],[42.97482,-78.9815],[42.97479,-78.98212],
[42.97501,-78.98278],[42.97522,-78.98368],[42.97553,-78.98477],[42.97611,-78.98657],[42.9767,-78.98822],[42.97712,-78.9893],[42.97749,-78.99017],[42.97811,-78.99153],[42.97878,-78.99287],[42.98081,-78.9966],
[42.98141,-78.99779],[42.98213,-78.99935],[42.98241,-79.00001],[42.98275,-79.00095],[42.9828,-79.00113],[42.98285,-79.00157],[42.98298,-79.00206],[42.98305,-79.00227],[42.98304,-79.00225],[42.98311,-79.00242],
[42.98334,-79.00283],[42.98351,-79.00319],[42.98376,-79.00385],[42.98405,-79.00451],[42.98481,-79.00606],[42.98529,-79.00696],[42.98623,-79.00861],[42.98679,-79.00951],[42.98736,-79.01037],[42.98867,-79.01213],
[42.98927,-79.0129],[42.98976,-79.01349],[42.99037,-79.01414],[42.99101,-79.01472],[42.99208,-79.01555],[42.99346,-79.01652],[42.9943,-79.01704],[42.99523,-79.0175],[42.99586,-79.01775],[42.99634,-79.01791] ] });
trk_segments[t].push({ points:[[42.99634,-79.01791],
[42.99854,-79.01846],[42.99957,-79.01879],[43.00108,-79.01939],[43.00175,-79.01963],[43.00226,-79.01978],[43.0033,-79.02003],[43.00381,-79.02013],[43.00446,-79.0202],[43.00526,-79.02026],[43.00713,-79.0203],
[43.00793,-79.02034],[43.00872,-79.02042],[43.00967,-79.02056],[43.01049,-79.02071],[43.01226,-79.0211],[43.01303,-79.0212],[43.01347,-79.02124],[43.01404,-79.02122],[43.01459,-79.02117],[43.01563,-79.02097],
[43.01603,-79.02097],[43.01634,-79.02094],[43.01683,-79.02076],[43.01714,-79.02057],[43.01776,-79.02],[43.01855,-79.0194],[43.01904,-79.01897],[43.02156,-79.01645],[43.02232,-79.01573],[43.02391,-79.01436],
[43.02466,-79.01366],[43.02559,-79.0127],[43.02702,-79.01113],[43.0275,-79.01066],[43.02811,-79.01014],[43.02864,-79.00977],[43.02951,-79.00927],[43.03042,-79.00882],[43.03103,-79.00857],[43.03184,-79.0083],
[43.03266,-79.00809],[43.0333,-79.00797],[43.03496,-79.00776],[43.0358,-79.00763],[43.03662,-79.00744],[43.03777,-79.00708],[43.03921,-79.00651],[43.03968,-79.00629],[43.04094,-79.0056],[43.04344,-79.00415],
[43.04466,-79.00339],[43.04576,-79.0026],[43.04653,-79.00199],[43.04721,-79.00141],[43.04726,-79.00146],[43.04771,-79.00103],[43.0487,-79.00012],[43.04943,-78.99952],[43.05005,-78.99905],[43.05058,-78.9987],
[43.05213,-78.99776],[43.05242,-78.99753],[43.05258,-78.99735],[43.05293,-78.99681],[43.05306,-78.99656],[43.05317,-78.99628],[43.05335,-78.99562],[43.05344,-78.99498],[43.05348,-78.99451],[43.05342,-78.99291],
[43.05344,-78.99242],[43.05349,-78.99175],[43.05355,-78.99129],[43.05386,-78.98947],[43.05398,-78.98895],[43.05415,-78.98841],[43.05441,-78.98773],[43.05452,-78.98748],[43.05457,-78.98745],[43.05461,-78.9875],
[43.05465,-78.98769],[43.05456,-78.98821],[43.05455,-78.9884],[43.05458,-78.98865],[43.05458,-78.98891],[43.05456,-78.98904],[43.0544,-78.9896],[43.05441,-78.98972],[43.05452,-78.98992],[43.0546,-78.98998],
[43.05501,-78.99001],[43.05522,-78.98998],[43.05544,-78.98998],[43.05589,-78.99006],[43.05674,-78.99002],[43.05803,-78.99002],[43.05852,-78.99012],[43.05881,-78.99013],[43.05921,-78.99009],[43.0603,-78.99009],
[43.06166,-78.99018],[43.06235,-78.99],[43.06284,-78.99001],[43.06294,-78.99005],[43.06333,-78.99055],[43.07357,-78.99054],[43.07375,-78.99052],[43.07456,-78.99031],[43.07489,-78.99018],[43.07499,-78.99012],
[43.07516,-78.98996],[43.07521,-78.98988],[43.07526,-78.98977],[43.07528,-78.98964],[43.0753,-78.98961],[43.07538,-78.98962],[43.07541,-78.98959],[43.07542,-78.98955],[43.0752,-78.98837],[43.07515,-78.98798],
[43.07514,-78.98757],[43.07512,-78.98753],[43.07508,-78.98752],[43.07497,-78.98756],[43.07466,-78.98778],[43.07444,-78.98809],[43.07421,-78.9885],[43.07415,-78.98872],[43.07414,-78.98952],[43.07416,-78.98981],
[43.07415,-78.99019],[43.07419,-78.99072],[43.07416,-78.99085],[43.07418,-78.99094],[43.07414,-78.9917],[43.07411,-78.99378],[43.07404,-78.99455],[43.07399,-78.99529],[43.07396,-78.99555],[43.07395,-78.996],
[43.07389,-78.99682],[43.07392,-78.99762],[43.07392,-78.99821],[43.07383,-79.00008],[43.0738,-79.00038],[43.07381,-79.00059],[43.07396,-79.0016],[43.07398,-79.0019],[43.07397,-79.00248],[43.07399,-79.00281],
[43.07404,-79.00306],[43.07422,-79.00357],[43.07426,-79.00375],[43.07434,-79.00419],[43.07451,-79.00496],[43.07454,-79.00514],[43.07453,-79.00553],[43.07456,-79.00569],[43.07488,-79.00648],[43.07502,-79.00698],
[43.07552,-79.00835],[43.0762,-79.0105],[43.07644,-79.01113],[43.07651,-79.01135],[43.07666,-79.01222],[43.07673,-79.01247],[43.07692,-79.01351],[43.07695,-79.01375],[43.07694,-79.01424],[43.077,-79.01459],
[43.07704,-79.01476],[43.07708,-79.01513],[43.07717,-79.01574],[43.07721,-79.01589],[43.07735,-79.01678],[43.07742,-79.01709],[43.07748,-79.01716],[43.07756,-79.01732],[43.07775,-79.01813],[43.07784,-79.01839],
[43.078,-79.01878],[43.07812,-79.01898],[43.07834,-79.01926],[43.0785,-79.01953],[43.07851,-79.01961],[43.07852,-79.02033],[43.07846,-79.02074],[43.07847,-79.02109],[43.07851,-79.02135],[43.07851,-79.02169],
[43.07835,-79.02257],[43.07833,-79.02274],[43.07836,-79.02394],[43.07834,-79.02445],[43.07836,-79.02494],[43.07843,-79.02554],[43.07842,-79.02606],[43.07831,-79.02678],[43.07827,-79.02772],[43.07829,-79.0281] ] });
trk_segments[t].push({ points:[[43.07829,-79.0281],
[43.07819,-79.02983],[43.07819,-79.03075],[43.07815,-79.03254],[43.0781,-79.03359],[43.07803,-79.03801],[43.07805,-79.03834],[43.07805,-79.04024],[43.07806,-79.04056],[43.07813,-79.04102],[43.07807,-79.04143],
[43.07806,-79.04234],[43.07811,-79.04293],[43.07826,-79.04348],[43.07831,-79.04377],[43.07835,-79.04433],[43.07839,-79.04445],[43.07857,-79.0447],[43.07881,-79.04495],[43.0792,-79.04528],[43.07956,-79.04571],
[43.07966,-79.0459],[43.07988,-79.04657],[43.07991,-79.04672],[43.07988,-79.0469],[43.07981,-79.04708],[43.07947,-79.04757],[43.07936,-79.04779],[43.07923,-79.04821],[43.07921,-79.04832],[43.07936,-79.04893],
[43.07948,-79.04954],[43.07957,-79.04986],[43.07973,-79.05022],[43.07996,-79.05063],[43.08011,-79.05098],[43.08016,-79.05123],[43.08021,-79.0515],[43.08022,-79.05176],[43.08021,-79.05233],[43.08041,-79.05348],
[43.08058,-79.05496],[43.08064,-79.05633],[43.08064,-79.05673],[43.08072,-79.05766],[43.0808,-79.05846],[43.08088,-79.05892],[43.08099,-79.05946],[43.08099,-79.05974],[43.08103,-79.05995],[43.08107,-79.06035],
[43.08111,-79.06058],[43.08131,-79.06129],[43.08141,-79.06153],[43.08169,-79.06188],[43.08206,-79.06217],[43.08233,-79.06247],[43.08256,-79.06262],[43.08281,-79.06275],[43.08299,-79.06279],[43.08329,-79.06339],
[43.08435,-79.06486],[43.08468,-79.06527],[43.08476,-79.06547],[43.08484,-79.06559],[43.08492,-79.06618],[43.08503,-79.06651],[43.08511,-79.06702],[43.08511,-79.06736],[43.08527,-79.06785],[43.08564,-79.06844],
[43.08576,-79.06857],[43.08591,-79.06861],[43.08607,-79.0685],[43.08624,-79.06856],[43.08635,-79.06857],[43.08649,-79.06849],[43.08664,-79.06832],[43.08672,-79.06826],[43.08678,-79.06819],[43.08694,-79.06807],
[43.08719,-79.06801],[43.08722,-79.06796],[43.08772,-79.06758],[43.08781,-79.06749],[43.08783,-79.06745],[43.08777,-79.06728],[43.08779,-79.06716],[43.0878,-79.06687],[43.08777,-79.06664],[43.08767,-79.06637],
[43.08767,-79.06632],[43.08774,-79.06628],[43.08781,-79.06626],[43.08793,-79.06635],[43.088,-79.06643],[43.08805,-79.06645],[43.08817,-79.06642],[43.08836,-79.06641],[43.0884,-79.06635],[43.08844,-79.06634]

 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:42.99777,lon:-78.93604,color:'orange',name:'C12TF - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 308 })
GV_Draw_Marker({lat:43.00023,lon:-78.9426,color:'orange',name:'C12TF - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 298 })
GV_Draw_Marker({lat:42.9981,lon:-78.95152,color:'orange',name:'C12TF - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 229 })
GV_Draw_Marker({lat:42.99206,lon:-78.95675,color:'orange',name:'C12TF - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 201 })
GV_Draw_Marker({lat:42.98507,lon:-78.95867,color:'orange',name:'C12TF - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 149 })
GV_Draw_Marker({lat:42.97816,lon:-78.9589,color:'orange',name:'C12TF - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 181 })
GV_Draw_Marker({lat:42.97109,lon:-78.95859,color:'orange',name:'C12TF - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 179 })
GV_Draw_Marker({lat:42.96783,lon:-78.96478,color:'orange',name:'C12TF - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 273 })
GV_Draw_Marker({lat:42.97105,lon:-78.97241,color:'orange',name:'C12TF - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 318 })
GV_Draw_Marker({lat:42.97485,lon:-78.98008,color:'orange',name:'C12TF - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 269 })
GV_Draw_Marker({lat:42.97711,lon:-78.98928,color:'orange',name:'C12TF - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 298 })
GV_Draw_Marker({lat:42.98122,lon:-78.99741,color:'orange',name:'C12TF - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 305 })
GV_Draw_Marker({lat:42.98475,lon:-79.00593,color:'orange',name:'C12TF - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 304 })
GV_Draw_Marker({lat:42.98958,lon:-79.01326,color:'orange',name:'C12TF - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 319 })
GV_Draw_Marker({lat:42.99596,lon:-79.01778,color:'orange',name:'C12TF - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 346 })
GV_Draw_Marker({lat:43.00301,lon:-79.01996,color:'orange',name:'C12TF - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 350 })
GV_Draw_Marker({lat:43.01022,lon:-79.02066,color:'orange',name:'C12TF - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 352 })
GV_Draw_Marker({lat:43.01733,lon:-79.02039,color:'orange',name:'C12TF - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 34 })
GV_Draw_Marker({lat:43.02333,lon:-79.01487,color:'orange',name:'C12TF - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 32 })
GV_Draw_Marker({lat:43.02931,lon:-79.00938,color:'orange',name:'C12TF - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 23 })
GV_Draw_Marker({lat:43.03639,lon:-79.0075,color:'orange',name:'C12TF - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 9 })
GV_Draw_Marker({lat:43.04321,lon:-79.00428,color:'orange',name:'C12TF - Mile  11 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 23 })
GV_Draw_Marker({lat:43.04949,lon:-78.99948,color:'orange',name:'C12TF - Mile  11.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 29 })
GV_Draw_Marker({lat:43.05344,lon:-78.99253,color:'orange',name:'C12TF - Mile  12 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 87 })
GV_Draw_Marker({lat:43.05589,lon:-78.99005,color:'orange',name:'C12TF - Mile  12.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 2 })
GV_Draw_Marker({lat:43.06306,lon:-78.99021,color:'orange',name:'C12TF - Mile  13 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 317 })
GV_Draw_Marker({lat:43.0702,lon:-78.99055,color:'orange',name:'C12TF - Mile  13.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 0 })
GV_Draw_Marker({lat:43.07489,lon:-78.98762,color:'orange',name:'C12TF - Mile  14 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 207 })
GV_Draw_Marker({lat:43.0739,lon:-78.99705,color:'orange',name:'C12TF - Mile  14.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 273 })
GV_Draw_Marker({lat:43.07493,lon:-79.00667,color:'orange',name:'C12TF - Mile  15 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 292 })
GV_Draw_Marker({lat:43.07723,lon:-79.01597,color:'orange',name:'C12TF - Mile  15.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 282 })
GV_Draw_Marker({lat:43.07841,lon:-79.02533,color:'orange',name:'C12TF - Mile  16 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 279 })
GV_Draw_Marker({lat:43.07808,lon:-79.03521,color:'orange',name:'C12TF - Mile  16.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 269 })
GV_Draw_Marker({lat:43.0787,lon:-79.04484,color:'orange',name:'C12TF - Mile  17 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 322 })
GV_Draw_Marker({lat:43.0804,lon:-79.05339,color:'orange',name:'C12TF - Mile  17.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 284 })
GV_Draw_Marker({lat:43.08234,lon:-79.06247,color:'orange',name:'C12TF - Mile  18 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 334 })
GV_Draw_Marker({lat:43.08695,lon:-79.06807,color:'orange',name:'C12TF - Mile  18.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 11 })

t =  516 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">CT12 map coverage - 18.69 miles ( 12 )</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'gray'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  0.5 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[43.09734,-78.92733],[43.09734,-79.07973],[42.9431,-79.07973],[42.9431,-78.92733],[43.09734,-78.92733]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:41.94619,lon:-78.91888,color:''
,name:'North Country National Scenic Trail',desc:'NCT in Allegheny National Forest. For more information, see <a href="http://northcountrytrail.org/">NCNST</a>.<br /><br />Location: <b>41.9462, -78.9189  or N41 56.7713 W78 55.133</b>',icon:'Navaid, Violet',scale: 1.2, folder:'Other'});

t =  517 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">NCT Pennsylvania - 10.74 miles (Non-FLT)</span>'; trk_info[t]['desc'] = ''; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'maroon'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[41.89296,-78.8924],[41.89278,-78.89247],[41.89274,-78.89292],[41.89314,-78.89551],[41.89311,-78.89601],[41.89336,-78.89682],[41.89332,-78.89827],[41.89344,-78.89988],[41.89357,-78.90017],[41.89409,-78.90052],
[41.89643,-78.90045],[41.89708,-78.90071],[41.89848,-78.89957],[41.89914,-78.89987],[41.89953,-78.89983],[41.89962,-78.90024],[41.90004,-78.90096],[41.90067,-78.90111],[41.90141,-78.90092],[41.90198,-78.90122],
[41.90233,-78.90362],[41.9031,-78.90476],[41.90348,-78.90596],[41.90419,-78.90707],[41.90571,-78.90837],[41.90669,-78.90883],[41.90749,-78.91013],[41.90835,-78.91094],[41.90851,-78.91126],[41.90882,-78.91152],
[41.9094,-78.91166],[41.91003,-78.91217],[41.91051,-78.91285],[41.91093,-78.91319],[41.91137,-78.91406],[41.91175,-78.91448],[41.91205,-78.91447],[41.91257,-78.9149],[41.91316,-78.91496],[41.9128,-78.91658],
[41.91284,-78.91695],[41.91318,-78.91745],[41.91437,-78.91794],[41.91556,-78.91979],[41.91576,-78.92045],[41.9164,-78.92162],[41.91722,-78.9237],[41.91741,-78.92392],[41.91753,-78.92446],[41.91768,-78.92449],
[41.91774,-78.92512],[41.91814,-78.92565],[41.91816,-78.92603],[41.91887,-78.92763],[41.91918,-78.92716],[41.91928,-78.9256],[41.92003,-78.92471],[41.92075,-78.92127],[41.92112,-78.92147],[41.92223,-78.92313],
[41.92285,-78.92496],[41.92389,-78.92637],[41.92439,-78.92747],[41.92473,-78.92794],[41.92524,-78.9279],[41.92644,-78.92699],[41.92847,-78.9269],[41.92975,-78.92649],[41.92977,-78.92591],[41.92895,-78.9234],
[41.92872,-78.92142],[41.92886,-78.92113],[41.92989,-78.92161],[41.93105,-78.92284],[41.9322,-78.92367],[41.9333,-78.92319],[41.93424,-78.92352],[41.93558,-78.92358],[41.93802,-78.92288],[41.93857,-78.92373],
[41.93979,-78.9251],[41.94059,-78.92569],[41.94119,-78.92589],[41.94201,-78.926],[41.9446,-78.92579],[41.94604,-78.92512],[41.94657,-78.92514],[41.94621,-78.92534],[41.94696,-78.92494],[41.94741,-78.92498],
[41.94864,-78.9258],[41.94921,-78.92591],[41.95001,-78.9254],[41.95067,-78.92524],[41.95112,-78.92563],[41.9525,-78.92604],[41.95324,-78.92645],[41.95418,-78.92653],[41.95646,-78.9272],[41.95844,-78.92728],
[41.95856,-78.92719],[41.95846,-78.92522],[41.95826,-78.92482],[41.95872,-78.92275],[41.95903,-78.92202],[41.95958,-78.92135],[41.95985,-78.92141],[41.95992,-78.92176],[41.96013,-78.9217],[41.96065,-78.92088],
[41.96101,-78.92065],[41.96141,-78.91996],[41.96157,-78.92057],[41.96123,-78.9213],[41.96116,-78.92186],[41.96132,-78.92239],[41.96196,-78.92345],[41.96248,-78.9239],[41.9628,-78.92396],[41.96455,-78.9254],
[41.96603,-78.92624],[41.96688,-78.92586],[41.9668,-78.92564],[41.96712,-78.92541],[41.96736,-78.92481],[41.96758,-78.92343],[41.96918,-78.92114],[41.9695,-78.92031],[41.97054,-78.91917],[41.9714,-78.9186],
[41.97191,-78.91887],[41.97202,-78.91875],[41.97254,-78.91916],[41.97359,-78.92083],[41.97489,-78.92202],[41.97508,-78.92205],[41.97536,-78.9225],[41.97606,-78.92267],[41.97688,-78.92254],[41.97866,-78.92184],
[41.97908,-78.92195],[41.97929,-78.92224],[41.97989,-78.92257],[41.98053,-78.92346],[41.98134,-78.92429],[41.98174,-78.92506],[41.98252,-78.92532],[41.98304,-78.92485],[41.98322,-78.9241],[41.9836,-78.92376],
[41.98401,-78.92304],[41.98462,-78.9215],[41.98506,-78.92078],[41.98533,-78.91978],[41.98515,-78.91865],[41.98428,-78.91675],[41.98421,-78.91635],[41.98413,-78.91544],[41.98436,-78.9143],[41.98427,-78.91392],
[41.98447,-78.9136],[41.98444,-78.91306],[41.98331,-78.90868],[41.98326,-78.90561],[41.98271,-78.90283],[41.98246,-78.90238],[41.98223,-78.90089],[41.98239,-78.90046],[41.98261,-78.90071],[41.98305,-78.90082],
[41.9835,-78.90049]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:41.89469,lon:-78.90051,color:'maroon',name:'NCT Pennsylvania - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 1 })
GV_Draw_Marker({lat:41.90111,lon:-78.901,color:'maroon',name:'NCT Pennsylvania - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 11 })
GV_Draw_Marker({lat:41.9053,lon:-78.908,color:'maroon',name:'NCT Pennsylvania - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 328 })
GV_Draw_Marker({lat:41.91105,lon:-78.91344,color:'maroon',name:'NCT Pennsylvania - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 304 })
GV_Draw_Marker({lat:41.91529,lon:-78.91936,color:'maroon',name:'NCT Pennsylvania - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 311 })
GV_Draw_Marker({lat:41.91883,lon:-78.92753,color:'maroon',name:'NCT Pennsylvania - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 301 })
GV_Draw_Marker({lat:41.9221,lon:-78.92293,color:'maroon',name:'NCT Pennsylvania - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 312 })
GV_Draw_Marker({lat:41.92717,lon:-78.92696,color:'maroon',name:'NCT Pennsylvania - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 2 })
GV_Draw_Marker({lat:41.92924,lon:-78.92131,color:'maroon',name:'NCT Pennsylvania - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 341 })
GV_Draw_Marker({lat:41.93588,lon:-78.92349,color:'maroon',name:'NCT Pennsylvania - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 12 })
GV_Draw_Marker({lat:41.94227,lon:-78.92598,color:'maroon',name:'NCT Pennsylvania - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 3 })
GV_Draw_Marker({lat:41.94849,lon:-78.92569,color:'maroon',name:'NCT Pennsylvania - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 334 })
GV_Draw_Marker({lat:41.9554,lon:-78.92688,color:'maroon',name:'NCT Pennsylvania - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 348 })
GV_Draw_Marker({lat:41.95901,lon:-78.92206,color:'maroon',name:'NCT Pennsylvania - Mile  7 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 60 })
GV_Draw_Marker({lat:41.96273,lon:-78.92395,color:'maroon',name:'NCT Pennsylvania - Mile  7.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 353 })
GV_Draw_Marker({lat:41.96794,lon:-78.92292,color:'maroon',name:'NCT Pennsylvania - Mile  8 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 47 })
GV_Draw_Marker({lat:41.97327,lon:-78.92032,color:'maroon',name:'NCT Pennsylvania - Mile  8.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 310 })
GV_Draw_Marker({lat:41.97968,lon:-78.92246,color:'maroon',name:'NCT Pennsylvania - Mile  9 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 337 })
GV_Draw_Marker({lat:41.98459,lon:-78.92157,color:'maroon',name:'NCT Pennsylvania - Mile  9.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 62 })
GV_Draw_Marker({lat:41.98434,lon:-78.91267,color:'maroon',name:'NCT Pennsylvania - Mile  10 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 109 })
GV_Draw_Marker({lat:41.98279,lon:-78.90325,color:'maroon',name:'NCT Pennsylvania - Mile  10.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 105 })
GV_Draw_Marker({lat:43.08883,lon:-79.06631,color:''
,name:'Northern terminus of Conservation Trail',desc:'<p><b>Conservation Trail Terminus</b> - Connection via Niagara Recreation Trail (multi-use) to the Bruce Trail.</p> <p>The initial 4.3 miles of the Bruce Trail are displayed here.  To view the rest of the Bruce Trail or to purchase guidebook maps please visit <a href="http://www.brucetrail.org" target="_blank">The Bruce Trail Conservancy</a>.</p><p>Length of Bruce Trail: 559 miles <br />Length of Bruce Trail side trails: over 250 miles</p><br /><br />Location: <b>43.0888, -79.0663  or N43 5.3296 W79 3.9787</b>',icon:'Navaid, Violet',scale: 1.2, folder:'Other'});

t =  518 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">Bruce Trail - Niagara Section - 4.22 miles (Non-FLT)</span>'; trk_info[t]['desc'] = '<div Style="width:400px;margin-bottom:10px;"><hr>Bruce Trail - Niagara Section<hr></div>'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'maroon'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[43.14447,-79.11285],[43.14389,-79.11116],[43.14365,-79.11119],[43.14352,-79.10957],[43.1432,-79.10879],[43.1431,-79.10749],[43.14326,-79.10673],[43.14343,-79.10634],[43.14359,-79.10625],[43.14359,-79.10576],
[43.14309,-79.10347],[43.14282,-79.10359],[43.14259,-79.10283],[43.14218,-79.10268],[43.14243,-79.10197],[43.14247,-79.10135],[43.14557,-79.10105],[43.14656,-79.10121],[43.1467,-79.10103],[43.14728,-79.10123],
[43.14731,-79.10047],[43.14804,-79.10043],[43.14847,-79.10006],[43.14868,-79.09949],[43.14925,-79.09929],[43.15025,-79.09946],[43.15112,-79.09985],[43.15227,-79.09953],[43.15312,-79.09849],[43.15512,-79.09535],
[43.15519,-79.09461],[43.15546,-79.09409],[43.15522,-79.09407],[43.15513,-79.09379],[43.15531,-79.09296],[43.15576,-79.09178],[43.15644,-79.09093],[43.15635,-79.08982],[43.15652,-79.08976],[43.15656,-79.08884],
[43.1568,-79.08844],[43.15642,-79.08789],[43.1564,-79.08754],[43.1566,-79.08715],[43.15666,-79.08615],[43.15725,-79.08587],[43.15736,-79.08518],[43.15699,-79.08417],[43.15636,-79.08385],[43.1557,-79.08324],
[43.15565,-79.08257],[43.15592,-79.08183],[43.15595,-79.0809],[43.15532,-79.07823],[43.15544,-79.0756],[43.15502,-79.07496],[43.15497,-79.07454],[43.15515,-79.07319],[43.15547,-79.0724],[43.15554,-79.07159],
[43.15534,-79.07086],[43.15572,-79.06954],[43.15593,-79.06653],[43.15621,-79.06557],[43.15745,-79.06282],[43.15765,-79.06153],[43.15811,-79.06055],[43.15846,-79.05884],[43.15843,-79.05819],[43.15905,-79.05639],
[43.15888,-79.05522],[43.15863,-79.05461],[43.15846,-79.05272],[43.15804,-79.0513]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:43.14318,lon:-79.10392,color:'maroon',name:'Bruce Trail - Niagara Section - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 107 })
GV_Draw_Marker({lat:43.14696,lon:-79.10112,color:'maroon',name:'Bruce Trail - Niagara Section - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 346 })
GV_Draw_Marker({lat:43.15299,lon:-79.09865,color:'maroon',name:'Bruce Trail - Niagara Section - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 42 })
GV_Draw_Marker({lat:43.15644,lon:-79.0909,color:'maroon',name:'Bruce Trail - Niagara Section - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 96 })
GV_Draw_Marker({lat:43.15577,lon:-79.0833,color:'maroon',name:'Bruce Trail - Niagara Section - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 146 })
GV_Draw_Marker({lat:43.15505,lon:-79.0739,color:'maroon',name:'Bruce Trail - Niagara Section - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 80 })
GV_Draw_Marker({lat:43.15668,lon:-79.06454,color:'maroon',name:'Bruce Trail - Niagara Section - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 58 })
GV_Draw_Marker({lat:43.15891,lon:-79.0554,color:'maroon',name:'Bruce Trail - Niagara Section - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 101 })

t =  519 ; trk_info[t] = []; trk_info[t]['name'] = '<span style="color:black">Niagara Recreation Trail - 6.75 miles (Non-FLT)</span>'; trk_info[t]['desc'] = '<div Style="width:400px;margin-bottom:10px;"><hr>Length: 11.02 km (6.85 mi)<hr></div>'; trk_info[t]['clickable'] = true; trk_info[t]['color'] = 'maroon'; trk_info[t]['width'] =  2 ; trk_info[t]['opacity'] =  1 ; trk_info[t]['z_index'] = 50; trk_segments[t] = []; trk_segments[t].push({ points:[
[43.09133,-79.0695],[43.0923,-79.06798],[43.09247,-79.06794],[43.09274,-79.06764],[43.09429,-79.06678],[43.09597,-79.06687],[43.09639,-79.06674],[43.09669,-79.06633],[43.09707,-79.06592],[43.09757,-79.06566],
[43.09826,-79.06554],[43.09881,-79.06536],[43.09943,-79.06457],[43.10004,-79.06371],[43.10322,-79.06227],[43.10398,-79.06169],[43.1047,-79.06122],[43.10609,-79.06079],[43.10672,-79.06036],[43.10756,-79.05959],
[43.10822,-79.05953],[43.10896,-79.06],[43.1091,-79.05991],[43.11151,-79.06058],[43.11301,-79.06122],[43.11456,-79.06294],[43.11496,-79.0635],[43.11511,-79.06423],[43.11521,-79.0653],[43.1155,-79.06616],
[43.11579,-79.06669],[43.11671,-79.06775],[43.1174,-79.06865],[43.11771,-79.06938],[43.11795,-79.07064],[43.11953,-79.07375],[43.12205,-79.07725],[43.12237,-79.07751],[43.12271,-79.07815],[43.12304,-79.07837],
[43.1234,-79.07828],[43.12384,-79.07755],[43.12456,-79.07622],[43.12476,-79.07536],[43.12489,-79.07382],[43.12486,-79.07266],[43.12482,-79.07191],[43.12442,-79.07036],[43.12382,-79.0694],[43.12341,-79.06852],
[43.12357,-79.06805],[43.12396,-79.06738],[43.12507,-79.0656],[43.12589,-79.06405],[43.12814,-79.06184],[43.12839,-79.0621],[43.12904,-79.06144],[43.12962,-79.06051],[43.13142,-79.05914],[43.13283,-79.05796],
[43.13436,-79.05629],[43.13538,-79.05453],[43.13538,-79.05403],[43.13597,-79.05296],[43.13594,-79.05275],[43.13666,-79.05165],[43.13773,-79.04953],[43.13885,-79.04706],[43.13921,-79.0465],[43.14003,-79.0462],
[43.14098,-79.04552],[43.14219,-79.04521],[43.14324,-79.04487],[43.14786,-79.04498],[43.14985,-79.04601],[43.15011,-79.04622],[43.15013,-79.04642],[43.15019,-79.04685],[43.15061,-79.04742],[43.15089,-79.04719],
[43.15116,-79.04691],[43.15179,-79.04691],[43.15259,-79.047],[43.15529,-79.04706],[43.15575,-79.04736],[43.15662,-79.04843],[43.15716,-79.04914],[43.15786,-79.05009],[43.15842,-79.05034],[43.15913,-79.05021],
[43.1593,-79.0503],[43.16019,-79.04966],[43.16018,-79.05159],[43.15996,-79.05176],[43.15932,-79.05107]
 ] }); GV_Draw_Track(t);
GV_Draw_Marker({lat:43.09759,lon:-79.06566,color:'maroon',name:'Niagara Recreation Trail - Mile  0.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 8 })
GV_Draw_Marker({lat:43.10403,lon:-79.06166,color:'maroon',name:'Niagara Recreation Trail - Mile  1 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 26 })
GV_Draw_Marker({lat:43.11079,lon:-79.06036,color:'maroon',name:'Niagara Recreation Trail - Mile  1.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 349 })
GV_Draw_Marker({lat:43.1157,lon:-79.06652,color:'maroon',name:'Niagara Recreation Trail - Mile  2 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 306 })
GV_Draw_Marker({lat:43.11995,lon:-79.07432,color:'maroon',name:'Niagara Recreation Trail - Mile  2.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 315 })
GV_Draw_Marker({lat:43.12476,lon:-79.07536,color:'maroon',name:'Niagara Recreation Trail - Mile  3 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 84 })
GV_Draw_Marker({lat:43.1245,lon:-79.06653,color:'maroon',name:'Niagara Recreation Trail - Mile  3.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 49 })
GV_Draw_Marker({lat:43.12977,lon:-79.06039,color:'maroon',name:'Niagara Recreation Trail - Mile  4 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 29 })
GV_Draw_Marker({lat:43.13538,lon:-79.05438,color:'maroon',name:'Niagara Recreation Trail - Mile  4.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 90 })
GV_Draw_Marker({lat:43.13942,lon:-79.04643,color:'maroon',name:'Niagara Recreation Trail - Mile  5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 15 })
GV_Draw_Marker({lat:43.14646,lon:-79.04495,color:'maroon',name:'Niagara Recreation Trail - Mile  5.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 359 })
GV_Draw_Marker({lat:43.15284,lon:-79.047,color:'maroon',name:'Niagara Recreation Trail - Mile  6 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 359 })
GV_Draw_Marker({lat:43.1592,lon:-79.05025,color:'maroon',name:'Niagara Recreation Trail - Mile  6.5 ',icon:'tickmark',scale:0.9, folder:'TickMarks', rotation: 340 })
//LOC2-GPSVISend.txt
//location overlay

// end of data
				GV_Finish_Map();

			}
			GV_Map(); // execute the above code
		</script>
	</body>
</html>
 <div style='position:relative;width:100%;'>
<div style='position:absolute;top:250px; right:10px; height: 40px; width: 40px; z-index: 100;'><a href='Seg_WestFL.php' target='_self'>
<img src='Arrowright.gif' title='Next segment' alt='Next segment'/></a></div></div>
