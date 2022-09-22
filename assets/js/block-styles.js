wp.domReady(() => {
	wp.blocks.registerBlockStyle('core/query', [
		{
			name: 'featured-category-1',
			label: 'Featured Category 1'
		},
		{
			name: 'featured-category-2',
			label: 'Featured Category 2'
		}
	])
	wp.blocks.registerBlockStyle('core/spacer', [
		{
			name: 'responsive-small',
			label: 'Responsive Small',
			isDefault: true
		},
		{
			name: 'responsive-medium',
			label: 'Responsive Medium'
		},
		{
			name: 'responsive-large',
			label: 'Responsive Large'
		}
	])
	wp.blocks.registerBlockStyle('core/post-author', [
		{
			name: 'avatar-only',
			label: 'Avatar Only'
		}
	])
	wp.blocks.registerBlockStyle('core/paragraph', [
		{
			name: 'description',
			label: 'Description'
		}
	])
})
