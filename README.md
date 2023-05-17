# Elementor-Popup-Scroll-Bug-Fix
A working but janky fix for Elementor's popup scroll bug. Drop the fix.php code into a code snippet or functions.php. 

This will work while also using the following to prevent x-axis overflow site wide:

/* Prevent X-Axis Overflow */
body, html {
	overflow-x: hidden;
}
