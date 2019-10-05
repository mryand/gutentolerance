console.log('gutentolerance loaded');

/*
 * SIDEBAR CUSTOMIZATION
 * Customize the editor sidebar. Reference available methods in the Gutenberg Handbook...
 * https://wordpress.org/gutenberg/handbook/designers-developers/developers/data/data-core-edit-post/
 */

if (typeof wp.data !== 'undefined' && typeof wp.data.dispatch('core/edit-post') !== 'undefined') {
	const { toggleEditorPanelOpened } = wp.data.dispatch('core/edit-post');

	// Begin with the Page Attributes panel open
	toggleEditorPanelOpened('page-attributes');
}
