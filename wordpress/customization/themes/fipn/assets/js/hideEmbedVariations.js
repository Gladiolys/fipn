const enabledEmbeds = [ 'youtube', 'twitter', 'facebook', 'instagram', 'tiktok', 'pinterest' ];

function unregisterDisallowVariants( blockName, allowVariationList ) {
	const embedBlock = wp.blocks.getBlockVariations( blockName );
	if ( embedBlock ) {
		embedBlock.forEach( function( el ) {
			if ( ! allowVariationList.includes( el.name ) ) {
				wp.blocks.unregisterBlockVariation( blockName, el.name );
			}
		} );
	}
}

wp.domReady( () => {
	unregisterDisallowVariants( 'core/embed', enabledEmbeds );
} );
