( function( api ) {

	// Extends our custom "cars-lite" section.
	api.sectionConstructor['cars-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );