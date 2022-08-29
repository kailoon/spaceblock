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
	wp.blocks.registerBlockStyle('core/heading', [
		{
			name: 'has-icon',
			label: 'Has Icon'
		}
	])
	wp.blocks.registerBlockStyle('core/post-featured-image', [
		{
			name: 'circle',
			label: 'Circle'
		},
		{
			name: 'rounded',
			label: 'Rounded'
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
	wp.blocks.registerBlockStyle('core/columns', [
		{
			name: 'with-vertical-separator',
			label: 'With Vertical Separator'
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
